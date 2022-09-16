@section('page_loc')
<div class="page_loc">
    <h1> Courses </h1>
    <h4 style="text-decoration:underline;">Supriyaz Foreign Language Studio</h4>
    <h6>Office no 5, Royal Tower, 
        3 rd floor, Above Post Office ,
        Viman Nagar, Pune, Maharashtra - 411014</h6>
</div>
@endsection

@section('courses')
@php
$jsondata = file_get_contents("json/courselist.json");
$courselist = json_decode($jsondata,true);
$count = 0;
@endphp
@foreach($courselist as $value)
<div class="row">
@for ($i = 0; $i < 8; $i++)
<div class="col">
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">@php(print($value[$i]['title']))</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
@endfor
</div>
@endforeach
@endsection