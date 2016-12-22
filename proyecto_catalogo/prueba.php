<?php
include_once("datos_conexion_bd.php");
$conn=new mysqli($servername, $username, $password, $db_name);
if($conn-> connect_error){ // sirve para php > 5.2.9
	die("Connection failed ".$conn-> connect_error);
} 
	
	//echo "Connection Succesfully";


$sql= "SELECT * FROM prueba";

//$result= array();
$result= $conn->query($sql);
//$row=$result->fetch_object();
while($row=$result->fetch_assoc()){
	$ar[]=$row;
}
for ($i=0; $i < count($ar); $i++) { 
	//print_r($ar[$i]["apellido"]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	var arrayJS=<?php echo json_encode($ar);?>;
	for (var i = 0; i < arrayJS.length; i++) {
		document.write("<br>"+arrayJS["0"]["nombre"]);
	};
</script>
</body>
</html>

