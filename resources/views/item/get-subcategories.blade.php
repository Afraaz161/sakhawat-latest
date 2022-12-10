<label for="subcategory">Sub Category</label>
<select name="subcategory" tabindex="4" id="subcategory" class="form-control">
    @foreach ($subcategories as $subcategory)
        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
    @endforeach
</select>