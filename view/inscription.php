<?php   
    require_once '../services/db_inscription.php';

    // Retrieve 'error' parameter from URL
    $error = isset($_GET['error']) ? $_GET['error'] : null;
?> 

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page d'inscription pour créer un compte et ainsi avoir accès à la page administration pour les admin ou aux pages de profil et de témoignages pour les utilisateurs">

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
        <!-- include top web site -->
        <?php require_once(__DIR__ . '/../components/_header.php'); ?>
    </header>

    <main>
        <h1>Inscription</h1>

        <<form action="#" method="POST" class="container_1">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" placeholder=" MiaouDu26" class="input" required>

            <label for="email">Adresse mail</label>
            <input type="email" name="email" id="email" placeholder=" MiaouDu26@gmail.com" class="input" required>
            
            <label for="passwd">Mot de passe</label>
            <input type="password" name="passwd" id="passwd" placeholder="Votre mot de passe" class="input" required>
            <ul class="list">
                <li id="length" class="red">Doit contenir au moins 13 caractères</li>
                <li id="number" class="red">dont 1 chiffre</li>
                <li id="uppercase" class="red">dont 1 majuscule</li>
                <li id="lowercase" class="red">dont 1 minuscule</li>
                <li id="special" class="red">dont 1 caractère spécial parmi : ?!*$%§@#+</li>
            </ul>

            <label for="confirm_passwd">Confirmer le mot de passe</label>
            <input type="password" name="confirm_passwd" id="confirm_passwd" placeholder="Confirmez votre mot de passe" class="input" required>
            <ul class="list">
                <li id="match" class="red">Doit être identique</li>
            </ul>

            <label for="cg_accepted"> 
                <input type="checkbox" name="cg_accepted" id="cg_accepted" required> J'ai lu et j'accepte les <a href="/view/mentions_legales.php" target="a_blank">Conditions générales</a>
            </label>
            <input type="submit" value="Créer !" class="button">
        </form>
        <!-- Include JS for handling errors if error is set -->
        <?php if ($error): ?>
            <script src="/JavaScript/_inscription_alert.js" defer></script>
        <?php endif; ?>
    </main>

    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__ . '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>