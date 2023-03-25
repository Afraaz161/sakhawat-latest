<label for="manufacture">Manufacture</label>
<select name="manufacture" tabindex="5" class="form-control">
    <?php $__currentLoopData = $manufactures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($manufacture->id); ?>"><?php echo e($manufacture->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><?php /**PATH C:\Users\afraa\OneDrive\Desktop\TestProject\wahab\resources\views/item/get-manufacture.blade.php ENDPATH**/ ?>