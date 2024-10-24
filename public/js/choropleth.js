const countyUrl = "https://cdn.freecodecamp.org/testable-projects-fcc/data/choropleth_map/counties.json";
const educationUrl = "https://cdn.freecodecamp.org/testable-projects-fcc/data/choropleth_map/for_user_education.json";

Promise.all([d3.json(countyUrl), d3.json(educationUrl)]).then(data => {
    const countyData = data[0];
    const educationData = data[1];

    const width = 1000;
    const height = 600;

    const svg = d3.select("#map")
        .append("svg")
        .attr("width", width)
        .attr("height", height);

    const path = d3.geoPath();

    // Color scale
    const colorScale = d3.scaleThreshold()
        .domain([10, 20, 30, 40])
        .range(["#f7fbff", "#c6dbef", "#6baed6", "#2171b5", "#08306b"]);

    // Tooltip
    const tooltip = d3.select("body").append("div")
        .attr("id", "tooltip")
        .style("position", "absolute")
        .style("opacity", 0)
        .style("background-color", "white")
        .style("border", "1px solid black")
        .style("padding", "10px")
        .style("pointer-events", "none");

    // Bind education data to counties
    const eduDataMap = new Map(educationData.map(d => [d.fips, d]));

    svg.append("g")
        .selectAll("path")
        .data(topojson.feature(countyData, countyData.objects.counties).features)
        .enter()
        .append("path")
        .attr("class", "county")
        .attr("data-fips", d => d.id)
        .attr("data-education", d => eduDataMap.get(d.id) ? eduDataMap.get(d.id).bachelorsOrHigher : 0)
        .attr("d", path)
        .attr("fill", d => {
            const edu = eduDataMap.get(d.id) ? eduDataMap.get(d.id).bachelorsOrHigher : 0;
            return colorScale(edu);
        })
        .on("mouseover", (event, d) => {
            const edu = eduDataMap.get(d.id);
            tooltip.style("opacity", 1)
                .html(`${edu.area_name}, ${edu.state}: ${edu.bachelorsOrHigher}%`)
                .attr("data-education", edu.bachelorsOrHigher)
                .style("left", (event.pageX + 10) + "px")
                .style("top", (event.pageY - 28) + "px");
        })
        .on("mouseout", () => tooltip.style("opacity", 0));

    // Legend
    const legend = svg.append("g")
        .attr("id", "legend")
        .attr("transform", `translate(${width - 300}, ${height - 50})`);

    const legendData = [10, 20, 30, 40, 50];
    const legendWidth = 30;

    legend.selectAll("rect")
        .data(legendData)
        .enter()
        .append("rect")
        .attr("x", (d, i) => i * legendWidth)
        .attr("width", legendWidth)
        .attr("height", 20)
        .attr("fill", d => colorScale(d));

    legend.selectAll("text")
        .data(legendData)
        .enter()
        .append("text")
        .attr("x", (d, i) => i * legendWidth + 15)
        .attr("y", 35)
        .style("text-anchor", "middle")
        .text(d => `${d}%`);
}).catch(error => console.error(error));
