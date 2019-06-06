<?php

  if(isset($_POST)){

    try {
      $toEmail = 'projetrenardiere@gmail.com';
      $emailSubject='Contact Site';
      $mailheader = "De: ".$_POST["email2"]."\r\n";
      $mailheader .= "Répondre à: ".$_POST["email2"]."\r\n";
      $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $MESSAGE_BODY = "Nom: ".$_POST["name2"]." ";
      $MESSAGE_BODY .= "Prénom: ".$_POST["firstname2"]." ";
      $MESSAGE_BODY .= "Email: ".$_POST["email2"]." ";
      $MESSAGE_BODY .= "Commentaire: ".nl2br($_POST["message"])." ";
      mail($toEmail, $emailSubject, $MESSAGE_BODY, $mailheader);
      header('Location:index.html');
    } catch (\Throwable $th) {
      echo $th;
    }
  }
?>
