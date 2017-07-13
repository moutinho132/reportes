<doctype>

<head>
<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script src="js/filesaver.js" type="text/javascript"></script>
<script src="js/html2canvas.js" type="text/javascript"></script>  
<script src="amcharts/amcharts.js"></script>
<script src="amcharts/serial.js"></script>
<script src="amcharts/themes/light.js"></script>
<script src="amcharts/plugins/export/export.js"></script>
<script type="text/javascript">  
                //grafica     
AmCharts.makeChart( "chart1", {
	"type": "serial",
	"theme": "light",
	"autoMargins": false,
	"marginLeft": 50,
	"marginRight": 8,
	"marginTop": 30,
	"marginBottom": 26,
	"dataProvider": [ {
	"country": "USA",
	"visits": 2025
	}, {
	"country": "China",
	"visits": 1882
	}, {
	"country": "Japan",
	"visits": 1809
	}, {
	"country": "India",
	"visits": 984
	}, {
	"country": "Spain",
	"visits": 711
	} ],
	"valueAxes": [ {
	"gridColor": "#FFFFFF",
	"gridAlpha": 0.2,
	"dashLength": 0
	} ],
	"startDuration": 1,
	"graphs": [ {
	"balloonText": "[[category]]: <b>[[value]]</b>",
	"fillAlphas": 0.8,
	"lineAlpha": 0.2,
	"type": "column",
	"valueField": "visits"
	} ],
	"chartCursor": {
	"categoryBalloonEnabled": false,
	"cursorAlpha": 0,
	"zoomable": false
	},
	"categoryField": "country",
	"categoryAxis": {
	"gridPosition": "start",
	"gridAlpha": 0,
	"tickPosition": "start",
	"tickLength": 20
	},
	"export": {
	"enabled": true,
	"menu": []
	}

} );
                AmCharts.makeChart( "chart2", {
                    "type": "serial",
                    "addClassNames": true,
                    "theme": "light",
                    "autoMargins": false,
                    "marginLeft": 50,
                    "marginRight": 8,
                    "marginTop": 30,
                    "marginBottom": 26,
                    "balloon": {
                      "adjustBorderColor": false,
                      "horizontalPadding": 10,
                      "verticalPadding": 8,
                      "color": "#ffffff"
                    },

                    "dataProvider": [ {
                      "year": 2009,
                      "income": 23.5,
                      "expenses": 21.1
                    }, {
                      "year": 2010,
                      "income": 26.2,
                      "expenses": 30.5
                    }, {
                      "year": 2011,
                      "income": 30.1,
                      "expenses": 34.9
                    }, {
                      "year": 2012,
                      "income": 29.5,
                      "expenses": 31.1
                    }, {
                      "year": 2013,
                      "income": 30.6,
                      "expenses": 28.2,
                    }, {
                      "year": 2014,
                      "income": 34.1,
                      "expenses": 32.9,
                      "dashLengthColumn": 5,
                      "alpha": 0.2,
                      "additional": "(projection)"
                    } ],
                    "valueAxes": [ {
                      "gridColor": "#FFFFFF",
                      "gridAlpha": 0.2,
                      "dashLength": 0
                    } ],
                    "startDuration": 1,
                    "graphs": [ {
                      "alphaField": "alpha",
                      "balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
                      "fillAlphas": 1,
                      "title": "Income",
                      "type": "column",
                      "valueField": "income",
                      "dashLengthField": "dashLengthColumn"
                    }, {
                      "id": "graph2",
                      "balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
                      "bullet": "round",
                      "lineThickness": 3,
                      "bulletSize": 7,
                      "bulletBorderAlpha": 1,
                      "bulletColor": "#FFFFFF",
                      "useLineColorForBulletBorder": true,
                      "bulletBorderThickness": 3,
                      "fillAlphas": 0,
                      "lineAlpha": 1,
                      "title": "Expenses",
                      "valueField": "expenses"
                    } ],
                    "categoryField": "year",
                    "categoryAxis": {
                      "gridPosition": "start",
                      "gridAlpha": 0,
                      "tickPosition": "start",
                      "tickLength": 20
                    },
                    "export": {
                      "enabled": true,
                      "menu": []
                    }
                  } );

           /* AmCharts.makeChart( "chart3", {
                    "type": "serial",
                    "theme": "light",
                    "autoMargins": false,
                    "marginLeft": 50,
                    "marginRight": 8,
                    "marginTop": 30,
                    "marginBottom": 26,
                    "dataProvider": [ {
                      "date": "2012-03-01",
                      "price": 20
                    }, {
                      "date": "2012-03-02",
                      "price": 75
                    }, {
                      "date": "2012-03-03",
                      "price": 15
                    }, {
                      "date": "2012-03-04",
                      "price": 75
                    }, {
                      "date": "2012-03-05",
                      "price": 158
                    }, {
                      "date": "2012-03-06",
                      "price": 57
                    }, {
                      "date": "2012-03-07",
                      "price": 107
                    }, {
                      "date": "2012-03-08",
                      "price": 89
                    }, {
                      "date": "2012-03-09",
                      "price": 75
                    }, {
                      "date": "2012-03-10",
                      "price": 132
                    }, {
                      "date": "2012-03-11",
                      "price": 158
                    }, {
                      "date": "2012-03-12",
                      "price": 56
                    }, {
                      "date": "2012-03-13",
                      "price": 169
                    }, {
                      "date": "2012-03-14",
                      "price": 24
                    }, {
                      "date": "2012-03-15",
                      "price": 147
                    } ],
                    "valueAxes": [ {
                      "logarithmic": true,
                      "dashLength": 1,
                      "guides": [ {
                        "dashLength": 6,
                        "inside": true,
                        "label": "average",
                        "lineAlpha": 1,
                        "value": 90.4
                      } ],
                      "position": "left"
                    } ],
                    "graphs": [ {
                      "bullet": "round",
                      "id": "g1",
                      "bulletBorderAlpha": 1,
                      "bulletColor": "#FFFFFF",
                      "bulletSize": 7,
                      "lineThickness": 2,
                      "title": "Price",
                      "type": "smoothedLine",
                      "useLineColorForBulletBorder": true,
                      "valueField": "price"
                    } ],
                    "chartCursor": {
                      "valueLineEnabled": true,
                      "valueLineBalloonEnabled": true,
                      "valueLineAlpha": 0.5,
                      "fullWidth": true,
                      "cursorAlpha": 0.05
                    },
                    "dataDateFormat": "YYYY-MM-DD",
                    "categoryField": "date",
                    "categoryAxis": {
                      "parseDates": true,
                      "gridPosition": "start",
                      "gridAlpha": 0,
                      "tickPosition": "start",
                      "tickLength": 20
                    },
                    "export": {
                      "enabled": true,
                      "menu": []
                    }
              } );*/
            /**
             * Función que activa la exportación de todos los gráficos a PDF
             */                               
        </script>
