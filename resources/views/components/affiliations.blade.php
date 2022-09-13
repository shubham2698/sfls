@section('affiliation')
@php
$jsondata = file_get_contents("json/affiliations.json");
$affiliations = json_decode($jsondata,true);
$count = 0;
@endphp
@foreach($affiliations as $value)
<div class="course_menu">
    <h1 class="chead">Our Affiliations</h1>
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 6; $i++)
                <div class="col cmenu">
                    <a href="#"><img src=@php(print($value[$i]['image'])) height="150px" width="150px"></a>
                </div>
            @endfor
    </div>
</div>
</div>
@endforeach
@endsection