@extends('layouts.template')

@section('title', 'Movie Detail')

@section('content')
    {{-- Movie Detail Page HTML --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">    <title>@yield('title')</title>

    <div class="movie-detail">
        <div class="movie-detail-background">
            <img src="{{url('/asset/background-test.jpg')}}" class="background-image" alt="Background">
            <div class="background-overlay-gradient"></div>
            <div class="movie-detail-overlay">
                <img src="{{url('/asset/poster-test.jpeg')}}" class="poster-image" alt="Poster">
                <div class="movie-detail-explanation">
                    <div class="movie-detail-title">
                        <h1>The Matrix Ressurections</h1>
                        <div>
                            <a><i class="fa-regular fa-pen-to-square"></i></a>
                            <a><i class="fa-regular fa-trash-can"></i></a>
                        </div>
                    </div>
                    <div class="movie-detail-genre">
                        <p class="movie-detail-genre-list">Action</p>
                        <p class="movie-detail-genre-list">Science Fiction</p>
                    </div>
                    <div class="movie-detail-release-date">
                        <i class="fa-regular fa-calendar-days" style="font-size: xx-large; color:#0b6efe;"></i>
                        <p style="font-family: 'Quicksand', sans-serif; font-size:xx-small; margin:0; padding: 3px 0 3px 0">Release Year</p>
                        <p style="font-family: 'Roboto', sans-serif; font-weight:bold; font-size:smaller;">2021</p>
                    </div>
                    <div class="movie-detail-story-line-director">
                        <div class="movie-detail-story-line">
                            <h5>Storyline</h5>
                            <p style="font-size:small; text-align:justify;">Plague by strange memories, Neo"s life takes an unexpected turn when he finds himself back inside the Matrix.</p>
                        </div>
                        <div class="movie-detail-story-director">
                            <h5>Lana Wachowsk</h5>
                            <p style="font-size:small; text-align:justify;">Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div>ASD</div>



    {{-- {{ $movie->title }}
    {{ Storage::url('images/movies/thumbnail/'.$movie->image); }}
    {{ Storage::url('images/movies/background/'.$movie->background_img); }}
    @foreach ($movie->genres() as $g)
        {{ $g->name }}
    @endforeach
    {{ date('Y', strtotime($movie->release_date)) }}
    {{ $movie->description }}
    {{ $movie->director }}
    @foreach ($movie->actors() as $a)
        {{ $a->name }}
        {{ $a->pivot->character }}
    @endforeach

    @foreach ($movies as $m)
        {{ Storage::url('images/movies/thumbnail/'.$m->image) }}
        {{ $m->title }}
        {{ date('Y', strtotime($m->release_date)) }}
    @endforeach --}}
@endsection
