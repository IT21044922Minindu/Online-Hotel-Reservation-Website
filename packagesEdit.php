<!DOCTYPE html>
<?php
	require("php/connectPackageEdit.php");
?>
<html>

	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/styleC.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/packageEdit.css">
	<script src="js/packageEdit.js"></script>
	<title>Crowns Hotel</title><!-- add a title (a) -->
	
	</head>

	<body >
		<!-- header -->
		
		<!-- header box-->
		<div class="menu">
		
			<!-- logo-->
			<img src = "images/crown.png" class="logo" alt="logo">
			<!-- end of logo-->
			
			<!-- signIn/signOut and book button -->
			<div class="menu1">
			
				<ul class="menu1">
					<li class="menu1"><a href ="login.php" class="sign"><?php include("auth_session.php"); ?></a></li>
					<li class="menu1"><a href ="logout.php"class="book">Log Out</a></li>
				</ul>
				
			</div>
			<!-- end of signIn/signOut and book button -->

			<!-- main menu -->
			<div class="menu2">
			
				<ul class="menu2">
					<li class="menu2"><a href ="home.html" class="list">Home</a></li>
					<li class="menu2"><a href ="aboutUs.html" class="list">About</a></li>
					<li class="menu2"><a href ="halls.html" class="list">Venues</a></li>
					<li class="menu2"><a href ="packages.php" class="list">Packages</a></li>
					<li class="menu2"><a href ="gallery.html" class="list">Gallery</a></li>
					<li class="menu2"><a href ="contactUs.html" class="list">Contact Us</a></li>
				</ul>
				
				<!-- Search bar -->
				<form class="search">
					<input type="text" placeholder = "Search" class="searchBox">
					<button class="searchBtn"><i class="fa fa-search"></i></button>
				</form>
				<!-- end of search bar -->
				
			</div>
			<!-- end of main menu -->
		
		</div>
		<!-- end of header box-->
		
		<hr>
		<!-- end of header -->
		
		<center>
		
		<h1>Package Category Edit</h1>
		
		<a href="adminDashboard.php" class="back">&laquo; BACK</a>
		
		</center>
		
		<!-- package form start for insert pacakage details -->
		<form class="packageform" method="post" enctype="multipart/form-data" id="packageform">
		<fieldset >
		  <legend>Package Category Form</legend>
		  <input type="hidden" value="<?php echo $ID;?>" >
		  <table class="formtbl">
		  <tr>
		  <td><label>Package Name:-</label></td>
		  <td><input type="text" name="packageName" id="packageName" placeholder="Package Name" class="box"></td>
		  <td ><label>Package Details:-</label></td>
		  <td rowspan="5"><textarea name="packageDetails"  id="packageDetails" placeholder="Enter the package details here" rows="13" cols="60" class="detailBox"></textarea></td>
		  </tr>
		  <tr>
		  <td><label>Price:-</label></td>
		  <td><input type="number" name="packagePrice" id="packagePrice" placeholder="Package Price" class="box" min="1000" ></td>
		  </tr>
		  <tr>
		  <td><label>Picture:-</label></td>
		  <td><input type="file"  name="packagePicture" value="" class="box"  accept="image/*"id="packagePicture" onchange="showImage(event)"></td>
		  </tr>
		  <tr>
		  <td></td>
		  <td><img width="150" height="100" alt="Uploaded Image" id="uploadedImage" style="display:none;"></td>
		  </tr>
		  <tr>
		  <td><label>Brocher:-</label></td>
		  <td><input type="file"  name="packageBrocher" value="" class="box"  accept="application/pdf" id="packageBrocher"></td>
		  </tr>
		  <tr >
		  <td colspan="4"><center><input type="submit" value="ADD"  class="btn" name="sub"><input type="reset" value="CLEAR" class="btn" onclick="clearAll()"></center></td>
		  </tr>
		  </table>
		 </fieldset>
		</form>
		
		<?php
		
			if(isset($_POST['edit']))
			{	
				
				echo'<script>document.getElementById("packageform").style.display = "none";</script>';
				echo'<script>document.getElementById("EditPackageform").style.display = "block";</script>';
				$id=$_POST['editid'];
				$query="SELECT* FROM package WHERE Package_ID='$id'";
				$query_run = mysqli_query($con, $query);
				
				foreach($query_run as $row)
				{
				?>
				<!-- package form start for update pacakage details -->
				<form class="packageform" method="post" enctype="multipart/form-data"  id="EditPackageform" style="disply:none;">
				<fieldset>
				  <legend>Package Category Form </legend>
				  <input type="hidden" name="editID"  value="<?php echo $row['Package_ID']?>" >
				  <table class="formtbl">
				  <tr>
				  <td><label>Package Name:-</label></td>
				  <td><input type="text" name="packageName" id="packageName" placeholder="Package Name" class="box" value="<?php echo $row ['Package_Name'] ?>"></td>
				  <td ><label>Package Details:-</label></td>
				  <td rowspan="8"><textarea name="packageDetails"  id="packageDetails" placeholder="Enter the package details here" rows="13" cols="60" value="" class="detailBox" ><?php echo $row ['Package_Details']?></textarea></td>
				  </tr>
				  <tr>
				  <td><label>Price:-</label></td>
				  <td><input type="number" name="packagePrice" id="packagePrice" placeholder="Package Price" class="box" min="1000" value="<?php echo $row ['Package_Price']?>"></td>
				  </tr>
				  <tr id="oldPic">
				  <td><label>Picture:-</label></td>
				  <td><?php echo $row['Picture']?></br><img src="uploadpictures/<?php echo $row ['Picture']; ?>" width="150" height="100" alt="Package Image"></td>
				  </tr>
				  <tr>
				  <td><label>New Picture:-</label></td>
				  <td><input type="file"  name="newPackagePicture"  class="box"  accept="image/*" onchange="changeImage(event)" value=""></td>
				  </tr>
				  <tr>
				  <td></td>
				  <td><img width="150" height="100" alt="Uploaded Image" id="newUploadedImage" style="display:none;"></td>
				  </tr>
				  <tr id="oldBroch">
				  <td><label>Brocher:-</label></td>
				  <td><?php echo $row['Brocher'];?></td>
				  </tr>
				  <tr>
				  <td><label>New Brocher:-</label></td>
				  <td><input type="file"  name="newPackageBrocher" class="box"  accept="application/pdf" onchange="changeBrocher(event)" value=""></td>
				  </tr>
				  <tr >
				  <td colspan="4"><center><input type="submit" value="UPDATE"  class="btn" name="updateData"><button class="btn" onclick="cancelForm()">CANCEL</button></center></td>
				  </tr>
				  </table>
				 </fieldset>
				</form>
			
		<?php
			}
			}
		
		?>
		
		<!-- display pacakage details in a table-->
		<?php
		$query = "SELECT* From package";
		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run) > 0)
		{
			
		?>
		<table align="center"class="editTable" >
		<tr>
			<th>Package_ID</th>
			<th>Package_Name</th>
			<th>Package_Price</th>
			<th>Package_Image</th>
			<th>Package_Description</th>
			<th>Package_Brocher</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
		  
		   while($row = mysqli_fetch_assoc($query_run))
		   {
		?>
		<tr>
			<td><?php echo $row ['Package_ID']?></td>
			<td><?php echo $row ['Package_Name']?></td>
			<td>Rs.<?php echo $row ['Package_Price']?></td>
			<td><img src="uploadpictures/<?php echo $row ['Picture']?>" width="150" height="100" alt="Package Image"></td>
			<td class="description"><?php echo $row ['Package_Details']?></td>
			<td><img src = "images/pdf.png" width="50" height="75" alt="image icon"></br><a class="pdfLink" href="uploadpdfs/<?php echo $row ['Brocher']?>"><?php echo $row ['Brocher']?></a></td>
			<td>
			
			<!--Edit Button -->
			<form method="post">
				<input type="hidden" name="editid" value="<?php echo $row['Package_ID']?>">
				<input type="submit" name="edit" value="Edit" class="tableBtn" >
			</form>
			
			</td>
			<td>
			
			<!--Delete Button -->
			<form method="post">
				<input type="hidden" name="deleteID" value="<?php echo $row['Package_ID']?>">
				<input type="submit" name="delete" value="Delete" class="tableBtn">
			</form>
			
			</td>
		</tr>
		
		<?php
			
		   }
		  ?>
		  
		</table>
		
		<?php
		}
		
		else
		{
			echo"No Recod Found";
		}
		
		?>
		



		
