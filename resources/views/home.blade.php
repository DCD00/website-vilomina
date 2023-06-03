@extends('layouts.main')

@section('container')
@if(session()->has('success'))
  <div class="alert alert-success justify-content-center pt-3" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="row justify-content-center mb-3 pt-4">
    <div class="col mb-3">
        <form action="/offer" method="get">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <label for="date">Filter by Input:</label>
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                        {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                    </div> 
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <p class="text-decoration-underline">Sort Deals</p>
                      <select class="form-select" name="sort">
                        <option value="">by</option>
                        <option value="name_asc" @if(request('sort') == 'name_asc') selected @endif>Name (Ascending)</option>
                          <option value="name_desc" @if(request('sort') == 'name_desc') selected @endif>Name (Descending)</option>
                        <option value="latest" @if(request('sort') == 'latest') selected @endif>Newest to Oldest</option>
                        <option value="oldest" @if(request('sort') == 'oldest') selected @endif>Oldest to Newest</option>
                        <option value="highest" @if(request('price_sort') == 'highest') selected @endif>Highest to Lowest</option>
                        <option value="lowest" @if(request('price_sort') == 'lowest') selected @endif>Lowest to Highest</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-body">
                      <p class="text-decoration-underline">Keyword</p>
                      <input type="text" class="form-control" placeholder="Keyword" name="keyword" value="{{ request('keyword') }}">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <p class="text-decoration-underline">Price</p>
                      <label for="lowest_price">Lowest Price:</label>
                      <input type="text" class="form-control" placeholder="Min Price" name="min_price" value="{{ request('min_price') }}">
                      <label for="highest_price">Highest Price:</label>  
                      <input type="text" class="form-control" placeholder="Max Price" name="max_price" value="{{ request('max_price') }}">
                    </div>
                  </div>
                  
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <p class="text-decoration-underline">Promo</p>
                      <label for="promo">Type of Promo:</label>
                      <select class="form-select" id="promo" name="promo">
                          <option value="">All</option>
                          @foreach ($promos as $promo)
                          <option value="{{ $promo->slug }}" {{ request('promo') == $promo->slug ? 'selected' : '' }}>{{ $promo->jenis }}</option>
                          @endforeach
                      </select>

                      <label for="promo">Unit of Promo:</label>
                      <select class="form-select" name="unit">
                          <option value="">All</option>
                          <option value="Rp." @if(request('unit') == 'Rp.') selected @endif>Rp.</option>
                          <option value="%" @if(request('unit') == '%') selected @endif>%</option>
                      </select>
                      
                      <label for="value">Lowest Value of Promo:</label>
                      <input type="text" class="form-control" placeholder="Min Value" name="min_value" value="{{ request('min_value') }}">
                      <label for="value">Highest Value of Promo:</label>  
                      <input type="text" class="form-control" placeholder="Max Value" name="max_value" value="{{ request('max_value') }}">
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <div class="card">
                      <div class="card-body">
                        <p class="text-decoration-underline">Time of Deal</p>

                        {{-- <label for="date">Filter by Date:</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ request('date') }}"> --}}

                        <label for="start_from" class="form-label">Start From</label>
                        <input type="date" class="form-control" id="start_from" name="start_from" value="{{ request('start_from') }}">
                   
                        <label for="end_on" class="form-label">End On (Optional)</label>
                        <input type="date" class="form-control" id="end_on" name="end_on" value="{{ request('end_on') }}">
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="col-md d-flex align-items-end justify-content-center">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- <div class="row justify-content-center mb-3 pt-4">
  <div class="col-md-12 mb-3">
    @foreach ($post as $tag)
    <a href="/offer?post={{ $tag->key_one }}"><span class="badge rounded-pill text-bg-secondary">{{ $tag->key_one }}</span></a> 
    @endforeach
  </div>
</div> --}}

<h3 class="mb-3 pt-3">Kamu Mungkin Tertarik</h3>

@if ($post->count())
<div class="container">
  <div class="row">
    <div class="col-md mb-3">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            @if($post[0]->image)
            <img src="{{ asset('storage/' . $post[0]->image) }}" alt="{{ $post[0]->title }}" width="300" class="img-fluid rounded-start">
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post[0]->promo->jenis }}" class="img-fluid rounded-start" alt="{{ $post[0]->promo->jenis }}">
            @endif
            
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title"><a href="/detail/{{ $post[0]->slug }}" class="text-decoration-none">{{ $post[0]->title }}</a></h3>
              <p class="card-text">
                <small class="text-muted">
                By. <a href="/offer?author={{ $post[0]->author->id }}" class="text-decoration-none">{{ $post[0]->author->name }}</a> in <a href="/offer?promo={{ $post[0]->promo->slug }}"  class="text-decoration-none">{{ $post[0]->promo->jenis}}</a> {{ $post[0]->created_at->diffForHumans() }}
                </small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    @if($post[1]->image)
                    <img src="{{ asset('storage/' . $post[1]->image) }}" alt="{{ $post[1]->title }}" width="300" class="img-fluid rounded-start">
                    @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post[1]->promo->jenis }}" class="img-fluid rounded-start" alt="{{ $post[1]->promo->jenis }}">
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title"><a href="/detail/{{ $post[1]->slug }}" class="text-decoration-none">{{ $post[1]->title }}</a></h3>
                        <p class="card-text">
                        <small class="text-muted">
                        By. <a href="/offer?author={{ $post[1]->author->id }}" class="text-decoration-none">{{ $post[1]->author->name }}</a> in <a href="/offer?promo={{ $post[1]->promo->slug }}"  class="text-decoration-none">{{ $post[1]->promo->jenis}}</a> {{ $post[1]->created_at->diffForHumans() }}
                        </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@else

<p class="text-center fs-4">No Post Found</p>
@endif
<h3 class="mb-3 pt-3">Penawaran Terbaru</h3>
<div class="container">
    <div class="row">
        
        @foreach ($post->skip(2) as $offer)
        <div class="col-md-4 mb-3">
            <div class="card">
                @if($offer->image)
                <img src="{{ asset('storage/' . $offer->image) }}" alt="{{ $offer->title }}">
            @else
            <img src="https://source.unsplash.com/500x400?{{ $offer->promo->jenis }}" class="card-img-top" alt="{{ $offer->promo->jenis }}">
            @endif
            
            <div class="card-body">
                <h5 class="card-title"><a href="/detail/{{ $offer->slug }}" class="text-decoration-none text-dark">{{ $offer->title }}</a></h5>
                <p class="card-text">
                    <small class="text-muted">
                        By. <a href="/offer?author={{ $offer->author->id }}" class="text-decoration-none">{{ $offer->author->name }}</a> {{ $offer->created_at->diffForHumans() }}
                    </small>
                    </p>
                    <p class="card-text text-danger h5">Rp. {{ $offer->promo_price }} <span class="text-decoration-line-through text-muted h6">Rp. {{ $offer->original_price }}</span></p>
                    <p>{{ $offer->lokasi }} <span class="badge rounded-pill text-bg-info"><a href="/offer?promo={{ $offer->promo->slug }}" class="text-decoration-none text-dark">{{ $offer->promo->jenis }}</a></span></p>
                    <p class="text-secondary" style="font-size:11px">{{ $offer->new_at }} {{ $offer->expired_at }}</p>
                    </div>
                    </div>
                    </div>
                    @endforeach
                    </div>
                    
                    </div>
  <div class="d-flex justify-content-center">
    {{ $post->links() }}
  </div>
@endsection