@extends('layout')

@section('content')
  <h1>All Users</h1>

  <form method="get" class="form-inline">
    <div class="form-group">
      <label for="UserName">User Name</label>
      <input  id="username" type="text" class="form-control" name="name" placeholder="User">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

  @foreach ($users as $user)
    <div>
      <!-- For simple route, easy to implement by this way -->
      <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
      <!-- When the path is very complicated, better to use defined path() in User Model -->
      <!-- <a href="{{ $user->path() }}">{{ $user->name }}</a> -->
    </div>
  @endforeach

@stop