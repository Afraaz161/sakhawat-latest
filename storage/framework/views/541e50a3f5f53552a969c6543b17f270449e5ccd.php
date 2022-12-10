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
                                            <li><span class="bread-blod">Add New Item</span>
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
                                        <h2>Add New Item</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    
                                    <form action="<?php echo e(route('items.add-item-action')); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">Item name</label>
                                                    <input type="text" tabindex="1" class="form-control" name="name" id="name" autofocus required>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="form-group show-categories-section" id="show-categories-section">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="add_new_category">&nbsp;</label>    
                                                    <button type="button" id="add_new_category" class="btn btn-primary" data-toggle="modal" data-target="#myModalCategory"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="image">Image</label>
                                                    <input type="file" tabindex="6" class="form-control" name="image" id="image" value="<?php echo e(old('image')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="rate">Company Rate</label>
                                                    <input type="text" tabindex="9" class="form-control" name="rate" id="rate" value="<?php echo e(old('rate')); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="stock">Stock</label>
                                                    <input type="text" tabindex="9" class="form-control" name="stock" id="stock" value="<?php echo e(old('stock')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="reorder_value">Re-Order</label>
                                                    <input type="text" tabindex="7" class="form-control" name="reorder_value" id="reorder_value" value="<?php echo e(old('reorder_value')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="unit">Unit</label>
                                                    <select name="unit" id="unit" class="form-control" required>
                                                        <option>Choose Unit</option>
                                                        <option value="kg">Kg</option>
                                                        <option value="gram">Gram</option>
                                                        <option value="foot">Foot</option>
                                                        <option value="inch">Inch</option>
                                                        <option value="piece">Piece</option>
                                                        <option value="rolls">Rolls</option>
                                                        <option value="set">Set</option>
                                                        <option value="box">Box</option>
                                                        <option value="cotton">Cotton</option>
                                                        <option value="dozen">Dozen</option>
                                                        <option value="Liter">Liter</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" tabindex="10" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
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
                                                                <th data-field="Brand">Category</th>
                                                                
                                                                <th data-field="rate">Company Rate</th>
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
                                                                    <td style="text-align: center;"><img src="<?php echo e(asset('items/').'/'.$item->image); ?>" alt="" style="width:50px;"></td>
                                                                    <td><?php echo e($item->name); ?></td>
                                                                    <td><?php echo e($item->category['name']); ?></td>
                                                                    
                                                                    <td><?php echo e($item->price); ?></td>
                                                                    <td>
                                                                        <a href="<?php echo e(route('item.edit-item', ['id'=>$item->id])); ?>" class="btn btn-primary" style="color: #fff;"><i class="fa fa-pencil"></i></a>
                                                                        <a href="<?php echo e(route('item.delete-item', ['id'=>$item->id])); ?>" class="btn btn-primary" style="color: #fff;"><i class="fa fa-trash"></i></a>
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
        </div>
    </div>
    <!-- Footer Start-->
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer End-->

<!-- Manufacture Modal Start -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="POST" id="manufature-form">
                <div class="modal-header">
                    <h4 class="modal-title">Add Manufacture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="manufacture">Name</label>
                        <input type="text" tabindex="1" name="add_manufacture" class="form-control" id="add_manufacture" autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" tabindex="2" id="btn-manufacture-submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Manufacture Modal End -->

<!-- Brand Modal Start -->
<div id="myModalBrand" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="POST" id="manufature-form">
                <div class="modal-header">
                    <h4 class="modal-title">Add Brand</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="brand">Name</label>
                        <input type="text" tabindex="1" name="add_brand" class="form-control" id="add_brand" autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" tabindex="2" id="btn-brand-submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Brand Modal End -->


<!-- Category Modal Start -->
<div id="myModalCategory" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="POST" id="manufature-form">
                <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                    <button type="button" tabindex="1" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-resukt"></div>
                    <div class="form-group">
                        <label for="category">Name</label>
                        <input type="text" tabindex="2" name="add_category" class="form-control" id="add_category" autofocus>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" tabindex="4" id="btn-category-submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Category Modal End -->

