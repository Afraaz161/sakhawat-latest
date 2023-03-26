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

    <link rel="stylesheet" href="<?php echo e(asset('fm.selectator.jquery.css')); ?>"/>

    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .selectator_selected_item_left{
            display: none;
        }
    </style>
    <!-- modernizr JS
        ============================================ -->
        <script src="<?php echo e(asset('js/vendor/jquery-1.11.3.min.js')); ?>"></script>
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
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            
                                            <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?php echo e(route('dashboard')); ?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Purchase Form</span>
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
                                            
                                            <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Accounts</span>
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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Edit Account</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <form action="<?php echo e(route('account.update-account')); ?>" method="POST">
                                        <input type="hidden" name="id" value="<?php echo e($account->id); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                              <div class="form-group">
                                                  <label for="name">Name</label>
                                                  <input type="text" value="<?php echo e($account->name); ?>" name="name" class="form-control" id="name" autofocus>
                                              </div>
                                            </div>
                                            <div class="col-lg-12">
                                              <div class="form-group">
                                                  <label for="address">Address</label>
                                                  <input type="text" value="<?php echo e($account->address); ?>" name="address" class="form-control" id="address">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-12">
                                            <div class="form-group">
                                              <label for="phone">Phone</label>
                                              <input type="text" value="<?php echo e($account->phone); ?>" name="phone" class="form-control" id="phone">
                                            </div>
                                          </div>
                                          <div class="col-lg-12">
                                            <div class="form-group">
                                              <label for="type">Type</label>
                                              <?php if($account->type=="Customer"): ?>
                                              <select name="type" id="type" class="form-control">
                                                <option value="<?php echo e($account->type); ?>" selected><?php echo e($account->type); ?></option>
                                                <option value="Customer">Customer</option>
                                              </select>
                                              <?php else: ?>
                                              <select name="type" id="type" class="form-control">
                                                <option value="<?php echo e($account->type); ?>" selected><?php echo e($account->type); ?></option>
                                                <option value="Customer">Vendor</option>
                                              </select>
                                              <?php endif; ?>
                                            </div>
                                          </div>
                                          <!-- <div class="col-lg-12">
                                            <div class="form-group">
                                              <label for="ntn">NTN#</label>
                                              <input type="text" name="ntn" value="<?php echo e($account->ntn_no); ?>" class="form-control" id="ntn">
                                            </div>
                                          </div>
                                          <div class="col-lg-12">
                                            <div class="form-group">
                                              <label for="sales_tax">Sales Tax #</label>
                                              <input type="text" name="sales_tax" value="<?php echo e($account->sales_tax_no); ?>" class="form-control" id="sales_tax">
                                            </div>
                                          </div> -->
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                              <div class="income-title">
                                  <div class="main-income-head">
                                      <h2>Accounts</h2>
                                  </div>
                              </div>
                              <div class="income-dashone-pro">
                                <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                  <div id="toolbar1"></div>
                                  <table id="table1" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                      <thead>
                                          <tr>
                                              <th data-field="id">SR#</th>
                                              <th data-field="status">Name</th>
                                              <th data-field="date">Phone</th>
                                              <th data-field="phone">Address</th>
                                              <th data-field="type">Type</th>
                                              <th data-field="action">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $index = $key + 1;
                                        ?>
                                          <tr>
                                              <td><?php echo e($index); ?></td>
                                              <td><?php echo e($item->name); ?></td>
                                             
                                              <td><?php echo e($item->phone); ?></td>
                                              <td><?php echo e($item->address); ?></td>
                                              <td><?php echo e($item->type); ?></td>
                                              <td>
                                                <a href="<?php echo e(route('account.edit-account', ['id'=>$item->id])); ?>" class="btn btn-primary" style="color: #fff;"><i class="fa fa-edit"></i></a>
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
    <!-- Footer Start-->
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer End-->

<!-- Customer Modal Start -->
<div id="myModalCustomer" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Account</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="customer_name">Name</label>
                        <input type="text" name="customer_name" class="form-control" id="customer_name" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="customer_address">Address</label>
                        <input type="text" name="customer_address" class="form-control" id="customer_address">
                    </div>
                    <div class="form-group">
                        <label for="customer_phone">Phone</label>
                        <input type="text" name="customer_phone" class="form-control" id="customer_phone">
                    </div>
                    <div class="form-group">
                        <label for="manufacture">Type</label>
                        <select name="customer_type" id="customer_type" class="form-control">
                            <option value="vendor">Vendor</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn-customer-submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Customer Modal End -->


<div id="receivePaymentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment Detail</h4>
        </div>
        <div class="modal-body" id="receivable-payment-body">
        </div>
      </div>
    </div>
</div>

    <!-- jquery
		============================================ -->
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
    <script src="<?php echo e(asset('fm.selectator.jquery.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="<?php echo e(asset('print/jquery.printPage.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\afraa\OneDrive\Desktop\TestProject\wahab\resources\views/accounts/edit-account.blade.php ENDPATH**/ ?>