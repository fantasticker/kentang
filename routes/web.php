<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'home']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'fantasticker',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptas ullam ab atque recusandae, magnam eum debitis id minima, itaque laudantium autem accusamus totam. Earum aliquam magnam corrupti sequi voluptatum?'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'fantasticker',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptas ullam ab atque recusandae, magnam eum debitis id minima, itaque laudantium autem accusamus totam. Earum aliquam magnam corrupti sequi voluptatum?'
        ]
    ]]);
});
Route::get('/posts/{id}', function($id){
    
})
Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
