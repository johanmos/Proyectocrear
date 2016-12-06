<?php

include_once("datos_conexion_bd.php");



$sql= "SELECT * FROM categoria";

$result= array();
$result= $conn->query($sql);

?><!DOCTYPE html>
<html> 
<head>
	<title>Lista De Productos</title>
	
	


</head>
<body> 
<div class="tabla"><table border= "1" id="tabla1 "> 
<tr id="td1"><td><h2>Nombre</h2></td><td><h2>Description</h2></td><td><h2>foto</h2></td></tr> 
<?php
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
			?>
	<tr>
		
		<td><?php print $row["nombre"] ?></td>
		<td><?php print '<img src="data:image/jpg;base64,'.$row["imagen"].'"/>'; ?></td>
		
	</tr>
<?php }	

}else{ echo "0 resultados";}
$conn->close();
?>


 </body> 
</html>

