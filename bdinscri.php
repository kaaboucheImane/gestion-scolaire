<?php
@
 session_start();
 if (isset($_SESSION['user'])) {
   
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aya Al Madina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/respo.css">
    <link rel="icon" type="image/png" href="icone.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/diaporama.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
  .nav a#i7{
    background-color: #f8ea18;
  }
  .nav a#i8:hover{
    background-color:#f8ea18 ;
  }

</style>
<body>
<div class="navbar-wrapper" >
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="ah.png" style="width: 8em;height: 2em; margin-top: -0.5em;"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-left">
                        <li ><a href="respo.php" id="i8">BD</a></li>
                        <li ><a href="bdinscri.php" id="i7">Les inscris</a></li>
                        <li ><a href="contrespo.php" id="i8">Contact</a></li>
                        <li ><a href="parentrespo.php" id="i8">Parents</a></li>
                  </ul>
                  <ul class="nav navbar-nav pull-right">
                        <li ><a href="deconnexion/deconnexion3.php" id="i8">Déconnexion</a></li>
                  </ul>
                        
                        
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="col-sm-12" style="margin-top: 7em;">
    <div class="panel panel-default text-left" id="p1">
      <div class="panel-body">
               <p><small></small></p> 
               <hr>
               <table class="table table-striped">
                 <thead>
                    <tr>
                     <th>Nom/Prenom</th>
                     <th>Mail</th>
                     <th>Phone</th>
                     <th>Classe</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM inscri";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                        $id=$rows['id'];
                        echo "<tr>";
                        echo"<td>".$rows['fullname']."</td><td>".$rows['mail']."</td><td>".$rows['phone']."</td><td>".$rows['option']."</td><td>";
                       echo "<a href='supprimer/supbd.php?id=$id'>x</a>";
                       echo "</td><td>";
                      
                       echo "</td></tr>";
                       }
                    ?>
               </tbody>
               </table>
      </div>
    </div>
</div>
<?php }else{
  echo '<script>alert("Il faut Connecter");</script>';
 include 'index.php';} ?>