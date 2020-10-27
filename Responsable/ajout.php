<?php
include 'fonction.php';
if (isset($_POST['code'])&&isset($_POST['nom'])&&isset($_POST['ville'])) {
	$code=$_POST['code'];
	$nom=$_POST['nom'];
	$ville=$_POST['ville'];
    $link=connexion();
    ajout($link,$code,$nom,$ville);
    echo "pour afficher cliquer<a href='affichergrg.php'> Ici</a>";
    
}




?>