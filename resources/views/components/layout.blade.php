<x-navbar class="w-full"/>

<x-header>
    Header Slot
</x-header>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{$slot}}
    </div>
</main>

<x-footer />
