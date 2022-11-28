<!DOCTYPE html>

<!-- include connectPayment.php  -->
<?php
	require("php/connectPayment.php");
	
?>


<html>

	<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- include external style.css  -->
	<link rel="stylesheet" href="styles/styleC.css">
	<!-- include external payment.css  -->
	<link rel="stylesheet" href="styles/payment.css">
	<!-- include external stylesheet for symbols  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- include external payment.js  -->
	<script src="js/payment.js"></script>
	
	<title>Crowns Hotel</title><!-- title  -->
	
	</head>
	
	<!--call the showPrice and showImage functions -->
	<body onload="javascript:showPrice(); javascript:showImage();">
		
		
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
					<button class="searchBtn" title="searchBtn"><i class="fa fa-search"></i></button>
				</form>
				<!-- end of search bar -->
				
			</div>
			<!-- end of main menu -->
		
		</div>
		<!-- end of header box-->
		
		
		
		<hr>
		<!-- end of header -->
		
		<!-- Reservation Summry topic -->
			<h3 class="summary">Reservation Summary</h4>
		
		<!-- Total charges topic -->
			<h3 class="payment">Total Charges</h4>
		
		<!-- Reservation Summry detail box start -->
		<div class="reservation">
		
			<!-- booked venue image will display here -->
			<img src = ""  class="bookImg" alt="package image" id="reservImg">
			
