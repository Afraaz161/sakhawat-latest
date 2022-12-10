<label for="detail">Expense Category</label>
<select name="category" id="category" class="form-control" required>
    @foreach ($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>
    @endforeach
</select>