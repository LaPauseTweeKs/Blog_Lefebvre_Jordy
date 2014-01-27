<?php
	mysql_connect('localhost','root','');
	mysql_select_db('blog');
	session_start();
	$connecte=false;
	if(isset($_COOKIE['connexion_cookie'])){
		$cookie=mysql_real_escape_string($_COOKIE['connexion_cookie']);
		$req=mysql_query("SELECT count(*) as 'connect' FROM utilisateurs WHERE sid='".$cookie."';");
		$conn=mysql_fetch_array($req,MYSQL_ASSOC);
		if ($conn['connect'] == 1) {
			$connecte=true;
			$req=mysql_query("SELECT email FROM utilisateurs WHERE sid='".$cookie."';");
			$mail=mysql_fetch_array($req,MYSQL_ASSOC);
			echo "<div class='alert'>Bonjour ".$mail['email']." !</div>";
		}
	}
?>