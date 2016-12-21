@extends('layout')

@section('content')
  <h2>All Users</h2>

  <form method="GET" class="form-inline">
    <div class="form-group">
      <label for="UserName">User Name</label>
      <input  id="username" type="text" class="form-control" name="name" placeholder="User">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <hr>
  <a class="btn btn-default" href="users/new">Create an account</a>

@stop