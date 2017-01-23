	var contador;
	var cotizacion=[];
	function load(){
									if(contador==null){
										contador=0;
										document.getElementById('CartCount').innerHTML="0";
									}else{
									document.getElementById('CartCount').innerHTML=""+contador;}
									document.getElementById("labeldescripcion").innerHTML=''+arrayJS[idselected]["descripcion"];
									document.getElementById("labelcolores").innerHTML=''+arrayJS[idselected]["colores"];
									document.getElementById("labeltecnica").innerHTML=''+arrayJS[idselected]["tecnicamarca"];
									document.getElementById("labelnombre").innerHTML=''+arrayJS[idselected]["nombre"];
									document.getElementById("labelMedidas").innerHTML=''+arrayJS[idselected]["medidas"];
									document.getElementById("labelPrecio").innerHTML=''+arrayJS[idselected]["precio"];
									}

	function mostrarDescripcion(clicked_id){
												 	
												 		var posicion=clicked_id;
												 		document.getElementById('labeldescripcion').innerHTML=""+arrayJS[clicked_id]["descripcion"];
												 		document.getElementById('labelcolores').innerHTML=""+arrayJS[clicked_id]["colores"];
												 		document.getElementById('labeltecnica').innerHTML=""+arrayJS[clicked_id]["tecnicamarca"];
												 		document.getElementById('labelnombre').innerHTML=""+arrayJS[clicked_id]["nombre"];
												 		document.getElementById('labelMedidas').innerHTML=""+arrayJS[clicked_id]["medidas"];
												 		document.getElementById('labelPrecio').innerHTML=""+arrayJS[clicked_id]["precio"];
												 	}
	

	 function addToCart(idselected){
    	//alert('id2: '+idselected);
    	alert('prueba '+contador);
    	contador=contador+1;
    	cotizacion.push(arrayJS[idselected]);
    	document.getElementById('productoSel').innerHTML=""+cotizacion["nombre"];
    	//alert('nombre: '+cotizacion["descripcion"]);
    	document.getElementById('CartCount').innerHTML=""+contador;
    	//var theDiv=document.getElementById('test');
    	var datos;
    	for (var i = 0; i < cotizacion.length ; i++) {
				datos=document.getElementById('test').innerHTML+"<tr><td>Nombre " + cotizacion[i]["nombre"] +"is:  </td><br><td>"+ i+" </td></tr>";
									
			}
			document.getElementById('test').innerHTML=datos;
    	
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



	