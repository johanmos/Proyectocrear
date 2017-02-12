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


date_default_timezone_set('UTC');
$id=$_GET["id"];

$photo2=""; 

$numerocategoria=$_POST["categoria"];

$query2 = "SELECT * FROM ca WHERE id = '$numerocategoria'";
    $resultado2 = $link->query($query2);
    while($row2 = $resultado2->fetch_assoc()){
    	$nombrecategoria = $row2['nombre'];

    }


///////////////Guardar imagen en carpeta y direccion en la BD/////////////////

if(isset($_FILES['photo1'])&& $_FILES['photo1']['tmp_name']!=""){	
$filename=basename($_FILES['photo1']['name']);
$tipoimagen=$_FILES['photo1']['type'];

$ruta="../assets/imagenes/".$nombrecategoria;
$ruta2="assets/imagenes/".$nombrecategoria;
if(!file_exists($ruta)){
	mkdir($ruta,0777, true);
}

$direccionimagen=$ruta."/".$filename;
$direccionimagen2=$ruta2."/".$filename;

if (move_uploaded_file($_FILES['photo1']['tmp_name'], $direccionimagen)) {
	//echo"<img src='".$direccionimagen."' />";
}
/////////////////////////////////////7
//$contbin = fread(fopen($_FILES['photo1']['tmp_name'],"rb"),$_FILES['photo1']['size']);
//$photo2 = base64_encode($contbin);
}
$data4=date("Y-m-d-G-i-s");



$sql1="SELECT id FROM ca WHERE nombre='$nombrecategoria'";
//$id=arra
$getid= mysqli_query($link,$sql1);
$idc=mysqli_fetch_array($getid, MYSQLI_NUM);




$query = "UPDATE producto SET imagen1='$direccionimagen2' WHERE idproducto ='$id'";
$resultado = $link->query($query);

if($resultado){
	//header("location: mostrar_menu.php");
		print "
         <center><div class='alert alert-success' role='alert'>
  <strong>Gracias!</strong>  Imagen Modificada...!!! </div></center>
";
	header( "refresh:1; url = ../adminlogin/ver_productos.php?id=$numerocategoria");
}

else
{ 
echo "no";
}
?>