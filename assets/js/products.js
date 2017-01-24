	var contador;
	var cotizacion=[];
	function load(){
									if(contador==null){
										contador=0;
										document.getElementById('CartCount').innerHTML="0";
									}else{	document.getElementById('CartCount').innerHTML=""+contador;}
									document.getElementById("labeldescripcion").innerHTML=''+arrayJS[idselected]["descripcion"];
									//document.getElementById("labelcolores").innerHTML=''+arrayJS[idselected]["colores"];
									document.getElementById("labeltecnica").innerHTML=''+arrayJS[idselected]["tecnicamarca"];
									document.getElementById("labelnombre").innerHTML=''+arrayJS[idselected]["nombre"];
									document.getElementById("labelMedidas").innerHTML=''+arrayJS[idselected]["medidas"];
									document.getElementById("labelPrecio").innerHTML=''+arrayJS[idselected]["precio"];
									}

	function mostrarDescripcion(clicked_id){
												 	
												 		var posicion=clicked_id;
												 		document.getElementById('labeldescripcion').innerHTML=""+arrayJS[clicked_id]["descripcion"];
												 		//document.getElementById('labelcolores').innerHTML=""+arrayJS[clicked_id]["colores"];
												 		document.getElementById('labeltecnica').innerHTML=""+arrayJS[clicked_id]["tecnicamarca"];
												 		document.getElementById('labelnombre').innerHTML=""+arrayJS[clicked_id]["nombre"];
												 		document.getElementById('labelMedidas').innerHTML=""+arrayJS[clicked_id]["medidas"];
												 		document.getElementById('labelPrecio').innerHTML=""+arrayJS[clicked_id]["precio"];
												 	}
	

	 function addToCart(idselected){
    	
    	contador=contador+1;
    	if (typeof(Storage) !== "undefined"){
    		sessionStorage.setItem('prueba',JSON.stringify(arrayJS[idselected]));
    		//sessionStorage[prueba]=	
    	} else{

    	}
    	console.log(" sessionStorage "+JSON.parse(sessionStorage.getItem(sessionStorage.key("prueba") )));
    	//console.log(" sessionStorage "+JSON.parse(sessionStorage.getItem("prueba") ));

    	cotizacion.push(arrayJS[idselected]);
    	document.getElementById('CartCount').innerHTML=""+contador;
    	var datos="";
    	for (var i = 0; i < cotizacion.length ; i++) {
				datos=datos+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+cotizacion[i]["imagen1"]+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+cotizacion[i]["nombre"]+"</a><span class='ajaxcart__product-meta'>S / Red</span></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'><button type='button' class='ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text' data-id='8772444163' data-qty='0' data-line='1'><span class='icon icon-minus' aria-hidden='true'></span><span class='fallback-text'>?</span></button><input type='text' name='updates[]' class='ajaxcart__qty-num' value='1' min='0' data-id='8772444163' data-line='1' aria-label='quantity' pattern='[0-9]*'><button type='button' class='ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text' data-id='8772444163' data-line='1' data-qty='2'><span class='icon icon-plus' aria-hidden='true'></span><span class='fallback-text'>+</span></button></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'>$34.00 USD</span></div></div></div><br>";}
								
			document.getElementById('datos').innerHTML=datos; }
    	
   
 
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



	