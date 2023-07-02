@extends('dashboard.layouts.main')

@section('container')
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

<div class="table-responsive pt-3 pb-2 mb-3 col-lg-10">
  <h2>Penawaran</h2>
  <div class="dropdown-divider"></div>
    <a href="/dashboard/posts/create" class="btn btn-primary mb-2">Tambahkan Penawaran</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Promo</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->promo->jenis }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-sm text-white" style="background-color: #1BB3A7">Detail</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
             @method('delete')
             @csrf
             <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Are you sure?')">
              Delete
             </button>
            </form>
          </td>
        </tr>   
        @endforeach
      </tbody>
    </table>
  </div>
@endsection