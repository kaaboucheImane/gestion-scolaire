<?php
$con=mysqli_connect('localhost','root','','groupescolaire');
if (isset($_POST['ok'])) {
    $time=$_POST['time'];
    $pdf=$_FILES['pdf']['name'];
    $req="update tabe2 set  date='$time',fichier='$pdf'  ";
	$res=mysqli_query($con,$req);
}

header("location:respo.php");


?>