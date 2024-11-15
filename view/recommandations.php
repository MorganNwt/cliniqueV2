<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Recommendations.">

    <title>Nos recommandations.</title>

    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menuBurger.css">
    <link rel="stylesheet" href="../style/recommandations.css">

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
        
        <h1>Recommandations</h1>
        <ul>
            <li>
                <a href="#voyager">
                    <h3>Voyager avec votre animal à l’étranger</h3>
                </a>
            </li>
            <li>
                <a href="#aller">
                    <h3>Aller dans un pays tiers ou un territoire d'outre-mer </h3>
                </a>
            </li>
            <li>
                <a href="#chien">
                    <h3>Un chien, un chat : Je réfléchis avant d’ouvrir mon foyer</h3>
                </a>
            </li>
            <li>
                <a href="#savoir">
                    <h3>Savoir reconnaitre une urgence</h3>
                </a>
            </li>
            <li>
                <a href="#assurances">
                    <h3>Assurances santé</h3>
                </a>
            </li>
            <li>
                <a href="#rage">
                    <h3>La Rage maladie toujours mortelle, on ne l’oublie pas !</h3>
                </a>
            </li>
            <li>
                <a href="#malbouffe">
                    <h3>La malbouffe on en parle ?</h3>
                </a>
            </li>
            <li>
                <a href="#sante">
                    <h3>Pour que la santé des uns ne parasite pas celle des autres:</h3>
                 </a>
            </li>
            <li>
                <a href="#honoraires">
                    <h3>Les honoraires du vétérinaire</h3>
                 </a>
            </li>
        </ul>
        
        <section class="container_1" id="voyager">
            <h2>Voyager avec votre animal à l’étranger</h2>
            
            <h3>AniVetVoyage.com : préparer son voyage avec un animal de compagnie </h3>
            <p>
                Le site <a href="https://www.anivetvoyage.com/">AniVetVoyage.com </a>donne des informations sur la règlementation des différents 
                pays et des conseils pratiques pour préparer son voyage. Il a été distingué par le jury 
                du Prix de l'Ordre des Vétérinaires en 2018.

            </p>
            <h3>Les cas généraux :</h3>
            <p>Les conditions de circulation avec un chien, chat ou furet.</p>
            <h3>Au sein de l'Union européenne</h3>
            <p>
                Conditions applicables depuis le 29 décembre 2014 pour les échanges non commerciaux : jusqu'à 5 carnivores domestiques ü Exigences de base
                <ul>
                    <li>Identification : transpondeur</li>
                    <li>Passeport européen</li>
                    <li>Vaccination antirabique, postérieure à l'identification, pas avant l'âge de 3 mois, 
                        et valide : 21 jours après une primo-vaccination, respect des délais pour les
                         rappels.
                    </li>
                </ul>
            </p>
            <h3>Exigences supplémentaires</h3>
            <p>
                Pour emmener les chiens en Irlande, au Royaume-Uni, à Malte et en Finlande, il faut en 
                plus qu'ils soient âgés de plus de 15 semaines, et qu'ils aient reçu, dans les 24 à 
                120 heures avant le passage de la frontière, un traitement contre l'échinococcose 
                certifié par le vétérinaire sanitaire qui l’administre.
            </p>
            <p>
                ATTENTION Depuis le 1er janvier 2021, des nouvelles règles pour le transport d’animaux 
                de compagnie s’appliquent entre la Grande Bretagne (Angleterre, Ecosse, Pays de Galles 
                et les îles de Man, Jersey et Guernesey) et l’Union Européenne. L'entrée sur le 
                territoire britannique doit se faire exclusivement par des points d'entrée agréés.
                 Renseignez-vous à l'avance auprès de la compagnie aérienne que vous envisagez 
                 d'utiliser pour savoir si elle a été approuvée pour le transport des carnivores 
                 domestiques en Grande-Bretagne. (Les animaux de compagnie ne sont pas autorisés à 
                 bord des trains Eurostar à destination ou au départ de Londres.)
            </p>
            <p>
                Remarque : toujours se renseigner auprès de la compagnie de transport pour savoir si 
                elle a été approuvée pour le transport des carnivores domestiques au Royaume-Uni et à 
                Malte.
            </p>
            <h3> Pour rentrer en France depuis un pays de l'UE</h3>
            <p>
                L'importation de chien de 1ère catégorie est interdite. Pour les autres races il faut suivre 
                les exigences de bases présentées plus haut.
            </p>
            <p>
                Validation sur le passeport de la bonne santé nécessaire pour voyager, effectuée par 
                un vétérinaire 48 heures avant le départ lors de demande par une compagnie d'aviation 
                ou maritime.
            </p> 
        </section>

        <section class="container_2" id="aller">
            <h2>Aller dans un pays tiers ou un territoire d'outre-mer</h2>
            <p>
                Avec un carnivore domestique : se renseigner auprès de l'ambassade du pays de 
                destination (quarantaine, vaccination, test sérologique, formulaire de certificat 
                sanitaire,...), ou pour l'importation <a href="https://lannuaire.service-public.fr/services_nationaux/administration-centrale-ou-ministere_178502.html">
                au service d'Inspection vétérinaire et phytosanitaire aux frontières</a> (SIEVP), 
                ou pour l'exportation <a href="https://lannuaire.service-public.fr/services_nationaux/administration-centrale-ou-ministere_178501.html">au Bureau de l'exportation </a>
                vers les pays tiers (BEPT).
            </p>
           <h3>Rentrer en UE (ou en France) depuis un pays tiers</h3>
            <p>L'importation de chien de 1ère catégorie est interdite.</p>
           <p>  
                Provenance : pays tiers autorisé figurant sur les listes figurant à l'article 1er de la
                 décision d'exécution de la Commission du 21 octobre 2013
                <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32013D0519&from=FR">(2013/519/UE)</a>
           </p>
            <ul>
                <li>Identification et vaccination : exigences de base (voir plus haut)</li>
                <li>Certificat sanitaire original établi par un vétérinaire officiel du pays 
                    d'origine + justificatifs de vaccination antirabique (lors de réintroduction, 
                    le passeport peut remplacer ce certificat sanitaire)
                </li>
                <li>Titrage sérique des anticorps antirabique (≥ 0,5 Ul/ml) : prélèvement 
                    au moins 30 jours après la vaccination, et au moins 3 mois avant l'importation. 
                    En cas de réintroduction, il n'y a pas de délai s'il y a eu un titrage positif 
                    avant le départ, et que les vaccins ont été effectués dans les délais. Ce 
                    titrage n'est pas obligatoire si le pays tiers figure dans l'annexe 2 
                    (partie B, section 2 et partie C) du 
                    <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX%3A32013R0576">Règlement (CE) n° 576/2013.</a>
                </li>
            </ul>
          
            <h3>Conseil pratique</h3>
            <ul>
                <li>Ne quitter le territoire européen qu'avec un animal identifié, vacciné contre la 
                    rage, avec un passeport, et après avoir réalisé un titrage sérique des anticorps 
                    antirabiques.
                </li>
                <li>Entreprendre les démarches auprès du vétérinaire au moins 4 mois avant le départ</li>
            </ul>
        </section>

        <section class="container_1" id="chien">
            <h2>Un chien, un chat : Je réfléchis avant d’ouvrir mon foyer</h2>
            <p>
                Faire l’acquisition d’un animal de compagnie vous rend responsable de lui pour toute 
                sa vie. Cela signifie de bien vous en occuper, de le nourrir, de le soigner et bien 
                entendu de l’aimer car en retour il vous prodiguera son affection sans compter.
            </p>
            <p>
                Voilà pourquoi il est essentiel de ne pas décider de prendre un animal sur un coup de tête.
            </p>
            <p>
                N’hésitez à nous demander conseil pour choisir l’animal qui sera le plus adapté à 
                votre mode de vie (présence d’enfant, appartement ou maison avec jardin, temps 
                disponible, votre âge, …).
            </p>
            <h3>Voici quelques conseils pour vous aider à bien choisir un animal de compagnie :</h3>
            <p>
                <ul>
                    <h3>Renseignez-vous</h3>
                    <li>
                        Nous sommes les mieux placés pour vous expliquer le caractère, les besoins 
                        et le coût moyen d’entretien de l’animal que vous avez envie d’accueillir 
                        dans votre famille. Nous avons tous nos caractères et nos attentes dans notre 
                        relation avec un animal. Toutes les races ne nous correspondent pas.
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <h3>Envisagez une adoption</h3>
                    <li>
                        Des milliers d’animaux, de tous âges et en bonne santé, attendent impatiemment 
                        une famille dans les refuges d'associations de protection animale. Laissés 
                        là suite à un achat coup de tête, un cadeau, ils méritent une seconde chance…
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <h3>Budget</h3>
                    <li>
                        La nourriture et l’entretien courant d’un chien ou d’un chat peuvent 
                        représenter un budget annuel conséquent par an selon sa taille et sa santé 
                        car il peut être malade ou accidenté. L’alimentation et les médicaments ne 
                        couteront pas le même prix pour un chihuahua ou un beauceron par exemple. 
                        À ces frais annuels peuvent s’ajouter des frais d’assurance ainsi que des 
                        frais de pension par exemple.
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <h3>Vendeurs</h3>
                    <li>
                        Les vendeurs d’animaux et les éleveurs ont l’obligation d’avoir un numéro 
                        d’agrément. N’hésitez pas à le leur demander.
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <h3>Chiots et Chatons :</h3>
                    <li>
                        Ils doivent être sevrés lors de leur acquisition. Les chiots, chatons ne 
                        peuvent quitter leur mère qu’après 8 semaines minimum.
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <h3>Identification</h3>
                    <li>
                        L’identification est obligatoire pour les chiens, chats. Ils doivent être 
                        inscrits au fichier national d'identification des carnivores domestiques 
                        (Icad) avant d'être vendus ou donnés. Cela permet de contacter le propriétaire 
                        lorsqu'un animal est retrouvé après avoir été perdu ou volé.
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <h3>Certificat vétérinaire :</h3>
                    <li>
                         Le certificat vétérinaire est désormais obligatoire pour toute vente ou don 
                         de chien ou de chat. Il atteste de l’état de santé de l’animal. Assurez-vous 
                         que ses vaccins sont bien à jour sur son carnet de santé.
                    </li>
                </ul>
            </p>
        </section>

        <section class="container_2" id="savoir">
            <h2>Savoir reconnaitre une urgence</h2>
            <h3>
                Une urgence au sens médical est toute condition qui peut entraîner la perte irréversible
                de fonction d'organes individuels ou même la mort.
            </h3>
            <p>
                Ce peut être le cas par exemple à la suite de :
            </p>
            <ul>
                <li>Un choc (accident de la circulation, chute par la fenêtre, ...)</li>
                <li>L'ingestion de corps étrangers ou d’un produit toxique</li>
                <li>Une infection bactérienne ou virale grave</li>
                <li>Coup de chaleur…</li>
                <li>Une occlusion intestinale</li>
                <li>Une réaction allergique importante…</li>
            </ul>
            <p>
                Ces événements peuvent avoir des conséquences mortelles - les services d’urgences sont 
                là pour les cas graves !
            </p>  
            <h3> Quand consulter en urgence ?</h3>
            <p>Les symptômes suivants sont généralement des signes d'urgence :</p>
            <ul>
                <li>Plaie qui saigne beaucoup</li>
                <li>Vomissements importants</li>
                <li>Diarrhée persistante sévère (surtout chez les jeunes animaux)</li>
                <li>Diminution de la conscience</li>
                <li>Changement de couleur des muqueuses (plus pâles, violettes …)</li>
                <li>Gonflement anormal d’une zone du corps</li>
                <li>Température interne du corps inférieure à 37°C ou supérieure à 39.5°C</li>
                <li>
                    Essoufflement (corps étranger dans les voies respiratoires supérieures, syndrome 
                    brachycéphale, œdème pulmonaire, ...)
                </li>
                <li>Bruits de respiration anormaux, rythme respiratoire modifié</li>
                <li>Agressivité soudaine ou cris anormaux</li>
                <li>Indifférence, perte de conscience</li>
                <li>Réticence à jouer et à manger</li>
                <li>Diminution de la réactivité</li>
                <li>Troubles de la coordination, paralysie</li>
                <li>Tremblements, convulsions</li>
            </ul>
            <p>
                Si votre animal présente un de ces symptômes, appeler la clinique vétérinaire,
                ne partez pas directement en catastrophe. Cet appel nous permet de vous conseiller 
                sur les actes à effectuer avant le trajet pour éviter qu’il se dégrade en route.
                Cet appel nous aide aussi à vous accueillir dans les meilleures conditions 
                dès votre arrivée.
            </p>
            <p>
                Que faire si mon animal tombe malade en dehors des heures d’ouverture :
            </p>
            <p>
                Appeler nous, le répondeur vous donnera le numéro à contacter pour enter en contact 
                avec le vétérinaire d’astreinte.
            </p>
        </section>

        <section class="container_1" id="assurances">
            <h2>Assurances santé</h2>
            <p>
                Il s’agit de contrats de prise en charge des soins. Il ne faut pas les confondre avec 
                les assurances « responsabilité civile » parfois exigées pour couvrir les dégâts que 
                votre animal pourrait occasionner à des biens ou des tiers. Il ne s’agit pas non plus 
                des contrats spécifiques destinés aux chiens dits « dangereux ».
            </p> 
            <p>
                Ici, la couverture est purement médicale. En contrepartie de la cotisation mensuelle, 
                l’assureur couvre les frais vétérinaires de votre animal. La compagnie d’assurance 
                détermine le type de soins remboursés, la franchise des actes et le plafond de
                 remboursement annuel (montant maximum pour un an).
            </p>
            <p>
                L’assurance peut donc prendre en charge simplement les accidents mais aussi, pour les
                formules plus complètes, couvrir les soins de santé, les médicaments et frais de 
                prévention (vaccin, bilan sanguin …).
            </p>
            <p>
                Il existe de nombreux concurrents dans le domaine des mutuelles animales.
            </p>
            <p>
                Afin de vous aider à bien comprendre ce que vous pouvez faire ou pas et vous éclairer 
                dans le choix de l’assurance pour votre poilu, nous allons répondre aux questions 
                les plus couramment posées par les propriétaires sur ces couvertures santé.
            </p>
            <p>
                Vous êtes libre de souscrire ou non à un contrat de santé pour couvrir les besoins 
                médicaux de votre animal. C’est donc un choix et un calcul personnel à faire en 
                relation avec les frais vétérinaires que vous aurez et pourriez avoir à débourser 
                à l’avenir.
            </p>
            <p>
                L’assurance santé ou mutuelle permet un lissage des frais vétérinaires. 
                Lorsqu’on fait le choix de couvrir son animal par un contrat de santé, on fait aussi 
                le choix de pouvoir subvenir financièrement aux propositions médicales du vétérinaire.
                On se libère de l’aspect financier lorsqu’on prend sa décision et on donne ainsi 
                plus de chances à son animal. Votre animal en a-t-il besoin ? Peut-être pas !
            </p>
            <p>
                Après tout c’est aussi une question de chance et on ne peut pas savoir à l’avance si 
                votre animal sera malade ou aura un accident dans sa vie. Si vous n’êtes pas certain(e) 
                d’assurer de grosses dépenses de soins vétérinaires lorsque cela arrivera et que vous ne 
                désirez pas être bloqué(e) par le coût dans votre décision d’accompagnement alors
                mieux vaut prévenir et le couvrir avec une mutuelle animale.
            </p>
            <p>
                C’est un investissement et une façon de rendre les décisions médicales faciles 
                le jour où la facture grimpe et que les soins ou examens envisagés sont coûteux.
            </p>
            <p>
                Les assureurs comme les courtiers en assurance proposent une multitude de contrats 
                en termes de couverture santé. A vous de déterminer le type de risque que vous désirez 
                anticiper pour votre animal.
            </p>
            <p>
                Vous pouvez vous cantonner à prévenir uniquement les accidents que pourrait subir 
                votre animal. Ce type de police d’assurance fait partie des moins chères mais ne sert 
                pas souvent...
            </p>
            <p>
                Les polices intermédiaires permettent d’assurer également les soucis de santé (maladies,
                accidents, médicaments, hospitalisations et analyses complémentaires nécessaires).
            </p>
            <p>
                Enfin, dans le plus haut de gamme, certains actes de prévention sont inclus (vaccins,
                stérilisation, bilans annuels…). Les cotisations sont ici plus importantes et il 
                est bien de faire ses calculs avant de souscrire. Le coût est croissant avec le niveau 
                de protection et de prévention bien évidemment mais, au final, vous êtes plus serein(e)
                lors des visites.
            </p>
            <p>
                La franchise par acte varie aussi en fonction de ce que vous payez. La franchise 
                est la part minimale que l’assureur vous impose de payer avant de vous apporter 
                un complément. Sur les petits contrats il y a souvent une franchise de base mais 
                sur les contrats premium, celle-ci peut disparaître totalement. Vous êtes alors 
                remboursé(e) dès le 1er euro. Renseignez-vous bien sur le montant des franchises ! 
                C’est essentiel !
            </p>
            <p>
                Certaines mutuelles proposent aussi le tiers payant. Le fait de ne pas avoir à
                 avancer l’argent nécessaire à la consultation peut aussi être important dans
                votre décision.
            </p>
            <p>
                Attention, il y a un âge limite d’adhésion et toute pathologie antérieure à 
                l’assurance ne sera pas couverte.
            </p>
            <p>
                En résumé nous pensons qu’avec l’évolution des techniques de soins vétérinaires 
                les assurances santé permettent de faciliter réellement l’accès aux soins lorsque
                votre animal sera malade où vieillissant. Bien sûr, comme pour nos mutuelles le
                coût sera toujours trop cher lorsque votre animal sera en bonne santé mais le fait 
                d’y avoir adhérer sera bien utile en cas de lourde pathologie.
            </p>
            <p>
                Les points importants à retenir lors de votre choix : la couverture médicale, 
                le budget annuel alloué à votre animal, le coût mensuel de la mutuelle, la 
                franchise et la vérification que votre animal ne soit pas exclu avec l’âge.
            </p>   
        </section>

        <section class="container_2" id="rage">
            <h2>La Rage maladie toujours mortelle, on ne l’oublie pas !</h2>
            <p>
                La rage tue toujours, elle réapparait régulièrement en France du fait d’animaux 
                importés ou ayant voyagé illégalement à l’étranger. Nous rencontrons malheureusement 
                régulièrement des animaux introduits illégalement. Ceux qui viennent en consultation 
                sont surveillés mais les autres ? Alors protégeons nos poilus et nous-même.
            </p>
            <h3>Comment prévenir la rage chez nos animaux ?</h3>
            <p>
                En faisant vacciner tous les ans (ou tous les 3 ans, selon le vaccin et le protocole)
                vos animaux. La vaccination antirabique doit :
                <ul>
                    <li>
                        Être réalisée : sur un animal obligatoirement identifié par transpondeur
                        ("puce électronique") ou tatouage lisible par un vétérinaire sanitaire.
                    </li>
                    <li>
                        Être enregistrée (obligatoire depuis le 1er janvier 2009) uniquement sur le 
                        passeport animal par le vétérinaire sanitaire.
                    </li>
                </ul>
            </p>
            <h3>
                En demandant la mise sous surveillance sanitaire de tout animal ayant mordu ou 
                griffé :
            </h3>
            <p> (photo1)</p>
            <h3>
                Si un cas de rage survient dans votre voisinage mieux vaut que votre compagnon soit
                 en règle
            </h3>
            <p>
                Lorsqu'un cas de rage est déclaré, certains carnivores domestiques doivent hélas être 
                euthanasiés. Il s'agit de tous ceux :
            </p>
            <ul>
                <li> susceptibles d'avoir été en contact avec l'animal atteint,</li>
                <li>
                    qui sont trouvés sur la voie publique et qui ne sont pas à la fois identifiés, 
                    vaccinés et titulaires d'un passeport.
                </li>
            </ul>
            <p>
                Attention, dans ce contexte, tout animal sera euthanasié si :
            </p>
            <ul>
                <li> 
                    il n'a pas été identifié (puce ou tatouage) car sa vaccination antirabique ne 
                    serait donc pas reconnue réglementairement valable.
                </li>
                <li> 
                    la certification de sa vaccination antirabique a été réalisée sur un support autre
                     que le passeport.
                </li>
            </ul>
            <h3>
                Lors de voyages à l’étranger avec ou sans mon animal, je me protège en ne touchant aucun
                animal dont je ne connais pas le statut vaccinal.
            </h3>
            <p>
                La contamination de l’Homme se fait exclusivement par un animal au moyen de la salive 
                par morsure, griffure, léchage sur peau excoriée ou sur muqueuse (œil, bouche). Elle 
                débute 15 jours avant l’apparition des premiers symptômes de la maladie et jusqu’à 
                la mort de l’animal. La rage est toujours mortelle lorsque les symptômes sont là donc 
                il vaut mieux la prévenir. La rage ne se transmet pas entre hommes.(photo2)
            </p>
        </section>

        <section class="container_1" id="malbouffe">
            <h2>La malbouffe on en parle ?</h2>
            <p>
                Actuellement on lit ou entend tout et son contraire concernant l’alimentation de nos
                poilus. Une grosse nappe nauséabonde se répand et gagne de plus en plus de 
                propriétaires happés par la voix des sirènes relayée par les réseaux sociaux.
            </p>
            <p>
                Les conséquences sur nos animaux deviennent telles que nous avons envie ici de 
                pousser un grand coup de gueule.
            </p>
            <p>
                Nos conseils en alimentation ne sont pas là pour vous « refiler » nos sacs de 
                croquettes, nous les formulons pour la santé de vos compagnons.
            </p>
            <p>
                Nous entendons trop souvent dire : dans la nature le loup ou le chat ne mange pas de 
                croquettes, de céréales … mais savez vous que l’espérance de vie moyenne dans la 
                nature d’un loup ou d’un chat sauvage est de 7 ans ?
            </p>
            <p>
                A l’heure actuelle, le haro se porte sur les glucides et les propriétaires veulent 
                des aliments riches en protéines mais il y a protéines et protéines.
            </p>
            <p>
                normément de personnes non formées comparent les étiquettes très floues parfois des 
                fabriquant de croquettes en fonction du taux de protéines mais ce ne sont pas les 
                protéines mais les acides aminés qu’elles contiennent qui nourrissent nos animaux. 
                Si on voulait faire un comparatif il faudrait comparer les aminogrammes, c’est-à-dire 
                la teneur en acides aminés essentiels à notre animal or ceux-ci sont introuvables 
                pour beaucoup de croquettes.
            </p>
            <p>
                Le docteur Charlotte Devaux, nutritionniste, utilise pour expliquer cette notion une 
                comparaison avec le scrabble : « Dire «il faut beaucoup de protéines dans 
                l’alimentation de votre animal » revient à dire «il vous faut beaucoup de lettres
                pour jouer au scrabble ».
            </p>
            <p>
                Sauf que si dans ces lettres je vous mets une majorité de S, Z, W et K, vous n’êtes 
                pas près de gagner (sauf si vous jouez en polonais).
            </p>
            <p>
                Pour les protéines, c’est pareil, si vous donnez à votre animal beaucoup de protéines 
                mais de mauvaise qualité, il y en aura beaucoup dans ses selles mais peu dans 
                ses muscles.
            </p>
            <p>
                Nous ne parleront ici que très rapidement du barf (qui souvent non contrôlé 
                contamine nos animaux avec moultes bactéries et parasites), des rations ménagères 
                (trop mal équilibrées qui favorisent troubles cutanés, digestifs, …), des 
                croquettes bas de gamme (dont les matières premières sont parfois dramatiques) 
                nous parlerons surtout ici de ce qui gangrène la santé de nos compagnons actuellement :
                les croquettes sans céréales.
            </p>
            <p>
                Pour fabriquer des croquettes, il faut de l’amidon et dans la majorité des 
                croquettes sans céréales, cet amidon est fournit par des légumineuses (pois, fèves,
                pois chiche, lentilles,…), des patates et des patates douces. Ces aliments entrainent
                des dérangements digestifs importants chez nos animaux.
            </p>
            <p>
                Plusieurs études scientifiques (et notre pratique clinique aussi malheureusement) 
                ont montré que ces aliments ont des répercussions cardiaques graves sur nos animaux 
                ainsi que sur le surpoids et l’obésité. L’espérance de vie de nos compagnons recommence
                à décroître et c’est grave !
            </p>
            <p>
                Les comptables diraient c’est bien, ça crée des consultations, mais nous avons fait 
                nos études pour que l’animal soit en bonne santé, pas notre compte en banque alors 
                réagissez ne vous laisser plus charmer.
            </p>
        </section>

        <section class="container_2" id="sante">
            <h2>Pour que la santé des uns ne parasite pas celle des autres:</h2>
            <p>
                Ce guide de recommandations (Source Boerhinger) est le fruit d’une table ronde qui s’est
                tenue le 14 mars 2019 à Paris, avec des experts en Parasitologie et en Dermatologie :
            </p>
            <ul>
                <li>Dr Charlotte Bernigaud, Dermatologue au CHU Henri Mondor à Créteil</li>
                <li>
                    Pr Françoise Botterel, Professeure de Parasitologie à la faculté de Médecine de
                     Créteil ;
                </li>
                <li>
                    Dr Amaury Briand, Assistant en Dermatologie à l‘école nationale vétérinaire 
                    d‘Alfort ;
                </li>
                <li>
                    Pr Jacques Guillot, Professeur de Parasitologie à l‘école nationale vétérinaire 
                    d‘Alfort.
                </li>
            </ul>
            <h3>  PUCES ET TIQUES :</h3>
            <h3> LES PUCES :</h3>
            <p>
                Près de 21 % des chats sont infestés par des puces. Fréquemment rencontrées à la fois 
                chez le chien et le chat, elles passent inaperçues pour presque la moitié des
                propriétaires. Chez l’animal, elles sont responsables de démangeaisons et dans 
                certains cas, d’allergies comme la dermatite par allergie aux piqûres de puces. 
                Elles peuvent être des vecteurs de transmission d’un ver plat (Dipylidium caninum) 
                et de bactéries favorisant le développement de la maladie dite « des griffes du chat ».
                En cas d’infestation massive de l’environnement, les puces peuvent aussi piquer les
                membres de la famille et être à l’origine de symptômes tels que du grattage et des 
                éruptions cutanées.
            </p>
            <h3> LES TIQUES:</h3>
            <p>
                Les maladies transmises par les tiques ne peuvent l‘être de manière directe ou indirecte,
                par un animal à un être humain. Le chien ne représente donc pas un vecteur de
                contamination pour les membres de la famille. En France, les tiques sont néanmoins 
                vectrices de maladies fréquentes pouvant être graves voire mortelles chez le chien. 
                Parmi les pathologies provoquées, la piroplasmose entraîne une destruction des 
                globules rouges et la maladie de Lyme provoque généralement des signes cliniques
                généraux (fièvre, fatigue, apathie) ainsi que des douleurs musculaires et 
                articulaires. 
            </p>
            <p>
                Cette dernière, qui reste rarement observée chez le chien, peut en 
                revanche avoir des répercussions graves sur la santé humaine. L’Homme s’expose à des 
                risques de contamination directement dans la nature, en particulier en forêt, où les 
                tiques sont très présentes. C’est pourquoi il est recommandé de porter des vêtements 
                longs pour protéger bras et jambes de ces parasites transmetteurs de la maladie de Lyme.
            </p>
            <p>
                Chez l’Homme, cette maladie se traduit en premier lieu par une rougeur localisée, 
                suivie par des symptômes neurologiques (inflammations nerveuses, migraines, paralysie
                faciale chez l’enfant) ou articulaires. Pour prévenir tout risque de contamination,
                il est recommandé de respecter des mesures de prévention à l’extérieur et à 
                l’intérieur du foyer, mais aussi de traiter les animaux de compagnie contre ces 
                parasites externes.
            </p>
            <h3> LES INVISIBLES :</h3>
            <h3> CES PARASITES INTERNES PEUVENT ENTRAÎNER DES SIGNES CLINIQUES GRAVES</h3>
            <ul>
                <li>
                    LE VER ASCARIS, RESPONSABLE DE LA TOXOCAROSE Le plus courant des parasites internes 
                    est le ver ascaris, responsable de l’une des zoonoses les plus répandues à travers 
                    le monde : la toxocarose. Jusqu’à 67 % des chiots et chatons de moins de 3 mois sont
                    infestés par ce ver rond4 pouvant entraîner des symptômes digestifs (ventre gonflé,
                    diarrhées, vomissements), voire des troubles respiratoires (généralement 
                    une toux ou une pneumonie) en cas d’infestation massive. Les chiens et les
                    chats adultes sont les principaux vecteurs de contamination de l’environnement5 
                    ,ils ne présentent pas de signes de maladie. Ils peuvent en revanche transmettre
                    ce parasite par le biais d’oeufs présents dans leurs selles aux enfants et aux 
                    personnes fragiles d’un foyer (personnes âgées ou immunodéprimées). La toxocarose 
                    peut être à l’origine de graves problèmes de santé chez ces individus : douleurs
                    abdominales, diarrhée, symptômes neurologiques, troubles visuels. En France, 
                    le risque de transmission parasitaire est avéré : entre 5 % et 14 % des 
                    français ont été, ou sont, en contact avec le parasite. La vermifugation 
                    mensuelle des carnivores domestiques contre les parasites internes est requise 
                    pour prévenir la toxocarose chez l’animal et chez l’Homme. Elle permet d’éliminer 
                    tout risque d’excrétion des oeufs. Ce rythme mensuel est préconisé si l’animal 
                    est un chiot ou un chaton ou un adulte en contact étroit avec des individus à 
                    risque (enfants, personnes fragiles). Préconisées par l’ESCCAP, ces mesures 
                    complètent la prévention sanitaire reposant sur des mesures hygiéniques et 
                    alimentaires simples.
                </li>
                <li>
                    LES ANKYLOSTOMES : Plusieurs espèces d’ankylostomes, des vers ronds parasites 
                    de l’intestin grêle, sont rencontrées chez le chien et chez le chat. Ces derniers 
                    peuvent se contaminer par l’ingestion d’aliments souillés, d’herbe, de terre ou de
                    selles contenant des larves mais aussi par voie transcutanée. Ce mode de 
                    transmission est fréquent dans les chenils mal entretenus dont le sol peut 
                    contenir des larves. Il suffit que le chien se couche sur le sol pour être 
                    contaminé. C’est aussi le mode de contamination de l’Homme : en marchant pieds
                    nus ou en s’allongeant sur les plages de sable sec. L’ankylostomose est ainsi 
                    l‘une des pathologies les plus fréquentes au retour de voyage8 , la plus 
                    fréquente des maladies de peau tropicales des voyageurs9 et la première 
                    cause de dermatite rampante (95 %)10, une maladie de peau évolutive. Elle 
                    se manifeste notamment par une éruption cutanée persistante. La prise en charge
                    passe par l’administration de médicaments et la guérison spontanée est possible
                    en 2 à 8 semaines.
                </li>
                <li>
                     LES ECHINOCOQUES : Les échinocoques sont des parasites digestifs rencontrés 
                     chez le renard et parfois le chien dans les régions du nord de la France. S’ils 
                     ne provoquent pas de signes cliniques chez le chien, ils sont en revanche 
                     responsables de signes cliniques graves chez les ruminants, les porcins, les
                    petits rongeurs ou encore les Hommes chez qui se développent des kystes volumineux
                    dans les organes internes (poumons et foie principalement). Les personnes les 
                    plus exposées sont les bergers, les agriculteurs et dans une moindre mesure, 
                    les vétérinaires. Les facteurs de risques sont essentiellement liés aux chiens 
                    de chasse et aux zones d’élevages de moutons gardés par des chiens qui 
                    contaminent l’environnement.
                </li>
            </ul>
            <h3>
                LES MESURES DE PRÉVENTION POUR PROTÉGER LES POPULATIONS FRAGILES CONTRE LA 
                TOXOCAROSE :
            </h3>
            <h3> CHEZ L’HOMME :</h3>
            <p> Mesures individuelles :</p>
            <ul>
                <li>Contrôle de l’ingestion d’œufs par l’hygiène : selaver les mains avant les repas</li>
                <li>Dépistage précoce des troubles psychiatriques àl’origine de géophagie</li>
                <li>Cuisson des aliments</li>
            </ul>
            <p>Mesures collectives :</p>
            <ul>
                <li>Entretien des bacs à sables sables</li>
                <li>Régulation des populations de chiens errants </li>  
            </ul>
             <h3> CHEZ L’ANIMAL :</h3>
             <ul>
                <li>Ramassage journalier systématique des matières fécales </li>
                <li>
                    Vermifugation régulière adaptée au mode de  vie : - Chiots/chatons : tous les mois 
                    - Chiens/chats de + 6 mois : Familles avec enfants ou personnes âgées ou 
                    immunodéprimées : tous les mois Pas de contact à 
                    risque : 4 fois par an
                </li>
                <li>
                    Une protection élargie aux parasites externes est conseillée pour une approche 
                    préventive large et intégrée
                </li>
             </ul>
            <h3>
                LES RECOMMANDATIONS DES PROFESSIONNELS DE LA SANTÉ HUMAINE ET ANIMALE POUR PRÉVENIR LES
                 RISQUES PARASITAIRES.
            </h3>
            <ul>
                <li> 
                    Profiter de la consultation vaccinale vétérinaire régulière pour discuter de la 
                    prévention parasitaire 
                </li>
                <li>
                    Respecter et personnaliser le calendrier des traitements antiparasitaires externes
                    et internes selon le mode de vie de l’animal Pour les familles avec enfants et 
                    personnes fragiles, un traitement mensuel des chiens et des chats contre les puces,
                    les tiques et les vers est conseillé. Il existe des solutions en 1 seul geste
                    contre les parasites externes et internes les plus fréquents pour une approche 
                    préventive large et intégrée. 
                </li>
                <li> 
                    Ramasser tous les jours les déjections pour éviter la contamination de
                     l’environnement proche.
                </li>
                <li>
                    Apporter une alimentation saine pour l’animal en évitant les viandes crues et 
                    les abats • Se laver régulièrement les mains • Ne pas laisser l’animal lécher 
                    le visage des enfants • Laver les aliments crus à l‘eau claire avant de les 
                    consommer • Se renseigner auprès de son médecin et de son vétérinaire lors d’un 
                    départ en vacances dans les zones à risques.
                </li>
            </ul>   
        </section>

        <section class="container_1" id="honoraires">
            <h2>Les honoraires du vétérinaire</h2>
            <p>
                Ce que représentent les honoraires du vétérinaire. (Source Ordre des vétérinaires).
            </p>
            <h3> Un professionnel de la santé pas comme les autres :</h3>
            <p>
                Le vétérinaire porte toute son attention aux animaux qu'il soigne : leur santé n'a pas 
                de prix bien qu'elle ait un coût... Les Français ont l'habitude de payer leurs factures 
                d'eau, d'électricité, de supermarché, de plombier... Mais avec notre système de Sécurité
                sociale, nous ne sommes pas habitués à payer nous-mêmes nos soins médicaux.
            </p>
            <p>
                Nous n'avons donc pas vraiment conscience du coût réel de la santé. C'est un peu la
                 même chose pour les coûts liés à la santé de vos animaux, mais cette fois il faut bien 
                 les assumer... Et l'on prête parfois au vétérinaire l'image du professionnel 
                 relativement cher. Il est important de bien évaluer le travail de votre vétérinaire,
                pour comprendre le rapport qualité-prix des soins apportés.
            </p>
            <h3>
                Pourquoi les médicaments vétérinaires sont-ils en général plus chers que leurs 
                équivalents humains ?
            </h3>
            <p>
                La TVA est 20% alors qu'en humaine elle est de 5,5% : cela fait une différence de 14,5%
                imposée par l'Etat !
            </p>
            <p>
                Les coûts de production sont proportionnellement plus chers : les produits vétérinaires
                ne bénéficient pas des mêmes économies d'échelle alors que les contraintes 
                réglementaires sont proches des médicaments humains (le marché vétérinaire est 20 
                fois plus petit qu'en humaine : les coûts ne peuvent pas être répartis autant).
            </p>
            <h3>Les produits chez le vétérinaire sont-ils plus chers qu'ailleurs ?</h3>
            <p>
                Les produits chez le vétérinaire ne sont pas, sauf exception toujours explicable, plus 
                chers qu'ailleurs. Il suffit pour s'en persuader de comparer les prix de vente des 
                aliments pour animaux vendus aussi en animalerie, ou des médicaments vétérinaires 
                vendus aussi en pharmacie. Ils sont, sauf exception, identiques et parfois inférieurs !
                Avec la connaissance de l'animal, l'écoute, le conseil, le suivi, la sécurité, 
                la responsabilité et la disponibilité en plus...
            </p>
            <h3>Objectif : l'attention, la qualité et la sécurité des soins apportés à vos animaux.</h3>
            <p>
                Le bien-être et la santé d'un animal ont un coût : la réalité du prix chez le 
                vétérinaire repose sur des frais (personnel soignant, équipement et matériel, 
                formation, stock, etc.…) :
            </p>
            <p>
                Le vétérinaire est pratiquement le seul professionnel de santé à ne pas dépendre de 
                fonds publics : il doit donc faire payer à ses clients la totalité des coûts des soins 
                réalisés.
            </p>
            <p>
                La qualité exigée par les clients et les exigences administratives ne cessent 
                d'augmenter. Un juste équilibre est donc en permanence recherché entre les besoins 
                d'une structure vétérinaire pour délivrer une qualité de service sans faille, et les 
                ressources financières qui ne peuvent venir que des honoraires payés par les clients.
                La raison d'être de tout vétérinaire est de mettre à la portée du plus grand nombre
                une qualité et une sécurité des soins.
            </p>
            <p>
                Cette qualité se doit d'être à la hauteur de l'affection des Français pour leurs 
                animaux domestiques et du professionnalisme des éleveurs de France.
            </p>
        </section>
    </main>

    <footer>
        <!-- include bottom web site -->
        <?php require_once(__DIR__. '/../components/_footer.html'); ?>
    </footer> 
</body>
</html>