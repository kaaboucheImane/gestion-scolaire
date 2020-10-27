                 <?php
                    $con=mysqli_connect('localhost','root','','groupescolaire');
                    if (isset($_POST['ok'])) {
                         $nom=$_POST['nom'];
                         $mail=$_POST['mail'];
                         $phone=$_POST['phone'];
                         $msg=$_POST['msg'];
                         $query=mysqli_query($con,"INSERT INTO contact values('','$nom','$mail','$phone','$msg')");
                         echo '<script>alert("Bien!\nLes données sont bien Inserer!!!!");</script>';
                         include 'contact.php';

                    }else{   
                          echo '<script>alert("Recommencer!\nles données ne sont pas bien Inserer!!!!");</script>';
                          include 'contact.php';

                        }
                       
                 ?>