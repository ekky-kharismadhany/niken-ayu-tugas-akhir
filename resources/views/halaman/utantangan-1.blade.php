@extends('layout.main')
@section('title', 'Tantangan')

@section('konten')
<!-- Tantangan -->
<section id="celen" class="celen">
  <div class="container" data-aos="fade-up">
    <div class="celen-title">
      <p>Sehari memakai barang guna ulang</p>
    </div>
    <div class="video">
      <iframe src="https://www.youtube.com/embed/FzAxxdVFnMQ?autoplay=1"></iframe>
    </div>
    <br>
    <div class="text-center">
      <p>Coba sehari jajan di luar dengan memakai tempat minum dan makan sendiri dari rumah! Jangan lupa sedotan stainless juga ya!</p>
    </div>
    <form id="form-challenge" method="POST" action="{{ route('first-challenge.post') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="formFile" class="form-label">Pakai tumblr sendiri</label>
        <input class="form-control" type="file" id="formFile" name="challengeItem1" accept="image/*" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Selalu pakai sedotan stainless steel</label>
        <input class="form-control" type="file" id="formFile" name="challengeItem2" accept="image/*" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Pakai totebag atau tas pakai ulang (reuse)</label>
        <input class="form-control" type="file" id="formFile" name="challengeItem3" accept="image/*" required>
      </div>
      <div>
        <input class="form-control" id="formFile" name="user_id" value="{{ Auth::user()->id }}" hidden>
      </div>
      <div>
        <input class="form-control" id="formFile" name="challengeType" value="tantangan 1" hidden>
      </div>
      <button id="form-challenge-btn" class="btn-com mb-3" type="submit">Selesaikan Tantangan</button>
    </form>
    @if(session("success"))
      <div class="alert alert-success" role="alert">
        {{ session("success") }}
      </div>
    @endif
    @if(session("failed"))
      <div class="alert alert-danger" role="alert">
        {{ session("failed") }}
      </div>
    @endif
</section>
<!-- End Tantangan -->
@endsection