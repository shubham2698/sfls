@section('page_loc')
<div class="page_loc">
    <h1> CONTACT US </h1>
    <h4 style="text-decoration:underline;">Supriyaz Foreign Language Studio</h4>
    <h6>Office no 5, Royal Tower, 
        3 rd floor, Above Post Office ,
        Viman Nagar, Pune, Maharashtra - 411014</h6>
</div>
@endsection

@section('contact-form-cu')
<h3 style=" font-size:35px;text-align:center;">ENQUIRE US</h3>
<form class="contact_us_cu" method="get" action="/sendmail">
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
  <input type="submit" id="cu_submit" value="Send Enquiry" onclick="return confirm('Thanks For Reach Us')">
</form>
@endsection