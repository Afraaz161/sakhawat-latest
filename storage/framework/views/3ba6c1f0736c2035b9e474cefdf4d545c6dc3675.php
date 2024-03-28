<?php 
    $total = 0;
    $index = 0;
?>
<?php if($saleItems): ?>
    <?php $__currentLoopData = $saleItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $saleitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php 
        $total += $saleitem->price * $saleitem->quantity; 
        $index++;
    ?>
        <tr>
            <td>
                <a href="#" title="Delete" class="icon remove-from-sale" data-id="<?php echo e($saleitem->id); ?>"><i class="fa fa-trash-o"></i></a>
            </td>
            <td><?php echo e($saleitem->name); ?></td>
            <td><input type="number" name="cart-quantity" value="<?php echo e($saleitem->quantity); ?>" data-id="<?php echo e($saleitem->id); ?>" id="cart-quantity" class="cart-quantity"></td>
            <td><input type="number" name="cart-price" value="<?php echo e($saleitem->price); ?>" data-id="<?php echo e($saleitem->id); ?>" id="cart-price" class="cart-price"></td>
            <td><?php echo e($saleitem->total); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" id="total" name="total" data-id="<?php echo e($total); ?>">
<?php else: ?>
    <tr>
        <td colspan="6" class="text-info text-center">No Item Added.</td>
    </tr>
<?php endif; ?><?php /**PATH C:\afraaz-project\pizzaShop\sakhawat-latest\resources\views/sales/editSale-get-sale.blade.php ENDPATH**/ ?>