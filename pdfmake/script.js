var docinfo = {
	info: {
		title: 'Reportes',
		author: 'Avanty Way',
		subject: 'Area',
		keywords: 'Tecnologia'
                
	},

	pageSize: 'A4',
	pageOrientation: 'landscape',
	pageMargins:[50,50,30,60],


   //como header y footer tienen los mismos valores se puede crear una funcion
   header:[
	    {
	    	text:'Este es mi pdf',
	    	alignment: 'center',
	    }
    ],

    header:function(currentPage, pageCount){
    	return {
    		text: currentPage.toString() + 'en' + pageCount,
	    	alignment: 'right',
	    	margin:[0,30,10,50]
    	}
    },

    footer:[
	    {
	    	text: 'Pie de Pagina',
	    	alignment: 'center',
	    }
    ],

    content:[
    {
    	text:'Pag 1',
        
    	fontSize:20,  
    	pageBreak:'after'
    },{
    	text:'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss',
    	fontSize:20, 
    	//pageBreak:'before'
    }
    
    
    
    ],
    
        
    
}
//pdfMake.createPdf(docinfo).download('name.pdf');

//pdfMake.createPdf(docinfo).open();

