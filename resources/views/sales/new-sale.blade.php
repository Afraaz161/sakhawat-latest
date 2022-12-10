<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>POS (Point of Sale Software) - A brand of WebEasy Pvt Limited.</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <link rel="stylesheet" href="{{asset('fm.selectator.jquery.css')}}"/>

    {{-- Select2 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .selectator_selected_item_left{
            display: none;
        }
        .select2-container .select2-selection--single{
            height: 34px;
        }
    </style>
    <!-- modernizr JS
        ============================================ -->
        <script src="{{asset('js/vendor/jquery-1.11.3.min.js')}}"></script>
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="materialdesign">
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            @include('layout.left-sidebar')
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            @include('layout.header-top-area')
            <!-- Header top area end-->
            <!-- Mobile Menu start -->
            @include('layout.mobile-menu')
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area" style="margin-top: 30px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>New Sale</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="" style="margin-bottom: 15px;">
                                        @include('include.messages')
                                    </div>
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-lg-1" style="margin-top: 4px;">
                                                <label for="invoice">Invoice#<label>
                                                <input type="number" value="{{$invoice}}" class="form-control" name="invoice" id="invoice" disabled>
                                            </div>
                                            <div class="col-lg-2" style="margin-top: 4px;">
                                                <label for="gd">GD#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
                                                <input type="text" class="form-control" name="gd" id="gd">
                                            </div>
                                            <div class="col-lg-1">
                                                <label for="check_sales_tax">Enable Tax</label>
                                                <input type="checkbox" class="form-control" name="check_sales_tax" id="check_sales_tax" checked>
                                            </div>
                                            <div class="col-lg-1">
                                                <label for="sales_tax">Sales Tax (%)</label>
                                                <input type="number" value="17" class="form-control" name="sales_tax" id="sales_tax">
                                            </div>
                                            <div class="col-lg-4" id="show-vendors-section">

                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="add_new_vendor">Add New&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <button type="button" id="add_new_vendor" class="btn btn-primary" data-toggle="modal" data-target="#myModalVendor"><i class="fa fa-plus"></i> Add new</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="current_date">Date</label>
                                                    <input type="date" class="form-control" name="current_date" id="current_date">
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="payment_method">Payment</label>
                                                    <select name="payment_method" id="payment_method" class="form-control">
                                                        <option value="cash">Cash</option>
                                                        <option value="credit">Credit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="sale_type">Type</label>
                                                    <select name="type" id="type" class="form-control">
                                                        <option value="sale">Sale</option>
                                                        <option value="return">Return</option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="Add-new-product">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <a href="#" type="button" id="btn-add-new-product" data-toggle="modal" data-target="#myModalItem" class="btn btn-primary"><i class="fa fa-plus"> Add Product</i></a>
                                                    {{-- <button style="margin-top: 5px;" tabindex="4" id="btn-add-in-list" class="btn btn-primary">Add Item</button> --}}
                                                </div>
                                            </div>
                                            <div class="col-lg-5" id="show-items-section">
                                                
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="quantity">Quantity</label>
                                                    <input type="text" class="form-control" tabindex="2"  value="1" name="quantity" id="quantity">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <input type="number" class="form-control" value="0" name="price" id="price">
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="item-discount">Discount</label>
                                                    <input type="text" class="form-control" value="0" name="item_discount" id="item-discount">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="new-price">New Price</label>
                                                    <input type="number" class="form-control" value="0" name="new_price" id="new-price">
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="opening_stock">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <a href="#" type="button" tabindex="3" id="btn-add-in-list" class="btn btn-primary">Add Item</a>
                                                    {{-- <button style="margin-top: 5px;" tabindex="4" id="btn-add-in-list" class="btn btn-primary">Add Item</button> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                <table id="table1" class="focusguard-2" tabindex="4" data-toggle="table" data-pagination="false" data-search="false" data-show-columns="false" data-resizable="false" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="false">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="state"></th>
                                                            <th data-field="item name">Item Name</th>
                                                            <th data-field="quantity">Quantity</th>
                                                            <th data-field="price">Price</th>
                                                            {{-- <th data-field="discount">Discount</th> --}}
                                                            {{-- <th data-field="new price">New Price</th> --}}
                                                            <th data-field="total">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="session-items">
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="">
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="row" style="margin-top: 20px;">
                                                    <div class="col-lg-12">
                                                        <input type="radio" id="perc-discount" name="discount_type" value="perc">
                                                        <label for="perc-discount">% Discount</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                        <input type="number" value="0" class="form-control" name="discount" id="discount">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label for="charity">Charity</label>
                                                        <input type="number" value="1" class="form-control" name="charity" id="charity">
                                                    </div>
                                                </div>
                                                
                                                <div class="row" style="margin-top: 20px;">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label for="price">Total Bill</label>
                                                            <input type="number" class="form-control" value="0" name="total_bill" id="total_bill" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label for="sales_tax_price">Sales Tax Price</label>
                                                        <input type="number" value="0" class="form-control" name="sales_tax_price" id="sales_tax_price">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label for="previous_due">Previous Due</label>
                                                            <input type="number" class="form-control" value="0" name="previous_due" id="previous_due" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label for="receivable">Receivable</label>
                                                            <input type="number" class="form-control" value="0" name="receivable" id="receivable" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label for="received">Cash</label>
                                                            <input type="number" class="form-control" value="0" name="received" id="received">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
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
                                        <button type="submit" class="btn btn-primary btn-submit">Save</button>
                                        <button type="submit" class="btn btn-primary btn-reset">Reset</button>
                                        <a href="{{ route('sale-print-english') }}" class="btn btn-info btn-print" id="btn-print-sale">Print</a>

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
    @include('layout.footer')
    <!-- Footer End-->

<!-- Customer Modal Start -->
<div id="myModalVendor" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Customer</h4>
                    <button type="button" class="close" data-dismiss="modal" style="margin-top:-25px;">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group">
                              <label for="name">Name <span class="required">*</span></label>
                              <input type="text" name="name" class="form-control" id="account-name" autofocus required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                              <label for="address">Address <span class="required">*</span></label>
                              <input type="text" name="address" class="form-control" id="account-address" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label for="phone">Phone <span class="required">*</span></label>
                              <input type="text" name="phone" class="form-control" id="account-phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email <span class="required"></span></label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                        </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="type">Type</label>
                          <select name="type" id="account-type" class="form-control" required>
                            <option value="Customer">Customer</option>
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



<!-- Item Modal Start -->
<div id="myModalItem" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Item</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name">Item name</label>
                                <input type="text" tabindex="1" class="form-control" name="name" id="name" autofocus required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group show-categories-section" id="show-categories-section">
                                <label for="category">Category</label>
                                <select name="category" tabindex="3" id="category" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" tabindex="6" class="form-control" name="image" id="image" value="{{ old('image') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="rate">Company Rate</label>
                                <input type="text" tabindex="9" class="form-control" name="rate" id="rate" value="{{ old('rate') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="text" tabindex="9" class="form-control" name="stock" id="stock" value="{{ old('stock') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="reorder_value">Re-Order</label>
                                <input type="text" tabindex="7" class="form-control" name="reorder_value" id="reorder_value" value="{{ old('reorder_value') }}">
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
                                    <option value="cotton">Cotton</option>
                                    <option value="dozen">Dozen</option>
                                    <option value="Liter">Liter</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn-item-submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Item Modal End -->

{{-- Save and print model start --}}
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
{{-- Save and print model end --}}

{{-- Hold Retrieve model start --}}
<div id="holdRetrieveModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hold Sales</h4>
        </div>
        <div class="modal-body" id="show-hold-retrieve-body">

        </div>
      </div>
    </div>
</div>
{{-- Hold Retrieve model end --}}


{{-- Save and print model start --}}
<div id="editCartModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Cart</h4>
        </div>
        <div class="modal-body" id="edit-cart-body">

        </div>
      </div>
    </div>
</div>
{{-- Save and print model end --}}

    <!-- jquery
		============================================ -->
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
    <script src="{{asset('fm.selectator.jquery.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{asset('print/jquery.printPage.js')}}"></script>

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
        
        $(document).ready(function(){
            var num = Math.floor(Math.random() * (1000000000000 - 0) + 0 );
            $('#sku').val(num);
            $( "#sales_tax" ).prop( "disabled", false );
            $( "#sales_tax_price" ).prop( "disabled", false );

            $('.btn-print').printPage();
            $('.focusguard-2').on('focus', function() {
                $('#sku').focus();
            });

            $('#check_sales_tax').change(function(){
                if($(this).is(":checked")) {
                    $( "#sales_tax" ).prop( "disabled", false );
                    $( "#sales_tax_price" ).prop( "disabled", false );

                    var total = $('#total').attr("data-id");
                    var tax = $('#sales_tax').val();
                    var tax_amount = (tax / 100) * total;
                    document.querySelector("#receivable").value = (parseFloat($('#previous_due').val()) + parseFloat(total) + parseFloat(tax_amount)).toFixed(2);
                }
                else{
                    $( "#sales_tax" ).prop( "disabled", true );
                    $( "#sales_tax_price" ).prop( "disabled", true );
                    var total = $('#total').attr("data-id");
                    document.querySelector("#receivable").value = (parseFloat($('#previous_due').val()) + parseFloat(total)).toFixed(2);
                }
            });
            

            $(document).on('change keyup blur', '#item-discount', function(){
                var disc = $('#item-discount').val();
                var price = $('#price').val();
                var qty = $('#quantity').val();
                var total = price * qty;
                var mult = disc * qty;
                var discount = (total - mult);
                $('#new-price').val(price - disc);
            });

            $(document).on('change keyup blur', '#sales_tax', function(){
                var tax = $('#sales_tax').val();
                var charity = $('#charity').val();
                var total = $('#total_bill').val();
                var tax_amount = (tax / 100) * total;
                $('#sales_tax_price').val(tax_amount.toFixed(2));
                $('#receivable').val((parseFloat(total)+ parseFloat(tax_amount)).toFixed(2));
            });

            $(document).scannerDetection({
                avgTimeByChar: 40,
                onComplete: function(barcode, qty){ 
                    $.ajax({
                        type: "GET",
                        url: "{{ route('sales.get-sku-product') }}",
                        data: {sku:barcode},
                        success: function(data){
                            $('#name').val(data.name);
                            $('#price').val(data.sale_rate);
                        },
                        error: function(data){
                            alert('Unable to Get SKU Product...!');
                        }
                    });
                },
            });

                    
            $('.btn-print').on('click', function(e){
                // e.preventDefault();
                var radioValue = $("input[name='print']:checked").val();
                if(radioValue == 'english'){
                    $("#btn-print-sale").attr("href", "{{ route('sale-print-english') }}");
                }
                if(radioValue == 'urdu'){
                    $("#btn-print-sale").attr("href", "{{ route('sale-print-urdu') }}");
                }
            });
            $.get('{{ route("sale.get-vendors") }}', function(data){
                $('#show-vendors-section').empty().append(data);
            });

            $.get('{{ route("sale.get-items") }}', function(data){
                $('#show-items-section').empty().append(data);
            });

            var total = $('#total').attr("data-id");
            $.get('{{ route("sale.get-session-items") }}', function(data){
                $('#session-items').empty().append(data);
                var total = $('#total').attr("data-id");

                var tax = $('#sales_tax').val();
                var tax_amount = (tax / 100) * total;
                $('#sales_tax_price').val(Math.floor(tax_amount));
            
                document.querySelector("#total_bill").value = (total);
                $('#receivable').val(Math.floor(total)+ Math.floor(tax_amount));
            });

            $('#item').select2({
                placeholder: '--Select item--'
            });
            $('#wholesaler').select2({
                placeholder: '--Select wholesaler--'
            });

            $('#btn-add-in-list').click(function(e){
                e.preventDefault();
                var id = $("#item").val();
                var price = $("#price").val();
                var qty = $("#quantity").val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('sales.add-item-to-session') }}",
                    data: {
                            id:id,
                            price:price,
                            qty:qty,
                        },
                    success: function(data){
                        $("#item").select2('val', ' ');
                        $("#quantity").val("1");
                        $("#price").val("0");
                        $('#session-items').empty().append(data);
                        var total = $('#total').attr("data-id");
                        document.querySelector("#total_bill").value = (total);

                        var check_sales_tax = $("input[name='check_sales_tax']:checked").val();
                        if(check_sales_tax == 'on'){
                            var tax = $('#sales_tax').val();
                            var tax_amount = (tax / 100) * total;
                            $('#sales_tax_price').val(tax_amount.toFixed(2));
                            document.querySelector("#receivable").value = parseFloat($('#previous_due').val()) + parseFloat(total) + Math.floor(tax_amount);
                        }
                        else{
                            document.querySelector("#receivable").value = parseFloat($('#previous_due').val()) + parseFloat(total);
                        }
                    },
                    error: function(data){
                        alert('Unable to Add Item in List..');
                    }
                }); 
            });

            // Hold Function
            $(".btn-hold").on('click', function(e){
                e.preventDefault();
                var customer = $('#customer').val();
                var total_bill = $("#total_bill").val();
                var previous_due = $('#previous_due').val();
                var receivable = $('#receivable').val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('sales.add-item-to-hold-session') }}",
                    data: {
                            customer:customer,
                            total_bill:total_bill,
                            previous_due:previous_due,
                            receivable:receivable,
                        },
                    success: function(data){
                        $("#item").select2('val', ' ');
                        $("#quantity").val("1");
                        $("#price").val("0");
                        $('#session-items').empty().append(data);
                        $("#total_bill").val("0");
                        $("#receivable").val("0");
                        $("#previous_due").val("0");
                    },
                    error: function(data){
                        alert('Unable to Hold..');
                    }
                });
            });

            $(document).on('change keyup blur', '#received', function(){
                var receivable = $('#receivable').val();
                var received = $('#received').val();
                var diff = parseInt(received) - parseInt(receivable);
                $('#remaining').val(diff);
            }); 

            $(document).on('change keyup blur', '#discount', function(){
                var type = $("input[name='discount_type']:checked").val();
                if(type == 'perc'){
                    var tax = $('#sales_tax').val();
                    var disc = $('#discount').val();
                    var main = $('#total_bill').val();
                    var tax_amount = (tax / 100) * main;
                    $('#sales_tax_price').val((tax_amount).toFixed(2));
                    var dec = (disc / 100); //its convert 10 into 0.10
                    var mult = (parseFloat(main) + parseFloat(tax_amount)) * dec; // gives the value for subtract from main value
                    var discont = (parseFloat(main) + parseFloat(tax_amount) - mult);
                    var receivable = parseFloat(discont);
                    $('#receivable').val((receivable).toFixed(2));
                }
            });


            $(".btn-submit").click(function (e) {
                e.preventDefault();
                var invoice = $('#invoice').val();
                var gd = $('#gd').val();
                var sales_tax = $('#sales_tax').val();
                var sales_tax_price = $('#sales_tax_price').val();
                var charity = $('#charity').val();
                var customer = $('#customer').val();
                var current_date = $('#current_date').val();
                var payment_method = 'Cash';
                var type = 'Sale Invoice';
                var total_bill = $('#total_bill').val();
                var previous_due = $('#previous_due').val();
                var receivable = $('#receivable').val();
                var received = $('#received').val();
                var discount_type = $("input[name='discount_type']:checked").val();
                var discount = $('#discount').val();
                var remaining = $('#remaining').val();

                if(discount_type != undefined){
                    if(discount == ''){
                        alert('Fill Discount Field, Or reset.');
                        return;
                    }
                }
                if(received == ''){
                    alert('Received amount cannot be EMPTY');
                    return;
                }

                $.ajax({
                    url: "{{route('sales.new-sale-action')}}",
                    method: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        invoice: invoice,
                        gd: gd,
                        sales_tax: sales_tax,
                        sales_tax_price: sales_tax_price,
                        charity: charity,
                        current_date: current_date,
                        payment_method: payment_method,
                        type: type,
                        customer:customer,
                        total_bill: total_bill,
                        previous_due: previous_due,
                        receivable: receivable,
                        received: received,
                        discount_type: discount_type,
                        discount: discount,
                        remaining: remaining,
                        },
                    success:function(data){
                        alert('New invoice Saved.');
                        window.location.reload();
                    }
                });
            });

            $("#session-items").on('click', '.remove-from-sale', function (e) {
                e.preventDefault();
                var ele = $(this);
                if(confirm("Are you sure")) {
                    $.ajax({
                        url: '{{ route("sales.delete-item-to-session") }}',
                        method: "DELETE",
                        data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                        success: function (response) {
                            $('#session-items').empty().append(response);
                            var total = $('#total').attr("data-id");
                            var previous_due = $('#previous_due')
                            document.querySelector("#total_bill").value = (total);
                            document.querySelector("#receivable").value = (total);
                            $('#sales_tax_price').val(0);
                        }
                    });
                }
            });

            $("#session-items").on('change keyup blur', '.cart-quantity', function (e) {
                var id = $(this).attr('data-id');
                var quantity = $(this).val();
                $.ajax({
                    url: '{{ route("sales.edit-item-to-session-quantity") }}',
                    method: "GET",
                    data: {_token: '{{ csrf_token() }}', id: id, quantity: quantity},
                    success: function (response) {
                        $('#session-items').empty().append(response);
                        var total = $('#total').attr("data-id");

                        var check_sales_tax = $("input[name='check_sales_tax']:checked").val();
                        if(check_sales_tax == 'on'){
                            var sales_tax_price = $('#sales_tax_price').val();
                            var previous_due = $('#previous_due').val();
                            document.querySelector("#total_bill").value = (total);
                            document.querySelector("#receivable").value = (Math.floor(total) + Math.floor(sales_tax_price) + Math.floor(previous_due));
                            var tax = $('#sales_tax').val();
                            var tax_amount = (tax / 100) * total;
                            document.querySelector("#sales_tax_price").value = (Math.floor(tax_amount));
                        }
                        else{
                            var previous_due = $('#previous_due').val();
                            document.querySelector("#total_bill").value = (total);
                            document.querySelector("#receivable").value = (Math.floor(total) + Math.floor(previous_due));
                            var tax = $('#sales_tax').val();
                            var tax_amount = (tax / 100) * total;
                            document.querySelector("#sales_tax_price").value = (Math.floor(tax_amount));
                        }
                    }
                });
            });

            $("#session-items").on('change keyup blur', '.cart-price', function (e) {
                var id = $(this).attr('data-id');
                var price = $(this).val();
                $.ajax({
                    url: '{{ route("sales.edit-item-to-session-price") }}',
                    method: "GET",
                    data: {_token: '{{ csrf_token() }}', id: id, price: price},
                    success: function (response) {
                        $('#session-items').empty().append(response);
                        var total = $('#total').attr("data-id");

                        var check_sales_tax = $("input[name='check_sales_tax']:checked").val();
                        var sales_tax_price = $('#sales_tax_price').val();
                        var previous_due = $('#previous_due').val();
                        document.querySelector("#total_bill").value = (total);
                        if(check_sales_tax == 'on'){
                            document.querySelector("#receivable").value = (parseFloat(total) + parseFloat(sales_tax_price) + parseFloat(previous_due)).toFixed(2);
                        }
                        else{
                            document.querySelector("#receivable").value = (parseFloat(total) + parseFloat(previous_due)).toFixed(2);
                        }
                        var tax = $('#sales_tax').val();
                        var tax_amount = (tax / 100) * total;
                        document.querySelector("#sales_tax_price").value = (parseFloat(tax_amount)).toFixed(2);
                    }
                });
            });



            $(".btn-reset").click(function (e) {
                e.preventDefault();
                var ele = $(this);
                if(confirm("Are you sure")) {
                    $.ajax({
                        url: '{{ route("sales.reset-session") }}',
                        method: "DELETE",
                        data: {_token: '{{ csrf_token() }}'},
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            });



            $("#show-items-section").on('change','#item', function(){
                var id = $("#item").val();
                var qty = $("#quantity").val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('sales.get-item-detail') }}",
                    data: {id:id},
                    success: function(data){
                            document.querySelector("#price").value = (data.price);
                            // document.querySelector("#new-price").value = (data.price);
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
                    url: "{{ route('sales.get-customer-account-detail') }}",
                    data: {id:id},
                    success: function(data){
                        if(data == ""){
                            document.querySelector("#previous_due").value = 0;
                            document.querySelector("#receivable").value = parseInt($('#total_bill').val());
                        }
                        else if(data.balance == null){
                            document.querySelector("#previous_due").value = 0;
                            document.querySelector("#receivable").value = parseInt(data.balance) + parseInt($('#receivable').val());
                        }
                        else{
                            document.querySelector("#previous_due").value = data.balance;
                            document.querySelector("#receivable").value = parseInt(data.balance) + parseInt($('#receivable').val());
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
                var address = $('#account-address').val();
                var phone = $('#account-phone').val();
                var type = $('#account-type').val();
                $.ajax({
                    url: "{{ route('sales.add-customer') }}",
                    type: "POST",   
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name: name,
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

            $('#btn-item-submit').click(function(e){
                e.preventDefault();
                var name = $('#name').val();
                // var sku = $('#sku').val();
                var category = $('#category').val();
                var image = $('#image').val();
                var rate = $('#rate').val();
                var stock = $('#stock').val();
                var reorder_value = $('#reorder_value').val();
                var unit = $('#unit').val();
                $.ajax({
                    url: "{{ route('sales.add-item') }}",
                    type: "POST",   
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name: name,
                        // sku: sku,
                        category: category,
                        image: image,
                        rate: rate,
                        stock: stock, 
                        reorder_value: reorder_value,
                        unit: unit,
                        },
                    success: function(data){
                        $("#myModalItem").modal('hide');
                        $('#show-items-section').empty().append(data);
                    },
                    error: function(data){
                        alert('Unable to Add New Item!');
                    }
                });
            });


        });
    </script>
</body>

</html>