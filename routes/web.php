<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $user = Phone::find(1)->user;
    // return $user;

    // $phone = User::find(1);
    // return $phone;
    $users = User::all();


    return view('welcome',compact('users'));
});
