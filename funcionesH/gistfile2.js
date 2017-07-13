// Method 2: Send chart config to Highcharts export server (JSON -> Highcharts server -> PNG URL)
var data = {
    options: JSON.stringify(chartConfig),
    filename: filename,
    type: 'image/png',
    async: true
};

var exportUrl = 'http://export.highcharts.com/';
$.post(exportUrl, data, function(data) {
    var url = exportUrl + data;
    window.open(url);
});
