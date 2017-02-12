<?php 
require_once('../conexion.php');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
						if(!$link) {
							die('Failed to connect to server: ' . mysql_error());		
							}
						
						//Select database
						$db = mysqli_select_db($link,DB_DATABASE);
						if(!$db) {
							die("Unable to select database");
						}

$idAeliminar=$_GET["id"];

$sql="DELETE FROM producto WHERE idproducto='$idAeliminar'";

$resultEliminar = $link->query($sql);

if($resultEliminar){
	//header("location: mostrar_menu.php");
	echo "Eliminacion exitosa";
}
else
{ 
echo "no";
}
?>