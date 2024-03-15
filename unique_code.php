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

    <section class="section_code_unique">
        <div id="code">
            Votre formulaire à bien été enregistré ! 
            <br><br>
            Voici votre code unique :
            <br><br>
            <h3 id="unique_code"></h3>
        </div>
    </section>

    <footer>
        <div class="footer_nav_bar">Mentions légales</div>
        <div class="footer_nav_bar">CGU</div>
        <div class="footer_nav_bar">Plan du site</div>
    </footer>
    <script src="./javascript/unique_code.js" defer></script>
</body>

</html>