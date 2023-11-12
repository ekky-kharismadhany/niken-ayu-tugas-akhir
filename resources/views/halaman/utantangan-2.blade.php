@extends('layout.main')
@section('title', 'Tantangan')

@section('konten')
<!-- Tantangan -->
<section id="celen" class="celen">
  <div class="container" data-aos="fade-up">
    <div class="celen-title">
      <p>Mengurangi polusi mikroplastik dari ban kendaraan</p>
    </div>
    <div class="video">
      <iframe src=></iframe>
    </div>
    <br>
    <div class="text-center">
      <p>Sehari belajar mengurangi polusi mikroplastik dari ban kendaraan.</p>
    </div>
    <form id="form-challenge" method="POST" action="{{ route('second-challenge.post') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="formFile" class="form-label">Bersepeda saat berpergian</label>
        <input id="item1" name="challengeItem1" class="form-control" type="file" accept="image/*" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Memakai kendaraan umum saat berpergian</label>
        <input id="item2" name="challengeItem2" class="form-control" type="file" accept="image/* required" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Jalan kaki saat berpergian</label>
        <input id="item3" name="challengeItem3" class="form-control" type="file" accept="image/* required" required>
      </div>
      <div>
        <input class="form-control" id="formFile" name="user_id" value="{{ Auth::user()->id }}" hidden>
      </div>
      <div>
        <input id="tantanganType" class="form-control" id="formFile" name="challengeType" value="tantangan 2" hidden>
      </div>
      <button id="form-challenge-btn" class="btn-com mb-3" type="submit">Selesaikan tantangan</button>
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