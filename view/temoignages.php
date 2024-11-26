<?php
    require_once '../services/db_temoignages.php';
 ?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de témoignages pour les membres inscrit sur le site offrant ainsi la possibilité de pratager leurs experience client.">

    <title>Témoignages</title>

    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menuBurger.css">
    <link rel="stylesheet" href="../style/temoignages.css">

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
        <div class="background_img"></div>
        
        <h1>Vos témoignages</h1>

        <?php foreach ($messages as $message): ?>
            <section class="container">
                <div class="header">
                    <span class="pseudo"><?php echo htmlspecialchars_decode($message['pseudo']); ?></span>
                    <div class="star_rating">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <span><?php echo $i <= $message['rating'] ? '★' : ''; ?></span>
                        <?php endfor; ?>
                    </div>
                </div>
                <h3 class="title"><?php echo htmlspecialchars_decode($message['titre']); ?></h3>
                <p class="content"><?php echo htmlspecialchars_decode($message['content']); ?></p>
                
                <!-- Utiliser updated_at si elle existe, sinon utiliser created_at -->
                <span>
                    <?php
                        if($message['updated_at']) {
                            echo "Modifié le " . date('d/m/Y', strtotime($message['updated_at'])) . " à " . date('H\hi', strtotime($message['updated_at']));
                        } else {
                            echo "Le " . date('d/m/Y', strtotime($message['created_at'])) . " à " . date('H\hi', strtotime($message['created_at']));
                        }
                    ?>
                </span>

                <!-- Afficher le bouton de modification uniquement si l'utilisateur est connecté et est l'auteur du message -->
                <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] === $message['users_id']): ?>
                    <form action="post_temoignages.php" method="GET" style="display:inline-block;">
                        <input type="hidden" name="action" value="edit">
                        <input type="hidden" name="message_id" value="<?php echo $message['id']; ?>">
                        <button type="submit" class="update_button">Modifier</button>
                    </form>
                <?php endif; ?>

                 <!-- Bouton de réponse uniquement si l'utilisateur est connecté -->
                <?php if (isset($_SESSION['userId'])): ?>
                    <form action="post_temoignages.php" method="GET" style="display:inline-block;">
                        <input type="hidden" name="action" value="reply">
                        <input type="hidden" name="message_id" value="<?php echo $message['id']; ?>">
                        <button type="submit" class="reply_button">Répondre</button>
                    </form>
                <?php endif; ?>

                <!-- Afficher le bouton de suppression uniquement si l'utilisateur est connecté et admin -->
                <?php if (isset($_SESSION['userId']) && $_SESSION['isAdmin']): ?>
                    <form action="temoignages.php" method="POST">
                        <input type="hidden" name="message_id" value="<?php echo $message['id']; ?>">
                        <button type="submit" class="delete_button"onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre profil et votre compte ?');">Supprimer</button>
                    </form>
                <?php endif; ?>
            </section>
        <?php endforeach; ?>
         
        <a href="post_temoignages.php" class="button">
            <p>Donner mon avis ?</p>
        </a>
        
    </main>

    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__. '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>