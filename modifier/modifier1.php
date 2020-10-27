<?php
$con=mysqli_connect('localhost','root','','groupescolaire');
if (isset($_POST['ok'])) {
    $time=$_POST['time'];
    $j1=$_POST['j1'];
    $j2=$_POST['j2'];
    $h1=$_POST['h1'];
    $h2=$_POST['h2'];
    $req="update rentreescolaire set  date='$time',jr1='$j1',jr2='$j2', time1='$h1', time2='$h2'  ";
	$res=mysqli_query($con,$req);
}

header("location:respo.php");


?>