@extends('layout')

@section('content')

  <h1>Welcome {{ $user->name }}. Your Account Detail is as below:</h1>
  <table class="table table-bordered">
    <tr>
      <td>Transaction Date</td>
      <td>Remarks</td>
      <td>Amount</td>
    </tr>
    @foreach ($user->transactions as $transaction)
      <tr>
        <td class="date">{{ $transaction->created_at }}</td>
        <td class="remarks">{{ $transaction->remarks }}</td>
        <td class="amount">{{ $transaction->amount }}</td>
      </tr>
    @endforeach
    <tr>
      <td>{{ $user->updated_at }}</td>
      <td>Close Balance</td>
      <td>{{ $user->balance }}</td>
    </tr>
  </table>

  <hr>
  <form method="POST" action="/users/{{ $user->id }}/transactions" class="form-inline">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="UserName">Username</label>
      <input id="UserName" type="text" name="name" class="form-control" value="{{$user->name}}" readonly>
    </div>
    <div class="form-group">
      <label for="DebitCredit">Action</label>
      <select id="DebitCredit" class="form-control" name="sign">
        <option value="+">Desposit</option>
        <option value="-">Withdraw</option>
      </select>
    </div>
    <div class="form-group">
      <label for="Amount">Amount</label>
      <div class="input-group">
        <div class="input-group-addon">$</div>
        <input id="amount" type="number" name="amount" class="form-control" placeholder="Amount">
      </div>
    </div>
    <div class="form-group">
      <label for="Remarks">Remarks</label>
      <input id="remarks" type="text" name="remarks" class="form-control" placeholder="remarks">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

@stop