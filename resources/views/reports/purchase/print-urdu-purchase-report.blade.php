<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link rel="stylesheet" href="{{ asset('print/style.css') }}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{ asset('front/img/logo2.png') }}" style="height: 80px;">
      </div>
      <div id="company">
        <h2 class="name">TOOR HARDWARE STORE</h2>
        <div>Sahiwal Road, Pakpatan Sharif, Punjab, Pakistan</div>
        <div>0300-6949038</div>
        <div><a href="mailto:info@toorhardwarestore.com">info@toorhardwarestore.com</a></div>
      </div>
      </div>
    </header>
    <main>
      {{-- <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name">John Doe</h2>
          <div class="address">796 Silver Harbour, TX 79273, US</div>
          <div class="email"><a href="mailto:john@example.com">john@example.com</a></div>
        </div>
        <div id="invoice">
          <h1>INVOICE 3-2-1</h1>
          <div class="date">Date of Invoice: 01/06/2014</div>
          <div class="date">Due Date: 30/06/2014</div>
        </div>
      </div> --}}
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">سیلز مین</th>
            <th class="qty">بیلنس</th>
            <th class="total">بنام</th>
            <th class="qty">جمع</th>
            <th class="unit">وینڈر</th>
            <th class="desc">THS#</th>
            <th class="no">تاریخ</th>
          </tr>
        </thead>
        <tbody>
          @php
              $total = 0;
          @endphp
          @foreach ($purchases as $key=>$purchase)
          @php
              $total += $purchase->total_bill;
          @endphp
            <tr>
              @php
                $sale_man = \App\Models\User::find($purchase->sale_man);
              @endphp
              <td class="no">{{ $sale_man->u_name }}</td>
              <td class="qty">{{ $purchase->total_bill - $purchase->payment}}</td>
              <td class="total">{{ $purchase->total_bill }}</td>
              <td class="qty">{{ $purchase->payment }}</td>
              <td class="unit">{{ $purchase->customer['u_name'] }}</td>
              <td class="desc"><h3>{{'THS#'.str_pad($purchase->id, 5, "0", STR_PAD_LEFT)}}</h3></td>
              <td class="no">{{ $purchase->current_date }}</td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3"></td>
            <td colspan="3">کُل</td>
            <td>{{ $total }}</td>
          </tr>
          <tr>
            <td colspan="3"></td>
            <td colspan="3">مجموعی عدد</td>
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
      Software Developed By: <a href="https://www.facebook.com/baashna514/">Moin Abbas</a>  | WhatsApp: <a href="https://wa.me/03321773514/?text=Hi!">03321773514</a>
    </div>
  </body>
</html>