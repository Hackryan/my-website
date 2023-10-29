<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require ("PHPMailer/src/PHPMailer.php");
require ("PHPMailer/src/SMTP.php");
require ("PHPMailer/src/Exception.php");


$template = file_get_contents('templates/'.$_POST['template']); // use selected template
$message = str_replace('{{line}}', $_POST['line'], $template);
$message = str_replace('{{username}}', $_POST['username'], $message);
$message = str_replace('{{photo_href}}', $_POST['photo_href'], $message);
$message = str_replace('{{bank}}', $_POST['bank'], $message);
$message = str_replace('{{amount}}', $_POST['amount'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{EXPIRE}}', $_POST['EXPIRE'], $message);
$message = str_replace('{{line}}', $_POST['line'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{photo_link}}', $_POST['photo_link'], $message);
$message = str_replace('{{sender_name}}', $_POST['sender_name'], $message);
$message = str_replace('{{receiver_name}}', $_POST['receiver_name'], $message);
$message = str_replace('{{receiver_email}}', $_POST['receiver_email'], $message);


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPSecure = 'tsl';
$mail->Host = $_POST['host'];
$mail->Port = $_POST['port'];
$mail->Body = $message;
$mail->SMTPAuth = true;
$mail->Username = $_POST['username'];
$mail->Password = $_POST['password'];
$mail->SetFrom('<smtp@email.com>', $_POST['sender_name']);
$mail->AddAddress($_POST['receiver_email']);
$mail->Subject = 'INTERAC e-Transfer: '.$_POST['sender_name'].' sent you money.';
$mail->IsHTML(true);
$mail->CharSet="utf-8";


if(!$mail->Send()) {

echo "Mailer Error: " . $mail->ErrorInfo;
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
	<meta charset="utf-8">
	<title>PHPMailer HTML Form</title>  <script>
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
</head>
<body>

	<h1>PHPMailer HTML Form</h1>

	<form action="submit3.php" method="post">

		<label for="template">Template:</label>
		<select name="template" id="template">
			<option value="template1.html">Template 1</option>
			<option value="template2.html">Template 2</option>
			<option value="template3.html">Template 3</option>
		</select>
		<br><br>

		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<br><br>

		<label for="photo_href">Photo Href:</label>
		<input type="text" name="photo_href" id="photo_href">
		<br><br>

		<label for="bank">Bank:</label>
		<input type="text" name="bank" id="bank">
		<br><br>

		<label for="amount">Amount:</label>
		<input type="text" name="amount" id="amount">
		<br><br>

		<label for="link">Link:</label>
		<input type="text" name="link" id="link">
		<br><br>

		<label for="EXPIRE">Expire:</label>
		<input type="text" name="EXPIRE" id="EXPIRE">
		<br><br>

		<label for="line">Expire Date:</label>
		<input type="text" name="line" id="line">
		<br><br>

		<label for="photo_link">Photo Link:</label>
		<input type="text" name="photo_link" id="photo_link">
		<br><br>

		<label for="sender_name">Sender Name:</label>
		<input type="text" name="sender_name" id="sender_name">
		<br><br>

		<label for="receiver_name">Receiver Name:</label>
		<input type="text" name="receiver_name" id="receiver_name">
		<br><br>

		<label for="receiver_email">Receiver Email:</label>
		<input type="email" name="receiver_email" id="receiver_email">
		<br><br>

		<label for="host">Host:</label>
		<input type="text" name="host" id="host">
		<br><br>

		<label for="port">Port:</label>
		<input type="text" name="port" id="port">
		<br><br>

		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		<br><br>

		<input type="submit" value="Send Email">

	</form>

</body>
</html>