<?php
	include('includes/haut.inc.php');
	
	if(var_post('titre') && var_post('texte')){
		$id=mysql_insert_id();
		$src=$FILES['image']['tmp_name'];
		$dest=dirname(__FILE__)."/data/images/$id.jpg";
		move_uploaded_file($src,$dest);
		$titre=mysql_real_escape_string($_POST['titre']);
		$texte=mysql_real_escape_string($_POST['texte']);
		if(var_post('id')){
			$id=(int)$_POST['id'];
			$sql="UPDATE articles SET titre='".$titre."',texte='".$texte."' WHERE id=".$id.";";
			$_SESSION['article']='modifié';
		}
		else{
			$sql="INSERT INTO articles (titre,texte,date) VALUES ('".$titre."','".$texte."',UNIX_TIMESTAMP());";
			$_SESSION['article']='ajouté';
		}
		mysql_query($sql);
		header('Location:index.php');
		exit();
	}
	else{
		$titre='';
		$texte='';
		$id='';
		if(var_get('id')){
			$id=(int)$_GET['id'];
			$sql="SELECT * FROM articles WHERE id=".$id.";";
			$data=mysql_fetch_array(mysql_query($sql));
			$titre=$data['titre'];
			$texte=$data['texte'];
		}
?>

<form action="article.php" method="post" enctype="multipart/form_data">
 	<input type="hidden" name="id" value="<?php echo $id;?>">
	<div class="clearfix">
		<label for="titre">Titre</label>
		<div class="input">
			<input type="text" name="titre" id="titre" value="<?php echo $titre;?>">
		</div>
	</div>
	<div class="clearfix">
		<label for="texte">Article</label>
		<div class="input">
			<textarea name="texte" id="texte" ><?php echo $texte;?></textarea>
		</div>
	</div>
	<input type="file" name="image">
	<div class="form-actions">
		<input type="submit" value="<?php echo $action_label=(isset($_GET['id']) && $_GET['id']) ? 'Modifier' : 'Ajouter';?>" class="btn btn-large btn-primary">
	</div>
</form>

<?php
	}

	include('includes/bas.inc.php');
?>