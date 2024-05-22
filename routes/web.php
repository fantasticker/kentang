<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'home']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // Baris diatas menggunakan Route Model Binding. Jadi untuk menghubungkan route dengan model dapat dilakukan dengan menuliskan nama modelnya seperti diatas yaitu /post/{post} dan Post $post. slug ditambahkan karena query data ingin dilakukan berdasarkan slug dari url yang dikirimkan oleh view post.blade.php
    // $post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
