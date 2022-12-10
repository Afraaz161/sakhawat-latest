<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>POS (Point of Sale Software) - A brand of WebEasy Pvt Limited.</title>
    <link rel="stylesheet" href="<?php echo e(asset('print/style.css')); ?>" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <?php if(Auth::user()): ?>
            <?php if(Auth::user()->logo): ?>
              <img src="<?php echo e(asset('users').'/'.Auth::user()->logo); ?>" style="height: 80px;">
            <?php endif; ?>
        <?php endif; ?>
      </div>
      <div id="company">
        <?php if(Auth::user()): ?>
          <h2 class="name"><?php echo e(Auth::user()->name); ?></h2>
          <div><?php echo e(Auth::user()->address); ?></div>
          <div><?php echo e(Auth::user()->phone); ?></div>
          <div><a href="mailto:<?php echo e(Auth::user()->email); ?>"><?php echo e(Auth::user()->email); ?></a></div>
        <?php endif; ?>
      </div>
      </div>
    </header>
    <main>
      
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
              <th class="no">Item</th>
              <th class="no">SKU</th>
              <th class="no">Price</th>
              <th class="no">Re-Order Value</th>
              <th class="no">Stock</th>
              <th class="no">Required</th>

          </tr>
        </thead>
        <tbody>
          <?php
              $total = 0;
          ?>
          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $total += $item->total;
                ?>
                <tr>
                <td style="text-align: center;"><?php echo e($item->name); ?></td>
                <?php
                    $pro = \App\Models\Item::whereName($item->name)->first();
                ?>
                <td class="qty" style="text-align: center;"><?php echo e($pro->sku); ?></td>
                <td class="qty" style="text-align: center;"><?php echo e($item->price); ?></td>
                <td class="desc" style="text-align: center;"><?php echo e($item->reorder_value); ?></td>
                <td style="text-align: center;"><h3><?php echo e($item->stock); ?></h3></td>
                <td style="text-align: center;"><h3><?php echo e((int)$item->reorder_value - (int)$item->stock); ?></h3></td>
                </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      
    </main>
    <div style="text-align: center;">
        Copyright © 2021 <a href="https://wearewebeasy.com/">WebEasy Pvt Ltd</a>. All Rights Reserved.
    </div>
  </body>
</html><?php /**PATH C:\Users\afraa\OneDrive\Desktop\projects\sakhawat-latest\resources\views/print/print-reorder-list.blade.php ENDPATH**/ ?>