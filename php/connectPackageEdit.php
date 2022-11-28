		
			<?php
				
				//make connection
				$host="localhost";
				$username= "root";
				$password= "";
				$database= "hotel_reservation";
				
				$con=mysqli_connect($host,$username,$password,$database);
				
				if(!$con){
					die("Not connected");
						  }
				
				//insert
				if(isset($_POST["sub"])){
					
					//select last row value of paackge query
					$query1="SELECT* FROM package ORDER BY Package_ID DESC LIMIT 1";
					
					//perform query against database
					$query_run = mysqli_query($con, $query1);
						
					//read the row data until last value of the raw
					$row = mysqli_fetch_array($query_run);
					
					if (empty($row['Package_ID']))
					{
						$ID = "Pkg1";
					}
					
					else
					{
						$ID = substr($row['Package_ID'],3);
						$ID = intval($ID);
						$ID = "Pkg" . ($ID+1);
					}

					$PackageName =$_POST["packageName"];
					$PackagePrice =$_POST["packagePrice"];
					$PackageDetails =$_POST["packageDetails"];
					$Picture = $_FILES["packagePicture"]["name"];
					$Brocher = $_FILES["packageBrocher"]["name"];
					$query="INSERT INTO package(Package_ID,Package_Name,Package_Price,Package_Details, Picture,Brocher) VALUES('$ID','$PackageName','$PackagePrice','$PackageDetails','$Picture','$Brocher')";
					$status=mysqli_query($con,$query);
						
					if($status){
						echo'<script>alert("You have Successfully Add package details to the detabase")</script>';
						move_uploaded_file($_FILES["packagePicture"]["tmp_name"], "uploadpictures/".$_FILES["packagePicture"]["name"]);
						
						move_uploaded_file($_FILES["packageBrocher"]["tmp_name"], "uploadpdfs/".$_FILES["packageBrocher"]["name"]);
						}
					else{
						echo'<script>alert("SORRY SOMETHING WRONG PLEASE TRY AGAIN")</script>';
						}
					
				}
				
				//update
				if(isset($_POST['updateData']))
				{	
					$id=$_POST['editID'];
					$PackageName =$_POST["packageName"];
					$PackagePrice =$_POST["packagePrice"];
					$PackageDetails =$_POST["packageDetails"];
					$Picture = $_FILES["newPackagePicture"]["name"];
					$Brocher = $_FILES["newPackageBrocher"]["name"];
					
					if(empty($Picture) && empty($Brocher))
					{
						$query="UPDATE `package` SET `Package_Name`='$PackageName',`Package_Price`='$PackagePrice', `Package_Details`='$PackageDetails' WHERE Package_ID='$id' ";
					}
					
					else if(empty($Picture))
					{
						$query="UPDATE `package` SET `Package_Name`='$PackageName',`Package_Price`='$PackagePrice', `Package_Details`='$PackageDetails',`Brocher`='$Brocher' WHERE Package_ID='$id' ";
					}
					
					else if(empty($Brocher))
					{
						$query="UPDATE `package` SET `Package_Name`='$PackageName',`Package_Price`='$PackagePrice', `Package_Details`='$PackageDetails', `Picture` ='$Picture' WHERE Package_ID='$id' ";
					}
					else
					{
						$query="UPDATE `package` SET `Package_Name`='$PackageName',`Package_Price`='$PackagePrice', `Package_Details`='$PackageDetails', `Picture` ='$Picture',`Brocher`='$Brocher' WHERE Package_ID='$id' ";
					}
					
					$status=mysqli_query($con,$query);
						
					if($status){
						echo'<script>alert("You have Successfully update package details to the detabase")</script>';
						move_uploaded_file($_FILES["newPackagePicture"]["tmp_name"], "uploadpictures/".$_FILES["newPackagePicture"]["name"]);
						
						move_uploaded_file($_FILES["newPackageBrocher"]["tmp_name"], "uploadpdfs/".$_FILES["newPackageBrocher"]["name"]);
						}
					else{
						echo'<script>alert("SORRY SOMETHING WRONG PLEASE TRY AGAIN")</script>';
						}
				}
				
				//delete
				if(isset($_POST['delete']))
				{
					$id=$_POST['deleteID'];
					$query="DELETE FROM package WHERE Package_ID='$id'";
					$status=mysqli_query($con,$query);
						
					if($status)
					{
						echo'<script>alert("You have Successfully Delete package details to the detabase")</script>';
					}
					else
					{
						echo'<script>alert("SORRY SOMETHING WRONG PLEASE TRY AGAIN")</script>';
					}
				}
			?>