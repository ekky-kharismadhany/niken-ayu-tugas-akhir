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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="./css/styles.css">
</head>
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <h2 class="logo me-auto me-lg-0"><a href="#">Beridampak</a></h2>

    <nav id="navbar" class="navbar order-last oreder-lg-0">
      <ul>
        <li><a href="/admin">Hi, admin</a></li>
        <!-- <li><a href="">Keluar</a></li> -->
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header>

<body>
  <!-- Header id="header" class="fixed-top"-->
  <!-- End Header -->
  <!-- Tabel -->
  <section id="admin" class="putih">
    <div class="putih-title">
      <p>Data diri</p>
    </div>
    <form id="change-password-form" method="post" action="{{ route('change-userpassword') }}" class="row g-3">
      @csrf
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control mb-3" value="{{ $data->nama }}" style="max-width: 50vh" required disabled>
        </div>
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" name="email" class="form-control mb-3" value="{{ $data->email }}" style="max-width: 50vh" required disabled>
        </div>
        <label class="col-sm-2 col-form-label">Kota Tinggal</label>
        <div class="col-sm-10">
          <input type="text" name="alamat" class="form-control mb-3" value="{{ $data->alamat }}" style="max-width: 50vh" required disabled>
        </div>
        <label class="col-sm-2 col-form-label">Nomor HP</label>
        <div class="col-sm-10">
          <input type="text" name="phone" class="form-control mb-3" value="{{ $data->no_hp }}" style="max-width: 50vh" required disabled>
        </div>
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <input type="text" name="gender" class="form-control mb-3" value="{{ $data->gender }}" style="max-width: 50vh" required disabled>
        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label">Ganti Password</label>
        <div class="col-sm-10">
          <input type="password" name="password" class="form-control" id="inputPassword" style="max-width: 50vh" required>
        </div>
      </div>
      <input name="user_id" class="form-control" id="userID" value="{{ $data->id }}" hidden required>
      <div class="row">
        <div class="col-sm-12 form-group mb-0">
          <button id="change-password-btn" class="btn btn-success float-center mt-1">Ubah Password</button>
        </div>
        <div class="col-sm-12 form-group mb-0">
          <button class="btn btn-warning float-center mt-1"><a href="{{ route('admin') }}">Kembali</a></button>
        </div>
      </div>

    </form>
  </section>
  <!-- End Tabel -->
  <!-- Footer -->
  <div class="copyright">
    &copy; Copyright <strong><span>Beridampak</span></strong> All Rights Reserved
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="css/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    document.getElementById("change-password-btn").addEventListener("click", function(e) {
      e.preventDefault();
      swal({
        title: "Konfirmasi",
        text: "Apa anda yakin hendak mengubah password pengguna?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((result) => {
        if (result) {
          document.getElementById("change-password-form").submit();
        }
      });
    });
  </script>
</body>

</html>