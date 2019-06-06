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
        // Créer le json à partir du tableau
        $url = 'http://localhost/Service1.svc/Insert';
        $opts = array('http' => array (
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $json
            )//on envoie les données en format json par un post
        );
        $context = stream_context_create($opts);//crée un contexte de flux
        $result = file_get_contents($url, false, $context);
        //ouvre le fichier pour y écrire le contexte (en l'occurrence l'url)
        header('Location:index.html');//affiche la page index.html
        // echo $json;
    }
?>
