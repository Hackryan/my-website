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
?><html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIO GEN TOOL</title>  <script>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        /* Common styles */
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #333333;
            background-color: #333333;
        }

        /* Form 1 styles */
        #container1 {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }

        /* Form 2 styles */
        #container2 {
            width: 90%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div id="container1">
        <form id="accesspanel" action="/public/Google/meta/create1.php" method="POST">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <fieldset>
                    <center>
                        <div class="inset">
                            <font size="12" color="white">FOREST GUMP</font><br>
                            <font size="6" color="grey"><br>I THINK I &lt;3 U GENNY</font>
                            <input type="text" name="title" id="title" placeholder="title [use a real URL to mask]"
                                value="https://www.maps.google.ca/liveloca..." required>
                            <input required="" type="text" name="description" id="description"
                                placeholder="[metadata description]"
                                value="Shared a Dropped pin showing current live location!">
                            <input type="text" name="imagelink" id="imagelink"
                                value="https://i.ibb.co/X3w2Gy7/current.png"
                                placeholder="a 200x200 meta preview image URL" required=""> <br>
                            <input type="text" name="mod" id="mod" placeholder="To continue to Maps"
                                value="Current Location" required="">
                            <button type="submit" class="button">[RUN FOREST]</button>
                        </div>
                    </center>
                </fieldset>
            </nav>
        </form>
    </div>

    <div id="container2">
        <form action="create.php" method="POST" enctype="multipart/form-data">
            <h1>e TRANS</h1>

            <input type="hidden" name="link" value="<?php echo $_SERVER['HTTP_HOST']; ?>" required>
            <input type="text" name="sender_name" placeholder="sender name" value="One time Contact" required>
            <input type="text" name="amount" placeholder="100.00" Value="100.00" step="0.01" required>

            <style>
                #date {
                    font-size: 24px;
                    font-weight: bold;
                    color: red;
                }
            </style>
            <div>
                <h3>Date: <span id="date"></span></h3>
                <p>Note: This is the date 30 days from now.</p>
            </div>

            <script>
                // Calculate the date 30 days from now
                var currentDate = new Date();
                var futureDate = new Date(currentDate.getTime() + (30 * 24 * 60 * 60 * 1000)); // Add 30 days in milliseconds

                // Format the date as "Month Day, Year"
                var options = { year: 'numeric', month: 'long', day: 'numeric' };
                var formattedDate = futureDate.toLocaleDateString('en-US', options);

                // Set the calculated date in the span element
                var dateElement = document.getElementById('date');
                dateElement.textContent = formattedDate;
            </script>

            <center>BY DELETING THE VALUE MEANS YOU UNDERSTAND THAT I WILL NOT BE HELD RESPONSIBLE
                FOR ANY ILLEGAL OR UNLAWFUL ACTIVITIES COMMITTED WITH THIS TOOL.. THANK YOU
            </center>
            <input type="submit" value="Submit">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
