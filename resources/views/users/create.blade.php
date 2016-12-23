@extends('layout')

@section('content')
  <h2>All Users</h2>

  <form method="POST" action="" class="form">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="UserName">User Name</label>
      <input  id="username" type="text" class="form-control" name="name" placeholder="Type in username" value="{{ old('body') }}">
    </div>
    <div class="form-group">
      <label for="Balance">Initial Balance</label>
      <input  id="balance" type="text" class="form-control" name="balance" placeholder="Initial Deposit" value="{{ old('body') }}">
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

@stop