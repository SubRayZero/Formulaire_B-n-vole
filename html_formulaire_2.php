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
                <form class="form" method="POST" action="./html_formulaire_3.php">
                    <div class="inputboxStorage">
                        <label for="region">Région *</label>
                        <select id="region" name="region" required>
                            <option value="">Veuillez sélectionner votre région</option>
                            <option value="isere">Isère</option>
                            <option value="rhone_alps">Rhône Alpes</option>
                        </select>
                    </div>
                    <div class="inputboxStorage">
                        <label for="daily_availability">Disponibilité par jour *</label>
                        <select id="daily_availability" name="daily_availability" required>
                            <option  value="" >Veuillez sélectionner votre jour</option>
                            <option value="lundi">Lundi</option>
                            <option value="Mardi">Mardi</option>
                            <option value="Mercredi">Mercredi</option>
                            <option value="Jeudi">Jeudi</option>
                            <option value="Vendredi">Vendredi</option>
                            <option value="Samedi">Samedi</option>
                            <option value="Dimanche">Dimanche</option>
                        </select>
                    </div>
                    <div class="inputboxStorage">
                        <label for="hours_availability">Disponibilité horaires *</label>
                        <select id="hours_availability" name="hours_availability" required>
                            <option  value="">Veuillez sélectionner votre horaire</option>
                            <option value="8">08h</option>
                            <option value="9">09h</option>
                            <option value="10">10h</option>
                            <option value="11">11h</option>
                            <option value="12">12h</option>
                            <option value="13">13h</option>
                            <option value="13">14h</option>
                            <option value="13">15h</option>
                            <option value="13">16h</option>
                            <option value="13">17h</option>
                        </select>
                    </div>
                    <div class="inputboxStorage">
                        <label for="privileged_job">Poste(s) priviligié(s) *</label>
                        <select id="privileged_job" name="privileged_job" required>
                            <option  value="">Veuillez sélectionner votre poste</option>
                            <option value="ecologie">Ecologie</option>
                            <option value="resto_du_coeur">Resto du coeur</option>
                            <option value="animaux">Animaux</option>
                        </select>
                    </div>
                    <div class="inputboxStorage">
                        <label for="comment">Commentaire</label>
                        <textarea name="comment" id="comment" cols="30" rows="15" ></textarea>
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
</body>

</html>