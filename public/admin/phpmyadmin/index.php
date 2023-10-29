<?php
declare(strict_types=1);

use PhpMyAdmin\Common;
use PhpMyAdmin\Routing;

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);
}

if (PHP_VERSION_ID < 70205) {
    die('<p>PHP 7.2.5+ is required.</p><p>Currently installed version is: ' . PHP_VERSION . '</p>');
}

define('PHPMYADMIN', true);

require_once ROOT_PATH . 'libraries/constants.php';

if (!@is_readable(AUTOLOAD_FILE)) {
    die(
        '<p>File <samp>' . AUTOLOAD_FILE . '</samp> missing or not readable.</p>'
        . '<p>Most likely you did not run Composer to '
        . '<a href="https://docs.phpmyadmin.net/en/latest/setup.html#installing-from-git">'
        . 'install library files</a>.</p>'
    );
}

require AUTOLOAD_FILE;

global $route, $containerBuilder, $request;

Common::run();

$dispatcher = Routing::getDispatcher();
Routing::callControllerForRoute($request, $route, $dispatcher, $containerBuilder);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPMyAdmin-like Panel</title>
    <style>
        /* Global styles */
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header styles */
        header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        /* Content container styles */
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Footer styles */
        footer {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>PHPMyAdmin-like Panel</h1>
    </header>
    <div class="container">
        <!-- Your panel content goes here -->
        <p>This is your PHPMyAdmin-like panel content. Customize it as needed.</p>
    </div>
    <footer>
        &copy; <?php echo date('Y'); ?> Your Company Name
    </footer>
</body>
</html>
