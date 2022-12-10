<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='{{ asset('print/css/style.css') }}' />
	<link rel='stylesheet' type='text/css' href='{{ asset('print/css/print.css') }}' media="print" />
	{{-- <script type='text/javascript' src='{{ asset('print/js/jquery-1.3.2.min.js') }}'></script> --}}
	{{-- <script type='text/javascript' src='{{ asset('print/js/example.js') }}'></script> --}}

</head>

<body>

	<div id="page-wrap">

		{{-- <textarea id="header">INVOICE</textarea> --}}
		
		<div id="identity">
		
            <textarea id="address">TOOR HARDWARE STORE 
Sahiwal Road, Pakpatan Sharif 
Phone: 0300-6949038</textarea>

            <table id="meta">
                {{-- <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr> --}}
                <tr>
                    <td class="meta-head">Date</td>
                    <td><textarea id="date">{{ $date }}</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Customer</td>
                    <td><div class="due">{{ $customer }}</div></td>
                </tr>
            </table>
		</div>
		<div style="clear:both"></div>
		<table id="items" style="margin-bottom:0px;">
		  <tr style="width: 100%;">
		      <th>قیمت</th>
		      <th>نرخ</th>
              <th>ائٹم</th>
              <th>Item</th>
		      <th>تعداد</th>
          </tr>
        @if (session('cart'))
            @foreach(session('cart') as $id => $cart)
                <tr class="item-row" style="width: 100%;">
                    <td class="item-name"><textarea readonly>{{ $cart['total_price'] }}</textarea></td>
                    <td><textarea class="cost" readonly>{{ $cart['sell_price'] }}</textarea></td>
                    <td><textarea class="qty" readonly>{{ $cart['u_name'] }}</textarea></td>
                    <td><textarea class="qty" readonly>{{ $cart['e_name'] }}</textarea></td>
                    <td><span class="price">{{ $cart['quantity'] }}</span></td>
                </tr>
            @endforeach
        @else
            <div style="text-align: center;"><h4>No Item Selected</h4></div>
        @endif
		</table>
        <p style="font-size: 20px;"><span>{{ $total_bill }} :</span><span>کل بل</span></p>
        <p style="font-size: 20px;"><span>{{ $less_net }} :</span><span>رعایت</span></p>
        <p style="font-size: 20px;"><span><b>{{ $receivable }} :</b></span><span><b>قابل وصول</b></span></p>
        <p style="font-size: 20px;"><span>{{ $received }} :</span><span>وصول</span></p>
        <p style="font-size: 20px;"><span>{{ $change }} :</span><span>بقایا</span></p>
		<div id="terms">
		  {{-- <h5>Terms</h5> --}}
		  <textarea>Developed By: Moin Abbas | Contact: 03321773514</textarea>
		</div>
	
	</div>
	
</body>

</html>