<?php

/**
*/

@session_start();

include_once("datos_conexion_bd.php");

$conn=new mysqli($servername, $username, $password, $db_name);
if($conn-> connect_error){ // sirve para php > 5.2.9
	die("Connection failed ".$conn-> connect_error);
} 
	
	echo "Connection Succesfully";



//Insertar datos en la base de datos!!

$sql= "INSERT INTO user(name, username, password) VALUES ('harry','james','potter')";

if($conn->query($sql)==TRUE){
	echo "Guardada satisfactoriamente";
}else{
	echo "Error: ".$sql."<br>".$conn->error;
}


//Seleccionar Datos en la base de datos!!

$sql= "SELECT * FROM user";
$result=$conn->query($sql);
if($result->num_rows>0){
	echo "Guardada satisfactoriamente";
}else{
	echo "Error: ".$sql."<br>".$conn->error;
}


//Eliminar Datos en la base de datos!!
//actualizar Datos en la base de datos!!


//Como cerrar la conexion//
	$conn->close();


?>