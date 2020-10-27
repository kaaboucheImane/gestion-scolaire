                 <?php

                     $con=mysqli_connect('localhost','root','','groupescolaire');
                     $target="profimg/".basename($_FILES['image']['name']);

                     if (isset($_POST['ok'])) {
                        $nom=$_POST['nom'];
                        $image=$_FILES['image']['name'];
                        $niveau=$_POST['niveau'];
                        $annee=$_POST['annee'];
                        $prenom=$_POST['prenom'];
                        $profde=$_POST['profde'];
                        $mail=$_POST['mail'];
                        $query=mysqli_query($con,"INSERT INTO  enseignants values('','$nom','$prenom','$niveau','$annee','$profde','$image','$mail')");    
                      }
                     move_uploaded_file($_FILES['image']['tmp_name'],$target);
                     header("location:respo.php");
                 ?>

