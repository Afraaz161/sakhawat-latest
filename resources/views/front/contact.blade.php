<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from diamantgjota.com/themes/plus-v1.3.0/contact-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 13:10:03 GMT -->
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
                            <li class="active">Contact Us</li>
                        </ul><!-- end breadcrumb -->
                    </div><!-- end col -->    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumbs -->
        
        <!-- start section -->
        <section class="light-background">
            <div class="container-fluid">
                <div class="row grid-space-0">
                    <div class="col-sm-12">
                        {{-- <div class="map" id="map"></div> --}}
                        <iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13771.480464719125!2d73.3741581!3d30.354641!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbbc45fa58cddba2f!2sToor%20Hardware%20Store!5e0!3m2!1sen!2s!4v1606758505378!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div><!-- end col -->    
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end section -->
        
        <!-- start section -->
        <section class="section white-backgorund">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-wrap">
                            <h2 class="title lines">Contact Us</h2>
                        </div>
                    </div><!-- end col -->    
                </div><!-- end row -->
                
                <div class="row column-3">
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-commenting-o text-warning"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="thin">Need Help?</h6>
                                <h5 class="text-warning">Use our chat!</h5>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col -->   
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-phone text-info"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="thin">Quick question?</h6>
                                <h5 class="text-info"><a href="tel:03006949038" style="color:#64d5f6;">+92-300-6949038</a></h5>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col -->   
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-envelope-o text-success"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="thin">or send us e-mail</h6>
                                <h5 class="text-success">info@toorhardwarestore.com</h5>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col --> 
                </div><!-- end row -->
                
                <hr class="spacer-40 no-border">
                <div class="row">
                    <div class="">
                        @include('include.messages')
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <form method="POST" action="{{ route('contact-us-action') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="E-mail" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Message</label>
                                <textarea name="message" id="message" rows="6" class="form-control input-lg" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-default round btn-lg" value="Submit">
                            </div>
                        </form>
                    </div><!-- end col -->
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
        
        <script type="text/javascript">
            $(document).ready(function(){
                // Contact Map
                if ($("#map").length > 0)
                {
                    var map;

                    map = new GMaps({
                        el: "#map",
                        lat: 45.494447,
                        lng: -73.5697587,
                        scrollwheel: false,
                        zoom: 14,
                        zoomControl: true,
                        panControl: false,
                        streetViewControl: false,
                        mapTypeControl: false,
                        overviewMapControl: false,
                        clickable: false
                    });

                    var image = "";
                    map.addMarker({
                        lat: 45.494447,
                        lng: -73.5697587,
                        icon: "img/marker.png",
                        animation: google.maps.Animation.DROP,
                        verticalAlign: "bottom",
                        horizontalAlign: "center",
                        backgroundColor: "#d3cfcf"
                    });

                    var styles = [
                        {
                            "featureType": "road",
                            "stylers": [
                                {"color": "#ffffff"}
                            ]
                        }, {
                            "featureType": "water",
                            "stylers": [
                                {"color": "#f2f2f2"}
                            ]
                        }, {
                            "featureType": "landscape",
                            "stylers": [
                                {"color": "#f2f2f2"}
                            ]
                        }, {
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {"color": "#2d2d2d"}
                            ]
                        }, {
                            "featureType": "poi",
                            "stylers": [
                                {"color": "#f2f2f2"}
                            ]
                        }, {
                            "elementType": "labels.text",
                            "stylers": [
                                {"saturation": 1},
                                {"weight": 0.1},
                                {"color": "#b1b1b1"}
                            ]
                        }

                    ];

                    map.addStyle({
                        styledMapName: "Styled Map",
                        styles: styles,
                        mapTypeId: "map_style"
                    });

                    map.setStyle("map_style");
                }
            });
        </script>
        
    </body>

</html>