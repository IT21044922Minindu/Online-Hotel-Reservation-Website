<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE user_name='$username' and password='$password'";
		$result = mysqli_query($con, $query) or die(mysql_error());
		$row=mysqli_fetch_array($result);
		
	if (is_array($row)) {
            $_SESSION['user_name'] = $username;
			echo'<script>alert("You have succecssfully logged in ")</script>';
            //Redirect to user dashboard page
            header("Location: adminDashboard.php");
        } 
		else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } 
?>
