<?php

$servername="localhost";
$username="root";
$password="";
$db_name="crear";

$conn=new mysqli($servername, $username, $password, $db_name);
if($conn-> connect_error){ // sirve para php > 5.2.9
	die("Connection failed ".$conn-> connect_error);
} 

?>