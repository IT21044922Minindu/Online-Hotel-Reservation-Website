<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/newstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Crowns Hotel</title><!-- add a title (a) -->
	
</head>
<body>

		
		<!-- header -->
		
		<!-- header box-->
		<div class="menu">
		
			<!-- logo-->
			<img src = "images/crown.png" class="logo" alt="logo">
			<!-- end of logo-->
			
			<!-- signIn/signOut and book button -->
			<div class="menu1">
			
				<ul class="menu1">
					<li class="menu1"><a href ="login.php" class="sign">Sign up/Sign In</a></li>
					<li class="menu1"><a href ="booking.php"class="book">  Book Now </a></li>
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
		<br>
		
	<!-- select the date-->
	<form action="hotelbookupdate.php" method="POST">
	<div>
	
			
			<input type= "text" name="nic" id="nic" class ="forminputupdatenic" placeholder="Enter your NIC First" required>
	</div><br><br><br><br><br>
	<table class= "dropdownTable">
	<tr>
	<th>
	
	
	
	<div>
		<label for="date">Date</label><br>
		<input class="listOfdrop" type="date" name="date" id="date" placeholder="Date">
	</div>
	</th>
	
	<!--No.of attendees-->
	
	<th>
	<div><br>
		<select class="listOfdrop" name="attendees" id="attendees">
			<option label="No.of attendees" value="No.of attendees"></option>
			<option label="50" value="50"></option>
			<option label="100" value="100"></option>
			<option label="150" value="150"></option>
			<option label="200" value="200"></option>
		</select>
	</div>
	</th>
	</table>
	<br><br>
	<!--select the venue type-->
	<table class= "dropdownTable">
	<tr>
	<th>
	<div><br>
		<select class="listOfdrop" name="hall" id="hall">
			<option label="Select a hall" value="Select a hall"></option>
			<option label="Oak Room" value="Oak Room"></option>
			<option label="Ivy" value="Ivy"></option>
			<option label="Outdoor" value="Outdoor"></option>
			<option label="Pool Terrace" value="Pool Terrace"></option>
		</select>
	</div>
	</th>
	
	
	<!-- Package type-->
	<th>
	<div><br>
		<select class="listOfdrop" name="package" id="package">
			<option label="Select a Package" value="Select a Package"></option>
			<option label="Platinum Crown" value="Platinum Crown"></option>
			<option label="Gold Crown" value="Gold Crown"></option>
			<option label="Silver Crown" value="Silver Crown"></option>
		</select>
	</div>
	</th>
	</tr>
	</table>
	
	<br><br>
	<!-- Radio buttons-->
	
	
	<div>
	<!-- Groom details-->
	<table class="groomBridetable">
	<tr>
	<th>
	<div class = "groom">
	
	<div>
		<table class="radiobtnTable">	
		<tr>

		<th>You are</th>
			<th>
			<div>
				<label for="groom">Groom</label>
				<input type="radio" name="person" id="groom" value= "groom" >
			</div>
			</th>
			
			<th>
			<div>
				<label for="bride">Bride</label>
				<input type="radio" name="person" id="bride" value= "bride">
			</div>
			</th>
			
		</tr>
		</table>
	</div>
	<br><br>
		<div>
			<label for="name"> Name </label><br>
			<input type= "text" name="name" id="name" class="forminputupdate">
		</div>
		
		<div>
			<label for="mobileno"> Moblie No </label><br>
			<input type= "text" name="mobileno" class="forminputupdate" id="mobileno">
		</div>
		<div>
			<label for="email">Email</label><br>
			<input type="email" name="email" class="forminputupdate" id="email" required>
		</div>
		<div>
			<label for="address"> Address </label><br>
			<input type= "text" name="address" class="forminputupdate" id="address">
		</div>
	</div>
	<div class="vl"></div>

	
	<!--confirm button-->

		<input type = "submit" class="confirmbtn" name ="update" value ="Update details">
		

	</form>
	</th>
	</tr>
	</table>
	</div>
	
	</div> 
	<div class = "deletesearchtab">
	
		<form action= "" method= "POST"> <br><br><br><br><br><br>
		
			<input type = "text" class="searchnic" name ="nic" placeholder= "Enter NIC to search"/> <br><br><br>
			<input type = "submit" class="deleteserchbtn" name = "search" value = "search data">
			<input type = "submit" class="deleteserchbtn" name = "delete"  value = "delete data">
		
		</form>
		 <br>
		 <br>
		 <br>
		<?php

//include database connection file
	require_once ("php/config.php");
	
	if(isset($_POST['search']))
	{
		$nic = $_POST['nic'];
		
		$query = "SELECT * FROM `customer_det` where nic = '$nic'";
		
		$query_run = mysqli_query ($conn, $query);
		
		while($row = mysqli_fetch_array($query_run))
		{
			?>
			<form method="POST">
			
			<input type="text" class="searchdetailsdisplay" name="person" value="<?php echo $row['person']?>"/><br><br><br>
			<input type="text" class="searchdetailsdisplay" name="name" value="<?php echo $row['name']?>"/><br><br><br>
			<input type="text" class="searchdetailsdisplay" name="mobileno" value="<?php echo $row['mobileno']?>"/><br><br><br>
			<input type="text" class="searchdetailsdisplay" name="email" value="<?php echo $row['email']?>"/><br><br><br>
			<input type="text" class="searchdetailsdisplay" name="address" value="<?php echo $row['address']?>"/><br><br><br>
			<input type="text" class="searchdetailsdisplay" name="date" value="<?php echo $row['date']?>"/><br><br><br>
			<input type="text" class="searchdetailsdisplay" name="attendees" value="<?php echo $row['attendees']?>"/><br><br><br>
			<input type="text" class="searchdetailsdisplay" name="hall" value="<?php echo $row['venue']?>"/><br><br><br>
			<input type="text" class="searchdetailsdisplay" name="package" value="<?php echo $row['package']?>"/> 
			
			
			</form>
			
			<?php
			
		}
		
	}
	
	

			 ?>
			 
			 <?php
			 //include database connection file
				require_once ("php/config.php");
				
				if(isset($_POST['delete']))
				{
					$nic = $_POST['nic'];
					
					$query = "DELETE FROM `customer_det` where nic = '$nic'";
					
					$query_run = mysqli_query ($conn, $query);
				}
			 ?>
	
	</table>
	
	</div>
	
	
	<br><br><br><br><br><br>
	<a href="payment.php" class="nextbtn">NEXT</a>
	<hr>
	<div>
	
	
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
							<li class="footer1"><a href ="https://www.twiter.com"><img src = "images/twiter.png"  class="twiter" alt="twitter icon"></a></li>
							<li class="footer1"><a href ="https://www.instagaram.com"><img src = "images/insta.png"  class="insta" alt="insagram icon"></a></li>
							<li class="footer1"><a href ="https://www.google.com"><img src = "images/google.png"  class="google" alt="google plus icon"></a></li>
						</ul>
						
						<h4>Copyright &#169 2021.hotelcrown.net</h4> 
				</div>
				<!--end of social media box-->
		</footer>
		
		
		<!-- end of footer -->
	
	


	</div>
</body>





</html>