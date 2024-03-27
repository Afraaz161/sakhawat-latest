<?php 
    $total = 0;
    $index = 0;
?>
<?php if($sales): ?>
    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php 
        $total += $sale->price * $sale->quantity; 
        $index++;
    ?>
        <tr>
            <td>
                <a href="#" title="Delete" class="icon remove-from-sale" data-id="<?php echo e($sale->id); ?>"><i class="fa fa-trash-o"></i></a>
            </td>
            <td><?php echo e($sale->name); ?></td>
            <td><input type="number" name="cart-quantity" value="<?php echo e($sale->quantity); ?>" data-id="<?php echo e($sale->id); ?>" id="cart-quantity" class="cart-quantity"></td>
            <td><input type="number" name="cart-price" value="<?php echo e($sale->price); ?>" data-id="<?php echo e($sale->id); ?>" id="cart-price" class="cart-price"></td>
            <td><?php echo e($sale->total); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" id="total" name="total" data-id="<?php echo e($total); ?>">
<?php else: ?>
    <tr>
        <td colspan="6" class="text-info text-center">No Item Added.</td>
    </tr>
<?php endif; ?><?php /**PATH E:\projects\pos\sakhawat-latest\resources\views/sales/get-sale.blade.php ENDPATH**/ ?>