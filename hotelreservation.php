<table class= "reservationtable" border="1">
		<tr class = "reservationtr">
		<th class = "reservationth">Customer ID</th>
		<th class = "reservationth">Customer Type</th>
		<th class = "reservationth">Name</th>
		<th class = "reservationth">NIC</th>
		<th class = "reservationth">Mobile no</th>
		<th class = "reservationth">E mail</th>
		<th class = "reservationth">Address</th>
		<th class = "reservationth">Date</th>
		<th class = "reservationth">No.of attendees</th>
		<th class = "reservationth">Venue</th>
		<th class = "reservationth">Package</th>
		</tr>
		
	
		<?php

//include database connection file
	require_once ("php/config.php");
	
//Select data from table
$sql="SELECT customerId,person,name,nic,mobileno,email,address,date,attendees,venue,package from customer_det";
$result=$conn-> query($sql);

if($result-> num_rows>0){
	while ($row =$result-> fetch_assoc()){
	echo"<tr><td>".$row["customerId"]."</td><td>".$row["person"]."</td><td>".$row["name"]."</td><td>".$row["nic"]."</td><td>".$row["mobileno"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["date"]."</td><td>".$row["attendees"]."</td><td>".$row["venue"]."</td><td>".$row["package"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
}
$conn-> close();


 ?>
	</table>


