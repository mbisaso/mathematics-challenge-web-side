@include("components.header")

<body>

@include("components.topnav")
@include("components.sidebar")

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          <div class="pt-4 card-body profile-card d-flex flex-column align-items-center">
            <img src="{{ asset('light-bootstrap/img/faces/face-3.jpg') }}" alt="Profile" class="rounded-circle">
            <h2>{{ __('Mr Desmond Aine') }}</h2>
            <h3>{{ __('Senior Examiner') }}</h3>
            <div class="mt-2 social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="card">
          <div class="pt-3 card-body">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>
            </ul>
            <div class="pt-2 tab-content">
              <div class="pt-3 tab-pane fade show active profile-edit" id="profile-edit">
                <!-- Profile Edit Form -->
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off" enctype="multipart/form-data">
                  @csrf
                  @method('patch')

                  @include('alerts.success')
                  @include('alerts.error_self_update', ['key' => 'not_allow_profile'])

                  <div class="mb-3 row">
                    <label for="input-name" class="col-md-4 col-lg-3 col-form-label">Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>
                      @include('alerts.feedback', ['field' => 'name'])
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="input-email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="email" name="email" id="input-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>
                      @include('alerts.feedback', ['field' => 'email'])
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form><!-- End Profile Edit Form -->
              </div>

              <div class="pt-3 tab-pane fade" id="profile-change-password">
                <!-- Change Password Form -->
                <form method="post" action="{{ route('profile.password') }}">
                  @csrf
                  @method('patch')

                  @include('alerts.success', ['key' => 'password_status'])
                  @include('alerts.error_self_update', ['key' => 'not_allow_password'])

                  <div class="mb-3 row">
                    <label for="input-current-password" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="password" name="old_password" id="input-current-password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" required>
                      @include('alerts.feedback', ['field' => 'old_password'])
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="input-password" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="password" name="password" id="input-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" required>
                      @include('alerts.feedback', ['field' => 'password'])
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="input-password-confirmation" class="col-md-4 col-lg-3 col-form-label">Confirm New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" required>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form><!-- End Change Password Form -->
              </div>
            </div><!-- End Bordered Tabs -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>