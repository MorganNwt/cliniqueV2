<?php 
    session_start(); 
    require_once 'services/db_index.php';
    require_once 'services/db_update_members.php';
?>


<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page d'accueil de la clinique vétérinaire les cèdres pour chat et chien à Valence">

    <title>Accueil : Clinique Vétérinaire les Cèdres, Valence</title>

    <link rel="stylesheet" href="/style/normalize.css">
    <link rel="stylesheet" href="/style/menuBurger.css">
    <link rel="stylesheet" href="/style/main.css">
    <link rel="stylesheet" href="/style/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    
    <script src="/JavaScript/menuBurger.js" defer></script>
    <script src="/JavaScript/team_caroussel.js" defer></script>
</head>
<body>
    <header>
        <!-- include top web site  -->
        <?php require_once(__DIR__ . '/components/_header.php');  ?>
    </header>

    <main>
        <div class="background_img">
            <!-- add flash message -->
            <?php if (!empty($flash_message)): ?>
                <div class="flash_message">
                    <?php echo htmlspecialchars($flash_message); ?>
                    <!--Balise small pour réduire le texte et l'intégrer correctement dans le bandeau -->
                    <small>. Le <?php echo htmlspecialchars(date('d/m/Y à H:i', strtotime($updated_at))); ?></small>
                </div>
            <?php endif; ?>
            <p>04 75 55 74 19</p>
        </div>
        
        <section class="container_1 container_flex_1">
            <div class="container_flex_2">
                <h2>Adresse</h2>
                <p class="container_1_margin">32 rue Pierre Latécoère <br> 26000 Valence</p>
                <p>Tél: 04 75 55 74 19</p> 
            </div>
            <div class="container_flex_2">
                <h2>Nos horaires d'ouvertures</h2>
                <ul>
                    <li>Du lundi au Vendredi :
                        <ul>
                            <li>09h00 - 12h00</li>
                            <li>14h00 - 19h00</li>
                        </ul>
                    </li>
                    <li>Samedi :
                        <ul>
                            <li>9h00 - 12h00</li>
                        </ul>
                    </li>
                    <li>Dimanche :
                        <ul>
                            <li>Fermé</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>

        <section class="container_2">
            <!-- Google Maps integration -->
            <iframe id="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5650.055024109502!2d4.920416496288866!3d44.92277603428084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f557a30e6bc4f3%3A0x652b6d7f94417349!2sClinique%20V%C3%A9t%C3%A9rinaire%20du%20Docteur%20Gu%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1726038662497!5m2!1sfr!2sfr" 
                width="100%" 
                height="100%"
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>

        <section class="container_3">
            <div class="carousel">
                <div class="arrow left-arrow" onclick="previousMember()" aria-label="Membre précédent">←</div>
                <div class="carousel_content" id="carousel_content">
                    <!-- les membres de l'équipe -->    
                    <?php foreach ($members as $member): ?>
                        <div class="profil_item">
                            <div class="profil_content">
                                <div class="profil">
                                <img src="uploads/<?= htmlspecialchars($member['photo']) ?>" alt="Photo de <?= htmlspecialchars($member['name']) ?>" class="photos">
                                </div>
                                <div class="content">
                                    <h2>Notre équipe</h2>
                                    <h3><?= htmlspecialchars($member['name']) ?></h3>
                                </div>
                            </div>
                            <div class="text">
                                <p><?= htmlspecialchars($member['paragraphe_1']) ?></p>
                                <p><?= htmlspecialchars($member['paragraphe_2']) ?></p>
                                <p><?= htmlspecialchars($member['paragraphe_3']) ?></p>
                                <p><?= htmlspecialchars($member['paragraphe_4']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="arrow right-arrow" onclick="nextMember()" aria-label="Membre suivant">→</div>
            </div>
        </section>
        
         <!-- Google Reviews Integration -->
        <section class="container_4">
            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
            <div class="elfsight-app-c54f2a23-e648-4d1b-b560-70e28c4a64f0" data-elfsight-app-lazy></div>
        </section>
    </main>


    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__. '/components/_footer.html'); ?>
    </footer> 
</body>
</html>