var datos="";
window.onload=load2;
function load2(){

 if(sessionStorage.getItem("contador")==undefined){
		contador=0;
		sessionStorage.setItem("contador",contador);
		document.getElementById('CartCount').innerHTML="0";
	}else{	
		contador=parseInt(sessionStorage.getItem("contador"));
		document.getElementById('CartCount').innerHTML=""+contador;}

	/*Se consulta el carro guardado*/
			
		var numItem=0;
		var cont=1;
		do{
				objGuardado=sessionStorage.getItem(numItem) ;
				if(objGuardado==null || objGuardado=="" || objGuardado==undefined){
					numItem++;
				}else{
					
					console.log("contador "+cont+" numitem: "+numItem);
					objFinal=JSON.parse(objGuardado);
						
					//datos=datos+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'><a href='' style='color: red;' onclick='return eliminarItem("+i+")'>Eliminar</a></span></div></div></div><br><br>";	
					datos=datos+"<div class='ajaxcart__product'><div class='ajaxcart__row' data-line='1'><div class='grid'><div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a><span class='ajaxcart__product-meta'></span></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'>$34.00 USD</span></div></div></div></div></div></div><br>";
					cont++;
					numItem++;
						}
				
			}while(cont<sessionStorage.length);

		document.getElementById('datos').innerHTML=datos;		
	}

	function eliminarItem(pos){
		alert("entro a eliminar: "+pos);
		sessionStorage.removeItem(pos);
		contador=parseInt(sessionStorage.getItem("contador"));
    	contador=contador-1;
    	 if(contador<0){
		contador=0;
		
		document.getElementById('CartCount').innerHTML="0";
		}else{			
		document.getElementById('CartCount').innerHTML=""+contador;}
		console.log(contador);
		sessionStorage.setItem("contador",contador);
		
	}

function addToCart(idselected){
	 		for (var abc = 0; abc < arrayJS.length ; abc++){
			
			if(arrayJS[abc]["idproducto"]==idselected){
				var idArray2=abc;}

			}

	 	contador=parseInt(sessionStorage.getItem("contador"));
    	contador=contador+1;
    	//cotizacion.push(arrayJS[idselected]);
    	var jsonStr=JSON.stringify(arrayJS[idArray2]);
    	var notify = null;
    	if (typeof(Storage) !== "undefined"){
    		/*for (var k = 1; k < sessionStorage.length ; k++) {
				obj1=sessionStorage.getItem(k) ;
    			obj2=JSON.parse(objGuardado);
				console.log("item: "+i+" es:"+obj2.idproducto );
				if(obj2.idproducto==arrayJS[idArray2]["idproducto"]){
					 
					 notify = new Notification( "Error!", {body: 'Producto Repetido! :)',icon: 'assets/images/warning.png'});
					return false;
				}
			}*/
			var numItem=0;
			var cont=1;
			//alert("length: "+sessionStorage.length);
			do{
				objGuardado=sessionStorage.getItem(numItem) ;
				if(objGuardado==null || objGuardado=="" || objGuardado==undefined){
					numItem++;
				}else{
					obj2=JSON.parse(objGuardado);
					if(obj2.idproducto==arrayJS[idArray2]["idproducto"]){
					 alert("Repetido");
					 notify = new Notification( "Error!", {body: 'Producto Repetido! :)',icon: 'assets/images/warning.png'});
					return false;
					}	
					cont++;
					numItem++;
						}
				checkboxes="";
			}while(cont<sessionStorage.length);
			
    		sessionStorage.setItem(numItem, jsonStr);
    		sessionStorage.setItem("contador",contador);
    		alert("longitud: "+numItem);
    	} else{

    	}    	
    	document.getElementById('CartCount').innerHTML=""+contador;
    	datos="";
    	var notification = null;
    	/*for (var i = 1; i < sessionStorage.length ; i++) {
				objGuardado=sessionStorage.getItem(i) ;
    			objFinal=JSON.parse(objGuardado);
				console.log("item: "+i+" es:"+objFinal.imagen1 );
				//datos=datos+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'><a href='' style='color: red;' onclick='return eliminarItem("+i+")'>Eliminar</a></span></div></div></div><br><br>";}
				datos=datos+"<div class='ajaxcart__product'><div class='ajaxcart__row' data-line='1'><div class='grid'><div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a><span class='ajaxcart__product-meta'></span></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'>$34.00 USD</span></div></div></div></div></div></div><br>";}				
		*/	

		var numItem2=0;
		var cont2=1;
		do{
				objGuardado2=sessionStorage.getItem(numItem2) ;
				if(objGuardado2==null || objGuardado2=="" || objGuardado2==undefined){
					numItem2++;
				}else{
					
					console.log("contador "+cont2+" numitem: "+numItem2);
					objFinal2=JSON.parse(objGuardado2);
						
					//datos=datos+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'><a href='' style='color: red;' onclick='return eliminarItem("+i+")'>Eliminar</a></span></div></div></div><br><br>";	
					datos=datos+"<div class='ajaxcart__product'><div class='ajaxcart__row' data-line='1'><div class='grid'><div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal2.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal2.nombre+"</a><span class='ajaxcart__product-meta'></span></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'>$34.00 USD</span></div></div></div></div></div></div><br>";
					cont2++;
					numItem2++;
						}
				
			}while(cont2<sessionStorage.length);		


			document.getElementById('datos').innerHTML=datos;
			
			
			

                    if (!('Notification' in window)) {
                        // el navegador no soporta la API de notificaciones
                        alert('Su navegador no soporta la API de Notificaciones :(');
                        return;
                    } else if (Notification.permission === "granted") {
                        // Se puede emplear las notificaciones

                        notification = new Notification( "cotizacion", {body: 'Producto agregado Exitosamente! :)',icon: 'assets/images/shopping-cart.png'});
                        	setTimeout(function() {
        				  notification.close()
      						}, 2000);

                    } else if (Notification.permission !== 'denied') {
                        // se pregunta al usuario para emplear las notificaciones
                        Notification
                                .requestPermission(function(permission) {
                            if (permission === "granted") {
                                notification = new Notification(
                                        "Hola Mundo");
                            }
                        });
                    }

			 }