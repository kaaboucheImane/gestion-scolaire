                 <?php

                     $con=mysqli_connect('localhost','root','','groupescolaire');
                     $target="cool/".basename($_FILES['pdf']['name']);

                     if (isset($_POST['ok'])) {
                        $time=$_POST['time'];
                        $pdf=$_FILES['pdf']['name'];
                       
                        $query=mysqli_query($con,"INSERT INTO menu values('','$pdf','$time')");    
                      }
                     move_uploaded_file($_FILES['pdf']['tmp_name'],$target);
                     header("location:respo.php");
                 ?>

