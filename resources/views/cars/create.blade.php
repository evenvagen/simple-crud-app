@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Car</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('cars.store') }}">
          @csrf
          <div class="form-group">
              <label for="model">Model:</label>
              <input type="text" class="form-control" name="model"/>
          </div>

          <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>

          <div class="form-group">
              <label for="year">Year:</label>
              <input type="text" class="form-control" name="year"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add car</button>
      </form>
  </div>
</div>
</div>
@endsection
