---
title: 'Github Pour Mac : Faire des Modifications'
date: '2013-12-06 00:00:00'
categories:
- github
- git
layout: post
author: Christophe Ducamp
slug: github-produire-des-modifications
tags: 
- github
- git
draft: false

---
[Lien de référence](https://help.github.com/articles/making-changes)

Après avoir forké un dépôt et l'[avoir cloné vers GitHub pour Mac](/2013/12/06/github-pour-mac-travailler-avec-des-repos/), vous pouvez visualiser le dépôt sur GitHub.com et ajouter [quelques amis comme collaborateurs](https://help.github.com/articles/how-do-i-add-a-collaborator) de façon à ce qu'ils puissent aussi travailler sur votre fork… mais tout d'abord, faisons quelques modifications par nous-mêmes ! 

GitHub pour Mac dispose d'un raccourci très pratique pour que vous puissiez rapidement voir vos dépôts dans le Finder – survolez et posez-vous sur le dépôt dans la vue des dépôts principaux et faites un control-clic, puis sélectionnez "Show in Finder" dans le menu contextuel qui apparaît.


![UI Github pour Mac]({{ site.url }}/img/Github-Mac-ShowInFinder.png)

## Faire une modification

Si vous avez [cloné le dépôt Spoon-Knife](/2013/12/06/github-pour-mac-travailler-avec-des-repos/) vous remarquerez qu'il y a quelques fichiers projets très simples à l'intérieur : 
- un fichier texte `README`, une page HTML et un GIF animé.  Ouvrez le fichier `README` dans votre éditeur de texte préféré, modifiez le texte pour comme vous aimez, puis sauvegardez.

Maintenant que vous avez fait des modifications sur votre copie locale, utilisons GitHub for Mac pour "Committer" cette modification.

### C'est quoi un commit ?

Pensez à un *commit* comme un instantané de votre projet -code, fichiers, tout ce que vous voulez- à un moment donné.

## Visualiser votre modification

Revenez sur Github pour Mac et double-cliquez sur "Spoon-Knife" dans la vue des dépôts principaux. Ceci vous conduira à la vue Historique, où vous pourrez voir les précédents *commits* d'autres personnes. Néanmoins si vous cliquez sur l'onglet "Changes" sur la gauche, vous entrerez dans la vue Changes, où vous pouvez voir que le fichier README est maintenant mis en valeur comme étant modifié. Sur la droite, vous pouvez voir une "diff" affichant les lignes ayant été modifiées.

![image]({{ site.url }}/img/GitHub-Changes-view.png "Visualisation des Modifications")


## Committez vos modifications localement

Pour committer ces modifications, tapez un résumé de commit (et en option, une description étendue, si vous voulez fournir plus de détails des modifications que vous avez produites) et cliquez sur "Commit".

À ce stade, vous remarquerez qu'il n'y a aucun fichier sélectionné à committer - au lieu de cela, il existe maintenant des "Unsynced Commits" en bas. Ce qui veut dire que vos modifications ont été committées localement avec Git mais pas encore synchronisées vers votre copie distante sur GitHub.com. Précédemment, l'icône dans l'onglet modifications était verte et rouge pour signifier  les nouvelles modifications - maintenant l'icône a viré au jaune pour signifier sauvegardé, mais commits **non synchronisés**.

![image](2013/12/06/github-pour-mac-travailler-avec-des-repos/)

## Synchronisez vos modifications avec GitHub

Pour envoyer vos modifications vers votre copie distante, tout ce que vous devez faire, c'est cliquer sur le bouton "Sync" dans la vue "Changes". Une fois synchronisé, vous remarquerez que l'onglet de l'icône Changes a changé pour redevenir comme les autres onglets. Ceci veut dire qu'il n'y a plus de modifications locales à committer ou à synchroniser.

**Attention** : Si vous avez fait des modifications dans un dépôt local, il est très important que celles-ci soient committées avant de tenter de synchroniser. Autrement, l'app renverra une erreur.

**Truc** : Vous pouvez basculer le bouton "Commit" vers  "Commit & Sync" en utilisant la bascule placée à côté de "Uncommitted Changes" dans la vue "Changes". Ceci facilite la production d'un commit suivi instantanément d'un sync.

## C'est la Fête 

Bravo ! Vous avez produit quelques modifications sur un dépôt et les avez committé avec Git. Maintenant [regardons l'historique des commits](https://help.github.com/articles/viewing-previous-commits) dans un projet.

