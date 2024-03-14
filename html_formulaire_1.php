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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Accueil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="section_formulaire">
        <div class="box_formulaire">
            <div class="box_formulaire_center">
                <form class="form" method="POST" action="./html_formulaire_2.php" onsubmit="check_form_validity_first()">
                    <div class="inputboxStorage">
                        <label for="nom">Nom *</label>
                        <input type="text" minlength="3" maxlength="30" name="nom" id="nom" required>
                    </div>
                    <div class="inputboxStorage">
                        <label for="prenom">Prenom *</label>
                        <input type="prenom" minlength="3" maxlength="30" name="prenom" id="prenom" required>
                    </div>
                    <div class="inputboxStorage">
                        <label for="age">Age *</label>
                        <input type="number" id="age" name="age" min="18" max="45" required />
                    </div>
                    <div class="inputboxStorage">
                        <label for="sexe">Sexe *</label>
                        <select id="sexe" name="sexe" id="sexe" required>
                            <option value="femme">Veuillez choisir..</option>
                            <option value="femme">Femme</option>
                            <option value="homme">Homme</option>
                            <option value="non_specifie">Secret</option>
                        </select>
                    </div>
                    <div class="inputboxStorage">
                        <label for="numtel">Numéro de téléphone *</label>
                        <input type="numtel" minlength="10" maxlength="10" name="numtel" id="numtel" required>
                    </div>
                    <div class="inputboxStorage">
                        <label for="email">Adresse mail *</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="inputboxStorage">
                        <label for="confirm_email">Confirmer adresse mail *</label>
                        <input type="email" name="confirm_email" id="confirm_email" required>
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