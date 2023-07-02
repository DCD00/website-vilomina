@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 ps-2">Profil</h1>
</div>
@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif
@if(session()->has('alert'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('alert') }}
  </div>
@endif
    <div class="col-lg-8">
      <form method="post" action="{{ route('profil.update') }}" enctype="multipart/form-data">
        @method("put")
        @csrf
        <div class="mb-3">
          <label for="foto_profil" class="form-label">Foto Profil</label>
          {{-- <div class="img-profil" style="height: 30ch">
            <img src="{{ asset('storage/' . Auth::user()->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          </div> --}}
          <img src="{{ asset('storage/' . Auth::user()->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="height: 30ch; width:30ch; ">
          <input type="file" class="form-control @error('foto_profil') is-invalid @enderror" id="foto_profil" name="foto_profil">
          @error('foto_profil')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', Auth::user()->name) }}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="tanggal_lahir" value="{{ old('tanggal_lahir', Auth::user()->tanggal_lahir) }}">
          @error('tanggal_lahir')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', Auth::user()->email) }}">
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn text-white" style="background-color: #1BB3A7">Submit</button>
      </form>
      
    </div>
    <br>

<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault()
    });

    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
</script>

@endsection