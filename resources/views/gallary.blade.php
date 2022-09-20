@include('components.navbar')
@include('components.footer')
@include('components.gallary_components')
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
        .flex-container {
            display: flex;
        }

        .flex-container > div {
            margin: 10px;
            padding: 20px;
        }
        .container{
            margin-top:20px;
        }
    </style>
</head>
<body>
    @yield('navbar')
    @yield('page_loc')
    @yield('gallary-style')
    @yield('footer')
</body>
</html>