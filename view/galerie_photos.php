<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Galerie photos de nos amis les animaux de passage à la clinique les Cèdres.">

    <title>Galerie photos de nos amis les animaux de passage à la clinique les Cèdres.</title>

    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menuBurger.css">
    <link rel="stylesheet" href="../style/galerie_photos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    
    <script src="../JavaScript/menuBurger.js" defer></script>
    <script src="../JavaScript/galerie_photos.js" defer></script>
</head>
<body>
    <header>
        <!-- include top web site  -->
        <?php require_once(__DIR__ . '/../components/_header.php'); ?>
    </header>

    <main>
        <h1>Galerie Photos</h1>
        <section class="container">
            <div class="pics_container">
                <div class="pics"><img src="../pics/galerie/chat1.jpg" alt="Chat blanc à queue rousse sur un tapis gris avec gazon synthétique en fond"></div>
                <div class="pics"><img src="../pics/galerie/chien1.jpg" alt="Chien noir et marron à poil long dans un jardin"></div>
                <div class="pics"><img src="../pics/galerie/chat2.jpg" alt="Chat blanc et gris qui dort collé à son doudou"></div>
                <div class="pics"><img src="../pics/galerie/chien2.jpg" alt="tête de chien marron à poil long"></div>
                <div class="pics"><img src="../pics/galerie/chat3.jpg" alt="Chat blanc noir et roux allongé sur un fauteil"></div>
                <div class="pics"><img src="../pics/galerie/chien3.jpg" alt="tête de chien marron à poil long allongé portant un casque noir sur les oreilles"></div>    
                <div class="pics"><img src="../pics/galerie/chat4.jpg" alt="Chat blanc allongé dans son panier à carreaux"></div>
                <div class="pics"><img src="../pics/galerie/chien4.jpg" alt="Tête de chien à poil mi long noir et gris qui tire la langue"></div>    
                <div class="pics"><img src="../pics/galerie/chat5.jpg" alt="Chat blanc, gris et roux assis sur un lit"></div>
                <div class="pics"><img src="../pics/galerie/chien5.jpg" alt="tête de chien à poil mi long marron qui ce lèche le nez"></div>   
                <div class="pics"><img src="../pics/galerie/chat6.jpg" alt="tête de chat gris tacheté blanc caché dans un buisson"></div>
                <div class="pics"><img src="../pics/galerie/chien6.jpg" alt="Chien marron debout dans la neige"></div>  
                <div class="pics"><img src="../pics/galerie/chat7.jpg" alt="Chat blanc au nez roux allongé dans un plaid gris"></div>   
                <div class="pics"><img src="../pics/galerie/chien7.jpg" alt="Chien noir tirant la langue au milieu d'un park"></div>    
                <div class="pics"><img src="../pics/galerie/chat8.jpg" alt="Chat noir a rayure marron qui tire la langue"></div>   
                <div class="pics"><img src="../pics/galerie/chien8.jpg" alt="tête de bergé allemand au milieu d'un salon"></div>   
                <div class="pics"><img src="../pics/galerie/chat9.jpg" alt="Chat blanc et roux à queue rayé gris allongé dans un panier"></div>
                <div class="pics"><img src="../pics/galerie/chien9.jpg" alt="Chien noir qui joue dans l'herbe à la balle"></div>    
                <div class="pics"><img src="../pics/galerie/chat10.jpg" alt="Chat blanc avec dos roux et noir vétu d'un noeud papillon rouge assis sur une chaise noir"></div>
                <div class="pics"><img src="../pics/galerie/chien10.jpg" alt="Petit chien qui mord une balle blanche"></div>  
                <div class="pics"><img src="../pics/galerie/chat11.jpg" alt="Chat marron à rayure noir allongé dans un hamak"></div>
                <div class="pics"><img src="../pics/galerie/chien11.jpg" alt="Chien noir et blanc qui saute sur la plage"></div> 
                <div class="pics"><img src="../pics/galerie/chat12.jpg" alt="Deux chat blanc à poil long allongé sur un canapé"></div>
                <div class="pics"><img src="../pics/galerie/chien12.jpg" alt="Deux petits chien blanc assis sur un canapé avec un sapin de noêl en fond"></div>    
                <div class="pics"><img src="../pics/galerie/chat13.jpg" alt="Cinq chats gris et blanc assis sur un arbre a chat"></div>  
                <div class="pics"><img src="../pics/galerie/chat14.jpg" alt="tête de chat roux à rayure noir."></div>    
                <div class="pics"><img src="../pics/galerie/chat15.jpg" alt="Chat gris et blanc à rayrue noir sur la queue, allongé"></div>    
                <div class="pics"><img src="../pics/galerie/chat16.jpg" alt="Chat noir assis sur un meuble devant un téléphone noir"></div>
                <div class="pics"><img src="../pics/galerie/chat17.jpg" alt="tête de chat roux et blanc à museau noir allongé sur une banquette"></div>
                <div class="pics"><img src="../pics/galerie/chat18.jpg" alt="Chat blanc avec taches rousses allongé en rond d'ognon sur un plaid marron "></div>     
            </div>

            <!-- structure of modale window (popup) -->
            <div class="popup_pics">
                <span>&times;</span>
                <img src="../pics/galerie/chat1.jpg" alt="#">  
            </div>
        </section>
    </main>

    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__. '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>