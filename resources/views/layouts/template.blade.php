<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body style="background-color: black;">
    {{-- Header --}}
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
