
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Crear Nuevo Elemento</title>


</head>
<body>
	<form name="formulario" method="post" action="guardarCategoria.php" onsubmit="return validar()" enctype="multipart/form-data">
		<table border="1">
			<tr><h2>Ingrese Datos</h2></tr>		
			<tr><td>Nombre</td>
				<td><input type="text" name="name1" value=""></td></tr>
			<tr><td>Foto</td>
				<td><input type="file" name="photo1" value=""></td></tr>
			
			
			
			<tr><td colspan="2"><input type="submit" value="Ingresar"></td></tr>
			
			
			
		</table>
	</form><br><br>
<a href="logout.php"><span>Salir</span></a><br><br>
 <a href="../principal.php"><span>Volver</span></a>
</body>
<script>
	function validar(){

		var nom = document.forms["formulario"]["name1"].value;
		var prec = document.forms["formulario"]["precio1"].value;
		var cant = document.forms["formulario"]["cantidad"].value;
		
if (nom==null || nom=="" ) {
        alert("faltan Datos");
          
	return false;
// 			if(isNaN(prec)==true)
// 				{alert("Precio incorrecta debe ser numerico");}
// 			if(isNaN(cant)=true)
// 				{alert("Cantidad incorrecta debe ser numerico");}
// 			return false;
// 		}
// else{	
// 		if(isNaN(nom)==true){
// 				return true;	
// 			 	}
}
else{
	return true;
}}
</script>
</html>
