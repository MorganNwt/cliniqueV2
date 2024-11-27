<?php   
    require_once '../services/db_profil.php';
?> 

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page d'insciption pour créer un coup et ainsi avoir accès à la page administration pour les admin ou aux pages de profil et de témoignages pour les utilisateurs">

    <title>Profil</title>

    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menuBurger.css">
    <link rel="stylesheet" href="../style/profil.css">

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
        <h1><?php echo $profil ? "Modifier mon Profil" : "Créer mon Profil"; ?></h1>

        <?php
            // Display session message if it exists
            if (isset($_SESSION['message'])) {
                echo '<p>' . $_SESSION['message'] . '</p>';
                unset($_SESSION['message']); // Clear the message after displaying it
            }
        ?>

        <form action="#" method="POST" class="container_1">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?php echo $profil['nom'] ?? ''; ?>" class="input" required>

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" value="<?php echo $profil['prenom'] ?? ''; ?>" class="input" required>

            <label for="date_naissance">Date de naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" value="<?php echo $profil['date_naissance'] ?? ''; ?>" class="input" required>
            
            <label for="telephone">Téléphone</label>
            <input type="tel" name="telephone" id="telephone" value="<?php echo $profil['telephone'] ?? ''; ?>" class="input" required>
            
            <label for="rue">Rue</label>
            <input type="text" name="rue" id="rue" value="<?php echo $profil['rue'] ?? ''; ?>" class="input" required>

            <label for="cp">Code postal</label>
            <input type="text" name="cp" id="cp" value="<?php echo $profil['cp'] ?? ''; ?>" class="input" required>

            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" value="<?php echo $profil['ville'] ?? ''; ?>" class="input" required>

            <input type="hidden" name="action" value="<?php echo $profil ? 'update' : 'create'; ?>">
            <input type="submit" value="<?php echo $profil ? 'Modifier' : 'Créer'; ?>" class="button">
        </form>

        <?php if ($profil): ?>
            <form method="POST" action="../services/db_delete_account.php" class="delete_form">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <input type="hidden" name="action" value="delete">
                <input type="submit" value="Supprimer mon profil et mon compte" class="button_2" onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre profil et votre compte ?');">
            </form>
        <?php endif; ?>

        
    </main>

    <footer>
        <?php require_once(__DIR__. '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>