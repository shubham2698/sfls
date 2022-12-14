@include('components.navbar')
@include('components.footer')
@include('components.carousel')
@include('components.contact_us_component')

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
</head>
<body>
    <h1>NEW ENQUIRY</h1>
    <h3>
        Name        : {{ $email_data['name'] }}<br>
        Mail        : {{ $email_data['email'] }}<br>
        Mobile No   : {{ $email_data['mob'] }}<br>
        Course      : {{ $email_data['course'] }}<br>
        Level       : {{ $email_data['level'] }}<br>
        Mode        : {{ $email_data['mode'] }}<br>
        Batch       : {{ $email_data['batch_pref'] }}<br>
        Know By     : {{ $email_data['hdyk'] }}<br>

    </h3>
</body>
</html>