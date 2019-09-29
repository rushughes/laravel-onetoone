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
