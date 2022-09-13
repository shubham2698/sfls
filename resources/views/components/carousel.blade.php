@section('carousel-world')
<div class="carosel">
  <div id="carouselExample1" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src={{asset('images/German.jpg')}} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="hello">Hallo</h5>
          <p class="hello-text">Welcome to learn German</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src={{asset('images/English.jpg')}} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="hello" >Hello</h5>
          <p class="hello-text">Welcome to learn English</p>
        </div>
      </div>
      <div id="course_menu_slide">

      </div>
      <div class="carousel-item">
        <img src={{asset('images/Spanish.jpg')}} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="hello">Hola</h5>
          <p class="hello-text" >Welcome to learn Spanish</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

@endsection



@section('carousel-feedback')
<div class="carosel">
  <div id="carouselExample2" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExample2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExample2" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExample2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src={{asset('images/homepage/feedback_background.png')}} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <img src="/images/homepage/Testimonial.png" alt="">
          <h3>Priya Jain</h3>
          <p class="feedback_p">This Is Very Best Institute In My City. VEry Well Staff . Systematic Approch . Supportive Staff . You Can give First Priority To this institute.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src={{asset('images/homepage/feedback_background.png')}} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <img src="/images/homepage/Testimonial.png" alt="">
          <h3>Priya Jain</h3>
          <p class="feedback_p">This Is Very Best Institute In My City. VEry Well Staff . Systematic Approch . Supportive Staff . You Can give First Priority To this institute.</p>
        </div>
      </div>
      <div id="course_menu_slide">

      </div>
      <div class="carousel-item">
        <img src={{asset('images/homepage/feedback_background.png')}} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <img src="/images/homepage/Testimonial.png" alt="">
          <h3>Priya Jain</h3>
          <p class="feedback_p">This Is Very Best Institute In My City. VEry Well Staff . Systematic Approch . Supportive Staff . You Can give First Priority To this institute.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

@endsection

@section('carousel-internationaltour')
<div class="carosel">
  <div id="carouselExample3" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExample3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExample3" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExample3" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src={{asset('images/tourfrance.jpg')}} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Internation Study Tour : France</h3>
          <p class="feedback_p">This Is Very Best Institute In My City. VEry Well Staff . Systematic Approch . Supportive Staff . You Can give First Priority To this institute.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src={{asset('images/tourgermany.jpg')}} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Internation Study Tour : Germany</h3>
          <p class="feedback_p">This Is Very Best Institute In My City. VEry Well Staff . Systematic Approch . Supportive Staff . You Can give First Priority To this institute.</p>
        </div>
      </div>
      <div id="course_menu_slide">

      </div>
      <div class="carousel-item">
        <img src={{asset('images/touramstra.jpg')}} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Internation Study Tour : Amstradam</h3>
          <p class="feedback_p">This Is Very Best Institute In My City. VEry Well Staff . Systematic Approch . Supportive Staff . You Can give First Priority To this institute.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

@endsection

