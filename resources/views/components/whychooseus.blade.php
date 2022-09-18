@section('whycs')
@php
$jsondata = file_get_contents("json/whychooseus.json");
$whycs_data = json_decode($jsondata,true);
$count = 0;
@endphp
@foreach($whycs_data as $value)
<div class="whycs">
    <br>
    <h1 id="wcs">Why <br>Choose Us... ?</h1>
    <div class="container whycssec">
        <div class="row">
            @for ($i = 0; $i < 6; $i++)
                <div class="col-md-4">
                    <div class="card wcs_card" style="width: 20rem;">
                        <img src="@php(print($value[$i]['image']))" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">@php(print($value[$i]['heading']))</h4>
                            {{-- <p class="card-text">@php(print($value[$i]['descp']))</p> --}}
                        </div>
                    </div>
                </div>
            @endfor
    </div>
</div>
@endforeach
<br>
<br>
<br>
@endsection
