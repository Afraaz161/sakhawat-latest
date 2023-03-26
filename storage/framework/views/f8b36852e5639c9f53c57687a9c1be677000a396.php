<html>
  <head>
    <style>
      @media  print {
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
          <img src="<?php echo e(asset('logo3.jpeg')); ?>" alt="">
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
        <?php echo DNS2D::getBarcodeHTML($sales->invoice_no, 'QRCODE',5,5); ?>

      </td>
    </tr>
  </table>

  <table border="1" style="width: 100%;border-collapse: collapse;margin-top:5px;">
    <tr>
      <td colspan="2" style="text-align: center;font-size: 20px;background: #0000008c;color:#fff;width:20%;font-size:25px;">SALE INVOICE</td>
      <td style="width:50%;text-align:center;">
        <?php if($sales->customer): ?>
            <a href="" style="font-size: 25px;text-transform:uppercase;color:00c5cf;"><b><?php echo e($sales->customer['name']); ?></b></a>
        <?php else: ?>
            <a href="" style="font-size: 25px;text-transform:uppercase;color:00c5cf;"><b><?php echo e($sales->walking_customer); ?></b></a>
        <?php endif; ?>
      </td>
      <td style="width:15%;text-align:center;">Delivery Date</td>
      <td style="width:15%; text-align:center;"><b><?php echo e($sales->current_date); ?></b></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center;width:20%;"><b style="font-size: 20px;">Client NTN #</b></td>
      <td style="font-size: 20px; width:30%;background:#00000052;text-align:center;">
        <?php if($sales->customer): ?>
            <?php echo e($sales->customer['ntn_no']); ?>

        <?php endif; ?>
      </td>
      <td style="text-align:center;width:20%;"><b style="font-size: 20px;">Client STR #</b></td>
      <td style="font-size: 20px; width:30%;background:#00000052;text-align:center;">
        <?php if($sales->customer): ?>
            <?php echo e($sales->customer['sales_tax_no']); ?>

        <?php endif; ?>
      </td>
    </tr>
    <tr>
      <td style="width: 10%;text-align:center;">PO #</td>
      <td style="text-align:center;"><b>1633</b></td>
      <td>Client GD# <b><?php echo e($sales->gd_no); ?></b></td>
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
      <?php
          $total = 0;
          $totalQuantity = 0;
          $price = 0;
          $taxPrice = 0;
      ?>
      <?php $__currentLoopData = $sales->sale_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
          $price += $item->price;
          $total += $item->total;
          $totalQuantity += $item->quantity;
          if($sales->sales_tax){
            $perc = $sales->sales_tax/100;
            $taxPrice += ($perc * $item->total);
          }
      ?>
      <?php
        $pro = \App\Models\Item::whereName($item->name)->first();
      ?>
        <tr style="height: 25px;">
          <td class="sno" style="text-align: center;font-size: 20px;"><?php echo e($key+1); ?></td>
          <td style="font-size: 20px;"><?php echo e($pro->category['name']); ?></td>
          <td style="font-size: 20px;"><?php echo e($item->name); ?></td>
          <td class="desc" style="text-align: center;font-size: 20px;"><?php echo e($item->quantity); ?></td>
          <td class="qty" style="text-align: center;font-size: 20px;"><?php echo e($item->price); ?></td>
          <td class="qty" style="text-align: center;font-size: 20px;">
          <?php if($sales->sales_tax): ?>
              <?php
                $perc = $sales->sales_tax/100;
                $tax_amount = $perc * $item->total;
              ?>
              <?php echo e($tax_amount); ?>

          <?php endif; ?>
          </td>
          <td style="text-align: center;font-size: 20px;"><?php echo e($item->total); ?></td>
          <td class="qty" style="text-align: center;font-size: 20px;">
            <?php if($sales->sales_tax): ?>
              <b><?php echo e($item->total + $tax_amount); ?></b>    
            <?php else: ?>
              <b><?php echo e($item->total); ?></b>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tr style="height: 25px;">
        <td colspan="8"></td>
      </tr>
      <tr style="height: 25px;">
        <th colspan="3" style="text-align: center;font-size: 20px;">Total</th>
        <th style="text-align: center;font-size: 20px;"><?php echo e($totalQuantity); ?></th>
        <th style="text-align: center;font-size: 20px;"></th>
        <th style="text-align: center;font-size: 20px;color: #3c3cc3;"><?php echo e(number_format((float)$taxPrice, 2, '.', '')); ?></th>
        <th style="text-align: center;font-size: 20px;background: #0000004f;color:#000;"><?php echo e($total); ?></th>
        <th style="text-align: center;font-size: 20px;background: #0000008c;color:#fff;">
          <?php if($sales->sales_tax): ?>
            <b><?php echo e(number_format((float)$total+$taxPrice, 2, '.', '')); ?></b>    
          <?php else: ?>
            <b><?php echo e($total); ?></b>
          <?php endif; ?>
        </th>
      </tr>
      <?php if($sales->discount): ?>
        <tr style="height: 20px;">
          <td colspan="5" style="text-align: center;"><h3>Discount</h3></td>
          <td colspan="5" style="text-align: center;">
            <?php if($sales->discount_type): ?>
              <?php if($sales->discount_type == 'perc'): ?>
              <?php echo e($sales->discount); ?> %
              <?php else: ?>
              <?php echo e($sales->discount); ?> - PKR
              <?php endif; ?>
            <?php endif; ?>
          </td>
        </tr>
      <?php endif; ?>
      <tr style="height: 25px;">
        <td colspan="8"></td>
      </tr>
      <tr style="height: 25px;">
        <td colspan="8" style="text-align: center;color: #8f3cc3">This is automatic system generated copy no need any signature or stamp</td>
      </tr>
      
    </tbody>
  </table>

</html><?php /**PATH C:\Users\afraa\OneDrive\Desktop\TestProject\wahab\resources\views/print/sale-print-english.blade.php ENDPATH**/ ?>