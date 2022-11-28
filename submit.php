<?php

//linking connect.php file
require 'php/connect.php';



$name = $_POST["Name"];
$email = $_POST["Email"];
$contact = $_POST["Mobile"];
$subject= $_POST["Subject"];
$message = $_POST["Message"];



//insert into the database
$sql = "INSERT INTO enquiries(name, email, contactNum, subject, message) VALUES ('$name','$email', '$contact', '$subject', '$message')";


//output
if($conn -> query($sql)){
	echo "<script> alert('Record added succesfully!!!')</script>";
	echo "<script> location.href='contactUs.html'; </script>";
	exit;
}
else{
	echo "<script> alert('Error: Could not be able to excute the query. ')</script>";
	echo $sql;
}
?>