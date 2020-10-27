<?php
$con=mysqli_connect('localhost','root','','groupescolaire');
$id=$_GET['id'];
$req="delete from  menu where id='$id';";
$res=mysqli_query($con,$req);
header("location:respo.php");

?>