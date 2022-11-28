<?php

//include database connection file
	require_once ("php/config.php");
	
 // check if form submited, insert from data into customers table.
if(isset ($_POST['submit'])){
	$person =$_POST['person'];
	$name =$_POST['name'];
	$nic =$_POST['nic'];
	$mobileno =$_POST['mobileno'];
	$email=$_POST['email'];
	$address =$_POST['address'];
	$date =$_POST['date'];
	$attendees =$_POST['attendees'];
	$venue =$_POST['hall'];
	$package=$_POST['package'];
	
	//insert data into table
	$query = "INSERT INTO customer_det(person,name,nic,mobileno,email,address,date,attendees,venue,package) VALUES ('$person','$name','$nic','$mobileno','$email','$address','$date','$attendees','$venue','$package')";
	
	
	//show massage when customer added
	if ($conn->query($query) === TRUE) {
		echo'<script>alert("If you want Update please Edit here.Else click Next")</script>';
		echo "<script> location.href='bookupdate.php'; </script>";
		exit;
	}
	else {
		echo "Error: " . $query . "<br>" . $conn->error;
	}
}

$conn->close();
	

?>

