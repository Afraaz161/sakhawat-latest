<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>POS (Point of Sale Software) - A brand of WebEasy Pvt Limited.</title>
    <link rel="stylesheet" href="{{ asset('print/style.css') }}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        @if (Auth::user())
            @if(Auth::user()->logo)
              <img src="{{ asset('users').'/'.Auth::user()->logo }}" style="height: 80px;">
            @endif
        @endif
      </div>
      <div id="company">
        @if (Auth::user())
          <h2 class="name">{{Auth::user()->name}}</h2>
          <div>{{Auth::user()->address}}</div>
          <div>{{Auth::user()->phone}}</div>
          <div><a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></div>
        @endif
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name">{{ $purchase->customer['name'] }}</h2>
          <div class="address">{{ $purchase->customer['address'] }}</div>
          <div class="email"><a href="">{{ $purchase->customer['phone'] }}</a></div>
        </div>
        <div id="invoice">
          <h1>INVOICE {{'#'.str_pad($purchase->id, 5, "0", STR_PAD_LEFT)}}</h1>
          <div class="date">Date of Invoice: {{ $purchase->current_date }}</div>
          {{-- <div class="date">Due Date: 30/06/2014</div> --}}
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
              <th class="no">Item</th>
              <th class="no">SKU</th>
              <th class="no">Price</th>
              <th class="no">Quantity</th>
              <th class="no">Total</th>

          </tr>
        </thead>
        <tbody>
          @php
              $total = 0;
          @endphp
          @foreach ($purchase->purchase_item as $key=>$item)
          @php
              $total += $item->total;
          @endphp
            <tr>
              <td style="text-align: center;">{{ $item->name }}</td>
              @php
                  $pro = \App\Models\Item::whereName($item->name)->first();
              @endphp
              <td class="qty" style="text-align: center;">{{ $pro->sku }}</td>
              <td class="qty" style="text-align: center;">{{ $item->price }}</td>
              <td class="desc" style="text-align: center;">{{ $item->quantity }}</td>
              <td style="text-align: center;"><h3>{{ $item->total }}</h3></td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SubTotal</td>
            <td>{{ $total }}</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Grand Total</td>
            <td>{{ $total }}</td>
          </tr>
        </tfoot>
      </table>
      {{-- <div id="thanks">!شکریہ</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div> --}}
    </main>
    <div style="text-align: center;">
        Copyright © 2021 <a href="https://wearewebeasy.com/">WebEasy Pvt Ltd</a>. All Rights Reserved.
    </div>
  </body>
</html>