// Method 3: simple phantomjs server to create a PNG from the svg data (SVG -> phantomjs -> PNG)
// see https://github.com/elasticsales/flask-common/blob/master/flask_common/png.js
var svg = $chartEl.find('svg')[0];
var svgSize = svg.getBoundingClientRect();
var svgData = new XMLSerializer().serializeToString( svg );
var url = '/render_png/?' + $.param({
    svg: svgData,
    filename: filename
});