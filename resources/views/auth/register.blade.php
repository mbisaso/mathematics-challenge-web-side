<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register - Mathematics Challenges</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Add this style for the background image -->
  <style>
    body {
      background-image: url("{{ asset('light-bootstrap/img/bg5.jpg') }}");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
      width: 100vw;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.8);
    }
  </style>
</head>

<body>

  <main>
    <div class="container">
      <section class="py-4 section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="py-4 d-flex justify-content-center">
                <a href="index.html" class="w-auto logo d-flex align-items-center">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Mathematics Schools</span>
                </a>
              </div>

              <div class="mb-3 card">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="pb-0 text-center text-blue-700 card-title fs-4">{{ __('Register') }}</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="name" class="form-label">{{ __('Name') }}</label>
                      <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
                      <div class="invalid-feedback">Please enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                      <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                      <div class="invalid-feedback">Please enter a valid Email address!</div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">{{ __('Password') }}</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="password_confirmation" class="form-label">{{ __('Password Confirmation') }}</label>
                      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                      <div class="invalid-feedback">Please confirm your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="agree" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">{{ __('Agree with terms and conditions') }}</label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">{{ __('Create Account') }}</button>
                    </div>
                    <div class="col-12">
                      <p class="mb-0 small">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="text-blue-500 credits">
                <!-- You can add your credits or remove this section -->
                Designed by <a href="">Group-19</a>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
