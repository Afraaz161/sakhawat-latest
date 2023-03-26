<div class="form-group">
    <label for="customer">Customer name</label>
    <select class="form-control" name="customer" id="customer">
        <option value="abc">abc</option>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<script>
    $('#customer').select2({
        placeholder: 'ABC Customer'
    });
</script><?php /**PATH C:\Users\afraa\OneDrive\Desktop\TestProject\wahab\resources\views/sales/get-customers.blade.php ENDPATH**/ ?>