<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CinemaPress Installation | Установка | Instalación</title>
    <meta property="og:title" content="CinemaPress" />
    <meta name="description" content="CinemaPress" />
    <meta property="og:description" content="CinemaPress" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="CinemaPress">
    <meta name="application-name" content="CinemaPress">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#000000">
    <style>
        body,html{font-family:'Ubuntu Mono',monospace;color:#fff;text-align:center;min-width:530px}a{color:#fff;text-decoration:none;outline:0}a:hover{color:#0b0;cursor:pointer}input::-moz-focus-inner{border:0}.d{color:#000}.r{color:#b00}.g{color:#0b0}.b{color:#55f}.c{color:#0bb}.y{color:#bb0}.s{color:#555}.w{color:#fff}.l{color:#55f}.link:hover .w,.link:hover .s{color:#0b0;cursor:pointer}#connect,#params,#RUN,#msg{width:528px;margin:0 auto}#connect{margin-bottom:20px}#msg{margin-bottom:20px;line-height:28px}#connect input{border:0;border-bottom:2px #555 solid;background:#000;color:#fff;padding:5px 0;margin:0 auto;width:150px}#params input,#params select{border:0;background:#000;color:#fff;padding:0;margin:5px 0 0;width:510px;border-image:none;outline-offset:-2px;outline-color:transparent;box-shadow:none;-webkit-appearance:none;}input:active,input:focus,input:hover{outline:none}input::placeholder{color:#555}#RUN{margin-top:15px;text-align:right}#RUN span{background:#55f;color:#fff;padding:10px 25px;border-radius:0}#RUN span:hover{opacity:0.7;cursor:pointer}label{display:none}label{white-space:nowrap;overflow:hidden}#command a{color:#555}#command a:hover{color:#ccc}#progress{width:100%;background-color:#000;margin-top:5px;color:#fff}
    </style>
</head>
<body>
<script>
    (document.querySelectorAll('body, html'))
        .forEach(function (b) {
            b.style.background = '#' + ((window.location.hash
                ? window.location.hash.substring(1)
                : '').substring(2) || '000');});
</script>
<div class="languages">

</div>
<div id="command" style="display: none;">
    <span class="s">
        <a href="javascript:void(0)">root@vps</a>:~#&nbsp;<span class="w"></span><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i><br><br>
    </span>
</div>
<div id="logo" style="display: none">
    <span class="g"><span class="l">------------------------------------------------------------------</span><br>
&nbsp;&nbsp;&nbsp;<span class="c">_______</span>&nbsp;_&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c">______</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;<span class="c">(_______</span>|_)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c">(_____&nbsp;\</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<span class="c">_</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_&nbsp;____&nbsp;&nbsp;_____&nbsp;____&nbsp;&nbsp;_____&nbsp;<span class="c">_____)&nbsp;)</span>___&nbsp;_____&nbsp;&nbsp;___&nbsp;&nbsp;___&nbsp;&nbsp;<br>
&nbsp;&nbsp;<span class="c">|&nbsp;|</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;|&nbsp;&nbsp;_&nbsp;\|&nbsp;___&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;\(____&nbsp;<span class="c">|&nbsp;&nbsp;____/</span>&nbsp;___)&nbsp;___&nbsp;|/___)/___)&nbsp;<br>
&nbsp;&nbsp;<span class="c">|&nbsp;|_____</span>|&nbsp;|&nbsp;|&nbsp;|&nbsp;|&nbsp;____|&nbsp;|&nbsp;|&nbsp;/&nbsp;___&nbsp;<span class="c">|&nbsp;|</span>&nbsp;&nbsp;&nbsp;|&nbsp;|&nbsp;&nbsp;&nbsp;|&nbsp;____|___&nbsp;|___&nbsp;|&nbsp;<br>
&nbsp;&nbsp;&nbsp;<span class="c">\______)</span>_|_|&nbsp;|_|_____)_|_|_\_____<span class="c">|_|</span>&nbsp;&nbsp;&nbsp;|_|&nbsp;&nbsp;&nbsp;|_____|___/(___/&nbsp;&nbsp;<br><br>
    </span>
</div>
<div id="options" style="display: none">
    <span class="b" id="CHOICE">
        <span class="b"></span><br>
        ----&nbsp;<span class="link" id="install"></span>&nbsp;----<br>
        ----&nbsp;<span class="link" id="update"></span>&nbsp;----<br>
        ----&nbsp;<span class="link" id="backup"></span>&nbsp;----<br>
        ----&nbsp;<span class="link" id="theme"></span>&nbsp;----<br>
        <!-- ----&nbsp;<span class="link" id="database"></span>&nbsp;----<br> -->
        ----&nbsp;<span class="link" id="https"></span>&nbsp;----<br>
        <!-- ----&nbsp;<span class="link" id="mirror"></span>&nbsp;----<br> -->
        ----&nbsp;<span class="link" id="remove"></span>&nbsp;----<br>
        <span class="l">------------------------------------------------------------------</span><br>
    </span>
</div>
<div id="connect" style="display: none">
    IP: <input type="text" placeholder="ip vps server" name="ip">
    ROOT: <input type="text" placeholder="root password" name="root">
</div>
<div id="msg" style="display: none"></div>
<div id="params" style="display: none">
    <label id="CP_DOMAIN">
        <span class="b"></span><br>
        : <input type="text" name="CP_DOMAIN" autocomplete="off">
    </label>
    <label id="CP_LANG">
        <span class="b"></span><br>
        : <select name="CP_LANG"><option value="ru">ru</option><option value="en">en</option></select>
    </label>
    <label id="CP_THEME">
        <span class="b"></span><br>
        : <select name="CP_THEME"><option value="hodor">hodor</option><option value="sansa">sansa</option><option value="robb">robb</option><option value="ramsay">ramsay</option><option value="tyrion">tyrion</option><option value="cersei">cersei</option><option value="joffrey">joffrey</option><option value="drogo">drogo</option><option value="bran">bran</option><option value="arya">arya</option><option value="mormont">mormont</option><option value="tarly">tarly</option><option value="daenerys">daenerys</option><option value="tormund">tormund</option><option value="snow">snow</option></select>
    </label>
    <label id="CP_ADMIN">
        <span class="b"></span><br>
        : <input type="text" name="CP_ADMIN" autocomplete="off">
    </label>
    <label id="CP_USERNAME">
        <span class="b"></span><br>
        : <input type="text" name="CP_USERNAME" value="admin" autocomplete="off">
    </label>
    <label id="CP_PASSWD">
        <span class="b"></span><br>
        : <input type="text" name="CP_PASSWD" autocomplete="off">
    </label>
    <label id="CP_MIRROR">
        <span class="b"></span><br>
        : <input type="text" name="CP_MIRROR" autocomplete="off">
    </label>
    <label id="CP_KEY">
        <span class="b"></span><br>
        : <input type="text" name="CP_KEY" autocomplete="off">
    </label>
    <label id="CLOUDFLARE_EMAIL">
        <span class="b"></span><br>
        : <input type="text" name="CLOUDFLARE_EMAIL" autocomplete="off">
    </label>
    <label id="CLOUDFLARE_API_KEY">
        <span class="b"></span><br>
        : <input type="text" name="CLOUDFLARE_API_KEY" autocomplete="off">
    </label>
    <label id="MEGA_EMAIL">
        <span class="b"></span><br>
        : <input type="text" name="MEGA_EMAIL" autocomplete="off">
    </label>
    <label id="MEGA_PASSWORD">
        <span class="b"></span><br>
        : <input type="text" name="MEGA_PASSWORD" autocomplete="off">
    </label>
    <label id="CP_BACKUP">
        <span class="b"></span><br>
        : <select name="CP_BACKUP"><option value="create">create</option><option value="restore">restore</option></select>
    </label>
    <span class="l">------------------------------------------------------------------</span><br>
    <div id="progress" style="display: none;">&nbsp;&nbsp;<span id="seconds">0000</span>&nbsp;sec&nbsp;&nbsp;<span id="lattice"><span class="r">.............</span><span class="y">............</span><span class="c">............</span><span class="g">............</span></span>&nbsp;<span id="percent" class="g">&nbsp;&nbsp;&nbsp;%</span></div>
    <div id="RUN">
        <span>Run</span>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    document.querySelector('[name="CP_BACKUP"]').value = 'create';
    var themes = 'hodor|sansa|robb|ramsay|tyrion|cersei|joffrey|drogo|bran|arya|mormont|tarly|daenerys|tormund|snow'.split('|');
    var hash = window.location.hash ? window.location.hash.substring(1) : '';
    var language = hash.substring(0,2) || window.navigator.userLanguage || window.navigator.language;
    let bg = hash.substring(2) || '000';
    var option = '';
    var print = {};
    var st;

    var bgs = document.querySelectorAll('body, html, #connect input, #params input, #params select, #progress');
    bgs.forEach(function (b) {b.style.background = '#' + bg;});

    var locales = ['ru','en','es','de','fr','ja','pt','it','zh','pl','nl','tr','cs','ko','vi','sv','hu','el','ro','sk','da','id','fi','th','bg','uk','ar','sq','lt','hr','sr','bn','sl','et','lv','hi','sw'];
    var translates = {
        "en": {
            "CHOICE": "MAKE A CHOICE",
            "CP_DOMAIN": "DOMAIN NAME OR IP",
            "CP_LANG": "WEBSITE LANGUAGE",
            "CP_THEME": "WEBSITE THEME",
            "CP_PASSWD": "PASSWORD ADMIN PANEL",
            "CP_MIRROR": "MIRROR WEBSITE",
            "CP_KEY": "DATABASE KEY",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Create Movies / TV Website",
            "update": "Upgrade CinemaPress System",
            "backup": "Backup System Master Data",
            "theme": "Install / Update Website Template",
            "database": "Import All Movies In The World",
            "https": "Getting Wildcard SSL Certificate",
            "mirror": "Moving To New Domain",
            "remove": "Uninstall Website",
            "ip": "ip vps server",
            "root": "root password",
            "RUN": "Run",
            "OK": "Running",
            "CONNECT": "IP or password is incorrect!",
            "OFFLINE": "Your VPS is not activated!",
            "TIME": "Wait 60 sec and retry the request!",
            "removing": "Removing only through the terminal!",
            "connecting": "Connecting"
        },
        "ru": {
            "CHOICE": "СДЕЛАЙТЕ ВЫБОР",
            "CP_DOMAIN": "ДОМЕННОЕ ИМЯ ИЛИ IP",
            "CP_LANG": "ЯЗЫК ВЕБ-САЙТА",
            "CP_THEME": "ШАБЛОН ВЕБ-САЙТА",
            "CP_PASSWD": "ПАРОЛЬ АДМИН-ПАНЕЛИ",
            "CP_MIRROR": "ЗЕРКАЛО ВЕБ-САЙТА",
            "CP_KEY": "КЛЮЧ БАЗЫ ДАННЫХ",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA ПАРОЛЬ",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "URL АДМИН-ПАНЕЛИ",
            "CP_USERNAME": "ИМЯ ПОЛЬЗОВАТЕЛЯ",
            "install": "Создать киносайт / онлайн кинотеатр",
            "update": "Обновить систему CinemaPress",
            "backup": "Резервное копирование основных данных",
            "theme": "Установить / обновить шаблон веб-сайта",
            "database": "Импорт всех фильмов в мире",
            "https": "Получение Wildcard SSL-сертификата",
            "mirror": "Переехать на другой домен",
            "remove": "Удалить веб-сайт",
            "ip": "ip vps сервера",
            "root": "root пароль",
            "RUN": "Запустить",
            "OK": "Запущено",
            "CONNECT": "IP или пароль указаны неверно!",
            "OFFLINE": "Ваш VPS еще не активирован!",
            "TIME": "Подождите 60 сек и повторите запрос!",
            "removing": "Удаление только через терминал!",
            "connecting": "Соединение"
        },
        "es": {
            "CHOICE": "HACER UNA ELECCIÓN",
            "CP_DOMAIN": "NOMBRE DE DOMINIO O IP",
            "CP_LANG": "UN SITIO WEB",
            "CP_THEME": "PLANTILLA DE PÁGINA WEB",
            "CP_PASSWD": "CONTRASEÑA DE ADMINISTRADOR",
            "CP_MIRROR": "SITIO WEB ESPEJO",
            "CP_KEY": "BASE DE DATOS CLAVE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Crear sitios web de película de cine / en línea",
            "update": "sistema de actualización CinemaPress",
            "backup": "Copia de seguridad de datos maestros",
            "theme": "Instalar / Actualizar la plantilla de página web",
            "database": "Las importaciones de todas las películas en el mundo",
            "https": "Conseguir Comodín SSL Certificado",
            "mirror": "Para mover a un dominio diferente",
            "remove": "eliminar página web",
            "ip": "servidor VPS ip",
            "root": "la contraseña de root",
            "RUN": "comienzo",
            "OK": "comenzado",
            "CONNECT": "IP o la contraseña es incorrecta!",
            "OFFLINE": "Su VPS aún no ha sido activada!",
            "TIME": "Espere 60 segundos y tratar la solicitud de nuevo!",
            "removing": "Remover sólo a través del terminal!",
            "connecting": "compuesto"
        },
        "de": {
            "CHOICE": "MACHEN SIE EINE AUSWAHL",
            "CP_DOMAIN": "DOMAIN-NAMEN ODER IP",
            "CP_LANG": "WEBSITE-SPRACHE",
            "CP_THEME": "WEBSITE TEMPLATE",
            "CP_PASSWD": "KENNWORT ADMIN",
            "CP_MIRROR": "SPIEGEL WEBSITE",
            "CP_KEY": "KEY DATABASE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Film erstellen Websites / Online-Kino",
            "update": "Update CinemaPress System",
            "backup": "Backup-Stammdaten",
            "theme": "Install / Update-Website-Templates",
            "database": "Die Einfuhr aller Filme in der Welt",
            "https": "Wildcard SSL-Zertifikat erhalten",
            "mirror": "So verschieben Sie zu einer anderen Domäne",
            "remove": "löschen Website",
            "ip": "ip vps Server",
            "root": "das root-Passwort",
            "RUN": "Start",
            "OK": "gestartet",
            "CONNECT": "IP oder Passwort falsch!",
            "OFFLINE": "Ihr VPS hat noch nicht aktiviert!",
            "TIME": "Warten Sie 60 Sekunden und versuchen, erneut die Anfrage!",
            "removing": "Entfernen nur durch den Anschluss!",
            "connecting": "Verbindung"
        },
        "fr": {
            "CHOICE": "FAITES UN CHOIX",
            "CP_DOMAIN": "NOM OU IP DOMAINE",
            "CP_LANG": "SITE DE LA LANGUE",
            "CP_THEME": "MODÈLE DE SITE WEB",
            "CP_PASSWD": "MOT DE PASSE ADMINISTRATEUR",
            "CP_MIRROR": "SITE MIROIR",
            "CP_KEY": "BASE DE DONNÉES CLÉS",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Créer des sites de cinéma / cinéma en ligne",
            "update": "Mise à jour système CinemaPress",
            "backup": "Sauvegarde des données de base",
            "theme": "Installation / mise à jour modèle de site Web",
            "database": "Les importations de tous les films dans le monde",
            "https": "Obtenir Wildcard SSL Certificate",
            "mirror": "Pour passer à un autre domaine",
            "remove": "supprimer site web",
            "ip": "ip serveur vps",
            "root": "le mot de passe root",
            "RUN": "début",
            "OK": "commencé",
            "CONNECT": "IP ou mot de passe est incorrect!",
            "OFFLINE": "Votre VPS n'a pas encore été activé!",
            "TIME": "Attendez 60 secondes et essayez à nouveau la demande!",
            "removing": "Retrait seulement par le terminal!",
            "connecting": "composé"
        },
        "ja": {
            "CHOICE": "選択してください",
            "CP_DOMAIN": "ドメイン名またはIP",
            "CP_LANG": "言語ウェブサイト",
            "CP_THEME": "ウェブサイトのテンプレート",
            "CP_PASSWD": "パスワードADMIN",
            "CP_MIRROR": "MIRRORウェブサイト",
            "CP_KEY": "KEY DATABASE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "動画のウェブサイトを作成/オンライン映画",
            "update": "更新CinemaPressシステム",
            "backup": "バックアップマスタデータ",
            "theme": "/ Update Webサイトのテンプレートをインストールします。",
            "database": "世界のすべての映画の輸入",
            "https": "ワイルドカードSSL証明書の取得",
            "mirror": "別のドメインに移動するには",
            "remove": "ウェブサイトの削除",
            "ip": "IPのVPSサーバー",
            "root": "rootパスワード",
            "RUN": "スタート",
            "OK": "開始",
            "CONNECT": "IPまたはパスワードが正しくありません！",
            "OFFLINE": "あなたのVPSは、まだ起動していません！",
            "TIME": "60秒待ってから、要求を再試行してください！",
            "removing": "唯一の端子を介して削除！",
            "connecting": "化合物"
        },
        "pt": {
            "CHOICE": "FAÇA UMA ESCOLHA",
            "CP_DOMAIN": "NOME DE DOMÍNIO OU IP",
            "CP_LANG": "IDIOMA DO SITE",
            "CP_THEME": "WEBSITE TEMPLATE",
            "CP_PASSWD": "SENHA DE ADMINISTRADOR",
            "CP_MIRROR": "SITE MIRROR",
            "CP_KEY": "BANCO DE DADOS CHAVE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Criar sites de cinema / cinema on-line",
            "update": "sistema de atualização CinemaPress",
            "backup": "Dados mestre de backup",
            "theme": "Instalar / Atualizar modelo de site",
            "database": "As importações de todos os filmes do mundo",
            "https": "Obtendo Wildcard SSL-Certificate",
            "mirror": "Para mover para um domínio diferente",
            "remove": "excluir website",
            "ip": "servidor VPS ip",
            "root": "a senha de root",
            "RUN": "começo",
            "OK": "começado",
            "CONNECT": "IP ou senha está incorreta!",
            "OFFLINE": "O seu VPS ainda não foi ativado!",
            "TIME": "Aguarde 60 segundos e tente novamente o pedido!",
            "removing": "Removendo apenas através do terminal!",
            "connecting": "composto"
        },
        "it": {
            "CHOICE": "FAI UNA SCELTA",
            "CP_DOMAIN": "NOME DI DOMINIO O IP",
            "CP_LANG": "LINGUA DEL SITO",
            "CP_THEME": "SITO WEB TEMPLATE",
            "CP_PASSWD": "PASSWORD ADMIN",
            "CP_MIRROR": "MIRROR SITO",
            "CP_KEY": "DATABASE DI CHIAVI",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Creare siti web film / cinema on-line",
            "update": "sistema di aggiornamento CinemaPress",
            "backup": "Master Data Backup",
            "theme": "Installa / Aggiorna il modello di sito web",
            "database": "Le importazioni di tutti i film in tutto il mondo",
            "https": "Ottenere jolly SSL-Certificate",
            "mirror": "Per passare a un dominio diverso",
            "remove": "Elimina sito",
            "ip": "del server VPS ip",
            "root": "la password di root",
            "RUN": "inizio",
            "OK": "iniziato",
            "CONNECT": "IP o password non sono corretti!",
            "OFFLINE": "Il tuo VPS non è ancora stato attivato!",
            "TIME": "Attendere 60 secondi e riprovare la richiesta!",
            "removing": "Rimozione solo attraverso il terminale!",
            "connecting": "composto"
        },
        "zh": {
            "CHOICE": "取舍",
            "CP_DOMAIN": "域名或IP",
            "CP_LANG": "语种网站",
            "CP_THEME": "网站模板",
            "CP_PASSWD": "密码ADMIN",
            "CP_MIRROR": "MIRROR网站",
            "CP_KEY": "密钥数据库",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "创建电影网站/在线影院",
            "update": "更新CinemaPress系统",
            "backup": "备份主数据",
            "theme": "安装/更新网站模板",
            "database": "世界上所有电影的进口",
            "https": "获取通配符SSL证书",
            "mirror": "要移动到不同的域",
            "remove": "删除网站",
            "ip": "IP VPS服务器",
            "root": "root密码",
            "RUN": "启动",
            "OK": "开始",
            "CONNECT": "IP或密码不正确！",
            "OFFLINE": "您的VPS还没有被激活！",
            "TIME": "等待60秒钟，然后再次尝试请求！",
            "removing": "卸下只有通过终端！",
            "connecting": "复合"
        },
        "pl": {
            "CHOICE": "DOKONAĆ WYBORU",
            "CP_DOMAIN": "NAZWA DOMENY LUB IP",
            "CP_LANG": "JĘZYK STRONY",
            "CP_THEME": "SZABLON STRONY INTERNETOWEJ",
            "CP_PASSWD": "HASŁO ADMINISTRATORA",
            "CP_MIRROR": "MIRROR INTERNETOWA",
            "CP_KEY": "KEY DATABASE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Tworzenie stron internetowych film / kino Internecie",
            "update": "Aktualizacja systemu CinemaPress",
            "backup": "Backup Master Data",
            "theme": "Install / Update, szablon strony internetowej",
            "database": "Przywóz wszystkich filmów na świecie",
            "https": "Pierwsze Wildcard SSL certyfikat",
            "mirror": "Aby przejść do innej domeny",
            "remove": "Usuń witrynę",
            "ip": "Serwer VPS ip",
            "root": "hasło roota",
            "RUN": "początek",
            "OK": "rozpoczęty",
            "CONNECT": "IP lub hasło jest nieprawidłowe!",
            "OFFLINE": "VPS nie został jeszcze aktywowany!",
            "TIME": "Odczekaj 60 sekund i spróbuj ponowić żądanie!",
            "removing": "Usuwanie tylko przez terminal!",
            "connecting": "mieszanka"
        },
        "nl": {
            "CHOICE": "MAAK EEN KEUZE",
            "CP_DOMAIN": "DOMEINNAAM OF IP",
            "CP_LANG": "TAAL WEBSITE",
            "CP_THEME": "WEBSITE TEMPLATE",
            "CP_PASSWD": "PASSWORD ADMIN",
            "CP_MIRROR": "MIRROR SITE",
            "CP_KEY": "KEY DATABASE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Film maken websites / online cinema",
            "update": "Update CinemaPress systeem",
            "backup": "Backup Master Data",
            "theme": "Installeer / bijwerken website template",
            "database": "De invoer van alle films in de wereld",
            "https": "Getting Wildcard SSL-certificaat",
            "mirror": "Om naar een ander domein",
            "remove": "Verwijder website",
            "ip": "ip vps server",
            "root": "het root-wachtwoord",
            "RUN": "begin",
            "OK": "begonnen",
            "CONNECT": "IP of wachtwoord is onjuist!",
            "OFFLINE": "Uw VPS is nog niet geactiveerd!",
            "TIME": "Wacht 60 seconden en probeer het verzoek opnieuw!",
            "removing": "Het verwijderen van alleen via de terminal!",
            "connecting": "samenstelling"
        },
        "tr": {
            "CHOICE": "BIR SEÇIM YAP",
            "CP_DOMAIN": "ALAN ADI VEYA IP",
            "CP_LANG": "DİL WEB",
            "CP_THEME": "TEMPLATE SITESI",
            "CP_PASSWD": "ŞİFRE YÖNETICI",
            "CP_MIRROR": "AYNA WEB",
            "CP_KEY": "ANAHTAR VERİTABANI",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Sinema web siteleri oluşturma / Online sinema",
            "update": "Güncelleme CinemaPress sistemi",
            "backup": "Yedekleme Ana Veri",
            "theme": "/ Update web sitesi şablonu yükleyin",
            "database": "Dünyadaki bütün filmlerin ithalatı",
            "https": "Wildcard SSL-Sertifikası alma",
            "mirror": "farklı bir etki alanına taşımak için",
            "remove": "Web sitesini sil",
            "ip": "ip VPS Sunucu",
            "root": "kök şifresi",
            "RUN": "başlangıç",
            "OK": "başladı",
            "CONNECT": "IP veya şifre yanlış!",
            "OFFLINE": "Sizin VPS henüz aktif değil!",
            "TIME": "60 saniye bekleyin ve isteği tekrar deneyin!",
            "removing": "Sadece terminal üzerinden Çıkarma!",
            "connecting": "bileşik"
        },
        "cs": {
            "CHOICE": "ROZHODNOUT SE",
            "CP_DOMAIN": "DOMÉNOVÉ JMÉNO NEBO IP",
            "CP_LANG": "INTERNETOVÉ STRÁNKY JAZYKA",
            "CP_THEME": "WEBOVÉ STRÁNKY ŠABLONA",
            "CP_PASSWD": "HESLO SPRÁVCE",
            "CP_MIRROR": "MIRROR STRÁNKY",
            "CP_KEY": "KEY DATABÁZE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Vytvoření Movie webové stránky / online kino",
            "update": "Systém aktualizace CinemaPress",
            "backup": "Backup Master Data",
            "theme": "Instalovat / aktualizovat webové stránky šablony",
            "database": "Dovoz ze všech filmů na světě",
            "https": "Získání zástupných SSL-certifikátu",
            "mirror": "Pro pohyb do jiné domény",
            "remove": "Odstranit web",
            "ip": "ip server VPS",
            "root": "heslo uživatele root",
            "RUN": "start",
            "OK": "zahájena",
            "CONNECT": "IP nebo heslo není správné!",
            "OFFLINE": "Váš VPS dosud nebyl aktivován!",
            "TIME": "Počkejte 60 sekund a zkuste požadavek znovu!",
            "removing": "Vyjmutí pouze prostřednictvím terminálu!",
            "connecting": "sloučenina"
        },
        "ko": {
            "CHOICE": "선택을",
            "CP_DOMAIN": "도메인 이름 또는 IP",
            "CP_LANG": "언어 웹 사이트",
            "CP_THEME": "웹 사이트 템플릿",
            "CP_PASSWD": "PASSWORD 관리",
            "CP_MIRROR": "MIRROR 웹 사이트",
            "CP_KEY": "KEY DATABASE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "영화 웹 사이트 만들기 / 온라인 영화",
            "update": "업데이트 CinemaPress 시스템",
            "backup": "백업 마스터 데이터",
            "theme": "/ 업데이트 웹 사이트 템플릿 설치",
            "database": "세상의 모든 영화의 수입",
            "https": "와일드 카드 SSL - 인증서 가져 오기",
            "mirror": "다른 도메인으로 이동하려면",
            "remove": "웹 사이트 삭제",
            "ip": "의 IP VPS 서버",
            "root": "루트 암호",
            "RUN": "출발",
            "OK": "시작",
            "CONNECT": "IP 또는 암호가 올바르지 않습니다!",
            "OFFLINE": "귀하의 VPS는 아직 활성화되지 않았습니다!",
            "TIME": "60 초 정도 기다린 후 요청을 다시 시도하십시오!",
            "removing": "전용 단말기를 통해 분리!",
            "connecting": "화합물"
        },
        "vi": {
            "CHOICE": "THỰC HIỆN MỘT LỰA CHỌN",
            "CP_DOMAIN": "TÊN MIỀN HOẶC IP",
            "CP_LANG": "NGÔN NGỮ WEBSITE",
            "CP_THEME": "MẪU WEBSITE",
            "CP_PASSWD": "MẬT KHẨU QUẢN TRỊ",
            "CP_MIRROR": "MIRROR WEBSITE",
            "CP_KEY": "DATABASE KEY",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Tạo phim trang web / rạp chiếu phim trực tuyến",
            "update": "hệ thống Cập nhật CinemaPress",
            "backup": "Dữ liệu tổng thể sao lưu",
            "theme": "Cài đặt / Cập nhật trang web mẫu",
            "database": "Nhập khẩu của tất cả các bộ phim trên thế giới",
            "https": "Bắt Wildcard SSL Certificate",
            "mirror": "Để di chuyển đến một tên miền khác",
            "remove": "xóa trang web",
            "ip": "vps ip máy chủ",
            "root": "mật khẩu gốc",
            "RUN": "bắt đầu",
            "OK": "bắt đầu",
            "CONNECT": "IP hoặc mật khẩu không đúng!",
            "OFFLINE": "VPS của bạn chưa được kích hoạt!",
            "TIME": "Đợi 60 giây và cố gắng yêu cầu một lần nữa!",
            "removing": "Loại bỏ chỉ thông qua các thiết bị đầu cuối!",
            "connecting": "phức tạp"
        },
        "sv": {
            "CHOICE": "GÖR ETT VAL",
            "CP_DOMAIN": "DOMÄNNAMN ELLER IP",
            "CP_LANG": "SPRÅKIGA WEBBSIDOR",
            "CP_THEME": "WEBBPLATS MALL",
            "CP_PASSWD": "LÖSENORD ADMIN",
            "CP_MIRROR": "MIRROR HEMSIDA",
            "CP_KEY": "NYCKELDATABAS",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Skapa film webbplatser / online-bio",
            "update": "Uppdatera CinemaPress systemet",
            "backup": "Backup Master Data",
            "theme": "Installera / uppdatera webbplats mall",
            "database": "Import av alla filmer i världen",
            "https": "Få Wildcard SSL-certifikat",
            "mirror": "För att flytta till en annan domän",
            "remove": "Ta bort webbplats",
            "ip": "ip VPS server",
            "root": "root-lösenordet",
            "RUN": "Start",
            "OK": "började",
            "CONNECT": "IP eller lösenord är felaktigt!",
            "OFFLINE": "Din VPS har ännu inte aktiverad",
            "TIME": "Vänta 60 sekunder och försök igen!",
            "removing": "Ta bort endast genom terminalen!",
            "connecting": "förening"
        },
        "hu": {
            "CHOICE": "HOGY A VÁLASZTÁS",
            "CP_DOMAIN": "DOMAIN NÉV VAGY IP",
            "CP_LANG": "NYELVŰ HONLAP",
            "CP_THEME": "WEBOLDAL SABLON",
            "CP_PASSWD": "PASSWORD ADMIN",
            "CP_MIRROR": "MIRROR WEBOLDAL",
            "CP_KEY": "KULCSADATBÁZISBAN",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Film létrehozása honlapok / online mozi",
            "update": "Frissítés CinemaPress rendszer",
            "backup": "Hát törzsadatok",
            "theme": "Telepítés / Frissítés honlap sablon",
            "database": "Behozatala az összes film a világon",
            "https": "Első Helyettesítő SSL-tanúsítvány",
            "mirror": "Mozgatni egy másik tartományban",
            "remove": "Törlés honlapján",
            "ip": "ip VPS szerver",
            "root": "A root jelszó",
            "RUN": "kezdet",
            "OK": "indult",
            "CONNECT": "IP vagy jelszó helytelen!",
            "OFFLINE": "A VPS még nincs aktiválva!",
            "TIME": "Várjon 60 másodpercig, majd próbálja újra a kérelmet!",
            "removing": "Eltávolítása csak terminálon keresztül!",
            "connecting": "összetett"
        },
        "el": {
            "CHOICE": "ΚΆΝΤΕ ΜΙΑ ΕΠΙΛΟΓΉ",
            "CP_DOMAIN": "ΌΝΟΜΑ ΤΟΜΈΑ Ή IP",
            "CP_LANG": "ΓΛΩΣΣΑ ΙΣΤΟΣΕΛΙΔΑ",
            "CP_THEME": "ΠΡΌΤΥΠΟ ΙΣΤΟΣΕΛΊΔΑ",
            "CP_PASSWD": "ΚΩΔΙΚΌ ΠΡΌΣΒΑΣΗΣ ΔΙΑΧΕΙΡΙΣΤΉ",
            "CP_MIRROR": "MIRROR ΙΣΤΟΣΕΛΙΔΑ",
            "CP_KEY": "ΚΛΕΙΔΊ ΒΆΣΗΣ ΔΕΔΟΜΈΝΩΝ",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Δημιουργία ιστοσελίδων Ταινία / σε απευθείας σύνδεση κινηματογράφο",
            "update": "Σύστημα Ενημέρωση CinemaPress",
            "backup": "Δημιουργία αντιγράφων ασφαλείας Δεδομένα Βασικού Αρχείου",
            "theme": "Εγκατάσταση / Ενημέρωση προτύπου ιστοσελίδας",
            "database": "Οι εισαγωγές όλων των ταινιών στον κόσμο",
            "https": "Να πάρει Μπαλαντέρ SSL Πιστοποιητικό",
            "mirror": "Για να μετακινηθείτε σε διαφορετικό τομέα",
            "remove": "Διαγραφή ιστοσελίδα",
            "ip": "διακομιστή VPS ip",
            "root": "ο κωδικός πρόσβασης root",
            "RUN": "αρχή",
            "OK": "ξεκίνησε",
            "CONNECT": "IP ή ο κωδικός πρόσβασης είναι λάθος!",
            "OFFLINE": "VPS σας δεν έχει ακόμη ενεργοποιηθεί!",
            "TIME": "Περιμένετε 60 δευτερόλεπτα και προσπαθούν το αίτημα και πάλι!",
            "removing": "Αφαίρεση μόνο μέσω του τερματικού!",
            "connecting": "χημική ένωση"
        },
        "ro": {
            "CHOICE": "FACEȚI O ALEGERE",
            "CP_DOMAIN": "NUME DE DOMENIU SAU IP",
            "CP_LANG": "LIMBA SITE",
            "CP_THEME": "ȘABLON DE SITE",
            "CP_PASSWD": "PAROLA ADMIN",
            "CP_MIRROR": "SITE MIRROR",
            "CP_KEY": "BAZA DE DATE CHEIE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Creare site-uri web / Cinematograf on-line",
            "update": "Sistemul de actualizare CinemaPress",
            "backup": "Backup de date master",
            "theme": "Instalare / Actualizare șablon de site",
            "database": "Importurile de toate filmele din lume",
            "https": "Noțiuni de bază Wildcard SSL Certificat",
            "mirror": "Pentru a trece la un alt domeniu",
            "remove": "ştergeţi site-ul",
            "ip": "VPS server ip",
            "root": "parola de root",
            "RUN": "start",
            "OK": "a început",
            "CONNECT": "IP sau parola este incorectă!",
            "OFFLINE": "VPS dvs. nu a fost încă activat!",
            "TIME": "Așteptați 60 de secunde și încercați din nou solicitarea!",
            "removing": "Scoaterea numai prin intermediul terminalului!",
            "connecting": "compus"
        },
        "sk": {
            "CHOICE": "ROZHODNÚŤ SA",
            "CP_DOMAIN": "DOMÉNOVÉ MENO ALEBO IP",
            "CP_LANG": "INTERNETOVÉ STRÁNKY JAZYKA",
            "CP_THEME": "WEBOVÉ STRÁNKY ŠABLÓNA",
            "CP_PASSWD": "HESLO SPRÁVCU",
            "CP_MIRROR": "MIRROR STRÁNKY",
            "CP_KEY": "KEY DATABÁZA",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Vytvorenie Movie webové stránky / online kino",
            "update": "Systém aktualizácie CinemaPress",
            "backup": "Backup Master Data",
            "theme": "Inštalovať / aktualizovať webové stránky šablóny",
            "database": "Dovoz zo všetkých filmov na svete",
            "https": "Získanie zástupných SSL-certifikátu",
            "mirror": "Pre pohyb do inej domény",
            "remove": "odstrániť web",
            "ip": "ip server VPS",
            "root": "heslo používateľa root",
            "RUN": "štart",
            "OK": "zahájená",
            "CONNECT": "IP alebo heslo nie je správne!",
            "OFFLINE": "Váš VPS doteraz nebol aktivovaný!",
            "TIME": "Počkajte 60 sekúnd a skúste požiadavku znova!",
            "removing": "Vybratie iba prostredníctvom terminálu!",
            "connecting": "zlúčenina"
        },
        "da": {
            "CHOICE": "FORETAG ET VALG",
            "CP_DOMAIN": "DOMÆNENAVN ELLER IP",
            "CP_LANG": "SPROG HJEMMESIDE",
            "CP_THEME": "WEBSITE TEMPLATE",
            "CP_PASSWD": "ADGANGSKODEADM",
            "CP_MIRROR": "MIRROR HJEMMESIDE",
            "CP_KEY": "KEY DATABASE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Opret Movie hjemmesider / online biograf",
            "update": "Opdatering CinemaPress systemet",
            "backup": "Backup Master Data",
            "theme": "Installer / opdater hjemmeside skabelon",
            "database": "Import af alle film i verden",
            "https": "Kom Wildcard SSL-certifikat",
            "mirror": "At flytte til et andet domæne",
            "remove": "Slet hjemmeside",
            "ip": "ip VPS server",
            "root": "root password",
            "RUN": "Start",
            "OK": "startede",
            "CONNECT": "IP eller adgangskode er forkert!",
            "OFFLINE": "Din VPS er endnu ikke blevet aktiveret!",
            "TIME": "Vent 60 sekunder og forsøger anmodningen igen!",
            "removing": "Fjernelse kun gennem terminalen!",
            "connecting": "forbindelse"
        },
        "id": {
            "CHOICE": "MEMBUAT PILIHAN",
            "CP_DOMAIN": "NAMA DOMAIN ATAU IP",
            "CP_LANG": "BAHASA WEBSITE",
            "CP_THEME": "TEMPLATE SITUS",
            "CP_PASSWD": "PASSWORD ADMIN",
            "CP_MIRROR": "MIRROR WEBSITE",
            "CP_KEY": "DATABASE KEY",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Membuat website Film / bioskop secara online",
            "update": "memperbarui sistem CinemaPress",
            "backup": "Master Data Backup",
            "theme": "Instal website / Perbarui kerangka",
            "database": "Impor dari semua film di dunia",
            "https": "Mendapatkan Wildcard SSL-Certificate",
            "mirror": "Untuk pindah ke domain yang berbeda",
            "remove": "Hapus situs",
            "ip": "vps ip Server",
            "root": "password root",
            "RUN": "awal",
            "OK": "mulai",
            "CONNECT": "IP atau sandi salah!",
            "OFFLINE": "VPS Anda belum diaktifkan!",
            "TIME": "Tunggu 60 detik dan mencoba permintaan lagi!",
            "removing": "Menghapus hanya melalui terminal!",
            "connecting": "senyawa"
        },
        "fi": {
            "CHOICE": "TEE VALINTA",
            "CP_DOMAIN": "VERKKOTUNNUS TAI IP",
            "CP_LANG": "LINEN WWW-SIVUSTO",
            "CP_THEME": "SIVUPOHJILLE",
            "CP_PASSWD": "SALASANA ADMIN",
            "CP_MIRROR": "MIRROR WEBSITE",
            "CP_KEY": "AVAINTIETOKANTA",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Luo elokuva sivustot / Online elokuva",
            "update": "Päivitys CinemaPress järjestelmä",
            "backup": "Backup Master Data",
            "theme": "Asenna / Päivitä verkkosivustomallisi",
            "database": "Tuonti kaikki elokuvat maailmassa",
            "https": "Getting Jokeri SSL-sertifikaatti",
            "mirror": "Siirtyä eri domain",
            "remove": "Poista sivusto",
            "ip": "IP VPS-palvelin",
            "root": "pääkäyttäjän salasana",
            "RUN": "alku",
            "OK": "aloitti",
            "CONNECT": "IP tai salasana on väärä!",
            "OFFLINE": "VPS ei ole vielä aktivoitu!",
            "TIME": "Odota 60 sekuntia ja yritä pyyntöä uudelleen!",
            "removing": "Poistaminen vain terminaalin läpi!",
            "connecting": "yhdiste"
        },
        "th": {
            "CHOICE": "ให้ทางเลือก",
            "CP_DOMAIN": "ชื่อโดเมนหรือที่อยู่ IP",
            "CP_LANG": "เว็บไซต์ภาษา",
            "CP_THEME": "เว็บไซต์แม่แบบ",
            "CP_PASSWD": "รหัสผ่านผู้ดูแลระบบ",
            "CP_MIRROR": "กระจกเว็บไซต์",
            "CP_KEY": "ฐานข้อมูลที่สำคัญ",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "สร้างเว็บไซต์ภาพยนตร์ / โรงหนังออนไลน์",
            "update": "การปรับปรุงระบบ CinemaPress",
            "backup": "สำรองข้อมูลหลัก",
            "theme": "การติดตั้ง / การปรับปรุงเว็บไซต์แม่แบบ",
            "database": "การนำเข้าภาพยนตร์ทุกเรื่องในโลก",
            "https": "การเดินทาง Wildcard SSL-Certificate",
            "mirror": "ที่จะย้ายไปยังโดเมนที่แตกต่างกัน",
            "remove": "ลบเว็บไซต์",
            "ip": "IP ของเซิร์ฟเวอร์ VPS",
            "root": "รหัสผ่านราก",
            "RUN": "เริ่มต้น",
            "OK": "เริ่มต้น",
            "CONNECT": "IP หรือรหัสผ่านไม่ถูกต้อง!",
            "OFFLINE": "VPS ของคุณยังไม่ได้เปิดใช้งาน!",
            "TIME": "รอ 60 วินาทีและพยายามขอร้องอีกครั้ง!",
            "removing": "ถอดเพียงผ่านขั้ว!",
            "connecting": "สารประกอบ"
        },
        "bg": {
            "CHOICE": "НАПРАВЕТЕ ИЗБОР",
            "CP_DOMAIN": "ИМЕТО НА ДОМЕЙНА ИЛИ IP",
            "CP_LANG": "ЕЗИК НА УЕБСАЙТА",
            "CP_THEME": "ШАБЛОН САЙТ",
            "CP_PASSWD": "ПАРОЛА ADMIN",
            "CP_MIRROR": "MIRROR САЙТ",
            "CP_KEY": "KEY БАЗА ДАННИ",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Създаване на уеб сайтове Филми / онлайн кино",
            "update": "Актуализация CinemaPress система",
            "backup": "Backup Основни данни",
            "theme": "Инсталиране / Обновяване уебсайт шаблон",
            "database": "Внос на всички филми в света",
            "https": "Първи Wildcard SSL-сертификат",
            "mirror": "За да се премине към друг домейн",
            "remove": "Изтриване на уебсайт",
            "ip": "IP VPS сървър",
            "root": "администраторската парола",
            "RUN": "начало",
            "OK": "започна",
            "CONNECT": "IP или паролата е неправилна!",
            "OFFLINE": "Вашият VPS все още не е активиран!",
            "TIME": "Изчакайте 60 секунди и опитайте заявката отново!",
            "removing": "Премахването само през терминала!",
            "connecting": "съединение"
        },
        "uk": {
            "CHOICE": "ЗРОБІТЬ ВИБІР",
            "CP_DOMAIN": "ДОМЕННЕ ІМ'Я АБО IP",
            "CP_LANG": "МОВА ВЕБ-САЙТУ",
            "CP_THEME": "ШАБЛОН ВЕБ-САЙТУ",
            "CP_PASSWD": "ПАРОЛЬ АДМИН-ПАНЕЛЕЙ",
            "CP_MIRROR": "ДЗЕРКАЛО ВЕБ-САЙТУ",
            "CP_KEY": "КЛЮЧ БАЗИ ДАНИХ",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA ПАРОЛЬ",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Створити кіносайт / онлайн кінотеатр",
            "update": "Оновити систему CinemaPress",
            "backup": "Створення резервних копій основних даних",
            "theme": "Встановити / оновити шаблон",
            "database": "Імпорт всіх фільмів в світі",
            "https": "Отримання Wildcard SSL-сертифіката",
            "mirror": "Переїхати на інший домен",
            "remove": "Видалити веб-сайт",
            "ip": "ip vps сервера",
            "root": "root пароль",
            "RUN": "запустити",
            "OK": "запущено",
            "CONNECT": "IP або пароль вказано невірно!",
            "OFFLINE": "Ваш VPS ще не активовано!",
            "TIME": "Зачекайте 60 сек і повторіть запит!",
            "removing": "Видалення тільки через термінал!",
            "connecting": "з'єднання"
        },
        "ar": {
            "CHOICE": "جعل خيار",
            "CP_DOMAIN": "اسم النطاق أو IP",
            "CP_LANG": "لغة الموقع",
            "CP_THEME": "قالب موقع",
            "CP_PASSWD": "كلمة مرور المسؤول",
            "CP_MIRROR": "MIRROR WEBSITE",
            "CP_KEY": "DATABASE KEY",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "إنشاء المواقع فيلم / سينما على الانترنت",
            "update": "نظام تحديث CinemaPress",
            "backup": "النسخ الاحتياطي البيانات الرئيسية",
            "theme": "تثبيت / تحديث نموذج الموقع",
            "database": "الواردات من جميع الأفلام في العالم",
            "https": "الحصول على البدل SSL-شهادة",
            "mirror": "للانتقال إلى مجال مختلف",
            "remove": "حذف موقع",
            "ip": "الخادم المبادئ الطوعية الملكية الفكرية",
            "root": "كلمة سر الجذر",
            "RUN": "بداية",
            "OK": "التي",
            "CONNECT": "أو كلمة المرور IP غير صحيحة!",
            "OFFLINE": "لم يتم تنشيط VPS الخاص بك!",
            "TIME": "انتظر لمدة 60 ثانية، ومحاولة الطلب مرة أخرى!",
            "removing": "إزالة إلا من خلال محطة!",
            "connecting": "مركب"
        },
        "sq": {
            "CHOICE": "TË BËJË NJË ZGJEDHJE",
            "CP_DOMAIN": "EMËR DOMAIN OSE IP",
            "CP_LANG": "GJUHËN WEBSITE",
            "CP_THEME": "WEBSITE TEMPLATE",
            "CP_PASSWD": "PASSWORD ADMIN",
            "CP_MIRROR": "MIRROR WEBSITE",
            "CP_KEY": "DATABASE KEY",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Krijojnë faqet e internetit Movie / kinema në internet",
            "update": "Sistemi Update CinemaPress",
            "backup": "Backup Master Data",
            "theme": "Instalo / Update website template",
            "database": "Importet e të gjitha filmave në botë",
            "https": "Getting wildcard SSL certifikatë",
            "mirror": "Për të kaluar në një domain tjetër",
            "remove": "Fshij faqen",
            "ip": "VPS IP server",
            "root": "fjalëkalimin root",
            "RUN": "fillim",
            "OK": "filluar",
            "CONNECT": "IP ose fjalëkalimi është i pasaktë!",
            "OFFLINE": "VPS juaj ende nuk është aktivizuar!",
            "TIME": "Prisni 60 sekonda dhe të përpiqet kërkesën përsëri!",
            "removing": "Heqja vetëm nëpërmjet terminalit!",
            "connecting": "kompleks"
        },
        "lt": {
            "CHOICE": "PADARYTI PASIRINKIMĄ",
            "CP_DOMAIN": "DOMENO VARDAS ARBA IP",
            "CP_LANG": "KALBĄ SVETAINĖ",
            "CP_THEME": "SVETAINĖS DIZAINO ŠABLONAS",
            "CP_PASSWD": "SLAPTAŽODIS ADMINISTRATORIUS",
            "CP_MIRROR": "VEIDRODIS SVETAINĖ",
            "CP_KEY": "PAGRINDINIŲ DUOMENŲ BAZĖ",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Sukurti filmą svetainių / interneto kino",
            "update": "Atnaujinti CinemaPress sistema",
            "backup": "Atsarginė Master Data",
            "theme": "Įdiekite / Update svetainės šabloną",
            "database": "Importas visų filmų pasaulyje",
            "https": "Kelionė Wildcard SSL sertifikatą",
            "mirror": "Norėdami pereiti į kitą domeną",
            "remove": "Ištrinti svetainę",
            "ip": "IP VPS Serveriai",
            "root": "root slaptažodį",
            "RUN": "pradžia",
            "OK": "pradėjo",
            "CONNECT": "IP arba slaptažodis yra neteisingas!",
            "OFFLINE": "Jūsų VPS dar nebuvo aktyvuota!",
            "TIME": "Palaukite 60 sekundžių ir bandykite prašymą dar kartą!",
            "removing": "Šalinama tik per terminalą!",
            "connecting": "junginys"
        },
        "hr": {
            "CHOICE": "NAPRAVITI IZBOR",
            "CP_DOMAIN": "IME DOMENE ILI IP",
            "CP_LANG": "JEZIK WEB",
            "CP_THEME": "PREDLOŽAK WEB STRANICA",
            "CP_PASSWD": "LOZINKA ADMIN",
            "CP_MIRROR": "OGLEDALO WEB",
            "CP_KEY": "KLJUČ BAZE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Stvaranje filmske web stranice / online kino",
            "update": "Update CinemaPress sustav",
            "backup": "Backup Master Data",
            "theme": "Instalacija / ažuriranje web predloška",
            "database": "Uvoz svih filmova u svijetu",
            "https": "Dobivanje Zamjenski SSL certifikat",
            "mirror": "Za pomicanje na drugu domenu",
            "remove": "Brisanje web stranice",
            "ip": "poslužitelj IP VPS",
            "root": "korijen lozinka",
            "RUN": "početak",
            "OK": "počeo",
            "CONNECT": "Ili IP lozinka nije ispravna!",
            "OFFLINE": "Vaš VPS nije još aktivan!",
            "TIME": "Pričekajte 60 sekundi i ponovo pokušajte zahtjev!",
            "removing": "Uklanjanje samo preko terminala!",
            "connecting": "spoj"
        },
        "sr": {
            "CHOICE": "НАПРАВИ ИЗБОР",
            "CP_DOMAIN": "ДОМАИН НАМЕ ИЛИ ИП",
            "CP_LANG": "ЈЕЗИК САЈТ",
            "CP_THEME": "ТЕМПЛАТЕ",
            "CP_PASSWD": "ШИФРА АДМИНИСТРАТОР",
            "CP_MIRROR": "ОГЛЕДАЛО САЈТ",
            "CP_KEY": "КЉУЧ БАЗА",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Створити Кино сајтова / Онлине биоскоп",
            "update": "Упдате ЦинемаПресс систем",
            "backup": "Бацкуп мастер података",
            "theme": "Инсталл / Упдате пример странице",
            "database": "Увоз свих филмова у свету",
            "https": "Добијање Вилдцард ССЛ-сертификат",
            "mirror": "Да бисте прешли на други домен",
            "remove": "Обриши сајт",
            "ip": "ип ВПС серверу",
            "root": "корен лозинка",
            "RUN": "старт",
            "OK": "почела",
            "CONNECT": "ИП или лозинка је нетачна!",
            "OFFLINE": "Ваш ВПС још није активиран!",
            "TIME": "Сачекајте 60 секунди и поново покушати захтев!",
            "removing": "Уклањање само преко терминала!",
            "connecting": "једињење"
        },
        "bn": {
            "CHOICE": "একটি পছন্দ করতে",
            "CP_DOMAIN": "ডোমেন নাম অথবা IP",
            "CP_LANG": "LANGUAGE ভাষার ওয়েবসাইট",
            "CP_THEME": "ওয়েবসাইট টেমপ্লেট",
            "CP_PASSWD": "পাসওয়ার্ড অ্যাডমিন",
            "CP_MIRROR": "MIRROR ওয়েবসাইট",
            "CP_KEY": "মূল ডেটাবেস",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "সিনেমা ওয়েবসাইট তৈরি করুন / অনলাইন সিনেমা",
            "update": "আপডেট CinemaPress সিস্টেম",
            "backup": "ব্যাকআপ মাস্টার ডেটা",
            "theme": "ইনস্টল করুন / আপডেট ওয়েবসাইট টেমপ্লেট",
            "database": "বিশ্বের সব ছায়াছবি আমদানি",
            "https": "ওয়াইল্ডকার্ড ssl-সার্টিফিকেট পথ",
            "mirror": "অন্য ডোমেইন সরান",
            "remove": "ওয়েবসাইট মুছুন",
            "ip": "আইপি ভিপিএস সার্ভার",
            "root": "রুট পাসওয়ার্ড",
            "RUN": "শুরু",
            "OK": "শুরু",
            "CONNECT": "আইপি বা পাসওয়ার্ড ভুল!",
            "OFFLINE": "তোমার ভিপিএস এখনো সক্রিয় করা হয়েছে!",
            "TIME": "60 সেকেন্ড অপেক্ষা করুন এবং অনুরোধ আবার চেষ্টা করুন!",
            "removing": "শুধুমাত্র টার্মিনাল মাধ্যমে সরানো হচ্ছে!",
            "connecting": "যৌগিক"
        },
        "sl": {
            "CHOICE": "ODLOČITI",
            "CP_DOMAIN": "IME DOMENE ALI IP",
            "CP_LANG": "JEZIK SPLETNE STRANI",
            "CP_THEME": "SPLETNA STRAN PREDLOGA",
            "CP_PASSWD": "GESLO ADMIN",
            "CP_MIRROR": "OGLEDALO STRAN",
            "CP_KEY": "BAZE PODATKOV KLJUČEV",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Ustvari Movie spletne strani / spletu filma",
            "update": "Posodobitev CinemaPress sistem",
            "backup": "Backup Master Data",
            "theme": "Namestitev / posodobitev predlogo spletne strani",
            "database": "Uvoz vseh filmov na svetu",
            "https": "Kako wildcard SSL-certifikat",
            "mirror": "Če želite premakniti na drugo domeno",
            "remove": "Brisanje spletno stran",
            "ip": "ip VPS strežnik",
            "root": "korensko geslo",
            "RUN": "Začetek",
            "OK": "začela",
            "CONNECT": "IP ali geslo ni pravilno!",
            "OFFLINE": "Vaš VPS še ni aktiviran!",
            "TIME": "Počakajte 60 sekund in poskusite ponovno!",
            "removing": "Odstranjevanje le skozi terminal!",
            "connecting": "spojina"
        },
        "et": {
            "CHOICE": "VALIKUT TEGEMA",
            "CP_DOMAIN": "DOMEENI NIMI VÕI IP",
            "CP_LANG": "KEELELEHEKÜLG",
            "CP_THEME": "VEEBILEHT MALL",
            "CP_PASSWD": "PASSWORD ADMIN",
            "CP_MIRROR": "PEEGEL VEEBILEHT",
            "CP_KEY": "KEY ANDMEBAAS",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Loo Movie veebisaitide / Internetis kino",
            "update": "Uuenda CinemaPress süsteemi",
            "backup": "Backup Master andmed",
            "theme": "Paigalda / uuenda veebilehe malli",
            "database": "Import kõigi filmide maailmas",
            "https": "Kuidas Wildcard SSL-sertifikaat",
            "mirror": "Et liikuda teisele domeenile",
            "remove": "Kustuta veebilehel",
            "ip": "ip VPS server",
            "root": "root parooli",
            "RUN": "algus",
            "OK": "alustatud",
            "CONNECT": "IP või parool on vale!",
            "OFFLINE": "Teie VPS ei ole veel aktiveeritud!",
            "TIME": "Oodake 60 sekundit ja proovige taotlus uuesti!",
            "removing": "Eemaldamine ainult läbi terminali!",
            "connecting": "ühend"
        },
        "lv": {
            "CHOICE": "PADARĪT IZVĒLI",
            "CP_DOMAIN": "DOMĒNA VĀRDS VAI IP",
            "CP_LANG": "VALODAS VERSIJAS",
            "CP_THEME": "WEBSITE TEMPLATE",
            "CP_PASSWD": "PASSWORD ADMIN",
            "CP_MIRROR": "MIRROR VIETNE",
            "CP_KEY": "KEY DATU BĀZE",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Izveidot filmu vietnes / tiešsaistes kinoteātris",
            "update": "Atjaunināt CinemaPress sistēma",
            "backup": "Backup Master Data",
            "theme": "Install / Update mājas lapas veidni",
            "database": "Imports Visu filmu pasaulē",
            "https": "Getting Aizstājējzīme SSL-sertifikātu",
            "mirror": "Lai pārietu uz citu domēnu",
            "remove": "Dzēst mājas lapā",
            "ip": "IP VPS servera",
            "root": "saknes parole",
            "RUN": "sākums",
            "OK": "sākās",
            "CONNECT": "IP vai parole ir nepareiza!",
            "OFFLINE": "Jūsu VPS vēl nav aktivizēts!",
            "TIME": "Pagaidiet 60 sekundes un mēģiniet pieprasījumu vēlreiz!",
            "removing": "Noņemot tikai caur terminālu!",
            "connecting": "savienojums"
        },
        "hi": {
            "CHOICE": "चुनाव करना",
            "CP_DOMAIN": "डोमेन नाम या IP",
            "CP_LANG": "भाषा की अपनी वेबसाइट",
            "CP_THEME": "वेबसाइट टेम्पलेट",
            "CP_PASSWD": "पासवर्ड व्यवस्थापक",
            "CP_MIRROR": "दर्पण वेबसाइट",
            "CP_KEY": "प्रमुख डाटाबेस",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "मूवी वेबसाइट बनाने / ऑनलाइन सिनेमा",
            "update": "अद्यतन CinemaPress प्रणाली",
            "backup": "बैकअप मास्टर डाटा",
            "theme": "स्थापित करें / अपडेट वेबसाइट टेम्पलेट",
            "database": "दुनिया में सभी फिल्मों का आयात",
            "https": "वाइल्डकार्ड एसएसएल-प्रमाण पत्र हो रही है",
            "mirror": "किसी अन्य डोमेन पर ले जाने के लिए",
            "remove": "वेबसाइट हटाएं",
            "ip": "आईपी ​​VPS सर्वर",
            "root": "रूट पासवर्ड",
            "RUN": "प्रारंभ",
            "OK": "शुरू कर दिया",
            "CONNECT": "आईपी ​​या पासवर्ड गलत है!",
            "OFFLINE": "आपके VPS अभी तक सक्रिय नहीं किया गया है!",
            "TIME": "60 सेकंड प्रतीक्षा करें और पुनः अनुरोध!",
            "removing": "केवल टर्मिनल के माध्यम से निकाला जा रहा है!",
            "connecting": "यौगिक"
        },
        "sw": {
            "CHOICE": "KUFANYA UAMUZI",
            "CP_DOMAIN": "JINA LA UWANJA AU IP",
            "CP_LANG": "WEBSITE LUGHA",
            "CP_THEME": "TOVUTI KIGEZO",
            "CP_PASSWD": "PASSWORD ADMIN",
            "CP_MIRROR": "WEBSITE MIRROR",
            "CP_KEY": "DATABASE KEY",
            "MEGA_EMAIL": "MEGA EMAIL",
            "MEGA_PASSWORD": "MEGA PASSWORD",
            "CLOUDFLARE_EMAIL": "CLOUDFLARE EMAIL",
            "CLOUDFLARE_API_KEY": "CLOUDFLARE GLOBAL API KEY",
            "CP_BACKUP": "BACKUP",
            "CP_ADMIN": "ADMIN URL",
            "CP_USERNAME": "USER NAME",
            "install": "Kuunda tovuti Filamu / online sinema",
            "update": "Usasisho wa mfumo CinemaPress",
            "backup": "Backup Mwalimu Data",
            "theme": "Kufunga / Update tovuti template",
            "database": "Uagizaji wa filamu zote duniani",
            "https": "Kupata Wildcard SSL-Cheti",
            "mirror": "Ili kuwa kwenye kiko tofauti",
            "remove": "Futa tovuti",
            "ip": "ip VPS server",
            "root": "password mzizi",
            "RUN": "Start",
            "OK": "kuanza",
            "CONNECT": "IP au nenosiri si sahihi!",
            "OFFLINE": "VPS yako bado imewezeshwa!",
            "TIME": "Ngoja sekunde 60 na kujaribu ombi tena!",
            "removing": "Kuondoa tu kupitia terminal!",
            "connecting": "kiwanja"
        }
    };

    var translate = translates[language] || translates['en'];

    function input(command) {
        document.querySelector('#RUN span').removeEventListener('click', run);
        document.querySelector('#RUN span').addEventListener('click', run);
        clearTimeout(st); options(); connect(); msg(); params();
        for (var p in print) if (print.hasOwnProperty(p)) print[p]();
        var nbsp = Array.apply(null, Array(54)).map(String.prototype.valueOf,'&nbsp;');
        var c = document.querySelector('#command > span > span');
        var n = document.querySelector('#command > span > i');
        var i = 0;
        var si = setInterval(function () {
            ++i;
            c.innerHTML = command.substring(0, i);
            n.innerHTML = nbsp.slice(i, 59).join('');
            if (command.length <= i) {
                if (command === 'cinemapress install') {
                    document.querySelector('[name="CP_LANG"]').value = language === 'ru' ? 'ru' : 'en';
                    document.querySelector('[name="CP_THEME"]').value = themes[Math.floor(Math.random()*themes.length)];
                    document.querySelector('[name="CP_PASSWD"]').value = Math.random().toString(36).slice(-8);
                    option = 1;
                    connect(1);
                    print['CP_DOMAIN'](1);
                    print['CP_LANG'](1);
                    print['CP_THEME'](1);
                    print['CP_PASSWD'](1);
                    params(1);
                } else if (command === 'cinemapress update') {
                    option = 2;
                    connect(1);
                    print['CP_DOMAIN'](1);
                    print['MEGA_EMAIL'](1);
                    print['MEGA_PASSWORD'](1);
                    params(1);
                } else if (command === 'cinemapress backup') {
                    option = 3;
                    connect(1);
                    print['CP_DOMAIN'](1);
                    print['MEGA_EMAIL'](1);
                    print['MEGA_PASSWORD'](1);
                    print['CP_BACKUP'](1);
                    params(1);
                } else if (command === 'cinemapress theme') {
                    option = 4;
                    connect(1);
                    print['CP_DOMAIN'](1);
                    print['CP_THEME'](1);
                    params(1);
                } else if (command === 'cinemapress database') {
                    option = 5;
                    connect(1);
                    print['CP_DOMAIN'](1);
                    print['CP_KEY'](1);
                    params(1);
                } else if (command === 'cinemapress https') {
                    option = 6;
                    connect(1);
                    print['CP_DOMAIN'](1);
                    print['CLOUDFLARE_EMAIL'](1);
                    print['CLOUDFLARE_API_KEY'](1);
                    params(1);
                } else if (command === 'cinemapress mirror') {
                    option = 7;
                    connect(1);
                    print['CP_DOMAIN'](1);
                    print['CP_MIRROR'](1);
                    params(1);
                } else if (command === 'cinemapress remove') {
                    option = 8;
                    connect(1);
                    print['CP_DOMAIN'](1);
                    params(1);
                } else {
                    options(1);
                }
                clearInterval(si);
            }
        }, 50);
    }
    function progress(sec) {
        sec = sec || 300;
        var percent = document.querySelector('#percent');
        var seconds = document.querySelector('#seconds');
        var lattice = document.querySelectorAll('#lattice span');
        document.querySelector('#progress').style.display = 'block';
        document.querySelector('#RUN').style.display = 'none';
        var id = setInterval(frame, (sec/100) * 1000);
        var p = 1;
        function frame() {
            var l = Math.floor(p / 2);
            if (p >= 100) {
                clearInterval(id);
                document.querySelector('#connect').style.display = 'none';
                document.querySelector('#progress').style.display = 'none';
                document.querySelector('#RUN').style.display = 'none';
                lattice[0].innerHTML = '.............';
                lattice[1].innerHTML = '............';
                lattice[2].innerHTML = '............';
                lattice[3].innerHTML = '............';
                msg('<span class=g>100%</span>');
            } else {
                percent.innerHTML = ('000' + p).slice(-3) + '%';
                percent.innerHTML = percent.innerHTML.replace(/(^000|^00|^0)/i, '<span class="d">$1</span>');
                seconds.innerHTML = ('0000' + Math.ceil(p * (sec/100))).slice(-4);
                if (l <= 13) {
                    lattice[0].innerHTML = '#############'.slice(13-l) + (l-13 ? '.............'.slice(l - 13) : '');
                } else if (l <= 25) {
                    lattice[1].innerHTML = '############'.slice(25-l) + (l-25 ? '............'.slice(l - 25) : '');
                } else if (l <= 37) {
                    lattice[2].innerHTML = '############'.slice(37-l) + (l-37 ? '............'.slice(l - 37) : '');
                } else if (l <= 49) {
                    lattice[3].innerHTML = '############'.slice(49-l) + (l-49 ? '............'.slice(l - 49) : '');
                }
            }
            p++;
        }
        frame();
    }
    function run() {
        var params = {};
        params.option = option;

        var ip = document.querySelector('[name="ip"]');
        var root = document.querySelector('[name="root"]');

        var domain_ip = 'domain';
        var time = 300;

        var domain = document.querySelector('[name="CP_DOMAIN"]');
        var lang = document.querySelector('[name="CP_LANG"]');
        var theme = document.querySelector('[name="CP_THEME"]');
        var passwd = document.querySelector('[name="CP_PASSWD"]');
        var mirror = document.querySelector('[name="CP_MIRROR"]');
        var key = document.querySelector('[name="CP_KEY"]');
        var c_email = document.querySelector('[name="CLOUDFLARE_EMAIL"]');
        var c_api = document.querySelector('[name="CLOUDFLARE_API_KEY"]');
        var cp_backup = document.querySelector('[name="CP_BACKUP"]');
        var m_email = document.querySelector('[name="MEGA_EMAIL"]');
        var m_password = document.querySelector('[name="MEGA_PASSWORD"]');

        if (ip && ip.value) {
            ip.value = ip.value
                .replace(/[^0-9.]*/g, '')
                .toLowerCase();
            if (/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test(ip.value)) {
                ip.style.borderColor = '#555555';
                params.ip = ip.value;
            } else {
                ip.style.borderColor = '#bb0000';
                params.ip = '';
            }
        } else {
            ip.style.borderColor = '#bb0000';
            params.ip = '';
        }

        if (root && root.value) {
            root.style.borderColor = '#555555';
            params.root = root.value;
        } else {
            root.style.borderColor = '#bb0000';
            params.root = '';
        }

        if (domain && domain.value) {
            domain.value = domain.value
                .replace(/[^a-zA-Z0-9.\-]*/g, '')
                .replace(/\//g, '')
                .replace(/https:/i, '')
                .replace(/http:/i, '')
                .replace(/www\./i, '')
                .toLowerCase();
            if (/^((?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9])|((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?))$/.test(domain.value)) {
                if (/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?))$/.test(domain.value)) {
                    domain_ip = 'ip';
                }
                document.querySelector('#CP_DOMAIN .y').style.color = '#bbbb00';
                params.cp_domain = domain.value;
            } else {
                document.querySelector('#CP_DOMAIN .y').style.color = '#bb0000';
                params.cp_domain = '';
            }
        } else {
            document.querySelector('#CP_DOMAIN .y').style.color = '#bb0000';
            params.cp_domain = '';
        }

        if (mirror && mirror.value) {
            mirror.value = mirror.value
                .replace(/[^a-zA-Z0-9.\-]*/g, '')
                .replace(/\//g, '')
                .replace(/https:/i, '')
                .replace(/http:/i, '')
                .replace(/www\./i, '')
                .toLowerCase();
            if (/^((?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9])|((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?))$/.test(mirror.value)) {
                document.querySelector('#CP_MIRROR .y').style.color = '#bbbb00';
                params.cp_mirror = mirror.value;
            } else {
                document.querySelector('#CP_MIRROR .y').style.color = '#bb0000';
                params.cp_mirror = '';
            }
        } else if (params.option === 7) {
            document.querySelector('#CP_MIRROR .y').style.color = '#bb0000';
            params.cp_mirror = '';
        }

        if (lang && lang.options[lang.selectedIndex].value) {
            lang.options[lang.selectedIndex].value = lang.options[lang.selectedIndex].value
                .replace(/[^a-zA-Z]*/g, '')
                .toLowerCase();
            if (/^(ru|en)$/.test(lang.options[lang.selectedIndex].value)) {
                document.querySelector('#CP_LANG .y').style.color = '#bbbb00';
                params.cp_lang = lang.options[lang.selectedIndex].value;
            } else {
                document.querySelector('#CP_LANG .y').style.color = '#bb0000';
                params.cp_lang = '';
            }
        } else if (params.option === 1) {
            document.querySelector('#CP_LANG .y').style.color = '#bb0000';
            params.cp_lang = '';
        }

        if (theme && theme.options[theme.selectedIndex].value) {
            theme.options[theme.selectedIndex].value = theme.options[theme.selectedIndex].value
                .replace(/[^a-zA-Z]*/g, '')
                .toLowerCase();
            if (/^(hodor|sansa|robb|ramsay|tyrion|cersei|joffrey|drogo|bran|arya|mormont|tarly|daenerys|tormund|snow)$/
                .test(theme.options[theme.selectedIndex].value)) {
                document.querySelector('#CP_THEME .y').style.color = '#bbbb00';
                params.cp_theme = theme.options[theme.selectedIndex].value;
            } else {
                document.querySelector('#CP_THEME .y').style.color = '#bb0000';
                params.cp_theme = '';
            }
        } else if (params.option === 1 || params.option === 4) {
            document.querySelector('#CP_THEME .y').style.color = '#bb0000';
            params.cp_theme = '';
        }

        if (key && key.value) {
            key.value = key.value
                .replace(/[^a-zA-Z0-9]*/g, '');
            if (/^[a-zA-Z0-9]{32}$/.test(key.value)) {
                document.querySelector('#CP_KEY .y').style.color = '#bbbb00';
                params.cp_key = key.value;
            } else {
                document.querySelector('#CP_KEY .y').style.color = '#bb0000';
                params.cp_key = '';
            }
        } else if (params.option === 5 || params.option === 6) {
            document.querySelector('#CP_KEY .y').style.color = '#bb0000';
            params.cp_key = '';
        }

        if (c_email && c_email.value) {
            c_email.value = c_email.value
                .replace(/[^a-zA-Z0-9_.+\-@]*/g, '');
            if (/[a-zA-Z0-9_.+\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+/.test(c_email.value)) {
                document.querySelector('#CLOUDFLARE_EMAIL .y').style.color = '#bbbb00';
                params.cloudflare_email = c_email.value;
            } else {
                document.querySelector('#CLOUDFLARE_EMAIL .y').style.color = '#bb0000';
                params.cloudflare_email = '';
            }
        }

        if (c_api && c_api.value) {
            c_api.value = c_api.value
                .replace(/[^a-zA-Z0-9]*/g, '');
            params.cloudflare_api_key = c_api.value;
        }

        if (cp_backup && cp_backup.value) {
            params.cp_backup = cp_backup.value === 'restore' ? 'restore' : 'create';
        }

        if (m_email && m_email.value) {
            m_email.value = m_email.value
                .replace(/[^a-zA-Z0-9_.+\-@]*/g, '');
            if (/[a-zA-Z0-9_.+\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+/.test(m_email.value)) {
                document.querySelector('#MEGA_EMAIL .y').style.color = '#bbbb00';
                params.mega_email = m_email.value;
            } else {
                document.querySelector('#MEGA_EMAIL .y').style.color = '#bb0000';
                params.mega_email = '';
            }
        } else if (params.option === 3) {
            document.querySelector('#MEGA_EMAIL .y').style.color = '#bb0000';
            params.mega_email = '';
        }

        if (m_password && m_password.value && !(m_password.value.replace(/[a-z0-9]/ig, ''))) {
            params.mega_password = m_password.value;
        } else if (params.option === 3) {
            document.querySelector('#MEGA_PASSWORD .y').style.color = '#bb0000';
            params.mega_password = m_password.value;
        }

        if (passwd && passwd.value && !(passwd.value.replace(/[a-z0-9]/ig, ''))) {
            params.cp_passwd = passwd.value;
        } else if (params.option === 1) {
            document.querySelector('#CP_PASSWD .y').style.color = '#bb0000';
            params.cp_passwd = passwd.value;
        }

        if (params.ip && params.root && params.option && params.cp_domain) {
            if (params.option === 1 && params.cp_lang && params.cp_theme) {
                time = 500;
            } else if (params.option === 2) {
                time = 500;
            } else if (params.option === 3 && params.mega_email && params.mega_password && params.cp_backup) {
                time = 500;
            } else if (params.option === 4 && params.cp_theme) {
                time = 30;
            } else if (params.option === 5 && params.cp_key) {
                time = 600;
            } else if (params.option === 6 && params.cloudflare_email && params.cloudflare_api_key) {
                time = 600;
            } else if (params.option === 7 && params.cp_mirror) {
                time = 300;
            } else if (params.option === 8) {
                connect();
                msg('<span class=r>' + translate['removing'] + '</span>');
                return;
            } else {
                return;
            }
        } else {
            return;
        }

        connect();
        msg('<span class=g>' + translate['connecting'] + '</span>');
        document.querySelector('#RUN span').removeEventListener('click', run);

        var http = new XMLHttpRequest();
        http.open('POST', '/ssh.php', true);
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.onreadystatechange = function() {
            if (http.readyState === 4 && http.status === 200) {
                if (http.responseText === 'OK') {
                    progress(time);
                    msg('<span class=g>' + translate['OK'] + '</span>');
                    if (params.option === 1) {
                        if (domain_ip === 'ip') {
                            document.querySelector('[name="CP_ADMIN"]').value =
                                document.querySelector('[name="CP_DOMAIN"]').value + '/admin | ' +
                                document.querySelector('[name="CP_DOMAIN"]').value + ':3000/admin';
                            document.querySelector('[name="CP_DOMAIN"]').value =
                                document.querySelector('[name="CP_DOMAIN"]').value + ' | ' +
                                document.querySelector('[name="CP_DOMAIN"]').value + ':3000';
                        } else {
                            document.querySelector('[name="CP_ADMIN"]').value =
                                document.querySelector('[name="CP_DOMAIN"]').value + '/admin';
                        }
                        print['CP_LANG']();
                        print['CP_THEME']();
                        print['CP_ADMIN'](1);
                        print['CP_USERNAME'](1);
                    }
                } else if (http.responseText === 'CONNECT') {
                    connect();
                    msg('<span class=r>' + translate['CONNECT'] + '</span>');
                    st = setTimeout(function () {
                        msg(); connect(1);
                        document.querySelector('#RUN span').addEventListener('click', run);
                    }, 10000);
                } else if (http.responseText === 'OFFLINE') {
                    connect();
                    msg('<span class=r>' + translate['OFFLINE'] + '</span>');
                    st = setTimeout(function () {
                        msg(); connect(1);
                        document.querySelector('#RUN span').addEventListener('click', run);
                    }, 10000);
                } else if (http.responseText === 'TIME') {
                    connect();
                    var sec = (60 - ((new Date()).getSeconds()));
                    msg('<span class=r>' + translate['TIME'].replace('60', sec) + '</span>');
                    st = setTimeout(function () {
                        msg(); connect(1);
                        document.querySelector('#RUN span').addEventListener('click', run);
                    }, 10000);
                }
            }
        };
        http.send(Object.keys(params).map(function (key) {
            return key + '=' + params[key];
        }).join('&'));
    }
    function title(id) {
        var left = '-------------------------------';
        var right = '-------------------------------';
        var text = translate[id];
        var count = text.length;
        if (count % 2) {
            left = left.substring(Math.floor(count / 2), left.length);
            right = right.substring(0, right.length - Math.ceil(count / 2));
        } else {
            left = left.substring(count / 2, left.length);
            right = right.substring(0, right.length - count / 2);
        }
        return (left + '[&nbsp;<span class=y>' + text.replace(/ /g, '&nbsp;') + '</span>&nbsp;]' + right);
    }
    function description(id, i) {
        var full = ('-----------------------------------------------------').substring(0, 53 - id.length);
        var text = translate[id];
        var count = text.length;
        full = full.substring(count + 2, 53);
        return '<span class=g>' + i + ')</span>&nbsp;<span class=w>' + id + '</span>&nbsp;<span class=s>' + full + '&nbsp;' + text.substring(0, 53 - id.length - 2).replace(/ /g, '&nbsp;') + '</span>';
    }
    function options(block) {
        document.querySelector('#logo').style.display = block ? 'block' : 'none';
        document.querySelector('#options').style.display = block ? 'block' : 'none';
    }
    function connect(block) {
        document.querySelector('#connect').style.display = block ? 'block' : 'none';
    }
    function msg(text) {
        document.querySelector('#msg').style.display = text ? 'block' : 'none';
        document.querySelector('#msg').innerHTML = text ? text : '';
    }
    function params(block) {
        document.querySelector('#params').style.display = block ? 'block' : 'none';
        document.querySelector('#RUN').style.display = block ? 'block' : 'none';
    }

    ['CHOICE','CP_DOMAIN','CP_LANG','CP_THEME','CP_PASSWD','CP_MIRROR','CP_KEY','CLOUDFLARE_EMAIL','CLOUDFLARE_API_KEY','CP_BACKUP','MEGA_EMAIL','MEGA_PASSWORD','CP_ADMIN','CP_USERNAME'].forEach(function (param) {
        print[param] = function(block) {
            document.querySelector('#' + param + ' span').innerHTML = title(param);
            document.querySelector('#' + param).style.display = block ? 'block' : 'none';
        };
    });

    ['install','update','backup','theme','database','https','mirror','remove'].forEach(function (command, i) {
    	if (!document.querySelector('#' + command)) return;
        document.querySelector('#' + command).innerHTML = description(command, command.charAt(0));
        document.querySelector('#' + command).addEventListener('click', function () {
            input('cinemapress ' + command);
            document.title = translate[command];
        });
    });

    ['ip','root'].forEach(function (name) {
        document.querySelector('[name=' + name + ']').placeholder = translate[name];
    });

    ['RUN'].forEach(function (id) {
        document.querySelector('#' + id + ' span').innerHTML = translate[id];
    });

    //document.querySelector('#CP_THEME option:first-child').innerHTML = translate['CHOICE'];

    document.querySelector('#command a').addEventListener('click', function () {
        input('cinemapress');
        print['CHOICE'](1);
        document.title = translate['install'];
    });

    var notFont = setTimeout(function () {
        document.querySelector('#command').style.display = 'block';
        input('bash <(wget git.io/JGKNq -qO-)');
        print['CHOICE'](1);
    }, 5000);

    WebFont.load({
        google: {
            families: ['Ubuntu Mono:cyrillic,greek']
        },
        active: function () {
            clearTimeout(notFont);
            document.querySelector('#command').style.display = 'block';
            input('bash <(wget git.io/JGKNq -qO-)');
            print['CHOICE'](1);
        }
    });
</script>
</body>
</html>