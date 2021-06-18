<?php

if (!$_POST["ip"] || !$_POST["root"] || !$_POST["option"] || !$_POST["cp_domain"]) {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
    exit();
}

$params = "";

if ((string)$_POST["option"] == "1") {
    if (!$_POST["cp_lang"] || !$_POST["cp_theme"] || !$_POST["cp_passwd"]) {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        exit();
    }
    $params = "\"". escapeshellarg(trim($_POST["option"])) ."\" \"". escapeshellarg(trim($_POST["cp_domain"])) ."\" \"". escapeshellarg(trim($_POST["cp_lang"])) ."\" \"". escapeshellarg(trim($_POST["cp_theme"])) ."\" \"". escapeshellarg(trim($_POST["cp_passwd"])) ."\"";
}
else if ((string)$_POST["option"] == "2") {
    if (!$_POST["mega_email"] || !$_POST["mega_password"]) {
        $_POST["mega_email"] = "";
        $_POST["mega_password"] = "";
    }
    $params = "\"". escapeshellarg(trim($_POST["option"])) ."\" \"". escapeshellarg(trim($_POST["cp_domain"])) ."\" \"". escapeshellarg(trim($_POST["mega_email"])) ."\" \"". escapeshellarg(trim($_POST["mega_password"])) ."\"";
}
else if ((string)$_POST["option"] == "3") {
    if (!$_POST["mega_email"] || !$_POST["mega_password"] || !$_POST["cp_backup"]) {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        exit();
    }
    $params = "\"". escapeshellarg(trim($_POST["option"])) ."\" \"". escapeshellarg(trim($_POST["cp_domain"])) ."\" \"config\" \"". escapeshellarg(trim($_POST["mega_email"])) ."\" \"". escapeshellarg(trim($_POST["mega_password"])) ."\" \"". escapeshellarg(trim($_POST["cp_backup"])) ."\"";
}
else if ((string)$_POST["option"] == "4") {
    if (!$_POST["cp_theme"]) {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        exit();
    }
    $params = "\"". escapeshellarg(trim($_POST["option"])) ."\" \"". escapeshellarg(trim($_POST["cp_domain"])) ."\" \"". escapeshellarg(trim($_POST["cp_theme"])) ."\" \"yes\"";
}
else if ((string)$_POST["option"] == "6") {
    if (!$_POST["cloudflare_email"] || !$_POST["cloudflare_api_key"]) {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        exit();
    }
    $params = "\"". escapeshellarg(trim($_POST["option"])) ."\" \"". escapeshellarg(trim($_POST["cp_domain"])) ."\" \"". escapeshellarg(trim($_POST["cloudflare_email"])) ."\" \"". escapeshellarg(trim($_POST["cloudflare_api_key"])) ."\"";
}
else {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
    exit();
}

$check_connect = "sshpass -p " . escapeshellarg(trim($_POST["root"])) . " ssh -oStrictHostKeyChecking=no -q -o ConnectTimeout=10 root@" . escapeshellarg(trim($_POST["ip"])) . " 'echo success'";

$command = "sshpass -p " . escapeshellarg(urldecode(trim($_POST["root"]))) . " ssh -oStrictHostKeyChecking=no root@" . escapeshellarg(trim($_POST["ip"])) . " 'apt-get -y -qq update; apt-get -y -qq install bash wget ca-certificates; yum install -y bash wget ca-certificates; dnf -y install bash wget ca-certificates; wget -T 10 --no-check-certificate -qO /usr/bin/cprs https://raw.githubusercontent.com/CinemaPress/CinemaPress/master/cinemapress.sh && chmod +x /usr/bin/cprs && echo " . $params . " >> /var/log/cinemapress.sh.log && /usr/bin/cprs " . $params . " >> /var/log/cinemapress.sh.log 2>&1' >/dev/null &";

$fp = @fsockopen($_POST["ip"], 22, $errno, $errstr, 2);
if ($fp) {
    $out_connect = shell_exec($check_connect);
    if (trim($out_connect) == "success") {
        exec($command);
        echo "OK";
    } else {
        echo "CONNECT";
    }
} else {
    echo "OFFLINE";
}