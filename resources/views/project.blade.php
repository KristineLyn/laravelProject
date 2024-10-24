<!DOCTYPE html>
<html lang="en">
<x-header :title="$title"/>
<body class="flex flex-col items-center min-h-screen bg-cover bg-center text-white w-full h-full mt-3 p-0">
    <x-navbar class="w-full "/>

    <div class="body-detail bg-white/40 text-blue-900 p-6 rounded-lg backdrop-blur-md m-6">
        <h1 class="font-inter text-3xl text-center mb-6 font-bold">Project</h1>
        <ul>
            <li class="inline-block mr-5">
                <a href="{{ url('/scatterplot') }}"
                   class="bg-blue-900 text-white font-bold hover:text-blue-700 hover:bg-whitw-700 rounded-full px-4 py-2">
                    Scatterplot
                </a>
            </li>
        </ul>
    </div>
</body>
<x-footer/>
</html>
