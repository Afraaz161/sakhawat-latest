<form action="{{ route('add-payment-to-purchase-account-action') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $payment->customer['id'] }}">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="customer">Vendor Name</label>
                <input type="text" class="form-control" value="{{ $payment->customer['name'] }}" name="customer" id="customer" readonly>
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
                <label for="amount">Amount</label>
                <input type="text" class="form-control" name="amount" id="amount" tabindex="0" autofocus required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>