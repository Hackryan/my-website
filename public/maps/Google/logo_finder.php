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
?><html>
<head>
    <title>Interac e-Transfer Logos</title>
    <style>
        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        
        .image-item {
            width: 200px;
            height: 200px;
            border: 1px solid #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .image-item img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
    </style>
    <script>
        var logoIndex = 1;
        var logoCount = 500;
        var validLogoURLs = [];

        function showLogoByIndex(index) {
            var logoURL = "https://etransfer-content.interac.ca/en/logo_CA" + padNumber(index, 6) + ".png";
            var image = document.getElementById("logo-preview");
            image.src = logoURL;
            
            var display = document.getElementById("logo-number");
            display.textContent = index;
            
            validateLogoURL(logoURL);
        }
        
        function padNumber(number, length) {
            return String(number).padStart(length, "0");
        }
        
        function navigateBack() {
            logoIndex = (logoIndex > 1) ? logoIndex - 1 : logoCount;
            showLogoByIndex(logoIndex);
        }
        
        function navigateForward() {
            logoIndex = (logoIndex < logoCount) ? logoIndex + 1 : 1;
            showLogoByIndex(logoIndex);
        }
        
        function copyLogoURL() {
            var logoURL = "https://etransfer-content.interac.ca/en/logo_CA" + padNumber(logoIndex, 6) + ".png";
            navigator.clipboard.writeText(logoURL);
            alert("Logo URL copied to clipboard: " + logoURL);
        }
        
        function validateLogoURL(url) {
            var img = new Image();
            img.src = url;
            img.onload = function() {
                validLogoURLs.push(url);
                console.log("Valid logo URL:", url);
            };
            img.onerror = function() {
                console.log("Invalid logo URL:", url);
            };
        }
        
        function autoSpinLogos() {
            var interval = setInterval(function() {
                navigateForward();
                if (logoIndex === 1) {
                    clearInterval(interval);
                    console.log("All logos checked. Valid logo URLs:", validLogoURLs);
                }
            }, 1000);
        }
        
        document.addEventListener("DOMContentLoaded", function() {
            showLogoByIndex(logoIndex);
            autoSpinLogos();
        });
    </script>
</head>
<body>
    <h1>Interac e-Transfer Logos</h1>
    
    <div class="image-container">
        <div class="image-item">
            <img id="logo-preview" src="" alt="Logo Preview">
        </div>
    </div>
    
    <button onclick="navigateBack()">Back</button>
    <button onclick="navigateForward()">Forward</button>
    
    <p>Logo Number: <span id="logo-number"></span></p>
    
    <button onclick="copyLogoURL()">Copy URL</button>
    
    <script>
        function showSelectedLogo() {
            var select = document.getElementById("logo-select");
            logoIndex = parseInt(select.value);
            showLogoByIndex(logoIndex);
        }
    </script>
    
    <label for="logo-select">Select a Logo:</label>
    <select id="logo-select" onchange="showSelectedLogo()">
        <option value="">-- Select Logo --</option>
        <?php
            for ($i = 1; $i <= 500; $i++) {
                echo '<option value="' . $i . '">Logo ' . $i . '</option>';
            }
        ?>
    </select>
</body>
</html>
