<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>POS (Point of Sale Software) - A brand of WebEasy Pvt Limited.</title>
    <meta name="description" content="Moin Abbas">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/c3.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <style>
        .btn-dashboard {
            width: 200px;   
            height: 150px;
            font-size: 20px;
            line-height: 7;
        }
        .btn-default {
            color: #fff;
            width: 200px;
            height: 150px;
            font-size: 20px;
            line-height: 7;
        }
    </style>
</head>

<body class="materialdesign">
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            @include('layout.left-sidebar')
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            {{-- @include('layout.header-top-area') --}}
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ route('admin-dashboard') }}">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            @include('layout.mobile-menu')
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area des-none mg-b-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area">
                <div class="container-fluid">
                 
                        <div class="row" style="margin-bottom: 15px;">
                            <h1 class="text-center heading" style="font-size: 50px;">Welcome to <b>Admin</b> Dashboard</h1>
                        </div>
                        <div class="row">
                        <div class="col-lg-3">
                                <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30 align-centre">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>Total Sales</h2>
                                            
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span></span><span class="counter">{{$totalOrderAmounts}}</span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline1"></span>
                                            </div>
                                        </div>
                                        <div class="income-range">
                                            <p>Total income</p>
                                            <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>Total Orders</h2>
                                            <div class="main-income-phara">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span></span><span class="counter">{{$totalOrders}}</span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline1"></span>
                                            </div>
                                        </div>
                                        <div class="income-range">
                                            <p>Total income</p>
                                            <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>Pending Orders</h2>
                                            <div class="main-income-phara">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span></span><span class="counter">{{$pendingOrders}}</span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline1"></span>
                                            </div>
                                        </div>
                                        <div class="income-range">
                                            <p>Total income</p>
                                            <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>Delivered Orders</h2>
                                            <div class="main-income-phara">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span></span><span class="counter">{{$deliveredOrders}}</span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline1"></span>
                                            </div>
                                        </div>
                                        <div class="income-range">
                                            <p>Total income</p>
                                            <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>In-Progress Orders</h2>
                                            <div class="main-income-phara">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span></span><span class="counter">{{$inProgressOrders}}</span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline1"></span>
                                            </div>
                                        </div>
                                        <div class="income-range">
                                            <p>Total income</p>
                                            <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>Cancelled Orders</h2>
                                            <div class="main-income-phara">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span></span><span class="counter">{{$cancelledOrders}}</span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline1"></span>
                                            </div>
                                        </div>
                                        <div class="income-range">
                                            <p>Total income</p>
                                            <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>Products</h2>
                                            <div class="main-income-phara">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span></span><span class="counter">{{$items}}</span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline1"></span>
                                            </div>
                                        </div>
                                        <div class="income-range">
                                            <p>Total income</p>
                                            <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="" class="btn btn-success btn-dashboard">New Invoice</a>
                            </div>
                            <div class="col-lg-2">
                                <a href="" class="btn btn-info btn-dashboard">Products</a>
                            </div>
                        </div>
                 
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start-->
    @include('layout.footer')
    <!-- Footer End-->
    <!-- jquery
		============================================ -->
    <script src="{{asset('js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('js/wow/wow.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('js/counterup/counterup-active.js')}}"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="{{asset('js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('js/jvectormap/jvectormap-active.js')}}"></script>
    <!-- peity JS
		============================================ -->
    <script src="{{asset('js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{asset('js/flot/Chart.min.js')}}"></script>
    <script src="{{asset('js/flot/dashtwo-flot-active.js')}}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{asset('js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>