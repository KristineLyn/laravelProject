<!DOCTYPE html>
<html lang="en">
<x-header :title="$title"/>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
    <script src="https://unpkg.com/topojson@3"></script>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <h1 id="title" class="text-3xl font-bold mb-4">United States Educational Attainment</h1>
    <p id="description" class="text-lg text-gray-700 mb-8">Percentage of adults age 25 and older with a bachelor's degree or higher (2010-2014) <br>
        By : Kristine Lyn</p>
    
    <div id="map" class="bg-white p-4 rounded shadow-lg"></div>

    <script src="{{ asset('js/choropleth.js') }}"></script>
</body>
</html>
