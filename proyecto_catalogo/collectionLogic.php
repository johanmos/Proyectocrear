<?php 
include_once("proyecto_catalogo/datos_conexion_bd.php");
$conn=new mysqli($servername, $username, $password, $db_name);
if($conn-> connect_error){ // sirve para php > 5.2.9
	die("Connection failed ".$conn-> connect_error);
} 





$categoria=$_GET["categoria"];
switch ($categoria) {
	case 'boligrafo':
		$sql= "SELECT * FROM boligrafo";

		break;
	case 'botones':
		$sql= "SELECT * FROM botones";

		break;
	case 'confeccion':
		$sql= "SELECT * FROM confeccion";

		break;
	case 'cuidadopersonal':
		$sql= "SELECT * FROM cuidadopersonal";
		
		break;
	case 'ejecutivo':
		$sql= "SELECT * FROM ejecutivo";
		
		break;
	case 'llaveros':
		$sql= "SELECT * FROM llaveros";

		break;	
	case 'manillas':
	$sql= "SELECT * FROM manillas";
		
		break;
	case 'medallas':
	$sql= "SELECT * FROM medallas";
		
		break;	
	case 'mugs':
	$sql= "SELECT * FROM mugs";
		
		break;
	case 'novedades':
	$sql= "SELECT * FROM novedades";
		
		break;
	case 'oficina':
		$sql= "SELECT * FROM oficina";
		
		break;
	case 'tecnologia':
		$sql= "SELECT * FROM tecnologia";
		
		break;

	case 'variedades':
		$sql= "SELECT * FROM variedades";
		
		break;
	
	
	
}
$result= array();
$result= $conn->query($sql);
while($row=$result->fetch_assoc()){
	$ar[]=$row;}

?>