<!-- footer -->
		<hr>
		
		<!-- footer box -->
		<footer>
				
				<!-- Qr code-->
				<img src = "images/qr.png" class="icon1" alt="QR code">
				<!-- end of Qr code-->
				
				<!-- contact-->
				<div class="contact">
				
					<h3>Contact Us</h3>
					
					<ul>
					<li>Tel:+94112556767</li>
					<li>Fax:+94112556767</li>
					<li>Email:info@hotelcrown.net</li>
					</ul>
					
				</div>
				<!-- end of contact-->
				
				<!-- logo-->
				<img src = "images/crown.png" class="icon2" alt="logo">
				<!-- end of logo-->
				
				<!-- address-->
				<div class="address">
				
					<h3>Address</h3>
					
					<ul>
					<li>No.123,Beach Road,<br>Kaluthara</li>
					</ul>
					
				</div>
				<!--end of address-->
				
				<!--social media box-->
				<div class="socialmedia">
				
						<ul class="footer1">
							<li class="footer1"><a href ="https://www.facebook.com"><img src = "images/facebook.png"  class="facebook" alt="facebook icon"></a></li>
							<li class="footer1"><a href ="https://www.twiter.com"><img src = "images/twiter.png"  class="twiter" alt="twitter icon"></a></a></li>
							<li class="footer1"><a href ="https://www.instagaram.com"><img src = "images/insta.png"  class="insta" alt="insagram icon"></a></a></li>
							<li class="footer1"><a href ="https://www.google.com"><img src = "images/google.png"  class="google" alt="google plus icon"></a></a></li>
						</ul>
						
						<h4>Copyright &#169 2021.hotelcrown.net</h4> 
				</div>
				<!--end of social media box-->
		</footer>
		
		<!-- end of footer -->