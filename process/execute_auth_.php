<?php 

	session_start();
	// Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['id'])){
		header('Location: login.php');
		exit();
	}
    
 ?>

