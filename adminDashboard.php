<!DOCTYPE html>
<html>

	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/AdminDashboard.css">
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
					<li class="menu1"><a href ="login.php" class="account"><?php include("auth_session.php"); ?></a></li>
					<li class="menu1"><a href ="logout.php"class="signout">Log Out</a></li>
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
		
		<h2 class = "h2">Admin Dashboard</h2>
		
		<table class = "table1">
			<tr>
				<th>
					<p class = "textBookings"><b>New Bookings</b></p>
					<progress class = "staff" max = "10" value = "1"></progress>
				</th>
				<th>
					<p class = "textBookings"><b>Approved Bookings</b></p>
					<progress class = "facilities" max = "10" value = "3"></progress>
				</th>
				<th>
					<p class = "textBookings"><b>Cancelled Bookings</b></p>
					<progress class = "cleanliness" max = "10" value = "0"></progress>
				</th>
			</tr>
			
			<tr>
				<th>
					<p class = "textBookings"><b>Registered Users</b></p>
					<progress class = "comfort" max = "10" value = "4"></progress>
				</th>
				<th>
					<p class = "textBookings"><b>Read Enquiries</b></p>
					<progress class = "valformny" max = "10" value = "5"></progress>
				</th>
				<th>
					<p class = "textBookings"><b>Unread Enquiries</b></p>
					<progress class = "location" max = "10" value = "1"></progress>
				</th>
			</tr>
		</table>
		
		<table class = "buttons">
			<tr>
				<th>
					<a href = "enquiries.php" class="adminbuttons">Enquiries</a>
				</th>
			
				<th>
					<a href = "reservation.php" class="adminbuttons">Reservations</a>
				</th>
				
				<th>
					<a href = "packagesEdit.php" class="adminbuttons">Edit Packages</a>
				</th>
			</tr>
		</table>
			
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
					<li>Tel: +94 11 255 6767</li>
					<li>Fax: +94 11 255 6767</li>
					<li>Email: info@hotelcrown.net</li>
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
					<li>No.123, Beach Road,<br>Kalutara</li>
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