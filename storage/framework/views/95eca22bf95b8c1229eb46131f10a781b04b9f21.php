<label for="brand">Brands</label>
<select name="brand" tabindex="4" id="brand" class="form-control">
    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><?php /**PATH C:\Users\afraa\OneDrive\Desktop\TestProject\wahab\resources\views/item/get-brand.blade.php ENDPATH**/ ?>