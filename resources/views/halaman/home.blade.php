<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Beridampak</title>

  <meta content="HTML, CSS, JavaScript, PHP" name="description">
  <meta content="Microplastic" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="img/favicon_io/favicon.ico">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-icons/bootstrap-icons.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <!-- Header id="header" class="fixed-top"-->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h2 class="logo me-auto me-lg-0"><a href="#">Beridampak</a></h2>

      <nav id="navbar" class="navbar order-last oreder-lg-0">
        <ul>
          <li><a href="/#about">Tentang Kita</a></li>
          <li><a href="/#artikel">Artikel</a></li>
          <li><a href="/#lokasi">Lokasi</a></li>
          <li><a href="/#tantangan">Tantangan</a></li>
          <!-- halo, user -->
          @if (Auth::check())
          <li>
            <a href="{{ route('user') }}">Profil {{Auth::user()->nama}}</a>
          </li>
          <li>
            <a href="{{ route('signout') }}">Keluar</a>
          </li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Up Section ======= -->
  <section id="up" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-10 col-lg-10">
          <h2>Kenalan dengan</h2>
          <p>Sebuah upaya edukasi mikroplastik kepada masyarakat secara umum dan luas. <br> Di sini kamu akan menemukan informasi menarik seputar plastik dan bumi kita, 2 entitas yang saling berkesinambungan.</p>
        </div>

      </div>
    </div>
  </section> <!-- End Up Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="img/aa.jpg" class="img-fluid" height="300" width="400" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h3>Website informatif dan edukatif</h3>
          <br>
          <p>
            Dengan semakin menurunnya kualitas bumi akibat pemakaian dan pengolahan sampah plastik dan mikroplastik yang tidak tepat, seorang mahasiswi asal PENS, Niken Ayu, mencoba mengedukasi masyarakat Indonesia melalui platform website mengenai mikroplastik. Beridampak memiliki beberapa fitur, seperti:
          </p>
          <ul>
            <li>Artikel edukatif;</li>
            <li>Video informatif dan menyenangkan;</li>
            <li>Saran tempat daur ulang sampah dan penjual produk non-mikroplastik;</li>
            <li>Tantangan gaya hidup ramah lingkungan.</li>
            <br>
            <li>Masih memiliki pertanyaan terkait website atau tantangan? Kamu bisa tanya kapan saja melalui tombol kanan bawah yang mengambang di setiap halaman.</li>
          </ul>
        </div>

      </div>

    </div>

  </section><!-- End About Section -->
  <!-- ======= Artikel Section ======= -->
  <main id="main">
    <section id="artikel" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h4>Seberapa Tahu Kamu Tentang Lingkungan Kita?</h4>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="img/straw.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="img/straw.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4>Oxodegradable: Solusi atau Hanya Sebuah Ilusi dalam Menghadapi Krisis Plastik?</h4>
                  <p>Dalam era modern, kita sering mendengar istilah "ramah lingkungan", termasuk dalam konteks plastik. Namun, sejauh mana kebenaran dari klaim ini? Apakah plastik ramah lingkungan benar-benar ramah terhadap bumi kita?</p>
                  <button class="btn-com"><a href="/Oxodegradable:-Solusi-atau-Hanya-Sebuah-Ilusi-dalam-Menghadapi-Krisis-Plastik?">Pelajari lebih lanjut</a></button>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="img/hujan.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="img/hujan.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4>Paris: Saksi Bisu Hujan Mikroplastik Pertama Dunia</h4>
                  <p>Paris, ibu kota Perancis yang sangat dikenal dengan cinta dan keindahannya, kini menghadapi ancaman baru: hujan mikroplastik. Sebuah fenomena baru di dunia yang mengkhawatirkan dan mencerminkan bagaimana urgensi masalah lingkungan secara global.</p>
                  <button class="btn-com"><a href="/Paris:-Saksi-Bisu-Hujan-Mikroplastik-Pertama-Dunia">Pelajari lebih lanjut</a></button>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="img/mikroplastik.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="img/mikroplastik.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4>Mikroplastik: Ancaman Global dan Potensi Bahaya bagi Manusia</h4>
                  <p>Dalam era modern ini, mikroplastik telah menjadi ancaman serius yang menyebar ke seluruh penjuru dunia. Mari kita gali lebih dalam tentang apa itu mikroplastik, pengaruhnya pada kesehatan menurut para ahli, dan apa yang bisa kita lakukan untuk mengatasi masalah ini.</p>
                  <button class="btn-com"><a href="/Mikroplastik:-Ancaman-Global-dan-Potensi-Bahaya-bagi-Manusia">Pelajari lebih lanjut</a></button>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- End Artikel Section -->


    <!-- ======= Lokasi ======= -->
    <section id="lokasi" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Yuk, Ikut Memberikan Dampak Dengan Menjaga Lingkungan</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4>Buat bumi senang dengan beralih ke gaya hidup ramah lingkungan</h4>
              <form action="/lokasi">
                <button class="btn-center" type="submit">Cari kebutuhanmu</button>
              </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4>10+</h4>
              <h4>Tempat yang bisa kamu kunjungi</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4>Daur ulang sampahmu yuk, kamu bisa mulai dari sekarang</h4>
              <form action="/lokasi">
                <button class="btn-center">Cek lokasi di sekitarmu</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Lokasi -->


    <!-- Tantangan -->
    <section id="tantangan" class="tantang">
      <div class="container" data-aos="fade-up">
        <div class="tantang-title">
          <p>Berani Merubah Gaya Hidupmu?</p>
        </div>
        <div class="text-center">
          <p>Jangan hanya membaca, yuk ikut memberi dampak dengan mengikuti tantangan - tantangan dari kita. <br> Tantang dirimu sendiri dengan menyelesaikan tantangan gaya hidup ramah lingkungan di dalam sini!</p>
          <button class="btn-com"><a href="/tantangan">Klik dan tantang dirimu</a></button>
        </div>
      </div>
    </section>
    <!-- End Tantangan -->

    <!-- Footer -->
    <footer id="footer" class="footer">
      <div class="buttonkanan">
        <a href="https://forms.gle/KK5toN5xyxjc8kTa9" target="_blank">
          <img src="img/customer-service.png" class="img-fluid" alt="customer service" style="height: 7vh;">
        </a>
      </div>
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
              <li><a href="/syarat-dan-ketentuan">Syarat dan Ketentuan</a></li>
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
    <script src="css/bootstrap/js/jquery.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="css/main.js"></script>
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
</body>

</html>