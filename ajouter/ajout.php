                 
                 <?php

                     $con=mysqli_connect('localhost','root','','groupescolaire');
                     $target="cool/".basename($_FILES['image']['name']);

                     if (isset($_POST['ok'])) {
                        $time=$_POST['time'];
                        $time2=$_POST['time2'];
                        $texte=$_POST['text'];
                        $date=$_POST['date'];
                        $titre=$_POST['t'];
                        $query=mysqli_query($con,"INSERT INTO agenda values('$time2','$titre','','$date','$time','$texte')");    
                      }

                     header("location:respo.php");
?>