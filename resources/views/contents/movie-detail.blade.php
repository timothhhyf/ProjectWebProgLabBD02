@extends('layouts.template')

@section('title', 'Movie Detail')

@section('content')
    {{-- Movie Detail Page HTML --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <div class="movie-detail">
        <div class="movie-detail-background">
            <img src="{{ Storage::url('images/movies/background/'. $movie->background_img); }}" class="background-image" alt="Background">
            <div class="background-overlay-gradient"></div>
            <div class="movie-detail-overlay">
                <img src="{{ Storage::url('images/movies/thumbnail/'. $movie->image); }}" class="poster-image" alt="Poster">
                <div class="movie-detail-explanation">
                    <div class="movie-detail-title">
                        <h1>{{ $movie->title }}</h1>
                        @if (Auth::user()->role == 'admin')
                            <div>
                                <a href="/movie/edit/{{ $movie->id }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="/movie/delete/{{ $movie->id }}"><i class="fa-regular fa-trash-can"></i></a>
                            </div>
                        @endif
                    </div>
                    <div class="movie-detail-genre">
                        @foreach ($movie->genres as $g)
                            <p class="move-detail-genre-list">{{ $g->name }}</p>
                        @endforeach
                    </div>
                    <div class="movie-detail-release-date">
                        <i class="fa-regular fa-calendar-days" style="font-size: xx-large; color:#0b6efe;"></i>
                        <p style="font-family: 'Quicksand', sans-serif; font-size:xx-small; margin:0; padding: 3px 0 3px 0">Release Year</p>
                        <p style="font-family: 'Roboto', sans-serif; font-weight:bold; font-size:smaller;">{{ date('Y', strtotime($movie->release_date)) }}</p>
                    </div>
                    <div class="movie-detail-story-line-director">
                        <div class="movie-detail-story-line">
                            <h5>Storyline</h5>
                            {{-- <p style="font-size:small; text-align:justify;">Plague by strange memories, Neo"s life takes an unexpected turn when he finds himself back inside the Matrix.</p> --}}

                        </div>
                        <div class="movie-detail-story-director">
                            <h5>{{ $movie->director }}</h5>
                            <p style="font-size:small; text-align:justify;">Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="movie-detail-cast-and-more">
        <h4>Cast</h4>
        <div class="movie-detail-cast-list">
            {{--udah gua css jd kalo forloop bagus aman--}}
            @foreach ($movie->actors as $a)
                <div class="movie-detail-img-and-info">
                    <img src="{{ Storage::url('images/actors/'. $a->image); }}" alt="">
                    <div class="movie-detail-name-and-cast">
                        {{-- <p style="font-size:small; font-weight:bold; ">Keanu Reeves</p> --}}
                        <p style="font-size:small; font-weight:bold; ">{{ $a->name }}</p>
                        {{-- <p style="font-size:x-small; font-weight:normal;">Thomas A. Anderson/Neo</p> --}}
                        <p style="font-size:x-small; font-weight:normal;">{{ $a->pivot->character }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <h4>More</h4>
        <div class="movie-detail-more-list">
            {{-- ini loop 8x aja wil biar pas, soalnya gua ga bikin justify content nya space between --}}
            @foreach ($randomMovies as $i => $rm)
                <div class="movie-detail-more">
                    <a href="/movie/{{ $rm->id }}"><img src="{{ Storage::url('images/movies/thumbnail/'. $movie->image); }}" alt=""></a>
                    <div class="movie-detail-title-and-year">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">{{ $rm->title }}</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">{{ date('Y', strtotime($rm->release_date)) }}</a></p>
                            @if ($status[$i][$rm->id] == true)
                                <a href="/{{ $rm->id }}/removeFromWatchlist" style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i class="fa-solid fa-check" id="plus-btn" onclick="myFunction();"></i></a>
                            @else
                                <a href="/{{ $rm->id }}/addToWatchlist" style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i class="fa-solid fa-plus" id="plus-btn" onclick="myFunction();"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function myFunction(x){
            if(x.classList.contains('fa-plus')){
                alert("Added to watchlist!");
                // x.classList.replace("fa-plus","fa-check");
            }
            else {
                alert("Removed to watchlist!");
                // x.classList.replace("fa-check","fa-plus");
            }
        }
    </script>
@endsection
