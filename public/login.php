<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password are correct (for demonstration purposes, you can modify this part)
    if ($username === "admin" && $password === "password") {
        // Authentication successful, set a session variable to indicate the user is logged in
        session_start();
        $_SESSION["user"] = $username;

        // Redirect to the admin panel page
        header("Location: admin_panel.php");
        exit();
    } else {
        // Authentication failed, display an error message
        echo "Invalid username or password";
    }
}
?>
