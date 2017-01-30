
window.onload=load;
function load () {
	

		if(sessionStorage.getItem("contador")==undefined){
			contador=0;
			sessionStorage.setItem("contador",contador);
			document.getElementById('CartCount').innerHTML="0";
		}else{	
			contador=parseInt(sessionStorage.getItem("contador"));
			document.getElementById('CartCount').innerHTML=""+contador;}
									
		var datos="";
		for (var i = 1; i < sessionStorage.length ; i++) {
			objGuardado=sessionStorage.getItem(i) ;
			objFinal=JSON.parse(objGuardado);
			console.log("item: "+i+" es:"+objFinal.imagen1 );
			datos=datos+"<tr class='cart__row table__section'><td class='product-name' data-label='Product'><div class='img_item'><a href='product.html' class='cart__image'><img src='"+objFinal.imagen1+"' alt='Crear'></a></div><p class='product-title'><a href='product.html'>"+objFinal.nombre+"</a></p><div class='variant'><small>"+objFinal.descripcion+"</small></div><a href='#' class='cart__remove'><small>Eliminar</small></a></td><td data-label='Price'><span class='h3'><span class='money' data-currency-usd='$89.00'>"+objFinal.precio+"</span></span></td><td data-label='Quantity'><div class='js-qty'><button type='button' class='js-qty__adjust js-qty__adjust--minus icon-fallback-text' data-id='' data-qty='0'><span class='icon icon-minus' aria-hidden='true'></span><span class='fallback-text'>−</span></button><input type='text' class='js-qty__num' value='1' min='1' data-id='' aria-label='quantity' pattern='[0-9]*' name='updates[]' id='updates_8772462979'><button type='button' class='js-qty__adjust js-qty__adjust--plus icon-fallback-text' data-id='' data-qty='11'><span class='icon icon-plus' aria-hidden='true'></span><span class='fallback-text'>+</span></button></div></td><td data-label='Total' class='text-center'><span class='h3'><span class='money' data-currency-usd='$89.00'>$89.00</span></span></td></tr>";
			}
						
		document.getElementById('tablaCotizacion').innerHTML=datos;

		var datoslateral="";
		for (var i = 1; i < sessionStorage.length ; i++) {
			objGuardado=sessionStorage.getItem(i) ;
			objFinal=JSON.parse(objGuardado);
			
			datoslateral=datoslateral+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a><span class='ajaxcart__product-meta'>S / Red</span></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'>$34.00 USD</span></div></div></div><br><br>";}
							
			document.getElementById('datos').innerHTML=datoslateral;

}