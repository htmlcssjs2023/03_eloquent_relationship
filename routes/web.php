<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;


Route::get('/', function () {
    // $user = Phone::find(1)->user;
    // return $user;

    // $phone = User::find(1);
    // return $phone;
    $users = User::all();


    return view('welcome',compact('users'));
});
