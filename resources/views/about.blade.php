<!DOCTYPE html>
<html lang="en">
<x-header :title="$title"/>
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0">
    {{-- lah ini apa yaa yang di bawah???
    ini komponen, cara ngeditnya masuk ke views/components disitu ada navbar. --}}
    <x-navbar class="w-full"/>
    <h1 class="font-inter text-3xl text-blue-900 text-center mb-6 mt-6 font-bold">About Me</h1>
    <div class="grid grid-cols-3 gap-4 p-6 m-4 font-roboto font-bold text-blue-900 text-left bg-transparent">
        <a href="https://github.com/KristineLyn" target="_blank" class="tile bg-white/40 rounded-lg shadow-lg p-4 flex flex-col items-center hover:bg-blue-100 transition">
            <img src="{{ asset('images/github-icon.jpg') }}" alt="github icon" class="h-12 w-12 mix-blend-multiply">
            <span class="text-sm mt-2">Github</span>
        </a>
        
        <a href="https://discord.gg/c7kjtrwT" target="_blank" class="tile bg-white/40 rounded-lg shadow-lg p-4 flex flex-col items-center hover:bg-gray-200 transition">
            <img src="{{ asset('images/discord-icon.jpg') }}" alt="discord icon" class="h-12 w-12 mix-blend-multiply">
            <span class="text-sm mt-2">Discord</span>
        </a>
        
        <a href="https://www.instagram.com/dananjayaaaaaa/profilecard/?igsh=MWtqdDVvdGtwZ3ZmNQ==" target="_blank" class="tile bg-white/40 rounded-lg shadow-lg p-4 flex flex-col items-center hover:bg-blue-200 transition">
            <img src="{{ asset('images/instagram-icon.jpg') }}" alt="instagram icon" class="h-12 w-12 mix-blend-multiply">
            <span class="text-sm mt-2">Instagram</span>
        </a>

        <a href="https://www.linkedin.com/in/i-kadek-dipastra-arka-dananjaya/" target="_blank" class="tile bg-white/40 rounded-lg shadow-lg p-4 flex flex-col items-center hover:bg-blue-100 transition">
            <img src="{{ asset('images/linkedin-icon.jpg') }}" alt="linkedin icon" class="h-12 w-12 mix-blend-multiply">
            <span class="text-sm mt-2">linkedIn</span>
        </a>
        
        <a href="https://stackoverflow.com/users/19824751/kristine" target="_blank" class="tile bg-white/40 rounded-lg shadow-lg p-4 flex flex-col items-center hover:bg-gray-200 transition">
            <img src="{{ asset('images/stackoverflow-icon.jpg') }}" alt="stackoverflow icon" class="h-12 w-12 mix-blend-multiply">
            <span class="text-sm mt-2">StackOverflow</span>
        </a>
        
        <a href="#" target="_blank" class="tile bg-white/40 rounded-lg shadow-lg p-4 flex flex-col items-center hover:bg-blue-200 transition">
            <img src="{{ asset('images/whatsapp-icon.jpg') }}" alt="whatsapp icon" class="h-12 w-12 mix-blend-multiply">
            <span class="text-sm mt-2">Whatsapp</span>
        </a>
    </div>
</body>
<x-footer/>
