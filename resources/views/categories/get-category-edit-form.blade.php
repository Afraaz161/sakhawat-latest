<form action="{{ route('update-category') }}" method="POST">
    <input type="hidden" name="id" value="{{ $category->id }}">
    @csrf
    <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" value="{{ $category->name }}" name="name" class="form-control" id="name" required autofocus>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
              <label for="u_name">نام</label>
              <input type="text" value="{{ $category->u_name }}" name="u_name" class="form-control" required id="u_name">
          </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
</form>