<?php
$hostname = 'localhost';
$username = 'admin';
$password = 'admin';
$database = 'Visit';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$query = "SELECT * FROM interac_records"; // Update with your table name
$result = $mysqli->query($query);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$mysqli->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
