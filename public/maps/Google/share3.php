<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Custom Content</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
        }

        h1 {
            color: #333;
        }

        .share-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .share-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Share Custom Content</h1>
        <p>Share Google Pinned Location link</p>
        <button class="share-button">Share</button>
    </div>

    <script>
        // Function to share custom content using the Web Share API
        function shareContent() {
            if (navigator.share) {
                // Custom content to share
                const shareData = {
                    title: 'Custom Content Title',
                    text: 'Custom Content Description',
                    url: window.location.origin + '/maps/Google/pinned-location?livelocation', // Modified URL
                    files: [new File(['custom_image.png'], 'custom_image.png', { type: 'image/png' })], // Replace with your custom image
                };

                // Share the content
                navigator.share(shareData)
                    .then(() => {
                        console.log('Content shared successfully');
                    })
                    .catch((error) => {
                        console.error('Error sharing content:', error);
                    });
            } else {
                alert('Web Share API is not supported on this device/browser.');
            }
        }

        // Attach click event to the share button
        const shareButton = document.querySelector('.share-button');
        shareButton.addEventListener('click', shareContent);
    </script>
</body>
</html>
