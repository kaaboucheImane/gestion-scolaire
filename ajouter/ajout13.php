 <?php

                     $con=mysqli_connect('localhost','root','','groupescolaire');

                     if (isset($_POST['ok'])) {
                        $time=$_POST['time'];
                        $code=$_POST['code'];
                        $ti=$_POST['titre'];

                       
                        $query=mysqli_query($con,"INSERT INTO activitevideo values('','$code','$time','$ti')");    
                      }
                     header("location:respo.php");
                 ?>