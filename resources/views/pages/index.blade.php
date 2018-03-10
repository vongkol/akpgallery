@extends('layouts.setting')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <strong>Page List</strong>&nbsp;&nbsp;
                    <a href="{{url('/page/create')}}"><i class="fa fa-plus"></i> New</a>
                    </div>
                <div class="card-block">

                    <table class="tbl">
                        <thead>
                            <tr>
                                <th>&numero;</th>
                                <th>Title</th>
                                <th>URL</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($pages as $pag)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$pag->title}}</td>
                                    <td>{{$pag->url}}</td>
                                    <td>
                                        <a class="btn btn-xs btn-info btn-flat" href="{{url('/page/view/'.$pag->id)}}" title="view">Detail</a>
                                        <a class="btn btn-xs btn-primary btn-flat" href="{{url('/page/edit/'.$pag->id)}}" title="Edit">Edit</a>
                                        <a class="btn btn-xs btn-danger btn-flat" href="{{url('/page/delete/'.$pag->id)}}" onclick="return confirm('Do you want to delete?')" title="Delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table><br>
                    {{ $pages->links() }}
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
        $("#page").addClass("current");
    });
</script>
@endsection