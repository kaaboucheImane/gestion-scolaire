                 <?php

                     $con=mysqli_connect('localhost','root','','groupescolaire');
                     $target="examen/".basename($_FILES['pdf']['name']);

                     if (isset($_POST['ok'])) {
                        $time=$_POST['time'];
                        $pdf=$_FILES['pdf']['name'];
                        $nv=$_POST['niveau'];
                        $fil=$_POST['filiere'];
                        $sm=$_POST['semestre'];
                        $an=$_POST['annee'];
                        $query=mysqli_query($con,"INSERT INTO examen values('','$pdf','$nv','$fil','$sm','$an','$time')");    
                      }
                     move_uploaded_file($_FILES['pdf']['tmp_name'],$target);
                     header("location:respo.php");
                 ?>

