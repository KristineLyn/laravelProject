<!DOCTYPE html>
<html lang="en">
<x-header :title="$title"/>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
    <script src="https://d3js.org/d3.v7.min.js"></script>

    <div class="mt-4 flex gap-4">
        <button id="kickstarter-btn" class="dataset-btn px-4 py-2 bg-blue-500 text-white rounded">Kickstarter</button>
        <button id="movie-btn" class="dataset-btn px-4 py-2 bg-green-500 text-white rounded">Movie Sales</button>
        <button id="videogame-btn" class="dataset-btn px-4 py-2 bg-purple-500 text-white rounded">Video Game Sales</button>
    </div>

    <h1 id="title" class="text-center text-2xl font-bold"></h1>
    <div id="description" class="text-center mb-4 text-lg"></div>
    <svg id="tree-map" height="100"></svg>
    <svg id="legend" height="100"></svg>
    <div id="tooltip" class="tooltip"></div>

    <!-- Tooltip -->
    <div id="tooltip" class="absolute hidden p-2 bg-gray-800 text-white text-sm rounded"></div>

    <!-- Treemap Container -->
    <div id="treemap" class="mt-4 w-full max-w-5xl"></div>

    <!-- Legend -->
    <div id="legend" class="mt-4 flex gap-4"></div>
    <script src="{{ asset('js/treemap.js') }}"></script>
</body>
</html>
