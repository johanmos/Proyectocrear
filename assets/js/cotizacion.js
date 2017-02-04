
window.onload=load;
function load () {
	
			document.getElementById("tablaH").style.visibility="hidden"; 
		if(sessionStorage.getItem("contador")==undefined){
			contador=0;
			sessionStorage.setItem("contador",contador);
			document.getElementById('CartCount').innerHTML="0";
		}else{	
			contador=parseInt(sessionStorage.getItem("contador"));
			document.getElementById('CartCount').innerHTML=""+contador;}
		var hidden="";									
		var datos="";
		for (var i = 1; i < sessionStorage.length ; i++) {
			objGuardado=sessionStorage.getItem(i) ;
			objFinal=JSON.parse(objGuardado);
			console.log("item: "+i+" es:"+objFinal.imagen1 );
			datos=datos+"<tr class='cart__row table__section'><td class='product-name' data-label='Product'><div class='img_item'><a href='product.html' class='cart__image'><img src='"+objFinal.imagen1+"' alt='Crear'></a></div><p  class='product-title'><a href='product.html'>"+objFinal.nombre+"</a></p><div class='variant'><small>"+objFinal.descripcion+"</small></div><a href='' onclick='return eliminarItem("+i+")'  class='cart__remove'><small><h3>Eliminar</h3></small></a></td><td data-label='Codigo'><span class='h3'><span class='money' data-currency-usd=''><input readonly='true' style='border: none;' name='codigo"+objFinal.codigo+"' value='"+objFinal.codigo+"'></input></span></span></td><td data-label='Colores'><span class='h3'><span class='money' data-currency-usd=''>"+objFinal.colores+"</span></span></td><td data-label='Price'><span class='h3'><span class='money' data-currency-usd=''>"+objFinal.precio+"</span></span></td><td data-label='Quantity'><div class='js-qty'><button type='button' onclick='return restar("+objFinal.idproducto+", "+objFinal.precio+");' class='js-qty__adjust js-qty__adjust--minus icon-fallback-text' data-id='' data-qty='0'><span class='icon icon-minus' aria-hidden='true'></span><span class='fallback-text'>−</span></button><input type='text' id='cantidad"+objFinal.idproducto+"' class='js-qty__num' value='1' min='1' data-id='' aria-label='quantity' pattern='[0-9]*' name='updates[]' ><button type='button' onclick='return sumar("+objFinal.idproducto+", "+objFinal.precio+");' class='js-qty__adjust js-qty__adjust--plus icon-fallback-text' data-id='' data-qty='11'><span class='icon icon-plus' aria-hidden='true'></span><span class='fallback-text'>+</span></button></div></td><td data-label='Total' class='text-center'><span class='h3'><span id='sub"+objFinal.idproducto+"' class='money' data-currency-usd=''></span></span></td></tr>";
			hidden=hidden+"<tr class='cart__row table__section'><td class='product-name' data-label='Product'><div class='img_item'></div><p  class='product-title'><a href='product.html'>"+objFinal.nombre+"</a></p><div class='variant'><small>"+objFinal.descripcion+"</small></div></td><td data-label='Codigo'><span class='h3'><span class='money' data-currency-usd=''><input readonly='true' style='border: none;' name='codigo"+objFinal.codigo+"' value='"+objFinal.codigo+"'></input></span></span></td><td data-label='Colores'><span class='h3'><span class='money' data-currency-usd=''>"+objFinal.colores+"</span></span></td><td data-label='Quantity'><div class='js-qty'><label id='cantidad2"+objFinal.idproducto+"' class='js-qty__num' data-id='' aria-label='quantity' pattern='[0-9]*' name='updates[]' ></label></div></td></tr>";
			}
		document.getElementById('datahidden').innerHTML=hidden;				
		document.getElementById('tablaCotizacion').innerHTML=datos;

		var datoslateral="";
		for (var i = 1; i < sessionStorage.length ; i++) {
			objGuardado=sessionStorage.getItem(i) ;
			objFinal=JSON.parse(objGuardado);
			
			datoslateral=datoslateral+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'><a href='' style='color: red;' onclick='return eliminarItem("+i+")'>Eliminar</a></span></div></div></div><br><br>";}
							
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

	$(document).ready(function(){
		//var cotizacion=[];
		//cotizacion=llenarObject();
		/*$('#btn-cotizar').click(function(){
			var url="correoPrueba.php";
			
			$.ajax({
					type:"POST",
					url: url,
					data: $("formularioCot").serialize(),
					
					success: function (data){
						console.log("data: "+data);
						 $("#respuesta").html(data);
					}

			});
			return false;
		});*/

		$("#formularioCot").bind("submit",function(){
			// Capturamnos el boton de envío
        var btnEnviar = $("#btn-cotizar");

       	dat=document.getElementById('tablaH').innerHTML;
       	nombre=document.getElementById('nombreUsuario').value;
       	ciudad=document.getElementById('ciudadUsuario').value;
       	telefono=document.getElementById('telefonoUsuario').value;
       	correo=document.getElementById('correoUsuario').value;
       	console.log(":: "+dat);
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
