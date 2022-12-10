<form action="{{ route('add-payment-to-sale-account-action') }}" method="POST">
    <input type="hidden" name="customer_id" value="{{ $payment->customer['id'] }}">
    @csrf
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="customer">Customer Name</label>
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
</form>