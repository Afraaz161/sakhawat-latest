<form action="{{ route('update-manufacture') }}" method="POST">
    <input type="hidden" name="id" value="{{ $manufacture->id }}">
    @csrf
    <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
              <label for="manufacture">Name</label>
              <input type="text" value="{{ $manufacture->name }}" name="manufacture" class="form-control" id="manufacture" autofocus>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
              <label for="u_name">نام</label>
              <input type="text" value="{{ $manufacture->u_name }}" name="u_name" class="form-control" id="u_name" autofocus>
          </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
</form>