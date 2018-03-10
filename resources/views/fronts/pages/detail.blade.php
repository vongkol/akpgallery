@extends("layouts.front")
@section('content')
<div class="row contain-b">
	<div class="col-md-12 col-sm-12">
		<h4>Detail Gallery</h4> <hr>
    </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 50px;">
            <img src="{{asset('uploads/gallerys/'.$gallery->gallery)}}" alt="gallery" class="img">
            <div class=""><a href="">{{$gallery->description}}</a></div>
        </div>
</div>
@endsection