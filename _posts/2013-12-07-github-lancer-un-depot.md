---
title: 'GitHub pour Mac : Lancer un dépôt'
date: '2013-12-07 00:00:00'
categories:
- github
- git
layout: post
subtitle: Utiliser votre éditeur de texte favori pour faire des modifications sur
  votre projet, puis utiliser GitHub Desktop pour voir vos commits utiles
author: Christophe Ducamp
slug: github-lancer-un-depot
tags: []
draft: false

---
[Lien de référence](https://help.github.com/articles/branching-out) 

<ins datetime="2015-12-20">Edit - Page à rafraîchir et synchroniser</ins> 

1. Créer une branche pour votre travail
2. À Propos des commits
3. Committer et réviser les modifications de votre projet
4. Réinitialiser un commit 


–
Attention : contenu déprécié : 

Plutôt que de [cloner un repo pré-existant](/2013/12/06/github-pour-mac-travailler-avec-des-repos/) - commençons cette fois-ci par créer un tout nouveau projet.

Cliquez sur "Repositories" tout en haut de la fenêtre de l'app, de manière à revenir dans la vue principale Repositories. Vous remarquerez que tous les dépôts locaux que vous avez ajoutés à l'app sont listés sous 'My Repositories' dans la barre latérale. Tous les repos provenant de GitHub.com auxquels vous avez accès - sans tenir compte de savoir si vous les avez clonés à cette heure - seront listés sous votre nom d'utilisateur.

![image](https://github-images.s3.amazonaws.com/mac/repository/un-cloned-repos.jpg "Une liste de repos non clonés")

Pour créer un tout nouveau repo à partir de GitHub pour Mac, cliquez sur le bouton "+" tout en bas de la fenêtre de l'app et sélectionnez "Create New Repository".

**Truc** : Pour ajouter des repos qui sont déjà sur votre machine, mais pas encore suivis par GitHub pour Mac, vous pouvez utiliser "Add Local Repository" ici à partir du menu, ou glisser et déposer simplement les répertoires du repo sur la fenêtre de l'app.

![image](https://github-images.s3.amazonaws.com/mac/repository/create-and-add.jpg "Bouton ajouter et créer")

Donnez à votre nouveau repo un nom (et une description en option) et utilisez le bouton "Choose" pour sélectionner un dossier pour placer dedans votre copie locale.

Si vous disposez d'un plan GitHub payant, vous pouvez cocher "Keep this code private" pour vous assurer que votre copie distante ne peut être vue que par vous-même et les collaborateurs autorisés. En le laissant désactivé, ceci créera un repo open source sur GitHub.com.

Assurez-vous d'avoir sélectionné le compte GitHub correct (si vous en utilisez plus d'un), puis cliquez sur  "Create Repository" afin d'initialiser le repo, créez la copie locale, ajoutez-la à GitHub pour Mac et, si vous avez choisi de la pousser vers GitHub.com, créez une version distante que vous pouvez synchroniser.

C'est toujours une bonne idée de démarrer par l'ajout d'un fichier `README` au repo. Créez un fichier  `README.txt` ou `README.md (pour [Markdown](2013/12/22/markdow-avenir-ecriture/)), puis committez-le vers le repo à partir de la vue Changes.

## Branches

La branche principale d'un repo est généralement appelée `master`, et représente une version relativement stable du projet sur lequel vous travaillez. À ce stade, toutes les modifications que vous avez produites ont été faites sur la branche `master`.

Si vous produisez une app ou un site web, vous pourriez par exemple avoir tout un paquet de différentes fonctionnalités ou idées en progrès à tout moment - certaines d'entre elles étant prêtes à lancer, et d'autres qui ne le sont pas. Pour cette raison, `master` existe comme un point central à pour y incorporer dedans d'autres "branches" de travail.

**Truc ** : Si vous voulez committer directement sur `master`, l'app ne vous arrêtera pas. Néanmoins, ceci ne se prête en soi pas très bien pour travailler de façon collaborative, et vos modifications seront plus difficiles à suivre et maintenir au fur et à mesure que le projet grandit.

Cliquez sur l'onglet "Branches" pour entrer dans la vue Branches. Une fois que vous avez produit un commit initial, vous serez automatiquement transportés vers la toute-nouvelle branche `master` créée - que vous pourrez voir sélectionnée sous l'en-tête "Current branch".

Pour créer une nouvelle branche en dehors de `master`, cliquez sur le bouton "+" à droite de la ligne `master`. Tapez le nom de votre nouvelle branche à l'intérieur du champ de texte qui apparaît, et cliquez sur  "Branch" pour la créer.

![image](2013/12/22/markdow-avenir-ecriture/ "Photo de la nouvelle branche")

À ce stade, votre nouvelle branche deviendra aussi la branche en cours. Les modifications que vous produirez sur votre copie locale n'impacteront pas la branche `master`, ainsi vous êtes libres d'expérimenter et de committer des modifications, en toute sécurité sachant que cette branche n'a pas besoin d'être fusionnée dans la branche `master` jusqu'à ce que vous soyez prêts, ou jusqu'à ce que quelqu'un avec qui vous travaillez ait révisé vos modifications.

Si vous voulez néanmoins revenir vers votre `master`, double-cliquez simplement sur la ligne `master`dans la vue Branches. Les fichiers dans le repo sur le disque seront automatiquement mis à jour avec les contenus qui sont sur `master`

Les branches sont uniquement locales quand elles sont créées pour la première fois, et ne sont pas automatiquement publiées vers le repo distant. Une fois que vous êtes prêt pour pousser vos modifications sur GitHub, cliquez sur le bouton "Publish" juste à côté de la branche dans la vue Branches, ou sur le bouton "Publish Branch" dans la barre de titre de la fenêtre.

![image](https://github-images.s3.amazonaws.com/mac/branch/publish-branch.jpg "Le bouton publish branch")

Quand il existe des modifications non committées sur une branche et que vous basculez ensuite vers une branche différente, GitHub pour Mac 'planque par magie' les modifications afin qu'elles restent intactes quand vous revenez en arrière ! 

**Truc** : Vous pouvez switcher rapidement entre les branches et en créer à partir de n'importe quel onglet en pressant la touche Command-B ou en cliquant sur l'icône de la branche placée en bas et à gauche de la fenêtre.

## Célébrer 

Bravo ! Maintenant que vous avez créé des branches dans votre projet ceci vous permet à vous et vos collaborateurs d'essayer plein de trucs merveilleux - sans aucun risque de mettre la pagaille dans la branche `master`.

Etes-vous 100% sûr que votre chose géniale soit prête à être incorporée à l'intérieur de `master`? Il semble alors que vous soyez prêt pour [fusionner](/2013/12/07/github-fusion-branches/).
