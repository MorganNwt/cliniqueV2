<?php
    require_once '../services/db_admin.php';
    require_once '../services/db_index.php';
    require_once '../services/db_update_members.php';
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Administration</title>

    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menuBurger.css">
    <link rel="stylesheet" href="../style/admin.css">
    
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
    
         <!-- Gestion des messages succèes/erreur  -->
        <?php if (isset($_SESSION['message'])): ?>
            <div class="green">
                <?= htmlspecialchars($_SESSION['message']) ?>
                <?php unset($_SESSION['message']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="red">
                <?= htmlspecialchars($_SESSION['error']) ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
       
        <?php if (isset($_SESSION['flash_message'])): ?>
            <p class="green "><?php echo $_SESSION['flash_message']; ?></p>
            <?php unset($_SESSION['flash_message']); ?>
        <?php endif; ?>


        <h1>Administration</h1>
        <h2>Gestion du message flash :</h2>

        <form action="../index.php" method="POST" class="container_1">
            <textarea id="flash_message" name="flash_message" rows="4" cols="40"><?=htmlspecialchars($flash_message);?></textarea>
            <div class="container">
                <button type="submit" name="update_message" class="button_1">Enregistrer</button>
                <button type="submit" name="delete_message"class="button_2">Supprimer</button>
            </div> 
        </form> 

        <h2>Création du membre de l'équipe :</h2>

        <form action="#"  method="POST" enctype="multipart/form-data" class="container_1">
            <label for="name">Nom :</label>
            <input type="text" name="name" required class="input_name">

            <label for="paragraphe_1">Paragraphe 1 :</label>
            <textarea name="paragraphe_1" required class="input"></textarea>

            <label for="paragraphe_2">Paragraphe 2 :</label>
            <textarea name="paragraphe_2" class="input"></textarea>

            <label for="paragraphe_3">Paragraphe 3 :</label>
            <textarea name="paragraphe_3" class="input"></textarea>

            <label for="paragraphe_4">Paragraphe 4 :</label>
            <textarea name="paragraphe_4" class="input"></textarea>

            <label class="custom_file_upload">
                Choisir une photo
                <input type="file" name="photo" class="file_input">
            </label>

            <button type="submit" name="create_member" class="button_1">Créer</button>
        </form>

        <h2>Modification du membre de l'équipe :</h2>

        <form action="#" method="POST" enctype="multipart/form-data" class="container_2">
            <div class="member_container">
                <?php foreach ($members as $member): ?>
                    <details class="member_card">
                        <summary class="member_info">
                            <?= htmlspecialchars($member['name']) ?>
                        </summary>
                        <div class="member_row">
                            <span class="label">Nom:</span>
                            <input type="text" name="name[<?= $member['id'] ?>]" value="<?= htmlspecialchars($member['name']) ?>" class="input_2">
                        </div>
                        <div class="member_row">
                            <span class="label">Para 1:</span>
                            <textarea name="paragraphe_1[<?= $member['id'] ?>]" class="input_1"><?= htmlspecialchars($member['paragraphe_1']) ?></textarea>
                        </div>
                        <div class="member_row">
                            <span class="label">Para 2:</span>
                            <textarea name="paragraphe_2[<?= $member['id'] ?>]" class="input_1"><?= htmlspecialchars($member['paragraphe_2']) ?></textarea>
                        </div>
                        <div class="member_row">
                            <span class="label">Para 3:</span>
                            <textarea name="paragraphe_3[<?= $member['id'] ?>]" class="input_1"><?= htmlspecialchars($member['paragraphe_3']) ?></textarea>
                        </div>
                        <div class="member_row">
                            <span class="label">Para 4:</span>
                            <textarea name="paragraphe_4[<?= $member['id'] ?>]" class="input_1"><?= htmlspecialchars($member['paragraphe_4']) ?></textarea>
                        </div>
                        <div class="member_row_2">
                            <span class="label">Photo:</span>
                            <label class="custom_file_upload_2">
                                Choisir une photo
                                <input type="file" name="photo[<?= $member['id'] ?>]" class="file_input">
                            </label>
                        </div>
                        <div class="member_actions">
                            <input type="hidden" name="id[<?= $member['id'] ?>]" value="<?= $member['id'] ?>">
                            <button type="submit" name="update_member" value="<?= $member['id'] ?>" class="button_3">Modifier</button>
                            <input type="hidden" name="id" value="<?= $member['id'] ?>">
                            <button type="submit" name="delete_member" value="<?= $member['id'] ?>" class="button_4" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?');">Supprimer</button>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </form>
    </main>

    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__. '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>