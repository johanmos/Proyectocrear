<?php 

$destino = "camilo.ibarray@gmail.com";


$tabla=$_POST["dat"];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$ciudad = $_POST["ciudad"];
$telefono = $_POST['telefono'];
$comentarios= $_POST['comentarios'];
//$contenido = "Nombre: ".$nombre. "\nCorreo: ".$correo."\nTelefono: ".$telefono."\nMensaje: ".$mensaje;


$mensaje="
<html>
<head>
<title>Cotización</title>
</head>
<body>
Datos del cotizante:
Nombre: ".$nombre."
Correo: ".$correo."
Telefono: ".$telefono."
Ciudad: ".$ciudad."

<p>Datos que el cliente desea cotizar</p>
".$tabla."

Comentarios adicionales: 
".$comentarios."
</body>
</html>";

mail($destino,"Contacto",$mensaje);
//header("Location:gracias.html");  
echo "Correo Enviado";
?>