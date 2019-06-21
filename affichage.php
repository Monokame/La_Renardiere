<?php
        $url = 'http://localhost/Service1.svc/SelectAffichage';
        $data = file_get_contents($url);
        $arraylist = json_decode($data);
        foreach ($arraylist as $list) {
            echo "<tr>";
            echo "<td> $list->nom</td>";
            echo "<td> $list->prenom</td>";
            echo "<td> $list->temps</td>";
            echo "<td> $list->checkpoint/2</td>";
            echo "<td> $list->club</td>";
            echo "</tr>";
        }
                    ?>