<span style="float: left;">{{Auth::user()->name}}</span><br>
<span><img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($item->sku, 'C128') }}" alt="Error" style="float: left;"></span><br><br>
<span style="float: left;">{{ $item->sku }}</span><br>
<span style="float: left;">{{ $item->name }}</span><br>
<span style="float: left;">Price: Rs. {{ $price }}</span>