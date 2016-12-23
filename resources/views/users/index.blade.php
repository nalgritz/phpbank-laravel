@extends('layout')

@section('content')
  <h2>All Users</h2>

  <form method="GET" class="form-inline">
    <div class="form-group">
      <label for="UserName">User Name</label>
      <input  id="username" type="text" class="form-control" name="name" placeholder="User" value="{{ old('body') }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <!-- Show Errors if any -->
  @if( count($errors) )
    <div class="error-log bg-danger">
      @foreach($errors->all() as $error)
        <div class="error text-danger">{{ $error }}</div>
      @endforeach
    </div>
  @endif


  <hr>
  <a class="btn btn-default" href="users/new">Create an account</a>

@stop