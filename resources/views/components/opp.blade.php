@section('opp')
@php
$jsondata = file_get_contents("json/opp.json");
$opp = json_decode($jsondata,true);
$count = 0;
@endphp
@foreach($opp as $value)
<div class="opp">
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="@php(print($value[$i]['image']))" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4>@php(print($value[$i]['title']))</h4>
                            <p class="card-text">@php(print($value[$i]['descp']))</p>
                        </div>
                    </div>
                </div>
            @endfor
    </div>
</div>
@endforeach
@endsection