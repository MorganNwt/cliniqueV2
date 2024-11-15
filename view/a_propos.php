<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page A-propos de la clinique vétérinaire les cèdres pour chat et chien à Valence">

    <title>A Propos de la clinique, notre histoire.</title>

    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menuBurger.css">
    <link rel="stylesheet" href="../style/a_propos.css">

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
        <h1>A-Propos</h1>

        <section class="container_1">
            <p>
                La clinique vétérinaire les cèdres est née au petit Charran à Valence en 2001. Les locaux
                 étaient alors minuscules. Le « bocal » étant devenu trop petit, la clinique déménage 
                 en 2009 dans son aquarium actuel.
            </p>
            <p>
                Au fil des années, le choix a été fait de rester une clinique à taille humaine,
                un lieu où l’esprit de famille règne.Vous et vos animaux faites partie de notre vie.
            </p>
            <p>
                Cet attachement fait que notre investissement pour maintenir votre compagnon poilu en 
                bonne forme est immense. Soins, équipements, formations, produits pharmaceutiques, 
                conseils, nous mettons tout en œuvre pour que votre animal partage de longues années 
                avec vous. 
            </p>
            <p>
                Si la santé de votre animal le nécessite, nous vous orientons vers des spécialistes qui 
                ont toute notre confiance. Qui dit amour des animaux dit amour de la nature en général. 
                Nous portons aussi une grande attention aux produits d’hygiène et de désinfection que nous 
                utilisons, ainsi qu’au tri des déchets de soins.
            </p>
            <p>
                Notre but est de minimiser notre empreinte sur la planète et d’ainsi protéger la 
                biodiversité qui garantit notre avenir à tous.
            </p>
        </section>
    </main>

    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__. '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>