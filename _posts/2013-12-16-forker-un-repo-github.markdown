---
layout: post
title:  "Forker un Repo sur GitHub"
subtitle: "Un fork (bifurcation) est une copie d'un repository. Ce peut être une bonne base pour démarrer."
author: "Christophe Ducamp"
date:   2013-12-16 14:36:00
categories: github git repo fork howto tutoriel
---
Lien de référence : <span class="h-cite"><cite class="p-name u-url">[Fork A Repo](https://help.github.com/articles/fork-a-repo)</cite></span>

Si vous vous trouvez sur cette page, je peux supposer que vous [débutez sur Git et GitHub](/2013/12/15/Github-pour-nuls-partie-1/). Ce petit guide vous fera réviser quelques fondamentaux et vous aidera à faire vos premiers pas sur GitHub.

## Forker un Repo

Un *fork* est une copie d'un dépôt. Forker un dépôt vous permet d'expérimenter librement des modifications sans toucher au projet original.

Plus communément, les forks sont utilisés soit pour proposer des modifications sur le projet de quelqu'un d'autre ou pour utiliser le projet de quelqu'un d'autre comme point de départ pour une nouvelle idée.

####  Proposer des modifications sur le projet de quelqu'un d'autre

Un exemple génial d'utilisation des forks, c'est de proposer des modifications pour la correction de bugs. Plutôt que de signaler un problème que vous trouvez, vous pouvez :

- forker le repository.
- réparer le bug.
- proposer une *pull request* au propriétaire du projet.

Si le propriétaire du projet aime votre travail, il pourrait prendre votre réparation pour la ramener dans le repository original.

#### Utiliser le projet de quelqu'un d'autre comme point de départ d'une nouvelle idée.

Au [coeur de l'open source](http://opensource.org/about) il y a l'idée qu'en partageant du code, nous pouvons produire un logiciel meilleur et de confiance.

En fait quand vous créez un repository sur GitHub, vous avez le choix d'inclure automatiquement une fichier de licence, qui détermine la façon dont vous voulez que votre projet soit partagé avec d'autres.

## Forkez un repository d'exemple

Forker un repository est un processus très simple en deux étapes. Nous avons créé un repository pour vous entraîner.

1. Sur GitHub, naviguez vers le repository [spoon-knife](https://github.com/octocat/Spoon-Knife)
2. Dans le coin en haut et à droite de la page, cliquez sur **Fork**

Voilà, c'est fait ! Vous disposez désormais d'un *fork* du repository original `octocat/Spoon-Knife repository`

## Maintenez votre fork synchronisé

Vous pourriez avoir forké un projet afin de proposer des modifications vers le repository *upstream*, à savoir  le repository original. Dans ce cas, c'est une bonne pratique de synchroniser régulièrement votre fork avec le repository original. Pour faire ça, vous devrez utiliser Git à la ligne de commande. Vous pouvez pratiquer le réglage du repository upstream en utilisant le même repository [octocat/Spoon-Knife](https://github.com/octocat/Spoon-Knife) que vous venez de forker !

### Étape 1 : Installer et Paramétrer Git

Si ce n'est déjà fait, vous devez d'abord [installer et régler Git](/2013/12/10/installer-git/). N'oubliez pas non plus de [régler l'authentification vers GitHub à partir de Git](https://help.github.com/articles/set-up-git#next-steps-authenticating-with-github-from-git).

<span id="creer-un-clone-local-de-votre-fork"></span>
### Étape 2 : Créer un clone local de votre fork

À ce stade, vous avez un fork du repository Spoon-Knife, mais vous n'avez pas les fichiers dans ce repository sur votre ordinateur. Créons localement un clone de votre fork sur votre ordinateur.

1. Sur GitHub, naviguez vers votre fork du repository Spoon-Knife.
2. Dans la barre latérale de droite de votre page du repository du fork, cliquez sur l'icône fléchée pour copiez l'URL de clone pour votre fork. <img src="https://help.github.com/assets/images/help/repository/clone-repo-clone-url-button.png" />
3. Ouvrez la fenêtre de Terminal
4. Tapez `git clone`, et collez l'URL que vous avez copiée à l'étape 2. Cela ressemblera à cela, avec votre nom d'utilisateur GitHub au lieu de `YOUR-USERNAME`:
{% highlight bash %}
git clone https://github.com/YOUR-USERNAME/Spoon-Knife
{% endhighlight %}
5. Pressez la touche **Retour**. Votre clone local sera créé.

{% highlight bash %}
git clone https://github.com/YOUR-USERNAME/Spoon-Knife
Cloning into `Spoon-Knife`...
remote: Counting objects: 10, done.
remote: Compressing objects: 100% (8/8), done.
remove: Total 10 (delta 1), reused 10 (delta 1)
Unpacking objects: 100% (10/10), done.
{% endhighlight %}

Vous avez désormais une copie locale de votre fork du repository Spoon-Knife !

###  Étape 3 : Configurer Git pour synchroniser votre fork avec le repository original Spoon-Knife

Quand vous forkez un projet afin de proposer des modifications sur le repository original, vous pouvez configurer Git pour tirer les changements à partir de l'original, ou *upstream*, le repository à l'intérieur du clone local de votre fork.

1. Sur GitHub, naviguez vers le repository [octocat/Spoon-Knife](https://github.com/octocat/Spoon-Knife).
2. Dans la barre latérale de droite de la page repository, cliquez sur l'icône fléchée "copy to clipboard" pour copier l'URL clone du repository.
3. Ouvrez le Terminal (pour les utilisateurs Mac et Linux) ou l'invite de commande (pour les utilisateurs de Windows).
4. Modifiez les répertoires vers l'endroit du fork que vous avez cloné à l'étape 2
	1. Allez en haut de votre répertoire, tapez juste `cd` sans autre texte.
	2. Pour lister les fichiers et répertoires dans votre répertoire actuel, tapez `ls`.
	3. Pour aller dans l'un de vos répertoires listés, tapez `cd votre_repertoire_listé`.
	4. Pour remonter d'un répertoire, tapez `cd ..`
5. Tapez `git remote -v`et pressez la touche **Retour**. Vous verrez le repository distant actuel configuré pour votre fork.
{% highlight bash %}
git remote -v
origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)
origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)
{% endhighlight %}
6. Tapez `git remote add upstream`, puis collez l'URL que vous avez copiée à l'étape 2 et pressez **Retour**. Cela ressemblera à ça :
{% highlight bash %}
git remote add upstream https://github.com/octocat/Spoon-Knife.git
{% endhighlight %}  
7. Pour vérifier le nouveau repository upstream que vous avez spécifié pour votre fork, tapez de nouveau `git remote -v`. Vous devriez voir l'URL pour votre fork comme `origin`, et l'URL pour le repository original comme `upstream`.

{% highlight bash %}
git remote -v
origin    https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)
origin    https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)
upstream  https://github.com/ORIGINAL_OWNER/ORIGINAL_REPOSITORY.git (fetch)
upstream  https://github.com/ORIGINAL_OWNER/ORIGINAL_REPOSITORY.git (push)
{% endhighlight %}  

