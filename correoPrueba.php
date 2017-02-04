<?php

//$codigo=$_POST["nombre"];
//echo "este es codigo obtenido: ".$codigo;
/*

$codigo = addslashes(htmlspecialchars($_POST["codigo"]));
$textarea = addslashes(htmlspecialchars($_POST["textarea"]));
echo " ciudad: ".$ciudad;

echo " nombre: ".$correo;

echo " codigo: ".$textarea;*/
//$nombre = addslashes(htmlspecialchars($_POST["apellido"]));
//echo "el apellido es: ".$nombre;

$tabla=$_POST["dat"];
$ciudad = $_POST["ciudad"];
$correo = $_POST["correo"];
$nombre = addslashes(htmlspecialchars($_POST["nombre"]));
$telefono = addslashes(htmlspecialchars($_POST["telefono"]));
echo $tabla;
echo $nombre;
echo $ciudad;
echo $correo;
echo $telefono;

/**************Enviar Correo*************/
//$destinatario="";
//$remitente="";
//$mensaje="";
//$mensaje = wordwrap($mensaje, 70, "\r\n");

//mail($destinatario, $remitente, $mensaje);

/****************************************/




