<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from diamantgjota.com/themes/plus-v1.3.0/about-us-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 13:10:04 GMT -->
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
                    <li><i class="fa fa-phone"></i> +92-300-6949038</li>
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
            </div>
            <!-- end container -->
        </div>
        <!-- end topBar -->

        <div class="middleBar">
            <div class="container">
                <div class="row display-table">
                    <div class="col-sm-1 vertical-align text-left hidden-xs">
                        <a href="{{ route('index') }}">
                            <img width="160" src="{{asset('front/img/logo3.png')}}" alt="" style="width: 140px;" />
                        </a>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-11 vertical-align text-center">
                        <marquee behavior="" direction="">
                            <h2>Toor Hardware and Agriculture Store, Sahiwal Road, Pakpattan. Contact# 0300-8449038 | طور ہارڈویئر اینڈ زرعی مشینری سٹور، ساہیوال روڈ پاکپتن</h2>
                        </marquee>
                    </div>
                    <!-- end col -->
                    {{-- <div class="col-sm-2 vertical-align header-items hidden-xs">
                        <a href="{{ route('index') }}">
                            <img width="160" src="{{asset('front/img/logo/urdu.png')}}" alt="" style="width:140px;"/>
                        </a>
                    </div> --}}
                    <!-- end col -->
                </div><!-- end  row -->
            </div><!-- end container -->
        </div>
        
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
                        <li class="dropdown left"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Products<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $item)
                                @php
                                    $name = str_replace(' ', '-', $item->category['name'] );  
                                @endphp
                                    <li><a href="{{ route('category-product', ['name'=> $name]) }}">{{ $item->category['name'] }}</a></li>
                                @endforeach
                            </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
                        <!-- About Us -->
                        <li class="dropdown"><a href="{{ route('about-us') }}" class="dropdown-toggle">About Us</a>
                        </li>
                        <li class="dropdown"><a href="{{ route('contact-us') }}" class="dropdown-toggle">Contact Us</a>
                        </li> 
                    </ul><!-- end navbar-nav -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown right">
                            <a href="https://www.facebook.com/ToorHardwareStore" class="dropdown-toggle" style="font-size: 25px;">
                                <i class="fa fa-facebook-official ml-5"></i>
                            </a>
                        </li>
                        <li class="dropdown right">
                            <a href="https://www.instagram.com/toorhardwarestore/" class="dropdown-toggle" style="font-size: 25px;">
                                <i class="fa fa-instagram ml-5"></i>
                            </a>
                        </li>
                        <li class="dropdown right">
                            <a href="https://m.youtube.com/channel/UCDtSrAUIeyb0kQ0xn0FTdHQ" class="dropdown-toggle" style="font-size: 25px;">
                                <i class="fa fa-youtube ml-5"></i>
                            </a>
                        </li>
                        <li class="dropdown right">
                            <a href="" class="dropdown-toggle" style="font-size: 25px;">
                                <i class="fa fa-google-plus-square ml-5"></i>
                            </a>
                        </li>
                        <li class="dropdown right">
                            <a href="https://api.whatsapp.com/send?phone=03008449038" class="dropdown-toggle" style="font-size: 25px;">
                                <i class="fa fa-whatsapp ml-5"></i>
                            </a>
                        </li>
                        <!-- end dropdown -->
                    </ul><!-- end navbar-right -->
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </div>
        <!-- end navbar -->
        
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul><!-- end breadcrumb -->
                    </div><!-- end col -->    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumbs -->
        
        <!-- start section -->
        <section class="section white-backgorund">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 vertical-align">
                        <h2 class="title" style="margin-top: -20px;">About</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div><!-- end col -->
                    <div class="col-sm-5 vertical-align">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5F-Z5p_Vnmw"></iframe>
                        </div>
                    </div>
                </div><!-- end row -->
                
                <hr class="spacer-100">
                
                <div class="row" style="margin-top: -80px;">
                    <div class="col-sm-12">
                        <div class="title-wrap">
                            <h2 class="title">Products</h2>
                            {{-- <h6 class="subtitle">Lorem Ipsum dolar sit amet</h6> --}}
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                
                <div class="row">
                    @foreach($slider_bottom as $key=>$item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="member zoom-in">
                                <figure>
                                    <img src="{{ asset('front/slider/').'/'.$item->image }}" alt="">
                                    {{-- <ul class="social-icons style1">
                                        <li class="facebook"><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li class="dribbble"><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="behance"><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance"></i></a></li>
                                    </ul> --}}
                                </figure>
                                {{-- <div class="member-content">
                                    <h5 class="name regular">John Doe</h5>
                                    <h6 class="position thin">Co-Founder, CEO</h6>
                                </div>
                                <!-- end member-content -->     --}}
                            </div><!-- end member -->
                        </div><!-- end col -->
                    @endforeach
                </div><!-- end row -->
                
            </div><!-- end container -->
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

<!-- Mirrored from diamantgjota.com/themes/plus-v1.3.0/about-us-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 13:10:13 GMT -->
</html>