@section('page_loc')
<div class="page_loc">
    <h1> Gallary </h1>
    <h4 style="text-decoration:underline;">Supriyaz Foreign Language Studio</h4>
    <h6>Office no 5, Royal Tower, 
        3 rd floor, Above Post Office ,
        Viman Nagar, Pune, Maharashtra - 411014</h6>
</div>
@endsection

@section('gallary-style')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
    <div class="gmenu">
        <button class="btn btn-default filter-button btn-gallary" data-filter="all">All</button>
        <button class="btn btn-default filter-button btn-gallary" data-filter="hdpe">HDPE Pipes</a>
        <button class="btn btn-default filter-button btn-gallary" data-filter="sprinkle">Sprinkle Pipes</button>
        <button class="btn btn-default filter-button btn-gallary" data-filter="spray">Spray Nozzle</button>
        <button class="btn btn-default filter-button btn-gallary" data-filter="irrigation">Irrigation Pipes</button>
    </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
            if(value == "all"){
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else{
                //$('.filter[filter-item="'+value+'"]').removeClass('hidden');
                //$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
            }
        });
        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

        });
</script>

@endsection