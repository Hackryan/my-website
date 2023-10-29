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
?><html lang="en" style="overflow: initial;">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-rqn26AG5Pj86AF4SO72RK5fyefcQ/x32DNQfChxWvbXIyXFePlEktwD18fEz+kQU"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://themesberg.com/css/themesberg.css">
  <style>
    body {
      background-color: #000;
      color: #fff;
    }

    .bg-soft {
      background-color: #000;
    }

    .navbar-light .navbar-nav .nav-link {
      color: #fff;
    }

    .navbar-light .navbar-nav .nav-link:hover {
      color: #ff0000;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' d='M4 6h16M4 12h16M4 18h16'%3e%3c/path%3e%3c/svg%3e");
    }

    .text-primary {
      color: #ff0000;
    }

    .text-bootstrap {
      color: #fff;
    }

    .border-light {
      border-color: #ff0000;
    }

    .shortcut-card .display-2 {
      font-size: 2rem;
    }

    @media (max-width: 767px) {
      .shortcut-card .display-2 {
        font-size: 3rem;
      }
    }
  </style>
</head>

<body style="overflow: initial;">
  <header>
    <nav class="navbar navbar-main navbar-expand-lg navbar-light bg-soft navbar-light">
      <div class="container">
        <a class="navbar-brand mr-lg-4" href="https://themesberg.com">
          <div class="d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 64">
              <defs>
                <style>
                  .class-1 {
                    fill: #ff0000;
                  }

                  .class-2,
                  .class-4 {
                    fill: #000;
                  }

                  .class-2 {
                    opacity: 0.32;
                    isolation: isolate;
                  }

                  .class-3 {
                    opacity: 0.16;
                  }
                </style>
              </defs>
              <!-- SVG code goes here -->
            </svg>
            <p class="ml-2 mb-0 logo-text">Sarah v8</p>
          </div>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links and user dropdown menu go here -->
      </div>
    </nav>
  </header>
  <main>
    <section class="section-header pt-5 pb-md-10 bg-soft">
      <div class="container">
        <!-- Section header content goes here -->
        <h1 class="display-4 text-center mb-4">Welcome to My Homepage</h1>
        <p class="lead text-center">Quick access to your favorite websites:</p>
      </div>
    </section>
    <section class="section section-lg pt-sm-0">
      <div class="container z-2 mt-sm-n6 mt-md-n7">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="https://www.facebook.com" class="card shortcut-card border-light rounded text-center p-4 animate-up-3">
              <div class="card-body px-0">
                <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-facebook"></i></span>
                <h2 class="h5 text-gray font-weight-normal">Facebook</h2>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="https://www.youtube.com" class="card shortcut-card border-light rounded text-center p-4 animate-up-3">
              <div class="card-body px-0">
                <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-youtube"></i></span>
                <h2 class="h5 text-gray font-weight-normal">YouTube</h2>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="https://www.codedpad.com" class="card shortcut-card border-light rounded text-center p-4 animate-up-3">
              <div class="card-body px-0">
                <span class="display-2 text-primary mb-2 d-block"><i class="fas fa-code"></i></span>
                <h2 class="h5 text-gray font-weight-normal">CodedPad.com</h2>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="https://www.messenger.com" class="card shortcut-card border-light rounded text-center p-4 animate-up-3">
              <div class="card-body px-0">
                <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-facebook-messenger"></i></span>
                <h2 class="h5 text-gray font-weight-normal">Messenger</h2>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="https://web.telegram.org" class="card shortcut-card border-light rounded text-center p-4 animate-up-3">
              <div class="card-body px-0">
                <span class="display-2 text-primary mb-2 d-block"><i class="fab fa-telegram-plane"></i></span>
                <h2 class="h5 text-gray font-weight-normal">Telegram</h2>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <!-- Add your sixth shortcut here -->
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>
