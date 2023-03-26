<form action="<?php echo e(route('add-payment-to-purchase-account-action')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($payment->customer['id']); ?>">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="customer">Vendor Name</label>
                <input type="text" class="form-control" value="<?php echo e($payment->customer['name']); ?>" name="customer" id="customer" readonly>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="balance">Balance</label>
                <input type="text" class="form-control" value="<?php echo e($payment->balance); ?>" name="balance" id="balance" readonly>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" name="amount" id="amount" tabindex="0" autofocus required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form><?php /**PATH C:\Users\afraa\OneDrive\Desktop\TestProject\wahab\resources\views/payment/get-purchase-payment-detail.blade.php ENDPATH**/ ?>