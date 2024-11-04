<!DOCTYPE html>
<html lang="en">
<x-header :title="$title"/>
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0">
    <x-navbar class="w-full "/>

    <div class="body-detail bg-white/40 text-blue-900 p-6 rounded-lg backdrop-blur-md m-6">
        <article class="mb-8">
            <h2 class="font-inter text-lg font-semibold mb-2">{{ $post['judul'] }}</h2>
            <h3 class="font-inter text-lg font-semibold mb-2">{{ $post -> author -> name }}</h3>
            <p class="font-roboto font-light text-base mb-4">{{ $post['body'] }}</p>
            <a href="/blog" class="font-roboto text-sky-200 hover:underline font-bold">Back</a>
        </article>
    </div>
</body>
<x-footer/>
</html>
