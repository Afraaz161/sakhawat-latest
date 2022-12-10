<html>
  <head>
    <style>
      @media print {
        body {
            -webkit-print-color-adjust: exact;
            font-family: Arial, Helvetica, sans-serif;
        }
        .no{
          background: #e1e1e1;
          font-size: 20px;
          text-align: center;
        }
        .nos{
          background: #e1e1e1;
          font-size: 20px;
        }
        .sno{
          width:50px;
        }
      }
    </style>
  </head>
  <table style="border-bottom: 1px solid #000;width:99.9%;">
    <tr>
      <td style="width:70%">
        <span>
          <img src="{{asset('logo3.jpeg')}}" alt="">
        </span>
      </td>
      <td style="width:15%">
        <span>NTN #</span><br>
        <span><b>ABD2255555</b></span><br>
        <span>STR #</span><br>
        <span><b>ABD2255555</b></span><br>
        <span>moinabbas514@hotmail.com</span>
      </td>
      <td style="width:15%">
        {!! DNS2D::getBarcodeHTML($sales->invoice_no, 'QRCODE',5,5) !!}
      </td>
    </tr>
  </table>

  <table border="1" style="width: 100%;border-collapse: collapse;margin-top:5px;">
    <tr>
      <td colspan="2" style="text-align: center;font-size: 20px;background: #0000008c;color:#fff;width:20%;font-size:25px;">SALE INVOICE</td>
      <td style="width:50%;text-align:center;">
        @if ($sales->customer)
            <a href="" style="font-size: 25px;text-transform:uppercase;color:00c5cf;"><b>{{$sales->customer['name']}}</b></a>
        @else
            <a href="" style="font-size: 25px;text-transform:uppercase;color:00c5cf;"><b>{{$sales->walking_customer}}</b></a>
        @endif
      </td>
      <td style="width:15%;text-align:center;">Delivery Date</td>
      <td style="width:15%; text-align:center;"><b>{{$sales->current_date}}</b></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center;width:20%;"><b style="font-size: 20px;">Client NTN #</b></td>
      <td style="font-size: 20px; width:30%;background:#00000052;text-align:center;">
        @if ($sales->customer)
            {{$sales->customer['ntn_no']}}
        @endif
      </td>
      <td style="text-align:center;width:20%;"><b style="font-size: 20px;">Client STR #</b></td>
      <td style="font-size: 20px; width:30%;background:#00000052;text-align:center;">
        @if ($sales->customer)
            {{$sales->customer['sales_tax_no']}}
        @endif
      </td>
    </tr>
    <tr>
      <td style="width: 10%;text-align:center;">PO #</td>
      <td style="text-align:center;"><b>1633</b></td>
      <td>Client GD# <b>{{$sales->gd_no}}</b></td>
      <td colspan="2" style="text-align: center;">Payment Term: <span style="text-transform: uppercase;"><b>One Month Credit About 80%</b></span></td>
    </tr>
  </table>

  <table border="1" style="width: 100%;border-collapse: collapse;margin-top:5px;">
    <thead>
      <tr style="height: 25px;">
          <td class="no">#</td>
          <td class="nos">Item Type</td>
          <td class="nos" style="width: 40%;">Item Name</td>
          <td class="no">Qty</td>
          <td class="no">@</td>
          <td class="no">S.Tax</td>
          <td class="no">Amount</td>
          <td class="no" style="width: 10%;">Amount Inc. ST</td>
      </tr>
    </thead>
    <tbody>
      @php
          $total = 0;
          $totalQuantity = 0;
          $price = 0;
          $taxPrice = 0;
      @endphp
      @foreach ($sales->sale_items as $key=>$item)
      @php
          $price += $item->price;
          $total += $item->total;
          $totalQuantity += $item->quantity;
          if($sales->sales_tax){
            $perc = $sales->sales_tax/100;
            $taxPrice += ($perc * $item->total);
          }
      @endphp
      @php
        $pro = \App\Models\Item::whereName($item->name)->first();
      @endphp
        <tr style="height: 25px;">
          <td class="sno" style="text-align: center;font-size: 20px;">{{$key+1}}</td>
          <td style="font-size: 20px;">{{$pro->category['name']}}</td>
          <td style="font-size: 20px;">{{ $item->name }}</td>
          <td class="desc" style="text-align: center;font-size: 20px;">{{ $item->quantity }}</td>
          <td class="qty" style="text-align: center;font-size: 20px;">{{ $item->price }}</td>
          <td class="qty" style="text-align: center;font-size: 20px;">
          @if ($sales->sales_tax)
              <?php
                $perc = $sales->sales_tax/100;
                $tax_amount = $perc * $item->total;
              ?>
              {{$tax_amount}}
          @endif
          </td>
          <td style="text-align: center;font-size: 20px;">{{ $item->total }}</td>
          <td class="qty" style="text-align: center;font-size: 20px;">
            @if ($sales->sales_tax)
              <b>{{ $item->total + $tax_amount }}</b>    
            @else
              <b>{{ $item->total }}</b>
            @endif
          </td>
        </tr>
      @endforeach
      <tr style="height: 25px;">
        <td colspan="8"></td>
      </tr>
      <tr style="height: 25px;">
        <th colspan="3" style="text-align: center;font-size: 20px;">Total</th>
        <th style="text-align: center;font-size: 20px;">{{$totalQuantity}}</th>
        <th style="text-align: center;font-size: 20px;"></th>
        <th style="text-align: center;font-size: 20px;color: #3c3cc3;">{{number_format((float)$taxPrice, 2, '.', '')}}</th>
        <th style="text-align: center;font-size: 20px;background: #0000004f;color:#000;">{{$total}}</th>
        <th style="text-align: center;font-size: 20px;background: #0000008c;color:#fff;">
          @if ($sales->sales_tax)
            <b>{{number_format((float)$total+$taxPrice, 2, '.', '')}}</b>    
          @else
            <b>{{ $total }}</b>
          @endif
        </th>
      </tr>
      @if ($sales->discount)
        <tr style="height: 20px;">
          <td colspan="5" style="text-align: center;"><h3>Discount</h3></td>
          <td colspan="5" style="text-align: center;">
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
      <tr style="height: 25px;">
        <td colspan="8"></td>
      </tr>
      <tr style="height: 25px;">
        <td colspan="8" style="text-align: center;color: #8f3cc3">This is automatic system generated copy no need any signature or stamp</td>
      </tr>
      {{-- <tr style="height: 20px;">
        <td colspan="5" style="text-align: center;"><h3>Sales Tax ({{$sales->sales_tax}}%)</h3></td>
        <td colspan="5" style="text-align: center;">{{$sales->sales_tax_price}}</td>
      </tr>
      @if ($sales->customer_id)
        <tr style="height: 20px;">
          <td colspan="5" style="text-align: center;"><h3>Previous Due</h3></td>
          <td colspan="5" style="text-align: center;">{{$sales->previous_due}}</td>
        </tr>
      @endif
      <tr style="height: 20px;">
        <td colspan="5" style="text-align: center;"><h3>Grand Total</h3></td>
        <td colspan="5" style="text-align: center;"><b>{{ $sales->receivable}}</b></td>
      </tr> --}}
    </tbody>
  </table>

</html>