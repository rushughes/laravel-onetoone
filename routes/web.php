<?php

use App\Address;
use App\User;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert/{id}', function($id) {
  $user = User::findOrFail($id);
  $address = new Address(['name'=>'555 Houston Avenue NY NY 11218']);
  $user->address()->save($address);
});

Route::get('/update/{id}', function($id) {
  // $address = Address::where('user_id', $id);
  // $address = Address::where('user_id', '=', $id);
  $address = Address::whereUserId($id)->first();
  $address->name = 'Updated address in Alaska';
  $address->save();
});
