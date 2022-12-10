<form action="{{ route('add-payment-to-other-account-action') }}" method="POST">
    <input type="hidden" name="id" value="{{ $payment->id }}">
    @csrf
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="add_new_vendor">Customer Name</label>
                <input type="text" class="form-control" value="{{ $payment->customer['name'] }}" name="customer" id="current_date" readonly>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="balance">Balance</label>
                <input type="text" class="form-control" value="{{ $payment->balance }}" name="balance" id="balance" readonly>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="payment_method">Amount</label>
                <input type="text" class="form-control" name="amount" id="amount" tabindex="0" autofocus required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>