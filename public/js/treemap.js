const DATASETS = {
    videogames: {
      title: 'Video Game Sales by Kristine Lyn',
      description: 'Top 100 Most Sold Video Games Grouped by Platform',
      file: 'https://cdn.freecodecamp.org/testable-projects-fcc/data/tree_map/video-game-sales-data.json'
    },
    movies: {
      title: 'Movie Sales by Kristine Lyn',
      description: 'Top 100 Highest Grossing Movies Grouped By Genre',
      file: 'https://cdn.freecodecamp.org/testable-projects-fcc/data/tree_map/movie-data.json'
    },
    kickstarter: {
      title: 'Kickstarter Pledges by Kristine Lyn',
      description: 'Top 100 Most Pledged Kickstarter Campaigns Grouped By Category',
      file: 'https://cdn.freecodecamp.org/testable-projects-fcc/data/tree_map/kickstarter-funding-data.json'
    }
  };

  const width = 960;
  const height = 570;
  const color = d3.scaleOrdinal(d3.schemeCategory10);
  const svg = d3.select('#tree-map');
  const tooltip = d3.select('#tooltip');

  document.querySelectorAll('button').forEach(button => {
    button.addEventListener('click', () => {
      const dataset = DATASETS[button.getAttribute('data-set')];
      loadData(dataset);
    });
  });

  function loadData(dataset) {
    d3.select('#title').text(dataset.title);
    d3.select('#description').text(dataset.description);

    d3.json(dataset.file).then(data => {
      const root = d3.hierarchy(data)
        .eachBefore(d => d.data.id = (d.parent ? d.parent.data.id + '.' : '') + d.data.name)
        .sum(d => d.value)
        .sort((a, b) => b.value - a.value);

      d3.treemap()
        .size([width, height])
        .paddingInner(1)(root);

      svg.selectAll('*').remove();
      const cell = svg.selectAll('g')
        .data(root.leaves())
        .enter().append('g')
        .attr('transform', d => `translate(${d.x0},${d.y0})`);

      cell.append('rect')
        .attr('id', d => d.data.id)
        .attr('class', 'tile')
        .attr('width', d => d.x1 - d.x0)
        .attr('height', d => d.y1 - d.y0)
        .attr('data-name', d => d.data.name)
        .attr('data-category', d => d.data.category)
        .attr('data-value', d => d.data.value)
        .attr('fill', d => color(d.data.category))
        .on('mousemove', (event, d) => {
          tooltip.style('opacity', 1)
            .html(`Name: ${d.data.name}<br>Category: ${d.data.category}<br>Value: ${d.data.value}`)
            .style('left', event.pageX + 10 + 'px')
            .style('top', event.pageY - 28 + 'px')
            .attr('data-value', d.data.value);
        })
        .on('mouseout', () => tooltip.style('opacity', 0));

      cell.append('text')
        .attr('class', 'tile-text')
        .selectAll('tspan')
        .data(d => d.data.name.split(/(?=[A-Z][^A-Z])/g))
        .enter().append('tspan')
        .attr('x', 4)
        .attr('y', (d, i) => 13 + i * 10)
        .text(d => d);

      createLegend(root);
    });
  }

  function createLegend(root) {
    const categories = [...new Set(root.leaves().map(d => d.data.category))];
    const legend = d3.select('#legend');
    legend.selectAll('*').remove();

    const legendItem = legend.selectAll('g')
      .data(categories)
      .enter().append('g')
      .attr('transform', (d, i) => `translate(${i * 100}, 20)`);

    legendItem.append('rect')
      .attr('class', 'legend-item')
      .attr('width', 15)
      .attr('height', 15)
      .attr('fill', d => color(d));

    legendItem.append('text')
      .attr('x', 20)
      .attr('y', 12)
      .text(d => d);
  }

  // Initial load with default dataset
  loadData(DATASETS.videogames);