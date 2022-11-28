<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
		
		echo'<script>alert("succecssfully logout")</script>';
            //Redirect to user dashboard page
        header("Location: home.html");
		exit;
    }
?>
