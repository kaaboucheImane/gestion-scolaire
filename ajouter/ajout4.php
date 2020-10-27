                 <?php

                     $con=mysqli_connect('localhost','root','','groupescolaire');
                     $target="cool/".basename($_FILES['pdf']['name']);

                     if (isset($_POST['ok'])) {
                        $time=$_POST['time'];
                        $pdf=$_FILES['pdf']['name'];
                        $nv=$_POST['nv'];
                        $fil=$_POST['fil'];
                        $sm=$_POST['sm'];
                        $query=mysqli_query($con,"INSERT INTO  inscription values('','$pdf','$nv','$fil','$sm','$time')");    
                      }
                     move_uploaded_file($_FILES['pdf']['tmp_name'],$target);
                     header("location:respo.php");
                 ?>

