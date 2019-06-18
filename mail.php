<?php

  if(isset($_POST)){

    try {
      $toEmail = 'projetrenardiere@gmail.com';
      $emailSubject='Contact Site';
      $mailheader = "De: ".$_POST["email2"]."\r\n";
      $mailheader .= "Répondre à: ".$_POST["email2"]."\r\n";
      $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $MESSAGE_BODY = "Nom: ".$_POST["name2"]."<br>";
      $MESSAGE_BODY .= "Prénom: ".$_POST["firstname2"]."<br>";
      $MESSAGE_BODY .= "Email: ".$_POST["email2"]."<br>";
      $MESSAGE_BODY .= "Commentaire: ".nl2br($_POST["message"])."<br>";
      mail($toEmail, $emailSubject, $MESSAGE_BODY, $mailheader);
      header('Location:index.php');
    } catch (\Throwable $th) {
      echo $th;
    }
  }
?>
