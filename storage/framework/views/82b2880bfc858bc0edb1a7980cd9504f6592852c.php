<div class="form-group">
    <label for="item">Item name</label>
    <select class="form-control" name="item" id="item">
        <option value="">Select Items</option>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<script>
    $('#item').select2({
        placeholder: 'Choose Item'
    });
</script><?php /**PATH E:\Projects\PizzaShop\sakhawat-latest\resources\views/sales/get-items.blade.php ENDPATH**/ ?>