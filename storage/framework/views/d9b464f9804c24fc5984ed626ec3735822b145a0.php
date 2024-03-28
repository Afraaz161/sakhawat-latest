<label for="detail">Expense Category</label>
<select name="category" id="category" class="form-control" required>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><?php /**PATH C:\afraaz-project\pizzaShop\sakhawat-latest\resources\views/expense/get-categories.blade.php ENDPATH**/ ?>