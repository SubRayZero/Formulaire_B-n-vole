<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon espace personnel</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/personal_space.css">
    <script src="annonces.js" type="module"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header">
        <a href="./index.php">
            <div class="header_nav_bar">Accueil</div>
        </a>
        <div class="header_nav_bar">Se déconnecter</div>
    </header>

    <div class="welcome_title">
        <h1>Bienvenue sur votre espace personnel</h1>
    </div>

    <div class="personal_container">
        <div class="mission_container">
            <h2>Vos missions</h2>
            <div class="mission_element">
                <img src="./images/card_1.png" alt="homepage mission card">
                <div class="mission_body">
                    <h3>Je participe au tri de la collecte des restos du coeur</h3>
                    <p>Date de la mission</p>
                    <p>Heure de la mission</p>
                    <p>Adresse de la mission</p>
                </div>
            </div>
            <div class="mission_element">
                <img src="./images/card_2.png" alt="homepage mission card">
                <div class="mission_body">
                    <h3>Je collecte des denrées pour les Restos du Coeur</h3>
                    <p>Date de la mission</p>
                    <p>Heure de la mission</p>
                    <p>Adresse de la mission</p>
                </div>
            </div>
        </div>

        <div class="personal_informations">
            <h2>Vos informations personnelles</h2>
            <div class="personal_informations_element">
                <p>Nom : </p>
                <p>Prénom : </p>
                <p>Adresse mail : </p>
                <p>Numéro de téléphone : </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer_nav_bar">Mentions légales</div>
        <div class="footer_nav_bar">CGU</div>
        <div class="footer_nav_bar">Plan du site</div>
    </footer>
</body>

</html>