<!-- SubCategory Modal Start -->
<div id="myModalSubCategory" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Sub Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group show-categories-section">
                        
                    </div>
                    <div class="form-group">
                        <label for="subcategoryّ_e">SubCategory Name</label>
                        <input type="text" tabindex="2" name="subcategory_e" class="form-control" id="subcategory_e">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" tabindex="4" id="btn-subcategory-submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- SubCategory Modal End -->
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
    <!-- main JS ============================================ -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>

    <script>
        $(document).ready(function(){
            var num = Math.floor(Math.random() * (1000000000000 - 0) + 0 );
            $('#sku').val(num);

            // function restrictInputOtherThanArabic($field){
            //     // Arabic characters fall in the Unicode range 0600 - 06FF
            //     var arabicCharUnicodeRange = /[\u0600-\u06FF]/;
            //     $field.bind("keypress", function(event)
            //     {
            //         var key = event.which;
            //         if (key==8 || key==0 || key === 32){
            //             return true;
            //         }
            //         var str = String.fromCharCode(key);
            //         if (arabicCharUnicodeRange.test(str) ){
            //             return true;
            //         }
            //         return false;
            //     });
            // }
            // restrictInputOtherThanArabic($('#urdu_name'));

            $.get('<?php echo e(route("item.get-categories")); ?>', function(data){
                $('.show-categories-section').empty().append(data);
            });
            $.get('<?php echo e(route("item.get-subcategories")); ?>', function(data){
                $('#show-subcategories-section').empty().append(data);
            });
            $.get('<?php echo e(route("item.get-manufacture")); ?>', function(data){
                $('#show-manufacture-section').empty().append(data);
            });
            $.get('<?php echo e(route("item.get-brands")); ?>', function(data){
                $('#show-brand-section').empty().append(data);
            });


            $('#btn-manufacture-submit').click(function(e){
                e.preventDefault();
                var manufacture = $('#add_manufacture').val();
                $.ajax({
                    url: "<?php echo e(route('item.add-manufacture')); ?>",
                    type: "POST",   
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        name: manufacture,
                        },
                    success: function(data){
                        $('#show-manufacture-section').empty().append(data);
                        $("#myModal").modal('hide');
                    },
                    error: function(data){
                        alert('Error.....!');
                    }
                });
            });

            $('#btn-brand-submit').click(function(e){
                e.preventDefault();
                var brand = $('#add_brand').val();
                $.ajax({
                    url: "<?php echo e(route('item.add-brand')); ?>",
                    type: "POST",   
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        name: brand,
                        },
                    success: function(data){
                        $('#show-brand-section').empty().append(data);
                        $("#myModalBrand").modal('hide');
                    },
                    error: function(data){
                        alert('Error.....!');
                    }
                });
            });



            $('#btn-category-submit').click(function(e){
                e.preventDefault();
                var category = $('#add_category').val();
                // var category_u = $('#category_u').val();
                $.ajax({
                    url: "<?php echo e(route('item.add-category')); ?>",
                    type: "POST",   
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        name: category,
                        },
                    success: function(data){
                        $('.show-categories-section').empty().append(data);
                        $("#myModalCategory").modal('hide');

                    },
                    error: function(data){
                        alert('Error.....!');
                    }
                });
            });

            $('#btn-subcategory-submit').click(function(e){
                e.preventDefault();
                var category_id = $('#category').val();
                var subcategory_e = $('#subcategory_e').val();
                // var subcategory_u = $('#subcategory_u').val();
                // alert(category_id + subcategory + subcategory_u);
                $.ajax({
                    url: "<?php echo e(route('item.add-subcategory')); ?>",
                    type: "POST",   
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        category: category_id,
                        name: subcategory_e,
                        // u_name: subcategory_u
                        },
                    success: function(data){
                        $('#show-subcategories-section').empty().append(data);
                        $("#myModalSubCategory").modal('hide');

                    },
                    error: function(data){
                        alert('Error.....!');
                    }
                });
            });
        });
    </script>
</body>

</html><?php /**PATH C:\Users\afraa\OneDrive\Desktop\projects\sakhawat-latest\resources\views/item/add-new-item.blade.php ENDPATH**/ ?>