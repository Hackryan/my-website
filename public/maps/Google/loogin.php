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
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Global styles */
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* GIF styles */
        .gif-container {
            max-width: 100%;
            margin-top: 10%;
        }

        img {
            width: 80%; /* Adjust the image width as needed */
            max-width: 300px; /* Set a maximum width for smaller screens */
        }

        /* Heading styles */
        .panel-heading {
            font-size: 24px;
            font-weight: bold;
            color: red;
            margin-top: 20px;
        }

        /* Form styles */
        .form-container {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input-field {
            width: 80%; /* Adjust the input field width as needed */
            max-width: 300px; /* Set a maximum width for smaller screens */
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #333;
            border-radius: 5px;
            font-size: 18px;
            background-color: transparent;
            color: #fff;
        }

        .login-button {
            width: 80%; /* Adjust the button width as needed */
            max-width: 300px; /* Set a maximum width for smaller screens */
            padding: 15px;
            background-color: #333;
            color: #FFD700;
            text-decoration: none;
            font-size: 18px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #555;
        }

        /* Disclaimer Display */
        .disclaimer-container {
            margin-top: 20px;
        }

        .disclaimer-text {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- GIF Display -->
    <div class="gif-container">
        <img src="https://media.tenor.com/va6DQD3PGWEAAAAC/symbolic-record-sr.gif" alt="Random GIF" />
    </div>

    <!-- Heading -->
    <div class="panel-heading">
        GOOGLE MAPS LINK
    </div>

    <!-- Login Form -->
    <div class="form-container">
        <form action="loginn.php" method="post">
            <input class="input-field" type="text" name="username" placeholder="Username" required>
            <input class="input-field" type="password" name="password" placeholder="Password" required>
            <button class="login-button" type="submit">Login</button>
        </form>
    </div>

    <!-- Disclaimer Display -->
    <div class="disclaimer-container">
        <p class="disclaimer-text">
            This is Developed Strictly For Educational Purposes.<br>
            Any Malicious use or intent, the developer will not<br> be held accountable by Canadian law.
        </p>
    </div>
</body>
</html>
