<label for="manufacture">Manufacture</label>
<select name="manufacture" tabindex="5" class="form-control">
    @foreach ($manufactures as $manufacture)
        <option value="{{ $manufacture->id }}">{{ $manufacture->name }}</option>
    @endforeach
</select>