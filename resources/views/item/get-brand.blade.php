<label for="brand">Brands</label>
<select name="brand" tabindex="4" id="brand" class="form-control">
    @foreach ($brands as $brand)
        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
    @endforeach
</select>