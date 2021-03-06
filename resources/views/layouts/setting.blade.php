<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>System Admin - SRI V2</title>

    <!-- Styles -->
    <!-- Bootstrap core CSS -->
    <link href="{{asset('chosen/docsupport/prism.css')}}" rel="stylesheet">
    <link href="{{asset('chosen/chosen.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-blue">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">AKP</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/setting')}}">{{trans('labels.administration')}} <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item" style="margin-left:27px">
                &nbsp;
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Auth::user()->username}}
                </a>
                <div class="dropdown-menu" aria-labelledby="nav1">
                    {{--  <a class="dropdown-item" href="{{url('/user/edit/'.Auth::user()->id)}}"><i class="fa fa-user text-primary"></i> &nbsp;{{trans('labels.profile')}}</a>  --}}
                    <a href="{{url('/user/reset-password')}}" class="dropdown-item"><i class="fa fa-key text-warning"></i> &nbsp;{{trans('labels.reset_password')}}</a>
                    <a href="{{ route('logout') }}" class="dropdown-item"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out text-success"></i> &nbsp;{{trans('labels.logout')}}</a>
                </div>
            </li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>~
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
            <ul class="nav nav-pills flex-column" id="siderbar">
                <li class="nav-item"><strong>Manage Information</strong></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/upload-gallery')}}" id="gallery"><i class="fa fa-image text-info"></i> Upload Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/category')}}" id="category"><i class="fa fa-tags text-info"></i> Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/page')}}" id="page"><i class="fa fa-book text-info"></i> Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/slide')}}" id="slideshow"><i class="fa fa-slideshare text-info"></i> Slideshow</a>
                </li>
                
            </ul>
            <ul class="nav nav-pills flex-column" id="siderbar">
                <li class="nav-item"><strong>User Management</strong></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/role')}}" id="menu_role"><i class="fa fa-shield text-info"></i> User Role</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/user')}}" id="user"><i class="fa fa-user text-info"></i> User Account</a>
                </li>
                
            </ul>
        </nav>
        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2">
            @yield('content')
        </main>
    </div>
</div>
<!-- Scripts -->

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/tether.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('chosen/chosen.jquery.js')}}"></script>
<script src="{{asset('chosen/docsupport/prism.js')}}"></script>
<script src="{{asset('chosen/docsupport/init.js')}}"></script>

<script>
        function chLang(evt, ln)
        {
            evt.preventDefault();
            $.ajax({
                type: "GET",
                url: "{{url('/')}}" + "/language/" + ln,
                success: function(sms){
                    if(sms>0)
                    {
                        location.reload();
                    }
                }
            });
        }
    </script>
<script>
    var burl = "{{url('/')}}";
</script>
@yield('js')
</body>
</html>
