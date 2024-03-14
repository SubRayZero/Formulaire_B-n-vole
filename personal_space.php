<?php
$file = fopen('./components/benevoles.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  $nom = $line[0];
  $mail = $line[1];
  $prenom = $line[2];
  $age = $line[3];
  $region = $line[6];
}
fclose($file);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon espace personnel</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/personal_space.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/font/flaticon.css"> -->
    <script src="annonces.js" type="module"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header">
        <!-- <i class="fi fi-rr-home"></i> -->
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
            <img src="./images/card_1.png" alt="mission image">
            <h3>Participation à la collecte des restos du coeur</h3>
            <div class="mission_element">
                    <p>Date de la mission : </p>
                    <p>Heure de la mission : </p>
                    <p>Adresse de la mission : </p>
            </div>
        </div>

        <div class="personal_informations">
            <h2>Vos informations personnelles</h2>
            <div class="personal_informations_element">
                <p>Nom : <?php echo $nom; ?></p>
                <p>Prénom : <?php echo $prenom; ?></p>
                <p>Région : <?php echo $region; ?></p>
                <p>Adresse mail : <?php echo $mail; ?></p>
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