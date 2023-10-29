<?php
// Add SSL headers
function addSSLHeaders()
{
    header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
    header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; img-src 'self'");
    header("X-Content-Type-Options: nosniff");
    header("X-Frame-Options: DENY");
    header("X-XSS-Protection: 1; mode=block");
    header("Referrer-Policy: no-referrer"); // New: Referrer-Policy header
    header("Feature-Policy: microphone 'none'; camera 'none'; geolocation 'none'"); // New: Feature-Policy header
}

// Call the function to add SSL headers
addSSLHeaders();

// Set a temporary cookie session to block deceptive behavior
if (!isset($_COOKIE['block_deceptive'])) {
    $expiry = time() + 3600; // Set the expiry time to 1 hour from now
    setcookie('block_deceptive', '1', $expiry, '/');
}

// Perform CSRF protection
session_start();
$csrfToken = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $csrfToken;

// Prevent XSS attacks
function sanitizeInput($input)
{
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $input;
}

// Encryption functions
function generateRandomKey($length = 32)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $key = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $key .= $characters[$index];
    }
    return $key;
}

function encryptData($data, $key)
{
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
    $encryptedData = openssl_encrypt($data, 'AES-256-CBC', $key, 0, $iv);
    $encryptedData = base64_encode($encryptedData) . '::' . base64_encode($iv);
    return $encryptedData;
}

function decryptData($encryptedData, $key)
{
    $dataParts = explode('::', $encryptedData, 2);
    if (count($dataParts) === 2) {
        $decryptedData = openssl_decrypt(base64_decode($dataParts[0]), 'AES-256-CBC', $key, 0, base64_decode($dataParts[1]));
        return $decryptedData;
    }
    return null;
}

// Get the current date
$currentDate = new DateTime();

// Calculate the expiry date (30 days from the current date)
$expiryDate = $currentDate->add(new DateInterval('P30D'));

// Format the expiry date as desired (e.g., "F j, Y")
$formattedExpiryDate = $expiryDate->format('F j, Y');
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
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forest Gump</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Unique dark theme */
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #ffffff;
            background-color: #0f0f0f;
            padding: 20px;
        }
        #container {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #191919;
            padding: 20px;
            border-radius: 5px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #333333;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
            color: #ffffff;
            background-color: #333333;
        }
        input[type="submit"] {
            background-color: #ff9900;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #ff7f00;
        }
        .error {
            color: #ff0000;
        }
        h1 {
            color: #ff9900;
            font-size: 32px;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            color: #ff9900;
            font-size: 16px;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #333333;
            border: 1px solid #ff9900;
            color: #ff9900;
        }
        .btn:hover {
            background-color: #ff9900;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>FOREST GUMP</h1>
	<form method="post" action="create.php">
        <h2>I THINK I LOVE YOU GENNY</h2>
            <button type="submit" class="btn btn-primary">Run</button>
        </form>
    </div>

</body></html>