<!DOCTYPE html>
<html lang="en">
<x-header :title="$title"/>
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0">
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
<x-footer/>
