@extends('layout.main')
@section('title', 'Tantangan')

@section('konten')
<!-- Tantangan -->
<section id="celen" class="celen">
  <div class="container" data-aos="fade-up">
    <div class="celen-title">
      <p>Mengurangi Polusi Mikroplastik dari Ban Kendaraan</p>
    </div>
    <div class="video">
      <iframe src="https://www.youtube.com/embed/En6qPed2WSk?autoplay=1"></iframe>
    </div>
    <br>
    <div class="text-center">
      <p>Sehari belajar mengurangi polusi mikroplastik dari ban kendaraan saat akan berpergian.</p>
    </div>
    <form id="form-challenge" method="POST" action="{{ route('second-challenge.post') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="formFile" class="form-label">Bersepeda sembari menikmati lingkungan</label>
        <input id="item1" name="challengeItem1" class="form-control" type="file" accept="image/*" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Memakai kendaraan umum untuk perjalanan jauh</label>
        <input id="item2" name="challengeItem2" class="form-control" type="file" accept="image/* required" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Jalan kaki untuk perjalanan dekat</label>
        <input id="item3" name="challengeItem3" class="form-control" type="file" accept="image/* required" required>
      </div>
      <div>
        <input class="form-control" id="formFile" name="user_id" value="{{ Auth::user()->id }}" hidden>
      </div>
      <div>
        <input id="tantanganType" class="form-control" id="formFile" name="challengeType" value="tantangan 2" hidden>
      </div>
      <button id="form-challenge-btn" class="btn-com mb-3" type="submit">Selesaikan Tantangan</button>
    </form>
    @isset($success)
      <div class="alert alert-success" role="alert">
        {{ $success }}
      </div>
    @endisset
    @isset($failed)
      <div class="alert alert-danger" role="alert">
        {{ $failed }}
      </div>
    @endisset
  </div>
</section>
<!-- End Tantangan -->
@endsection