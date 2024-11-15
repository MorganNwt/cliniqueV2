<?php   
    require_once '../services/db_inscription.php';
?> 

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page d'insciption pour créer un coup et ainsi avoir accès à la page administration pour les admin ou aux pages de profil et de témoignages pour les utilisateurs">

    <title>Inscription</title>

    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menuBurger.css">
    <link rel="stylesheet" href="../style/inscription.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

    <script src="../JavaScript/menuBurger.js" defer></script>
    <script src="../JavaScript/_inscription_validate.js" defer></script>
</head>
<body>
    <header>
        <!-- include top web site  -->
        <?php require_once(__DIR__ . '/../components/_header.php'); ?>
    </header>

    <main>
        <h1>Inscription</h1>

        <form action="#" method="POST" class="container_1">
            <label for="pseudo">Pseudo</label>
            <input type="texte" name="pseudo" id="pseudo" placeholder=" MiaouDu26" class="input">

            <label for="email">Adresse mail</label>
            <input type="email" name="email" id="email" placeholder=" MiaouDu26@gmail.com" class="input">
            
            <label for="passwd">Mot de passe</label>
            <input type="password" name="passwd" id="passwd" placeholder=" Votre mot de passe" class="input">
            <ul class="list">
                <li id="length" class="red">Doit contenir au moins 13 caractères</li>
                <li id="number" class="red">dont 1 chiffre</li>
                <li id="uppercase" class="red">dont 1 majuscule</li>
                <li id="lowercase" class="red">dont 1 minuscule</li>
                <li id="special" class="red">dont 1 caractère spécial parmi : ?!*$%§@#-</li>
            </ul>
                <label for="confirm_passwd">Confirmer le mot de passe</label>
                <input type="password" name="confirm_passwd" id="confirm_passwd" placeholder=" Confirmez votre mot de passe" class="input">
            <ul class="list">
                <li id="match" class="red">Doit être identique</li>
            </ul>
            <input type="submit" value="Créer !" class="button">
        </form>
    </main>

    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__. '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>