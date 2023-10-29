<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sender Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        form {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin: 10px 0;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
        }

        #qr-button {
            background-color: #0077cc;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Enter Sender Information</h1>
    <form action="generate_url.php" method="POST">
        <label for="sender_name">Sender's Name:</label>
        <input type="text" id="sender_name" name="sender_name" required>
        <br>

        <label for="amount">Amount:</label>
        <select id="amount" name="amount" required>
            <!-- Loop through values from 10 to 10000 with a step of 5 -->
            <?php for ($value = 10; $value <= 10000; $value += 5): ?>
                <option value="<?php echo number_format($value, 2); ?>" <?php if ($amount == number_format($value, 2)) echo 'selected'; ?>>
                    <?php echo number_format($value, 2); ?>
                </option>
            <?php endfor; ?>
        </select>
        <br>

        <input type="submit" id="generate-url-button" value="Generate URL">
    </form>
    <button id="qr-button" onclick="window.location.href = 'https://qr-code-generator.com';">Generate QR Code</button>
<button id="copy-url-button">Copy Current URL</button>

<script>
    // Add an event listener to the "Copy Current URL" button
    document.getElementById("copy-url-button").addEventListener("click", function() {
        // Get the current page's URL
        var currentUrl = window.location.href;

        // Remove everything after ".com"
        var parts = currentUrl.split(".com");
        currentUrl = parts[0] + ".com";

        // Add the additional path and form attributes
        var senderName = document.getElementById("sender_name").value;
        var amount = document.getElementById("amount").value;
        currentUrl += "/public/deposit/index.php?sender_name=" + senderName + "&amount=" + amount;

        // Copy the modified URL to the clipboard
        copyToClipboard(currentUrl);
        alert("URL copied to clipboard: " + currentUrl);
    });

    function copyToClipboard(text) {
        var textArea = document.createElement("textarea");
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("copy");
        document.body.removeChild(textArea);
    }
</script>


</html>
