<?php
 session_start();
 if ($_SESSION['user']) {
 	session_destroy();
 	header('location:../parents.php');
 }else{
 	header('location:../pageparent.php');
 }

?>