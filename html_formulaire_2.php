<?php
session_start();
$_SESSION['form_1'] = $_POST;
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
                <form class="form" method="POST" action="./html_formulaire_3.php" onsubmit="check_form_validity_second()">
                    <div class="inputboxStorage">
                        <label for="region">Région *</label>
                        <select id="region" name="region" required>
                            <option value="">Veuillez choisir..</option>
                            <option value="ain">Ain</option>
                            <option value="ardeche">Ardèche</option>
                            <option value="drome">Drôme</option>
                            <option value="loire">Loire</option>
                            <option value="rhone">Rhône</option>
                            <option value="savoie">Savoie</option>
                            <option value="haute_savoie">Haute Savoie</option>
                        </select>
                    </div>
                    <div class="inputboxStorage">
                        <label for="daily_availability">Disponibilité jour *</label>
                        <select id="daily_availability" name="daily_availability" required>
                            <option value="">Veuillez choisir..</option>
                            <option value="semaine">Semaine</option>
                            <option value="weekend">Weekend</option>
                        </select>
                    </div>
                    <div class="inputboxStorage">
                        <label for="hours_availability">Disponibilité horaires *</label>
                        <select id="hours_availability" name="hours_availability" required>
                            <option value="">Veuillez choisir..</option>
                            <option value="matin">Matin</option>
                            <option value="apres-midi">Après-midi</option>
                            <option value="soir">Soir</option>
                            <option value="nuit">Nuit</option>
                        </select>
                    </div>
                    <div class="inputboxStorage">
                        <label for="privileged_job">Poste(s) priviligié(s)</label>
                        <select id="privileged_job" name="privileged_job">
                            <option value="">Veuillez choisir..</option>
                            <option value="securite">Sécurité</option>
                            <option value="bar">Bar</option>
                            <option value="technique">Technique</option>
                            <option value="animation">Animation</option>
                        </select>
                    </div>
                    <div class="nav_form">
                        <input type="submit" value="Suivant" id="next" class="button" />
                    </div>
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