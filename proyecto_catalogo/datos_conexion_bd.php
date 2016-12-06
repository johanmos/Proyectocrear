<?php

$servername="localhost";
$username="johan";
$password="johan";
$db_name="catalogo";

$conn=new mysqli($servername, $username, $password, $db_name);
if($conn-> connect_error){ // sirve para php > 5.2.9
	die("Connection failed ".$conn-> connect_error);
} 

?>