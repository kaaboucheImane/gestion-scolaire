 <?php

                     $con=mysqli_connect('localhost','root','','groupescolaire');
                     $target="cool/".basename($_FILES['image']['name']);

                     if (isset($_POST['ok'])) {
                        $time=$_POST['time'];
                        $img=$_FILES['image']['name'];
                        $ti=$_POST['titre'];

                       
                        $query=mysqli_query($con,"INSERT INTO actualiteimage values('','$img','$ti','$time')");    
                      }
                     move_uploaded_file($_FILES['image']['tmp_name'],$target);
                     header("location:respo.php");
                 ?>