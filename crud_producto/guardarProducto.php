<?php
@session_start();
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
//Imprimimos la fecha actual dandole un formato
// $estado="1"; 
$photo2=""; 
$codigo=$_POST['codigo'];
$name2=$_POST['name1'];
$descripcion2=$_POST['descripcion'];
$colores=$_POST['colores'];
$medida=$_POST['medidas'];
//$idcategoria=$_POST['idcategoria'];
$nombrecategoria=$_POST['categoria'];
$precio2=$_POST['precio1'];
$tecnica=$_POST['tecnica'];

$sql1="SELECT id FROM ca WHERE nombre='$nombrecategoria'";
//$id=arra
$getid= mysqli_query($link,$sql1);
$idc=mysqli_fetch_array($getid, MYSQLI_NUM);




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

//$photo2=mysql_real_escape_string($photo2);
$sql= "INSERT INTO producto(codigo, nombre, descripcion, precio, medidas, colores, tecnicamarca, fechaingreso, imagen1, idcategoria) VALUES ('$codigo', '$name2', '$descripcion2', '$precio2', '$medida','$colores', '$tecnica', '$data4', '$direccionimagen2', '$idc[0]')";

if($link->query($sql)==TRUE){
//if(mysqli_query($conn,$sql)==TRUE){
		print "
         <center><div class='alert alert-success' role='alert'>
  <strong>Gracias!</strong> Producto agregado con éxito...!!!</div></center>
";
	header( "refresh:1; url = ../adminlogin/ver_todos_productos.php");
}else{
	//echo "Error: ".$sql."<br>".mysql_error($conn);
	echo "Error: ".$sql."<br>".$link->error;
}


?>
