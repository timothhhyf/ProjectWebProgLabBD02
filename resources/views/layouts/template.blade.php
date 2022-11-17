<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body style="background-color: black;">
    {{-- Header --}}
    <div>
        @yield('content')
    </div>
    {{-- Footer --}}
</body>
</html>
