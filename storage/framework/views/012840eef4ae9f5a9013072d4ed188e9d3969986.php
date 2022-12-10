<div class="flash-message">
    <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Session::has('alert-' . $msg)): ?>

        <p class="alert alert-<?php echo e($msg); ?>" style="margin-bottom:0px;"><?php echo e(Session::get('alert-' . $msg)); ?>

            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </p>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if(count($errors)): ?>
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <br/>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        </div>
    <?php endif; ?>
</div><?php /**PATH C:\Users\King-PC\Desktop\projects\sakhawat\resources\views/include/messages.blade.php ENDPATH**/ ?>