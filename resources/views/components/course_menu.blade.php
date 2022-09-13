@section('course_menu')

@php
$jsondata = file_get_contents("json/courselist.json");
$courselist = json_decode($jsondata,true);
$count = 0;
@endphp
@foreach($courselist as $value)
<div class="course_menu" >
    <h1 class="chead">Our Courses</h1>
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 8; $i++)
                <div class="col cmenu">
                    <form method="get" action="/course_details">
                        <input type="text" name="lang_name" value="{{ $value[$i]['title'] }}" hidden>
                        <a><img src=@php(print($value[$i]['image']))></a>
                        <input type="submit" id="submit" class="cname" value="<?php print($value[$i]['title'])?>" />
                    </form>
                </div>
            @endfor
    </div>
</div>
</div>
<script>

</script>
@endforeach
@endsection
<?php

?>
