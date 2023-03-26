<div class="form-group">
    <label for="customer">Vendor name</label>
    <select class="form-control" name="customer" id="customer" tabindex="1" autofocus>
        <option>--Select vendor--</option>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<script>
    $('#customer').select2({
        placeholder: '--Select item--'
    });
</script><?php /**PATH C:\Users\afraa\OneDrive\Desktop\TestProject\wahab\resources\views/purchase/get-vendors.blade.php ENDPATH**/ ?>