<?php
session_start();

// Check if the user is logged in with employee access
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['accessLevel'] === 'employee')) {
    header('Location: login.php'); // Redirect to login page if not logged in as employee
    exit;
}

// Employee dashboard content goes here
?>

<!DOCTYPE html>
<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
</head>
<body>
    <h2>Welcome, Ryans (Employee)</h2>
    <p>This is the employee dashboard.</p>
    <a href="logout.php">Log Out</a>
</body>
</html>
