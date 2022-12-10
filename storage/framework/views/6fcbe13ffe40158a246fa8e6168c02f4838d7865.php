<style>
    td{
        padding: 5px;
    }
</style>
<table border="1" style="width:100%;border-collapse:collapse;">
    <thead>
        <tr>
            <th colspan="7" style="text-align: center;padding:5px;font-size:20px;">Customer Ledger Report</th>
        </tr>
        <tr>
            
            <th data-field="invoice">Invoice#</th>
            <th data-field="vendor">Date</th>
            <th data-field="total">Total</th>
            <th data-field="paid">Cash</th>
            <th data-field="payable">Credit</th>
            <th data-field="balance">Balance</th>
            <th data-field="Description">Description</th>
        </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $index = $key + 1;
        ?>
            <tr>
                
                <td><?php echo e($payment->invoice); ?></td>
                <td style="text-align:center;"><?php echo e($payment->created_at); ?></td>
                <td style="text-align:center;"><?php echo e($payment->total); ?></td>
                <td style="text-align:center;"><?php echo e($payment->received); ?></td>
                <td class="text-success" style="text-align:center;"><b><?php echo e($payment->receivable); ?></b></td>
                <td style="text-align:center;"><?php echo e($payment->balance); ?></td>
                <td><?php echo e($payment->description); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\Users\afraa\OneDrive\Desktop\projects\sakhawat-latest\resources\views/payment/print-customer-ledger.blade.php ENDPATH**/ ?>