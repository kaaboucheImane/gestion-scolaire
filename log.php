          

            <?php
               $p="357951";
               $u="enseignant"

             ?>

            <?php
                 @
                 session_start();
                 if(isset($_SESSION['user'])){

                   header("location:enseignant.php");
                 }
                
            ?>



            <?php
                         if($_POST['user']==$u && $_POST['password']==$p) {
                         
                            $_SESSION['user']=$u;
                            header("location:enseignant.php");

                          }else {echo '<script>alert("Recommencer!\n votre mot de passe est incorrecte");</script>';
                           include 'loginprof.php';
                          }
                        
               
           ?>
          