// Method 4: client-side-only solution (SVG -> Canvas -> PNG)
// Problem: has a security error in Safari
var canvas = document.createElement('canvas');
canvas.width = svgSize.width;
canvas.height = svgSize.height;
var ctx = canvas.getContext('2d');

var img = document.createElement('img');
img.setAttribute('src', 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svgData))));
img.onload = function() {
    ctx.drawImage(img, 0, 0);
    window.open(canvas.toDataURL('image/png'));
};