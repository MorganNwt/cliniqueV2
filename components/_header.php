<div class="nav_flex">
    <a href="/index.php">
        <img src="../pics/logo-Cedres_black.png" class="logo" alt="Le logo de la clinique vétérinaire les cèdres représenté par un chat et un chien ce tenant assis l'un à côté de l'autre de couleur blanc devant un sapin de couleur fushia">
    </a>
    <h1 class="nav_h1">Clinique Vétérinaire les Cèdres</h1>

    <div id="mySideNav" class="sideNav">
        <a id="closeBtn" href="#" class="close">X</a>
        <ul>
            <li><a href="/index.php">Accueil</a></li>
            <li><a href="/view/a_propos.php">A Propos</a></li>
            <li><a href="/view/galerie_photos.php">Galerie photos</a></li>
            <li><a href="/view/recommandations.php">Recommandations</a></li>
            <li><a href="/view/services.php">Services</a></li>
            <li><a href="/view/temoignages.php">Témoignages</a></li>
            
            <?php if (!isset($_SESSION['userId'])): ?>
                <li><a href="/view/connexion.php">Connexion</a></li>
            <?php else: ?>
                <li><a href="/view/profil.php">Profil</a></li>
                <?php if (isset($_SESSION['isAdmin'])): ?>
                    <li><a href="/view/admin.php">Admin</a></li>
                <?php endif; ?>
                <li><a href="/services/db_deconnexion.php">Déconnexion</a></li>
            <?php endif; ?>
        </ul>
    </div>

    <a href="#" id="openBtn">
        <span class="burger_icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>
</div>
