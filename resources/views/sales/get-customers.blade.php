<div class="form-group">
    <label for="customer">Customer name</label>
    <select class="form-control" name="customer" id="customer">
        <option value="abc">abc</option>
        @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
    </select>
</div>
<script>
    $('#customer').select2({
        placeholder: 'ABC Customer'
    });
</script>