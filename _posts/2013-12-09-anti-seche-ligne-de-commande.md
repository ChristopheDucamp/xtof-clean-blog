---
title: Antisèche Ligne de Commande pour Démarrer sur GitHub !
date: '2013-12-09 14:47:44'
categories: []
layout: post
subtitle: Pour les débutants qui veulent s'essayer à la ligne de commande
author: Christophe Ducamp
tags:
- github
- commandline
- ligne de commande
slug: anti-seche-ligne-de-commande
draft: false

---
Si vous démarrez dans la [fenêtre de Terminal](/2013-12-10-terminal-trucs)

## Glossaire Git pour les Nuls

- `git init` : Initialise un dépôt git dans un répertoire vide.
- `git status` : Affiche le statut des choses dans le répertoire suivi 
- `git add  <NOM DU FICHIER A SUIVRE>` : Ajoute un fichier à suivre dans la zone d'attente
- `git commit -m "entrez votre message"` : Consigner (déclarer) toute modification. 
- `git remote add origin [adresse URL GitHub ici]` : Connecte votre dépôt local avec GitHub.
- `git push -u origin nom_branche` : Pousse les modifications vers GitHub
- `git checkout` : Littéralement "check out" (retirer, rapatrier) une branche. 
- `git -b <NomBranche>` : Crée une nouvelle branche dans votre dépôt. 
- `git log`: affiche un journal des modifications au dépôt
- `git clone <URL PROVENANT DE GITHUB>` : clone un projet de votre système à partir de github
- `git branch <nom_branche>` : crée une copie de la branche master appelée  <nom_branche>
- `git checkout <branch_name>` : bascule vers nom_branche comme branche de travail
- `git checkout master` : bascule la branche vers master
- `git branch -a` : affiche les branches existantes pour le dépôt particulier

## Liens et Ressources : 

- Le [guide d'Atlassian](https://www.atlassian.com/git/tutorial/git-basics) a de très bons tutoriels en langage clair pour mieux comprendre et compléter cette anti-sèche de Git.
- Pour les traductions des commandes, se référer à l'index de l'ouvrage de référence sur Git traduit en français : [git-scm/book](http://git-scm.com/book/fr)


## Glossaire ligne de commande (pour mémoire)

[source OS X Facile](http://www.osxfacile.com/terminal.html)

`ls` : La liste des fichiers et dossiers installés dans votre dossier utilisateur apparaît.

`ls -a` : La liste de TOUS les éléments du dossier utilisateur, y compris les éléments invisibles, apparaît.

`ls -a Documents` : La liste de TOUS les éléments du dossier "Documents" apparaît (vous pouvez substituer "Documents" par un autre nom de dossier.

`ls -l` : Donne plus de détails que la commande ls : Apparaissent les permissions, le propriétaire, le groupe etc...

`man`	: Cette commande vous indique à quoi correspond telle ou telle commande du terminal. Par exemple, tapez man ls : Cela vous indiquera à quoi correspond la commande ls

`pwd`	: (Print Working Directory) Cette commande affiche le chemin absolu vers le répertoire dans lequel vous vous trouvez. Ceci vous permettra de vous localiser à tout moment dans l'arborescence OS X.

`cd`	: (Change Directory) Pour changer de répertoire. Par exemple pour se rendre dans le répertoire de Marc, on tapera cd /Users/Marc

`cp` : Sert à copier un fichier : Par exemple pour copier le fichier User/Marc/documents/texte.doc dans le répertoire "important", il faudra taper la commande : cp /Users/Marc/Documents/texte.doc Users/Marc/Documents/Important/texte.doc

`mv` : Sert à déplacer un fichier d'un répertoire vers un autre. (Même procédure que pour copier un fichier)

`rm`	: Sert à supprimer définitivement un fichier. Par exemple : rm texte.doc

`rmdir`	: Sert à supprimer définitivement un dossier vide. Par exemple : `rmdir tartampion`

`top` : Permet de voir les process en cours. Pour quitter taper "q".

`df -h`	: Affiche la liste des volumes montés sur votre Mac et les caractéristiques de ceux-ci (très pratique).

`chown`	: Pour changer le propriétaire d'un fichier.

`mkdir`	: Pour créer un répertoire.


