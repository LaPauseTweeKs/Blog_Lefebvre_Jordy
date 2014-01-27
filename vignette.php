<?php
header("Content_type:image/jpeg");

$taille = getimagesize($chemin);
$largeur = 200;
$hauteur = 200;

// imagecreatefromjpeg($chemin)
// imagecreatetruecolor($largeur,$hauteur)
// imagecopyresampled(...)
// imagejpeg
?>