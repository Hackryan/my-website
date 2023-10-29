<?php
$bot_count = 0;
$Bot = array("abot","dbot","ebot","hbot","kbot","lbot","mbot","nbot","obot","pbot","rbot","sbot","tbot","vbot","ybot","zbot","bot.","bot/","_bot",".bot","/bot","-bot",":bot","(bot","crawl","slurp","spider","seek","accoona","acoon","adressendeutschland","ah-ha.com","ahoy","altavista","ananzi","anthill","appie","arachnophilia","arale","araneo","aranha","architext","aretha","arks","asterias","atlocal","atn","atomz","augurfind","backrub","bannana_bot","baypup","bdfetch","bigbrother","biglotron","bjaaland","blackwidow","blaiz","blog","blo.","bloodhound","boitho","booch","bradley","butterfly","calif","cassandra","ccubee","cfetch","charlotte","churl","cienciaficcion","cmc","collective","comagent","combine","computingsite","csci","curl","cusco","daumoa","deepindex","delorie","depspid","deweb","dieblindekuh","digger","ditto","dmoz","docomo","downloadexpress","dtaagent","dwcp","ebiness","ebingbong","e-collector","ejupiter","emacs-w3searchengine","esther","evliyacelebi","ezresult","falcon","felixide","ferret","fetchrover","fido","findlinks","fireball","fishsearch","fouineur","funnelweb","gazz","gcreep","genieknows","getterroboplus","geturl","glx","goforit","golem","grabber","grapnel","gralon","griffon","gromit","grub","gulliver","hamahakki","harvest","havindex","helix","heritrix","hkuwwwoctopus","homerweb","htdig","htmlindex","html_analyzer","htmlgobble","hubater","hyper-decontextualizer","ia_archiver","ibm_planetwide","ichiro","iconsurf","iltrovatore","image.kapsi.net","imagelock","incywincy","indexer","infobee","informant","ingrid","inktomisearch.com","inspectorweb","intelliagent","internetshinchakubin","ip3000","iron33","israeli-search","ivia","jack","jakarta","javabee","jetbot","jumpstation","katipo","kdd-explorer","kilroy","knowledge","kototoi","kretrieve","labelgrabber","lachesis","larbin","legs","libwww","linkalarm","linkvalidator","linkscan","lockon","lwp","lycos","magpie","mantraagent","mapoftheinternet","marvin/","mattie","mediafox","mediapartners","mercator","merzscope","microsofturlcontrol","minirank","miva","mj12","mnogosearch","moget","monster","moose","motor","multitext","muncher","muscatferret","mwd.search","myweb","najdi","nameprotect","nationaldirectory","nazilla","ncsabeta","nec-meshexplorer","nederland.zoek","netcartawebmapengine","netmechanic","netresearchserver","netscoop","newscan-online","nhse","nokia6682/","nomad","noyona","siteexplorer","nutch","nzexplorer","objectssearch","occam","omni","opentext","openfind","openintelligencedata","orbsearch","osis-project","packrat","pageboy","pagebull","page_verifier","panscient","parasite","partnersite","patric","pear.","pegasus","peregrinator","pgpkeyagent","phantom","phpdig","picosearch","piltdownman","pimptrain","pinpoint","pioneer","piranha","plumtreewebaccessor","pogodak","poirot","pompos","poppelsdorf","poppi","populariconoclast","psycheclone","publisher","python","rambler","ravensearch","roach","roadrunner","roadhouse","robbie","robofox","robozilla","rules","salty","sbider","scooter","scoutjet","scrubby","search.","searchprocess","semanticdiscovery","senrigan","sg-scout","shai'hulud","shark","shopwiki","sidewinder","sift","silk","simmany","sitesearcher","sitevalet","sitetech-rover","skymob.com","sleek","smartwit","sna-","snappy","snooper","sohu","speedfind","sphere","sphider","spinner","spyder","steeler/","suke","suntek","supersnooper","surfnomore","sven","sygol","szukacz","tachblackwidow","tarantula","templeton","/teoma","t-h-u-n-d-e-r-s-t-o-n-e","theophrastus","titan","titin","tkwww","toutatis","t-rex","tutorgig","twiceler","twisted","ucsd","udmsearch","urlcheck","updated","vagabondo","valkyrie","verticrawl","victoria","vision-search","volcano","voyager/","voyager-hc","w3c_validator","w3m2","w3mir","walker","wallpaper","wanderer","wauuu","wavefire","webcore","webhopper","webwombat","webbandit","webcatcher","webcopy","webfoot","weblayers","weblinker","weblogmonitor","webmirror","webmonkey","webquest","webreaper","websitepulse","websnarf","webstolperer","webvac","webwalk","webwatch","webwombat","webzinger","wget","whizbang","whowhere","wildferret","worldlight","wwwc","wwwster","xenu","xget","xift","xirq","yandex","yanga","yeti","yodao","zao/","zippp","zyborg","proximic","Googlebot","Baiduspider","Cliqzbot","A6-Indexer","AhrefsBot","Genieo","BomboraBot","CCBot","URLAppendBot","DomainAppender","msnbot-media","Antivirus","YoudaoBot","MJ12bot","linkdexbot","Go-http-client",	"Googlebot","Baiduspider","PhantomJS","applebot","metauri.com","Twitterbot","ia_archiver","R6_FeedFetcher","NetcraftSurveyAgent","Sogouwebspider","bingbot","Yahoo!Slurp","facebookexternalhit","PrintfulBot","msnbot","Twitterbot","UnwindFetchor","urlresolver","Butterfly","TweetmemeBot","PaperLiBot","MJ12bot","AhrefsBot","Exabot","Ezooms","YandexBot","SearchmetricsBot","picsearch","TweetedTimesBot","QuerySeekerSpider","ShowyouBot","woriobot","merlinkbot","BazQuxBot","Kraken","SISTRIXCrawler","R6_CommentReader","magpie-crawler","GrapeshotCrawler","PercolateCrawler","MaxPointCrawler","R6_FeedFetcher","NetSeercrawler","grokkit-crawler","SMXCrawler","PulseCrawler","Y!J-BRW","80legs.com/webcrawler","Mediapartners-Google","Spinn3r","InAGist","Python-urllib","NING","TencentTraveler","Feedfetcher-Google","mon.itor.us","spbot","Feedly","bot","java","curl","spider","crawler");

   if(in_array($_SERVER['REMOTE_ADDR'],$Bot)) {
	     #header('Location: https://www.google.com/search?q='.$settings['out']);
	     $bot_count += 1;
	     #die();

	}

