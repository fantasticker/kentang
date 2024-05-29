<?php

use App\Models\Post;
use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'home']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // Baris diatas menggunakan Route Model Binding. Jadi untuk menghubungkan route dengan model dapat dilakukan dengan menuliskan nama modelnya seperti diatas yaitu /post/{post} dan Post $post. slug ditambahkan karena URI yang dikirimkan menyertakan slug. misalnya URI kentang/posts/judul-artikel-1 akan diterima oleh route ini agar mengembalikan view post.
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => 'Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
