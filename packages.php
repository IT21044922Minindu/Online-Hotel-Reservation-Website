<!DOCTYPE html>
<?php
	
	require("php/connection.php");
?>
<html>

	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/styleC.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/package.css">
	<script src="js/package.js">
	</script>
	<title>Crowns Hotel</title><!-- add a title (a) -->
	
	</head>

	<body onload="javascript:showSlides()">
		
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
					<li class="menu2" id="menuPkg"><a href ="packages.php" class="list">Packages</a></li>
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
		
		<!-- start of slideshow -->
		<div class="slideshow-container">
			<div class="slides">
				<div class="slide">
				  <div class="numbertext">1 / 4</div>
				  <img src="images/slide1.jpg" height="500px" width="100%">
				  <div class="text">
				  <h1>Weddings</h1>
				  <h2>Wedding Packages at Crown Kaluthara</h2>
				  <h3>At Crown, we pride ourselves on the quality of our produce and the creativity of our cuisine. Our wedding menus are created by award winning Chef Kelly Jackson. Kelly’s multicultural and modern approach to cooking, using predominantly locally sourced ingredients, gives his menus a quality rarely seen in such large scale<br>Our wedding packages and menus cater to cultural tastes and preferences including; Modern Australian, Asian, Indian and Kosher.</h3>
				  </div>
				</div>

				<div class="slide">
				  <div class="numbertext">2 / 4</div>
				  <img src="images/slide2.jpg" height="500px" width="100%">
				  <div class="text">
				  <h1>Weddings</h1>
				  <h2>Wedding Packages at Crown Kaluthara</h2>
				  <h3>At Crown, we pride ourselves on the quality of our produce and the creativity of our cuisine. Our wedding menus are created by award winning Chef Kelly Jackson. Kelly’s multicultural and modern approach to cooking, using predominantly locally sourced ingredients, gives his menus a quality rarely seen in such large scale<br>Our wedding packages and menus cater to cultural tastes and preferences including; Modern Australian, Asian, Indian and Kosher.</h3>
				  </div>
				</div>

				<div class="slide">
				  <div class="numbertext">3 / 4</div>
				  <img src="images/slide3.jpg" height="500px" width="100%">
				  <div class="text">
				  <h1>Weddings</h1>
				  <h2>Wedding Packages at Crown Kaluthara</h2>
				  <h3>At Crown, we pride ourselves on the quality of our produce and the creativity of our cuisine. Our wedding menus are created by award winning Chef Kelly Jackson. Kelly’s multicultural and modern approach to cooking, using predominantly locally sourced ingredients, gives his menus a quality rarely seen in such large scale<br>Our wedding packages and menus cater to cultural tastes and preferences including; Modern Australian, Asian, Indian and Kosher.</h3>
				  </div>
				  
				</div>
				
				<div class="slide">
				  <div class="numbertext">4 / 4</div>
					<img src="images/slide4.jpg" height="500px" width="100%">
				  <div class="text">
				  <h1>Weddings</h1>
				  <h2>Wedding Packages at Crown Kaluthara</h2>
				  <h3>At Crown, we pride ourselves on the quality of our produce and the creativity of our cuisine. Our wedding menus are created by award winning Chef Kelly Jackson. Kelly’s multicultural and modern approach to cooking, using predominantly locally sourced ingredients, gives his menus a quality rarely seen in such large scale<br>Our wedding packages and menus cater to cultural tastes and preferences including; Modern Australian, Asian, Indian and Kosher.</h3>
				  </div>
				</div>		 
			</div>
		</div>
		<!-- end of slideshow -->
		<center><h2 >Make the most special day of your life an unforgettable experience. Host this special occasion with extravagance by choosing a package that meets your requirements</h2></center>
		
		<!-- start of packages -->
		<?php
		$query = "SELECT* From package";
		$query_run = mysqli_query($con,$query);
		
		
		if(mysqli_num_rows($query_run)>0)
		{
		   $i=0;
		   while($row = mysqli_fetch_assoc($query_run))
		   {
		?>
			<div class="pkg">
			<div class="pkgName">
				<h2 class="name"><center><?php echo $row ['Package_Name']?> </center></h2>
				<h4 class="price"><center>LKR <?php echo $row ['Package_Price']?> per person</center></h4>
			</div>
			<img src="uploadpictures/<?php echo $row['Picture']?>" class="pkgImg" alt="Package Image">
			<div class="details">
			<?php 
			$str = $row ['Package_Details'];
			$array=explode("\n",$str);
			$length = count($array);
			for ($i = 0; $i < $length; $i++) {
			
			if($i==0 || $i==4 )
			{
			?>
			<b><?php print $array[$i];?></b>
			<?php
			}
			
			else
			{
			?>
			  <li><?php print $array[$i];?></li></br>
		    <?php
			}
			
			}
			?>
			<b>View the e-brochure below for complete package details</b>
			</div>
			
			<a href="uploadpdfs/<?php echo $row['Brocher']?>" class="pkgBtn1">View Brocher</a>
			<a href ="contactUs.html" class="pkgBtn2">Enquire Now</a>
				
			</div>
		<?php		
			$i++;
		   }
		}
		
		else
		{
		}
		?>
	
		<!-- end of packages -->
		
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