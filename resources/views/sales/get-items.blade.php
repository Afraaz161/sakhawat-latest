<div class="form-group">
    <label for="item">Item name</label>
    <select class="form-control" name="item" id="item">
        <option value="">Select Items</option>
        @foreach ($items as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<script>
    $('#item').select2({
        placeholder: 'Choose Item'
    });
</script>