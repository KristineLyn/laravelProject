<style>
    body {
        background-image: url('/images/bg-main-all.gif');
        background-size: cover;
        background-position: center;
    }
</style>
<div class="relative w-full">
    <!-- Logo -->
    <div class="absolute top-4 left-4">
        <img src="{{ asset('images/main-logo-nav.png') }}" alt="Logo" class="h-10 mix-blend-multiply">
    </div>
    <!-- Navbar -->
    <nav class="nav-menu bg-white/30 backdrop-blur-sm rounded-3xl p-4 text-center mx-auto w-max mb-4">
        <ul class="list-none p-0 flex justify-center">
            <li class="inline-block mr-5">
                <a href="{{ url('/') }}"
                   class="{{ request()->is('/') ? 'bg-blue-900 text-white' : 'text-blue-900' }} font-bold hover:text-blue-700 rounded-full px-4 py-2">
                    Home
                </a>
            </li>
            <li class="inline-block mr-5">
                <a href="{{ url('/profile') }}"
                   class="{{ request()->is('profile') ? 'bg-blue-900 text-white' : 'text-blue-900' }} font-bold hover:text-blue-700 rounded-full px-4 py-2">
                    Profile
                </a>
            </li>
            <li class="inline-block mr-5">
                <a href="{{ url('/blog') }}"
                   class="{{ request()->is('blog') ? 'bg-blue-900 text-white' : 'text-blue-900' }} font-bold hover:text-blue-700 rounded-full px-4 py-2">
                    Blog
                </a>
            </li>
            <li class="inline-block">
                <a href="{{ url('/about') }}"
                   class="{{ request()->is('about') ? 'bg-blue-900 text-white' : 'text-blue-900' }} font-bold hover:text-blue-700 rounded-full px-4 py-2">
                    About
                </a>
            </li>
        </ul>
    </nav>

    <!-- Profile Dropdown -->
    <div x-data="{ open: false }" class="absolute top-4 right-4">
        <div>
            <button @click="open = ! open"
                    type="button"
                    class="relative flex max-w-xs items-center rounded-full
                    bg-gray-800 text-sm focus:outline-none focus:ring-2
                    focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    id="user-menu-button"
                    aria-expanded="false"
                    aria-haspopup="true">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="{{ asset('images/profile-2.jpg') }}" alt="profile">
            </button>
        </div>

        <div x-show="open"
             x-transition:enter="transition ease-out duration-100"
             x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75"
             x-transition:leave-start="transform opacity-100 scale-100"
             x-transition:leave-end="transform opacity-0 scale-95"
             class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
             role="menu"
             aria-orientation="vertical"
             aria-labelledby="user-menu-button"
             tabindex="-1">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-0">Profil</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-1">Pengaturan</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</a>
        </div>
        
    </div>
</div>
