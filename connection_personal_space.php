<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Se connecter à mon compte</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="./css/connection.css">
    <script src="annonces.js" type="module"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header">
        <a href="./html_formulaire_1.php">
            <div class="header_nav_bar">Inscription</div>
        </a>
        <div class="header_nav_bar">Mon compte</div>
        <div class="header_nav_bar">Administrateur</div>
    </header>

    <div class="connection_container">
        <div class="container_form">
            <form action="connection_personal_space.php" method="post">
                <h1>Se connecter</h1>
                <label for="username">Nom d'utilisateur</label>
                <input type="username" id="username" name="username" required>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Se connecter">
            </form>
        </div>
    </div>

    <footer>
        <div class="footer_nav_bar">Mentions légales</div>
        <div class="footer_nav_bar">CGU</div>
        <div class="footer_nav_bar">Plan du site</div>
    </footer>
</body>

</html>