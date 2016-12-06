<?php
@session_start();
include_once("datos_conexion_bd.php");
$conn=new mysqli($servername, $username, $password, $db_name);
if($conn-> connect_error){ // sirve para php > 5.2.9
	die("Connection failed ".$conn-> connect_error);
} 
	
	echo "Connection Succesfully";


$sql= "SELECT * FROM ejecutivo";

$result= array();
$result= $conn->query($sql);

?><!DOCTYPE html>
<html> 
<head>
	<title>Lista De Elementos ejecutivos</title>
	
	


</head>
<body> 
<div class="tabla"><table border= "1" id="tabla1 "> 
<tr id="td1"><td><h2>Nombre</h2></td><td><h2>Description</h2></td><td><h2>foto</h2></td></tr> 
<?php
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		$decode_string=base64_decode($row["imagen"]);
		$img ="";
	?>
	<tr>
		
		<td><?php print $row["nombre"] ?></td>
		<td><?php print $row["descripcion"] ?></td>
		<td><?php print '<img src="data:image/jpg;base64,'.$row["imagen"].'"/>'; ?></td>
		
	</tr>
<?php }	

}else{ echo "0 resultados";}
$conn->close();
?>


 </body> 
</html>

