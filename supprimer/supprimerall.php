<?php
if (isset($_POST['yes'])) {
   $con=mysqli_connect('localhost','root','','groupescolaire');
   $req="DELETE * FROM emploidutemps ";
   $res=mysqli_query($con,$req);
   header("location:respo.php");
}


?>