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
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ route('dashboard') }}">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Purchases</span>
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
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Purchases</span>
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
            <!-- Sales Start-->
            <div class="transition-world-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="transition-world-list shadow-reset">
                                <div class="sparkline7-list">
                                    <div class="sparkline7-hd">
                                        <div class="main-spark7-hd">
                                            <h1><span class="res-ds-n">Purchases</span></h1>
                                            <div class="sparkline7-outline-icon" style="margin-top: -5px;">
                                                <span class="sparkline7-collapse-link">
                                                  <a href="{{ route('reports.purchase.print-all-urdu') }}" class="btn btn-primary btn-printAllPurchaseReportUrdu"><i class="fa fa-print"></i> Urdu</a>
                                                </span>
                                                <span class="sparkline7-collapse-link">
                                                  <a href="{{ route('reports.purchase.print-all-english') }}" class="btn btn-primary btn-printAllPurchaseReportEnglish"><i class="fa fa-print"></i> Eng</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline7-graph">

                                        <!-- Search Purchase -->
                                        <div class="row" style="text-align: left;">
                                          <form action="{{ route('reports.search-purchase') }}" method="POST">
                                            @csrf
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                  <label for="from">Start Date</label>
                                                  <input type="date" class="form-control" name="from" id="from" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                              <div class="form-group">
                                                <label for="to">End Date</label>
                                                <input type="date" class="form-control" name="to" id="to" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-1">
                                              <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                              <button type="submit" class="btn btn-default" style="color:#fff;">Search</button>
                                            </div>
                                          </form>
                                        </div>
                                        <!-- Search Purchase End-->

                                        {{-- <div class="row" style="text-align: left;">
                                          <div class="col-lg-12">
                                            <input type="radio" id="print-urdu" name="print" value="urdu" checked>
                                            <label for="print-urdu">Print Urdu</label>
                                            <input type="radio" id="print-english" name="print" value="english">
                                            <label for="print-english">Print English</label>
                                          </div>
                                        </div> --}}

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                                        <thead>
                                                            <tr>
                                                                <th data-field="sr">#</th>
                                                                <th data-field="date">Date</th>
                                                                <th data-field="vendor">Vendor</th>
                                                                <th data-field="total">Total</th>
                                                                <th data-field="item">Payable</th>
                                                                <th data-field="price">Payment</th>
                                                                <th data-field="balance">Balance</th>
                                                                <th data-field="payment_type">Payment Type</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($purchases as $key=>$purchase)
                                                            @php
                                                                $index = $key + 1;
                                                            @endphp
                                                                <tr>
                                                                    <td>{{ $index }}</td>
                                                                    <td>{{ $purchase->current_date }}</td>
                                                                    <td>{{ $purchase->customer['name'] }}</td>
                                                                    <td>{{ $purchase->total_bill }}</td>
                                                                    <td>{{ $purchase->payable }}</td>
                                                                    <td>{{ $purchase->payment }}</td>
                                                                    {{-- <td> --}}
                                                                      @if ($purchase->payable - $purchase->payment > 0)
                                                                          <td><span style="background: red !important;color:#fff;padding: 0px 10px;">{{ $purchase->payable - $purchase->payment }}</span></td>
                                                                      @else
                                                                          <td><span style="background: green !important;color:#fff;padding: 0px 10px;">{{ $purchase->payable - $purchase->payment }}</span></td>
                                                                      @endif
                                                                    {{-- </td> --}}
                                                                    <td>{{ $purchase->payment_method }}</td>
                                                                    <td>
                                                                      <a href="{{ route('purchase.purchase-detail', ['id'=>$purchase->id]) }}" class="btn btn-primary" style="color: #fff;"><i class="fa fa-eye"></i></a>
                                                                      <a href="{{ route('purchase-list-print-urdu', ['id' => $purchase->id]) }}" class="btn btn-primary btn-print" style="color: #fff;"><i class="fa fa-print"></i> Urdu</a>
                                                                      <a href="{{ route('purchase-list-print-english', ['id' => $purchase->id]) }}" class="btn btn-primary btn-print" style="color: #fff;"><i class="fa fa-print"></i> Eng</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
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
    <script src="{{asset('js/jquery.printPage.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
      $(document).ready(function(){
        $('.btn-print').printPage();
        $('.btn-printAllPurchaseReportUrdu').printPage();
        $('.btn-printAllPurchaseReportEnglish').printPage();
      });
    </script>
</body>

</html>