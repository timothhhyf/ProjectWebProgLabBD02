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
                            <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href=""><i class="fa-regular fa-trash-can"></i></a>
                        </div>
                    </div>
                    <div class="movie-detail-genre">
                        <p class="movie-detail-genre-list">Action</p>
                        <p class="movie-detail-genre-list">Science Fiction</p>
                    </div>
                    <div class="movie-detail-release-date">
                        <i class="fa-regular fa-calendar-days" style="font-size: xx-large; color:#0b6efe;"></i>
                        <p style="font-family: 'Quicksand', sans-serif; font-size:xx-small; margin:0; padding: 3px 0 3px 0">Release Year</p>
                        <p style="font-family: 'Roboto', sans-serif; font-weight:bold; font-size:smaller; margin:0">2021</p>
                    </div>
                    <div class="movie-detail-story-line-director">
                        <div class="movie-detail-story-line">
                            <h5>Storyline</h5>
                            <p style="font-size:small; text-align:justify;">aaaaaaaaaa aaaaaaaaa aaaaaa aa aaaa aaaaaaaaa aaaaaaaaaaaa aaaaaaaaaaaaaaaaaaa aaaaaaa aaaaaaa aaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa Plague by strange memories, Neo"s life takes an unexpected turn when he finds himself back inside the Matrix.</p>
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
    <div class="movie-detail-cast-and-more">
        <h4>Cast</h4>
        <div class="movie-detail-cast-list">
            {{--udah gua css jd kalo forloop bagus aman--}}
            <div class="movie-detail-img-and-info">
                <img src="{{url('/asset/keanureeves.jpeg')}}" alt="">
                <div class="movie-detail-name-and-cast">
                    <p style="font-size:small; font-weight:bold; ">Keanu Reeves</p>
                    <p style="font-size:x-small; font-weight:normal;">Thomas A. Anderson/Neo</p>
                </div>
            </div>
        </div>
        <h4>More</h4>
        <div class="movie-detail-more-list">
            {{-- ini loop 8x aja wil biar pas, soalnya gua ga bikin justify content nya space between --}}
            <div class="movie-detail-more">
                <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                <div class="movie-detail-title-and-year">
                    <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                    <div class="movie-detail-year-and-icon">
                        <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                        <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i class="fa-solid fa-plus" id="plus-btn" onclick="myFunction();"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction(){
            var x = document.getElementById("plus-btn");
            if(x.classList.contains('fa-plus')){
                alert("Added to watchlist!");
                x.classList.replace("fa-plus","fa-check");
            }
            else {
                alert("Removed to watchlist!");
                x.classList.replace("fa-check","fa-plus");
            }
        }
    </script>


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
