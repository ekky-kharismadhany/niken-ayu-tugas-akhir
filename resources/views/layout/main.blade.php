<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/x-icon" href="img/favicon_io/favicon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Beridampak @yield('title')</title>

  <meta content="HTML, CSS, JavaScript, PHP" name="description">
  <meta content="Microplastic" name="keywords">

  <!-- Favicons -->
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <!-- Header id="header" class="fixed-top"-->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h2 class="logo me-auto me-lg-0"><a href="/">Beridampak</a></h2>

      <nav id="navbar" class="navbar order-last oreder-lg-0">
        <ul>
          <li><a href="/#about">Tentang Kita</a></li>
          <li><a href="/artikel">Artikel</a></li>
          <li><a href="/lokasi">Lokasi</a></li>
          <li><a href="/tantangan">Tantangan</a></li>
          <!-- halo, user -->
          @if (Auth::check())
          <li>
            <a href="{{ route('user') }}">Halo, {{Auth::user()->nama}}!</a>
          </li>
          <li>
            <a href="{{ route('signout') }}">Logout</a>
          </li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  @yield('konten')

<!-- Footer -->  
<footer id="footer" class="footer">
<button id="scrollUpBtn" class="btn btn-primary" title="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </button>
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="/" class="logo d-flex align-items-center"><span>Beridampak</span></a>
        <p>Bantu Beridampak agar dapat terus memberikan informasi terbaru dan terbaik dengan mengirim kritik dan saran membangun di bawah.</p>
        <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSczATzVCpT9FvLDuPvIOTAgm9vioSzFWmVL0ZKqgAnUxOyNNQ/formResponse">
          <div class="input-group mb-3">
            <textarea class="form-control" name="entry.1994726872" id="exampleFormControlTextarea1" rows="1"></textarea>
            <div class="input-group-append">
              <button class="btn-get" type="submit">Kirim</button>
            </div>
          </div>
        </form>
        <div class="social-links d-flex mt-4">
          <a href="https://www.instagram.com/pxrtrait.niakapuwa/" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/in/niken-wardhana/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Kategori</h4>
        <ul>
          <li><a href="/lokasi">Produk Non-Mikroplastik</a></li>
          <li><a href="/lokasi">Tempat Daur Ulang</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Customer Care</h4>
        <ul>
          <li><a href="/#about">Profil</a></li>
          <li><a href="syarat-dan-ketentuan">Syarat dan Ketentuan</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-links">
        <h4>Halaman</h4>
        <ul>
          <li><a href="/artikel">Artikel</a></li>
          <li><a href="/lokasi">Lokasi</a></li>
          <li><a href="/tantangan">Tantangan</a></li>
          <li><a href="/#about">Tentang Kita</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  &copy; Copyright <strong><span>Beridampak</span></strong> All Rights Reserved
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="css/main.js"></script>
</body>
<style>
  #scrollUpBtn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: none;
    z-index: 99;
  }
</style>
<script>
  window.onscroll = function() {
    // Show the scroll-up button when the user has scrolled down 300px
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      document.getElementById("scrollUpBtn").style.display = "block";
    } else {
      document.getElementById("scrollUpBtn").style.display = "none";
    }
  };

  // Scroll to the top when the button is clicked
  document.getElementById("scrollUpBtn").addEventListener("click", function() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
  });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  document.getElementById('change-user-data-btn').addEventListener('click', function(e) {
    e.preventDefault()
    swal({
        title: "Konfirmasi",
        text: "Apa anda yakin ingin mengubah data diri?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((result) => {
        if (result) {
          console.log("submit form");
          document.getElementById("form-user-data").submit()
        }
      });
  });
</script>

<script>
  document.getElementById('form-challenge-btn').addEventListener('click', function(e) {
    e.preventDefault()
    swal({
        title: "Konfirmasi",
        text: "Apa anda memasukkan foto tantangan dengan benar?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((result) => {
        if (result) {
          document.getElementById("form-challenge").submit()
        }
      });
  });
</script>

</html>