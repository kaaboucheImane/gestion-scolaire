<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lycée-Aya Al Madina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/maternelle.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="icone.png">
	<link rel="stylesheet" href="css/diaporama.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
  
</style>
<body style=" ">
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
                          <ul class="nav navbar-nav">
                              <li ><a href="index.php" class="i1">Accueil</a></li>
                              <li class=" dropdown"><a href="emploi.php" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="i4">Elèves <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                      <li><a href="emploi.php" id="i4">Documents Pratiques </a></li>
                                  </ul>
                              </li>
                              <li><a href="parents.php" id="i2">Parents</a></li>
                               <li class="dropdown"><a href="" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="i2">Enseignant<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                      <li><a href="loginprof.php" id="i2">Espace Enseignant</a></li>
                                      <li><a href="profs.php" id="i2">Enseignant card</a></li>
                                  </ul>
                              </li>
                               <li><a href="activite.php" id="i5">Activités Parascolaires</a></li>
                              
                          </ul>
                          <ul class="nav navbar-nav pull-right">
                              <li ><a href="inscription.php" id="i7">Inscription</a>
                                  
                              </li>
                              <li class=""><a href="contact.php" id="i8">Contact</a></li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
      <div class="container-fluid" style="margin-top: 5em;">
        <div class="row content">
          <div class="jumbotron" style="background-color:#007b5e ; color: #dff0d8; border-radius: 0% 0% 0% 0%;">
           <div class="container text-center">
             <h1>Lycée</h1>      
           </div>
          </div>
          <div class="col-sm-3 sidenav">
            <div class="well" style="background-color: #e30713; color: white;">
              <center><h3>Aya Al Madina</h3></center>
            </div>
            <h4 style="margin-top: 2.5em; color: #28235d;" class="text-left">Nos cycles</h4>
              <div>
                <hr style="width: 4em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;">
                <hr style="width:10em; margin-top: -1.5em;">
             </div>
             <a href="maternelle.php" style="text-decoration: none;"><div class="well text-center" style="background-color: #2e3482; height: 4em;">
              <font size="3" color="white"><p>Maternelle</p></font>
            </div>
            </a>
            <a href="primaire.php" style="text-decoration: none;"><div class="well text-center" style="background-color: #2e3482;height: 4em;">
              <font size="3" color="white"><p>Primaire</p></font>
            </div></a>
            <a href="college.php" style="text-decoration: none;"><div class="well text-center" style="background-color: #2e3482;height: 4em;">
              <font size="3" color="white"><p>Collège</p></font>
            </div></a>
            <a href="lycee.php" style="text-decoration: none;"><div class="well text-center" style="background-color: #2e3482;height: 4em;">
              <font size="3" color="white"><p>Lycée</p></font>
            </div></a>
            <h4 style="margin-top: 2.5em; color: #28235d; text-align: left;">Activité</h4>
            <div>
              <hr style="width: 5em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;">
              <hr style="width:10em; margin-top: -1.5em;">
            </div>
              <?php
              
              $con=mysqli_connect('localhost','root','','groupescolaire');

              $sql="SELECT*FROM activitetab ";
              $res=mysqli_query($con,$sql);

           ?>
           <?php
              $i=0;
              while($rows=mysqli_fetch_array($res)) {
                if($i<1){


            ?>

            
           <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
            
            <div class="carousel-inner">
                      <div class="item active">
                           <?php
                                $id=$rows['id'];
                                $time=$rows['date'];
                            ?>
                          <img src="cool/<?php echo $rows['image'];?>" style="width:100%; ">
                          <div class="carousel-caption" style="background-color: black;opacity: 0.5;color: white;">
                              <p><i class="far fa-clock"></i>
                                <small><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo"\t".$rows['date'];?></small><h3 class="carousel-caption-header" ><?php echo $rows['titre'];?></h3></p>
                              <p class="carousel-caption-text hidden-sm hidden-xs">
                                 <?php echo "<a href='activiteparascolaire.php?id=$id && time=$time'>» Lire la suite</a>"?>
                              </p>
                          </div>
                      </div>
                      <?php }$i++;}
                            ?>
                      <?php
              
                        $con=mysqli_connect('localhost','root','','groupescolaire');

                        $sql="SELECT*FROM activitetab";
                        $res=mysqli_query($con,$sql);

                     ?>
                     <?php
                              while($rows=mysqli_fetch_array($res)) {
                              $id=$rows['id']; 
                              $time=$rows['date'];
                     ?>
            
                      <div class="item">
                          
                          <img src="cool/<?php echo $rows['image'];?>" style="width:100%; ">
                          <div class="carousel-caption" style="background-color: black;opacity: 0.5;color: white;">
                              <p><i class="far fa-clock"></i>
                                <small><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo"\t".$rows['date'];?></small><h3 class="carousel-caption-header" ><?php echo $rows['titre'];?></h3></p>
                              <p class="carousel-caption-text hidden-sm hidden-xs">
                                 <?php echo "<a href='activiteparascolaire.php?id=$id && time=$time '>» Lire la suite</a>"?>
                              </p>
                          </div>
                      </div>
                      <?php }
                            ?>
                      
                  </div>


                  <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>

          </div>
          <h4 style="margin-top: 2.5em; color: #28235d; text-align: left;">Actualité</h4>
            <div>
              <hr style="width: 5em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;">
              <hr style="width:10em; margin-top: -1.5em;">
            </div>
              <?php
              
              $con=mysqli_connect('localhost','root','','groupescolaire');

              $sql="SELECT*FROM actualite ";
              $res=mysqli_query($con,$sql);

           ?>
           <?php
              $i=0;
              while($rows=mysqli_fetch_array($res)) {
                if($i<1){


            ?>

     
          <div id="transition-timer" class="carousel slide transition-timer-carousel" data-ride="carousel">
          
            <div class="carousel-inner">
                      <div class="item active">
                           <?php
                                $id=$rows['id'];
                                $time=$rows['date'];
                            ?>
                          <img src="cool/<?php echo $rows['image'];?>" style="width:100%; ">
                          <div class="carousel-caption" style="background-color: black;opacity: 0.5;color: white;">
                              <p><i class="far fa-clock"></i>
                                <small><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo"\t".$rows['date'];?></small><h3 class="carousel-caption-header" ><?php echo $rows['titre'];?></h3></p>
                              <p class="carousel-caption-text hidden-sm hidden-xs">
                                 <?php echo "<a href='actualitepage.php?id=$id && time=$time'>» Lire la suite</a>"?>
                              </p>
                          </div>
                      </div>
                      <?php }$i++;}
                            ?>
                      <?php
              
                          $con=mysqli_connect('localhost','root','','groupescolaire');

                          $sql="SELECT*FROM actualite";
                          $res=mysqli_query($con,$sql);

                       ?>
                       <?php
                                while($rows=mysqli_fetch_array($res)) {
                                $id=$rows['id']; 
                                $time=$rows['date'];
                       ?>
            
                      <div class="item">
                          
                          <img src="cool/<?php echo $rows['image'];?>" style="width:100%; ">
                          <div class="carousel-caption" style="background-color: black;opacity: 0.5;color: white;">
                              <p><i class="far fa-clock"></i>
                                <small><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo"\t".$rows['date'];?></small><h3 class="carousel-caption-header" ><?php echo $rows['titre'];?></h3></p>
                              <p class="carousel-caption-text hidden-sm hidden-xs">
                                 <?php echo "<a href='actualitepage.php?id=$id && time=$time '>» Lire la suite</a>"?>
                              </p>
                          </div>
                      </div>
                      <?php }
                            ?>
                      
                  </div>

 
                  <a class="left carousel-control" href="#transition-timer" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#transition-timer" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>

          </div>

             <h4 style="margin-top: 2.5em; color: #28235d;" class="text-left">Voire aussi</h4>
              <div>
                <hr style="width: 4em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;">
                <hr style="width:10em; margin-top: -1.5em;">
             </div>
            <div class="well" style="background-color: white; border:none;">
             <center>
              <p>
                <a href="index.php" style="text-decoration: none;"><span class="label label-default">Accueil</span></a>
                <a href="emploi.php" style="text-decoration: none;"><span class="label label-primary">Calendrier</span></a>
                <a href="inscription.php" style="text-decoration: none;"><span class="label label-success">Inscription</span></a>
                <a href="contact.php" style="text-decoration: none;"><span class="label label-info">Contact</span></a>
                <a href="mot.php" style="text-decoration: none;"> <span class="label label-danger">Mot du directeur</span></a>

              </p>
             </center>
            </div>
            
          </div>
           <?php
              $con=mysqli_connect('localhost','root','','groupescolaire');
              $sql="SELECT * FROM actualite";
              $res=mysqli_query($con,$sql);

           ?>
          <div class="col-sm-9">
            <small>
              <ul class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li class="active">Lycée</li>
              </ul>
             </small>
              <hr>
              <h2></h2>
              
          </div>
        </div>
      </div>


      <footer id="myFooter">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-3">
                          <h5>Nos Cycles</h5>
                          <ul>
                              <li><a href="maternelle.php">Maternelle</a></li>
                              <li><a href="primaire.php">Primaire</a></li>
                              <li><a href="College.php">Collège</a></li>
                              <li><a href="lycee.php">Lycée</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-3">
                          <h5>Documents Pratiques</h5>
                          <ul>
                              <li><a href="emploi.php">Emploi du temps</a></li>
                              <li><a href="emploi.php">Examen</a></li>
                              <li><a href="emploi.php">Fournitures</a></li>
                              <li><a href="emploi.php">Réglement intérieur</a></li>
                              <li><a href="emploi.php">Calendrier des vacances scolaires</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-3">
                          <h5><a href="activite.php" style="text-decoration: none;" > Activités Parascolaires</h5>
                          <h5><a href="actiualite.php" style="text-decoration: none;">Actualité</a></h5>
                          
                      </div>

                      <div class="col-sm-3">
                          <h5>Contactez nous</h5>
                          <ul class="address">
                                    
                              <li>
                                 <i class="fa fa-phone" aria-hidden="true" style="color: #f5f80a;"></i> <a href="#">05397-21505</a>
                              </li><br>
                              <li>
                                 <i class="fa fa-map-marker" aria-hidden="true" style="color: #f5f80a;"></i> <a href="#">35.597009,-5.344884 Tétouan 93000</a>
                              </li> <br>
                              <li>
                                 <i class="fa fa-envelope" aria-hidden="true" style="color: #f5f80a;"></i> <a href="#">info@example.com</a>
                              </li> 
                         </ul>

                          
                      </div>
                     
                      
                  </div>
              </div>
              <div class="second-bar">
                 <div class="container">
                      <h2 class="logo"><a href="#"> <img src="mini.png" style="width: 5em; height: 2em;"></a></h2>
                      <div class="social-icons">
                          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                          <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                      </div>
                  </div>
              </div>
      </footer>

</body>
</html>
<style type="text/css">
  #myFooter {
    background-color: #007b5e;
    color: white;
}

#myFooter .row {
    margin-bottom: 60px;
}



#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter .logo{
    margin-top: 10px;
}

#myFooter .second-bar .logo a{
    color:white;
    font-size: 28px;
    float: left;
    font-weight: bold;
    line-height: 68px;
    margin: 0;
    padding: 0;
}

#myFooter a {
    color: #d2d1d1;
    text-decoration: none;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}

#myFooter .second-bar {
    text-align: center;
    background-color: #015c47;
    text-align: center;
}

#myFooter .second-bar a {
    font-size: 22px;
    color: #9fa3a9;
    padding: 10px;
    transition: 0.2s;
    line-height: 68px;
}

#myFooter .second-bar a:hover {
    text-decoration: none;
}

#myFooter .social-icons {
    float:right;
}


#myFooter .facebook:hover {
    color: #0077e2;
}

#myFooter .google:hover {
    color: #ef1a1a;
}

#myFooter .twitter:hover {
    color: #00aced;
}

@media screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }

    #myFooter .info{
        text-align: center;
    }
}


#myFooter{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}
</style>