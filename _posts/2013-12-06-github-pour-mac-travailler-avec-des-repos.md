---
title: 'Github Pour Mac : Travailler avec des dépôts'
date: 2013-12-06 00:00:00 Z
tags:
- github
- git
layout: post
---

[lien de référence](https://help.github.com/desktop/guides/contributing/working-with-your-remote-repository-on-github-or-github-enterprise/)

GitHub ce n'est que de la collaboration. Deux personnes ou plus peuvent disposer chacune de leurs propres copies locales d'un dépôt, qu'elles synchronisent chacune sur la même copie distante.

Encore très peu à l'aise sur Git et la ligne de commande, ces quelques premiers pas sur l'interface visuelle de [Github pour Mac](http://mac.github.com) sont destinés à un premier rôdage pour produire un premier fork + Clonage. Ce qui traduit en langage clair consiste simplement à *rapatrier une copie locale d'un projet open source existant sur mon mac personnel*.

## Pour les connaisseurs Git 

Ceux déjà à l'aise avec Git peuvent remarquer qu'il n'y a pas de boutons "Push" ou "Pull" dans l'application GitHub pour Mac. Au lieu d'apporter de nouvelles modifications dans la copie distante avec une commande, et de pousser vos commits non publiés avec une autre commande, GitHub pour Mac utilise un unique bouton "Sync" qui effectue les deux opérations en même temps. Dans les coulisses, GitHub pour Mac fait l'équivalent d'un `git pull--rebase` (mais s'assure de ne jamais récrire de fusions).


Bifurcation 
-----------

Afin de synchroniser les modifications locales vers un dépôt distant sur GitHub.com, vous aurez besoin de permissions en lecture et en écriture sur ce dépôt, ce qu'on appelle encore une permission "push & pull".

Le moyen le plus aisé de recevoir une permission "push & pull" sur un projet open source, c'est d'abord de le "forker" à partir de GitHub.com vers votre propre compte. 

Regardons le projet suivant open-source appelé *Spoon-Knife* :

[https://github.com/octocat/Spoon-Knife](https://github.com/octocat/Spoon-Knife)

Ce projet est signé d'un utilisateur appelé *@octocat*, et nous voulons produire dessus nos propres modifications. Forkez-le sur votre compte en cliquant sur le bouton "Fork" de ce dépôt.

![image](https://github-images.s3.amazonaws.com/skitch/fork-20130108-134723.jpg)

Clonage
-------

Une fois que vous avez bifurqué votre propre version de ce dépôt, vous devrez la cloner vers GitHub pour Mac, afin de disposer d'une copie locale et synchronisable.

- Allez sur votre compte sur GitHub.com et sélectionnez le dépôt forké. L'URL devrait ressembler à quelque chose comme ça (où mon-nom-utilisateur est remplacé par votre nom d'utilisateur) :

     https://github.com/mon-nom-utilisateur/Spoon-Knife

- Cliquez sur le bouton "Clone in Mac" pour lancer GitHub pour Mac et démarrez le clone. ![image](https://github-images.s3.amazonaws.com/skitch/clone-20130108-135735.jpg "Le bouton clone")

- Vous devrez sélectionner un dossier sur votre Mac pour stocker la copie locale, aussi sélectionnez un endroit approprié et cliquez sur "Clone".

Champagne
---------

Bravo ! Vous disposez de votre propre version bifurquée d'un projet open source, clonée et synchronisée avec GitHub pour Mac. Vous voilà prêt pour commencer à contribuer.

Prochaine étape : [apprendre à faire des modifications et les committer](/2013/12/06/github-produire-des-modifications/) avec GitHub pour Mac.
