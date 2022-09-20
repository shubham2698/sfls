@section('page_loc')
<div class="page_loc">
    <h1> <?php print(session()->get('language')) ?> Language Course</h1>
    <h4 style="text-decoration:underline;">Supriyaz Foreign Language Studio</h4>
    <h6>Office no 5, Royal Tower, 
        3 rd floor, Above Post Office ,
        Viman Nagar, Pune, Maharashtra - 411014</h6>
</div>
@endsection



@section('details-table')
@php
  $jsondata = file_get_contents("json/course_details.json");
  $coursedetails = json_decode($jsondata,true);
  $count = 0;
@endphp
<div class="detail-table">
<div class="tab">
  <table class="tab">
    <tr>
      <th class="highlight">Course Details</th>
    </tr>
  </table>
</div>
  <table>
    <tr>
      <td>LEVEL</td>
      <td >COURSE CONTENT</td>
      <td>HOURS</td>
    </tr>
    @foreach($coursedetails[session()->get('language')] as $value)
    <tr>
      <td style="width:200px;">@php(print($value['Level']))</td>
      <td style="width:750px; text-align:left;" >@php(print($value['CourseContent']))</td>
      <td>@php(print($value['Hours']))</td>
    </tr>
    @endforeach
  </table>
</div>
@endsection


@section('level-detail')
<div class="clevel">
<h3>About <?php print(session()->get('language')); ?> Language Course : <br> <span style="font-size:15px;">We teaches <?php print(session()->get('language')); ?> language at five level's</span></h3>

<ul>
@foreach($coursedetails[session()->get('language')] as $value)
    <li>@php(print($value['Level']))</li>
@endforeach
</ul>
</div>
@endsection



@section('quicklinks')
<h3 style=" font-size:35px;">QUICKLINKS</h3>
<?php
  $json_ql_data = file_get_contents("json/quicklinks.json");
  $quicklink = json_decode($json_ql_data,true);
?>
<div class="ql">
<ul>
@foreach($quicklink['quicklinks'] as $link)
    <li class="ql_tabs">@php(print($link['Link']))</li>
@endforeach
</ul>
</div>
@endsection



@section('contact-form-cd')
<h3 style=" font-size:35px;">Contact Us</h3>
<form class="contact_us" method="get" action="/sendmail">
  Full Name:<br><input type="text" placeholder="Shubham S Joshi" name="name" required><br>
  Email:<br><input type="email" placeholder="example@mail.com" name="email" required><br>
  Mobile No:<br><input type="number" placeholder="7264808928" name="mob" required><br>
  <label for="course">Choose Course:&nbsp;</label>
  <select id="cars" name="course">
    <option value="french">French</option>
    <option value="german">German</option>
    <option value="spanish">Spanish</option>
    <option value="english">English</option>
    <option value="marathi">Marathi</option>
    <option value="japanese">Japanese</option>
    <option value="sanskrit">Sanskrit</option>
  </select><br>
  <label for="level">Your Level :&emsp;&emsp;</label>
  <select id="cars" name="level">
    <option value="Begineer">Begineer</option>
    <option value="Intermediate">Intermediate</option>
    <option value="Advanced">Advanced</option>
  </select><br>
  <label for="mode">Mode :&emsp;&emsp;&emsp;&emsp;</label>
  <select id="cars" name="mode">
    <option value="Online">Online</option>
    <option value="Offline">Offline</option>
  </select><br>
  <label for="batch_pref">Batch :&emsp;&emsp;&emsp;&emsp;</label>
  <select id="cars" name="batch_pref">
    <option value="Morning">Morning</option>
    <option value="Afternoon">Afternoon</option>
    <option value="Evening">Evening</option>
  </select><br>
  How Do You Know About Us..?:<br><input type="text" name="hdyk" placeholder="LinkedIn , Facebook , Friend" required><br>
  <input type="submit" id="cu_submit" value="Submit">
</form>
@endsection




@section('whycus')
<?php
  $jsondata = file_get_contents("json/why_to_learn.json");
  $whytolearn = json_decode($jsondata,true);
  $count = 0;
?>
@foreach($whytolearn[session()->get('language')] as $data)

@endforeach
<div class="whytolearn">
<h3><?php print($data['heading']) ?></h3>
<h5><?php print($data['descp']) ?></h5>
</div>
@endsection

@section('carousel-course-details')
<div class="carosel">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/<?php print(session()->get('language'));?>.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p class="hello-text">Welcome to learn <?php print(session()->get('language')); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection