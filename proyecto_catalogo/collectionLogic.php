<?php 
include_once("proyecto_catalogo/datos_conexion_bd.php");
$conn=new mysqli($servername, $username, $password, $db_name);
if($conn-> connect_error){ // sirve para php > 5.2.9
	die("Connection failed ".$conn-> connect_error);
} 

$categoria=$_GET["categoria"];
$sql1="SELECT idcategoria FROM categoria WHERE nombre='$categoria'";
//$id=arra
$getid= mysqli_query($conn,$sql1);
$idc=mysqli_fetch_array($getid, MYSQLI_NUM);

//print $id ;
$sql= "SELECT * FROM producto WHERE idcategoria ='$idc[0]'";
$result= array();
$result= $conn->query($sql);
while($row=$result->fetch_assoc()){
	$ar[]=$row;}

?>