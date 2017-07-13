// Method 1: simply use Highcharts built-in functionality (SVG -> Highcharts server -> PNG)
// Downside: won't work in webview native apps that don't handle the form response
highcharts.exportChart({
    filename: filename
});