			<?php
			
				//create databse connection
				$host="localhost";
				$username= "root";
				$password= "";
				$database= "hotel_reservation";
				
				$con=mysqli_connect($host,$username,$password,$database);
				
				 if(!$con){
					die("Not connected");
				}
			

			
			if(isset($_POST["sub"])){
				
				//read payment Id From database
				$query1="SELECT* FROM payment ORDER BY Payment_ID DESC LIMIT 1";
				
				
				$result = mysqli_query($con, $query1);
					
				
				$row = mysqli_fetch_array($result);
				
				if (empty($row['Payment_ID']))
				{
					$ID = "HRSWPay1";
				}
				
				else
				{
					$ID = substr($row['Payment_ID'],7);
					$ID = intval($ID);
					$ID = "HRSWPay" . ($ID+1);
				}

				$Amount=$_POST["amount"];
				$Name =$_POST["name"];
				$CardType =$_POST["radio"];
				$CardNumber =$_POST["number"];
				$ExpireMonth=$_POST["month"];
				$ExpireYear =$_POST["year"]; 
				$CvcNumber =$_POST["cvcNumber"];
				$Date =date('Y-m-d H:i:s');
				
				//insert value into database
				$query="INSERT INTO payment(Payment_ID,Amount,Name,CardType,CardNumber,ExpireYear,ExpireMonth,CvcNumber,DateTime) VALUES('$ID','$Amount','$Name','$CardType','$CardNumber','$ExpireYear','$ExpireMonth','$CvcNumber','$Date')";
				$status=mysqli_query($con,$query);
					
				if($status){
					echo'<script>alert("Your payment is successful")</script>';
					echo "<script> location.href='paymentConfirm.php'; </script>";
					exit;
					}
				else{
					echo'<script>alert("SORRY SOMETHING WRONG PLEASE TRY AGAIN")</script>';
					}
			}
			
			//read packge name and price using pacakage query 
			$query="SELECT Package_Name,Package_Price FROM package";
			
			$query_run = mysqli_query($con, $query);
			
			$packageArray = Array();
			
			$priceArray = Array();
			
			//read the row data until last value of the raw
			foreach($query_run as $row)
				
			{	
				//store pacakges name in package array
				$packageArray[] =  $row['Package_Name'];  
				
				//store pacakges price in package array
				$priceArray[] =  $row['Package_Price']; 
			}
	
			?>
			
			<script>
			
			function showPrice()
			{
			//get data from reservation summery table
			var pkg=document.getElementById("pkg").innerHTML;
			var attends=document.getElementById("attendes").innerHTML;
			var service=5000;
			
			//convert php array into jvscript arrays
			var packageArray=<?php echo json_encode($packageArray);?>;
			var pricelist=<?php echo json_encode($priceArray);?>;
			
			var x ;
			var pkgcharges=0;
			
			//read package name array using for loop and calulate package charges using package price arry acording to relevent package
			for(x=0;x< packageArray.length; x++)	
			{
				if(pkg==packageArray[x])
				{	
					pkgcharges=pricelist[x]*attends;
					break;
				}
			}
			
			//display charges in payment detail table
			document.getElementById("pkgCharge").innerHTML += pkgcharges+".00";
			document.getElementById("serviceCharge").innerHTML +=service+".00";
			document.getElementById("totalCharge").innerHTML += pkgcharges + service+".00" ;
			document.getElementById("amount").value = pkgcharges + service+".00" ;
			}
			
			
			</script>