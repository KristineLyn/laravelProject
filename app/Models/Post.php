<?php
namespace App\Models;
use Illuminate\Support\Arr;
class Post
{
    public static function all(){
        return
        [
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
        ];
    }
    public static function find($id)
    {
        return Arr::first(static::all(), function($post) use ($id)
        {
        return $post['id'] == $id;});
    }

}

