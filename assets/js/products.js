	

	function mostrarDescripcion(clicked_id){
									alert("entro a mostrar: "+clicked_id);			 	
												 		var posicion=clicked_id;
												 		document.getElementById('labeldescripcion').innerHTML=""+arrayJS[clicked_id]["descripcion"];
												 		document.getElementById('labelcolores').innerHTML=""+arrayJS[clicked_id]["colores"];
												 		document.getElementById('labeltecnica').innerHTML=""+arrayJS[clicked_id]["tecnicamarca"];
												 		document.getElementById('labelnombre').innerHTML=""+arrayJS[clicked_id]["nombre"];
												 		document.getElementById('labelMedidas').innerHTML=""+arrayJS[clicked_id]["medidas"];
												 		document.getElementById('labelPrecio').innerHTML=""+arrayJS[clicked_id]["precio"];
												 	}
													 function sumar () {
													        document.getElementById("cantidad").value++;
													    }
													 function restar () {
													      if(document.getElementById("cantidad").value>0){
													           document.getElementById("cantidad").value--;
													       }else{
													           document.getElementById("cantidad").value=0;
													       }
    };


	