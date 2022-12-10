<div class="form-group">
    <label for="customer">Vendor name</label>
    <select class="form-control" name="customer" id="customer" tabindex="1" autofocus>
        <option>--Select vendor--</option>
        @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
    </select>
</div>

<script>
    $('#customer').select2({
        placeholder: '--Select item--'
    });
</script>