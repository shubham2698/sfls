@include('components.navbar')
@include('components.footer')
@include('components.carousel')
@include('components.course_menu')
@include('components.whychooseus')
@include('components.opp')
@include('components.addon_course')
@include('components.affiliations')
@include('components.getintouch')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SFLS</title>
    <link href="{{asset('js/app.js')}}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="{{asset('css/css.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
</head>
<body>
    @yield('navbar')
    @yield('carousel-world')
    @yield('course_menu')
    @yield('whycs')
    @yield('carousel-feedback')
    @yield('opp')
    @yield('carousel-internationaltour')
    @yield('addon')
    @yield('affiliation')
    @yield('getintouch')
    @yield('footer')
</body>
</html>