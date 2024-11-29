<style>
    body {
        background-image: url('/images/bg-main-all.gif');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
</style>
<div class="relative w-full">
    <!-- Logo -->
    <div class="absolute top-2 left-4">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/main-logo-nav.png') }}" alt="Logo" class="h-10 mix-blend-multiply">
        </a>
    </div>
    <!-- Navbar -->
    <nav class="nav-menu bg-white/30 backdrop-blur-sm rounded-3xl p-4 text-center mx-auto w-max mb-4">
        <ul class="list-none p-0 flex justify-center">
            <li class="inline-block mr-5">
                <a href="{{ url('/') }}"
                   class="{{ request()->is('/') ? 'bg-blue-900 text-white' : 'text-blue-900' }} 
                   font-bold hover:text-blue-700 rounded-full px-4 py-2">
                    Home
                </a>
            </li>
            <li class="inline-block mr-5">
                <a href="{{ url('/resume') }}"
                   class="{{ request()->is('resume') ? 'bg-blue-900 text-white' : 'text-blue-900' }} 
                   font-bold hover:text-blue-700 rounded-full px-4 py-2">
                    Resume
                </a>
            </li>
            <li class="inline-block mr-5">
                <a href="{{ url('/blog') }}"
                   class="{{ request()->is('blog') ? 'bg-blue-900 text-white' : 'text-blue-900' }} 
                   font-bold hover:text-blue-700 rounded-full px-4 py-2">
                    Blog
                </a>
            </li>
            <li class="inline-block">
                <a href="{{ url('/project') }}"
                   class="{{ request()->is('project') ? 'bg-blue-900 text-white' : 'text-blue-900' }} 
                   font-bold hover:text-blue-700 rounded-full px-4 py-2">
                    Project
                </a>
            </li>
            <li class="inline-block">
                <a href="{{ url('/about') }}"
                   class="{{ request()->is('about') ? 'bg-blue-900 text-white' : 'text-blue-900' }} 
                   font-bold hover:text-blue-700 rounded-full px-4 py-2">
                    About
                </a>
            </li>
        </ul>
    </nav>

    <!-- Profile Dropdown -->
    <div x-data="{ open: false }" class="absolute top-4 right-4">
        @auth
            <img 
                src="{{ Auth::user()->profile_image ?? asset('images/profile-1.jpg') }}" 
                alt="Profile" 
                class="w-10 h-10 rounded-full cursor-pointer" 
                @click="open = !open"
            />
            <div 
                x-show="open" 
                @click.away="open = false" 
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 mt-2 bg-white shadow-lg rounded-md w-40 z-50"
            >
                <a 
                    href="{{ route('profile.edit') }}" 
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                >
                    Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button 
                        type="submit" 
                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    >
                        Logout
                    </button>
                </form>
            </div>
        @else
            <a href="{{ route('login') }}" 
            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
            Login
            </a>
            <a href="{{ route('register') }}" 
            class="bg-blue-500 text-white px-4 py-2 ml-4 rounded-md hover:bg-blue-600">
            Register
            </a>
        @endauth
    </div>
</div>
