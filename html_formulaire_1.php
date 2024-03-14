<?php
session_start();
$_SESSION = $_POST;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire Bénévole</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <script src="/javascript/validity.js"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header">
        <a href="./index.php">
            <div class="header_nav_bar">Accueil</div>
        </a>
        <a href="./connection_personal_space.php">
            <div class="header_nav_bar">Mon compte</div>
        </a>
    </header>


    <section class="section_formulaire">
        <div class="box_formulaire">
            <div class="box_formulaire_center">
                <form class="form" method="POST" action="./html_formulaire_2.php" onsubmit="checkFormValidity()">
                    <div class="inputboxStorage">
                        <label for="nom">Nom *</label>
                        <input type="text" name="nom" id="nom" required>
                    </div>
                    <div class="inputboxStorage">
                        <label for="prenom">Prenom *</label>
                        <input type="prenom" name="prenom" id="prenom" required>
                    </div>
                    <div class="inputboxStorage">
                        <label for="age">Age *</label>
                        <input type="age" name="age" id="age" required>
                    </div>
                    <div class="inputboxStorage">
                        <label for="sexe">Sexe *</label>
                        <select id="sexe" name="sexe" id="sexe" required>
                            <option  value="femme">Choisir</option>
                            <option value="femme">Femme</option>
                            <option value="homme">Homme</option>
                            <option value="non_specifie">Secret</option>
                        </select>
                    </div>
                    <div class="inputboxStorage">
                        <label for="numtel">Numéro de téléphone *</label>
                        <input type="numtel" name="numtel" id="numtel" required>
                    </div>
                    <div class="inputboxStorage">
                        <label for="email">Adresse mail *</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="inputboxStorage">
                        <label for="confirm_email">Confirmation adresse mail *</label>
                        <input type="confirm_email" name="confirm_email" id="confirm_email" required>
                    </div>
                    <input type="submit" value="Suivant" id="inscription" class="button" />
                </form>
            </div>
        </div>

    </section>

    <footer>
        <div class="footer_nav_bar">Mentions légales</div>
        <div class="footer_nav_bar">CGU</div>
        <div class="footer_nav_bar">Plan du site</div>
    </footer>
    <script src="./javascript/validity.js"></script>
</body>

</html>