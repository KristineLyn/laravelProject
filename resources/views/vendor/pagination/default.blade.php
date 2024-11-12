@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center space-x-2 mt-6">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-1 text-gray-400 cursor-not-allowed">Previous</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-3 py-1 bg-blue-900 text-white rounded hover:bg-blue-700 transition">Previous</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="px-3 py-1 text-gray-400">{{ $element }}</span>
            @endif

            {{-- Array of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-3 py-1 bg-blue-900 text-white rounded">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-3 py-1 bg-blue-900 text-white rounded hover:bg-blue-700 transition">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-3 py-1 bg-blue-900 text-white rounded hover:bg-blue-700 transition">Next</a>
        @else
            <span class="px-3 py-1 text-gray-400 cursor-not-allowed">Next</span>
        @endif
    </nav>
@endif  