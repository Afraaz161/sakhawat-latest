<form action="{{ route('add-previous-payment-action') }}" method="POST">
    <input type="hidden" name="customer_id" value="{{ $id }}">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" id="date" tabindex="0" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="amount">Previous Amount</label>
                <input type="text" class="form-control" name="amount" id="amount" tabindex="1" autofocus required>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" tabindex="2" id="description" required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>