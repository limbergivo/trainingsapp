@extends ('layouts.app')
@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Players</h1>
 <a href="{{ route('players.create')}}" class="btn btn-primary">Add player</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Name</td>
          <td>Last Name</td>
          <td>Minutes played</td>
          <td>Games played</td>
          <td>Injury</td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($players as $player)
        <tr>
            <td>{{$player->name}}</td>
            <td>{{$player->last_name}}</td>
            <td>{{$player->minutes_played}}</td>
            <td>{{$player->games_played}}</td>
            <td>{{$player->injury}}</td>
            <td>
                <a href="{{ route('players.edit',$player->id)}}" class="btn btn-primary">Edit</a>
            </td>

        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>




@endsection