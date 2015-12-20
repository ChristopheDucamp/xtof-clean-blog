---
layout: post
title:  "Créer un Dépôt sur GitHub"
subtitle: "Pour poser un projet sur GitHub, il faut créer un repository. Créons-le !"
author: "christophe ducamp"
date:   2013-12-16 10:19:00
tags: github git repo remote howto tutoriel
---
Lien de référence : <span class="h-cite"><cite class="p-name u-url">[Create A Repo](https://help.github.com/articles/create-a-repo)</cite></span>

Si vous vous trouvez sur cette page, je peux supposer que vous [débutez sur Git et GitHub](/2013/12/15/Github-pour-nuls-partie-1/). Ce petit guide vous fera réviser quelques fondamentaux et vous expliquera comment faire vos premiers pas sur GitHub.

## Produire un nouveau dépôt sur GitHub

Chaque fois que vous produisez un *commit* (instantané) avec Git, il est stocké dans un dépôt (aussi appelé "repo"). Pour déposer votre projet sur GitHub, vous devrez disposer d'un dépôt GitHub pour le faire vivre.

*Plus sur les dépôts* : Git stocke tous vos fichiers projets dans un dépôt. Si vous pouvez voir les fichiers cachés sur votre système, vous verrez un sous-répertoire appelé ".git" dans le répertoire du projet où vous avez lancé `git init`. C'est l'endroit où Git stocke tous vos commits avec tout ce dont il a besoin. En plus de votre répertoire local, vous pouvez avoir aussi des dépôts distants (comme les dépôts sur GitHub). Les dépôts distants sont les mêmes que votre dépôt local, mais ils sont juste stockés sur un serveur ou un ordinateur distant pour faciliter la collaboration, les sauvegardes et d'autres trucs géniaux.

Cliquez sur [New Repository](https://github.com/repositories/new).

![image](https://github.s3.amazonaws.com/docs/bootcamp_2_newrepo.jpg "cliquez sur New Repository")

Remplissez l'information sur cette page : 

- Nom de votre dépôt 
- Description (en option)
- Public ou Privé (L'option privé est payante)
 
Et une fois terminé, cliquez sur "Create Repository."

![image](https://github-images.s3.amazonaws.com/help/bootcamp_2_repoinfo.png "cliquez sur New Repository")

Félicitations ! Vous avez créé avec brio votre premier "repo" (dépôt en français.) !

## Créez un README pour votre dépôt

Bien qu'un fichier README ne soit pas un élément obligatoire d'un repo GitHub, c'est une très bonne habitude à prendre que d'en placer un. Les READMEs sont un endroit génial pour décrire vore projet ou ajouter un peu de documentation comme savoir comment installer ou utiliser votre projet. Vous pourriez y ajouter une information de contact — si votre projet devient populaire, les personnes voudront vous aider.

#### Plus sur les READMEs

Si vous ajoutez un fichier avec le nom de fichier "README" dans votre repo, il sera automatiquement affiché sur la page d'accueil de votre repo. Cool non ? GitHub supporte différents formats de fichiers README. Celui dans ce tutoriel donnera un fichier texte basique mais les autres formats comme `.markdown` ou `.textile` peuvent être utilisés pour restituer du contenu HTML comme des liens et des titres. Pour plus d'informations sur les formats de marquage supportés, regardez [https://github.com/github/markup](https://github.com/github/markup).

### Étape 1 : Créez le fichier README

Dans votre fenêtre de terminal, tapez le code suivant : 

{% highlight bash %}

$ mkdir ~/Hello-World

# Crée un répertoire pour votre projet nommé "Hello-World" dans votre répertoire utilisateur local

$ cd ~/Hello-World
# Modifie le répertoire de travail en cours pour votre nouveau répertoire fraîchement créé

$ git init
# Installe les fichiers Git nécessaire
# Initialise le répertoire vite Git dans /Users/you/Hello-World/.git/

$ touch README
# Crée un fichier nommé "README" dans votre répertoire local Hello-World

{% endhighlight %}

Ouvrez le nouveau fichier README trouvé dans votre répertoire `Hello-World` dans un éditeur de texte et ajoutez le texte "Hello World!" Une fois terminé, sauvegardez et fermez le fichier.


### Étape 2 : Committez votre README

Maintenant que vous avez installé votre README, il est temps de le committer. Un commit est en fait un instantané de tous les fichiers dans votre projet à un moment donné. Dans la fenêtre de Terminal, tapez le code suivant : 

{% highlight bash %}

$ git add README
# fait entrer en scène le fichier README, et l'ajoute à la liste des fichiers à committer

$ git commit -m 'premier commit'
# Committe vos fichiers, en ajoutant le message "premier commit"

{% endhighlight %}

#### Plus sur les commits 

Pensez à un commit comme un instantané de votre projet - code, fichiers, tout - à un instant t. Après votre premier commit, git ne sauvegardera que les fichiers qui ont été modifiés, d'où le gain d'espace.

Attention : git fera de son mieux pour compresser vos fichiers, mais les gros fichiers et les binaires peuvent amener un dépôt à devenir obèse et peu maniable. Essayez d'éviter de committer des choses comme des ficihers compressés (zips, rars, jars), du code compilé (fichiers object, bibliothèques, exécutables), sauvegardes de database et fichiers média (flv, psd, musique, films)

### Étape 3 : Poussez votre commit

À ce stade, tout ce que vous avez produit réside dans votre dépôt local, ce qui veut dire que vous n'avez encore rien fait sur GitHub. Pour connecter votre dépôt local à votre compte GitHub, vous devrez régler un `remote` pour votre dépôt et pousser vos commits dedans.

#### Plus sur les remotes

Un *remote* est un dépôt stocké sur un autre ordinateur, dans ce cas sur le serveur de GitHub. C'est une pratique standard (et aussi par défaut dans certains cas) que de donner le nom `origin` au *remote* qui pointe vers votre dépôt principal hors du site (par exemple, votre dépôt GitHub).

Git supporte de nombreux remotes. Ceci est communément utilisé au moment de *forker* un dépôt.

{% highlight bash %}

$ git remote add origin https://github.com/username/Hello-World.git
# Crée un remote nommé "origin" pointant votre dépôt GitHub

$ git push origin master
# Envoie vos commits dans la branche "master" sur GitHub

{% endhighlight %}

(**Truc** : Remarquez que le chemin vers votre URL distante (remote) --Hello-World.git--correspond à celui que vous avez créé sur GitHub. Ceci est sensible à la casse, et il est important de conserver la même.)

Maintenant si vous regardez votre dépôt sur GitHub, vous verrez que votre README y a été ajouté.

![image](https://github.s3.amazonaws.com/docs/bootcamp_2_updatedreadme.jpg) 

Votre README a été créé.

## Fêtez ça ! 

Félicitations ! Vous avez maintenant créé un repo sur GitHub, créé un README, l'avez committé et poussé vers GitHub. Que voulez-vous faire ensuite ?

- [Installer Git](/2013/12/10/installer-git/)
- **Créer un Repo**
- [Forker un Repo](/2013/12/16/forker-un-repo-github/)
- [Être Social](/2013/12/16/github-etre-social/)

## Ailleurs 
- [Les bases de Git - Démarrer un dépôt Git](http://git-scm.com/book/fr/Les-bases-de-Git-D%C3%A9marrer-un-d%C3%A9p%C3%B4t-Git) - pour réviser et apprendre à cloner un dépôt existant.

![image](http://imgs.xkcd.com/comics/git_commit.png)