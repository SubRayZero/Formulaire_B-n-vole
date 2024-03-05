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
        <div class="header_nav_bar">Mon compte</div>
        <div class="header_nav_bar">Administrateur</div>
    </header>


    <section class="section_formulaire">
        <div class="box_formulaire">
            <div class="box_formulaire_center">
                <form class="form" method="POST" action="./signUp.php">
                    <div class="inputboxStorage">
                        <label for="nom">Nom *</label>
                        <input type="text" name="nom" id="nom">
                    </div>
                    <div class="inputboxStorage">
                        <label for="prenom">Prenom *</label>
                        <input type="prenom" name="prenom" id="prenom">
                    </div>
                    <div class="inputboxStorage">
                        <label for="age">Age *</label>
                        <input type="age" name="age" id="age">
                    </div>
                    <div class="inputboxStorage">
                        <label for="sexe">Sexe *</label>
                        <input type="sexe" name="sexe" id="sexe">
                    </div>
                    <div class="inputboxStorage">
                        <label for="numtel">Numéro de téléphone *</label>
                        <input type="numtel" name="numtel" id="numtel">
                    </div>
                    <div class="inputboxStorage">
                        <label for="email">Adresse mail *</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <input type="submit" value="Suivant" id="signUp" class="button" />
                </form>
            </div>
        </div>

    </section>

</body>

</html>