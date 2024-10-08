<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog</title>
</head>
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0"
      style="background-image: url('{{ asset('images/bg-main-all.gif') }}');">

    {{-- lah ini apa yaa yang di bawah???
    ini komponen, cara ngeditnya masuk ke views/components disitu ada navbar. --}}
    <x-navbar class="w-full "/>

    <div class="body-detail bg-white/40 text-blue-900 p-6 rounded-lg backdrop-blur-md m-6">
        <h1 class="font-inter text-3xl text-center mb-6 font-bold">Blog dan Proyek Saya</h1>

        <h2 class="font-inter text-2xl font-semibold mb-4">Artikel</h2>
        <article class="mb-8">
            <h3 class="font-inter text-lg font-semibold mb-2">Judul Artikel Pertama</h3>
            <p class="font-roboto font-light text-base mb-4">Ini adalah deskripsi singkat tentang artikel pertama saya.
                Saya membahas tentang pengalaman saya dalam mempelajari Laravel
                dan bagaimana saya menerapkannya dalam proyek nyata.
            </p>
            <a href="#" class="font-roboto text-sky-200 hover:underline font-bold">Baca Selengkapnya</a>
        </article>

        <h2 class="font-inter text-2xl font-semibold mb-4">Proyek</h2>
        <article>
            <h3 class="font-inter text-lg font-semibold mb-2">Proyek Website E-commerce</h3>
            <p class="font-roboto text-base mb-4">Saya membangun sebuah situs e-commerce menggunakan Laravel
                dan Tailwind CSS. Proyek ini mencakup fitur seperti manajemen
                produk, keranjang belanja, dan sistem pembayaran online.
            </p>
            <a href="#" class="font-roboto text-sky-200 hover:undesrline font-bold">Lihat Proyek</a>
        </article>
    </div>
</body>
</html>
