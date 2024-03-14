<?php
session_start();
$_SESSION['form_2'] = $_POST;

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
        <div class="header_nav_bar">Administrateur</div>
    </header>

    <section class="section_formulaire">
        <div class="box_formulaire" id="last_form_page">
            <div class="box_formulaire_center">
                <form class="form" method="POST" action="./components/inscription.php" onsubmit="check_form_validity_third()">
                    <div class="inputboxStorage">
                        <label for="comment">Expression libre</label>
                        <textarea name="free_expression" id="free_expression" minlength="30" maxlength="500" cols="20" rows="30" required></textarea>
                    </div>
                    <div class="nav_form">
                        <input type="submit" value="Valider" id="validate" class="button" />
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