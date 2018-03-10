@extends("layouts.front")
@section('content')
<div class="row contain-b">
	<div class="col-md-12 col-sm-12">
		<h4>Gallery</h4> <hr>
    </div>
        @foreach($gallerys as $gal)
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 vdoo-width">
            <a href="{{url('gallery/detail/'.$gal->id)}}"><img src="{{asset('uploads/gallerys/'.$gal->gallery)}}" alt="gallery" class="img"></a>
            <div class="akp-des"><a href="{{url('gallery/detail/'.$gal->id)}}">{{$gal->description}}</a></div>
            </div>
        @endforeach
    <div class="col-md-12 col-sm-12">
        <nav>
            {{$gallerys->links()}}
        </nav>
    </div>
</div>
@endsection