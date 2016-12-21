@extends('layout')

@section('content')
  <h2>All Users</h2>

  <form method="POST" action="" class="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="UserName">User Name</label>
      <input  id="username" type="text" class="form-control" name="name" placeholder="Type in username">
    </div>
    <div class="form-group">
      <label for="Balance">Initial Balance</label>
      <input  id="balance" type="text" class="form-control" name="balance" placeholder="Initial Deposit">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@stop