<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from diamantgjota.com/themes/plus-v1.3.0/home-v4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 13:07:31 GMT -->
<head>
    <title>TOOR HARDWARE STORE | POS - Point Of Sale</title>
    <meta charset="utf-8">
    <meta name="description" content="Toor Hardware Store | Developed by Moin Abbas">
    <meta name="author" content="Moin Abbas" />
    <meta name="keywords" content="Toor Hardware Store, hardware store, toor, hardware, store, point of sale, pos, responsive, creative" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('front/img/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('front/img/favicon.ico')}}" type="image/x-icon">
    
    <!-- css files -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/swiper.css')}}" />
    
    <!-- this is default skin you can replace that with: dark.css')}}, yellow.css')}}, red.css')}} ect -->
    <link id="pagestyle" rel="stylesheet" type="text/css" href="{{asset('front/css/default.css')}}" />
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <style>
        .toggleButtonSettings{
            display: none;
        }
    </style>
</head>
    <body>
        
        <!-- start topBar -->
        <div class="topBar inverse">
            <div class="container">
                <ul class="list-inline pull-left hidden-xs">
                    <li><i class="fa fa-phone"></i> +92-302-4925015</li>
                    <li><i class="fa fa-envelope"></i> info@toorhardwarestore.com</li>
                </ul>
                
                <ul class="topBarNav pull-right">
                    <li class="linkdown">
                        <a href="{{ url('/login-page') }}">
                            <i class="fa fa-sign-in mr-5"></i>
                            <span class="hidden-xs">
                                Login
                            </span>
                        </a>
                    </li>
                </ul>
            </div><!-- end container -->
        </div>
        <!-- end topBar -->
        
        <div class="middleBar">
            <div class="container">
                <div class="row display-table">
                    <div class="col-sm-1 vertical-align text-left hidden-xs">
                        <a href="{{ route('index') }}">
                            <img width="160" src="{{asset('front/img/english.png')}}" alt="" style="width: 85px;" />
                        </a>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-9 vertical-align text-center">
                        <marquee behavior="" direction="">
                            <h2>Toor Hardware and Agriculture Store, Sahiwal Road, Pakpattan</h2>
                        </marquee>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-2 vertical-align header-items hidden-xs">
                        <a href="{{ route('index') }}">
                            <img width="160" src="{{asset('front/img/urdu.png')}}" alt="" style="width:200px;" />
                        </a>
                    </div>
                    <!-- end col -->
                </div><!-- end  row -->
            </div><!-- end container -->
        </div><!-- end middleBar -->
        
        <!-- start navbar -->
        <div class="navbar yamm navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-3" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{ route('index') }}" class="navbar-brand visible-xs">
                        <img src="{{asset('front/img/logo.png')}}" alt="logo">
                    </a>
                </div>
                <div id="navbar-collapse-3" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="dropdown"><a href="{{ route('index') }}" class="dropdown-toggle">Home</a>
                        </li>  
                        <!-- Categories -->
                        <li class="dropdown left"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Categories<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $item)
                                @php
                                    $name = str_replace(' ', '-', $item->name );  
                                @endphp
                                    <li><a href="{{ route('category-product', ['id'=> $item->id]) }}">{{ $item->name }}</a></li>
                                @endforeach
                            </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
                        <!-- About Us -->
                        <li class="dropdown"><a href="" class="dropdown-toggle">About Us</a>
                        </li> 
                    </ul><!-- end navbar-nav -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown right">
                            <a href="" class="dropdown-toggle" style="font-size: 25px;">
                                <i class="fa fa-facebook-official ml-5"></i>
                            </a>
                        </li>
                        <li class="dropdown right">
                            <a href="" class="dropdown-toggle" style="font-size: 25px;">
                                <i class="fa fa-instagram ml-5"></i>
                            </a>
                        </li>
                        <li class="dropdown right">
                            <a href="" class="dropdown-toggle" style="font-size: 25px;">
                                <i class="fa fa-youtube ml-5"></i>
                            </a>
                        </li>
                        <li class="dropdown right">
                            <a href="" class="dropdown-toggle" style="font-size: 25px;">
                                <i class="fa fa-google-plus-square ml-5"></i>
                            </a>
                        </li>
                        <!-- end dropdown -->
                    </ul><!-- end navbar-right -->
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </div><!-- end navbar -->
              
        <!-- start section -->
        <section class="section light-backgorund">
            <div class="container">
                <div class="row" style="margin-top: -10px;">
                    <div class="col-sm-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs style1" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#featured" aria-controls="featured" role="tab" data-toggle="tab"><h6 class="text-uppercase">Featured Products</h6></a>
                            </li>
                        </ul><!-- nav-tabs -->
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="featured">
                                <div class="row column-4">
                                    {{-- <marquee behavior="" truespeed = "true" scrolldelay = "40" direction=""> --}}
                                        @if ($items)
                                            @foreach ($items as $product)
                                            <div class="col-sm-6 col-md-3">
                                                <div class="thumbnail store style1">
                                                    <div class="header">
                                                        <div class="badges">
                                                        </div>
                                                        <figure class="layer">
                                                            <a href="javascript:void(0);">
                                                                <img src="{{asset('items/').'/'.$product->image}}" alt="">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <div class="caption">
                                                        <h6 class="regular"><a href="">{{ $product->name }}</a></h6>
                                                        <div class="price">
                                                            <small>Rs.</small>
                                                            <span class="amount text-primary">{{ $product->price }}</span>
                                                        </div>
                                                    </div><!-- end caption -->
                                                </div><!-- end thumbnail -->
                                            </div><!-- end col -->
                                        @endforeach
                                        @endif
                                    {{-- </marquee> --}}
                                </div><!-- end row -->
                            </div><!-- end tab -->
                        </div><!-- end tab content -->
                    </div><!-- end col -->
                </div><!-- end row -->
                <hr class="spacer-10 no-border"/>
            </div>
            <!-- end container -->
        </section>
        <!-- end section -->
        
        <!-- start footer -->
        <footer class="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-12">
                        <p class="text-sm">&COPY; 2020. Developed by <a href="javascript:void(0);">Moin Abbas.</a></p>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer>
        <!-- end footer -->
        
        <!-- JavaScript Files -->
        <script type="text/javascript" src="{{asset('front/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/jquery.downCount.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/nouislider.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/jquery.sticky.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/pace.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/star-rating.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/wow.min.js')}}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="{{asset('front/js/gmaps.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>
    </body>
</html>