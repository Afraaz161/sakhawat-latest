
<!DOCTYPE html>
<html lang="en">
    <head>
    
        @include('front.layout.meta')
        <!-- Libs CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap/css/bootstrap.min.css') }}">
        <link href="{{ asset('front/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/themecss/lib.css') }}" rel="stylesheet">
        <link href="{{ asset('front/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/js/minicolors/miniColors.css') }}" rel="stylesheet">
        
        <!-- Theme CSS
        ============================================ -->
        <link href="{{ asset('front/css/themecss/so_searchpro.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/themecss/so_megamenu.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/themecss/so-categories.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/themecss/so-newletter-popup.css') }}" rel="stylesheet">
    
        <link href="{{ asset('front/css/footer/footer1.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/header/header4.css') }}" rel="stylesheet">
        {{-- <link id="color_scheme" href="{{ asset('front/css/theme.css') }}" rel="stylesheet">  --}}
        <link id="color_scheme" href="{{ asset('front/css/home4.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
    
         <!-- Google web fonts
        ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700' rel='stylesheet' type='text/css'>
        <style type="text/css">
             body{font-family:'Roboto', sans-serif}
        </style>
    
    </head>

<body class="res layout-1">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-5">
    

    <!-- Header Container  -->
    @include('front.layout.header')
    <!-- //Header Container  -->
    
	<!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Page</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
        
        <div class="row">           
            <div id="content" class="col-sm-12 item-article">
                <div class="row box-1-about">
                    <div class="col-md-12 welcome-about-us">
                        <div class="title-about-us">
                            <h2>About Pak Company</h2>
                        </div>
                        {{-- <div class="content-about-us"> --}}
                            {{-- <div class="des-about-us"> --}}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/136916403/original/046bffdab9e169af4df87eb10348840916babe85/online-quran-pak-tutor.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <p><b>Pak Company</b> was founded in 1932 by (Late) Syed Ahmad Shah, who started publishing text books which were approved for the provinces of Punjab, Mumbai and Calcutta. The publication of the Holy Qur’an was started in early 70’s under the name of M/S pak company which is a registered trade mark of M/S West Pak Publishing co. (Pvt.) Ltd.</p>
                                        <p>By the grace of Allah Almighty we are the first Pakistani company that have developed, introduce and published the Holy Qur’an from computerized calligraphic Arabic font. This is why our publications are free of errors and mistakes. The wording layout and pattern is according to the approved specimen as specified by the Ministry of Religious Affairs, Government of Pakistan, Islamabad. The Holy Qur’an and separa sets translated in different languages (English, Roman English, Urdu, Farsi(Persian),Sindhi), Sizes,  Quality of paper and binding are available.</p>
                                        {{-- <p>Are you searching for the best essay authors? Then get a few ideas of how to employ essay authors through the world wide web. Among the most important variables you need to remember while thinking of hiring essayists to compose your essay, is the simple fact that you want it to be done in a short time. With this having been said, there are a number of tips that you paper writer can follow to hire essayists who will meet your deadline with precision. A few of those tips are as follows – check out the strategies and use these to employ essay authors who will meet your deadline with professionalism. All things considered, this is what you are trying to avoid.</p> --}}
                                    </div>
                                </div>
                                
                                {{-- <p>By the grace of Allah Almighty we are the first Pakistani company that have developed, introduce and published the Holy Qur’an from computerized calligraphic Arabic font. This is why our publications are free of errors and mistakes. The wording layout and pattern is according to the approved specimen as specified by the Ministry of Religious Affairs, Government of Pakistan, Islamabad. The Holy Qur’an and separa sets translated in different languages (English, Roman English, Urdu, Farsi(Persian),Sindhi), Sizes,  Quality of paper and binding are available.</p> --}}
                                {{-- <p>Are you searching for the best essay authors? Then get a few ideas of how to employ essay authors through the world wide web. Among the most important variables you need to remember while thinking of hiring essayists to compose your essay, is the simple fact that you want it to be done in a short time. With this having been said, there are a number of tips that you paper writer can follow to hire essayists who will meet your deadline with precision. A few of those tips are as follows – check out the strategies and use these to employ essay authors who will meet your deadline with professionalism. All things considered, this is what you are trying to avoid.</p> --}}
                            {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Main Container -->
    
	
	<!-- Footer Container -->
    @include('front.layout.footer')
    <!-- //end Footer Container -->
    </div>
	
	

<!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('front/js/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/owl-carousel/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/themejs/libs.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/unveil/jquery.unveil.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/countdown/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/datetimepicker/moment.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/modernizr/modernizr-2.6.2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/minicolors/jquery.miniColors.min.js')}}"></script>
    
    <!-- Theme files -->
    
    <script type="text/javascript" src="{{ asset('front/js/themejs/application.js')}}"></script>
    
    <script type="text/javascript" src="{{ asset('front/js/themejs/homepage.js')}}"></script>
    
    <script type="text/javascript" src="{{ asset('front/js/themejs/toppanel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/themejs/so_megamenu.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/themejs/addtocart.js')}}"></script> 
	<script src="{{ asset('front/js/popper.min.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('front/js/custom.js')}}"></script> 
	<script>
        $(document).ready(function(e){
            // show cart items in header
			$.get('{{ route("myCartPage.getCart-onLoad") }}', function(response){
				$('#cart').empty().append(response);
			});
        });
    </script>
</body>
</html>