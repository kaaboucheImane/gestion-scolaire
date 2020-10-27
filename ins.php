                 <?php
                    $con=mysqli_connect('localhost','root','','groupescolaire');
                    if (isset($_POST['ok'])) {
                         $nom=$_POST['nom'];
                         $mail=$_POST['mail'];
                         $phone=$_POST['phone'];
                         $option=$_POST['option'];
                         $query=mysqli_query($con,"INSERT INTO inscri values('','$nom','$mail','$phone','$option')");
                         echo '<script>alert("Bien!\nLes données sont bien Inserer!!!!");</script>';
                         include 'inscription.php';

                    }else{   
                          echo '<script>alert("Recommencer!\nles données ne sont pas bien Inserer!!!!");</script>';
                          include 'inscription.php';

                        }
                       
                 ?>