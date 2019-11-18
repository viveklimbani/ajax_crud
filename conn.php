<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","crud_ajax");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>