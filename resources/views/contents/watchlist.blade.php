@extends('layouts.template')

@section('title', 'My Watchlist')

@section('content')
    {{-- Watchlist Page HTML --}}

    <div class="watchlist-content">
        <div class="watchlist-title">
            <i class="fa-solid fa-bookmark"></i>
            <h1>My&nbsp</h1>
            <h1 style="color:#da404d;">Watchlist</h1>
        </div>
        <div class="watchlist-search-bar">
            <form>
                <input class="form-control me-sm-2 watchlist-search" type="search" placeholder="Search your watchlist...">
                <span><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></span>
            </form>
        </div>
        <div class="watchlist-filter">
            <i class="fa-solid fa-filter"></i>
            <select class="form-select watchlist-filter-select" onchange="location.href=this.value;">
                {{-- coba masukin value di sini contohnya kayak href link aja buat ke web.php --}}
                <option value="">All</option>
                <option value="">Planned</option>
                <option value="">Watching</option>
                <option value="">Finished</option>
            </select>
        </div>
        <div class="real-watchlist-grid-header">
            <h6>Poster</h6>
            <h6>Title</h6>
            <h6>Status</h6>
            <h6>Action</h6>
        </div>
        {{-- loop disini --}}
        <div class="real-watchlist-grid-content">
            <img src="{{url('/asset/keanureeves.jpeg')}}" alt="">
            <h6>Title</h6>
            <h6>Status</h6>
            <i class="fa-solid fa-ellipsis" data-toggle="modal" data-target="#actionModal"></i>
        </div>

        <div class="amount-and-paginate">
            <div class="show-amount">
                Showing <strong>1</strong> to <strong>4</strong> of <strong>6</strong> results
            </div>
            <span class="page-number">
                <p>Page 12{{--{{$test->currentPage()}}--}}</p>
            </span>
            <div>
                <ul class="pagination pagination-sm">
                  <li class="page-item">
                    <a class="page-link" href="#">&laquo;</a>
                  </li>
                  {{-- loop di sini reference vv
                    @for ($i = 1; $i <= $books->lastPage(); $i++)
                        <a  href="{{$books->url($i)}}">{{$i}}</a>
                    @endfor --}}
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  {{-- sampe sini  --}}
                  <li class="page-item">
                    <a class="page-link" href="#">&raquo;</a>
                  </li>
                </ul>
              </div>
        </div>
    </div>

    @include('modal.action')
    {{-- @foreach ($movies as $m)
        {{ Storage::url('images/movies/thumbnail/'.$m->image) }}
        {{ $m->title }}
        {{ $m->pivot->status }}
    @endforeach --}}
@endsection
