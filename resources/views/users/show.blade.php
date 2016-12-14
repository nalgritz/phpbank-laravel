@extends('layout')

@section('content')

  <h1>{{ $user->name }}</h1>

  <table class="table table-bordered">
    <tr>
      <td>Transaction Date</td>
      <td>Amount</td>
    </tr>
    @foreach ($user->transactions as $transaction)
      <tr>
        <td>{{ $transaction->created_at }}</td>
        <td>{{ $transaction->amount }}</td>
      </tr>
    @endforeach
  </table>

@stop