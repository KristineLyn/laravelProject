<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
    <title>Profil</title>
</head>
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0"
      style="background-image: url('{{ asset('images/bg-main-all.gif') }}');">

    {{-- lah ini apa yaa yang di bawah???
    ini komponen, cara ngeditnya masuk ke views/components disitu ada navbar. --}}
    <x-navbar class="w-full "/>

    <div class="body-detail  bg-white/40 text-blue-800 p-6 rounded-lg backdrop-blur-md m-6">
        <h1 class="text-3xl text-center font-bold mb-4">My Profile</h1>
        <img src="{{ asset('images/profile-4.gif') }}" alt="Profil Saya" style="width:200px;height:200px;">
        <p class="text-lg mt-4">Name: Apalah</p>
        <p class="text-lg">Saya adalah Mahasiswa Politeknik Elektronika Negeri Surabaya
            dengan Program Studi Teknologi Rekayasa Internet. Minat saya
            adalah pada bidang jaringan terutama pada Administrasi Jaringan.
        </p>
    </div>
</body>
</html>
