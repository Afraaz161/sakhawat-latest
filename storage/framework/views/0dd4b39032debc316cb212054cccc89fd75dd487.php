<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TOOR HARDWARE STORE | POS - Point Of Sale</title>
    <meta name="description" content="">
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
</head>

<body class="materialdesign">
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <?php echo $__env->make('layout.left-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <?php echo $__env->make('layout.header-top-area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-9">
                                      <div class="">
                                        <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                      </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?php echo e(route('dashboard')); ?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Items</span>
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
                                      <div class="">
                                        <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Items</span>
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
            
            <!-- Transitions Start-->
            <div class="transition-world-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="transition-world-list shadow-reset">
                                <div class="sparkline7-list">
                                    <div class="sparkline7-hd">
                                        <div class="main-spark7-hd">
                                            <h1>Items List</h1>
                                            <div class="sparkline7-outline-icon">
                                                <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                <span><i class="fa fa-wrench"></i></span>
                                                <span class="sparkline7-collapse-close"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline7-graph">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                                        <thead>
                                                            <tr>
                                                                <th data-field="sr">SR#</th>
                                                                <th>Image</th>
                                                                <th data-field="item name">Item Name</th>
                                                                
                                                                <th data-field="sell price">Price</th>
                                                                <th data-field="name urdu">Name Urdu</th>
                                                                <th data-field="category">Category</th>
                                                                <th data-field="manufacture">Manufacture</th>
                                                                <th data-field="buy price">Re-Order Value</th>
                                                                <th data-field="actions">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                                $index = $key+1;
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo e($index); ?></td>
                                                                    <td style="text-align: center;"><img src="<?php echo e(asset('items/').'/'.$item->image); ?>" alt="" style="border-radius:50%; width:50px;"></td>
                                                                    <td><?php echo e($item->name); ?></td>
                                                                    
                                                                    <td><?php echo e($item->price); ?></td>
                                                                    <td><?php echo e($item->u_name); ?></td>
                                                                    <td><?php echo e($item->category['name']); ?></td>
                                                                    <td><?php echo e($item->manufacture['name']); ?></td>
                                                                    <td><?php echo e($item->reorder_value); ?></td>
                                                                    <td>
                                                                        <a href="<?php echo e(route('item.edit-item', ['id'=>$item->id])); ?>" class="btn btn-primary" style="color: #fff;">Edit</a>
                                                                        <a href="<?php echo e(route('item.delete-item', ['id'=>$item->id])); ?>" class="btn btn-primary" style="color: #fff;">Delete</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Transitions End-->
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

</html><?php /**PATH C:\Users\afraa\OneDrive\Desktop\TestProject\wahab\resources\views/item/view-items-list.blade.php ENDPATH**/ ?>