Maintenant, vous pouvez maintenir votre fork synchronisé avec le repository upstream à l'aide de quelques commandes Git. Pour plus d'information, voir "[Syncing a fork](https://help.github.com/articles/syncing-a-fork)."

### Étapes suivantes

Il n'y a pas de limites aux modifications que vous pouvez faire sur un fork :
- **Créer des branches** : les [branches](https://help.github.com/articles/creating-and-deleting-branches-within-your-repository/) vous permettent de construire de nouvelles fonctionnalités ou tester de nouvelles idées sans prendre de risques sur le projet principal.
- **Ouvrir des pull requests** : Si vous espérez contribuer en retour sur le repository original, vous pouvez envoyer une requête à l'auteur original afin qu'il ramène votre fork dans le repository original en proposant une [pull request](https://help.github.com/articles/using-pull-requests).   

## Trouver un autre repository à forker

Chaque repository public peut être forké, aussi à vous de trouver un autre projet qui vous intéresse et de le forker !

[Explore Github](https://github.com/explore) est un endroit merveilleux pour trouver des sujets qui vont piquer votre intérêt. Visitez cette page de temps en temps pour trouver ce qu'il y a de nouveau.


### Célébrez

Vous avez désormais forké un dépôt, mis en pratique le clonage de votre fork, et configuré un repository upstream. Que voulez-vous faire ensuite ?

* [Installer Git](/2013/12/10/installer-git/)
* [Créer un Repo](/2013/12/16/creer_un_repo_GitHub/)
* **Forker un Repo**
* [Etre Social](/2013/12/17/github-etre-social/)
