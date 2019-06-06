<?php

  if(isset($_POST)){

    try {
      $toEmail = 'projetrenardiere@gmail.com';
      $emailSubject='Contact Site';
      $mailheader = "From: ".$_POST["email2"]."\r\n";
      $mailheader .= "Reply-To: ".$_POST["email2"]."\r\n";
      $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $MESSAGE_BODY = "Name: ".$_POST["name2"]." ";
      $MESSAGE_BODY .= "FirstName: ".$_POST["firstname2"]." ";
      $MESSAGE_BODY .= "Email: ".$_POST["email2"]." ";
      $MESSAGE_BODY .= "Comment: ".nl2br($_POST["message"])." ";
      mail($toEmail, $emailSubject, $MESSAGE_BODY, $mailheader);
      header('Location:index.html');
      echo('Coucou');
    } catch (\Throwable $th) {
      echo $th;
    }
  }
?>
