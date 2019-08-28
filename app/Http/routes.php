<?php
use App\Post;

Route::get('/', function () {
    $posts = Post::all();
    return view('index')->with('posts', $posts);
});


Route::get('/post', function () {
    return view('post');
});
Route::auth();

Route::get('/home', 'HomeController@index');
