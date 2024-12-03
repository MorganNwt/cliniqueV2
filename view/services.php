<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page des services que propose la clinique des cèdres.">

    <title>Services</title>

    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menuBurger.css">
    <link rel="stylesheet" href="../style/services.css">

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
        
        <h1>Services</h1>
        <ul>
            <li>
                <a href="#consultations">
                    <h3>Consultations</h3>
                </a>
            </li>
            <li>
                <a href="#identification">
                    <h3>Identification par transpondeurs</h3>
                </a>
            </li>
            <li>
                <a href="#chirurgie">
                    <h3>Chirurgies</h3>
                </a>
            </li>
            <li>
                <a href="#examans">
                    <h3>Examens complémentaires</h3>
                </a>
            </li>
            <li>
                <a href="#hospitalisations">
                    <h3>Hospitalisations</h3>
                </a>
            </li>
            <li>
                <a href="#conseils">
                    <h3>Conseils et vente comptoir</h3>
                </a>
            </li>
        </ul>

        <section class="container_1" id="consultations">
            <h2>Consultations</h2>
            <p>
                Les consultations constituent les fondements de la médecine vétérinaires,  sans elles
                 l’exercice  de l’art vétérinaire n’aurait aucun sens. Elles ont des buts différents.
            </p>
            <p>
                Les consultations de prévention :
                <ul>
                    <li>
                        Les consultations vaccinales, étapes importantes, elles permettent de vérifier 
                        l’état de santé de votre animal et de mettre en place une protection contre 
                        les pathologies virales graves qui peuvent affectées votre animal. Le choix des 
                        valences vaccinales et la fréquence de leurs injections dépend de son âge et de son
                         mode de vie.
                    </li>
                    <li>
                        La consultation pédiatrique est la première visite de votre animal. Elle permet 
                        d’établir un plan de prévention adapté à votre chiot ou chaton : les vermifugations, 
                        les antiparasitaires, l’alimentation, le comportement, les vaccins … Elle a pour but de
                        vérifier qu’il démarre sa vie sur de bonnes bases car de ce départ dépendra beaucoup 
                        de chose pour sa santé future.
                    </li>
                    <li>
                        La consultation pubertaire permet de vérifier que le développement de votre ado se 
                        déroule correctement tant au niveau physique que comportementale.
                    </li>
                    <li>
                        La consultation sénior a pour but de déceler l’apparition de pathologies liées 
                        à l’âge avant qu’elles ne se manifeste. Les traitements existants permettent de 
                        ralentir l’évolution de ces pathologies et pas de revenir en arrière donc 
                        l’espérance de vie de votre compagnon sera plus longue si la maladie est 
                        diagnostiquée tôt. Elle permet aussi de mettre en place un confort de vie :
                        douleur, pertes cognitive …
                    </li>
                </ul>        
            </p> 
            <p>
                Les consultations pour pathologie : Elles couvrent de larges domaines : dermatologie,
                 urologie, gynécologie, gastro-entérologie, ophtalmologie, cardiologie, pneumologie, 
                 endocrinologie, dentisterie, neurologie, cancérologie, troubles du comportement, 
                 douleur, …
            </p>
            <p>
                Les consultations pré anesthésiques. Elle est primordiale car elle permets 
                une explication sur l’acte chirurgicale, de choisir, d’adapter l’anesthésie 
                en fonction de l’âge et de l’état de santé de votre animal, de choisir un protocole
                 d’analgésie, de programmer le temps opératoire nécessaire à chaque cas .…
            </p>
        </section>

        <section class="container_2" id="identification">
            <h2>Identification par transpondeurs</h2>
            <p>
                L’identification est une obligation légale. Elle doit être effectuée :
                <ul>
                    <li>pour les chiens, avant l’âge de 4 mois.</li>
                    <li>pour les chats, avant l’âge de 7 mois.</li>
                    <li>Avant toute cession qu’elle soit payante ou gratuite.</li>
                </ul>
            </p>
            <p>
                Outre cette obligation, elle permet de faciliter les recherches des animaux perdus,
                 de lutter contre le trafic d’animaux, de lutter contre des maladies comme la rage qui 
                 est transmissible et mortelle chez l’homme.
            </p>
            <p>
                La clinique fait le choix de poser les puces électroniques les plus petites du marché, 
                munies de capsides anti migrations. Certes plus onéreuses, elles participent à notre 
                approche innocuité pour vos animaux. Deux types de puces électroniques vous seront 
                proposées : les puces d’identification simple et les thermochip qui en plus d’identifier
                votre animal, permettent de transmettre leur température corporelle (ainsi plus de 
                thermomètre dans le popotin…)
            </p>
            <p>
                Attention : en cas de changement de numéro de téléphone, de nouvelle adresse 
                (même provisoire au moment des vacances) ou de décès d’un animal, il est impératif 
                de mettre à jour ces informations via le fichier national I-cad des chiens, des chats et
                des furets. Ce fichier permet également de signaler un animal perdu : n’oubliez pas de le
                déclarer « retrouvé » si vous avez retrouvé votre animal de compagnie.
            </p>
        </section>

        <section class="container_1" id="chirurgie">
            <h2>Chirurgies :</h2>
            <p>
                L’acte chirurgical n’est jamais un acte anodin. Afin de limiter au maximum les risques 
                encourus par votre animal, la clinique est équipée d’une anesthésie gazeuse, d’un 
                concentrateur en oxygène, d’un monitoring complet avec surveillance de 
                l’électrocardiogramme, de la respiration, de la fréquence cardiaque de la tension, de la
                saturation en oxygène, température, et d’un tapis chauffant. L’équipe porte une attention
                minutieuse à la désinfection et à l’asepsie afin de prévenir les affections nosocomiales.
            </p>
            <p>
                Nous pratiquons les chirurgies dites de convenance : stérilisation, castration, 
                la chirurgie dentaire et les chirurgies courantes des tissus mous (peau, muscles, 
                intestins, urinaires, gynécologie, …. ) Certaines interventions nécessitent un matériel,
                 une pratique très régulière, des connaissances pointues de l’organe visé. Dans ces 
                 cas précis nous travaillons avec des confrères spécialisés auxquels nous faisons 
                 entièrement confiance.
            </p>
            <p>
                La lutte contre la douleur étant primordiale à nos yeux. Des protocoles analgésiques sont
                 mis en place en fonction de l’animal, de l’intervention réalisée et de l’apparition de
                  signes d’appel de douleurs.
            </p> 
        </section>

        <section class="container_2" id="examans">
            <h2>Examens complémentaires</h2>
            <p>
                Ces examens nous permettent, de confirmer, d’affiner le diagnostic lors de pathologie.
                Ils sont aussi importants lors de visite préanesthésiques, de bilan senior, de suivi de
                gestation …
            </p>
            <h3>Examens de laboratoire :</h3>
            <ul>
                <li>
                    La clinique est équipée d’un laboratoire complet permettant de réaliser des analyses 
                    d’hématologie, de biochimie sanguine, d’endocrinologie, d’urine, et de tests 
                    antigéniques rapides.
                </li>
                <li>
                    Un microscope nous permet la réalisation d’examens microscopiques : frottis sanguin, 
                    cytologie, parasitologie…
                </li>
                <li>
                    Imagerie médicale :La clinique est équipée d’un appareil de radiologie et d’un échographe. 
                    Ces 2 techniques d’imagerie participent au diagnostic. Chacun possède ses champs 
                    d’application en fonction de l’organe à explorer et de la pathologie suspectée.
                </li>
                <li>
                    Autres :Divers autres matériels tout aussi indispensables dans notre pratique quotidienne en 
                    fonction des spécialités sont présents en sein de la clinique : Electrocardiogramme, 
                    Tensiomètre, Ophtalmoscope, Otoscope.
                </li>
            </ul>     
        </section>

        <section class="container_1" id="hospitalisations">
            <h2>Hospitalisations</h2>
            <p>
                L’hospitalisation n’est un moment agréable ni pour votre animal, ni pour vous.
            </p>
            <p>
                 Elle est néanmoins parfois indispensable lorsque son état de santé le nécessite : 
                 surveillance de réveil d’anesthésie, perfusions, oxygénothérapie, certains protocoles 
                 anti douleur.
            </p>
            <p>
                Nous mettons tout en œuvre pour que cette épreuve se passe le mieux possible pour vos 
                poilus. (Manipulations en douceur, confort, câlinothérapie…). Les visites des propriétaires
                 sont autorisées et même conseillées, sauf si cela perturbe trop l’animal.
            </p>
            <p>
                La clinique est équipée d’une salle d’hospitalisation générale et d’une plus petite 
                salle de contagieuse. Afin de leur permettre une récupération la plus rapide possible, 
                nous avons investit dans une cage à oxygène, une oxybox, pompes à perfusion, tapis 
                chauffants.
            </p>
        </section>

        <section class="container_2" id="conseils">
            <h2>Conseils et vente comptoir</h2>
            <p>
                Nos formations et notre expertise font que nous sommes les mieux placés pour vous 
                conseiller au niveau des produits d’hygiène et de prévention. Nous connaissons 
                l’évolution des molécules, leurs contre-indications, l’évolution de leur efficacité 
                dans le temps. 
            </p>
            <p>
                Par exemple le conseil d’un vermifuge ne sera pas le même en fonction 
                de l’âge, de la race, du mode de vie, de l’entourage de votre boule de poils.
            </p>
            <p>
                Nos études comprennent des cours d’alimentation, nous savons interpréter les étiquettes des
                sacs d’alimentation et leurs pièges, alors n’hésitez pas à demander conseils.
            </p>
        </section>
    </main>

    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__. '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>