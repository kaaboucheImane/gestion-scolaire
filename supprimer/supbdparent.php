<?php
$con=mysqli_connect('localhost','root','','groupescolaire');
$id=$_GET['id'];
$req="delete from logparent where id='$id';";
$res=mysqli_query($con,$req);
header("location:parentrespo.php");

?>