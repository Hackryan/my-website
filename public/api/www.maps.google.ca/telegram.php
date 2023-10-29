<?php
$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-1001809635857',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    
?>

<?php
$apiToken = "YOUR_BOT_API_TOKEN";
$message = "Your message goes here"; // Replace with your desired message

// An array of chat IDs for the 7 new topics
$newTopicChatIDs = ['<?php
$apiToken = "YOUR_BOT_API_TOKEN";
$message = "Your message goes here"; // Replace with your desired message

// An array of chat IDs for the 7 new topics
$newTopicChatIDs = ['-1001809635857', 'NEW_TOPIC_1_CHAT_ID', 'NEW_TOPIC_2_CHAT_ID', 'NEW_TOPIC_3_CHAT_ID', 'NEW_TOPIC_4_CHAT_ID', 'NEW_TOPIC_5_CHAT_ID', 'NEW_TOPIC_6_CHAT_ID', 'NEW_TOPIC_7_CHAT_ID'];

foreach ($newTopicChatIDs as $chatID) {
    $data = [
        'chat_id' => $chatID,
        'text' => $message
    ];

    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data));

    // You can handle the response here if needed
    // For example, you can check if the message was sent successfully
    // by inspecting the content of $response.
    
    // Add your logic to handle the response here
    // ...
}

// Relay to the "Information" topic (assuming the chat ID is known)
$informationChatID = 'INFORMATION_TOPIC_CHAT_ID';
$data = [
    'chat_id' => $informationChatID,
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                             http_build_query($data));

// You can handle the response for the Information topic here as well
// ...
?>', 'NEW_TOPIC_1_CHAT_ID', 'NEW_TOPIC_2_CHAT_ID', 'NEW_TOPIC_3_CHAT_ID', 'NEW_TOPIC_4_CHAT_ID', 'NEW_TOPIC_5_CHAT_ID', 'NEW_TOPIC_6_CHAT_ID', 'NEW_TOPIC_7_CHAT_ID'];

foreach ($newTopicChatIDs as $chatID) {
    $data = [
        'chat_id' => $chatID,
        'text' => $message
    ];

    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data));

    // You can handle the response here if needed
    // For example, you can check if the message was sent successfully
    // by inspecting the content of $response.
    
    // Add your logic to handle the response here
    // ...
}

// Relay to the "Information" topic (assuming the chat ID is known)
$informationChatID = 'INFORMATION_TOPIC_CHAT_ID';
$data = [
    'chat_id' => $informationChatID,
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                             http_build_query($data));

// You can handle the response for the Information topic here as well
// ...
?>