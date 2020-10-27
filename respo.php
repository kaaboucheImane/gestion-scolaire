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
  #navfix {
    position: fixed;
    z-index: 1;
    top: 70px;
    left: 60em;
    background: #eee;
    overflow-x: hidden;
  }
  .nav a#i8:hover{
    background-color:#f8ea18 ;
  }
  .nav a#i7{
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
                        <li ><a href="respo.php" id="i7">Données</a></li>
                        <li ><a href="bdinscri.php" id="i8">Les inscrits</a></li>
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
  
<div class="container text-center" style="margin-top: 5em;">    
  <div class="row">
    <div class="col-sm-3 well text-left" id="navfix" style="background-color: white;border-color: white;">
      <div class="well" style="background-color: white;border-color: white;">
        <p>
          <a href="#p1" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Agenda</a><br>
          <a href="#p2" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Vacance</a><br>
          <a href="#p3" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Rentrée scolaire</a><br>
          <a href="#p4" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Emploi du temps</a><br>
          <a href="#p5" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Piéce a fournir</a><br>
          <a href="#p6" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Enseignant</a><br>
          <a href="#p7" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Examen</a><br>
          <a href="#p8" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Réglement intérieur</a><br>
          <a href="#p9" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Actualité</a><br>
          <a href="#p10" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Actualité-Image</a><br>
          <a href="#p11" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Activité parascolaire</a><br>
          <a href="#p12" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Activité parascolaire-Image</a><br>
          <a href="#p13" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Activité parascolaire-Video</a>



        </p>
      </div>
    </div>
    <div class="col-sm-7">
    
      <div class="row">

        <div class="col-sm-12">
          <div class="panel panel-default text-left" id="p1">
            <div class="panel-body">
               <p><small>Agenda</small></p> 
               <hr>
               <table class="table table-striped">
                 <thead>
                    <tr>
                     <th>Date</th>
                     <th>De</th>
                     <th>A</th>
                     <th>Titre</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM agenda";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                        $id=$rows['id'];
                        echo "<tr>";
                       echo"<td>".$rows['date']."</td><td>".$rows['time']."</td><td>".$rows['time2']."</td><td>".$rows['titre']."</td><td>";
                       echo "<a href='supprimer/supprimer.php?id=$id'>x</a>";
                       echo "</td></tr>";
                       }
                    ?>
               </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Ajouter</button>
              
               <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
    
                
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout.php" method="post" enctype="multipart/form-data">
                  	 <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="date" >
                     </div>
	                   <div class="form-group" style="margin-top: 1em;">
                       <label>De:</label>
                       <input type="text" name="time" class="form-control">
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>A:</label>
                       <input type="text" name="time2" class="form-control">
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Titre:</label>
                       <input type="textarea" name="t" class="form-control">
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Texte:</label>
                       <input type="textarea" name="text" class="form-control">
                     </div>
                     
                  
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="panel panel-default text-left" id="p2">
            <div class="panel-body">
               <p><small>Vacance</small></p> 
               <hr>
               <table class="table table-striped">
                 <thead>
                    <tr>
                     <th>Fichier pdp</th>
                     <th>L'année</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM tabe2";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                        $id=$rows['id'];
                        echo "<tr><td>";
                       ?><a href="cool/<?php echo $rows['fichier'];?>" style="text-decoration: none;"><?php echo $rows['fichier'];?></a><?php
                       echo"</td><td>".$rows['date']."</td><td>";

                       }
                    ?>
               </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModa">Modifier</button>
              
               <div class="modal fade" id="myModa" role="dialog">
                <div class="modal-dialog">
    
               
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modifier</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="modifier/modifier.php" method="post" enctype="multipart/form-data">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="input-group" style="margin-top: 1em;">
                     <div class="form-group">
                       <input type="file" name="pdf">
                     </div>
                     </div>
                  
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Modifier</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="panel panel-default text-left" id="p3">
            <div class="panel-body">
               <p><small>Rentrée scolaire</small></p> 
               <hr>
               <table class="table table-striped">
                 <thead>
                    <tr>
                     <th>a partir</th>
                     <th>jusqu'a</th>
                     <th>date</th>
                     <th>heurs1</th>
                     <th>heurs2</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM rentreescolaire";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                        echo "<tr><td>".$rows['jr1']."</td><td>".$rows['jr2']."</td><td>".$rows['date']."</td><td>".$rows['time1']."</td><td>".$rows['time2']."</td></tr>";

                       }
                    ?>
               </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myMod">Modifier</button>
              
               <div class="modal fade" id="myMod" role="dialog">
                <div class="modal-dialog">
    
                
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modifier</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="modifier/modifier1.php" method="post" enctype="multipart/form-data">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="input-group" style="margin-top: 1em;">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                       <input type="text" name="j1" class="form-control" placeholder="Entrer jr1">
                     </div>
                     <div class="input-group" style="margin-top: 1em;">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                       <input type="text" name="j2" class="form-control" placeholder="Entrer jr2">
                     </div>
                     <div class="input-group" style="margin-top: 1em;">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                       <input type="text" name="h1" class="form-control" placeholder="Entrer h1">
                     </div>
                     <div class="input-group" style="margin-top: 1em;">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                       <input type="text" name="h2" class="form-control" placeholder="Entrer h2">
                     </div>
                     
                  
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Modifier</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="panel panel-default text-left" id="p4">
            <div class="panel-body">
               <p><small>Emploi du temps</small></p> 
               <hr>
               <table class="table table-striped">
                 <thead>
                    <tr>
                     <th>Fichier pdf</th>
                     <th>niveau</th>
                     <th>filiere</th>
                     <th>Année scolaire</th>
                     <th>date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM emploidutemps";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                         $id=$rows['id'];
                         echo "<tr><td>";
                         ?><a href="cool/<?php echo $rows['pdf'];?>" style="text-decoration: none;"><i class="fa fa-file-pdf-o" aria-hidden="true" style="color: red;"></i></a><?php
                         echo "</td><td>".$rows['annv']."</td><td>".$rows['filiere']."</td><td>".$rows['sm']."</td><td>";
                         echo $rows['date']."</td><td>";
                         echo "<a href='supprimer/supprimer2.php?id=$id'>x</a>";
                         echo "</td></tr>";

                       }
                    ?>
               </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myMo">Ajouter</button>

              
               <div class="modal fade" id="myMo" role="dialog">
                <div class="modal-dialog">
    
               
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout2.php" method="post" enctype="multipart/form-data">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Niveau scolaire:</label>
                       <select class="form-control" name="nv">
                         <option>Maternelle</option>
                         <option>Primaire</option>
                         <option>Collège</option>
                         <option>Lycée</option>
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Filiére:</label>
                       <select class="form-control" name="fil">
                         <option>Sciences expérimentales</option>
                         <option>Sciences mathématiques</option>
                         <option>sciences économiques</option>
                         <option>none</option>
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Année scolaire:</label>
                       <select class="form-control" name="sm" >
                         <option>1ére</option>
                         <option>2éme</option>
                         <option>3éme</option>
                         <option>4éme</option>
                         <option>5éme</option>
                         <option>6éme</option>
                       </select>
                     </div>
                      
                       <input type="file" name="pdf"  >
                     
                     
                  
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="panel panel-default text-left" id="p5">
            <div class="panel-body">
               <p><small>Piéce a fournir</small></p> 
               <hr>
               <table class="table table-striped">
                 <thead>
                    <tr>
                     <th>Fichier pdf</th>
                     <th>niveau</th>
                     <th>filiere</th>
                     <th>Année scolaire</th>
                     <th>date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM pieceafournir";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                         $id=$rows['id'];
                         echo "<tr><td>";
                          ?><a href="cool/<?php echo $rows['pdf'];?>" style="text-decoration: none;"><i class="fa fa-file-pdf-o" aria-hidden="true" style="color: red;"></i></a><?php
                         echo "</td><td>".$rows['annv']."</td><td>".$rows['filiere']."</td><td>".$rows['sm']."</td><td>";
                         echo $rows['date']."</td><td>";
                         echo "<a href='supprimer/supprimer3.php?id=$id'>x</a>";
                         echo "</td></tr>";

                       }
                    ?>
               </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#my">Ajouter</button>
              
               <div class="modal fade" id="my" role="dialog">
                <div class="modal-dialog">
    
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout3.php" method="post" enctype="multipart/form-data">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Niveau scolaire:</label>
                       <select class="form-control" name="nv">
                         <option>Maternelle</option>
                         <option>Primaire</option>
                         <option>Collège</option>
                         <option>Lycée</option>
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Filiére:</label>
                       <select class="form-control" name="fil">
                         <option>Sciences expérimentales</option>
                         <option>Sciences mathématiques</option>
                         <option>sciences économiques</option>
                         <option>none</option>
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Année scolaire:</label>
                       <select class="form-control" name="sm" >
                         <option>1ére</option>
                         <option>2éme</option>
                         <option>3éme</option>
                         <option>4éme</option>
                         <option>5éme</option>
                         <option>6éme</option>
                       </select>
                     </div>
                      
                       <input type="file" name="pdf"  >
                     
                     
                  
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>

       <!--<div class="col-sm-12">
          <div class="panel panel-default text-left" id="p6">
            <div class="panel-body">
               <p><small>Inscription</small></p> 
               <hr>
               <table class="table table-striped">
                 <thead>
                    <tr>
                     <th>Fichiere pdf</th>
                     <th>niveau</th>
                     <th>filiere</th>
                     <th>Année scolaire</th>
                     <th>date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     /*  $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM inscription";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                         $id=$rows['id'];
                         echo "<tr><td>";
                         ?><a href="cool/<?php echo $rows['pdf'];?>" style="text-decoration: none;"><?php echo $rows['pdf'];?></a><?php
                         echo "</td><td>".$rows['annv']."</td><td>".$rows['filiere']."</td><td>".$rows['sm']."</td><td>";
                         echo $rows['date']."</td><td>";
                         echo "<a href='supprimer4.php?id=$id'>x</a>";
                         echo "</td></tr>";

                       }*/
                    ?>
               </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#m">Ajouter</button>
              
               <div class="modal fade" id="m" role="dialog">
                <div class="modal-dialog">
    
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajout4.php" method="post" enctype="multipart/form-data">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Niveau scolaire:</label>
                       <select class="form-control" name="nv">
                         <option>Maternelle</option>
                         <option>Primaire</option>
                         <option>Collège</option>
                         <option>Lycée</option>
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Filiére:</label>
                       <select class="form-control" name="fil">
                         <option>Snx</option>
                         <option>Snphysique</option>
                         <option>snmath</option>
                         <option>none</option>
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Année scolaire:</label>
                       <select class="form-control" name="sm" >
                         <option>1ére</option>
                         <option>2éme</option>
                         <option>3éme</option>
                         <option>4éme</option>
                         <option>5éme</option>
                         <option>6éme</option>
                       </select>
                     </div>
                      
                       <input type="file" name="pdf"  >
                     
                     
                  
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>-->
        <div class="col-sm-12">
          <div class="panel panel-default text-left" id="p6">
            <div class="panel-body">
               <p><small>Enseignants</small></p> 
               <hr>
               <table class="table table-striped" >
                 <thead>
                    <tr>
                     <th>Image</th>
                     <th>Nom</th>
                     <th>Prenom</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM enseignants";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                         $id=$rows['id'];
                         echo "<tr><td>";
                         ?><img src="profimg/<?php echo $rows['image'];?>" width=30em height=30em><?php
                         echo "</td><td>".$rows['nom']."</td><td>".$rows['prenom']."</td><td>";
                         echo "<a href='supprimer/supprimer5.php?id=$id'>x</a>";
                         echo "</td></tr>";

                       }
                    ?>
                  </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#p">Ajouter</button>
              
               <div class="modal fade" id="p" role="dialog">
                <div class="modal-dialog">
    
               
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout5.php" method="post" enctype="multipart/form-data">
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Nom:</label>
                       <input type="text" name="nom" class="form-control">
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Prénom:</label>
                       <input type="text" name="prenom" class="form-control">
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Niveau:</label>
                       <select class="form-control" name="niveau">
                         <option>Maternelle</option>
                         <option>Primaire</option>
                         <option>Collège</option>
                         <option>Lycée</option>
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Année scolaire:</label>
                       <select class="form-control" name="annee" >
                         <option>1ére</option>
                         <option>2éme</option>
                         <option>3éme</option>
                         <option>4éme</option>
                         <option>5éme</option>
                         <option>6éme</option>
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Prof de:</label>
                       <input type="text" name="profde" class="form-control">
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Gmail:</label>
                       <input type="gmail" name="mail" class="form-control">
                     </div>
                      
                       <input type="file" name="image"  >
                     
                     
                  
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="panel panel-default text-left" id="p7">
            <div class="panel-body">
               <p><small>Examen</small></p> 
               <hr>
               <table class="table table-striped" >
                 <thead>
                    <tr>
                     <th>Fichier pdf</th>
                     <th>Niveau scolaire</th>
                     <th>Filiere</th>
                     <th>Semestre</th>
                     <th>Année scolaire</th>
                     <th>Date d'examen</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM examen";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                         $id=$rows['id'];
                         echo "<tr><td>";
                          ?><a href="cool/<?php echo $rows['pdf'];?>" style="text-decoration: none;"><i class="fa fa-file-pdf-o" aria-hidden="true" style="color: red;"></i></a><?php
                         echo "</td><td>".$rows['niveau']."</td><td>".$rows['filiere']."</td><td>".$rows['semestre']."</td><td>".$rows['anneesc']."</td><td>";
                         echo $rows['date']."</td><td>";
                         echo "<a href='supprimer/supprimer6.php?id=$id'>x</a>";
                         echo "</td></tr>";

                       }
                    ?>
                  </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ppp1">Ajouter</button>
              
               <div class="modal fade" id="ppp1" role="dialog">
                <div class="modal-dialog">
    
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout6.php" method="post" enctype="multipart/form-data">
                     <div class="form-group" style="margin-top: 1em;">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Niveau:</label>
                       <select class="form-control" name="niveau">
                         <option>Maternelle</option>
                         <option>Primaire</option>
                         <option>Collège</option>
                         <option>Lycée</option>
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Année scolaire:</label>
                       <select class="form-control" name="annee" >
                         <option>1ére</option>
                         <option>2éme</option>
                         <option>3éme</option>
                         <option>4éme</option>
                         <option>5éme</option>
                         <option>6éme</option>
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Semestre:</label>
                       <select class="form-control" name="semestre" >
                         <option>S1</option>
                         <option>S2</option>
                         
                       </select>
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                       <label>Filiére:</label>
                       <select class="form-control" name="filiere">
                         <option>Sciences expérimentales</option>
                         <option>Sciences mathématiques</option>
                         <option>sciences économiques</option>
                         <option>none</option>
                       </select>
                     </div>
                      
                       <input type="file" name="pdf"  >
                     
                     
                  
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>
        <!--<div class="col-sm-13">
          <div class="panel panel-default text-left" >
            <div class="panel-body">
               <p><small>Menu de la cantine</small></p> 
               <hr>
               <table class="table table-striped" >
                 <thead>
                    <tr>
                     <th>Fichier pdf</th>
                     <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                      // $con=mysqli_connect('localhost','root','','groupescolaire');
                      // $sql="SELECT * FROM menu";
                       /*$res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                          $id=$rows['id'];
                         echo "<tr><td>";
                         ?><a href="cool/<?php echo $rows['pdf'];?>" style="text-decoration: none;"><?php echo $rows['pdf'];?></a><?php
                         
                         echo "</td><td>".$rows['date']."</td><td>";
                         echo "<a href='supprimer7.php?id=$id'>x</a>";
                         echo "</td></tr>";
                        }*/
                    ?>
                  </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#p2">Ajouter</button>
              
               <div class="modal fade" id="p2" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajout7.php" method="post" enctype="multipart/form-data">
                     <div class="form-group" style="margin-top: 1em;">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <input type="file" name="pdf"  > 
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>-->
         <div class="col-sm-13">
          <div class="panel panel-default text-left" id="p8">
            <div class="panel-body">
               <p><small>Réglement intérieur</small></p> 
               <hr>
               <table class="table table-striped" >
                 <thead>
                    <tr>
                     <th>Fichier pdf</th>
                     <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM regle";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                          $id=$rows['id'];
                         echo "<tr><td>";
                          ?><a href="cool/<?php echo $rows['pdf'];?>" style="text-decoration: none;"><i class="fa fa-file-pdf-o" aria-hidden="true" style="color: red;"></i></a><?php
                         
                         echo "</td><td>".$rows['date']."</td><td>";
                         echo "<a href='supprimer/supprimer8.php?id=$id'>x</a>";
                         echo "</td></tr>";
                        }
                    ?>
                  </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ppp3">Ajouter</button>
              
               <div class="modal fade" id="ppp3" role="dialog">
                <div class="modal-dialog">
    
               
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout8.php" method="post" enctype="multipart/form-data">
                     <div class="form-group" style="margin-top: 1em;">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <input type="file" name="pdf"  > 
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-13">
          <div class="panel panel-default text-left" id="p9">
            <div class="panel-body">
               <p><small>Actualité</small></p> 
               <hr>
               <table class="table table-striped" >
                 <thead>
                    <tr>
                    <th>image</th>
                     <th>Titre</th>
                     <th>Date</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM actualite";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                          $id=$rows['id'];
                         echo "<tr><td>";
                         ?><img src="cool/<?php echo $rows['image'];?>" width=30em height=30em><?php                            
                         echo "</td><td>".$rows['titre']."</td><td>".$rows['date']."</td><td>";
                         echo "<a href='supprimer/supprimer9.php?id=$id'>x</a>";
                         echo "</td></tr>";
                        }
                    ?>
                  </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ppp4">Ajouter</button>
              
               <div class="modal fade" id="ppp4" role="dialog">
                <div class="modal-dialog">
    
               
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout9.php" method="post" enctype="multipart/form-data">
                     <div class="form-group" style="margin-top: 1em;">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Titre:</label>
                        <input type="texte" name="titre" class="form-control" >   
                     </div>
                     <div class="form-group">
                        <label for="comment">Texte:</label>
                        <textarea class="form-control"  name="texte"></textarea>
                     </div>
                     <input type="file" name="image"  > 
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-sm-13">
          <div class="panel panel-default text-left" id="p10">
            <div class="panel-body">
               <p><small>Actualité image</small></p> 
               <hr>
               <table class="table table-striped" >
                 <thead>
                    <tr>
                    <th>image</th>
                     <th>Titre</th>
                     <th>Date</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM actualiteimage";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                          $id=$rows['id'];
                         echo "<tr><td>";
                         ?><img src="cool/<?php echo $rows['image'];?>" width=30em height=30em><?php                            
                         echo "</td><td>".$rows['titre']."</td><td>".$rows['date']."</td><td>";
                         echo "<a href='supprimer/supprimer12.php?id=$id'>x</a>";
                         echo "</td></tr>";
                        }
                    ?>
                  </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ppp7">Ajouter</button>
              
               <div class="modal fade" id="ppp7" role="dialog">
                <div class="modal-dialog">
    
               
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout12.php" method="post" enctype="multipart/form-data">
                     <div class="form-group" style="margin-top: 1em;">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Titre:</label>
                        <input type="texte" name="titre" class="form-control" >   
                     </div>
                     
                     <input type="file" name="image"  > 
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-sm-13">
          <div class="panel panel-default text-left" id="p11">
            <div class="panel-body">
               <p><small>Activités Parascolaire</small></p> 
               <hr>
               <table class="table table-striped" >
                 <thead>
                    <tr>
                    <th>image</th>
                     <th>Titre</th>
                     <th>Date</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM activitetab";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                          $id=$rows['id'];
                         echo "<tr><td>";
                         ?><img src="cool/<?php echo $rows['image'];?>" width=30em height=30em><?php                            
                         echo "</td><td>".$rows['titre']."</td><td>".$rows['date']."</td><td>";
                         echo "<a href='supprimer/supprimer10.php?id=$id'>x</a>";
                         echo "</td></tr>";
                        }
                    ?>
                  </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ppp5">Ajouter</button>
              
               <div class="modal fade" id="ppp5" role="dialog">
                <div class="modal-dialog">
    
              
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout10.php" method="post" enctype="multipart/form-data">
                     <div class="form-group" style="margin-top: 1em;">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Titre:</label>
                        <input type="texte" name="titre" class="form-control" >   
                     </div>
                     <div class="form-group">
                        <label for="comment">Texte:</label>
                        <textarea class="form-control"  name="texte"></textarea>
                     </div>
                     <input type="file" name="image"  > 
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-sm-13">
          <div class="panel panel-default text-left" id="p12">
            <div class="panel-body">
               <p><small>Activités Parascolaire-Images</small></p> 
               <hr>
               <table class="table table-striped" >
                 <thead>
                    <tr>
                    <th>image</th>
                     <th>Titre</th>
                     <th>Date</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM activiteimage";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                          $id=$rows['id'];
                         echo "<tr><td>";
                         ?><img src="cool/<?php echo $rows['image'];?>" width=30em height=30em><?php                            
                         echo "</td><td>".$rows['titre']."</td><td>".$rows['date']."</td><td>";
                         echo "<a href='supprimer/supprimer11.php?id=$id'>x</a>";
                         echo "</td></tr>";
                        }
                    ?>
                  </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ppp6">Ajouter</button>
              
               <div class="modal fade" id="ppp6" role="dialog">
                <div class="modal-dialog">
    
                
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout11.php" method="post" enctype="multipart/form-data">
                     <div class="form-group" style="margin-top: 1em;">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Titre:</label>
                        <input type="texte" name="titre" class="form-control" >   
                     </div>
                     
                     <input type="file" name="image"  > 
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>
          </div>
        </div>

        
        <div class="col-sm-13">
          <div class="panel panel-default text-left" id="p13">
            <div class="panel-body">
               <p><small>Activités Parascolaire-Video</small></p> 
               <hr>
               <table class="table table-striped" >
                 <thead>
                    <tr>
                    <th>Video-code</th>
                     <th>Titre</th>
                     <th>Date</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                       $con=mysqli_connect('localhost','root','','groupescolaire');
                       $sql="SELECT * FROM activitevideo";
                       $res=mysqli_query($con,$sql);
                       
                       while($rows=mysqli_fetch_array($res)) {
                          $id=$rows['id'];
                         echo "<tr><td>".$rows['code'];
                         echo "</td><td>".$rows['titre']."</td><td>".$rows['date']."</td><td>";
                         echo "<a href='supprimer/supprimer13.php?id=$id'>x</a>";
                         echo "</td></tr>";
                        }
                    ?>
                  </tbody>
               </table>
               
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ppp10">Ajouter</button>
              
               <div class="modal fade" id="ppp10" role="dialog">
                <div class="modal-dialog">
    
               
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ajouter</h4>
                 </div>
                 <div class="modal-body">
                  <p></p>
                  <form action="ajouter/ajout13.php" method="post" enctype="multipart/form-data">
                     <div class="form-group" style="margin-top: 1em;">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input  type="date" class="form-control" name="time" >
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Titre:</label>
                        <input type="texte" name="titre" class="form-control" >   
                     </div>
                     <div class="form-group" style="margin-top: 1em;">
                        <label>Code:</label>
                        <input type="texte" name="code" class="form-control" >   
                     </div>
                     
                     
                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-success" name="ok">Ajouter</button>
                 </div>
                 </form>
                </div>
               </div>
               </div>
            </div>


         



      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php }else{
  echo '<script>alert("Il faut Connecter");</script>';
 include 'index.php';} ?>