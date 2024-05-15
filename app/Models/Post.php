<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'fantasticker',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptas ullam ab atque recusandae, magnam eum debitis id minima, itaque laudantium autem accusamus totam. Earum aliquam magnam corrupti sequi voluptatum? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit debitis accusamus obcaecati quo amet sequi fuga veniam in odio possimus.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'fantasticker',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptas ullam ab atque recusandae, magnam eum debitis id minima, itaque laudantium autem accusamus totam. Earum aliquam magnam corrupti sequi voluptatum?'
            ]
        ];
    }

    public static function find($slug)
    {
        $post = Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });
        // Baris kode diatas adalah mendeklarasikan variabel $post yang menjalankan Array Helper Arr::first . Helper ini membantu untuk mereturn satu elemen array berdasarkan kondisi tertentu. Dalam kasus ini kondisinya adalah ingin mengembalikan elemen array yang sesuai dengan key-value slug. Untuk melihat hasilnya bisa dengan menjalankan dump and die.
        // dd($post);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
};
