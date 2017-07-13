<script src='pdfmake/pdfmake.min.js'></script>
<script src='pdfmake/vfs_fonts.js'></script>
<script src='pdfmake/script.js'></script>      


<center>
			<button onclick="examplereport();">Mortgage PDF</button>
		</center>
<script>
	function examplereport(){
	
	var imagen ="/casa.JPG";			
		// Document general definition and css clases	
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
					color: '#091f3d',
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
			text: 'REAL ESTATE DONE RIGHT.'
		});

				
		docDefinition.content.push({
			columns:[
				{
					marginTop: 30,
					alignment: 'center',
					color: '#091f3d',
					fontSize: 20,
					text: 'Monthly Cost Calculator'
				}
			]
		});
		
		docDefinition.content.push({
			marginTop: 25,
			marginLeft: 30,
			color: '#091f3d',
			text: 'ASSUMPTIONS'
		});
		
		docDefinition.content.push({
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
		});
		
			
		docDefinition.content.push({ 	
			marginTop: 20,				
			columns:[
				{
					width: '35%',
					alignment: 'center',					
					//marginTop: 8,
					color: '#09203D',
					fontSize: '16',
					text: 'PROPERTY AMOUNT'
					
				},
				{					 
					width: '35%',
					alignment: 'center',					
					//marginTop: 8,
					color: '#09203D',
					fontSize: '16',
					text: 'DOWN PAYMENT'
				},
				{					 
					width: '30%',
					alignment: 'center',					
					//marginTop: 8,
					color: '#09203D',
					fontSize: '16',
					text: ''
				}
			]
		});
		
		docDefinition.content.push({ 	
			marginTop: 20,				
			columns:[
				{
					width: '35%',
					marginLeft: 27,					
					marginTop: -20,
					color: '#2FB4F2',
					fontSize: '22',
					text: '$ 145,000'
					
				},
				{					 
					width: '35%',
					marginLeft: 38,					
					marginTop: -20,
					color: '#2FB4F2',
					fontSize: '22',
					text: '$ 10,000'
				},
				{					 
					width: '30%',
					text: ''
				}
			]
		});
		
		docDefinition.content.push({ 	
			marginTop: 40,				
			columns:[
				{
					width: '40%',
					marginLeft: 27,					
					marginTop: -20,
					color: '#2FB4F2',
					fontSize: '50',
					text: 'AQUI VA LA IMAGEN'
					
				},
				{					 
					width: '30%',
					marginLeft: 38,					
					marginTop: 10,
					color: '#09203D',
					fontSize: '16',
					text: 'MORTGAGE VALUE'
				},
				{					 
					width: '30%',
					marginLeft: 38,					
					marginTop: 10,
					color: '#09203D',
					fontSize: '16',
					text: 'YEARLY TAX'
				},
			]
		});
		
		docDefinition.content.push({ 	
			 
					width: '35%',
					marginLeft: 270,					
					marginTop: -130,
					color: '#2FB4F2',
					fontSize: '22',
					text: '$ 135,000'
			
		});
		
		docDefinition.content.push({ 	
			 
					width: '35%',
					marginLeft: 445,
					//marginRight: 50,						
					marginTop: -27,
					color: '#2FB4F2',
					fontSize: '22',
					text: '$ 3,000'
			
		});
		
		docDefinition.content.push({ 	
			 
					width: '35%',
					marginLeft: 270,					
					marginTop: 4,
					color: '#09203D',
					fontSize: '16',
					text: '30-Yr'
			
		});
		
		docDefinition.content.push({ 	
			 
					width: '35%',
					marginLeft: 310,					
					marginTop: -14,
					color: '#09203D',
					fontSize: '12',
					text: 'Mortgage at'	
		});
		
		docDefinition.content.push({ 	
			 
					width: '35%',
					marginLeft: 270,					
					marginTop: 2,
					color: '#09203D',
					fontSize: '16',
					text: '3,6% Interest Rate'	
		});
		
		docDefinition.content.push({
			marginTop: 100,
			marginLeft: 30,
			color: '#091f3d',
			//bold: true,
			text: 'ESTIMATE'
		});
		
		docDefinition.content.push({
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
		});
		
		
		
		
		
	docDefinition.content.push({ 	
			marginTop: 40,				
			columns:[
				{
					width: '40%',
					marginLeft: 27,					
					marginTop: -20,
					color: '#2FB4F2',
					fontSize: '50',
					text: 'AQUI VA LA IMAGEN'
					
				},
				{					 
					width: '40%',
					//marginLeft: 50,					
					//marginTop: 10,
					alignment:'center',
					color: '#09203D',
					fontSize: '18',
					text: 'Monthly Payments'
				},
			]
		});
		
		docDefinition.content.push({
			width: '25%',
			marginTop: 7,
			canvas:[
				{
					type: 'rect',
					x: 250, 
					y: -125,
					w: 15, 
					h: 15,
					lineColor: '#00ACEE',
					color: '#00ACEE',
				},
			]	
		});
		
		docDefinition.content.push({
			width: '25%',
			marginTop: 7,
			canvas:[
				{
					type: 'rect',
					x: 250, 
					y: -110,
					w: 15, 
					h: 15,
					lineColor: '#005380',
					color: '#005380',
				},
			]	
		});
		
		docDefinition.content.push({
			width: '25%',
			marginTop: 7,
			canvas:[
				{
					type: 'rect',
					x: 250, 
					y: -95,
					w: 15, 
					h: 15,
					lineColor: '#F69626',
					color: '#F69626',
				},
			]	
		});
		
		docDefinition.content.push({
			width: '25%',
			marginTop: 7,
			canvas:[
				{
					type: 'rect',
					x: 250, 
					y: -80,
					w: 15, 
					h: 15,
					lineColor: '#A7A7A7',
					color: '#A7A7A7',
				},
			]	
		});
		
		docDefinition.content.push({
			marginLeft: 270,					
			marginTop: -147,
			color: '#09203D',
			fontSize: '16',
			text: 'Pricipal & Interest'	
		});
		
		docDefinition.content.push({ 
			marginLeft: 270,					
			marginTop: 4,
			color: '#09203D',
			fontSize: '16',
			text: 'Monthly Taxes'	
		});
		
		docDefinition.content.push({
			marginLeft: 270,					
			marginTop: 4,
			color: '#09203D',
			fontSize: '16',
			text: 'Monthly Condo Fees'	
		});
		
		docDefinition.content.push({ 	
			marginLeft: 270,					
			marginTop: 4,
			color: '#09203D',
			fontSize: '16',
			text: 'PMI'	
		});
		
		docDefinition.content.push({ 	
			marginLeft: 450,					
			marginTop: -85,
			color: '#09203D',
			fontSize: '16',
			text: '$806'	
		});
		
		docDefinition.content.push({ 	
			marginLeft: 450,					
			marginTop: 4,
			color: '#09203D',
			fontSize: '16',
			text: '$160'	
		});
		
		docDefinition.content.push({ 	
			marginLeft: 450,					
			marginTop: 4,
			color: '#09203D',
			fontSize: '16',
			text: '$200'	
		});
		
		docDefinition.content.push({ 	
			marginLeft: 450,					
			marginTop: 4,
			color: '#09203D',
			fontSize: '16',
			text: '$60'	
		});
		
		docDefinition.content.push({ 	
			marginLeft: 285,					
			marginTop: 15,
			color: '#09203D',
			fontSize: '22',
			text: 'Total'	
		});
		
		docDefinition.content.push({ 	
			marginLeft: 410,					
			marginTop: -25,
			color: '#5DACF0',
			fontSize: '22',
			text: '$ 1,126'	
		});
		

		
		
		/*docDefinition.content.push({
			width: '25%',
			marginTop: 7,
			table: {
				body: [
					['Col1', 'Col2', 'Col3'],
					['1', '2', '3'],
					['1', '2', '3']
				]
			},
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
					color: '#091f3d',
				}					
			]				
		});
		
		docDefinition.footer.push({
			marginTop: -30,
			marginLeft: 190,
			color: '#fff',
			fontSize: 16,
			text: 'avantiway.com     305.229.1146'
		});
		
		docDefinition.footer.push({
			marginTop: -18,
			marginLeft: 304,
			color: '#f8940d',
			fontSize: 16,
			text: '|'
		});
		
		docDefinition.footer.push({
			marginTop: -48, 
			alignment: 'center',
			color: '#091f3d',
			fontSize: 9,
			text: 'This is an estimated amount based on assumptions and in no way a garantee. Buyers should get pre-qualified by a lender.'
		}); 
		
		// open the PDF in a new window 
		//setTimeout(function(){ pdfMake.createPdf(docDefinition).open(); }, 4500);
		pdfMake.createPdf(docDefinition).open();
	} // this close the main function
</script>