<?php

namespace App\Http\Controllers;

use App\User;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
  public function save(Request $request, User $user)
  {
    $this->validate($request, [
      'name' => 'present',
      'amount' => 'required|integer',
      'remarks' => 'string|max:15'
      ]);

    $transaction = new Transaction;

    $transaction->amount = $request->sign.$request->amount;
    $transaction->remarks = $request->remarks;

    // Update account balance
    $user->balance += $transaction->amount;
    $user->update();

    // Save transaction
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
