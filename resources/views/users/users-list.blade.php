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

    {{-- Select2 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .selectator_selected_item_left{
            display: none;
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
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            @include('include.messages')
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ route('dashboard') }}">Home</a> <span class="bread-slash">/</span>
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
                                            </form> --}}
                                            @include('include.messages')
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
                        <div class="col-lg-4">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Create New User</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <form action="{{ route('users.new-user-action') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                              <div class="form-group">
                                                  <label for="name">Name</label>
                                                  <input type="text" name="name" class="form-control" placeholder="Enter Your Name" id="name" autofocus>
                                              </div>
                                            </div>
                                            <div class="col-lg-6">
                                              <div class="form-group">
                                                  <label for="email">Email</label>
                                                  <input type="email" name="email"  placeholder="Enter Your Email"class="form-control" id="email">
                                              </div>
                                            </div>
                                            <div class="col-lg-6">
                                              <div class="form-group">
                                                  <label for="password">Password</label>
                                                  <input type="password" name="password"  placeholder="Enter Your Password"class="form-control" id="password">
                                              </div>
                                            </div>
                                            <div class="col-lg-12">
                                              <div class="form-group">
                                                  <label for="type">Type</label>
                                                  <select name="type" id="type" class="form-control">
                                                    <!-- <option value="saleman">Sales Man</option> -->
                                                    <option value="Admin">Admin</option>
                                                  </select>
                                              </div>
                                            </div>
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
                                      <h2>Users</h2>
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
                                              <th data-field="email">Email</th>
                                              <th data-field="password">Password</th>
                                              <th data-field="type">Type</th>
                                              <th data-field="action">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($users as $key=>$user)
                                        @php
                                            $index = $key + 1;
                                        @endphp
                                          <tr>
                                              <td>{{ $index }}</td>
                                              <td>{{ $user->name }}</td>
                                              <td>{{ $user->email }}</td>
                                              <td><input type="password" name="pass" class="myInput" value="{{ $user->password2 }}"><span toggle=".myInput" class="fa fa-fw fa-eye field-icon toggle-password"></span></td>
                                              <td>{{ $user->type }}</td>
                                              <td>
                                                <a href="#" class="btn btn-primary" style="color: #fff;"><i class="fa fa-trash"></i></a>
                                                {{-- <a href="{{ route('users.delete-user-account', ['id'=>$user->id]) }}" class="btn btn-primary" style="color: #fff;"><i class="fa fa-trash"></i></a> --}}
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
    {{-- <script src="{{asset('js/jquery.sticky.js')}}"></script> --}}
    <!-- scrollUp JS
		============================================ -->
    {{-- <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script> --}}
    <!-- scrollUp JS
		============================================ -->
    {{-- <script src="{{asset('js/wow/wow.min.js')}}"></script> --}}
    <!-- counterup JS
		============================================ -->
    {{-- <script src="{{asset('js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('js/counterup/counterup-active.js')}}"></script> --}}
    <!-- jvectormap JS
		============================================ -->
    {{-- <script src="{{asset('js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('js/jvectormap/jvectormap-active.js')}}"></script> --}}
    <!-- peity JS
		============================================ -->
    {{-- <script src="{{asset('js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/peity/peity-active.js')}}"></script> --}}
    <!-- sparkline JS
		============================================ -->
    {{-- <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script> --}}
    <!-- flot JS
		============================================ -->
    {{-- <script src="{{asset('js/flot/Chart.min.js')}}"></script>
    <script src="{{asset('js/flot/dashtwo-flot-active.js')}}"></script> --}}
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

        // function restrictInputOtherThanArabic($field){
        //     // Arabic characters fall in the Unicode range 0600 - 06FF
        //     var arabicCharUnicodeRange = /[\u0600-\u06FF]/;
        //     $field.bind("keypress", function(event)
        //     {
        //         var key = event.which;
        //         if (key==8 || key==0 || key === 32){
        //           return true;
        //         }
        //         var str = String.fromCharCode(key);
        //         if ( arabicCharUnicodeRange.test(str) ){
        //           return true;
        //         }
        //         return false;
        //     });
        // }
        // restrictInputOtherThanArabic($('#u_name'));
      });
    </script>
</body>

</html>