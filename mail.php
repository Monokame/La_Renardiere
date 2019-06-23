<?php
  if(isset($_POST)){
    try {
      $toEmail = 'projetrenardiere@gmail.com';
      $emailSubject='Message de votre site';
      $mailheader = "From: ".$_POST["email2"]."\r\n";
      $mailheader .= "Reply-to: ".$_POST["email2"]."\r\n";
      $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $MESSAGE_BODY = "Nom: ".$_POST["name2"]."<br>";
      $MESSAGE_BODY .= "Prénom: ".$_POST["firstname2"]."<br>";
      $MESSAGE_BODY .= "Email: ".$_POST["email2"]."<br>";
      $MESSAGE_BODY .= "Telephone: ".$_POST["tel2"]."<br>";
      $MESSAGE_BODY .= "Commentaire: ".nl2br($_POST["message"])."<br>";
      mail($toEmail, $emailSubject, $MESSAGE_BODY, $mailheader);
      header('Location:index.php');
    } catch (\Throwable $th) {
      echo $th;
    }
  }
?>
