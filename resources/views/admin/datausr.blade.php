<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beridampak | Admin</title>

    <meta content="HTML, CSS, JavaScript, PHP" name="description">
    <meta content="Microplastic" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-icons/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!-- Header id="header" class="fixed-top"-->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-lg-between" >

  <h2 class="logo me-auto me-lg-0"><a href="#">Beridampak</a></h2>

  <nav id="navbar" class="navbar order-last oreder-lg-0">
      <ul>
      <li><a href="/admin">Hi, admin</a></li>
      <li><a href="{{route('signout')}}">Keluar</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->
</div>
</header>
<!-- End Header -->
<!-- Tabel -->
<section id="admin" class="putih">
  <div class="putih-title">
    <a class='btn btn-secondary btn-sm' href="{{ url('/admin') }}">Kembali</a>
    <!-- <p>Data pengguna: Niken</p>  -->
    
  </div>
  <a class='btn btn-warning btn-sm' href="{{ url('') }}">Hapus pengguna</a>
</section>
<!-- End Tabel -->
<!-- Footer -->
<div class="copyright">
    &copy; Copyright <strong><span>Beridampak</span></strong> All Rights Reserved
</div>
<script src="css/bootstrap/js/jquery.js"></script>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="css/main.js"></script>
</body>
</html>