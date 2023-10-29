<!DOCTYPE html>
<html>
<head>    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Generator</title>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            color: #fff;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: #252525;
            border-radius: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #333;
            background-color: #1f1f1f;
            color: #fff;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #0066cc;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        #generatedUrl {
            margin-top: 20px;
            background-color: #252525;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: none;
        }
        #shortenedUrl {
            font-weight: bold;
            color: #0066cc;
        }
        #copyButton {
            background-color: #0066cc;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id="urlForm">
        <label for="sender_name">QUICK GEN + FROM + AMOUNT</label>
        <input type="text" id="sender_name" name="sender_name" value="DRONE OILFIELD LTD." required>
        <select id="amount" name="amount">
            <?php
            for ($i = 5.00; $i <= 3000.00; $i += 5.00) {
                echo '<option value="' . number_format($i, 2, '.', '') . '">' . number_format($i, 2, '.', '') . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Generate Shortened URL">
    </form>
    <div id="generatedUrl">
        Generated Shortened URL: <span id="shortenedUrl"></span>
        <button id="copyButton">Copy URL</button>
    </div>

    <script>
        $(document).ready(function() {
            $("#urlForm").submit(function(event) {
                event.preventDefault();
                var baseUrl = window.location.href.split(".com/")[0] + ".com/"; // Remove everything after .com/
                baseUrl += "/public/deposit/indexx.php?"; // Append /public/deposit/indexx.php?

                var senderName = encodeURIComponent($("#sender_name").val());
                var amount = encodeURIComponent($("#amount").val());
                var fullUrl = baseUrl + "sender_name=" + senderName + "&amount=" + amount;

                $.ajax({
                    url: "https://is.gd/create.php?format=json&url=" + encodeURIComponent(fullUrl),
                    dataType: "jsonp",
                    success: function(data) {
                        if (data.shorturl) {
                            $("#shortenedUrl").text(data.shorturl);
                            $("#generatedUrl").show();
                        } else {
                            alert("Error generating shortened URL");
                        }
                    },
                    error: function() {
                        alert("Error generating shortened URL");
                    }
                });
            });

            $("#copyButton").click(function() {
                var shortenedUrl = document.getElementById("shortenedUrl");
                var range = document.createRange();
                range.selectNode(shortenedUrl);
                window.getSelection().removeAllRanges();
                window.getSelection().addRange(range);
                document.execCommand("copy");
                window.getSelection().removeAllRanges();
                alert("Shortened URL copied to clipboard!");
            });
        });
    </script>
</body>
</html>