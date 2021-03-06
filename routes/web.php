<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UsersController@index');

Route::get('users/new', 'UsersController@new');
Route::post('users/new', 'UsersController@create');

Route::get('users/{user}', 'UsersController@show');

Route::post('users/{user}/transactions', 'TransactionsController@save');

/*
// Sample routes & controller functions
// create & save
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@save');

// show one, edit and update
Route::get('users/1', 'CardsController@show');
Route::get('users/1/edit', 'UsersController@edit');
Route::put('users/update', 'UsersController@update');

// destroy
Route::delete('users/1', 'UsersController@destroy');
*/
/*
Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');
*/