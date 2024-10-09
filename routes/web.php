<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function (){
    return view('about', ['title' => 'About']);
});

Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'judul' => 'Judul Artikel Pertama',
                'author' => 'Dananjaya',
                'body' => 'Ini adalah deskripsi singkat tentang artikel pertama saya. Saya membahas tentang pengalaman saya dalam mempelajari Laravel dan bagaimana saya menerapkannya dalam proyek nyata.'
            ],
            [
                'id' => 2,
                'judul' => 'Proyek Website E-commerce',
                'author' => 'Dananjaya',
                'body' => 'Saya membangun sebuah situs e-commerce menggunakan Laravel dan Tailwind CSS. Proyek ini mencakup fitur seperti manajemen produk, keranjang belanja, dan sistem pembayaran online.'
            ]
        ]
    ]);
});

Route::get('/test', function () {
    return view('welcome', [
        'title' => 'Test Enviro'
    ]);
});

Route::get('/blog/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'judul' => 'Judul Artikel Pertama',
            'author' => 'Dananjaya',
            'body' => 'Ini adalah deskripsi singkat tentang artikel pertama saya. 
            Saya membahas tentang pengalaman saya dalam mempelajari Laravel 
            dan bagaimana saya menerapkannya dalam proyek nyata.'
        ],
        [
            'id' => 2,
            'judul' => 'Proyek Website E-commerce',
            'author' => 'Dananjaya',
            'body' => 'Saya membangun sebuah situs e-commerce menggunakan Laravel 
            dan Tailwind CSS. Proyek ini mencakup fitur seperti manajemen produk, 
            keranjang belanja, dan sistem pembayaran online.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });


    if (!$post) {
        abort(404);
    }
    
    return view('article', [
        'title' => 'Article',
        'post' => $post
    ]);
});
