<label for="category">Category</label>
<select name="category" id="category" class="form-control">
    <option value="">Choose category</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>