<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the provided username and password match the default admin credentials
    if ($_POST["username"] === "admin" && $_POST["password"] === "admin") {
        // Redirect to .private.php on successful login
        header("Location: .private.php");
        exit();
    } else {
        // Authentication failed, you can display an error message here
        echo "Login failed. Please try again.";
    }
}
?>
