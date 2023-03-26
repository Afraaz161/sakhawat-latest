<?php 
    $total = 0;
    $index = 0;
?>
<?php if($purchases): ?>
    <?php $__currentLoopData = $purchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php 
        $total += $purchase['price'] * $purchase['quantity']; 
        $index++;
    ?>
        <tr>
            <td><a href="#" title="Delete" class="icon remove-from-purchase" data-id="<?php echo e($purchase->id); ?>"><i class="fa fa-trash-o"></i></a></td>
            <td><?php echo e($purchase['name']); ?></td>
            <td><?php echo e($purchase['price']); ?></td>
            <td><?php echo e($purchase['quantity']); ?></td>
            <td><?php echo e($purchase['total']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" id="total" name="total" data-id="<?php echo e($total); ?>">
<?php else: ?>
    <tr>
        <td colspan="6" class="text-info text-center">No Item Added.</td>
    </tr>
<?php endif; ?>
<?php /**PATH C:\Users\afraa\OneDrive\Desktop\TestProject\wahab\resources\views/purchase/get-purchase.blade.php ENDPATH**/ ?>