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

    <link rel="stylesheet" href="{{asset('fm.selectator.jquery.css')}}"/>
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/> --}}

    {{-- Select2 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/idautomationhc39m-code-39-barcode" type="text/css"/>
    <style>
        .selectator_selected_item_left{
            display: none;
        }
        .required{
            color: #ff0a05;
        }

        span.serif {
            font-family: 'IDAHC39M Code 39 Barcode', Times, serif;
        }

        span.sansserif {
            font-family: Arial, Helvetica, sans-serif;
        }
        img {
            -webkit-print-color-adjust: exact;
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
            
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area" style="margin-top: 10px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Generate Barcode</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <form method="POST">
                                        @csrf
                                        <div class="row" id="print-sec">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="item">Items</label>
                                                    <select class="form-control" name="item" tabindex="2" id="item" accesskey="">
                                                        <option value="">Select Items</option>
                                                        @foreach ($items as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" tabindex="3" name="name" id="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="sku">SKU</label>
                                                    <input type="text" class="form-control" tabindex="4" name="sku" id="sku">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <input type="text" class="form-control" tabindex="5" name="price" id="price">
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="print">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <button type="submit" class="btn btn-primary btn-submit" tabindex="9">Generate</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <button onclick="printDiv('barcode')" class="btn btn-info">Print</button>
                                    {{-- <button onclick="printD()" class="btn btn-info">Print</button> --}}
                                    {{-- <form action="{{ route('print-generated-barcode') }}"  method="POST">
                                        @csrf
                                        <input type="hidden" name="print_item" id="print_item">
                                        <input type="hidden" name="print_price" id="print_price">
                                        <button type="submit" class="btn btn-info btn-print-barcode">Print</button>
                                    </form> --}}
                                    <div class="row" style="text-align: center;">
                                        <div>
                                            <div class="col-lg-4">
                                            </div>
                                            <div class="col-lg-4" id="barcode" style="padding: 20px;background: #e6e0e0;border-radius: 4px;">
                                                
                                            </div>
                                            <div class="col-lg-4">
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
    @include('layout.footer')
    <!-- Footer End-->

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
    <script src="{{asset('jquery.jqprint-0.3.js')}}"></script>
    <script src="{{asset('fm.selectator.jquery.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{asset('print/jquery.printPage.js')}}"></script>
    {{-- <script src="{{asset('https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js')}}"></script> --}}
    <script>
        let today = new Date().toISOString().substr(0, 10);
        document.querySelector("#current_date").value = today;
        document.querySelector("#current_date").valueAsDate = new Date();
    </script>
    <script>
        $('#customer').select2({
            placeholder: '--Select Vendor--'
        });
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        $(document).ready(function(){
            $('.btn-print').printPage();
            $('.btn-print-barcode').printPage();

            $('#btn-print').click(function(e){
                $("#receivePaymentModal").modal('hide');
                $('#btn-print').printPage();
            });
            $('#item').select2({
                placeholder: '--Select item--'
            });

            $(".btn-submit").click(function (e) {
                e.preventDefault();
                var item = $('#item').val();
                var price = $('#price').val();
                $.ajax({
                    url: "{{route('generate-barcode-action')}}",
                    method: "post",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        item: item,
                        price:price,
                        },
                    success:function(data){
                        $('#barcode').empty().append(data);
                        $('#print_item').val($('#item').val());
                        $('#print_price').val($('#price').val());
                        // window.location.reload();
                    }
                });
            });

            $("#item").change(function(){
                var id = $("#item").val();
                var qty = $("#quantity").val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('sales.get-item-detail') }}",
                    data: {id:id},
                    success: function(data){
                            document.querySelector("#name").value = (data.name);
                            document.querySelector("#sku").value = (data.sku);
                            document.querySelector("#price").value = (data.sale_rate);
                    },
                    error: function(data){
                        alert('Error...!');
                    }
                });
            });
        });
    </script>
</body>

</html>