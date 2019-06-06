<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <script src="script.js"></script>
</head>
<body>
    <div class="background"></div>
    <header>
        <a href="index.html"><h1>Les Renards <img src="img/logo.png" alt="Logo de la Renardière"> Lyonsais</h1></a>
        <nav>
            <ul>
                <li id="accueil" onclick="blockHome()">Accueil</li>
                <li id="inscription" onclick="blockInscription()">Inscription</li>
                <li id="classement" onclick="blockResult()">Classement</li>
                <li id="contact" onclick="blockContact()">Contact</li>
            </ul>
        </nav>
    </header>
    <section id="home" style="display: block;">
        <h1>Accueil</h1>
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
                <label for="date_naissance">Date de Naissance <span>*</span></label>
                <input type="date" name="date_naissance" data-role="datepicker" required value=>
                <p>Les informations entrées sont incorrectes.</p>
            </div>
            <div class="input">
                <label for="telephone">Téléphone <span>*</span></label>
                <input type="tel" name="telephone" required placeholder="+33">
                <p>Les informations entrées sont incorrectes.</p>
            </div>
            <div class="input">
                <label for="email">Courriel <span>*</span></label>
                <input type="email" name="email" required placeholder="xyz@mail.com">
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
        <h1>Classement</h1>
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
        <p>La Renardière</p>
        <p>2018</p>
    </footer>
</body>
</html>
