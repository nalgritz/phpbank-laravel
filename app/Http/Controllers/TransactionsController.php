<?php

namespace App\Http\Controllers;

use App\User;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
  public function save(Request $request, User $user)
  {
    $transaction = new Transaction;

    $transaction->amount = $request->sign.$request->amount;
    $transaction->remarks = $request->remarks;

    $user->transactions()->save($transaction);

    return back();
  }

  // // This works the same
  // public function save() {
  //   return \Request::all();
  // OR
  //   return request()->all();
  // }
}
