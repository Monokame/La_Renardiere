<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>La Renardière</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    </head>
    <body>
        <div class="background"></div>
        <header>
            <a href="index.html"><h1>La <img src="img/logo.png" alt="Logo de la Renardière"> Renardière</h1></a>
            <nav>
                <ul id="parent">
                    <li id="accueil" class="btn active" onclick="blockHome()">Accueil</li>
                    <li id="inscription" class="btn" onclick="blockInscription()">Inscription</li>
                    <li id="classement" class="btn" onclick="blockResult()">Classement</li>
                    <li id="contact" class="btn" onclick="blockContact()">Contact</li>
                </ul>
            </nav>
        </header>
        <section id="home" style="display: block;">
                <h1>Accueil</h1><br>
            </section>
            <section id="formInscription">
                <h1>Inscription</h1><br>
                <form action="action.php" method="post">
                    <div class="input">
                        <label for="nom">Nom <span>*</span></label>
                        <input type="text" name="nom" required placeholder="Nom">
                        <p>Les informations entrées sont incorrectes.</p>
                    </div>
                    <div class="input">
                        <label for="prenom">Prénom <span>*</span></label>
                        <input type="text" name="prenom" required placeholder="Prénom">
                        <p>Les informations entrées sont incorrectes.</p>
                    </div>
                    <div class="input">
                        <label for="date_naissance">Date de Naissance <span>*</span></label>
                        <input type="date" name="date_naissance" data-role="datepicker" required value=>
                        <p>Les informations entrées sont incorrectes.</p>
                    </div>
                    <div class="input">
                        <label for="telephone">Téléphone <span>*</span></label>
                        <input type="tel" name="telephone" required placeholder="+33">
                        <p>Les informations entrées sont incorrectes.</p>
                    </div>
                    <div class="input large">
                        <label for="adresse">Adresse <span>*</span></label>
                        <input type="text" name="adresse" required placeholder="Adresse">
                        <p>Les informations entrées sont incorrectes.</p>
                    </div>
                    <div class="input">
                        <label for="code_postal">Code Postal <span>*</span></label>
                        <input type="text" name="code_postal" required placeholder="Code Postal">
                        <p>Les informations entrées sont incorrectes.</p>
                    </div>
                    <div class="input">
                        <label for="ville">Ville <span>*</span></label>
                        <input type="text" name="ville" required placeholder="Ville">
                        <p>Les informations entrées sont incorrectes.</p>
                    </div>
                    <div class="input">
                        <label for="email">Courriel <span>*</span></label>
                        <input type="email" name="email" required placeholder="xyz@mail.com">
                        <p>Les informations entrées sont incorrectes.</p>
                    </div>
                    <div class="input">
                        <label for="parcours">Parcours <span>*</span></label>
                        <select name="parcours">
                            <option value="1">Parcours - 1 - 18 km</option>
                            <option value="2">Parcours - 2 - 28 km</option>
                            <option value="3">Parcours - 3 - 38 km</option>
                            <option value="4">Parcours - 4 - 58 km</option>
                        </select>
                        <p>Les informations entrées sont incorrectes.</p>
                    </div>
                    <div class="input">
                        <label for="club">Club</label>
                        <input type="text" name="club" placeholder="Club">
                    </div>
                    <div class="input">
                        <label for="ufolep">Ufolep</label>
                        <input type="text" name="ufolep" placeholder="Ufolep">
                    </div>
                    <input class="btn1" type="submit" value="Envoyer" name="submit">
                </form>
                <br>
                <p><span>*</span> Ces informations sont obligatoires</p>
            </section>
            <section id="result">
                <h1>Classement</h1><br>
                <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Temps</th>
                        <th>Checkpoint</th>
                        <th>Club</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
        $url = 'http://localhost/Service1.svc/SelectAffichage';
        $data = file_get_contents($url);
        $arraylist = json_decode($data);
        foreach ($arraylist as $list) {
            echo "<tr>";
            echo "<td> $list->nom</td>";
            echo "<td> $list->prenom</td>";
            echo "<td> $list->temps</td>";
            echo "<td> $list->checkpoint/3</td>";
            echo "<td> $list->club</td>";
            echo "</tr>";
        }
                    ?>
                    </tbody>
        </table>
    </section>
    <section id="formContact">
        <h1>Contact</h1><br>
        <form action="mail.php" method="POST">
            <div class="input">
                <label for="email2">Courriel <span>*</span></label>
                <input type="email" name="email2" placeholder="xyz@mail.com">
                <p>Les informations entrées sont incorrectes.</p>
            </div>
            <div class="input">
                <label for="tel2">Téléphone</label>
                <input type="tel" name="tel2" placeholder="+33"><p>&nbsp;</p>
            </div>
            <div class="input">
                <label for="name2">Nom</label>
                <input type="text" name="name2" placeholder="Nom">
            </div>
            <div class="input">
                <label for="firstname2">Prénom</label>
                <input type="text" name="firstname2" placeholder="Prénom">
            </div>
            <div class="text">
                <label for="message">Message <span>*</span></label>
                <textarea name="message" id="area" required></textarea>
            </div>
            <input class="btn1" type="submit" value="Envoyer" name="submit2">
        </form><br>
        <p><span>*</span> Ces informations sont obligatoires</p>
    </section>
    <footer>
        <p>La Renardière - 2019</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
