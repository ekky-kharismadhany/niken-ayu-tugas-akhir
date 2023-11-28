@extends('layout.main')
@section('title')

@section('konten')
<div class="login-container">
  <h2 class="login-title">Masuk</h2>

  <form class="login-form" method="POST" action="{{ route('login.post') }}">
    @csrf
    <div>
      <label for="email">Email</label>
      <input id="email" type="email" placeholder="email@email.com" name="email" required />
    </div>
    <div>
      <label for="password">Kata Sandi</label>
      <input id="password" type="password" placeholder="Kata sandi" name="password" required />
    </div>
    <div class="row mb-4">
      <div class="col-2">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="showPassword" />
        </div>
      </div>
      <div class="d-flex col-md-auto">
        <label class="form-check-label align-self-end" for="showPassword">Lihat Password</label>
      </div>
    </div>
    <button class="btn btn--form" type="submit" value="login">Masuk</button>
  </form>
  <small class="d-block text-center mt-2"><a href="/registrasi">Daftar sekarang</a></small>
  @if(session("error"))
  <div class="alert alert-danger mt-5" role="alert">
    {{ session("error") }}
  </div>
  @endif
  @if(session("registerSuccess"))
  <div class="alert alert-success mt-5" role="alert">
    {{ session("registerSuccess") }}
  </div>
  @endif
  @if ($errors->any())
  @foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{ $error }}
  </div>
  @endforeach
  @endif
</div>

@endsection
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const passwordInput = document.getElementById("password");
    const showPasswordCheckbox = document.getElementById("showPassword");
    showPasswordCheckbox.addEventListener("change", function() {
      passwordInput.type = this.checked ? 'text' : 'password';
    });
  });
</script>