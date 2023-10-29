<?php
// Ensure that this script only accepts POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON data from the request body
    $json_data = file_get_contents("php://input");
    
    // Decode the JSON data
    $data = json_decode($json_data);

    if ($data !== null && isset($data->latitude) && isset($data->longitude)) {
        // Extract latitude and longitude from the JSON data
        $latitude = $data->latitude;
        $longitude = $data->longitude;
        
        // Process the location data as needed
        // For demonstration purposes, we'll just send a response indicating success
        $response = ['success' => true];
        
        // Send the response as JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // If the JSON data is invalid or missing latitude/longitude, send an error response
        $response = ['success' => false, 'error' => 'Invalid data'];
        
        // Send the response as JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    }
} else {
    // If the script receives a non-POST request, send an error response
    $response = ['success' => false, 'error' => 'Invalid request'];
    
    // Send the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
