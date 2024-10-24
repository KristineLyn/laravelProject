<!DOCTYPE html>
<html lang="en">
<x-header :title="$title"/>
<style>
        #scatterplot {
            margin: auto;
            max-width: 1000px;
        }
        .dot:hover {
            stroke: black;
            stroke-width: 1.5;
        }
        #tooltip {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px;
            border-radius: 5px;
            pointer-events: none;
        }
</style>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 id="title" class="text-center text-3xl font-bold mb-4">Scatterplot Graph of Cyclist Data</h1>
        <div id="scatterplot" class="bg-white shadow-md p-4 rounded"></div>
        <div id="legend" class="text-center mt-4">
            <p>Legend: Cyclist Data Scatterplot  <br> 
            By : Kristine Lyn</p>
        </div>
    </div>
    <div id="tooltip" class="hidden"></div>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="{{ asset('js/scatterplot.js') }}"></script>
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
</body>
</html>
