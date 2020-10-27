<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact-Aya Al Madina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/contact-us.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="icone.png">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/diaporama.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
                        <a class="navbar-brand" ><img src="ah.png" style="width: 8em;height: 2em; margin-top: -0.5em;"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li ><a href="index.php" class="i1">Accueil</a></li>
                            <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" id="i4">Elèves <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="emploi.php" id="i4">Documents Pratiques</a></li>
                                </ul>
                            </li>
                            <li><a href="parents.php" id="i2">Parents</a></li>
                            <li class="dropdown"><a href="" class="dropdown-toggle " data-toggle="dropdown" id="i2">Enseignant<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="loginprof.php" id="i2">Espace Enseignant</a></li>
                                    <li><a href="profs.php" id="i2">Enseignant card</a></li>
                                </ul>
                            </li>
                            <li ><a href="activite.php"  id="i6">Activités Parascolaires</a> </li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li ><a href="inscription.php"  id="i7">Inscription </a>
                                
                            </li>
                            <li class="active"><a href="contact.php" id="i8">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
   <div class="jumbotron" style="background-color:#007b5e ; color: #dff0d8; margin-top: 5em;">
         <div class="container text-center">
           <h1>Contact</h1>      
         </div>
    </div>
    <div class="container">

        <div class="map" style="margin-top: 4em;box-shadow: 5px 6px #6da485;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12976.983588839823!2d-5.3451722!3d35.5970005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84b527bd313a7c3f!2sAya+Al+Madina!5e0!3m2!1sfr!2sma!4v1524162982104" width="100%" height="450" frameborder="0" style="border:0" ></iframe>
        </div>
     <div class="col-sm-9 col-md-6 col-lg-8" id="box" style=" margin-top: 2em; background-color: white;border-radius: 2% 0% 0% 2%;">
        <h2>Contactez nous!</h2>
        <div>
          <hr style="width: 4em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;">
        </div>
        <hr>
        <form class="form-horizontal" action="conbd.php" method="post" id="contact_form">
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

     <div class="col-sm-3 col-md-6 col-lg-4 " style="margin-top: 2em; border-color: black 2px; background-color: white; height: 25.65em;border-radius: 0% 2% 2% 0%;">
        <aside class="sidebar">
            <div class="single contact-info">
              <h2 class="side-title">Contact Information</h2>
            <div>
             <hr style="width: 4em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;">
            </div>
            <hr>
            <ul class="list-unstyled">
                <li>
                    <div class="icon"><i class="fa fa-map-marker" style="color: blue;"></i></div>
                    <div class="info"><p>35.597009,-5.344884<br>Tétouan 93000</p></div>
                </li>

                <li>
                    <div class="icon"><i class="fa fa-phone" style="color: green;"></i></div>
                    <div class="info"><p>05397-21505<br>06619-66497</p></div>
                </li>

                <li>
                    <div class="icon"><i class="fa fa-envelope" style="color: #f39610;"></i></div>
                    <div class="info"><p>info@example.com<br>sales@yourdomain.com</p></div>
                </li>
            </ul>
          </div>
        </aside>
     </div>
    </div><br><br>
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
                        <a href="https://www.facebook.com/ayaalmadina17.18/" class="facebook"><i class="fa fa-facebook"></i></a>
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
}
</style>