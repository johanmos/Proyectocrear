<?php
@session_start();

include_once("datos_conexion_bd.php");

$conn=new mysqli($servername, $username, $password, $db_name);
if($conn-> connect_error){ // sirve para php > 5.2.9
	die("Connection failed ".$conn-> connect_error);
} 
	
	echo "Connection Succesfully";


date_default_timezone_set('UTC');
//Imprimimos la fecha actual dandole un formato
// $estado="1"; 
$photo2=""; 
$name2=$_POST['name1'];


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
$sql= "INSERT INTO categoria(nombre, fechaIngreso, imagen) VALUES ('$name2','$data4', '$photo2')";

if($conn->query($sql)==TRUE){
	echo "Guardada satisfactoriamente";
}else{
	echo "Error: ".$sql."<br>".$conn->error;
}


?>
<!DOCTYPE html>
<html> 
<head>
	<title>Lista De Productos</title>
	<link type="text/css" rel="stylesheet" href="listar.css"/>
	


</head>
<body>
<form method="post" action="listar.php">
<input type="submit" value="Listar">
</form>

</body>
</html> 