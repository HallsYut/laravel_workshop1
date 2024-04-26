<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vender/bootstrap/css/bootstrap.min.css') }}">
    @yield('head')
    <title>@yield('title','master')</title>
</head>
<body>
    <div class="nav text-bg-dark p-3">
        <a href="{{ URL::to('/')}}"class="nav-link active" aria-current="page">NUTTAWWUT</a>
            <ul class="nav">
                <li class="nav-item"><a href="{{ URL::to('/')}}" class="nav-link active text-light" aria-current="page">HOME</a></li>
                <li class="nav-item"><a href="{{ URL::to('/activity')}}" class="nav-link active text-light" aria-current="page">ACTIVITY</a></li>
                <li class="nav-item"><a href="{{ URL::to('/about')}}" class="nav-link active text-light" aria-current="page">ABOUT</a></li>
                <li class="nav-item"><a href="{{ URL::to('/contact')}}" class="nav-link active text-light" aria-current="page">CONTACT</a></li>
                <li class="nav-item"><a href="{{ URL::to('/map')}}" class="nav-link active text-light" aria-current="page">MAP</a></li>
                <li class="nav-item"><a href="{{ URL::to('/news')}}" class="nav-link active text-light" aria-current="page">NEWS</a></li>
            </ul>
    </div>
    @yield('content')
    <script src="{{ asset('vender/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    @yield('script')
</body>
</html>