<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");

session_start();

if (isset($_POST['submit'])) {
    // Store form data in session
    $_SESSION['recipient_name'] = $_POST['recipient-name'];
    $_SESSION['recipient_email'] = $_POST['recipient-email'];
    $_SESSION['amount'] = $_POST['amount'];
    $_SESSION['memo'] = $_POST['memo'];

    // Redirect to confirmation page
    header("Location: confirmation.php");
    exit();
}
?>
