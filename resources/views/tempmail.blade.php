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
    <h1>Hello {{ $email_data['name'] }} </h1>
    <h4>We Have Received Your Enquiry For {{ $email_data['course'] }} Language Course for {{ $email_data['level'] }} Level.</h4>
    <h5>Our Team Will Connect With You On  +91 {{ $email_data['mob'] }} As soon as possible.</h5>
    <h3>Thanks For Enquiry</h3>
</body>
</html>