<style>
	 .chartdiv {
	  width: 800px;
	  height: 220px;

	}
</style>
</head>


<body>
<center>
<div id='contenido'>
	<h1>Ejemplo de la imagen</h1>

	<button id="export">export</button>
	<div id="chart_exchange" style="width: 450px; height: 400px; margin: 0 auto"></div>

	<div id="htmlContent" >

		<div class="container-fluid">

			<div class="row">
				<div class=" col-xs-4 col-md-12 col-sm-4  col-lg-12   " style="background-color:lavender; ">Prueba de Contenido html</div>
                                <div class="col-xs-4 col-md-12 col-sm-4  col-lg-12" style="background-color:lavender; ">Prueba de Contenido html</div>
                                <div class="col-xs-4 col-md-12 col-sm-4  col-lg-12" style="background-color:lavender; ">Prueba de Contenido html</div>
                                

			</div>
		</div>

	</div>
</div>
<div class="row" id="contenido2">
	<div id="chart1" class="chartdiv" style="alignment-adjust: central"></div>
        <div id="chart2" class="chartdiv"></div>
</div>
<canvas id="chart_exchange_canvas" width="900" height="800"></canvas>
    

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src='pdfmake/pdfmake.min.js'></script>
<script src='pdfmake/vfs_fonts.js'></script>
<script src='pdfmake/script.js'></script>


</center>
<script>
//funcion para ocultar un div
function cambiaVisibilidad() {
	var div1 = document.getElementById('chart_exchange');
	var div2 = document.getElementById('chart_exchange_canvas');
	if(div2.style.display == 'block'){
		div2.style.display = 'block';
		div1.style.display = 'none';
	}else{
		div2.style.display = 'none';
		div1.style.display = 'block';
		//console.log('entra aqui');
            }
}


