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
            "Parcours"=> $_POST['parcours']
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
        // header('Location:index.php');//affiche la page index.html
        include 'index.php';

$date = new DateTime();
// date - 18 ans
$date_18 = $date->sub(new DateInterval('P18Y'));
// si $_POST['date_naissance'] est au format date par exemple = 2001-12-25
$date_naissance = new DateTime($array["DateNaissance"]);

if($date_naissance >= $date_18)
{
    echo "<script>test(4)</script>";
}
else
{
	echo "<script>test(5)</script>";
}
    }
?>
