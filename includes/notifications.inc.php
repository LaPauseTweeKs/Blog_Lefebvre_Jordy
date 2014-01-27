<?php
	include('connexion.inc.php');

	if(isset($_SESSION['article'])){
		switch($_SESSION['article']){
			case 'ajouté' :
				echo "<div class='alert alert-success'>L'article a été ajouté avec succès !</div>";
				break;
			case 'modifié' :
				echo "<div class='alert alert-success'>L'article a été modifié avec succès !</div>";
				break;
			case 'supprimé' :
				echo "<div class='alert alert-success'>L'article a été supprimé avec succès !</div>";
				break;
			case 'erreur' :
				echo "Une erreur est survenue !";
				break;
		}
		unset($_SESSION['article']);
	}
	if(isset($_SESSION['connexion'])){
		switch($_SESSION['connexion']){
			case 'co';
				echo"<div class='alert alert-success'>Vous êtes connecté !</div>";
				break;
			case 'deco':
				echo"<div class='alert alert-info'>Vous avez été déconnecté !</div>";
				break;
			case 'no_user':
				echo"<div class='alert alert-danger'>Le nom d'utilisateur ou le mot de passe est incorrect !</div>";
				break;
			default: echo"<div class='alert alert-info'>Commande inconnue !</div>";
		}
	unset($_SESSION['connexion']);
	}
?>