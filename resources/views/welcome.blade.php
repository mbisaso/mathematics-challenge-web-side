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
      flex-direction: column;
      text-align: center;
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

    .btn-get-started,
    .btn-watch-video {
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
      margin-left: 80px;
    }

    .navmenu {
      margin-left: auto;
    }

    .navmenu ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      gap: 20px;
      margin-right: 100px;
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
      /* text-align: center; */
      color: white;
    }

    .centered-text {
      display: flex;
      align-items: center;
      /* justify-content: center; */
      height: 100vh;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Math Quizes</h1>
      </a>

      <nav id="navmenu" class="navmenu d-flex">
        <ul>
          <li><a href="{{ route('guest') }}">Quest</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a class="btn-getstarted" href="{{ route('register') }}">Register</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <div class="full-page section-image">
    <div class="full-page-content">
      <h1 class="custom-font">{{ __('Mathematics
         Challenge 2024') }}</h1>
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

  <style>
    .dashboard-background {
        background-color: #f0f8ff;
        background-image: 
            linear-gradient(30deg, #f0f8ff 12%, transparent 12.5%, transparent 87%, #f0f8ff 87.5%, #f0f8ff),
            linear-gradient(150deg, #f0f8ff 12%, transparent 12.5%, transparent 87%, #f0f8ff 87.5%, #f0f8ff),
            linear-gradient(30deg, #f0f8ff 12%, transparent 12.5%, transparent 87%, #f0f8ff 87.5%, #f0f8ff),
            linear-gradient(150deg, #f0f8ff 12%, transparent 12.5%, transparent 87%, #f0f8ff 87.5%, #f0f8ff),
            linear-gradient(60deg, #e0f0ff 25%, transparent 25.5%, transparent 75%, #e0f0ff 75%, #e0f0ff),
            linear-gradient(60deg, #e0f0ff 25%, transparent 25.5%, transparent 75%, #e0f0ff 75%, #e0f0ff);
        background-size: 80px 140px;
        background-position: 0 0, 0 0, 40px 70px, 40px 70px, 0 0, 40px 70px;
    }

    .dashboard-card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        background-color: rgba(255, 255, 255, 0.9);
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    .card-text {
        font-size: 2.5rem;
        font-weight: 700;
    }
    .card-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
    }
    .math-symbol {
        position: absolute;
        opacity: 0.1;
        font-size: 5rem;
        font-weight: bold;
        color: #000;
        z-index: 0;
    }
</style>

<div class="content dashboard-background" style="min-height: 100vh; padding: 20px;">
    <div class="container-fluid">
        <div class="row">
            <!-- New pupils -->
            <div class="mb-4 col-md-4">
                <div class="dashboard-card" style="background: linear-gradient(135deg, #6e8efb, #a777e3); height: 200px;">
                    <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                        <span class="math-symbol" style="top: 10px; left: 10px;">+</span>
                        <i class="fas fa-user-plus card-icon"></i>
                        <h3 class="card-title">New Pupils</h3>
                        <p class="card-text">100</p>
                    </div>
                </div>
            </div>

            <!-- Total pupils -->
            <div class="mb-4 col-md-4">
                <div class="dashboard-card" style="background: linear-gradient(135deg, #11998e, #38ef7d); height: 200px;">
                    <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                        <span class="math-symbol" style="top: 10px; right: 10px;">Σ</span>
                        <i class="fas fa-users card-icon"></i>
                        <h3 class="card-title">Total Pupils</h3>
                        <p class="card-text">1,500</p>
                    </div>
                </div>
            </div>

            <!-- Number of challenges -->
            <div class="mb-4 col-md-4">
                <div class="dashboard-card" style="background: linear-gradient(135deg, #ff9a9e, #fad0c4); height: 200px;">
                    <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                        <span class="math-symbol" style="bottom: 10px; left: 10px;">∞</span>
                        <i class="fas fa-trophy card-icon"></i>
                        <h3 class="card-title">Available Challenges</h3>
                        <p class="card-text">3</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Number of schools -->
            <div class="mb-4 col-md-4">
                <div class="dashboard-card" style="background: linear-gradient(135deg, #667eea, #764ba2); height: 200px;">
                    <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                        <span class="math-symbol" style="bottom: 10px; right: 10px;">π</span>
                        <i class="fas fa-school card-icon"></i>
                        <h3 class="card-title">Total Schools</h3>
                        <p class="card-text">20</p>
                    </div>
                </div>
            </div>

            <!-- Number of pupils with incomplete challenges -->
            <div class="mb-4 col-md-4">
                <div class="dashboard-card" style="background: linear-gradient(135deg, #f6d365, #fda085); height: 200px;">
                    <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                        <span class="math-symbol" style="top: 50%; left: 10px; transform: translateY(-50%);">Δ</span>
                        <i class="fas fa-exclamation-circle card-icon"></i>
                        <h3 class="card-title">Incomplete Challenges</h3>
                        <p class="card-text">10</p>
                    </div>
                </div>
            </div>

            <!-- Number of best performing schools -->
            <div class="mb-4 col-md-4">
                <div class="dashboard-card" style="background: linear-gradient(135deg, #5ee7df, #b490ca); height: 200px;">
                    <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                        <span class="math-symbol" style="top: 50%; right: 10px; transform: translateY(-50%);">√</span>
                        <i class="fas fa-star card-icon"></i>
                        <h3 class="card-title">Top Performing Schools</h3>
                        <p class="card-text">5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
