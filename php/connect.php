<?php
	$servername = "localhost"; //MySQL user
	$username = "root"; //MySQL Server root password
	$password = ""; //Database name
	$db = "hotel_reservation";
	
	// Create connection
	$conn = new mysqli($servername,$username,$password,$db);
	
	// Check connection
	if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
	}
?>
