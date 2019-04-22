<?php
if(isset($_POST)){
    header("Content-Type: text/plain; charset=UTF-8");
        $array = [
            "nom" => $_POST['nom'],
            "prenom" => $_POST['prenom'],
            "adresse" => $_POST['adresse'],
            "code_postal" => $_POST['code_postal'],
            "ville" => $_POST['ville'],
            "date_naissance" => $_POST['date_naissance'],
            "telephone" => $_POST['telephone'],
            "email" => $_POST['email'],
            "club" => $_POST['club'],
            "ufolep" => $_POST['ufolep'],];
        $url = 'http://localhost:2901/Service1.svc/Insert';
        $ch = curl_init($url);
        $json = json_encode($array);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
    }
?>