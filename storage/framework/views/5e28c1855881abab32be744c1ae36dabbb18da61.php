<label for="subcategory">Sub Category</label>
<select name="subcategory" tabindex="4" id="subcategory" class="form-control">
    <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($subcategory->id); ?>"><?php echo e($subcategory->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><?php /**PATH E:\projects\pos\sakhawat-latest\resources\views/item/get-subcategories.blade.php ENDPATH**/ ?>