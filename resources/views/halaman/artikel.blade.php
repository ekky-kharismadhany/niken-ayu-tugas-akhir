@extends('layout.main')
@section('title', '| Artikel')

@section('konten')

<section id="upc" class="carousel">
  <div id="carouselExampleDark" class="carousel carousel-dark slide w-100 h-50">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="1000">
        <img src="img/slider1.jpg" class="d-block w-100">
        <div class="carousel-caption d-md-block">
          <h3><a href="/Oxodegradable:-Solusi-atau-Hanya-Sebuah-Ilusi-dalam-Menghadapi-Krisis-Plastik?">Oxodegradable: Solusi atau Hanya Sebuah Ilusi dalam Menghadapi Krisis Plastik?</a></h3>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="img/slider2.jpeg" class="d-block w-100">
        <div class="carousel-caption d-md-block">
          <h3><a href="/Mikroplastik:-Ancaman-Global-dan-Potensi-Bahaya-bagi-Manusia">Mikroplastik: Ancaman Global dan Potensi Bahaya bagi Manusia</a></h3>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="img/slider3.jpg" class="d-block w-100">
        <div class="carousel-caption d-md-block">
          <h3><a href="/Paris:-Saksi-Bisu-Hujan-Mikroplastik-Pertama-Dunia">Paris: Saksi Bisu Hujan Mikroplastik Pertama Dunia</a></h3>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
</section>

<!-- ======= Artikel Section ======= -->
<main id="main"> 
  <section id="artikel" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h4>Baca semua artikel</h4>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 portfolio-container">
      
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
          
          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
          <a href="img/straw.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="img/straw.jpg" class="img-fluid" alt=""></a>
          <div class="portfolio-info">
            <h4>Oxodegradable: Solusi atau Hanya Sebuah Ilusi dalam Menghadapi Krisis Plastik?</h4>
            <p>Dalam era modern, kita sering mendengar istilah "ramah lingkungan", termasuk dalam konteks plastik. Namun, sejauh mana kebenaran dari klaim ini? Apakah plastik ramah lingkungan benar-benar ramah terhadap Bumi kita?</p>
            <button class="btn-com"><a href="/Oxodegradable:-Solusi-atau-Hanya-Sebuah-Ilusi-dalam-Menghadapi-Krisis-Plastik?">Pelajari lebih lanjut</a></button>
          </div>
          </div>
          </div><!-- End Portfolio Item -->
      </div><!-- End Portfolio Container -->
    </div>
  </div>
  </section><!-- End Artikel Section -->

@endsection