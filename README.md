                 Commande utiles:
                 
           les lignes pour liée le git au github:

git init // initailiser le dépôt en local
git add README.md
git commit -m "first commit"
git branch -M main // pour renomer la branche master
git remote add origin https://github.com/MorganNwt/cliniqueV2.git
git push -u origin main

---------------------------------------------------------

git add . // pour ajouter au commit
git status // pour vérifier le status des fichier a commit
git commit -m "ceci est mon nouveau titre" // pour donner un nom au commit
git commit --amend --no-edit // sans rien derrière pour ajouter toutes modif à un commit en cours
git commit --amend -m "Nouveau message" // pour modifier le message d'un commit

git push origin main //  pour transférer le dépôt du git sur le github
git branch morgan // pour créer la branch
git branch  -m morgan // pour modifier le nom de la branch
git checkout // ppour vérifier sur quel branch on est
git checkout dev // pour me déplacer sur la branch
git checkout -b // + nom de la branch pour ce déplacer et créer la nouvelle branch
git merge dev // pour ajouter la plus value sur la branch dev
-----------------------------------------------------------------
git log // pour voir tout les commit ( esc + :q) pour quitter le log
git remote // pour voir le nombre de connexion au github
 git branch -d morgan // pour supprimer une branch une fois le push git et le merge request effectué sur github
--------------------------------------------------------------------------
git reset --soft de544f1d228cd2fdf24eddf38175cdd9e77ebbed // pour revenir en arrière sur un commit si je fait plusieurs commit sans avoir fait le push uniquement. le commit est déjà indexé

git reset --mixed de544f1d228cd2fdf24eddf38175cdd9e77ebbed // même chose mas le commit n'est pas indexé
git reset --hard de544f1d228cd2fdf24eddf38175cdd9e77ebbed // même chose mais efface tout
--------------------------------------------------------------------------------
echo phpinfo();  // Pour voir les infos php

