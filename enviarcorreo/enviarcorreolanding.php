<?php

$destino = "camilo.ibarray@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$contenido = "Nombre: ".$nombre. "\nCorreo: ".$correo."\nTelefono: ".$telefono."\nCiudad: ".$ciudad;

mail($destino,"Landing Page",$contenido);
header("Location:../adminlogin/gracias.html");  



?>