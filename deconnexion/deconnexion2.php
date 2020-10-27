<?php
 session_start();
 if ($_SESSION['user']) {
 	session_destroy();
 	header('location:../loginprof.php');
 }else{
 	header('location:../enseignant.php');
 }

?>  