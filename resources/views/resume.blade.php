<!DOCTYPE html>
<html lang="en">
<x-header :title="$title"/>
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0">
    {{-- lah ini apa yaa yang di bawah???
    ini komponen, cara ngeditnya masuk ke views/components disitu ada navbar. --}}
    <x-navbar class="w-full"/>
    <div class="body-detail  bg-white/40 text-blue-800 p-6 rounded-lg backdrop-blur-md m-6">
        <h1 class="font-inter text-3xl text-center font-bold mb-4">Resume</h1>
        <img src="{{ asset('images/profile-4.gif') }}" alt="Profil Saya" class="mx-auto" style="width:200px;height:200px;">
        <p class="font-roboto font-light text-lg mt-4">Name: Dananjaya</p>
        <p class="font-roboto font-light text-lg">
            Saya adalah Mahasiswa Politeknik Elektronika Negeri Surabaya
            dengan Program Studi Teknologi Rekayasa Internet.<br> Minat saya
            adalah pada bidang pengembangan aplikasi terutama Aplikasi Web.
        </p>
    </div>
</body>
<x-footer/>
</html>
