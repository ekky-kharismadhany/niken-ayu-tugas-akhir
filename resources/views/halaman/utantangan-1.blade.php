@extends('layout.main')
@section('title', 'Tantangan')

@section('konten')
<!-- Tantangan -->
<section id="celen" class="celen">
  <div class="container" data-aos="fade-up">
    <div class="celen-title">
      <p>Sehari Memakai Barang Guna Ulang</p>
    </div>
    <div class="video">
      <iframe src="https://www.youtube.com/embed/FzAxxdVFnMQ?autoplay=1"></iframe>
    </div>
    <br>
    <div class="text-center">
      <p>Coba sehari jajan di luar dengan memakai tempat minum dan makan sendiri dari rumah! Jangan lupa sedotan <i>stainless</i> juga ya!</p>
    </div>
    <form id="form-challenge" method="POST" action="{{ route('first-challenge.post') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="formFile" class="form-label">Pakai <i>tumblr</i> sendiri</label>
        <input id="item1" class="form-control" type="file" id="formFile" name="challengeItem1" accept="image/*" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Selalu pakai sedotan <i>stainless steel</i></label>
        <input id="item2" class="form-control" type="file" id="formFile" name="challengeItem2" accept="image/*" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Pakai <i>totebag</i> atau tas pakai ulang</label>
        <input id="item3" class="form-control" type="file" id="formFile" name="challengeItem3" accept="image/*" required>
      </div>
      <div>
        <input class="form-control" id="formFile" name="user_id" value="{{ Auth::user()->id }}" hidden>
      </div>
      <div>
        <input id="tantanganType" class="form-control" id="formFile" name="challengeType" value="tantangan 1" hidden>
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
</section>
<!-- End Tantangan -->
@endsection