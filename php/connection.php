<?php

	$host="localhost";
	$username= "root";
	$password= "";
	$database= "hotel_reservation";
	
	$con=mysqli_connect($host,$username,$password,$database);
	
	 if(!$con){
		die("Not connected");
			  }
?>