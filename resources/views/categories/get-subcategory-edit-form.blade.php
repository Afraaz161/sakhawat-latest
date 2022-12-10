<form action="{{ route('update-subcategory') }}" method="POST">
    <input type="hidden" name="id" value="{{ $subcategory->id }}">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" class="form-control">
                    {{-- <option value="">Choose Category</option> --}}
                    <option value="">Choose Category</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" selected>{{ $cat->name }} - {{ $cat->u_name }}</option>
                    @endforeach
                </select>
            </div>
          </div>
        <div class="col-lg-12">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" value="{{ $subcategory->name }}" name="name" class="form-control" id="name" autofocus>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
              <label for="u_name">نام</label>
              <input type="text" value="{{ $subcategory->u_name }}" name="u_name" class="form-control" id="u_name" autofocus>
          </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
</form>