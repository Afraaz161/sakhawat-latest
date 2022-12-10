<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sale Report</title>
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
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
              <th class="no">Date</th>
              <th class="no">#ID</th>
              <th class="no">Customer</th>
              <th class="no">Received</th>
              <th class="no">Total</th>
              <th class="no">Payable</th>
            <th class="no">Salesman</th>
          </tr>
        </thead>
        <tbody>
          @php
              $total = 0;
          @endphp
          @foreach ($sales as $key=>$sale)
          @php
              $total += $sale->total_bill;
          @endphp
            <tr>
              @php
                $sale_man = \App\Models\User::find($sale->sale_man);
              @endphp
              <td class="unit">{{ $sale->current_date }}</td>
              <td class="desc"><h3>{{'THS#'.str_pad($sale->id, 5, "0", STR_PAD_LEFT)}}</h3></td>
              @if ($sale->walking_customer)
                <td class="unit">{{ $sale->walking_customer }}</td>    
              @else
                <td class="unit">{{ $sale->customer['name'] }}</td>
              @endif
              <td class="unit">{{ $sale->received }}</td>
              <td class="unit">{{ $sale->total_bill }}</td>
              <td class="unit">{{ $sale->total_bill - $sale->received}}</td>
              <td class="unit">{{ $sale->user['name'] }}</td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3"></td>
            <td colspan="3">SubTotal</td>
            <td>{{ $total }}</td>
          </tr>
          @if ($sales->discount)
            <tr>
              <td colspan="3"></td>
              <td colspan="3">Discount</td>
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
            <td colspan="3"></td>
            <td colspan="3"><b>Grand Total</b></td>
            <td><b>{{ $sales->receivable }}</b></td>
          </tr>
          <tr>
            <td colspan="3"></td>
            <td colspan="3">Received</td>
            <td>{{ $sales->received }}</td>
          </tr>
          <tr>
            <td colspan="3"></td>
            <td colspan="3">Return</td>
            <td>{{ $sales->remaining }}</td>
          </tr>
        </tfoot>
      </table>
    </main>
    <div style="text-align: center;">
      Copyright © 2021 <a href="https://wearewebeasy.com/">WebEasy Pvt Ltd</a>. All Rights Reserved.
    </div>
  </body>
</html>