<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;

Route::get('/', function () {
    // $user = Phone::find(1)->user;
    // return $user;

    // $phone = User::find(1);
    // return $phone;
    // $users = User::all();


    //=============  ONE TO MANY RELATIONSHIP =========
    // $post = Post::find(3)->comments;
    // return $post;


    $posts = Post::with('comments')->get();
    // return $posts;

    return view('welcome',compact('posts'));
});