$Botname = array(
		"bot","above","google","softlayer","amazonaws","cyveillance","compatible","facebook","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","apache-httpclient","lssrocketcrawler","Trident","Macintosh","crawler","urlredirectresolver","jetbrains","spam","windows95","windows98","acunetix","netsparker","google","007ac9","192.comagent","200pleasebot","360spider","4seohuntbot","50.nu","a6-indexer","admantx","amznkassocbot","aboundexbot","aboutusbot","abravespider","accelobot","acoonbot","addthis.com","adsbot-google","ahrefsbot","alexabot","amagit.com","analytics","antbot","apercite","aportworm","arabot","crawl","slurp","spider","seek","accoona","acoon","adressendeutschland","ah-ha.com","ahoy","altavista","ananzi","anthill","appie","arachnophilia","arale","araneo","aranha","architext","aretha","arks","asterias","atlocal","atn","atomz","augurfind","backrub","bannana_bot","baypup","bdfetch","bigbrother","biglotron","bjaaland","blackwidow","blaiz","blog","blo.","bloodhound","boitho","booch","bradley","butterfly","calif","cassandra","ccubee","cfetch","charlotte","churl","cienciaficcion","cmc","collective","comagent","combine","computingsite","csci","curl","cusco","daumoa","deepindex","delorie","depspid","deweb","dieblindekuh","digger","ditto","dmoz","docomo","downloadexpress","dtaagent","dwcp","ebiness","ebingbong","e-collector","ejupiter","emacs-w3searchengine","esther","evliyacelebi","ezresult","falcon","felixide","ferret","fetchrover","fido","findlinks","fireball","fishsearch","fouineur","funnelweb","gazz","gcreep","genieknows","getterroboplus","geturl","glx","goforit","golem","grabber","grapnel","gralon","griffon","gromit","grub","gulliver","hamahakki","harvest","havindex","helix","heritrix","hkuwwwoctopus","homerweb","htdig","htmlindex","html_analyzer","htmlgobble","hubater","hyper-decontextualizer","ia_archiver","ibm_planetwide","ichiro","iconsurf","iltrovatore","image.kapsi.net","imagelock","incywincy","indexer","infobee","informant","ingrid","inktomisearch.com","inspectorweb","intelliagent","internetshinchakubin","ip3000","iron33","israeli-search","ivia","jack","jakarta","javabee","jetbot","jumpstation","katipo","kdd-explorer","kilroy","knowledge","kototoi","kretrieve","labelgrabber","lachesis","larbin","legs","libwww","linkalarm","linkvalidator","linkscan","lockon","lwp","lycos","magpie","mantraagent","mapoftheinternet","marvin/","mattie","mediafox","mediapartners","mercator","merzscope","microsofturlcontrol","minirank","miva","mj12","mnogosearch","moget","monster","moose","motor","multitext","muncher","muscatferret","mwd.search","myweb","najdi","nameprotect","nationaldirectory","nazilla","ncsabeta","nec-meshexplorer","nederland.zoek","netcartawebmapengine","netmechanic","netresearchserver","netscoop","newscan-online","nhse","nokia6682/","nomad","noyona","nutch","nzexplorer","objectssearch","occam","omni","opentext","openfind","openintelligencedata","orbsearch","osis-project","packrat","pageboy","pagebull","page_verifier","panscient","parasite","partnersite","patric","pear.","pegasus","peregrinator","pgpkeyagent","phantom","phpdig","picosearch","piltdownman","pimptrain","pinpoint","pioneer","piranha","plumtreewebaccessor","pogodak","poirot","pompos","poppelsdorf","poppi","populariconoclast","psycheclone","publisher","python","rambler","ravensearch","roach","roadrunner","roadhouse","robbie","robofox","robozilla","rules","salty","sbider","scooter","scoutjet","scrubby","search.","searchprocess","semanticdiscovery","senrigan","sg-scout","shai'hulud","shark","shopwiki","sidewinder","sift","silk","simmany","sitesearcher","sitevalet","sitetech-rover","skymob.com","sleek","smartwit","sna-","snappy","snooper","sohu","speedfind","sphere","sphider","spinner","spyder","steeler/","suke","suntek","supersnooper","surfnomore","sven","sygol","szukacz","tachblackwidow","tarantula","templeton","/teoma","t-h-u-n-d-e-r-s-t-o-n-e","theophrastus","titan","titin","tkwww","toutatis","t-rex","tutorgig","twiceler","twisted","ucsd","udmsearch","urlcheck","updated","vagabondo","valkyrie","verticrawl","victoria","vision-search","volcano","voyager/","voyager-hc","w3c_validator","w3m2","w3mir","walker","wallpaper","wanderer","wauuu","wavefire","webcore","webhopper","webwombat","webbandit","webcatcher","webcopy","webfoot","weblayers","weblinker","weblogmonitor","webmirror","webmonkey","webquest","webreaper","websitepulse","websnarf","webstolperer","webvac","webwalk","webwatch","webwombat","webzinger","wget","whizbang","whowhere","wildferret","worldlight","wwwc","wwwster","xenu","xift","xirq","yandex","yanga","yeti","yahoo!");
	
	foreach ($Botname as $words) {
        if (stripos($_SERVER['HTTP_USER_AGENT'],$words)){
	     	#header('Location: https://www.google.com/search?q='.$settings['out']);
	    	$bot_count += 1;
	    }
    }
