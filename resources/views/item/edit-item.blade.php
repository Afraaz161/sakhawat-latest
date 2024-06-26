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
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="">
                                            @include('include.messages')
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ route('dashboard') }}">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Edit Item</span>
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
                                        <div class="">
                                            @include('include.messages')
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Edit Item</span>
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
                                        <h2>Edit Item</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <form action="{{ route('item.update-item', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="english_name">Item name</label>
                                                    <input type="text" tabindex="1" class="form-control" value="{{ $item->name }}" name="name" id="english_name" autofocus>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-3">
                                                <div class="form-group" id="show-categories-section">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="add_new_category">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
                                                    <button type="button" id="add_new_category" class="btn btn-primary" data-toggle="modal" data-target="#myModalCategory">Add New</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="image">Image</label>
                                                    <input type="file" tabindex="6" class="form-control" name="image" id="image" value="{{ old('image') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="rate">Item Price</label>
                                                    <input type="text" tabindex="9"  class="form-control" name="rate" id="rate" value="{{ $item->price }}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="unit">Unit</label>
                                                    <select name="unit" id="unit" class="form-control">
                                                        <option value="{{ $item->unit }}">{{ $item->unit }}</option>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start-->
    @include('layout.footer')
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
                        <input type="text" tabindex="2" name="name" class="form-control" id="name" autofocus>
                    </div>
                    {{-- <div class="form-group">
                        <label for="category_u">نام</label>
                        <input type="text" tabindex="3" name="category_u" class="form-control" id="category_u">
                    </div> --}}
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
                    <div class="form-group">
                        <label for="category">Categories</label>
                        <select name="category_id" tabindex="1" id="category_id" class="form-control" autofocus>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subcategoryّ_e">SubCategory Name</label>
                        <input type="text" tabindex="2" name="subcategory_e" class="form-control" id="subcategory_e">
                    </div>
                    <div class="form-group">
                        <label for="subcategory_u">نام</label>
                        <input type="text" tabindex="3" name="subcategory_u" class="form-control" id="subcategory_u">
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
    <!-- main JS ============================================ -->
    <script src="{{asset('js/main.js')}}"></script>

    <script>
        $(document).ready(function(){

            $.get('{{ route("item.get-categories") }}', function(data){
                $('#show-categories-section').empty().append(data);
            });
            $.get('{{ route("item.get-subcategories") }}', function(data){
                $('#show-subcategories-section').empty().append(data);
            });
            
            $('#btn-manufacture-submit').click(function(e){
                e.preventDefault();
                var manufacture = $('#add_manufacture').val();
                $.ajax({
                    url: "{{ route('item.add-manufacture') }}",
                    type: "POST",   
                    data: {
                        "_token": "{{ csrf_token() }}",
                        manufacture: manufacture,
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



            $('#btn-category-submit').click(function(e){
                e.preventDefault();
                var name = $('#name').val();
                $.ajax({
                    url: "{{ route('item.add-category') }}",
                    type: "POST",   
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name: name,
                        },
                    success: function(data){
                        $('#show-categories-section').empty().append(data);
                        $("#myModalCategory").modal('hide');

                    },
                    error: function(data){
                        alert('Category not added...!');
                    }
                });
            });

            $('#btn-subcategory-submit').click(function(e){
                e.preventDefault();
                var category_id = $('#category_id').val();
                var subcategory_e = $('#subcategory_e').val();
                var subcategory_u = $('#subcategory_u').val();
                // alert(category_id + subcategory + subcategory_u);
                $.ajax({
                    url: "{{ route('item.add-subcategory') }}",
                    type: "POST",   
                    data: {
                        "_token": "{{ csrf_token() }}",
                        category_id: category_id,
                        subcategory_e: subcategory_e,
                        subcategory_u: subcategory_u
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

</html>