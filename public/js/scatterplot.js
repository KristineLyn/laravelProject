document.addEventListener("DOMContentLoaded", function () {
    const width = 800;
    const height = 500;
    const margin = { top: 50, right: 30, bottom: 50, left: 50 };

    const svg = d3.select("#scatterplot")
        .append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
        .append("g")
        .attr("transform", `translate(${margin.left}, ${margin.top})`);

    const tooltip = d3.select("#tooltip");

    d3.json('https://raw.githubusercontent.com/freeCodeCamp/ProjectReferenceData/master/cyclist-data.json')
        .then(data => {
            // Format time for the y-axis
            const formatTime = d3.timeFormat("%M:%S");

            // Parse data time into Date objects
            data.forEach(d => {
                const timeParts = d.Time.split(":");
                d.Seconds = new Date(1970, 0, 1, 0, timeParts[0], timeParts[1]);
            });

            // xScale for years
            const xScale = d3.scaleLinear()
                .domain([d3.min(data, d => d.Year) - 1, d3.max(data, d => d.Year) + 1])
                .range([0, width]);

            // yScale for time (Seconds) with inverted range
            const yScale = d3.scaleTime()
                .domain(d3.extent(data, d => d.Seconds))
                .range([height, 0]);

            // x-axis configuration
            const xAxis = d3.axisBottom(xScale).tickFormat(d3.format("d"));
            svg.append("g")
                .attr("id", "x-axis")
                .attr("transform", `translate(0, ${height})`)
                .call(xAxis);

            // y-axis configuration
            const yAxis = d3.axisLeft(yScale).tickFormat(formatTime);
            svg.append("g")
                .attr("id", "y-axis")
                .call(yAxis);

            // Dots for the scatter plot
            svg.selectAll(".dot")
                .data(data)
                .enter()
                .append("circle")
                .attr("class", "dot")
                .attr("cx", d => xScale(d.Year))
                .attr("cy", d => yScale(d.Seconds))
                .attr("r", 5)
                .attr("data-xvalue", d => d.Year)
                .attr("data-yvalue", d => d.Seconds.toISOString())    
                .on("mouseover", function (event, d) {
                    tooltip.style("left", `${event.pageX + 5}px`)
                        .style("top", `${event.pageY - 28}px`)
                        .style("opacity", 0.9)
                        .style("display", "block")
                        .html(`Year: ${d.Year}<br>Time: ${formatTime(d.Seconds)}`)
                        .attr("data-year", d.Year);
                })
                .on("mouseout", function () {
                    tooltip.style("opacity", 0).style("display", "none");
                });

            // Add a title to the scatter plot
            svg.append("text")
                .attr("x", width / 2)
                .attr("y", -10)
                .attr("text-anchor", "middle")
                .attr("id", "title")
                .text("Scatterplot Graph of Cyclist Data");
        })
        .catch(err => console.error(err));
});
