<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;

Route::get('/', function () {
    // $user = Phone::find(1)->user;
    // return $user;

    // $phone = User::find(1);
    // return $phone;
    // $users = User::all();


    //=============  ONE TO MANY RELATIONSHIP =========
    // $post = Post::find(3)->comments;
    // return $post;


    // $posts = Post::with('comments')->get();
    // return $posts;


    // $posts = Post::find(1);
    // return $posts;

    // $posts = Post::all();
    // return $posts;

    // How many categories are available under post
    // $posts = Post::with('categories')->get();
    // // return $posts;


    // Which post are available under category

    $categories = Category::with('posts')->get();
    // return $categories;

    return view('welcome',compact('categories'));
});
