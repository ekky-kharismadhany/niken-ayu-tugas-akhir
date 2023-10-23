<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Register</title>
  <meta content="HTML, CSS, JavaScript, PHP" name="description">
  <meta content="Microplastic" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="img/favicon_io/favicon.ico">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="css/styles.css">

</head>

<body>


  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <h1>Beridampak</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul class="nav justify-content-center">
          <li><a href="/artikel">Artikel</a></li>
          <li><a href="/lokasi">Lokasi</a></li>
          <li><a href="/tantangan">Tantangan</a></li>
          <li><a href="/tentang-kita"> Tentang Kita</a></li>
        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
  <!-- End Header -->

  <!--Main Content-->
  <div class="container mt-3">
    <form method="POST" action="{{ route('register.post') }}">
      @csrf
      <div class="row jumbotron">
        <div class="col-sm-12 mx-t3 mb-4">
          <h2 class="text-center">Registrasi</h2>
        </div>
        <div class="col-sm-6 form-group">
          <label for="name">Nama Lengkap</label>
          <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus placeholder="Enter your full name">
        </div>
        <div class="col-sm-6 form-group">
          <label for="address-1">Kota Tinggal</label>
          <input type="address" class="form-control" name="address" id="address" placeholder="City name" required>
        </div>
        <div class="col-sm-6 form-group">
          <label for="tel">No HP</label>
          <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter your contact number" required>
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-f">Jenis Kelamin</label>
          <input type="text" class="form-control" name="gender" id="name-f" placeholder="Pria / Wanita" required>
        </div>
        <div class="col-sm-6 form-group">
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" class="form-control" name="email" required autocomplete="email" placeholder="Enter your email">
        </div>
        <div class="col-sm-6 form-group">
          <label for="pass" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
          <input type="Password" name="password" class="form-control" id="pass" placeholder="Enter your password" required>
        </div>
        <div class="col-sm-12 form-group mb-0">
          <button class="btn-get float-right mt-1">Submit</button>
        </div>
      </div>
    </form>
    <small class="d-block mt-2">Sudah punya akun? <a href="/masuk">Masuk sekarang</a></small>
  </div>
  <div class="copyright">
    &copy; Copyright <strong><span>Beridampak</span></strong> All Rights Reserved
  </div>
  <script src="./css/bootstrap/js/jquery.js"></script>
  <script src="./css/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>