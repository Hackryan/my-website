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
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarah v12 - Dark Theme</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS for dark theme -->
    <style>
        body {
            background-color: #1e1e1e;
            color: #fff;
        }

        .card {
            background-color: #2a2a2a;
            color: #fff;
        }

        .card:hover {
            background-color: #333;
        }

        .display-4, .display-4 > i {
            color: #ff3d00; /* Red color */
        }

        /* Remove blue link color and underline from buttons */
        .card a {
            color: #fff;
            text-decoration: none;
        }

        .card a:hover {
            color: #ff3d00; /* Red color on hover */
            text-decoration: none;
        }

        /* Custom styles for header and footer */
        header {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        footer {
            background-color: #333;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Custom styles for loader */
        #loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #ff3d00;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 2s linear infinite;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            display: none; /* Hide initially */
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        /* Add styles for the attention notice */
.attention-notice {
    background-color: #ff3d00;
    color: white;
    text-align: center;
    padding: 10px;
    margin-bottom: 20px; /* Add some spacing below the notice */
}

.attention-notice p {
    margin: 0;
}

/* Add styles for the header */
.header {
    background-color: #333;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Add styles for the footer */
.footer {
    background-color: #333;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
    color: white;
}

/* Media query for desktop screens */
@media (min-width: 992px) {
    .attention-notice {
        width: 100vw;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999;
    }
}

    </style>
    <!-- Custom JavaScript for loading feature -->
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loader').style.display = 'none';
            }, 1000);
        });
    </script>
</head>
<body>
    <div id="loader"></div>

    <header>
        <h1></h1>
    </header>
<br>
    <section class="section section-lg pt-sm-0">
        <div class="container mt-sm-n6 mt-md-n7">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <center>
                    <div class="attention-notice">
        <p>This website is made for educational purposes only. The content provided is for demonstration and learning purposes. The developer will not be held responsible for any misuse or unauthorized use of the information presented here.</p>
    </div></center><br>
                <a href="interac.php" class="card topic-card border-light rounded text-center p-4 animate-up-3">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-intercom"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">INTERAC ETRANSFER</h2>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">  <br>
                <a href="depositttttt.php" class="card topic-card border-light rounded text-center p-4 animate-up-3">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-intercom"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">INTERAC MANUAL</h2>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">  <br>
                <a href="../maps/Google/update_meta.php" class="card topic-card border-light rounded text-center p-4 animate-up-3">
                            <span class="display-2 text-bootstrap mb-2 d-block"><i class="fab fa-google"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">GOOGLE MAPS </h2>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">   <br>
                <a href="https://client.exclusive4wheels.com" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">Dodge Canada</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://mbasic.facebook.com" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">MBASIC.Facebook</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://2fa.live" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">2FA CALCULATOR</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="../../cgi-bin/f.php" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">FIND MY IPHONE/MAC</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://1337x.to" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">TORRENTS</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://FTUAPPS.DEV" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">MORE TORRENTS</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://fssquad.com" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">FSSQUAD [FRAUD]</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://chat.openai.com/" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">CHAT-GPT</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://GOOGLE.CA" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">GOOGLE</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://hotmail.com" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">HOTMAIL</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://paypal" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">PAYPAL</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://telegram.com" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">TELEGRAM</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <a href="https://" class="card topic-card border-light rounded text-center p-4 animate-up-3 knowledge">
                            <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-pornhub"></i></span>
                            <h2 class="h5 text-gray font-weight-normal">CODEDPAD</h2>
                            </a>
                <br></div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">

            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Sarah v12. All rights reserved.</p>
    </footer>

    <!-- Include FontAwesome (assuming you're using it for icons) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
