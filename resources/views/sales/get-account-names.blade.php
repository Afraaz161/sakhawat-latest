<select class="form-control bank" name="account_name" style="width: 150px;">
    <option value="">Choose Name</option>
    @foreach ($customers as $customer)
    <option value="{{ $customer->id }}">{{ $customer->name }} - {{ $customer->u_name }}</option>
    @endforeach
</select>