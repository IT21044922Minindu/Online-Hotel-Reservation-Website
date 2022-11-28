<!DOCTYPE html>
<?php
	require("php/connection.php");
?>
<html>

	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/styleC.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/payment.css">
	<script src="js/payment.js"></script>
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
		
		<center>
		<h1 style="color:red;">Thank you for your reservation!</h1>
		</center>
		
		<table class="recipt" id="recipt">
		<tr>
		<td colspan="2" align="center"><h2>Hotel Crowns Payment Confirmation Details</h2></td>
		<tr>
		<?php
				
		//select last row value of reservation database
		$query="SELECT* FROM payment ORDER BY Payment_ID DESC LIMIT 1";
		
		//perform query against database
		$query_run = mysqli_query($con, $query);
			
		//read the row data until last value of the raw
		foreach($query_run as $row)
		
		{
		?>
			<tr>
				<td>Recipt Number</td>
				<td>:  <?php echo $row ['Payment_ID']?></td>
			</tr>
			<tr>
				<td>Payment Status</td>
				<td style="color:red;">:  Proceeding</td>
			</tr>
			<tr>
				<td>Amount</td>
				<td>:  Rs.<?php echo $row ['Amount']?></td>
			</tr>
			<tr>
				<td>Pay Type</td>
				<td>:  Card</td>
			</tr>
			<tr>
				<td>Date and Time</td>
				<td>:  <?php echo $row ['DateTime']?></td>
			</tr>
			<tr>
				<td colspan="2" ><h3>Card Information</h3></td>
			</tr>
			<tr>
				<td>Card Type</td>
				<td>:  <?php echo $row ['CardType']?></td>
			</tr>
			<tr>
				<td>Card Holder's Name</td>
				<td>:  <?php echo $row ['Name']?></td>
			</tr>
			<tr>
				<td>Card Number</td>
				<td>:  <?php echo $row ['CardNumber']?></td>
			</tr>
			<tr>
				<td>Card Expiry Month</td>
				<td>:  <?php echo $row ['ExpireMonth']?></td>
			</tr>
			<tr>
				<td>Card Expiry Year</td>
				<td>:  <?php echo $row ['ExpireYear']?></td>
			</tr>
			<tr>
				<td>CVV Number</td>
				<td>:  <?php echo $row ['CvcNumber']?></td>
			</tr>
			<tr>
				<td colspan="2" style="color:red;">Note:This is only for the confirm your payment details amd When the payment is proceed,You will get an email.</td>
			</tr>
				
			
		<?php
			
		   }
		
		?>
		</table>
			<a href="home.html" class="back">BACK To Home Page</a>
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