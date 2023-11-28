@extends('layout.main')
@section('title', '| Tantangan')

@section('konten')
<!-- ======= Up Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
     <div class="col-xl-11 col-lg-8">
        <div class="section-title">
        <h3>Wow, Terpantau Kamu Suka Tantangan Ya!</h3>
        </div>
        <p>Yey, kamu berani untuk mencoba gaya hidup baru! Disini kamu bisa belajar sekaligus menantang dirimu dengan beberapa tantangan yang telah disiapkan.</p>
        <p>Tenang, tantangan nya mudah kok! Bisa diikuti baik bagi yang sudah lama hidup ramah lingkungan atau yang baru ingin memulai ramah lingkungan.</p>
        <p>Setiap poin tantangan yang terselesaikan, kamu akan mendapatkan 50 poin. 1 (satu) tantangan dapat berisi lebih dari 2 (dua) poin tantangan.</p>
      </div>
    </div>
  </div>
</section> <!-- End Up Section -->
<!-- ======= challenge ======= -->
<section id="lokasi" class="services">
  <div class="container" data-aos="fade-up">
  <div class="section-title">
    <p>Banyak Tantangan yang Menanti Dirimu di Sini</p>
  </div>

  <div class="row">
  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
  <div class="icon-box">
    <h4>Sehari Memakai Barang Guna Ulang</h4>
      <p>Coba sehari jajan di luar dengan memakai tempat minum dan makan sendiri dari rumah. Jangan lupa sedotan <i>stainless</i> juga ya!</p>
        <br>
        <br>
      <form action="/tantangan-1">
      <button class="btn-center" type="submit">Berani klik nggak?</button>
      </form>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
  <div class="icon-box">
    <h4>Mengurangi Polusi Mikroplastik dari Ban Kendaraan</h4>
      <p>Disini kamu akan belajar tiga alternatif cara mengurangi polusi mikroplastik yang berasal dari ban kendaraan.</p>
        <br>
        <br>
        <form action="/tantangan-2">
        <button class="btn-center" type="submit">Berani klik nggak?</button>
        </form>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
  <div class="icon-box">
    <h4>Memakai Produk Non-Mikroplastik</h4>
      <p>Yuk, pakai produk ramah lingkungan. Produk bisa kamu beli di supermarket terdekat atau pilihan yang ada di halaman lokasi <i>website</i> ini.</p>
        <br>
        <br>
        <form action="/tantangan-3">
        <button class="btn-center" type="submit">Berani klik nggak?</button>
        </form>
    </div>
  </div>
 </div>
</div>
</section>
<!-- End challenge -->

@endsection