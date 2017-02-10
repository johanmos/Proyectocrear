
window.onload=load;
function load () {
	
			document.getElementById("tablaH").style.visibility="hidden"; 
			document.getElementById("tablaH").style.display="none";
		if(sessionStorage.getItem("contador")==undefined){
			contador=0;
			sessionStorage.setItem("contador",contador);
			document.getElementById('CartCount').innerHTML="0";
		}else{	
			contador=parseInt(sessionStorage.getItem("contador"));
			document.getElementById('CartCount').innerHTML=""+contador;}
		var hidden="";									
		var datos="";
		var checkboxes="";
		var numItem=0;
		var cont=1;
		/*for (var i = 1; i < sessionStorage.length ; i++) {
			objGuardado=sessionStorage.getItem(i) ;
			if(objGuardado==null || objGuardado=="" || objGuardado==undefined){}
			objFinal=JSON.parse(objGuardado);
			
			var res = objFinal.colores.split("/");
   			 for(var j = 0; j < res.length; j++) {
   			 	checkboxes="<input type='checkbox' id='checkbox"+objFinal.codigo+"' name='checkbox"+objFinal.codigo+"[]' onclick='return check(this.id);' value='"+res[j]+"'>"+res[j]+"<br>"+checkboxes;}
  			 	console.log("i: es"+i);

			datos=datos+"<tr class='cart__row table__section'><td class='product-name' data-label='Product'><div class='img_item'><a href='product.html' class='cart__image'><img src='"+objFinal.imagen1+"' alt='Crear'></a></div><p  class='product-title'><a href='product.html'>"+objFinal.nombre+"</a></p><div class='variant'><small>"+objFinal.descripcion+"</small></div><a href='' onclick='return eliminarItem("+i+")'  class='cart__remove'><small><h3>Eliminar</h3></small></a></td><td data-label='Codigo'><span class='h3'><span class='money' data-currency-usd=''><input readonly='true' style='border: none;' name='codigo"+objFinal.codigo+"' value='"+objFinal.codigo+"'></input></span></span></td><td data-label='Colores'>"+checkboxes+"</td><td data-label='Price'><span class='h3'><span class='money' data-currency-usd=''>"+objFinal.precio+"</span></span></td><td data-label='Quantity'><div class='js-qty'><button type='button' onclick='return restar("+objFinal.codigo+", "+objFinal.precio+");' class='js-qty__adjust js-qty__adjust--minus icon-fallback-text' data-id='' data-qty='0'><span class='icon icon-minus' aria-hidden='true'></span><span class='fallback-text'>−</span></button><input type='text' id='cantidad"+objFinal.codigo+"' class='js-qty__num' value='1' min='1' data-id='' aria-label='quantity' pattern='[0-9]*' name='updates[]' ><button type='button' onclick='return sumar("+objFinal.codigo+", "+objFinal.precio+");' class='js-qty__adjust js-qty__adjust--plus icon-fallback-text' data-id='' data-qty='11'><span class='icon icon-plus' aria-hidden='true'></span><span class='fallback-text'>+</span></button></div></td><td data-label='Total' class='text-center'><span class='h3'><span id='sub"+objFinal.codigo+"' class='money' data-currency-usd=''></span></span></td></tr>";
			hidden=hidden+"<tr class='cart__row table__section'><td class='product-name' data-label='Product'><div class='img_item'></div><p  class='product-title'><a href='product.html'>"+objFinal.nombre+"</a></p><div class='variant'><small>"+objFinal.descripcion+"</small></div></td><td data-label='Codigo'><span class='h3'><span class='money' data-currency-usd=''><input readonly='true' style='border: none;' name='codigo"+objFinal.codigo+"' value='"+objFinal.codigo+"'></input></span></span></td><td data-label='Colores'><span class='h3'><span id='colcheckbox"+objFinal.codigo+"' class='money' data-currency-usd=''></span></span></td><td data-label='Quantity'><div class='js-qty'><label id='cantidad2"+objFinal.codigo+"' class='js-qty__num' data-id='' aria-label='quantity' pattern='[0-9]*' name='updates[]' ></label></div></td></tr>";
			checkboxes="";
			}*/
			var datoslateral="";
			do{
				objGuardado=sessionStorage.getItem(numItem) ;
				if(objGuardado==null || objGuardado=="" || objGuardado==undefined){
					numItem++;
				}else{
					
					console.log("contador "+cont+" numitem: "+numItem);
						objFinal=JSON.parse(objGuardado);
						if(objFinal.colores!=null){
						var res = objFinal.colores.split(",");
			   			 for(var j = 0; j < res.length; j++) {
			   			 	checkboxes="<input style=' display: ' type='checkbox' id='checkbox"+objFinal.codigo+"' name='checkbox"+objFinal.codigo+"[]' onclick='return check(this.id);' value='"+res[j]+"'>"+res[j]+"<br>"+checkboxes;}
			  			 	//console.log("i: es"+i);
			  			 }
						datos=datos+"<tr class='cart__row table__section'><td class='product-name' data-label='Product'><div class='img_item'><a href='product.html' class='cart__image'><img src='"+objFinal.imagen1+"' alt='Crear'></a></div><p  class='product-title'><a href='product.html'>"+objFinal.nombre+"</a></p><div class='variant'><small>"+objFinal.descripcion+"</small></div><a href='' onclick='return eliminarItem("+numItem+")'  class='cart__remove'><small><h3>Eliminar</h3></small></a></td><td data-label='Codigo'><span class='h3'><span class='money' data-currency-usd=''><input readonly='true' style='border: none;' name='codigo"+objFinal.codigo+"' value='"+objFinal.codigo+"'></input></span></span></td><td align='left' data-label='Colores'>"+checkboxes+"</td><td data-label='Price'><span class='h3'><span class='money' data-currency-usd=''>"+objFinal.precio+"</span></span></td><td data-label='Quantity'><div class='js-qty'><button type='button' onclick='return restar("+objFinal.codigo+", "+objFinal.precio+");' class='js-qty__adjust js-qty__adjust--minus icon-fallback-text' data-id='' data-qty='0'><span class='icon icon-minus' aria-hidden='true'></span><span class='fallback-text'>−</span></button><input type='text' id='cantidad"+objFinal.codigo+"' class='js-qty__num' value='1' min='1' data-id='' aria-label='quantity' pattern='[0-9]*' name='updates[]' ><button type='button' onclick='return sumar("+objFinal.codigo+", "+objFinal.precio+");' class='js-qty__adjust js-qty__adjust--plus icon-fallback-text' data-id='' data-qty='11'><span class='icon icon-plus' aria-hidden='true'></span><span class='fallback-text'>+</span></button></div></td><td data-label='Total' class='text-center'><span class='h3'><span id='sub"+objFinal.codigo+"' class='money' data-currency-usd=''></span></span></td></tr>";
						hidden=hidden+"<tr class='cart__row table__section'><td class='product-name' data-label='Product'><div class='img_item'></div><p  class='product-title'><a href='product.html'>"+objFinal.nombre+"</a></p><div class='variant'><small>"+objFinal.descripcion+"</small></div></td><td data-label='Codigo'><span class='h3'><span class='money' data-currency-usd=''><input readonly='true' style='border: none;' name='codigo"+objFinal.codigo+"' value='"+objFinal.codigo+"'></input></span></span></td><td data-label='Colores'><span class='h3'><span id='colcheckbox"+objFinal.codigo+"' class='money' data-currency-usd=''></span></span></td><td data-label='Quantity'><div class='js-qty'><label id='cantidad2"+objFinal.codigo+"' class='js-qty__num' data-id='' aria-label='quantity' pattern='[0-9]*' name='updates[]' ></label></div></td></tr>";
						//datoslateral=datoslateral+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'><a href='' style='color: red;' onclick='return eliminarItem("+numItem+")'>Eliminar</a></span></div></div></div><br><br>";
						datoslateral=datoslateral+"<div class='ajaxcart__product'><div class='ajaxcart__row' data-line='1'><div class='grid'><div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a><span class='ajaxcart__product-meta'></span></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'>$34.00 USD</span></div></div></div></div></div></div><br>";
					cont++;
					numItem++;
						}
				checkboxes="";
			}while(cont<sessionStorage.length);

		document.getElementById('datahidden').innerHTML=hidden;				
		document.getElementById('tablaCotizacion').innerHTML=datos;

		
	/*	for (var m = 1; m < sessionStorage.length ; m++) {
			objGuardado=sessionStorage.getItem(m) ;
			objFinal=JSON.parse(objGuardado);
			
			datoslateral=datoslateral+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'><a href='' style='color: red;' onclick='return eliminarItem("+m+")'>Eliminar</a></span></div></div></div><br><br>";}*/
							
			document.getElementById('datos').innerHTML=datoslateral;

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

		sessionStorage.setItem("contador",contador);
		console.log(contador);
		//load();
	}

	 function sumar (idchecked, precio) {
	 	
	 		console.log("precio: "+precio);

	        document.getElementById("cantidad"+idchecked).value++;
	        document.getElementById("cantidad2"+idchecked).innerHTML=document.getElementById("cantidad"+idchecked).value;
	        var subtotal=(document.getElementById("cantidad"+idchecked).value)*precio;
	 		console.log("subtotal= "+subtotal);
	 		document.getElementById("sub"+idchecked).innerHTML=subtotal;
	    }
	 function restar (idchecked, precio) {
	 	
	      if(document.getElementById("cantidad"+idchecked).value>0){
	           document.getElementById("cantidad"+idchecked).value--;
	           
	       }else{
	           document.getElementById("cantidad"+idchecked).value=0;
	           
	       }
	       document.getElementById("cantidad2"+idchecked).innerHTML=document.getElementById("cantidad"+idchecked).value;
	       var subtotal=(document.getElementById("cantidad"+idchecked).value)*precio;
	 		console.log("subtotal= "+subtotal);
	 		document.getElementById("sub"+idchecked).innerHTML=subtotal;
    };
	/*function llenarObject(){
		var coti={};
		for (var i = 1; i < sessionStorage.length ; i++) {
				objGuardado=sessionStorage.getItem(i) ;
    			objFinal=JSON.parse(objGuardado);
				coti.push(objFinal);
		};
		return coti;
	}*/
	var checkSelected="";
	function check(idcheckbox){
		console.log("checkbox sel: "+idcheckbox);
		var checkSelected="";
		$('input[name="'+idcheckbox+'[]"]:checked').each(function(){
       		checkSelected+= $(this).val()+" ,";
       		checkSelected = checkSelected.substring(0, checkSelected.length-1);
       		console.log("colores escogidos para "+idcheckbox+" son"+checkSelected);
     		document.getElementById("col"+idcheckbox).innerHTML=checkSelected;
     	  	});
		
	}

	$(document).ready(function(){
	
		
		 
		/*$('input[name="orderBox[]"]:checked').each(function(){
       		checkboxValues+= $(this).val()+" , ";
       		checkboxValues = checkboxValues.substring(0, checkboxValues.length-1);
       	});*/
       
		$("#formularioCot").bind("submit",function(){
			// Capturamnos el boton de envío
        var btnEnviar = $("#btn-cotizar");
       alert("colores2: "+checkSelected);
       	dat=document.getElementById('tablaH').innerHTML;
       	nombre=document.getElementById('nombreUsuario').value;
       	ciudad=document.getElementById('ciudadUsuario').value;
       	telefono=document.getElementById('telefonoUsuario').value;
       	correo=document.getElementById('correoUsuario').value;
      
       	//console.log(":: "+dat);
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            //data:$(this).serialize(),
            data: {dat: dat, nombre: nombre, ciudad: ciudad, telefono: telefono, correo: correo},
            beforeSend: function(){
                /*
                * Esta función se ejecuta durante el envió de la petición al
                * servidor.
                * */
                // btnEnviar.text("Enviando"); Para button <button></button>
                btnEnviar.val("Enviando"); // Para input de tipo button
                btnEnviar.attr("disabled","disabled");
            },
             complete:function(data){
                /*
                * Se ejecuta al termino de la petición
                * */
                btnEnviar.val("Enviar formulario");
                btnEnviar.removeAttr("disabled");
            },
            success: function (respuesta){
            			  //location.href ="correoPrueba.php";
						console.log("data: "+respuesta);
						 $("#respuesta").html(respuesta);
					},
			 error: function(data){
                /*
                * Se ejecuta si la peticón ha sido erronea
                * */
                alert("Problemas al tratar de enviar el formulario");
            }		
		});
		return false;
	});
});
