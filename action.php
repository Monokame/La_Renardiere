<?php
if(isset($_POST)){
    header("Content-Type: text/plain; charset=UTF-8");
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
        ];
        $json = json_encode($array);
        $url = 'http://localhost:2901/Service1.svc/Insert';
        echo $json;

        $opts = array('http' => array (
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $json
            )
        );
        $context = stream_context_create($opts);
        $result = file_get_contents($url, false, $context);
?>
