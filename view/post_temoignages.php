<?php
    require_once '../services/db_post_temoignages.php';
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page pour les membres inscrit permettant de pouvoir poster un ou plusieurs commentaires.">

    <title>Témoignages</title>

    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menuBurger.css">
    <link rel="stylesheet" href="../style/post_temoignages.css">

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

        <h1><?php echo isset($messageId) ? 'Modifier mon avis' : 'Poster mon avis'; ?></h1>

        <form action="#" method="POST" class="container_1">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            
            <?php if (isset($messageId)): ?>
                <input type="hidden" name="message_id" value="<?php echo htmlspecialchars_decode($messageId); ?>">
            <?php endif; ?>

            <div class="star-rating">
                <input type="radio" id="star5" name="rating" value="5" <?php echo (isset($message['rating']) && $message['rating'] == 5) ? 'checked' : ''; ?>>
                <label for="star5" title="5 étoiles">★</label>

                <input type="radio" id="star4" name="rating" value="4" <?php echo (isset($message['rating']) && $message['rating'] == 4) ? 'checked' : ''; ?>>
                <label for="star4" title="4 étoiles">★</label>

                <input type="radio" id="star3" name="rating" value="3" <?php echo (isset($message['rating']) && $message['rating'] == 3) ? 'checked' : ''; ?>>
                <label for="star3" title="3 étoiles">★</label>

                <input type="radio" id="star2" name="rating" value="2" <?php echo (isset($message['rating']) && $message['rating'] == 2) ? 'checked' : ''; ?>>
                <label for="star2" title="2 étoiles">★</label>

                <input type="radio" id="star1" name="rating" value="1" required <?php echo (isset($message['rating']) && $message['rating'] == 1) ? 'checked' : ''; ?>>
                <label for="star1" title="1 étoile">★</label>
            </div>

            <input type="text" name="titre" id="titre" class="input" placeholder="Entrez un titre" required value="<?php echo isset($message['titre']) ? htmlspecialchars_decode($message['titre']) : ''; ?>">

            <textarea type="text" rows="20" name="content" id="content" class="textarea_input" placeholder="Votre message..." required><?php echo isset($message['content']) ? htmlspecialchars_decode($message['content']) : ''; ?></textarea>

            <button type="submit" class="input_2"><?php echo isset($messageId) ? 'Modifier' : 'Poster'; ?></button>
        </form>
    
    </main>

    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__. '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>