<?php
// Database connection details
$servername = "interac";
$username = "interac";
$password = "interac";
$database = "interac";

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db($database);

// Check if the 'admin_accounts' table exists
$tableName = "admin_accounts";
if ($conn->query("DESCRIBE $tableName")) {
    echo "Table '$tableName' exists<br>";
} else {
    // Create the 'admin_accounts' table if it doesn't exist
    $createTableSql = "CREATE TABLE $tableName (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_name VARCHAR(255) NOT NULL
        -- Add other columns here as needed
    )";

    if ($conn->query($createTableSql) === TRUE) {
        echo "Table '$tableName' created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

// Close the database connection
$conn->close();
?>
