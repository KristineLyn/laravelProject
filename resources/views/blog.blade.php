<!DOCTYPE html>
<html lang="en">
<x-header :title="$title"/>
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0">
    {{-- lah ini apa yaa yang di bawah???
    ini komponen, cara ngeditnya masuk ke views/components disitu ada navbar. --}}
    <x-navbar class="w-full "/>

    <div class="body-detail bg-white/40 text-blue-900 p-6 rounded-lg backdrop-blur-md m-6">
        <h1 class="font-inter text-3xl text-center mb-6 font-bold">Blog</h1>
        @foreach ($posts as $post)
        <article class="mb-8">
            <h2 class="font-inter text-lg font-semibold mb-2">{{ $post['judul'] }}</h2>
            <h3 class="font-inter text-lg font-semibold mb-2">{{ $post -> author -> name }}</h3>
            <p class="font-roboto font-light text-base mb-4">{{ Str::limit($post['body'], 100) }} </p>
            <a href="/blog/{{ $post['id'] }}" class="font-roboto text-sky-200 hover:underline font-bold">Baca Selengkapnya</a>
        </article>
        @endforeach
    </div>

    <div class="pagination mt-4 flex justify-center">
        {{ $posts->links('vendor.pagination.default') }}
    </div>
</body>
<x-footer/>
</html>
    