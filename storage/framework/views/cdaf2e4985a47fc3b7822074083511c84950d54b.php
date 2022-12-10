<label for="category">Category</label>
<select name="category" id="category" class="form-control">
    <option value="">Choose category</option>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><?php /**PATH C:\Users\afraa\OneDrive\Desktop\projects\sakhawat-latest\resources\views/item/get-categories.blade.php ENDPATH**/ ?>