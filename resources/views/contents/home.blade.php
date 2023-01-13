@extends('layouts.template')

@section('title', 'Home Page')

@section('content')

    <div id="slider">
        <ul id="slideWrap">
            @foreach ($heroMovies as $hm)
                <li>
                    <img src="{{ Storage::url('images/movies/background/'. $hm->image); }}" alt="">
                    <div class="background-overlay-gradient"></div>
                    <div class="home-background-overlay">
                        <div class="movie-detail-explanation">
                            <div class="home-movie-title movie-detail-title">
                                {{-- <h5>2021</h5> --}}
                                <h5>{{ date('Y', strtotime($hm->release_date)) }}</h5>
                                {{-- <h2>The Matrix Ressurections</h2> --}}
                                <h2>{{ $hm->title }}</h2>
                            </div>
                            <div class="movie-detail-genre">
                                @foreach ($hm->genres as $g)
                                    <p class="movie-detail-genre-list">{{ $g->name }}</p>
                                @endforeach
                                {{-- <p class="movie-detail-genre-list">Action</p>
                                <p class="movie-detail-genre-list">Science Fiction</p> --}}
                            </div>
                            {{-- <p style="font-size:small; text-align:justify;">Plague by strange memories, Neo"s life takes an unexpected turn when he finds himself back inside the Matrix.</p> --}}
                            <p style="font-size:small; text-align:justify;">{{ $hm->description }}</p>
                            <a href="" class="add-to-watchlists-btn"><i class="fa-solid fa-plus" style="font-weight: bolder"></i> Add to Watchlists</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <a id="prev" href="#">&#8810;</a>
        <a id="next" href="#">&#8811;</a>
    </div>

    <div class="popular-movies">
        <h4 class="popular-title"><i class="fa-solid fa-fire-flame-curved" style="margin-right: 12px;"></i>Popular</h4>
        <div class="cover">
            <button class="left" onclick="leftScroll()">
              <i class="fas fa-angle-double-left"></i>
            </button>
            <div class="scroll-images">
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="movie-detail-more.home-popular-list">
                    <a href=""><img src="{{url('/asset/keanureeves.jpeg')}}" alt=""></a>
                    <div class="movie-detail-title-and-year" style="max-width:187.5px;">
                        <p style="font-size:small; font-weight:bold; padding: 2px 10px 2px 10px;"><a href="" style="text-decoration: none; color: white;">The Kungfu Panda 10 blabla 11</a></p>
                        <div class="movie-detail-year-and-icon">
                            <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">2021</a></p>
                            <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="right" onclick="rightScroll()">
              <i class="fas fa-angle-double-right"></i>
            </button>
        </div>
    </div>

    <div class="show-and-search-bar">
        <h4 class="show-title"><i class="fa-solid fa-film" style="margin-right: 12px;"></i>Show</h4>
        <form class="d-flex">
            <input class="form-control me-sm-2" style="margin-right: 0 !important;" type="search" placeholder="Search movie..">
        </form>
    </div>
    <div class="home-genre-selection">
        <div class="cover">
            <button class="left" onclick="leftScrollGenres()">
                <i class="fas fa-angle-double-left"></i>
            </button>
            <div class="scroll-genres">
                @foreach ($genres as $g)
                    <a href="">
                        <p>{{ $g->name }}</p>
                    </a>
                @endforeach
            </div>
            <button class="right" onclick="rightScrollGenres()">
                <i class="fas fa-angle-double-right"></i>
            </button>
        </div>
    </div>
    <div class="home-movie-sorter">
        <div class="home-movie-sort-by">
            <h1 style="font-size: small;">Sort By:</h1>
            <a href="">Latest</a>
            <a href="">A-Z</a>
            <a href="">Z-A</a>
        </div>
        <div class="add-more-movie-admin">
            <a href="/movie/create"><i class="fa-solid fa-plus" style="font-weight: bolder"></i> Add Movie</a>
        </div>
    </div>
    <div class="home-movie-list">
        @foreach ($allMovies as $i => $am)
            <div class="movie-detail-more">
                <a href="/movie/detail/{{ $am->id }}"><img src="{{ Storage::url('images/movies/thumbnail/'. $am->image); }}" alt=""></a>
                <div class="movie-detail-title-and-year home-movie-detail-title-and-year">
                    <p style="font-size:small; font-weight:bold; padding: 2px 0 2px 0;"><a href="" style="text-decoration: none; color: white;">{{ $am->title }}</a></p>
                    <div class="movie-detail-year-and-icon home-movie-detail-year-and-icon">
                        <p style="font-size:x-small; font-weight:normal;"><a href="" style="text-decoration: none; color:rgb(155, 155, 155);">{{ date('Y', strtotime($am->release_date)) }}</a></p>
                        {{-- <a style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i  onclick="myFunction(this)" class="fa-solid fa-plus"></i></a> --}}
                        @if ($status[$i][$am->id] == true)
                            <a href="/{{ $am->id }}/removeFromWatchlist" style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i class="fa-solid fa-check" id="plus-btn"></i></a>
                        @else
                            <a href="/{{ $am->id }}/addToWatchlist" style="text-decoration: none; color:rgb(155, 155, 155); font-size:small;"><i class="fa-solid fa-plus" id="plus-btn"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        var responsiveSlider = function() {

            var slider = document.getElementById("slider");
            var sliderWidth = slider.offsetWidth;
            var slideList = document.getElementById("slideWrap");
            var count = 1;
            var items = slideList.querySelectorAll("li").length;
            var prev = document.getElementById("prev");
            var next = document.getElementById("next");

            window.addEventListener('resize', function() {
                sliderWidth = slider.offsetWidth;
            });

            var prevSlide = function() {
                if(count > 1) {
                count = count - 2;
                slideList.style.left = "-" + count * sliderWidth + "px";
                count++;
                }
                else if(count = 1) {
                count = items - 1;
                slideList.style.left = "-" + count * sliderWidth + "px";
                count++;
                }
            };

            var nextSlide = function() {
                if(count < items) {
                slideList.style.left = "-" + count * sliderWidth + "px";
                count++;
                }
                else if(count = items) {
                slideList.style.left = "0px";
                count = 1;
                }
            };

            next.addEventListener("click", function() {
                nextSlide();
            });

            prev.addEventListener("click", function() {
                prevSlide();
            });

            setInterval(function() {
                nextSlide()
            }, 7500);
        };

        window.onload = function() {
            responsiveSlider();
        }

        function myFunction(x){
            if(x.classList.contains('fa-plus')){
                alert("Added to watchlist!");
                x.classList.replace("fa-plus", "fa-check");
            }
            else {
                alert("Removed to watchlist!");
                x.classList.replace("fa-check", "fa-plus");
            }
        }

        function leftScroll() {
            const left = document.querySelector(".scroll-images");
            left.scrollBy(-1505, 0);
        }

        function rightScroll() {
            const right = document.querySelector(".scroll-images");
            right.scrollBy(1505, 0);
        }

        function leftScrollGenres() {
            const left = document.querySelector(".scroll-genres");
            left.scrollBy(-1505, 0);
        }

        function rightScrollGenres() {
            const right = document.querySelector(".scroll-genres");
            right.scrollBy(1505, 0);
        }
    </script>
@endsection
