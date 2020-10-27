
<?php
  if (isset($_POST['ok'])) {
    $nom=$_POST['nom'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $msg=$_POST['msg'];

    $to='imanekaabouche1998@gmail.com';
    $subject='Form Submission';
    $message="Name:".$nom."\n"."Phone:".$phone."\n"."Wrote the following :"."\n\n".$msg;
    $headers="From :".$mail;
    if (mail($to,$subject, $message,$headers)) {
      echo '<script>alert("Sent Successfully! thank you"'.$nom.'", we will contact you shortly );</script>';
    }else echo '<script>alert("Recommencer!\n Something went wrong !!!!");</script>';
  }


?>