<?php 
	include('includes/header.php');
	
	setcookie('connexion_cookie','',-1);
	$_SESSION["connexion"]='deco';
	header('Location:index.php');
?>