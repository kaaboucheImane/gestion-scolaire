            <?php
               $p="159753";
               $u="parent"

             ?>

            <?php
                 @
                 session_start();
                 if(isset($_SESSION['user'])){

                   header("location:pageparent.php");
                 }
                
            ?>



            <?php
                         if($_POST['user']==$u && $_POST['password']==$p) {
                         
                            $_SESSION['user']=$u;
                            header("location:pageparent.php");

                          }else {echo '<script>alert("Recommencer!\n votre mot de passe est incorrecte");</script>';
                           include 'parents.php';
                          }
                        
               
           ?>
          