@extends('layout.main')
@section('title', '| User')

@section('konten')
<!-- ======= Up Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-xl-11 col-lg-8">
        <h2><span>Halo, {{$userName}}</span></h2>
        <h2><span>Sudah menebar kebaikan untuk bumi hari ini?</span></h2>
        <p>Poin tantangan kamu: {{ $userPoint }}</p>
      </div>
    </div>
  </div>
</section> <!-- End Up Section -->
<!-- ======= user ======= -->
<section id="admin" class="putih">
  <div class="putih-title">
    <p>Data diri</p>
  </div>
  <form method="post" id="form-user-data" action="{{ route('change-userdata') }}" class="row g-3">
    @csrf
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" name="name" class="form-control mb-3" value="{{ Auth::user()->nama }}" style="max-width: 50vh" required>
      </div>
      <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name="email" class="form-control mb-3" value="{{ Auth::user()->email }}" style="max-width: 50vh" required>
      </div>
      <label class="col-sm-2 col-form-label">Kota Tinggal</label>
      <div class="col-sm-10">
        <input type="text" name="alamat" class="form-control mb-3" value="{{ Auth::user()->alamat }}" style="max-width: 50vh" required>
      </div>
      <label class="col-sm-2 col-form-label">Nomor HP</label>
      <div class="col-sm-10">
        <input type="number" name="phone" class="form-control mb-3" value="{{ Auth::user()->no_hp }}" style="max-width: 50vh" required>
      </div>
      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
      <div class="col-sm-10">
        <select class="form-select mb-3" name="gender" aria-label="Gender Example" style="max-width: 50vh" required>
          <option value="Laki - Laki" {{ Auth::user()->gender === 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki</option>
          <option value="Perempuan" {{ Auth::user()->gender === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
      </div>
      <label for="inputPassword" class="col-sm-2 col-form-label">Ganti Password</label>
      <div class="col-sm-10">
        <input type="password" name="password" class="form-control mb-3" id="inputPassword" style="max-width: 50vh" required autocomplete="new-password">
      </div>
      <label for="passConfirmation" class="col-sm-2 col-form-label">Konfirmasi Password</label>
      <div class="col-sm-10">
        <input type="password" name="passwordConfirmation" class="form-control mb-3" id="passConfirmation" style="max-width: 50vh" required autocomplete="new-password">
      </div>
    </div>
    <input name="user_id" class="form-control" id="userID" value="{{ Auth::user()->id }}" hidden required>
    <div class="col-sm-12 form-group mb-0">
      <button type="submit" id="change-user-data-btn" class="btn-get float-center mt-1">Ubah Data Diri</button>
    </div>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger" role="alert">
      {{ session('error') }}
    </div>
    @endif
    @if ($errors->any())
      @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
      @endforeach
    @endif
  </form>
</section>
<!-- End user -->

@endsection