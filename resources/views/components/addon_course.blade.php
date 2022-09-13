@section('addon')
@php
$jsondata = file_get_contents("json/addoncourse.json");
$addon = json_decode($jsondata,true);
$count = 0;
@endphp
@foreach($addon as $value)
<div class="addonc">
    <div class="container">
        <h1 class="chead">ADD-ON COURSES</h1>
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-md-3" >
                        <div class="card-body"  width:18rem;>
                            <h4 style="border-bottom: 2px solid black; background-color:#FFBB00; height:70px; padding:10px;">@php(print($value[$i]['title']))</h4>
                            <p class="card-text">@php(print($value[$i]['descp']))</p>
                        </div>
                </div>
            @endfor
    </div>
</div>
@endforeach
@endsection