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
    <style>
        #map{
            height: 400px;
        }
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
    <div class="container">
        <div class="flex-container">
            <div>
                @yield('contact-form-cu')
            </div>
            <div>
                <img src="/images/cu_sfls.svg" alt="">
            </div>
        </div>
        
        <h3 class="cu_map_heading">LOCATE US ON MAP</h3>
        <div id="map"></div>
        <script type="text/javascript">
            function initMap() {
              const myLatLng = { lat: 18.612924, lng: 73.875041 };
              const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: myLatLng,
              });
              new google.maps.Marker({
                position: myLatLng,
                map,
                title: "SFLS",
              });
            }
            window.initMap = initMap;
        </script>
        <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" >
        </script>
    </div>
    @yield('footer')
</body>
</html>