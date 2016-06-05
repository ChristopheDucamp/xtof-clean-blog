---
title: Installer Git
date: '2013-12-10 21:44:00'
categories:
- github
- git
- howto
- tutoriel
layout: post
subtitle: Au coeur de GitHub,  il y a un système de contrôle de version appelé Git.
  Comment l'installer.
author: Christophe Ducamp
slug: installer-git
tags: []
draft: false

---
[lien de référence](https://help.github.com/articles/set-up-git)

## Installer Git

**N.B.** Si vous êtes perdu sur cette page, ... oubliez le terminal ! Vous pouvez à la place utiliser l'[application native de GitHub pour Mac](https://central.github.com/mac/latest) 

Si vous atterrissez sur cette page, je suppose que comme moi, vous [débutez sur Git et GitHub](/2013/12/15/Github-pour-nuls-partie-1/). Ce petit guide vous fera réviser quelques fondamentaux et vous aidera à faire vos premiers pas sur GitHub.

## Télécharger et Installer Git
Au coeur de GitHub, il y a un système de contrôle de version (VCS) appelé Git*. Créé par la même équipe qui a créé Linux, Git est responsable de tout ce qui concerne GitHub et les sujets afférents à ce qui passe localement sur votre ordinateur.

*Si vous ne savez pas déjà ce qu'est Git, [apprenez les rudiments de Git](http://git-scm.com/book/fr/D%C3%A9marrage-rapide-Rudiments-de-Git).

**Téléchargez et installez** la [dernière version de Git](http://git-scm.com/downloads).

**ProTruc**: Git n'ajoutera pas d'icône à votre dock, ce n'est pas ce type d'application.

## Installer Git

Maintenant que vous avez installé Git, il est temps de configurer vos réglages. Pour faire ça, vous devez ouvrir le Terminal.

Besoin d'une petite leçon concernant le Terminal ? [quelques trucs ici](/2013-12-10-terminal-trucs)

## Nom d'utilisateur

Premièrement vous devez dire à git votre nom, de manière à ce qu'il puisse proprement étiqueter les commits que vous produisez.
  
  
{% highlight bash %}
$ git config --global user.name "Votre Nom Ici"
# Règle le nom par défaut pour git à utiliser quand vous committez
{% endhighlight %}  
  
  
## E-mail

Git sauvegarde votre adresse e-mail à l'intérieur des commits que vous produisez. Nous utilisons l'adresse e-mail pour associer vos commits à votre compte GitHub. 


{% highlight bash %}
$ git config --global user.email "votre_email@exemple.com"
# Règle l'e-mail par défaut pour git à utiliser quand vous committez
{% endhighlight %}  
  

Votre adresse e-mail pour Git devrait être la même que celle associée à votre compte GitHub. Si ce n'est pas le cas, regardez [ce guide](https://help.github.com/articles/how-do-i-change-my-primary-email-address) pour aider à ajouter des e-mails à votre compte GitHub. Si vous voulez cacher votre adresse e-mail, [ce guide](https://help.github.com/articles/keeping-your-email-address-private) peut vous être utile.

### Écraser les réglages dans les dépôts individuels

Les étapes listées au-dessus vous montrent comment régler globalement votre info utilisateur. Ceci veut dire que quel que soit le dépôt sur lequel vous travaillez sur votre ordinateur, vous produirez des commits sous cet utilisateur. Si vous vous retrouvez confronté à devoir produire des commits avec une info-utilisateur différente pour un dépôt spécifique (peut-être pour le travail vs. projets personnels), vous devrez changer l'info dans ce même dépôt. 

{% highlight bash %}
$ cd mon_autre_repo
# Change le repo de travail vers le repo vers lequel vous souhaitez basculer l'info pour 
$ git config user.name "Nom Different"
# Regle le nom d'utilisateur pour ce repo spécifique
$ git config user.email "e-mail-different@email.com"
# Regle l'e-mail d'utilisateur pour ce repo spécifique
{% endhighlight %}


Désormais vos commits seront associés à ces nouveaux nom-d-utilisateur et e-mail dans le repo spécifié.


# Cacher le Mot de Passe

La dernière option que nous devons régler dira à git que vous ne voulez pas taper votre nom d'utilisateur et mot de passe à chaque fois que vous parlez à un serveur distant.

**Truc** : Vous devez avoir installé git 1.7.10 ou une version plus récente pour utiliser le `credential helper`.

Pour utiliser cette option, vous devez installer le `osxkeychain credential helper` et dire à git de l'utiliser.

Il y a une chance que vous ayez déjà le osxkeychain helper, selon si vous avez installé git en utilisant homebrew ou si vous avez la dernière version de git.

Vous pouvez vérifier cela en essayant de lancer la commande suivante :
  
  
{% highlight bash %}
$ git credential-osxkeychain
# Test du cred helper
Usage : git credential-osxkeychain <get|store|erase>
{% endhighlight %}


Si vous n'avez pas le helper, vous pouvez le télécharger avec curl : 

{% highlight bash %}
$ git credential-osxkeychain
# Test du cred helper
# git: 'credential-osxkeychain' n'est pas une commande git. Voir 'git --help'.

$ curl -s -O \
  http://github-media-downloads.s3.amazonaws.com/osx/git-credential-osxkeychain
# Télécharge le helper

$ chmod u+x git-credential-osxkeychain
# Répare les permissions sur le fichier pour le faire tourner
{% endhighlight %}

Maintenant vous devez installer le helper à l'intérieur du même répertoire où Git lui-même est installé.

{% highlight bash %}
$ sudo mv git-credential-osxkeychain \
  "$(dirname $(which git))/git-credential-osxkeychain"
# Migre le helper vers le chemin où git est installé
# Password: [entrez votre mot de passe]
{% endhighlight %}

Pour dire à git d'utiliser osxkeychain, réglez simplement la config globale git :

{% highlight bash %}
$ git config --global credential.helper osxkeychain
# règle git pour utiliser le osxkeychain credential helper
{% endhighlight %}

La prochaine fois que vous clonerez une URL HTTPS qui requiert un mot de passe, vous serez averti de rentrer votre nom d'utilisateur et mot de passe, et d'autoriser l'accès à la OSX keychain. Après ça, les `username` et `password` seront stockés dans votre keychain et vous ne serez plus obligés de les saisir à nouveau dans git.

**Truc :** Le `credential helper` ne fonctionne que si vous clonez un dépôt URL HTTPS. Si vous utilisez le dépôt URL SSH, les clés SSH son utilisées pour l'authentification. [Ce guide](https://help.github.com/articles/generating-ssh-keys) offre de l'aide pour générer et utiliser une paire de clés SSH.

# Célébrer

Bravo, vous avez bien réglé Git et GitHub ! Que voulez-vous faire ensuite ?

* **Installer Git**
* [Créer un Repo](/2013/12/16/creer-un-repo-github/)
* [Forker un Repo](/2013/12/16/forker-un-repo-github/)
* [Etre Social](/2013/12/16/github-etre-social/)
