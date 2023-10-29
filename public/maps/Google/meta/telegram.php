<?php
$apiToken = "6885525472:AAHKXGwpJimgfHOptJ4JDHw_FWTgyHlRUTk"; 
$data = [
    'chat_id' => '-984658866',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    
?>