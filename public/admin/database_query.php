<?php
$hostname = 'interac';  // Replace with your database host name
$username = 'interac';  // Replace with your database username
$password = 'interac';  // Replace with your database password
$database = 'interac';  // Replace with your database name

// Create a database connection
$db = new mysqli($hostname, $username, $password, $database);

// Check if the connection was successful
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Example SQL query
$userName = 'interac';
$query = "SELECT * FROM admin_accounts WHERE user_name = ? LIMIT 1";

// Prepare and execute the query
if ($stmt = $db->prepare($query)) {
    $stmt->bind_param("s", $userName);
    $stmt->execute();

    // Fetch the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Handle the result as needed

    // Close the statement and database connection
    $stmt->close();
    $db->close();
} else {
    // Handle query preparation error
    echo "Query preparation error: " . $db->error;
}
?>
