<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire Bénévole</title>
    <link rel="stylesheet" href="index.css">
    <script src="annonces.js" type="module"></script>
</head>

<body>

    <header>
    </header>

    <section class="exercice">
        <h2 class="exerciceTitle">Formulaire d'inscription</h2>
        <div class="exerciceboxStorage">
            <?php
            ?>
            <form class="form" method="POST" action="./inscription.php">
                <div class="inputboxStorage">
                    <label for="nom">Nom *</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div class="inputboxStorage">
                    <label for="prenom">Prénom *</label>
                    <input type="text" name="prenom" id="prenom">
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
                    <label for="email">Adresse email *</label>
                    <input type="email" name="email" id="email">
                </div>
                <input type="submit" value="S'inscrire" id="signUp" class="button" />

</body>

</html>