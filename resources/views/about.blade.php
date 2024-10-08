<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K About</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0"
      style="background-image: url('{{  asset('images/bg-main-all.gif') }}');">
        {{-- lah ini apa yaa yang di bawah???
        ini komponen, cara ngeditnya masuk ke views/components disitu ada navbar. --}}
    <x-navbar class="w-full"/>

    <div class="p-6 m-4 text-left bg-white/40 rounded-lg backdrop-blur-md text-blue-900">
        <h1 class="font-inter font-bold text-center text-3xl text-blue-900 mb-3">K About</h1>
        <p class="font-roboto font-light text-lg">
            Reach me out <a href="#" class="underline hover:text-blue-500">here !</a>
        </p>
    </div>
</body>

<footer class="text-center text-blue-900 py-4 mt-auto w-full bg-transparent">
    {{-- Social media logos go here --}}
</footer>
