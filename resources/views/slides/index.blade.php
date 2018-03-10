@extends('layouts.setting')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <strong>Slide List</strong>&nbsp;&nbsp;
                    <a href="{{url('/slide/create')}}"><i class="fa fa-plus"></i> New</a>
                </div>
                <div class="card-block">
                    <table class="tbl">
                        <thead>
                            <tr>
                                <th>&numero;</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($slides as $sli)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{URL::asset('front/slides/').'/'.$sli->photo}}" width="100"/></td>
                                    <td>{{$sli->name}}</td>
                                    <td>{{$sli->order}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-flat"  href="{{url('/slide/edit/'.$sli->id)}}" title="Edit">Edit</a>
                                        <a class="btn btn-danger btn-flat"  href="{{url('/slide/delete/'.$sli->id)}}" title="Delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        $("#siderbar li a").removeClass("current");
        $("#slideshow").addClass("current");
    });
</script>
@endsection