<?php
@
 session_start();
 if (isset($_SESSION['user'])) {
   
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Parents-Aya Al Madina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/maternelle.css">
    <link rel="icon" type="image/png" href="icone.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
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
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" >
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"><img src="ah.png" style="width: 8em;height: 2em; margin-top: -0.5em;"></a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
   
                      <ul class="nav navbar-nav pull-right">
                          <li class=""><a href="deconnexion/deconnexion.php" id="i8">Déconnexion</a></li>
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
         <h1>Parents</h1>      
       </div>
      </div>
      <div class="col-sm-3 sidenav">

      </div>
      <div class="col-sm-9">
       
        <hr>
        <h2></h2>
    <div class="col-sm-8" style="margin-top: 2em;">
      <form class="form-horizontal" action="pageparentbd.php" method="post" id="contact_form">
        <fieldset>
          <div class="form-group">
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  placeholder="Nom/Prénom" class="form-control" type="text" name="nom">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input  placeholder="E-Mail Address" class="form-control" type="text" name="mail">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input   class="form-control" type="text" name="phone" placeholder="Téléphone">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control"  placeholder="Message" name="msg"></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning pull-right" name="ok">Envoyer<span class="glyphicon glyphicon-send"></span></button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
          
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
<?php }else{
  echo '<script>alert("Il faut Connecter");</script>';
 include 'parents.php';} ?>
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
}
</style>
