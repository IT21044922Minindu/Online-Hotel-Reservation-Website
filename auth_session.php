<?php
	require("dashboard.php");
	
    if(!isset($_SESSION["username"]))
	{
        echo $_SESSION['user_name'];
    }
	else
	{
        echo 'Sign up/Sign In';
    }
?>
