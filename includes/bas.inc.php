					</div>
					<nav class="span4">
            			<h2>Menu</h2>
						<form action="index.php" method="get">
							Recherche :<br/>
							<input type="text" name="r" value="<?php echo (isset($_GET['r'])) ? $rech : '';?>" placeholder="Informatique, ubuntu ..." class="span3">&nbsp;<input type="submit" value="OK" class="btn">
						</form>
        				<ul>
                			<li><a href="index.php">Accueil</a></li>
                			<li><a href="article.php">Rédiger un article</a></li>
<?php
	if($connecte==true){
		echo "<li><a href='deconnexion.php'>Deconnexion</a></li>";
	}
	else{
		echo"<li><a href='connexion.php'>Connexion</a></li>";
	}
?>
            			</ul> 
          			</nav>
        		</div>   
      		</div>
			<footer>
        		<p>&copy; Nilsine & ULCO 2012</p>
      		</footer>
		</div>
	</body>
	
</html>