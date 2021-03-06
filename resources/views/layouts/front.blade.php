<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AKP Gallery</title>
  <link href="{{asset('front/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Theme styles START -->
  <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('front/css/style-responsive.css')}}" rel="stylesheet">
  <link href="{{asset('front/css/custom.css')}}" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->
<!-- Body BEGIN -->
<body class="corporate container">
<div class="bordertop"> 
</div>
    <!-- BEGIN TOP BAR -->
    <div class="b-container">
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-9 col-sm-9 additional-shop-info">
                    <ul class="list-unstyled list-inline header-top-co">
                        <li><span style="color: #FF0000; font-size: 11px;">KHMER</span> <img src="{{asset('front/img/kh.gif')}}"></li>
                        <li><span style="color: #FF0000; font-size: 11px;">ENGLISH</span> <img src="{{asset('front/img/kh.gif')}}"></li>
                        <li><span style="color: #FF0000; font-size: 11px;">FRANCE</span> <img src="{{asset('front/img/fr.gif')}}"></li>
                    </ul>
                </div>

            </div>
        </div>        
    </div>
    <header>
      <div class="container">
        <div class="akp-en-logo">
          <a href="{{url('/')}}"><img src="{{asset('front/img/akp-en-logo.gif')}}"></a>
        </div>
      </div>
    </header>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation font-transform-inherit">
          <ul>
            <li><a class="nav-link" href="{{url('/')}}">Home</a></li>
            <li class="dropdown">
             <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                Gallery
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-12 header-navigation-col">
                        <h4>All Categories</h4>
                        <ul>   
                          @foreach($categories as $cat)
                            <div class="col-md-4 padding-none">
                              <li><a href="{{url('/gallery/list/'.$cat->id)}}">{{$cat->name}}</a></li>
                            </div>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>   
            <li><a class="nav-link" href="{{url('/')}}">Contact</a></li>
            <li><a class="nav-link" href="{{url('/')}}">About</a></li>
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
    @yield('content')

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 ">
             © Copyright {{date('Y')}}. All Rights Reserved.
          </div>
          <!-- END COPYRIGHT -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->
    <script src="{{asset('front/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('front/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>      
    <!-- END CORE PLUGINS -->
   
</body>
</html>