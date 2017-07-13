//funcion que genera la imagen de la grafica usando la libreria highcharts

function cambiaVisibilidad() {//funcion que cambia la visibilidad de un div
       var div1 = document.getElementById('chart_exchange');
       var div2 = document.getElementById('chart_exchange_canvas');
       if(div2.style.display == 'block'){
           div2.style.display = 'block';
           div1.style.display = 'none';
       }else{
          div2.style.display = 'none';
          div1.style.display = 'block';
         
         }
   }
   

  function drawInlineSVG(svgElement, canvas_id, callback) {//generar un canva y hacer un callback
    var can = document.getElementById(canvas_id);
    var ctx = can.getContext('2d');

    var img = new Image();
        img.setAttribute('src', 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svgElement))));
        img.onload = function() {
          ctx.drawImage(img, 0, 0);
          callback(can.toDataURL("image/png"));
        }
}

function cargarImagenH() {
    drawInlineSVG($('#chart_exchange').highcharts().getSVG(), "chart_exchange_canvas", function(chart_exchange) {
	console.log(chart_exchange);
        cambiaVisibilidad();
	build_pdf(chart_exchange);
    });
    return chart_exchange;
}


   function build_pdf(chart_exchange) {//generar pdf de la grafica usando highcharts
	var docDefinition = { image: chart_exchange };
	var docDefinition = {
		content: [
			{text: 'World Hello!' },
			{ image: chart_exchange, width: 600 },
		]
	};
	//pdfMake.createPdf(docDefinition).download('pdfName.pdf');
        return chart_exchange;
}

              /* global pdfMake, AmCharts */
