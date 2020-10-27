<?php
$con=mysqli_connect('localhost','root','','groupescolaire');
$id=$_GET['id'];
$req="delete from agenda where id='$id';";
$res=mysqli_query($con,$req);
header("location:respo.php");

?>