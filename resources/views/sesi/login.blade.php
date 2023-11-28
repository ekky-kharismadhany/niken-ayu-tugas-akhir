<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Masuk</title>
  <meta content="HTML, CSS, JavaScript, PHP" name="description">
  <meta content="Microplastic" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="img/favicon_io/favicon.ico">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/login.css">

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
  <!-- Main Content -->
  <div class="container">
    <h2 class="login-title">Masuk</h2>

    <form class="login-form" method="POST" action="{{ route('login.post') }}">
      @csrf
      <div>
        <label for="email">Email </label>
        <input id="email" type="email" placeholder="email@email.com" name="email" required />
      </div>
      <div>
        <label for="password">Password </label>
        <input id="password" type="password" placeholder="password" name="password" required />
      </div>
      <div class="row mb-4">
        <div class="col-2">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="showPassword" />
          </div>
        </div>
        <div class="d-flex col-md-auto">
          <label class="form-check-label align-self-end" for="showPassword">Lihat Password</label>
        </div>
      </div>
      <button class="btn btn--form" type="submit" value="login">Masuk</button>
    </form>
    <small class="d-block text-center mt-2"><a href="/registrasi">Daftar sekarang</a></small>
    @if(session("error"))
    <div class="alert alert-danger mt-5" role="alert">
      {{ session("error") }}
    </div>
    @endif
    @if(session("registerSuccess"))
    <div class="alert alert-success mt-5" role="alert">
      {{ session("registerSuccess") }}
    </div>
    @endif
    @if ($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
    </div>
    @endforeach
    @endif
  </div>

  <div class="copyright">
    &copy; Copyright <strong><span>Beridampak</span></strong> All Rights Reserved
  </div>
  <script src="./css/bootstrap/js/jquery.js"></script>
  <script src="./css/bootstrap/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const passwordInput = document.getElementById("password");
      const showPasswordCheckbox = document.getElementById("showPassword");
      showPasswordCheckbox.addEventListener("change", function() {
        passwordInput.type = this.checked ? 'text' : 'password';
      });
    });
  </script>

</body>

</html>

<link rel="stylesheet" href="css/login.css">