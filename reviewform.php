<?php

//linking connect.php file
require 'php/connect.php';

$name = $_POST["fullname"];
$email = $_POST["email"];
$comments = $_POST["comments"];

//insert into the database
$sql = "INSERT INTO customer_reviews(fullname, email, comments) VALUES ('$name','$email', '$comments')";


//output
if($conn -> query($sql)){
	echo "<script> alert('Record added succesfully!!!')</script>";
	echo "<script> location.href='Allreviews.html'; </script>";
	exit;
}
else{
	echo "<script> alert('Error: Could not be able to excute the query. ')</script>";
	echo $sql;
}
?>