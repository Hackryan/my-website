<?php
// Redirect to /admin/admin_dashboard.php
header("Location: /admin/admin_dashboard.php");
exit;

// Include the Telegram configuration
require_once("../config.sh");

// Prepare the message
$message = "User connected on tunnel 0";

// Send the message using curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$BOT_TOKEN2/sendMessage");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array("chat_id" => $CHAT_ID2, "text" => $message)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);
?>