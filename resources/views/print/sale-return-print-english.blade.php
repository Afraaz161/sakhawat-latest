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
          @if ($sales->walking_customer)
            <h2 class="name">{{ $sales->walking_customer }} Customer</h2>
          @else    
            <h2 class="name">{{ $sales->customer['name'] }}</h2>
            <div class="address">{{ $sales->customer['address'] }}</div>
            <div class="email"><a href="">{{ $sales->customer['phone'] }}</a></div>
          @endif
        </div>
        <div id="invoice">
          <h1>INVOICE {{'#'.str_pad($sales->id, 5, "0", STR_PAD_LEFT)}}</h1>
          <div class="date">Date of Invoice: {{ $sales->current_date }}</div>
          {{-- <div class="date">Due Date: 30/06/2014</div> --}}
        </div>
      </div>
      <table border="1" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
              <th class="no">#</th>
              <th class="no">Item</th>
              <th class="no">Qty</th>
              <th class="no">Price</th>
              {{-- <th class="no">Discount</th> --}}
              {{-- <th class="no">New Price</th> --}}
              <th class="no">Total</th>
          </tr>
        </thead>
        <tbody>
          @php
              $total = 0;
              $books = 0;
              $price = 0;
          @endphp
          @foreach ($sales->sale_return_items as $key=>$item)
          @php
              $price += $item->price * $item->quantity;
              $total += $item->total;
              $books += $item->quantity;
          @endphp
            <tr>
              <td style="text-align: center;">{{$key+1}}</td>
              <td style="text-align: center;font-size:20px;">{{ $item->name }}</td>
              @php
                  $pro = \App\Models\Item::whereName($item->name)->first();
              @endphp
              <td class="desc" style="text-align: center;">{{ $item->quantity }}</td>
              <td class="qty" style="text-align: center;">{{ $item->price }}</td>
              {{-- <td class="qty" style="text-align: center;">{{ $item->discount }} %</td> --}}
              {{-- <td class="qty" style="text-align: center;">{{ $item->new_price }}</td> --}}
              <td style="text-align: center;"><h3>{{ $item->total }}</h3></td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          @if ($sales->discount)
            <tr>
              <td colspan="4">Discount</td>
              <td>
                @if ($sales->discount_type)
                  @if ($sales->discount_type == 'perc')
                  {{$sales->discount}} %
                  @else
                  {{$sales->discount}} - PKR
                  @endif
                @endif
              </td>
            </tr>
          @endif
          <tr>
            <td colspan="2">Total Items</td>
            <td style="text-align: center;">{{ $books }}</td>
          {{-- </tr>
          <tr> --}}
            <td>Current Total</td>
            <td>{{$sales->total_bill}}</td>
          </tr>
          @if ($sales->customer_id)
            <tr>
              <td colspan="4">Previous Due</td>
              <td>{{$sales->previous_due}}</td>
            </tr>
          @endif
          <tr>
            <td colspan="4"><b>Received</b></td>
            <td><b>{{ $sales->received }}</b></td>
          </tr>
          <tr>
            <td colspan="4"><b>Grand Total</b></td>
            <td><b>{{ $sales->receivable - $sales->received }}</b></td>
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
        {{-- Copyright © 2021 <a href="https://wearewebeasy.com/">WebEasy Pvt Ltd</a>. All Rights Reserved. --}}
        Developed By <a href="">M Abbas</a>. Whatsapp: <a href="">03321773514</a>
    </div>
  </body>
</html>