$('#export').click(function() {
  drawInlineSVG($('#chart_exchange').highcharts().getSVG(), "chart_exchange_canvas", function(chart_exchange) {
		//console.log(chart_exchange);
        cambiaVisibilidad();
        var opcion= convertirHtmlimg(document.getElementById('htmlContent'));
        build_pdf(chart_exchange,opcion);
                //obtenerAmchart();
       //console.log(opcion);
  });
});
var valor;

function convertirHtmlimg(elemento){

console.log('Valor de la imagen que ira en la segunda grafica');
console.log(elemento); 
        html2canvas(elemento, {
            onrendered: function (canvas) {
                     valor = canvas.toDataURL();
                     //console.log(valor);
            }

        });

return valor;
}
/*function build_pdf(chart_exchange,elementoDiv) {
    var docDefinition = new Array(); 
   
        //var docDefinition = { image: chart_exchange };
	docDefinition = {
            
        content:[
        {
            columns:[
                
               {text: 'World Hello!' },
                { image: chart_exchange, width: 600 }
                
            ]
            
        },
        {
            columns:[
           
               {text: 'World Hello!' },
               //{ image: elementoDiv ,	width: 600}
                
            ]
            
        }
                
            ]
        };
     
        
	pdfMake.createPdf(docDefinition).download('pdfName.pdf');
}*/
function build_pdf(chart_exchange,elementoDiv){
    var docDefinition = new Array(); 

    docDefinition     = {  
    // a string or { width: number, height: number }
    pageSize: 'letter',
    // by default we use portrait, you can change it to landscape if you wish
    pageOrientation: 'portrait',
    // [left, top, right, bottom] or [horizontal, vertical] or just a number for equal margins
    pageMargins: [ 30, 60, 0, 45 ], 
    "header": [],
    "footer": [],
    "content": [],			
	styles:{
		graphTitles:{
			fontSize: 10,
			color: '#0088cc',
			marginLeft: 10					
		},
		textTiles:{
			fontSize: 10,					
			marginLeft: 10,
			bold: true,					
			marginBottom: 10
		},
		textParagraph:{
			fontSize: 8,					
			marginLeft: 10,
			marginRight: 10,
			alignment: 'justify',
			lineHeight: 1.2,
			marginBottom: 15				
		},
		ulList:{
			fontSize: 8,					
			marginLeft: 10,
			marginRight: 10,
			alignment: 'justify',
			lineHeight: 1.2,
			marginBottom: 15				
		},
		prueba: {
			borderTop: 3
		},
		titleTables:{
				fontSize: 14,
				color: "#2755FF",
				marginBottom: 10
			}
		}
	};  
        docDefinition.header.push({ 
                            canvas:[
                                    {
                                            type: 'rect',
                                            x: -1, 
                                            y: 0,
                                            w: 613, 
                                            h: 55,
                                            lineColor: '#091f3d',
                                            color: '#091f3d'
                                    }					
                                    ]				
                    });
		
        docDefinition.header.push({
                            columns:[
                                    {
                                            marginTop: -47,
                                            alignment: 'left',
                                            color: '#FFFFFF',
                                            fontSize: 30,
                                            text: 'AVANTI WAY'
                                    }
                                    ]
                    });
		
        docDefinition.header.push({
                            marginTop: -19, 
                            alignment: 'left',
                            color: '#046999',//091f3d
                            fontSize: 9,
                            text: 'Contenido RIGHT.'
                    });

         docDefinition.header.push({ 
                                canvas:[
                                        {
                                                type: 'rect',
                                                x: -1, 
                                                y: 0,
                                                w: 613, 
                                                h: 55,
                                                lineColor: '#091f3d',
                                                color: '#091f3d'
                                        }					
                                ]				
                        });
	docDefinition.content.push({ 	
		marginTop: 30,				
		columns:[                                
		{					 
			width: 500,
                        height: 500,
			marginLeft: 38,					
			marginTop: 10,
			color: '#2FB4F2',
			fontSize: '100',
			image:chart_exchange
                       
		},
		{					 
			width: 500,
                        height: 500,
			marginLeft: -180,					
			marginTop: 10,
			color: '#2FB4F2',
			fontSize: '15',
			image:chart_exchange
                       
                        

		}                                                                       
		]
	});
         // Iterar a través de todos los gráficos y preparar sus imágenes para la exportación
                   var images = [];
                   
                   var dd;
                  
                    
                    
                    var pending = AmCharts.charts.length;
                    //console.log(pending);
                    //procedimiento para imprimir elementos div de la Graficas
                    
                    if(pending !=0){
                        //console.log(pending);
                    
                        for ( var i = 0; i < AmCharts.charts.length; i++ ) {
                            var chart = AmCharts.charts[ i ];
                                    chart.export.capture( {}, function() {
                                        this.toJPG( {}, function( data ) {
                                                docDefinition.content.push( {
                                                    marginTop: 50, 
                                                      columns:[
                                                          {
                                                              "image": data,
                                                               "fit": [ 300, 800] ,
                                                              fontSize: '80',
                                                              color: '#2FB4F2',
                                                              width: '100%',
                                                              marginLeft: 27,					
                                                              marginTop: -300

                                                          }
                                                        
                                                       
                                                    ]
                                                } );                                     
                                         pending--;
                                        if ( pending === 0 ) {
                                            // all done - construct PDF
                                            chart.export.toPDF( {
                                              content: images

                                            }, function( data ) {
                                               console.log(data);
                                               docDefinition.content.push({ 	
                                                        marginTop: 30,				
                                                        columns:[                                
                                                        {					 
                                                                width: 500,
                                                                height: 70,
                                                                marginLeft: 38,					
                                                                marginTop: -150,
                                                                color: '#2FB4F2',
                                                                fontSize: '100',
                                                                image:elementoDiv

                                                        }

                                                        ]
                                                });
                                                // Footer of the simple investment report
                                        docDefinition.footer.push({ 
                                                canvas:[
                                                        {
                                                                type: 'rect',
                                                                x: -1, 
                                                                y: 0,
                                                                w: 613, 
                                                                h: 45,
                                                                lineColor: '#091f3d',
                                                                color: '#091f3d'
                                                        }					
                                                ]				
                                        });

                                        docDefinition.footer.push({
                                                marginTop: -30,
                                                marginLeft: 190,
                                                color: '#fff',
                                                fontSize: 16,
                                                text: 'avantiway.com     305.229.11466'
                                        });

                                        docDefinition.footer.push({
                                                marginTop: -18,
                                                marginLeft: 304,
                                                color: '#f8940d',
                                                fontSize: 16,
                                                text: '|'
                                        });

                                        pdfMake.createPdf(docDefinition).download('reportepdf.pdf');
                                            } );
                                        }
                                } );
                            } );
                        }
                    }
                    
                   
                    //pdfMake.createPdf(docDefinition).open();
        }
        
        
        
	

    



  

