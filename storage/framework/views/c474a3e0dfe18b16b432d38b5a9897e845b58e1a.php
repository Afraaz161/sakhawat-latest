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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/favicon.ico')); ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/adminpro-custon-icon.css')); ?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/meanmenu.min.css')); ?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery.mCustomScrollbar.min.css')); ?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/jvectormap/jquery-jvectormap-2.0.3.css')); ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/data-table/bootstrap-table.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/data-table/bootstrap-editable.css')); ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/c3.min.css')); ?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo e(asset('js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
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
            <?php echo $__env->make('layout.left-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            
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
                                            <li><a href="<?php echo e(route('admin-dashboard')); ?>">Home</a> <span class="bread-slash">/</span>
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
            <?php echo $__env->make('layout.mobile-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                                <h3><span></span><span class="counter"><?php echo e($items); ?></span></h3>
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
                                <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>Purchases</h2>
                                            <div class="main-income-phara order-cl">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span class="counter"><?php echo e($purchases); ?></span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline6"></span>
                                            </div>
                                        </div>
                                        <div class="income-range order-cl">
                                            <p>New Orders</p>
                                            <span class="income-percentange">66% <i class="fa fa-level-up"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>Sales</h2>
                                            <div class="main-income-phara visitor-cl">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span class="counter"><?php echo e($sales); ?></span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline2"></span>
                                            </div>
                                        </div>
                                        <div class="income-range visitor-cl">
                                            <p>New Visitor</p>
                                            <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>Profit</h2>
                                            <div class="main-income-phara low-value-cl">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span class="counter"><?php echo e($profit); ?></span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline5"></span>
                                            </div>
                                        </div>
                                        <div class="income-range low-value-cl">
                                            <p>In first month</p>
                                            <span class="income-percentange">33% <i class="fa fa-level-down"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                                    <div class="income-title">
                                        <div class="main-income-head">
                                            <h2>Receivables</h2>
                                            <div class="main-income-phara low-value-cl">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="income-dashone-pro">
                                        <div class="income-rate-total">
                                            <div class="price-adminpro-rate">
                                                <h3><span class="counter"><?php echo e($receivables); ?></span></h3>
                                            </div>
                                            <div class="price-graph">
                                                <span id="sparkline4"></span>
                                            </div>
                                        </div>
                                        <div class="income-range low-value-cl">
                                            <p>In first month</p>
                                            <span class="income-percentange">33% <i class="fa fa-level-down"></i></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <a href="" class="btn btn-success btn-dashboard">New Invoice</a>
                            </div>
                            <div class="col-lg-2">
                                <a href="" class="btn btn-info btn-dashboard">New Purchase</a>
                            </div>
                            <div class="col-lg-2">
                                <a href="" class="btn btn-warning btn-dashboard">Receivables</a>
                            </div>
                            <div class="col-lg-2">
                                <a href="" class="btn btn-danger btn-dashboard">Purchases</a>
                            </div>
                            <div class="col-lg-2">
                                <a href="" class="btn btn-default">Profit/Loss</a>
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
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer End-->
    <!-- jquery
		============================================ -->
    <script src="<?php echo e(asset('js/vendor/jquery-1.11.3.min.js')); ?>"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo e(asset('js/jquery.meanmenu.js')); ?>"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo e(asset('js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo e(asset('js/jquery.sticky.js')); ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo e(asset('js/wow/wow.min.js')); ?>"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo e(asset('js/counterup/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/counterup/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/counterup/counterup-active.js')); ?>"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="<?php echo e(asset('js/jvectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jvectormap/jvectormap-active.js')); ?>"></script>
    <!-- peity JS
		============================================ -->
    <script src="<?php echo e(asset('js/peity/jquery.peity.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/peity/peity-active.js')); ?>"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo e(asset('js/sparkline/jquery.sparkline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/sparkline/sparkline-active.js')); ?>"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo e(asset('js/flot/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/flot/dashtwo-flot-active.js')); ?>"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?php echo e(asset('js/data-table/bootstrap-table.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/tableExport.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/data-table-active.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/bootstrap-table-editable.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/bootstrap-editable.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/bootstrap-table-resizable.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/colResizable-1.5.source.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/bootstrap-table-export.js')); ?>"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>

</html><?php /**PATH E:\projects\pos\sakhawat-latest\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>