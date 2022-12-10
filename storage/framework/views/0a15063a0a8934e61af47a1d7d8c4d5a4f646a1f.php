<form action="<?php echo e(route('add-payment-to-sale-account-action')); ?>" method="POST">
    <input type="hidden" name="customer_id" value="<?php echo e($payment->customer['id']); ?>">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="customer">Customer Name</label>
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
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" id="date" required>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" name="amount" id="amount" tabindex="0" required>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form><?php /**PATH C:\Users\afraa\OneDrive\Desktop\projects\sakhawat-latest\resources\views/payment/get-sale-payment-detail.blade.php ENDPATH**/ ?>