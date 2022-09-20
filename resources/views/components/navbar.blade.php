@section('navbar')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light ">
        <div class="container-fluid ">
          <a class="navbar-brand" href="/" style="font-size: 24px;">Supriyaz Foreign Language Studio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item ">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="/gallary">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="/contactus">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Courses
                </a>
                <ul class="dropdown-menu">
                  @php
                  $jsondata = file_get_contents("json/courselist.json");
                  $courselist = json_decode($jsondata,true);
                  $count = 0;
                  @endphp
                  @foreach($courselist as $value)
                  @for ($i = 0; $i < 8; $i++)
                  <form method="get" action="/course_details">
                    <input type="text" name="lang_name" value="{{ $value[$i]['title'] }}" hidden>
                    <li class="dropdown-item"><input type="submit" class="nav_tab_course" value="<?php print($value[$i]['title'])?>"/></li>
                  </form>
                    @endfor
                    @endforeach
                  
                </ul>
              </li>
      
              <li class="nav-item">
                <a class="nav-link"  href="/aboutus">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <script>
        $(document).ready(function() {
          $('a[href$="' + location.pathname + '"]').addClass('active');
        });
      </script>
@endsection