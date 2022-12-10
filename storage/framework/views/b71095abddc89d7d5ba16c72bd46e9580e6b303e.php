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
        .required{
            color: #ff0a05;
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
    
            <!-- Mobile Menu start -->
            <?php echo $__env->make('layout.mobile-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Mobile Menu end -->
            
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area" style="margin-top: 10px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Purchase Form</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <form method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-lg-4" id="show-vendors-section">
                                                
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="add_new_vendor">Add New&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                                    <button type="button" id="add_new_vendor" class="btn btn-primary" data-toggle="modal" data-target="#myModalVendor"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="current_date">Date</label>
                                                    <input type="date" class="form-control" name="current_date" id="current_date">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="payment_method">Payment</label>
                                                    <select name="payment_method" id="payment_method" class="form-control">
                                                        <option value="cash">Cash</option>
                                                        <option value="credit">Credit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="type">Type</label>
                                                    <select name="type" id="type" class="form-control">
                                                        <option value="purchase">Purchase</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label for="item">Items</label>
                                                    <select class="form-control" name="item" id="item" autofocus>
                                                        <option value="">Select Items</option>
                                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?> &nbsp; &nbsp;  #<?php echo e($item->sku); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="quantity">Quantity/KG</label>
                                                    <input type="number" class="form-control" value="1" tabindex="2" name="quantity" id="quantity">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="purchase_rate">Purchase Rate</label>
                                                    <input type="number" class="form-control" value="0" tabindex="3" name="purchase_rate" id="purchase_rate">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="sale_rate">Sale Rate</label>
                                                    <input type="number" class="form-control" value="0" tabindex="4" name="sale_rate" id="sale_rate">
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="opening_stock">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                                    <button tabindex="5" id="btn-add-in-list" class="btn btn-primary">Add Item</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;" id="focusguard-2" tabindex="6">
                                            <div class="col-lg-12">
                                                <table id="table1" data-toggle="table" data-pagination="false" data-search="false" data-show-columns="false" data-resizable="false" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="false">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="state"></th>
                                                            <th data-field="item">Item</th>
                                                            <th data-field="price" >Price</th>
                                                            <th data-field="quantity" >Quantity</th>
                                                            <th data-field="total" >Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="session-items">
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="">
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="row" style="margin-top: 20px;">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="total_bill">Total Bill</label>
                                                            <input type="number" class="form-control" name="total_bill" id="total_bill" readonly>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="payment">Payment</label>
                                                            <input type="text" class="form-control payment" tabindex="8" name="payment" id="payment">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="remaining">Balance</label>
                                                            <input type="number" class="form-control" value="0" name="remaining" id="remaining">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="radio" id="print-english" name="print" value="english" checked>
                                                        <label for="print-english">Print</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-submit" tabindex="9">Submit</button>
                                        <button type="submit" class="btn btn-primary btn-reset" tabindex="10">Reset</button>
                                        <a href="" class="btn btn-info btn-print" id="btn-print-sale">Print</a>
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

<!-- Customer Modal Start -->
<div id="myModalVendor" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Vendor</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group">
                              <label for="name">Name <span class="required">*</span></label>
                              <input type="text" name="name" class="form-control" id="account-name" autofocus required>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                              <label for="address">Address <span class="required">*</span></label>
                              <input type="text" name="address" class="form-control" id="account-address" required>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="phone">Phone <span class="required">*</span></label>
                          <input type="text" name="phone" class="form-control" id="account-phone" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="type">Type <span class="required">*</span></label>
                          <select name="type" id="account-type" class="form-control" required>
                            <option value="Vendor">Vendor</option>
                          </select>
                        </div>
                      </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scannerdetection/1.2.0/jquery.scannerdetection.min.js" integrity="sha512-ZmglXekGlaYU2nhamWrS8oGQDJQ1UFpLvZxNGHwLfT0H17gXEqEk6oQBgAB75bKYnHVsKqLR3peLVqMDVJWQyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scannerdetection/1.2.0/jquery.scannerdetection.compatibility.js" integrity="sha512-YQRu5Y2eFL0L4LrZk2rGxCH5nD8G9ppSaQIqg5mmB/SLd8c0qTJ/cEua3ETXzXzWITvt4x1tiTXFC4M5bJBA4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scannerdetection/1.2.0/jquery.scannerdetection.compatibility.min.js" integrity="sha512-lDbkDq2ye0YC9a2tSXVSWDI+qH9BSyBuNCP0WSreQFvaIBOhJTz5GgkA0698hwltHNf0WE5/5Ryxr/tD+IBnPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scannerdetection/1.2.0/jquery.scannerdetection.js" integrity="sha512-ZkmasRE78xqpUOUil2ho4QHUWcRCUys1HoKK86VSYMb7oYX2VTNKT9jvsXDxVkOoPdso42isrmOOMHu+gGLQQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let today = new Date().toISOString().substr(0, 10);
        document.querySelector("#current_date").value = today;
        document.querySelector("#current_date").valueAsDate = new Date();
    </script>
    <script>
        $('#customer').select2({
            placeholder: '--Select Vendor--'
        });
        $(document).ready(function(){

            $(document).on('change keyup blur', '#payment', function(){
                var receivable = $('#total_bill').val();
                var received = $('#payment').val();
                var diff = parseInt(received) - parseInt(receivable);
                $('#remaining').val(diff);
            });

            $('.btn-print').printPage();
            
            $('#focusguard-2').on('focus', function() {
                $('#sku').focus();
            });
            var total = $('#total').attr("data-id");
            $.get('<?php echo e(route("purchase.get-session-items")); ?>', function(data){
                $('#session-items').empty().append(data);
                var total = $('#total').attr("data-id");
                document.querySelector("#total_bill").value = (total);
                document.querySelector("#payable").value = (total);
                document.querySelector("#payable").value = parseInt(total) + parseInt($('#vendor_previous_due').val());
            });
            $.get('<?php echo e(route("purchase.get-vendors")); ?>', function(data){
                $('#show-vendors-section').empty().append(data);
            });

            $('#btn-print').click(function(e){
                $("#receivePaymentModal").modal('hide');
                $('#btn-print').printPage();
            });
            $('#item').select2({
                placeholder: '--Select item--'
            });

            $(document).scannerDetection({
                    avgTimeByChar: 40,
                    onComplete: function(barcode, qty){ 
                            $.ajax({
                                type: "GET",
                                url: "<?php echo e(route('purchase.get-sku-product')); ?>",
                                data: {sku:barcode},
                                success: function(data){
                                    document.querySelector("#name").value = (data.name);
                                    document.querySelector("#purchase_rate").value = (data.price);
                                    document.querySelector("#sale_rate").value = (data.sale_rate);
                                },
                                error: function(data){
                                    alert('Unable to Get SKU Product...!');
                                }
                            });
                    },
                    onError: function(string){
                        // alert('Error ' + string);
                    }
            });

            $('#btn-add-in-list').click(function(e){
                e.preventDefault();
                var id = $("#item").val();
                var qty = $("#quantity").val();
                var purchase_rate = $("#purchase_rate").val();
                var sale_rate = $("#sale_rate").val();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('purchase.add-item-to-session')); ?>",
                    data: {
                            id:id,
                            qty:qty,
                            purchase_rate:purchase_rate,
                            sale_rate:sale_rate
                        },
                    success: function(data){
                        $("#item_name").select2('val', ' ');
                        $("#quantity").val("1.0");
                        $('#session-items').empty().append(data);
                        var total = $('#total').attr("data-id");
                        document.querySelector("#total_bill").value = (total);
                        document.querySelector("#payable").value = parseInt(total) + parseInt($('#vendor_previous_due').val());
                        $("#sku").val('');
                        $("#sku").focus();
                    },
                    error: function(data){
                        alert('Unable to Add Item in List..');
                    }
                }); 
            });

            $(".btn-submit").click(function (e) {
                e.preventDefault();
                var customer_id = $('#customer').val();
                if(customer_id == '--Select vendor--'){
                    alert('Choose Vendor First');
                    return;
                }
                var current_date = $('#current_date').val();
                var payment_method = $('#payment_method').val();
                var type = $('#type').val();
                var total_bill = $('#total_bill').val();
                var vendor_previous_due = $('#vendor_previous_due').val();
                var payable = $('#payable').val();
                var payment = $('.payment').val();
                if(payment == ''){
                    alert('Payment cannot be NULL');
                    return;
                }
                $.ajax({
                    url: "<?php echo e(route('purchase.purchase-action')); ?>",
                    method: "post",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        customer_id: customer_id,
                        current_date:current_date,
                        payment_method:payment_method,
                        type:type,
                        total_bill: total_bill,
                        vendor_previous_due:vendor_previous_due,
                        payable:payable,
                        payment:payment,
                        },
                    success:function(data){
                        window.location.reload();
                    }
                });
            });

            $('.btn-print').on('click', function(e){
                e.preventDefault();
                var radioValue = $("input[name='print']:checked").val();
                if(radioValue == 'english'){
                    $("#btn-print-sale").attr("href", "<?php echo e(route('purchase-print-english')); ?>");
                }
                if(radioValue == 'urdu'){
                    $("#btn-print-sale").attr("href", "<?php echo e(route('purchase-print-urdu')); ?>");
                }
            });

            $("#session-items").on('click', '.remove-from-purchase', function (e) {
                e.preventDefault();
                var ele = $(this);
                if(confirm("Are you sure")) {
                    $.ajax({
                        url: "<?php echo e(route('purchase.delete-item-to-session')); ?>",
                        method: "DELETE",
                        data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id")},
                        success: function(response){
                            $('#session-items').empty().append(response);
                            var total = $('#total').attr("data-id");
                            document.querySelector("#total_bill").value = (total);
                            document.querySelector("#payable").value = parseInt(total) + parseInt($('#vendor_previous_due').val());
                        }
                    });
                }
            });

            $(".btn-reset").click(function (e) {
                e.preventDefault();
                var ele = $(this);
                if(confirm("Are you sure to reset page!")) {
                    $.ajax({
                        url: "<?php echo e(route('purchase.reset-session')); ?>",
                        method: "DELETE",
                        data: {_token: '<?php echo e(csrf_token()); ?>'},
                        success: function (response) {
                            // window.location.reload();
                            $('#session-items').empty().append(response);
                        }
                    });
                }
            });

            $("#item").change(function(){
                var id = $("#item").val();
                var qty = $("#quantity").val();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('sales.get-item-detail')); ?>",
                    data: {id:id},
                    success: function(data){
                            // document.querySelector("#sku").value = (data.sku);
                            // document.querySelector("#weight").value = (data.description);
                            document.querySelector("#purchase_rate").value = (data.price);
                            document.querySelector("#sale_rate").value = (data.sale_rate);
                    },
                    error: function(data){
                        alert('Error...!');
                    }
                });
            });

            $("#show-vendors-section").on('change','#customer', function(){
                var id = $("#customer").val();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('purchase.get-customer-account-detail')); ?>",
                    data: {id:id},
                    success: function(data){
                        if(data.balance == null){
                            document.querySelector("#vendor_previous_due").value = 0;
                        }
                        else{
                            document.querySelector("#vendor_previous_due").value = data.balance;
                        }
                        
                    },
                    error: function(data){
                        alert('Error...!');
                    }
                });
            });

            $('#btn-customer-submit').click(function(e){
                e.preventDefault();
                var name = $('#account-name').val();
                // var u_name = $('#account-u_name').val();
                var address = $('#account-address').val();
                var phone = $('#account-phone').val();
                var type = $('#account-type').val();
                $.ajax({
                    url: "<?php echo e(route('purchase.add-vendor')); ?>",
                    type: "POST",   
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        name: name,
                        // u_name: u_name,
                        address: address,
                        phone: phone,
                        type: type,
                        },
                    success: function(data){
                        $("#myModalVendor").modal('hide');
                        $('#show-vendors-section').empty().append(data);
                    },
                    error: function(data){
                        alert('Error.....!');
                    }
                });
            });


        });
    </script>
</body>

</html><?php /**PATH C:\Users\afraa\OneDrive\Desktop\projects\sakhawat-latest\resources\views/purchase/purchase-form.blade.php ENDPATH**/ ?>