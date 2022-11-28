

<?php
 // check if form submited, insert from data into customers table.
if(isset ($_POST['update'])){
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
	
	

	
	//include database connection file
	require_once ("php/config.php");
	
	//update data into table
	$query = "UPDATE customer_det SET person ='$person',name = '$name',mobileno='$mobileno',email ='$email',address= '$address',date='$date',attendees='$attendees' ,venue='$venue',package='$package' WHERE nic= '$nic'";
	if ($conn->query($query)=== TRUE){
		echo'<script>alert("Record updated successfully")</script>';
		echo "<script> location.href='payment.php'; </script>";
		exit;
	}	else {
		echo "Error updating record:". $conn->error;
	}
	
	
	
	
}
$conn->close();
	
	if(isset ($_POST['delete'])){
		$nic = $_POST['nic'];
		
		$query = "DELETE FROM `customer_det` WHERE nic= '$nic'";
		$query_run = mysqli_query($conn,$query);
		
		if($query_run)
		{
			echo "Record deleted successfully";	
		}
		else
		{
			echo "Error deleting record:". $conn->error;
		}
		
		
	}

?>

