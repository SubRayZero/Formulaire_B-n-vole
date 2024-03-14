<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Se connecter à mon compte</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/connection.css">
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
    </header>

    <div class="connection_container">
        <div class="container_form">
            <form action="connection_personal_space.php" method="post" action="./personal_space.php">
                <h1>Se connecter</h1>
                <label for="username">Nom d'utilisateur</label>
                <input type="username" id="username" name="username" required>
                <label for="password">Code unique</label>
                <input type="password" id="password" name="password" required>
                <a href="/personal_space.php">
                <input type="submit" value="Connexion" class="button">
                </a>
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