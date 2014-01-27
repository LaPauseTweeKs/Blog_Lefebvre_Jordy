<?php
	include('includes/haut.inc.php');
	
	$id=(int)var_get('id');
	$sql="DELETE FROM articles WHERE id=$id";
	$_SESSION['article']='supprimé';
	mysql_query($sql);
	header('Location:index.php');
	
	include('includes/bas.inc.php');
?>