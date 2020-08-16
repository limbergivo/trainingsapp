@extends ('layouts.app')
@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a  player</h1>
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
      <form method="post" action="{{ route('players.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="minutes_played">minutes played</label>
              <input type="text" class="form-control" name="minutes_played"/>
          </div>
          <div class="form-group">
              <label for="games_playe">games played</label>
              <input type="text" class="form-control" name="games_played"/>
          </div>
          <div class="form-group">
              <label for="injury">injury</label>
              <input type="text" class="form-control" name="injury"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add player</button>
      </form>
  </div>
</div>
</div>
@endsection