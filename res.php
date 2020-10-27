               


            <?php
               $p="15987";
               $u="respo";

             ?>

            <?php
                 @
                 session_start();
                 if(isset($_SESSION['user'])){

                   header("location:respo.php");
                 }
                
            ?>



            <?php
                         if($_POST['user']==$u && $_POST['password']==$p) {
                         
                            $_SESSION['user']=$u;
                            header("location:respo.php");

                          }else {echo '<script>alert("Recommencer!\n votre mot de passe est incorrecte");</script>';
                           include 'index.php';
                          }
                        
               
           ?>
          