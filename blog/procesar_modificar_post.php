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
$id = $_REQUEST['id'];
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];

$descripcion = $_POST['descripcion'];

$categoria = $_POST['categoria'];

$contenido = $_POST['contenido'];


$nombre_imagen = $_FILES["imagen"]["name"];
$nombre_temporal = $_FILES["imagen"]["tmp_name"];
$tipo_archivo = $_FILES["imagen"]["type"];

$destino = "imagenes/".$nombre_imagen;

if($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif"){
	move_uploaded_file($nombre_temporal, $destino);
	

	$query = "UPDATE post SET autor_post='$autor', fecha_post=NOW(), categoria_post='$categoria', titulo_post='$titulo', imagen_post='$nombre_imagen', descripcion_post='$descripcion', contenido_completo_post='$contenido' WHERE id_post ='$id'";
	$resultado = $link->query($query);
	if($resultado){
	header("location: ../adminlogin/ver_post_blog.php");
	}
	else
	{ 
	echo "no";
	}
	}

else{
	echo "el archivo no es una imagen <br/>";
	exit();
	echo "<a href='agregar_post.php'>Volver atras</a>";
}




?>