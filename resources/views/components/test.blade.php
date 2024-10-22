<style>
    body {
        background-image: url('/images/bg-main-all.gif');
        background-size: cover;
        background-position: center;
    }
</style>
<div class="relative w-full" x-data="{ open: false, openProfile: false }">
    <!-- Responsive Container -->
    <div class="responsive-parent flex items-center justify-between mt-1 mb-2">

        <!-- Hamburger Icon (Visible on mobile) -->
        <button @click="open = !open" class="block md:hidden text-gray-700 focus:outline-none">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button> 
        
        <!-- Logo (left) -->
        <div class="justify-left transform md:static md:transform-none md:left-4 px-4">
            <img src="{{ asset('images/main-logo-nav-transparent.png') }}" alt="Logo" class="h-10">
        </div>

        <!-- Navbar Links (hidden on mobile, visible on desktop) -->
        <nav class="bg-white/30 backdrop-blur-sm rounded-3xl hidden p-2 justify-center text-center mx-auto md:flex md:justify-center md:static">
            <ul class="list-none p-0 flex justify-center">
                <li class="block">
                    <a href="{{ url('/') }}" 
                    class="{{ request()->is('/') ? 'bg-blue-900 text-white' : 'text-blue-900' }} 
                    font-bold hover:text-blue-700 rounded-full px-4 py-2 block">Home</a>
                </li>
                <li class="block">
                    <a href="{{ url('/profile') }}" 
                    class="{{ request()->is('profile') ? 'bg-blue-900 text-white' : 'text-blue-900' }} 
                    font-bold hover:text-blue-700 rounded-full px-4 py-2 block">Profile</a>
                </li>
                <li class="block">
                    <a href="{{ url('/blog') }}"
                     class="{{ request()->is('blog') ? 'bg-blue-900 text-white' : 'text-blue-900' }} 
                    font-bold hover:text-blue-700 rounded-full px-4 py-2 block">Blog</a>
                </li>
                <li class="block">
                    <a href="{{ url('/about') }}" 
                    class="{{ request()->is('about') ? 'bg-blue-900 text-white' : 'text-blue-900' }} 
                    font-bold hover:text-blue-700 rounded-full px-4 py-2 block">About</a>
                </li>
            </ul>
        </nav>

        <!-- Profile Icon (right) -->
        <div class="absolute right-4">
            <button @click="openProfile = !openProfile" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none mr-4 ml-6">
                <img class="h-8 w-8 rounded-full" src="{{ asset('images/profile-2.jpg') }}" alt="profile">
            </button>

            <!-- Profile Dropdown (Only visible when triggered) -->
            <div x-show="openProfile"
                 x-transition:enter="transition ease-out duration-100"
                 x-transition:enter-start="transform opacity-0 scale-95"
                 x-transition:enter-end="transform opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="transform opacity-100 scale-100"
                 x-transition:leave-end="transform opacity-0 scale-95"
                 class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                 role="menu" aria-orientation="vertical">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>

    </div>

    <!-- Mobile Navbar Links (visible only on mobile) -->
    <nav :class="{ 'block': open, 'hidden': !open }" class="bg-white/30 backdrop-blur-sm rounded-3xl p-4 text-center mx-auto w-max hidden md:hidden">
        <ul class="list-none p-0 flex flex-col space-y-4">
            <li>
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'bg-blue-900 text-white' : 'text-blue-900' }} font-bold hover:text-blue-700 rounded-full px-4 py-2">Home</a>
            </li>
            <li>
                <a href="{{ url('/profile') }}" class="{{ request()->is('profile') ? 'bg-blue-900 text-white' : 'text-blue-900' }} font-bold hover:text-blue-700 rounded-full px-4 py-2">Profile</a>
            </li>
            <li>
                <a href="{{ url('/blog') }}" class="{{ request()->is('blog') ? 'bg-blue-900 text-white' : 'text-blue-900' }} font-bold hover:text-blue-700 rounded-full px-4 py-2">Blog</a>
            </li>
            <li>
                <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'bg-blue-900 text-white' : 'text-blue-900' }} font-bold hover:text-blue-700 rounded-full px-4 py-2">About</a>
            </li>
        </ul>
    </nav>
</div>
