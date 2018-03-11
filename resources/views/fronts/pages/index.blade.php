@extends("layouts.front")
@section('content')
<div class="row contain-b">
    <div class="col-md-12">
  <?php $slides = DB::table('slides')->orderBy('order', 'desc')->where('active', 1)->get(); $i = 1;?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        @foreach($slides as $s)
        @if($i==1)
        <div class="item active">
            <img src="{{asset('front/slides/'.$s->photo)}}"  alt="" width="100%">
            <div class="carousel-caption">
            <h3> {{$s->name}}</h3>
            </div>
        </div>
        @else 
        <div class="item">
            <img src="{{asset('front/slides/'.$s->photo)}}"  alt="" width="100%">
            <div class="carousel-caption">
            <h3>{{$s->name}}</h3>
            </div>
        </div>
        @endif
        <?php $i++; ?>
      @endforeach


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>
</div>
        <div class="main">
            <div class="col-md-12 ">
                <p><br></p>
                <h4><b>Document description</b></h4>
                <hr>
            </div>
            <div class="col-md-12 col-sm-12">
                <p class="margin-bottom-10">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p>
            </div>
        </div>
       
        <?php 
        $gallerys = DB::table('gallerys')
        ->orderBy('id', 'desc')
        ->where('active',1)
        ->limit(18)->get(); ?>
        <div class="col-md-12">
        <p><br></p>
            <h4><b>Lestest Gallery</b></h4>
            @foreach($gallerys as $gal)
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 vdoo-width">
                <a href="{{url('gallery/detail/'.$gal->id)}}"><img src="{{asset('uploads/gallerys/'.$gal->gallery)}}" alt="gallery" class="img"></a>
                <div class="akp-des"><a href="{{url('gallery/detail/'.$gal->id)}}">{{$gal->description}}</a></div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<br>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
@endsection