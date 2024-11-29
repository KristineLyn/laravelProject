<!DOCTYPE html>
<html lang="en">
<x-header :title="$title" />
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0">
    <x-navbar class="w-full" />

    <div class="body-detail bg-white/40 text-blue-900 p-6 rounded-lg backdrop-blur-md m-6">
        <h1 class="font-inter text-3xl text-center mb-6 font-bold">Create Blog Post</h1>
        <form method="POST" action="{{ route('blog.store') }}">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block font-bold">Judul:</label>
                <input type="text" id="judul" name="judul" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="author_id" class="block font-bold">Author ID:</label>
                <input type="number" id="author_id" name="author_id" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="body" class="block font-bold">Body:</label>
                <textarea id="body" name="body" rows="5" class="w-full p-2 border border-gray-300 rounded-lg" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg">Create Post</button>
        </form>
    </div>
</body>
<x-footer />
</html>
