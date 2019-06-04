<?php
if(isset($_POST)){

        $array = [
            "Nom" => $_POST['nom'],
            "Prenom" => $_POST['prenom'],
            "Adresse" => $_POST['adresse'],
            "CodePostal" => $_POST['code_postal'],
            "Ville" => $_POST['ville'],
            "DateNaissance" => $_POST['date_naissance'],
            "Telephone" => $_POST['telephone'],
            "Email" => $_POST['email'],
            "Club" => $_POST['club'],
            "Ufolep" => $_POST['ufolep'],
            "Parcours"=> "1"
        ];
        $json = json_encode($array);
        $url = 'http://localhost/Service1.svc/Insert';
        $opts = array('http' => array (
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $json
            )
        );
        $context = stream_context_create($opts);
        $result = file_get_contents($url, false, $context);
        header('Location:index.html');
        echo $json;
    }
?>
