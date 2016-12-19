@extends('layout')

@section('content')
  <h2>All Users</h2>

  <form method="get" class="form-inline">
    <div class="form-group">
      <label for="UserName">User Name</label>
      <input  id="username" type="text" class="form-control" name="name" placeholder="User">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

@stop