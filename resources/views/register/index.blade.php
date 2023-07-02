@extends('layouts.main')

@section('container')
<div class="row justify-content-center pt-4">
  <div class="col-lg-5">     
    <main class="form-registration">
      <div class="d-flex justify-content-center">
        <img class="mb-2" src="/img/VilominaLogoIcon2.png" alt="" width="170" height="170">
      </div>
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form action="/register" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="Tanggal_Lahir" required value="{{ old('tanggal_lahir') }}">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          @error('tanggal_lahir')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="file" name="foto_profil" class="form-control @error('foto_profil') is-invalid @enderror" id="foto_profil" accept="image/*">
          <label for="foto_profil" class="pt-2">Upload Foto Profil</label>
          @error('foto_profil')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-check pt-2">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            <a href="/syaratketentuan" class="text-decoration-none text-black">Syarat dan Ketentuan</a>
          </label>
        </div>
        <div id="alertContainer"></div>
        <button class="w-100 btn btn-lg mt-3 text-white" style="background-color: #1BB3A7"  type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Have Account? <a href="/login">Login Now!</a></small>
    </main>

  </div>
</div>

<script>
  // Fungsi untuk memeriksa apakah checkbox terceklis
  function validateForm() {
    var checkbox = document.getElementById('flexCheckDefault');
    if (!checkbox.checked) {
      var alertDiv = document.createElement('div');
      alertDiv.classList.add('alert', 'alert-warning');
      alertDiv.role = 'alert';
      alertDiv.innerHTML = '<strong>Peringatan:</strong> Anda harus menyetujui Syarat dan Ketentuan.';
      document.getElementById('alertContainer').appendChild(alertDiv);

      return false;
    }
    return true;
  }
</script>

@endsection