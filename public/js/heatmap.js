// Fetch data
const url = "https://raw.githubusercontent.com/freeCodeCamp/ProjectReferenceData/master/global-temperature.json";
fetch(url)
    .then(response => response.json())
    .then(data => {
        const baseTemperature = data.baseTemperature;
        const monthlyVariance = data.monthlyVariance;

        const margin = { top: 50, right: 50, bottom: 100, left: 100 };
        const width = 1000 - margin.left - margin.right;
        const height = 500 - margin.top - margin.bottom;
        const cellHeight = height / 12;

        // Create SVG container
        const svg = d3.select("#heatmap")
            .append("svg")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom)
            .append("g")
            .attr("transform", `translate(${margin.left},${margin.top})`);

        // X-axis (years)
        const years = monthlyVariance.map(d => d.year);
        const xScale = d3.scaleLinear()
            .domain([d3.min(years), d3.max(years)])
            .range([0, width]);

        svg.append("g")
            .attr("id", "x-axis")
            .attr("transform", `translate(0, ${height})`)
            .call(d3.axisBottom(xScale).tickFormat(d3.format("d")));

        // Y-axis (months)
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        const yScale = d3.scaleBand()
            .domain(months)
            .range([0, height])
            .padding(0.01);
        
        svg.append("g")
            .attr("id", "y-axis")
            .call(d3.axisLeft(yScale));

        // Colors for the heat map
        const colorScale = d3.scaleQuantize()
            .domain([d3.min(monthlyVariance, d => baseTemperature + d.variance), d3.max(monthlyVariance, d => baseTemperature + d.variance)])
            .range(["#4575b4", "#91bfdb", "#fee090", "#fc8d59", "#d73027"]);

        // Cells
        svg.selectAll(".cell")
            .data(monthlyVariance)
            .enter()
            .append("rect")
            .attr("class", "cell")
            .attr("x", d => xScale(d.year))  
            .attr("y", d => yScale(months[d.month - 1]))
            .attr("width", width / (d3.max(years) - d3.min(years))) 
            .attr("height", yScale.bandwidth())
            .attr("data-month", d => d.month - 1)
            .attr("data-year", d => d.year)
            .attr("data-temp", d => baseTemperature + d.variance)
            .attr("fill", d => colorScale(baseTemperature + d.variance))
            .on("mouseover", function (event, d) {
                const tooltip = d3.select("#tooltip")
                    .style("opacity", 1)
                    .attr("data-year", d.year)
                    .html(`Year: ${d.year} <br> Temp: ${(baseTemperature + d.variance).toFixed(2)}°C`);
                tooltip.style("left", `${event.pageX + 10}px`).style("top", `${event.pageY - 28}px`);
            })
            .on("mouseout", function () {
                d3.select("#tooltip").style("opacity", 0);
            });

        // Legend
        const legend = svg.append("g")
            .attr("id", "legend")
            .attr("transform", `translate(0, ${height + 40})`);
        
        const legendColors = colorScale.range();
        legend.selectAll("rect")
            .data(legendColors)
            .enter()
            .append("rect")
            .attr("x", (d, i) => i * 40)
            .attr("width", 40)
            .attr("height", 20)
            .attr("fill", d => d);

        legend.append("text")
            .attr("x", 0)
            .attr("y", 40)
            .text("Temperature Variance");

        // Tooltip
        d3.select("body").append("div")
            .attr("id", "tooltip")
            .style("position", "absolute")
            .style("background", "#fff")
            .style("padding", "5px")
            .style("border", "1px solid #000")
            .style("opacity", 0);
    })
    .catch(error => console.error(error));
