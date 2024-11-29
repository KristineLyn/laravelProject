<!DOCTYPE html>
<html lang="en">
<x-header/>
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0">
    <x-navbar class="w-full "/>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="body-detail bg-white/40 text-blue-900 p-6 rounded-lg backdrop-blur-md m-6">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="body-detail bg-white/40 text-blue-900 p-6 rounded-lg backdrop-blur-md m-6">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="body-detail bg-white/40 text-blue-900 p-6 rounded-lg backdrop-blur-md m-6">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</body>
<x-footer/>
</html>
    
