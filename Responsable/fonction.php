<?php
 function connexion(){
   if ($con=mysqli_connect('localhost','root','','grgv')) {
   	  
   	  return $con;
   }else die(mysqli_error());
 }
 function ajout($con,$code,$nom,$ville){
 	$req="insert into grg values('','$code','$nom','$ville')";
 	if (mysqli_query($con,$req)) {
 		//echo "insertion reussie";
 	}else echo "echec";
 }
function afficher($con){
	$req="select * from grg";
	return(mysqli_query($con,$req));
}
function modifier($con,$code,$nom,$ville){
	$req="update grg set code_grg='$code', nom_grg='$nom' ,ville='$ville' where code_grg='$code';";
	return (mysqli_query($con,$req));
}
function supprimer($con,$code){
	$req="delete from grg where code_grg='$code';";
	return(mysqli_query($con,$req));
}

?>