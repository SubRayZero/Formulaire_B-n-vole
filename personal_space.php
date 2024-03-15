<?php
$file_benevole = fopen('./components/benevoles.csv', 'r');
$file_event = fopen('./components/evenements.csv', 'r');

while (($line = fgetcsv($file_benevole)) !== FALSE) {
  $nom = $line[2];
  $prenom = $line[0];
  $pref = $line[9];
  $dispo = $line[7];
}

while (($line = fgetcsv($file_event)) !== FALSE) {
    $nom_mission = $line[0];
    $region_mission = $line[3];
    $description_mission = $line[1];
  }

fclose($file_benevole);
fclose($file_event);
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
        <h1>Bienvenue sur votre espace personnel <?php echo $prenom; ?> !</h1>
    </div>

    <div class="personal_container">
        <div class="mission_container">
            <h2>Votre mission</h2>
            <div class="mission_element">
                    <p>Nom de la mission : <?php echo $nom_mission; ?></p>
                    <p>Description de la mission : <?php echo $description_mission; ?></p>
                    <p>Région : <?php echo $region_mission; ?></p>
            </div>
        </div>

        <div class="personal_informations">
            <h2>Vos informations personnelles</h2>
            <div class="personal_informations_element">
                <p>Nom : <?php echo $nom; ?></p>
                <p>Prénom : <?php echo $prenom; ?></p>
                <p>Préférence de la mission : <?php echo $pref; ?></p>
                <p>Disponibilité : <?php echo $dispo; ?></p>
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