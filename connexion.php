<?php
	include('includes/haut.inc.php');
	
	if(var_post('email') && var_post('mdp')){
		$email=mysql_real_escape_string(var_post('email'));
		$mdp=mysql_real_escape_string(var_post('mdp'));
		$sql=mysql_query("SELECT id, email FROM utilisateurs WHERE email='".$email."' AND mdp='".$mdp."'");
		if (mysql_fetch_array($sql)){
			$sid=md5($email.time());
			setcookie('connexion_cookie',$sid,time()+3600);
			$update="UPDATE utilisateurs SET sid='".$sid."' WHERE email='".$email."';";
			mysql_query($update);
			echo mysql_error();
			$_SESSION["connexion"]='co';
			header('Location:index.php');
			exit();
		}
		else{
			$_SESSION["connexion"]='no_user';
			header('Location:connexion.php');
			exit();
		}
	}
	
	if($connecte==false){
?>

<h2>Connexion</h2>

<p>Saisissez les identifiants choisis lors de votre inscription</p>

<form action="connexion.php" method="post" id="form_connexion">
	<fieldset>
		<div class="clearfix">
			<label for="email">Email</label>
			<div class="input"><input id="email" name="email" sire="30" type="email" value=""/></div>
		</div>
		<div class="clearfix">
			<label for="mdp">Mot de passe</label>
			<div class="input"><input id="mdp" name="mdp" size="15" type="password"/></div>
		</div>
		<div class="form-actions">
			<input class="btn btn-large btn-primary" id="submit" type="submit" value="Se connecter"/>
		</div>
	</fieldset>
</form>

<?php
	}
	else{
		header('Location:index.php');
	}
	
	include ('includes/bas.inc.php');
?> 