<!-- Reservation Summry details table -->
			<?php
			
				//select last row value of reservation database
				$query="SELECT* FROM customer_det ORDER BY customerId DESC LIMIT 1";
				
				//perform query against database
				$query_run = mysqli_query($con, $query);
					
				//read the row data until last value of the raw
				foreach($query_run as $row)
				
				{
			?>
					<table class="details">
						<tr>
							<td>Date</td>
							<td>:-</td>
							<td id="bookedDate"><?php echo $row ['date']?></td><!-- booked date will display here by reading value of date -->
						</tr>
						<tr>
							<td>Venue</td>
							<td>:-</td>
							<td id="venue"><?php echo $row ['venue']?></td><!-- booked venue will display here by reading value of venue-->
						</tr>
						<tr>
							<td>Package</td>
							<td>:-</td>
							<td id="pkg"><?php echo $row ['package']?></td><!-- booked package will display here by reading value of package-->
						</tr>
						<tr>
							<td>No of attendes</td>
							<td>:-</td>
							<td id="attendes"><?php echo $row ['attendees']?></td><!-- booked no of attendes will display here by reading value of No of attendees-->
						</tr>
			<?php
				}
				
			 ?>
		  
					</table>
		
		
			<!--end of  Reservation Summry details table -->
		</div>
		
		
		
		<!-- Start of Payment Summry table-->

		
		<table class="total">
		<tr>
			<td>package Charges</td>
			<td id="pkgCharge">:-  Rs.</td><!-- package price will display here -->
		</tr>
		<tr>
			<td>Service Charges and Tax</td>
			<td id="serviceCharge">:-  Rs.</td><!-- service charge will display here -->
		</tr>
		<tr>
			<td></td>
			<td ><hr></td><!-- hr line -->
		</tr>
		<tr>
			<td>Total Charges</td>
			<td id="totalCharge">:-  Rs.</td><!-- total charges will display here -->
		<tr>
		<tr>
			<td colspan="2" style="color:red;">Note:If you get any extra services,you have to pay later.</td>
		<tr>
		</table>
		
		<!-- End of  Payment Summry table -->
		
		<!-- payment detail form start -->
		<form class="paymentForm" onsubmit="return validation()" method="post">
		<fieldset>
		  <legend>Credit Card Guarantee</legend>
		  <input type="hidden" name="editID"  value="<?php echo $ID;?>" >
		  <table class="paymentTbl" >
			  <tr>
				<td colspan="5">Your credit card will be used as a guarantee of your baquet hall reservation.It will not be charged at the time of booking</td>
			  </tr>
			  <tr>
				  <td><label>Payment Methords:-</label></td>
				  <td><img src = "images/visa.png"  class="card" alt="visa card"></td>
				  <td><img src = "images/master.jpg"  class="card" alt="master card"></td>
				  <td><img src = "images/american.jpg"  class="card" alt="american card"></td>
				  <td><img src = "images/discover.png"  class="card" alt="discover card"></td>
			  </tr>
			  <tr>
				  <td><label>Select Payment Methord:-</label></td>
				  <td>
					  <input type="radio" id="visa" name="radio" value="Visa" onclick="showCard('visa')" class="boxS">
					  <label for="html">Visa</label><br>
				  </td>
				  
				  <td>
					  <input type="radio" id="master" name="radio" value="Master" onclick="showCard('master')" class="boxS">
					  <label for="html">Master</label><br>
				  </td>
				  
				  <td>
					  <input type="radio" id="american" name="radio" value="American" onclick="showCard('american')" class="boxS">
					  <label for="html">American</label><br>
				  </td>
				  
				  <td>
					  <input type="radio" id="discover" name="radio" value="Discover" onclick="showCard('discover')" class="boxS">
					  <label for="html">Discover</label><br>
				  </td>
			  <tr>
			  <tr>
				  <td><label>Card holder's Name:-</label></td>
				  <td><input type="text" name="name" placeholder="Enter Card holder's Name" class="box" id="holder" oninput="showDetail('holder')"  pattern="[a-z,A-Z, ]{2,}"required></td>
				  <td rowspan="5" colspan="3" >
				  
				  <!-- card detail will display in this table -->
					<table class="cardSummery"  id="cardTbl" >
						<tr>
						<td colspan="4" align="right"><img src="" id="image" alt="Card type Image" class="card" > </td>
						</tr>
						<tr>
							<td>Card Holder's Name:</td>
							<td colspan="3" id="holderName"></td>
						</tr>
						<tr>
							<td>Card Number:</td>
							<td id="cardNumber"></td>
							<td>CVC No:</td>
							<td id="cvcNumber"></td>
						</tr>
						<tr>
							<td>Expiry Date<br/>(Month/Year):</td>
							<td id="date"></td>
						</tr>
					</table>
				  
				  </td>
			  </tr>
			  <tr>
				  <td><label>Card Number:-</label></td>
				  <td >
				  <input type="text" name="number" placeholder="Enter Card Number" class="box" id="cardNum" required oninput="showDetail('cardNum')" pattern="[0-9].{12,16}" required >
				  <div  id="cardError" class="error" ></div>
				  </td>
			  </tr>

				
			  <tr>
				  <td><label>Expiry Date(Month/Year):-</label></td>
				  <td>
					<select name="month" id="month" onchange="showDetail('month')" class="boxS"  required>
						<option>Select Month</option>
						<script>
						 for (var i = 01; i < 13; i++) 
						 {
						    document.write("<option>"+i+"</option>");
						 } 
						</script>
						
					</select>
					<select name="year" id="year" onchange="showDetail('year')" class="boxS"  required>
						<option >Select Year</option>
						<script>
						
						 for (var i = 2021; i < 2051; i++) 
						 {
						    document.write("<option>"+i+"</option>");
						 } 
						</script>
					</select>
				  </td>
			  </tr>
			  <tr>
				  <td><label>CVC No:-</label></td>
				  <td><input type="text" name="cvcNumber" class="box" placeholder="CVC" id="cvc" oninput="showDetail('cvc')" pattern="[0-9]{3}" required> </br><i class="fa fa-lock"></i>128-bit secured</td>
			  </tr>
			  <tr>
				  <td></td>
				  <td><input type="text" name="amount" value="" id="amount" style="display:none;"></td>
			  </tr>
			  <tr >
				<td colspan="5"><a href="bookupdate.php" class="previous">&laquo; BACK</a><input type="submit" value="PAY NOW" class="btn" id="pay" name="sub"><input type="reset" value="CLEAR" class="btn" id="clear" onclick="clearAll()"></td>
			  </tr>
		  </table>
		 </fieldset>

		</form>
		
		<!-- payment detail form end here -->
		
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