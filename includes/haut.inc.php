<!DOCTYPE html>
<html lang="fr">
	
	<head>
		<meta charset="utf-8">
		<title>Mon blog</title>
		<meta name="description" content="Petit blog pour m'initier à PHP">
		<meta name="author" content="LEFEBVRE Jordy">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/main.css" rel="stylesheet">
	</head>

	<body>
<?php
	include('connexion.inc.php');
	include('fonctions.inc.php');
?>
		<div class="container">
			<div class="content">
				<div class="page-header well">
					<h1>Mon Blog <small>Pour m'initier à PHP</small></h1>
				</div>
				<div class="row">
					<div class="span8">
<?php
	include('notifications.inc.php');
?>