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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/formulaire.css">
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