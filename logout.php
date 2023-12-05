<?php 

session_start(); //to ensure you are using same session
unset($_SESSION['id']);
session_destroy();
header('Location:login.php');
	exit;
?>
