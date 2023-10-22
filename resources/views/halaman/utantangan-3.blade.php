@extends('layout.main')
@section('title', 'Tantangan')

@section('konten')
<!-- Tantangan -->
<section id="celen" class="celen">
  <div class="container" data-aos="fade-up">
    <div class="celen-title">
      <p>Memakai produk non-mikroplastik</p>
    </div>
    <div class="video">
      <iframe src="https://www.youtube.com/embed/Tn1KgqwgJP8?autoplay=1"></iframe>
    </div>
    <br>
    <div class="text-center">
      <p>Tantang dirimu memakai produk ramah lingkungan. Produk bisa kamu beli di supermarket terdekat atau di halaman lokasi website ini.</p>
    </div>
    <form id="form-challenge" method="post" action="{{ route('third-challenge.post') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="formFile" class="form-label">Memakai facecare non-mikroplastik (sabun muka, toner, sunscreen, dan sebagainya)</label>
        <input name="challengeItem1" class="form-control" type="file" accept="image/*" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Memakai bodycare non-mikroplastik (shampoo, sabun mandi, dan sebagainya)</label>
        <input name="challengeItem2" class="form-control" type="file" accept="image/*" required>
      </div>
      <div>
        <input class="form-control" id="formFile" name="user_id" value="{{ Auth::user()->id }}" hidden>
      </div>
      <div>
        <input class="form-control" id="formFile" name="challengeType" value="tantangan 3" hidden>
      </div>
      <button id="form-challenge-btn" class="btn-com mb-3" type="submit">Selesaikan tantangan</button>
  </div>
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