<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mathematics Challenges</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      margin: 0;
      padding: 0;
      height: 100%;
      overflow-x: hidden;
    }

    .custom-font {
      font-size: 4rem;
    }

    .logo {
      width: 150px;
      height: auto;
      margin-top: 10px;
    }

    .full-page {
      background-image: url("{{ asset('light-bootstrap/img/full-screen-image-2.jpg') }}");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .section {
      padding: 60px 0;
    }

    .dark-background {
      background: #0a0a0a;
      color: #fff;
    }

    .light-background {
      background: #f8f9fa;
      color: #000;
    }

    .hero-img img {
      max-width: 100%;
    }

    .btn-get-started, .btn-watch-video {
      margin-right: 10px;
    }

    .header {
      background: transparent;
      padding: 10px 0;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 999;
    }

    .sitename {
      color: #fff;
      font-size: 1.5rem;
      font-weight: 700;
      margin-left: 10px;
    }

    .navmenu ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      gap: 20px;
      margin-left: auto;
    }

    .navmenu ul li {
      display: inline;
    }

    .navmenu a {
      color: #fff;
      text-decoration: none;
      font-size: 1rem;
    }

    .btn-getstarted {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border-radius: 20px;
      text-decoration: none;
    }

    .full-page-content {
      text-align: center;
      color: white;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Math Quizes</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#team">Performance</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a class="btn-getstarted" href="{{ route('register') }}">Register</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <div class="full-page section-image">
    <div class="full-page-content">
      <h1 class="custom-font">{{ __('Welcome To The Mathematics Challenge 2024') }}</h1>
    </div>
      <div class="order-2 col-lg-6 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Making Better Mathematics Pupils</h1>
            <p>We make your child a mathematical genius</p>

            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center">
                <i class="bi bi-play-circle"></i><span>Watch Video</span>
              </a>
            </div>
          </div>
  </div>

  <main class="main">
    <section id="" class="">
      <div class="container">
        <div class="row gy-4">

        </div>
      </div>
    </section>
  </main>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
