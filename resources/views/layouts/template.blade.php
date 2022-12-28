<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.2.6/dist/css/select2-bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    {{-- Header --}}
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{url('/asset/MovieListLogo.png')}}" alt="Image" style="width:100px; height:30px;">
          </a>
          <div class="selection-nav">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Actors</a>
              </li>
            </ul>
            <a class="btn btn-primary" href="{{url('/register')}}" style="">
                <div style="">
                    Register
                </div>
            </a>
            <a class="btn btn-outline-primary" href="{{url('/login')}}">
                <div style="">
                    Login
                </div>
            </a>
          </div>
        </div>
    </nav>

    {{-- Content --}}
    <div>
        @yield('content')
    </div>
    {{-- Footer --}}

    <div class="home-footer">
        <img src="{{url('/asset/MovieListLogo.png')}}" alt="Image" style="width:155px; height:55px; margin:20px 0 6.5px 0;">
        <div class="footer-text1">
            <img src="{{url('/asset/MovieListLogo.png')}}" alt="Image" style="width:60px; height:16.5px;">
            <p>is a Website that contains list of movie</p>
        </div>
        <div class="social-container">
            <a
            class="btn text-white btn-floating m-1"
            href="#"
            role="button"
            ><i class="fa fa-twitter" style="font-size: 20px"></i
            ></a>

            <a
            class="btn text-white btn-floating m-1"
            href="#"
            role="button"
            ><i class="fa fa-instagram" style="font-size: 20px"></i
            ></a>

            <a
            class="btn text-white btn-floating m-1"
            href="#"
            role="button"
            ><i class="fa fa-facebook" style="font-size: 20px"></i
            ></a>

            <a
            class="btn text-white btn-floating m-1"
            href="#"
            role="button"
            ><i class="fa fa-reddit-alien" style="font-size: 20px"></i
            ></a>

            <a
            class="btn text-white btn-floating m-1"
            href="#"
            role="button"
            ><i class="fa fa-youtube-play" style="font-size: 20px"></i
            ></a>
        </div>
        <div class="footer-text2">
            <p><a href="">Privacy Policy</a></p>
            <p>&nbsp;&nbsp;&#9474;&nbsp;&nbsp;</p>
            <p><a href="">Terms of Service</a></p>
            <p>&nbsp;&nbsp;&#9474;&nbsp;&nbsp;</p>
            <p><a href="">Contact Us</a></p>
            <p>&nbsp;&nbsp;&#9474;&nbsp;&nbsp;</p>
            <p><a href="">About Us</a></p>
        </div>
        <div class="copyright-text">
            <p>Copyright &#169; 2021</p>
            <img src="{{url('/asset/MovieListLogo.png')}}" alt="Image" style="width:60px; height:16.5px;">
            <p>All Rights Reserved</p>
        </div>
    </div>
</body>
</html>
