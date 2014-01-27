<?php
	include('includes/haut.inc.php');
	
	$app=2;
	$page=(var_get('p'))?var_get('p'):1;
	$debut=(($page -1)*$app);
	$total=mysql_query("SELECT COUNT(*) AS total FROM articles");
	$total=mysql_fetch_array($total);
	$total=$total['total'];
	$nb_pages=(($total>0)?ceil($total/$app):1);
	
	if(var_get('r')){
		$rech=mysql_real_escape_string($_GET['r']);
		$sql="SELECT * FROM articles WHERE titre LIKE '%".$rech."%' OR texte LIKE '%".$rech."%' ORDER BY date DESC LIMIT $debut,$app;";
		$articles="SELECT COUNT(*) AS total FROM articles WHERE titre LIKE '%".$rech."%' OR texte LIKE '%".$rech."%';";
		$nbarticles=mysql_query($articles);
		$data=mysql_fetch_array($nbarticles,MYSQL_ASSOC);
		echo $data['total']." résultat(s).";
	}
	else{
		$sql="SELECT * FROM articles ORDER BY date DESC LIMIT $debut,$app;";
		$articles="SELECT COUNT(*) AS total FROM articles;";
	}
	$result=mysql_query($sql);
	while($data=mysql_fetch_assoc($result)){
		$texte=htmlspecialchars($data['texte']);
		$texte=str_replace("\n","<br/>",$texte);
		echo "<h3>".$data['titre']."</h3>";
		echo "<p>".str_replace("\n","<br/>",$data['texte'])."</p>";
		echo "<p>".date('d/m/y',$data['date'])."</p>";
?>

<a href="article.php?id=<?php echo $data['id'];?>" class="btn btn-large btn-primary">Modifier</a>
<a href="supprimer_article.php?id=<?php echo $data['id'];?>" class="btn btn-large btn-primary">Supprimer</a>

<?php
	}
?>

<br/><br/>

<?php
	if($page>1 && $page<=$nb_pages){
		echo "<a href='index.php?p=".($page-1)."'>Précédent</a> ";
	}
    for($i=1;$i<=$nb_pages;$i++){
			echo "<a href='index.php?p=".$i."'>".$i."</a>, ";
	}
	if($page<$nb_pages){
		echo "<a href='index.php?p=".($page+1)."'>Suivant</a> ";
	}

	include('includes/bas.inc.php');
?>

<!--
index.php

while(){
	file_exist(chemin)
}

index.tpl

{foreach ...}
	{if $data.image}
		<img src="{$data.image}">
{/foreach}
-->