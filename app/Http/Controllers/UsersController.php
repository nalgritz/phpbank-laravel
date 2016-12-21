<?php

namespace App\Http\Controllers;

// Without 'use Class' as below, any class called would be found in namespace App\Http\Controllers.
// So if you'd like to invoke certain class somewhere else, add 'use path\to\ClassName
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    // \ <-- find from absolute path
    // $users = \DB::table('users')->get();

    // Find one user by its name
    // return view('user.index', ['users' => $users]);
    // $users = User::all();
    // return view('users.index', compact('users'));

  public function index(Request $request) {
    $name = $request->input('name');
    $users = User::where('name', $name)->get();
    if ( $name ) {
      return redirect()->action('UsersController@show', ['id' => $users[0]->id]);
    } else {
      return view('users.index', compact('users'));
    }
  }

  // // 1st Approach to show specific data
  public function show($user) {
    $user = User::find($user);
    return view('users.show', compact('user'));
  }
  // 2nd Approach to show specific data => Route Model binding
  // In web.php (route) show route, got to set the variable name as same as argument in show function & return value.
  // Laravel would automatically show the item
  // User foobar as argument to show the difference


  public function new() {
    return view('users.create');
  }

  public function create(Request $request) {
    // $user = User::firstOrNew(['name' => $request->name ]);
    $validator = $this->validate($request, [
      'name' => 'unique:users'
      ]);

    $user = new User;
    $user->name = $request->name;
    $user->balance = $request->balance;
    $user->is_active = true;
    $user->save();

    if ( $user ) {
      return redirect()->action('UsersController@show', ['id' => $user->id]);
    } else {
      return back();
    }

  }
}