var dd;
function htmlToPdfMake(elementID){
                                
                var fullText = "";
                    //var x = document.getElementById('htmlContent').elements;
                    //var x = $("a").parent(elementID)
                    var x = $(elementID).children();
                    $.each(x, function(index, value) {
                       //console.log(value);
                        fullText+=$(this).context.innerText + ",";
                        console.log($(this).context.innerText);
                    });

                 dd = {
                        content: [
                                fullText
                        ]
                    };
                    //pdfMake.createPdf(dd).download('optionalName.pdf');

                    //console.log(dd.content);
                    //  console.log(x);

                    //var html = $(elementID).html();

                    //$("#result").text(html);

                    //var p = $(elementID).html();

                    //$("#resultPDF").text(p);
                    return dd.content;
             }
               //Esta Funcion convierte una Etiqueta DIV en imagen png. La cual se usara para incrustrar en en el pdf
                //Autor Fernando Moutinho
              function capturarImagenDiv(imag,contenido){ 
                var img;
                    $(function() { 
                        $(document.getElementById(imag)).click(function() { //aqui se recibe como parametro la imagen y el contenido
                            html2canvas($(contenido), {
                                onrendered: function(canvas) {
                                    theCanvas = canvas;
                                    document.body.appendChild(canvas);
                                    canvas.toBlob(function(blob) {

                                      var valor=saveAs(blob, "ImagenDiv.png"); 

                                    

                                    });

                                }
                            });
                        });
                    });
                }
                //funcion para cargar contenido html
                function cargarContenido(idElemento){             
                    html2canvas(document.getElementById(idElemento), {
                        onrendered: function (canvas) {
                            var valor = canvas.toDataURL();
                            var docDefinition = {
                                content: [{
                                    image: valor
                                    //width: 500

                                }]

                            };
                           
                         
                            //pdfMake.createPdf(docDefinition).download("Score_Details.pdf");



                        }
                        });

                }
                
                
                  
                  
                   function exportCharts(elemento) {
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
// Header of the simple investment report
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

                    
                
                    docDefinition.content.push({
                            columns:[
                                    {
                                            marginTop: 40,
                                            alignment: 'center',
                                            color: '#091f3d',
                                            fontSize: 20,
                                            text: 'Contenido debajo del header'
                                    }
                            ]
                    });

                    /*docDefinition.content.push({
                            marginTop: 30,
                            marginLeft: 30,
                            color: '#091f3d',
                            text: 'Contenido probando'
                    });*/

                    /*docDefinition.content.push({
                            columns:[
                                    {
                                            width: '25%',
                                            marginTop: 7,
                                            canvas:[
                                                    {
                                                            type: 'ellipse',  
                                                            x: 5, y: 10, // position
                                                            color: '#ffffff', //background
                                                            lineColor: '#f79727', // border color							
                                                            lineWidth: 2, // border width							
                                                            r1: 7, r2: 7 // width, height							
                                                    },
                                                    {
                                                            type: 'rect',
                                                            x: 11, 
                                                            y: 10,
                                                            w: 530, 
                                                            h: 1,
                                                            lineColor: '#f79727',
                                                            color: '#f79727',
                                                    },
                                                    {
                                                            type: 'ellipse',  
                                                            x: 541, y: 10, // position
                                                            color: '#ffffff', //background
                                                            lineColor: '#f79727', // border color							
                                                            lineWidth: 2, // border width							
                                                            r1: 7, r2: 7 // width, height							
                                                    }
                                            ]
                                    }
                            ]
                    });*/
		
			
                    /*docDefinition.content.push({ 	
                            marginTop: 15,				
                            columns:[
                                    {
                                            width: '35%',
                                            alignment: 'center',					
                                            //marginTop: 8,
                                            color: '#09203D',
                                            fontSize: '16',
                                            text: 'Contenido probando 2'

                                    },
                                    {					 
                                            width: '35%',
                                            alignment: 'center',					
                                            //marginTop: 8,
                                            color: '#09203D',
                                            fontSize: '16',
                                            text: 'Contenido header'
                                    },
                                    {					 
                                            width: '30%',
                                            alignment: 'center',					
                                            //marginTop: 8,
                                            color: '#09203D',
                                            fontSize: '16',
                                            text: 'Contenido probando 3'
                                    }
                            ]
                    });*/
                                    var valor;
                    
                                    html2canvas(elemento, {
                                        onrendered: function (canvas) {
                                             valor = canvas.toDataURL();
                                           /* var docDefinition = {
                                                content: [{
                                                    image: valor,
                                                    width: 500

                                                }]

                                            };*/
                                              
                                             
                                                 //pdfMake.createPdf(docDefinition).download("Score_Details.pdf");
                                      
                                      
                                        
                                 
                                
                    docDefinition.content.push({ 	
                            marginTop: 30,				
                            columns:[
                                   /* {
                                            width: '35%',
                                            marginLeft: 27,					
                                            marginTop: -10,
                                            color: '#2FB4F2',
                                            fontSize: '22',
                                            text: 'Contenido'

                                    },*/
                                    {					 
                                            width: 500,
                                            marginLeft: 38,					
                                            marginTop: -20,
                                            color: '#2FB4F2',
                                            fontSize: '60',
                                           image: valor
                                    }
                                    
                                   /* {		
                                            
                                            width: 500,
                                            marginLeft: 38,					
                                            marginTop: -20,
                                            color: '#2FB4F2',
                                            fontSize: '60',
                                           image: valor
                                            
                                    }*/
                            ]
                    });
                           }
                                    });
		// Header of the simple investment report
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
                                                  marginTop: 80, 
                                                    columns:[
                                                        {
                                                            "image": data,
                                                             "fit": [ 400, 600] ,
                                                            fontSize: '80',
                                                            color: '#2FB4F2',
                                                            width: '30%',
                                                            marginLeft: 27,					
                                                            marginTop: -50

                                                        },
                                                        
                                                        {					 
                                                                width: '30%',
                                                                marginLeft: 70,					
                                                                marginTop: 10,
                                                                color: '#09203D',
                                                                fontSize: '9',
                                                                text: 'PRUEBA 1'
                                                        }
                                                        /*{					 
                                                                width: '30%',
                                                                marginLeft: 38,					
                                                                marginTop: 10,
                                                                color: '#09203D',
                                                                fontSize: '9',
                                                                text: 'PRUEBA 2'
                                                        }*/
                                                    ]
                                                } );
                                            
                                            
                                   
                                    pending--;
                                        if ( pending === 0 ) {
                                            // all done - construct PDF
                                            chart.export.toPDF( {
                                              content: images

                                            }, function( data ) {
                                               console.log(data);
                                                //this.download( data, "application/pdf", "reportePDF.pdf" );
                               
                                                /*docDefinition.content.push({ 	

                                                                width: '35%',
                                                                marginLeft: 370,					
                                                                marginTop: 80,
                                                                color: '#2FB4F2',
                                                                fontSize: '22',
                                                                text: '$ 135,000'

                                        });

                                       /* docDefinition.content.push({ 	
                                           
                                                                width: '35%',
                                                                marginLeft: 445,
                                                                //marginRight: 50,						
                                                                marginTop: -27,
                                                                color: '#2FB4F2',
                                                                fontSize: '22',
                                                                text: '$ 3,000',
                                                        
                                        });*/

                                        /*docDefinition.content.push({ 	

                                                                width: '35%',
                                                                marginLeft: 270,					
                                                                marginTop: 4,
                                                                color: '#09203D',
                                                                fontSize: '16',
                                                                text: '30-Yr'

                                        });*/   
                                            //$(document).ready(function() {
                                            // htmlToPdfMake('#htmlContent');
                                            
                                          
                                            
                               var valorF;
                                       // cargarContenido();
                                       drawInlineSVG($('#chart_exchange').highcharts().getSVG(), "chart_exchange_canvas", function(chart_exchange) {
                                            console.log(chart_exchange);
                                            cambiaVisibilidad();
                                           valorF= build_pdf(chart_exchange);
                                            console.log('Entrando al Definicion footer');
                                               
                                        });
                                       console.log('Saliendo de la Definicion footer');
                                      
                                        //Aqui tambien obtenemos parrafo del div
                                       /* docDefinition.content.push({ 	

                                                                width: 500,
                                                                marginLeft: 270,					
                                                                marginTop: 2,                                        
                                                                image: cargarImagenH()
                                        });*/

                                     

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

                                        
                                        
                                      
                                      
                                      
                                   
                                     
                                        
                                        
                                        
                                        
                                        pdfMake.createPdf(docDefinition).open();
                                            } );
                                        }
                                } );
                            } );
                        }
                    }else{
                        
                         pdfMake.createPdf(docDefinition).open();
                       
                    }
                     
                    
                  }