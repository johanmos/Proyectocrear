<?php
include_once("datos_conexion_bd.php");

date_default_timezone_set('UTC');
//Imprimimos la fecha actual dandole un formato
// $estado="1"; 
$photo2=""; 
$name2=$_POST['name1'];
$descripcion2=$_POST['descripcion'];
$colores=$_POST['colores'];
$medida=$_POST['medidas'];
$idcategoria=$_POST['idcategoria'];
$precio2=$_POST['precio1'];
$tecnica=$_POST['tecnica'];

//echo "File:".$_FILES['photo1'];
if(isset($_FILES['photo1'])&& $_FILES['photo1']['tmp_name']!=""){
//$imagentype=mime_content_type($_FILES['photo1']);
//Echo $imagentype;	
$contbin = fread(fopen($_FILES['photo1']['tmp_name'],"rb"),$_FILES['photo1']['size']);
$photo2 = base64_encode($contbin);
}
$data3=date("Y-m-d-G-i-s");
$data4=date("Y-m-d-G-i-s");

//$photo2=mysql_real_escape_string($photo2);
$sql= "INSERT INTO producto(idcategoria, nombre, descripcion, colores, medida, precio, tecnicamarca, fechaingreso, imagen) VALUES ((SELECT * FROM categoria WHERE idcategoria='$idcategoria'), $name2', '$descripcion2', '$colores', '$medida', '$precio2', '$tecnica', $data4', '$photo2')";

if($conn->query($sql)==TRUE){
	echo "Guardada satisfactoriamente";
}else{
	echo "Error: ".$sql."<br>".$conn->error;
}


?>
