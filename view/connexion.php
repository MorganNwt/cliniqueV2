<?php   
    require_once '../services/db_connexion.php';
?> 

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de connexion du site pour s'identifier comme utilisateur ou comme admin pour accéder à la page administration">

    <title>Connexion</title>

    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menuBurger.css">
    <link rel="stylesheet" href="../style/connexion.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

    <script src="../JavaScript/menuBurger.js" defer></script>
</head>
<body>
    <header>
        <!-- include top web site  -->
        <?php require_once(__DIR__ . '/../components/_header.php'); ?>
    </header>

    <main>
        <h1>Connexion</h1>

        <?= $message ?>
        <?= $errors['email'] ? '<p>' . $errors['email'] . '</p>' : " " ?>
        <?= $errors['passwd'] ? '<p>' . $errors['passwd'] . '</p>' : " " ?>
            
        <form action="#" method="POST" class="container_1">
            <label for="email">Adresse mail</label>
            <input type="email" name="email" id="email" placeholder=" Miaou-du26@gmail.com" class="input">
           
            <label for="passwd">Mot de passe</label>
            <input type="password" name="passwd" id="passwd" placeholder=" ***************" class="input">
            
            <input type="submit" value="Se connecter" class="button">
            
            <a href="/view/inscription.php" class="registration_link"> Pas encore inscrit ? Par ici !</a>
        </form>
    </main>

    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__. '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>