<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Renardière</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="background"></div>
    <header>
        <a href="index.php">
            <h1>La <img src="img/logo.png" alt="Logo de la Renardière"> Renardière</h1>
        </a>
        <nav id="navBar">
            <ul id="parent">
                <li id="accueil" class="btn active" onclick="test(0)">Accueil</li>
                <li id="inscription" class="btn" onclick="test(1)">Inscription</li>
                <li id="classement" class="btn" onclick="test(2)">Classement</li>
                <li id="contact" class="btn" onclick="test(3)">Contact</li>
            </ul>
        </nav>
    </header>
    <!-- <section id="home" style="display: block;" -->
    <section class="accueil" style="display:block;">
        <h2>Accueil</h2><br>
        <div class="width left">
        <p>Bienvenue sur le site de "La Renardière" une course organisée tous les ans par l'association sportive des <a href="http://lesrenardslyonsais.e-monsite.com/" target="blank">Renards Lyonsais</a>.</p>
        <p>La course aura lieu le Dimanche 10 mai 2020, et les inscriptions seront ouvertes jusqu'au Lundi 4 Avril 2020.</p>
        <p>Le règlement de la course est dipsonible <a class="ici" onclick="test(6);">ICI</a>.</p>
        </div>
        <div class="width right">
            <table>
                <tr>
                    <th>Parcours</th>
                    <th>Tarif de base <span>*</span></th>
                    <th>Heure de départ</th>
                </tr>
                <tr>
                    <td>18 km</td>
                    <td>7€</td>
                    <td>9h00</td>
                </tr>
                <tr>
                    <td>28 km</td>
                    <td>9€</td>
                    <td>8h45</td>
                </tr>
                <tr>
                    <td>38 km</td>
                    <td>9€</td>
                    <td>8h30</td>
                </tr>
                <tr>
                    <td>85 km</td>
                    <td>11€</td>
                    <td>8h00</td>
                </tr>
            </table>
            <p class="tarif"><span>* </span>Tarifs:</p>
            <ul>
                <li>-1€ pour les licenciés UFOLEP.</li>
                <li>-2€ pour les mineurs de moins de 12 ans.</li>
                <li>+2€ pour toutes inscriptions sur place.</li>
            </ul>
        </div>
    </section>
    <section id="formInscription">
        <h2>Inscription</h2>
        <br>
        <form action="action.php" method="post">
            <div class="input">
                <label for="nom">Nom <span>*</span></label>
                <input type="text" name="nom" required placeholder="Nom">
            </div>
            <div class="input">
                <label for="prenom">Prénom <span>*</span></label>
                <input type="text" name="prenom" required placeholder="Prénom">
            </div>
            <div class="input">
                <label for="date_naissance">Date de Naissance <span>*</span></label>
                <input type="date" name="date_naissance" data-role="datepicker" required value=>
            </div>
            <div class="input">
                <label for="telephone">Téléphone <span>*</span></label>
                <input id="phone" type="tel" name="telephone" required placeholder="0601020304" pattern="[0-9]{10}">
            </div>
            <div class="input large">
                <label for="adresse">Adresse <span>*</span></label>
                <input type="text" name="adresse" required placeholder="Adresse">
            </div>
            <div class="input">
                <label for="code_postal">Code Postal <span>*</span></label>
                <input type="text" name="code_postal" required placeholder="Code Postal">
            </div>
            <div class="input">
                <label for="ville">Ville <span>*</span></label>
                <input type="text" name="ville" required placeholder="Ville">
            </div>
            <div class="input">
                <label for="email">Courriel <span>*</span></label>
                <input type="email" name="email" required placeholder="xyz@mail.com">
            </div>
            <div class="input">
                <label for="parcours">Parcours <span>*</span></label>
                <select name="parcours">
                    <option value="1">Parcours - 1 - 18 km</option>
                    <option value="2">Parcours - 2 - 28 km</option>
                    <option value="3">Parcours - 3 - 38 km</option>
                    <option value="4">Parcours - 4 - 58 km</option>
                </select>
            </div>
            <div class="input">
                <label for="club">Club</label>
                <input type="text" name="club" placeholder="Club">
            </div>
            <div class="input">
                <label for="ufolep">Ufolep</label>
                <input type="text" name="ufolep" placeholder="Ufolep">
            </div>
            <input type="checkbox" name="reglement" required>
            <label for="reglement">Je confirme avoir pris connaissance du <a class="ici" onclick="test(6);">règlement</a>.</label>
            <input class="btn1" type="submit" value="Envoyer" name="submit">
        </form>
        <br>
        <p><span>*</span> Ces informations sont obligatoires</p>
    </section>
    <section id="result">
        <h2>Classement</h2><br>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Temps</th>
                    <th>Checkpoints</th>
                    <th>Club</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'affichage.php'; ?>
            </tbody>
        </table>
    </section>
    <section id="formContact">
        <h2>Contact</h2><br>
        <form action="mail.php" method="POST">
            <div class="input">
                <label for="email2">Courriel <span>*</span></label>
                <input type="email" name="email2" placeholder="xyz@mail.com">
            </div>
            <div class="input">
                <label for="tel2">Téléphone</label>
                <input type="tel" name="tel2" placeholder="+33">
                <p>&nbsp;</p>
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
    <section class="fin">
        <h2>Votre inscription à bien été pris en compte</h2><br>
        <div class="width left">
            <p>Étant donné que vous êtes mineurs, vous devez télécharger, remplir et amener l'autorisation parentale qui va vous permettre de participer à la course.</p>
            <p>Le paiement se fera sur place.</p>
            <p>Accompagné de cela, vous trouverez également le règlement de la course.</p>
            <p>Faites preuve de fair-play et profitez bien.</p>
        </div>
        <div class="width right">
            <table>
                <tr>
                    <th>Parcours</th>
                    <th>Tarif de base <span>*</span></th>
                    <th>Heure de départ</th>
                </tr>
                <tr>
                    <td>18 km</td>
                    <td>7€</td>
                    <td>9h00</td>
                </tr>
                <tr>
                    <td>28 km</td>
                    <td>9€</td>
                    <td>8h45</td>
                </tr>
                <tr>
                    <td>38 km</td>
                    <td>9€</td>
                    <td>8h30</td>
                </tr>
                <tr>
                    <td>85 km</td>
                    <td>11€</td>
                    <td>8h00</td>
                </tr>
            </table>
            <p class="tarif"><span>* </span>Tarifs:</p>
            <ul>
                <li>-1€ pour les licenciés UFOLEP.</li>
                <li>-2€ pour les mineurs de moins de 12 ans.</li>
                <li>+2€ pour toutes inscriptions sur place.</li>
            </ul>
        </div>
        
        <p class="encouragement">Bonne course à toutes et à tous.</p>
        <p class="autorisation"><a href="pdf\Règlement_Autorisation_Parentale.pdf"
                download="Reglement_Autorisation_Parentale">Règlement avec autorisation parentale</a></p>
            </section>
    <section class="fin">
        <h2>Votre inscription à bien été pris en compte</h2><br>
        <div class="width left">
            <p>Vous trouverez ci-joint le règlement ainsi que les tarifs de la course.</p>
            <p>Le paiement se fera sur place.</p>
            <p>Faites preuve de fair-play et profitez bien.</p>
            <p class="encouragement">Bonne course à toutes et à tous.</p>
        <p class="autorisation"><a href="pdf\Règlement.pdf"
                download="Reglement">Règlement</a></p>
        </div>
        <div class="width right">
            <table>
                <tr>
                    <th>Parcours</th>
                    <th>Tarif de base <span>*</span></th>
                    <th>Heure de départ</th>
                </tr>
                <tr>
                    <td>18 km</td>
                    <td>7€</td>
                    <td>9h00</td>
                </tr>
                <tr>
                    <td>28 km</td>
                    <td>9€</td>
                    <td>8h45</td>
                </tr>
                <tr>
                    <td>38 km</td>
                    <td>9€</td>
                    <td>8h30</td>
                </tr>
                <tr>
                    <td>85 km</td>
                    <td>11€</td>
                    <td>8h00</td>
                </tr>
            </table>
            <p class="tarif"><span>* </span>Tarifs:</p>
            <ul>
                <li>-1€ pour les licenciés UFOLEP.</li>
                <li>-2€ pour les mineurs de moins de 12 ans.</li>
                <li>+2€ pour toutes inscriptions sur place.</li>
            </ul>
        </div>
    </section>
    <section class="regle">
        <h1>Le Règlement de la course</h1>
        <p>Ouvert aux licencié(e)s et non licencié(e)s.</p>
        <p>Les enfants de moins de 14 ans devront être accompagnés par un adulte.</p>
        <p>Seuls les V.T.T. ou tandems sont acceptés. Les vélos devront être en parfait état de sécurité. Chaque participant se doit de respecter strictement le code de la route et les consignes ou injonctions des organisateurs. L’organisation ne pourra en aucun cas être tenue responsable de défaillance physique ou psychique, du dé-balisage par un tiers, d’un défaut de maîtrise de son VTT. Les organisateurs déclinent toute responsabilité en cas de vol de matériel et dégradations causées aux et par les participants.</p>
        <p class="important">L'organisation se réserve le droit, en cas de conditions météorologiques défavorables (vent >80km/h ou orage) de différer le départ, voire d'annuler la randonée ou de modifier les parcours.</p>
        <p><b>RESPECTONS LA NATURE</b>: les participants ne doivent laisser aucun déchet après leur passage.</p>
        <p>Aucune inscription ne pourra être enregistrée sans paiement. L'organisation est couverte par une responsabilité civile obligatoire (notice disponible sur demande).</p>
        <b class="casque">PORT DU CASQUE OBLIGATOIRE</b>
    </section>
    <footer>
        <p>La Renardière - 2019</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>