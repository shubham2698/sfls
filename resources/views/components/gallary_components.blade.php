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
        <button class="btn btn-default filter-button btn-gallary" data-filter="Classroom">Classroom</button>
        <button class="btn btn-default filter-button btn-gallary" data-filter="sit">Student International Tour</a>
        <button class="btn btn-default filter-button btn-gallary" data-filter="fe">SFLS Festival & Event</button>
    </div>

        <div class="gallery_product filter Classroom">
            <img src="/images/gallary/classroom1.jpg" class="img-responsive">
        </div>
        <div class="gallery_product filter Classroom">
            <img src="/images/gallary/classroom2.jpg" class="img-responsive">
        </div>
        <div class="gallery_product filter Classroom">
            <img src="/images/gallary/classroom3.jpg" class="img-responsive">
        </div>
        <div class="gallery_product filter Classroom">
            <img src="/images/gallary/classroom4.jpg" class="img-responsive">
        </div>



        <div class="gallery_product filter sit">
            <img src="/images/gallary/studytour1.jpg" class="img-responsive">
        </div>
        <div class="gallery_product filter sit">
            <img src="/images/gallary/studytour2.jpg" class="img-responsive">
        </div>
        <div class="gallery_product filter sit">
            <img src="/images/gallary/studytour3.jpg" class="img-responsive">
        </div>
        <div class="gallery_product filter sit">
            <img src="/images/gallary/studytour4.jpg" class="img-responsive">
        </div>



        <div class="gallery_product filter fe">
            <img src="/images/gallary/festival1.jpg" class="img-responsive">
        </div>
        <div class="gallery_product filter fe">
            <img src="/images/gallary/festival2.jpg" class="img-responsive">
        </div>
        <div class="gallery_product filter fe">
            <img src="/images/gallary/festival3.jpg" class="img-responsive">
        </div>
        <div class="gallery_product filter fe">
            <img src="/images/gallary/festival4.jpg" class="img-responsive">
        </div>

        
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
            if(value == "all"){
                $('.filter').show('1000');
            }
            else{
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