if($bot_count != 0){
    function ipppp() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    function getOS($useragent) {
      $os_platform = "Unknown OS Platform";
      $os_array = array('/windows nt 10/i' => 'Windows 10','/windows nt 6.3/i' => 'Windows 8.1','/windows nt 6.2/i' => 'Windows 8','/windows nt 6.1/i' => 'Windows 7','/windows nt 6.0/i' => 'Windows Vista','/windows nt 5.2/i' => 'Windows Server 2003/XP x64','/windows nt 5.1/i' => 'Windows XP','/windows xp/i' => 'Windows XP','/windows nt 5.0/i' => 'Windows 2000','/windows me/i' => 'Windows ME','/win98/i' => 'Windows 98','/win95/i' => 'Windows 95','/win16/i' => 'Windows 3.11','/macintosh|mac os x/i' => 'Mac OS X','/mac_powerpc/i' => 'Mac OS 9','/linux/i' => 'Linux','/ubuntu/i' => 'Ubuntu','/iphone/i' => 'iPhone','/ipod/i' => 'iPod','/ipad/i' =>  'iPad','/android/i' => 'Android','/blackberry/i' =>  'BlackBerry','/webos/i' => 'Mobile');
      foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $useragent)) {
          $os_platform = $value;
        }
      }
      return $os_platform;
    }

    function getBrowser($useragent) {
        $browser = "Unknown Browser";
        $browser_array = array('/msie/i' => 'Internet Explorer','/firefox/i' => 'Firefox','/safari/i' => 'Safari','/chrome/i' => 'Chrome','/opera/i' => 'Opera','/netscape/i' => 'Netscape','/maxthon/i' => 'Maxthon','/konqueror/i' => 'Konqueror','/mobile/i' => 'Handheld Browser');
        foreach ($browser_array as $regex => $value) {
            if (preg_match($regex, $useragent)) {
                $browser    =   $value;
            }
        }
        return $browser;
    }

    $IP = get_client_ip();
    $country = $dataf['country'];
    $browser = getBrowser($useragent);
    $os = getOS($useragent);
    $ip = get_client_ip();
    $date = date("h:i:s d/m/Y");
    $useragent = $useragent;
    $message = "+++++[ BOT - CrawlerDetect ]+++++\n";
    $message .= "IP         : ".$ip."\n";
    $message .= "OS         : ".$os."\n";
    $message .= "Browser    : ".$browser."\n";
    $message .= "User-Agent : ".$useragent."\n";
    $message .= "+++++[ @f4c3r100 ]+++++\n\n";
    $xy = fopen("./Logs/botlogs.txt", "a+");
    fwrite($xy, $message);
    fclose($xy);
    header("HTTP/1.0 404 Not Found");
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><?php
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
?><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    exit();
}
?>