function drawInlineSVG(svgElement, canvas_id, callback) {
  var can = document.getElementById(canvas_id);
  var ctx = can.getContext('2d');

  var img = new Image();
  img.setAttribute('src', 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svgElement))));
  img.onload = function() {
        ctx.drawImage(img, 0, 0);
        callback(can.toDataURL("image/png"));
  }
}


//chart
$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function(data) {

  Highcharts.chart('chart_exchange', {
    chart: {
      zoomType: 'x'
    },
    title: {
      text: 'USD to EUR exchange rate over time'
    },
    subtitle: {
      text: document.ontouchstart === undefined ?
        'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
    },
    xAxis: {
      type: 'datetime'
    },
    yAxis: {
      title: {
        text: 'Exchange rate'
      }
    },
    legend: {
      enabled: false
    },
    plotOptions: {
      area: {
        fillColor: {
          linearGradient: {
            x1: 0,
            y1: 0,
            x2: 0,
            y2: 1
          },
          stops: [
            [0, Highcharts.getOptions().colors[0]],
            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
          ]
        },
        marker: {
          radius: 2
        },
        lineWidth: 1,
        states: {
          hover: {
            lineWidth: 1
          }
        },
        threshold: null
      }
    },

    series: [{
      type: 'area',
      name: 'USD to EUR',
      data: data
    }]
  });
});
  
</script>
</body>