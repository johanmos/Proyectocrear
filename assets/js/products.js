	var contador;
	var cotizacion=[];
	var objFinal;
    var objGuardado;
    var datos="";
    window.onload=load;
	function load(){

				
									
									if(sessionStorage.getItem("contador")==undefined){
										contador=0;
										sessionStorage.setItem("contador",contador);
										document.getElementById('CartCount').innerHTML="0";
									}else{	
										contador=parseInt(sessionStorage.getItem("contador"));
										document.getElementById('CartCount').innerHTML=""+contador;}
									
									document.getElementById("ProductPhotoImg").src=''+arrayJS[idselected]["imagen1"];
									
									document.getElementById("labeldescripcion").innerHTML=''+arrayJS[idselected]["descripcion"];
									//document.getElementById("labelcolores").innerHTML=''+arrayJS[idselected]["colores"];
									document.getElementById("labeltecnica").innerHTML=''+arrayJS[idselected]["tecnicamarca"];
									document.getElementById("labelnombre").innerHTML=''+arrayJS[idselected]["nombre"];
									document.getElementById("labelMedidas").innerHTML=''+arrayJS[idselected]["medidas"];
									document.getElementById("labelPrecio").innerHTML=''+arrayJS[idselected]["precio"];
									for (var i = 1; i < sessionStorage.length ; i++) {
										objGuardado=sessionStorage.getItem(i) ;
						    			objFinal=JSON.parse(objGuardado);
										console.log("item: "+i+" es:"+objFinal.imagen1 );
										datos=datos+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a><span class='ajaxcart__product-meta'>S / Red</span></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'><button type='button' class='ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text' data-id='8772444163' data-qty='0' data-line='1'><span class='icon icon-minus' aria-hidden='true'></span><span class='fallback-text'>?</span></button><input type='text' name='updates[]' class='ajaxcart__qty-num' value='1' min='0' data-id='8772444163' data-line='1' aria-label='quantity' pattern='[0-9]*'><button type='button' class='ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text' data-id='8772444163' data-line='1' data-qty='2'><span class='icon icon-plus' aria-hidden='true'></span><span class='fallback-text'>+</span></button></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'>$34.00 USD</span></div></div></div><br>";}
														
										document.getElementById('datos').innerHTML=datos;

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
	 	contador=parseInt(sessionStorage.getItem("contador"));
    	contador=contador+1;
    	//cotizacion.push(arrayJS[idselected]);
    	var jsonStr=JSON.stringify(arrayJS[idselected]);
    	//var jsonStr=JSON.stringify(arrayJS[idselected]);
    	if (typeof(Storage) !== "undefined"){

    		sessionStorage.setItem(contador, jsonStr);
    	} else{

    	}    	
    	document.getElementById('CartCount').innerHTML=""+contador;
    	datos="";
    	for (var i = 1; i < sessionStorage.length ; i++) {
				objGuardado=sessionStorage.getItem(i) ;
    			objFinal=JSON.parse(objGuardado);
				console.log("item: "+i+" es:"+objFinal.imagen1 );
				datos=datos+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a><span class='ajaxcart__product-meta'>S / Red</span></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'><button type='button' class='ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text' data-id='8772444163' data-qty='0' data-line='1'><span class='icon icon-minus' aria-hidden='true'></span><span class='fallback-text'>?</span></button><input type='text' name='updates[]' class='ajaxcart__qty-num' value='1' min='0' data-id='8772444163' data-line='1' aria-label='quantity' pattern='[0-9]*'><button type='button' class='ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text' data-id='8772444163' data-line='1' data-qty='2'><span class='icon icon-plus' aria-hidden='true'></span><span class='fallback-text'>+</span></button></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'>$34.00 USD</span></div></div></div><br>";}
								
			document.getElementById('datos').innerHTML=datos;
			sessionStorage.setItem("contador",contador);
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



	