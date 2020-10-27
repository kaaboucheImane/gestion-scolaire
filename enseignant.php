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
  .nav a#i8:hover{
    background-color:#f8ea18 ;
  }
    #navfix {
    position: fixed;
    z-index: 1;
    top: 70px;
    left: 60em;
    background: #eee;
    overflow-x: hidden;

}

</style>
<body>
  <div class="navbar-wrapper" >
      <div class="container-fluid">
          <nav class="navbar navbar-fixed-top">
              <div class="container">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" >
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"><img src="ah.png" style="width: 8em;height: 2em; margin-top: -0.5em;"></a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                          <li ><a href="deconnexion/deconnexion2.php" id="i8">Déconnexion</a></li>
                      </ul>
                          
                          
                  </div>
              </div>
          </nav>
      </div>
  </div>
    
  <div class="container text-center" style="margin-top: 5em;">    
    <div class="row">
      <div class="col-sm-3 well text-left" id="navfix" style="background-color: white; border-color: white;">
            <div class="well" style="background-color: #e30713; color: white;">
              <center><h3>Aya Al Madina</h3></center>
            </div>
            <div class="well" style="background-color: white">
                <a href="#p4" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Emploi du temps</a><br>
                <a href="#p5" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Piéce a fournir</a><br>
                <a href="#p7" style="text-decoration: none;"><span class="fa fa-angle-double-right text-primary"></span>Examen</a><br>
            </div>
      </div>
      <div class="col-sm-7">
      
        <div class="row">

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
                           echo "<a href='supprimer/sup2.php?id=$id'>x</a>";
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
                    <h4 class="modal-title">Emploi du temps</h4>
                   </div>
                   <div class="modal-body">
                    <p></p>
                    <form action="aj2.php" method="post" enctype="multipart/form-data">
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
                           echo "<a href='supprimer/sup3.php?id=$id'>x</a>";
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
                    <h4 class="modal-title">Piéce a fournir</h4>
                   </div>
                   <div class="modal-body">
                    <p></p>
                    <form action="aj3.php" method="post" enctype="multipart/form-data">
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
                 <p><small>Examen</small></p> 
                 <hr>
                 <table class="table table-striped">
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
                           echo "<a href='supprimer/sup6.php?id=$id'>x</a>";
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
                    <h4 class="modal-title">Examen</h4>
                   </div>
                   <div class="modal-body">
                    <p></p>
                    <form action="aj6.php" method="post" enctype="multipart/form-data">
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
      </div>
      </div>
      </div>
      </div>










</body>
<style type="text/css">
  .panel-body{
    overflow-x: hidden;
  }
</style>
</html>
<?php }else{
  echo '<script>alert("Il faut Connecter");</script>';
 include 'loginprof.php';} ?>
  