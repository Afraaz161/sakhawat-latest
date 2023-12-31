<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>POS (Point of Sale Software) - A brand of WebEasy Pvt Limited.</title>
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
                                            <li><span class="bread-blod">Users</span>
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
                                            </form> --}}
                                            <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Users</span>
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
                        <div class="col-lg-12">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Create New User</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <form action="<?php echo e(route('update-user-profile')); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="name">Image</label>
                                                    <input type="file" value="<?php echo e($user->logo); ?>" name="logo" class="form-control" id="logo">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <img src="<?php echo e(asset('users/').'/'.$user->logo); ?>" alt="" style="width: 170px;">
                                                    <?php if($user->logo): ?> 
                                                        <a href="<?php echo e(route('remove-logo', ['id'=>$user->id])); ?>">Remove</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                              <div class="form-group">
                                                  <label for="name">Name</label>
                                                  <input type="text" value="<?php echo e($user->name); ?>" name="name" class="form-control" id="name" autofocus>
                                              </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" value="<?php echo e($user->phone); ?>" name="phone" class="form-control" id="phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-3">
                                              <div class="form-group">
                                                  <label for="email">Email</label>
                                                  <input type="email" value="<?php echo e($user->email); ?>" name="email" class="form-control" id="email">
                                              </div>
                                            </div>
                                            <div class="col-lg-3">
                                              <div class="form-group">
                                                  <label for="type">Role</label>
                                                  <select name="type" id="type" name="type" class="form-control">
                                                    <option value="<?php echo e($user->type); ?>" selected><?php echo e($user->type); ?></option>
                                                    <option value="saleman">Sales Man</option>
                                                    <option value="Admin">Admin</option>
                                                  </select>
                                              </div>
                                            </div>
                                            <div class="col-lg-6">
                                              <label for="type">Address</label>
                                              <textarea name="address" id="address" name="address" cols="100" rows="3" class="form-control" required><?php echo e($user->address); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <div class="form-group">
                                              <label for="pass">New Password</label>
                                              <input type="text" name="pass" class="form-control" id="pass">
                                          </div>
                                          </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                                    </form>
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
    <script>
      $(document).ready(function(){
          $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var i = $(this).prev();
            if (i.attr("type") == "password") {
              i.attr("type", "text");
            } else {
              i.attr("type", "password");
            }
          });
      });
    </script>
</body>

</html><?php /**PATH E:\projects\pos\sakhawat-latest\resources\views/dashboard/profile.blade.php ENDPATH**/ ?>