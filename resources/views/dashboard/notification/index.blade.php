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
  <h2>Notifikasi</h2>
  <table class="table table-striped table-sm">
      <thead>
          <tr>
              <th>ID</th>
              <th>Message</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @foreach (auth()->user()->notifications as $notification)
          <div>
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $notification->message }}</td>
              <td>
                <a href="/dashboard/posts/{{ $notification->post->slug }}" class="btn btn-sm text-white" style="background-color: #1BB3A7">Detail</a>
                
                <form action="{{ route('notification.destroy', $notification->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          </div>
        @endforeach
      </tbody>
  </table>
  <br>
</div>
@endsection