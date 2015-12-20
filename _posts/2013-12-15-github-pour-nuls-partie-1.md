---
layout: post
title: "GitHub Pour les Nuls : Pas de Panique, Lancez-Vous ! (Première Partie)"
subtitle: "Un tutoriel en deux parties pour apprendre à démarrer sur GitHub et lancer votre premier projet." 
author: "Christophe Ducamp" 
date:   2013-12-15 20:14
tags: github git tutoriel
---
Traduction d'un article original de <span class="p-author h-card">[Lauren Orsini](http://otakujournalist.com/about-the-author/)</span> publié le <time class="dt-published" value="2013-11-30">30 septembre 2013</time> pour ReadWriteWeb. Seul le [lien original fait référence](http://readwrite.com/2013/09/30/understanding-github-a-journey-for-beginners-part-1#feed=/author/lauren-orsini&awesm=~omyHpouFOs03MN). 

La traduction reste à raffiner avec la pratique de cet outil. [Seconde partie en cours d'étude](/2013/12/16/gitHub-pour-nuls-partie-2/) pour me lancer sous peu dans les premiers *commits* à la ligne de commande. Mise en forme prévue pour le plan de route [indieweb](http://indiewebamp.com) 2014. Merci. - <span class="u-syndication">[xtof_fr](https://twitter.com/xtof_fr/status/412238889739247616)</span>

### *GitHub est plus qu'un simple outil de programmation. Si vous voulez collaborer sur n'importe quoi, vous devriez l'essayer. 1ère Partie pour apprendre à démarrer sur GitHub.*


Nous sommes en 2013 et pas moyen d'y échapper : vous devrez apprendre comment utiliser GitHub.
 
Pourquoi ? Parce que c'est un réseau social qui change drastiquement notre façon de travailler. Ayant démarré sous forme de plateforme collaborative pour développeurs, GitHub est désormais le plus grand espace de stockage de travaux collaboratifs dans le monde. Que vous soyez intéressé(e) pour participer à ce cerveau global ou tout simplement pour partir à la recherche de cet énorme réservoir de connaissances, vous vous devez d'y être.

En étant simplement membre, vous pourrez croiser le fer avec ce qu'aiment [Google](https://github.com/google) et [Facebook](https://github.com/facebook). Avant que Github n'existe, les grandes sociétés créaient leurs bases de connaissance surtout en privé. Mais lorsque vous accédez à leurs comptes GitHub, vous êtes libres de télécharger, étudier et construire dessus tout ce que vous voulez sur ce qu'elles ajoutent sur ce réseau. Aussi, qu'attendez-vous ?

## Chercher des Réponses GitHub

Aussi gênant que cela puisse paraître, j'ai écrit ce tutoriel parce que je me sentais vraiment perdue dans tous les articles de type “GitHub pour Débutants”. Probablement parce qu'à la différence de la plupart des utilisateurs de Github, je manque de bagage solide en programmation. Et je ne m'y retrouvais pas non plus dans les tutoriels d'utilisation de Github, pour construire une vitrine de quelques travaux de programmation.

Voir aussi : [Tom Preston-Werner de Github : Comment Nous Sommes Devenus Mainstream](http://readwrite.com/2013/11/18/github-tom-preston-warner)

Ce que vous pourriez ignorer, c'est qu'il existe plein de raisons d'utiliser GitHub même si vous n'êtes pas programmeur. Selon les vidéos de tutoriels GitHub, tout travailleur du savoir peut en tirer profit, “knowledge worker” s'entendant ici pour désigner la plupart des professionnels faisant usage d'un ordinateur.

Par conséquent, si vous avez déjà lâché prise sur la compréhension d'utilisation de Github, cet article est pour vous.

L'un des principaux malentendus concernant GitHub est que c'est un outil de développement, faisant partie de la panoplie de tout programmeur, comme le sont les langages de programmation et les compilateurs. Cependant, GitHub en lui-même n'est rien de plus qu'un réseau social comme Facebook ou Flickr. Vous construisez un profil, vous y déposez des projets à partager et vous vous connectez avec d'autres utilisateurs en suivant leurs comptes. Même si la plupart des utilisateurs y déposent des projets de programmes ou de code, rien ne vous empêche d'y placer des textes ou tout type de fichier à présenter dans vos répertoires de projets.

![image](http://xtof.me/images/2013/ma-page-github.png "ma première page github")

Vous pouvez déjà avoir plus d'une dizaine de comptes sociaux... voici pourquoi vous devriez être sur Github : il dispose des meilleures Conditions Générales d'Utilisation. Si vous regardez la section F des [conditions générales](https://help.github.com/articles/github-terms-of-service), vous verrez que Github fait tout pour vous assurer que vous conservez la propriété complète de tous les projets que vous déposez sur le site : 

<blockquote>We claim no intellectual property rights over the material you provide to the Service. Your profile and materials uploaded remain yours.<footer><a href="https://help.github.com/articles/github-terms-of-service">conditions générales GitHub</a>
</footer></blockquote>

En outre, vous pouvez véritablement utiliser GitHub sans connaître UNE SEULE LIGNE de code. Vous n'avez pas besoin de tutoriel pour vous enregistrer et vous promener. Mais mon point de vue est que GitHub a le mérite de nous apprendre à faire les choses dures en premier, ce qui veut dire, utiliser le bon vieux code Git. Après tout, GitHub est parvenu à produire l'une des interfaces graphiques sans effort pour le langage de programmation Git.

# C'est Quoi Git ?

Remercions le célèbre développeur de logiciel [Linus Torvalds](http://fr.wikipedia.org/wiki/Linus_Torvalds) pour Git, le logiciel qui fait tourner le coeur de GitHub. (Et tant que vous y êtes, remercions-le aussi pour le système d'exploitation Linux). **Git est un logiciel de contrôle de version**, ce qui signifie qu'il gère les modifications d'un projet sans écraser n'importe quelle partie du projet. Et il ne risque pas de disparaître, tout particulièrement parce que Torvalds et ses collègues développeurs du noyau utilisent Git pour aider à développer le noyau coeur de Linux.

Pourquoi utiliser quelque chose comme Git ? Supposons que vous mettiez à jour avec un collègue des pages sur le même site web. Vous faites des modifications, vous les sauvegardez et les versez sur le site. À ce stade, tout va bien. Le problème survient quand votre collègue travaille sur la même page que vous en même temps. L'un de vous va voir son travail écrasé.

Une [application de contrôle de version](http://git-scm.com/video/what-is-version-control) comme Git empêche ça d'arriver. Vous et votre collègue pouvez chacun de votre côté verser vos révisions sur la même page, et Git sauvegardera deux copies. Plus tard, vous pourrez fusionner vos modifications sans perdre le travail dans le processus. Vous pouvez même revenir en arrière à tout moment, parce que Git conserve une "copie instantanée" de tous les changements produits.

Le problème avec Git est qu'il est vieux. Si vieux que nous devons utiliser la ligne de commande -ou l'application Terminal si vous êtes sur Mac - afin d'y accéder, et y taper dedans des bouts de code comme les hackers des années 90. Ceci peut être une proposition difficile pour les utilisateurs d'ordinateurs modernes. C'est là où Github entre dans la danse.

![image](http://xtof.me/images/2013/Terminal-Accueil-github.png "Ma fenêtre de Terminal")

GitHub facilite l'utilisation de Git sur deux points. Premièrement, si vous [téléchargez le logiciel GitHub](https://help.github.com/articles/set-up-git) sur votre ordinateur, GitHub  fournit une interface visuelle pour vous aider à gérer localement vos projets avec les contrôles de version. Deuxièmement, créer un compte sur GitHub.com emmène vos projets sur le web avec des contrôles de versions, et leur attache des fonctionnalités de réseaux sociaux.

Vous pouvez naviguer sur les projets d'autres utilisateurs de Github, et même y télécharger des copies pour vous afin de les modifier, apprendre ou les enrichir. D'autres utilisateurs peuvent faire de même avec vos projets publics, repérer vos erreurs et vous suggérer des corrections. De toute façon, aucune donnée ne se perd parce que Git sauvegarde un “instantané” de chaque modification.

Bien qu'il soit possible d'utiliser GitHub sans apprendre Git, il y a une énorme différence entre l'utilisation et la compréhension. Avant de connaître Git, je savais utiliser GitHub, mais je ne comprenais pas pourquoi. Dans ce tutoriel, nous apprendrons comment utiliser Git à la ligne de commande.

# Les Mots que les Personnes Utilisent quand Elles Parlent de Git

Dans ce tutoriel, il y a quelques mots que j'utiliserai sans arrêt, aucun d'eux dont je n'avais entendu parler avant d'avoir démarré l'apprentissage. Voici les plus connus : 

**Ligne de Commande** : Le programme de l'ordinateur que nous utilisons pour entrer des commandes Git. Sur un Mac, ça s'appelle Terminal. Sur un PC, c'est un programme non-natif que vous téléchargez lorsque vous téléchargez Git pour la première fois (nous ferons ça dans la section suivante). Dans les deux cas, au lieu d'utiliser une souris, vous saisissez des commandes basées sur le texte, connues comme des invites de commande.

**Dépôt :** Un répertoire ou un espace de stockage où vos projets peuvent vivre. Parfois les utilisateurs GitHub raccourcissent ça en "repo". Il peut être local vers un répertoire sur votre ordinateur, ou ce peut être un espace de stockage sur GitHub ou un autre hébergeur en ligne. Vous pouvez conserver des fichiers de code, des fichiers texte, des images, à l'intérieur d'un dépôt.

**Contrôle de Version :** Basiquement, l'objectif pour lequel Git a été conçu. Quand vous avez un fichier Microsoft Word, vous l'écrasez à chaque fois que vous faites une nouvelle sauvegarde, ou sinon vous sauvegardez plusieurs versions. Avec Git, vous n'êtes plus obligé de faire ça. Il conserve des "instantanés" de chaque point dans l'historique d'un projet, par conséquent vous ne pouvez jamais le perdre ou l'écraser.

**Commit :** C'est la commande qui donne à Git toute sa puissance. Quand vous "committez", vous prenez un "instantané", une "photo" de votre dépôt à ce stade, vous donnant un checkpoint que vous pouvez ensuite évaluer de nouveau ou restaurer votre projet à tout état précédent.

**Branche :** Comment plusieurs personnes travaillant sur un projet en même temps sans que Git ne s'embrouille ? Généralement, elles se "débranchent" du projet principal avec leurs propres versions pleines de modifications qu'elles ont chacune produites de leur côté. Après avoir fait ça, il est temps de "fusionner" cette branche là avec le "master", le répertoire principal du projet.

## Commandes Spécifiques Git

Le fait que Git ait été conçu avec un gros projet comme Linux, il existe un paquet de commandes Git. Néanmoins, pour utiliser les basiques de Git, vous n'aurez besoin de connaître que quelques termes. Ils commencent tous de la même façon avec le mot "git".

`git init` : Initialise un nouveau dépôt Git. Jusqu'à ce que vous exécutiez cette commande dans un dépôt ou répertoire, c'est simplement un répertoire normal. Seulement après avoir entré cette commande, il accepte les commandes Git qui suivent.

`git config` : raccourci de “configurer,” ceci est tout particulièrement utile quand vous paramétrez Git pour la première fois.

`git help` : Oublié une commande ? Saisissez-ça dans la ligne de commande pour ramener les 21 commandes les plus courues de Git. Vous pouvez aussi être plus spécifique et saisir “git help init” ou tout autre terme pour voir comment utiliser et configurer une commande spécifique git.

`git status` : Vérifie le statut de votre repository. Voir quels fichiers sont à l'intérieur, quels sont les changements ayant besoin d'être gardés en mémoire, et sur quelle branche du repository vous êtes en train de travailler.

`git add` : Ceci n'ajoute *pas* de nouveaux fichiers dans votre dépôt. Au lieu de cela, cela porte de nouveaux fichiers à l'attention de Git. Après que vous ayez ajouté des fichiers, ils sont inclus dans les "instantanés" du dépôt Git.

`git commit` : la commande la plus importante de Git. Après avoir fait toute sorte de modification, vous saisissez ça afin de prendre un “instantané” du dépôt. Généralement cela s'écrit sous la forme `git commit -m “Message ici“`. Le -m indique que la section suivante de la commande devrait être lue comme un message.

`git branch` : Vous travaillez avec plusieurs collaborateurs et voulez produire des modifications de votre côté ? Cette commande vous permet de construire une nouvelle branche, ou une timeline de commits, de modifications et d'ajouts de fichiers qui sont complètement les vôtres. Votre titre va après la commande. Si vous vouliez créer une nouvelle branche appelée "chats", vous saisiriez `git branch chats`.

`git checkout` : Permet littéralement de rapatrier un dépôt dans lequel vous n'êtes pas. C'est une commande de navigation qui vous laisse migrer vers le répertoire que vous voulez rapatrier. Vous pouvez utiliser cette commande sous la forme `git checkout master` pour rapatrier la branche master, ou `git checkout chats` pour rapatrier une autre branche.

`git merge` : Quand vous avez terminé de travailler sur une branche, vous pouvez fusionner vos modifications vers la branche master, qui est visible pour tous les collaborateurs. `git merge cats` prendrait toutes les modifications que vous avez faites sur la branche “cats” et les ajoutera à la la branche master.

`git push` : Si vous travaillez sur votre ordinateur local, et voulez que vos commits soient visibles aussi sur Github, vous "push"ez les modifications vers Github avec cette commande.

`git pull` : Si vous travaillez sur votre ordinateur local, et su vous voulez la version la plus à jour de votre repository pour travailler dessus, vous “pull”ez (tirez) les modifications provenant de Github avec cette commande.


## Paramétrer GitHub ET Git Pour La Première Fois

![Image](http://xtof.me/images/2013/Github-Page-Enregistrement.png "page d'enregistrement github.")

Premièrement, vous devrez [vous enregistrer](https://github.com/) pour disposer d'un compte sur GitHub.com. C'est aussi simple que de s'enregistrer sur n'importe quel autre réseau social. Conservez l'e-mail que vous avez choisi à portée de main ; nous en aurons besoin de nouveau.

Vous pourriez vous arrêter là et github fonctionnerait bien. Mais si vous voulez travailler sur votre projet sur votre ordinateur local, vous devez avoir installé Git. En fait, Github ne fonctionnera pas sur votre ordinateur local si vous n'installez pas Git. [Téléchargez et installez la dernière version de Git pour Windows, Mac ou Linux selon votre machine](http://git-scm.com/downloads).

![image](http://xtof.me/images/2013/git-scm.com-pour-telecharger-Git.png "http://git-scm.com/, l'endroit où vous téléchargez Git.")" 

Désormais, il est temps de passer à la ligne de commande. Sur Windows, ça veut dire démarrer l'app Git Bash que vous venez d'installer, et sur MacOSX, c'est le bon vieux Terminal. Il est temps de vous présenter à Git. Saisissez le code qui suit : 

{% highlight bash %}
git config --global user.name "Votre Nom Ici"
{% endhighlight %}

Naturellement, vous devrez remplacer “Votre Nom Ici” avec votre propre nom entre guillemets. Ce peut être votre nom légal, votre pseudo en ligne ou tout ce que vous voudrez. Git s'en moque, il a juste besoin de savoir à qui créditer les commits et les projets futurs.

Puis, dites-lui votre e-mail et assurez-vous que c'est le même email que vous avez utilisé quand vous vous êtes enregistré pour votre compte Github. Faites comme suit : 

{% highlight bash %}
git config --global user.email "votre_email@votre_email.com"
{% endhighlight %}

C'est tout ce que vous devez faire pour démarrer Git sur votre ordinateur. Cependant, du fait que vous venez de créer un compte Github.com, il est probable que vous ne souhaitiez pas gérer simplement votre projet localement, mais aussi en ligne. Si vous voulez, vous pouvez aussi paramétrer Git de façon à ce qu'il ne vous demande pas de vous connecter à votre compte Github à chaque fois que vous voulez lui parler. Pour les besoins de ce tutoriel, ce n'est pas un grand problème parce que nous ne lui parlerons qu'une fois. Le tutoriel complet pour faire ça est [situé sur Github](https://help.github.com/articles/set-up-git).

![image](http://christopheducamp.com/images/2013/Terminal-Config-git-nomutilisateur-email.png "Les toutes premières commandes de Git.")

## Créez Votre Dépôt En Ligne

Maintenant que vous avez tout réglé, il est temps de créer un endroit pour placer votre projet à faire vivre. Tant Git que Github font référence à cela en tant que repository, ou "repo" pour le raccourci, un répertoire digital ou un espace de stockage où vous pouvez accéder à votre projet, ses fichiers, et toutes les versions de ses fichiers que Git a sauvegardés. 

Revenons sur GitHub.com et cliquez sur la petite icône de texte à côté de votre nom d'utilisateur. Ou allez vers la nouvelle page repository si toutes les icônes sont les mêmes. Donnez à votre dépôt un nom court et mémorisable. Allez-y et rendez-le public, n'ayez pas peur de montrer votre tentative d'apprendre Github ! 


![image](http://xtof.me/images/2013/github-creer-nouveau-repo.png 'Créer un nouveau repository sur GitHub'). 

Ne vous inquiétez pas de cliquer sur le bouton radio à côté intitulé “Initialize this repository with a README.” Un fichier Readme est généralement un fichier texte qui explique sommairement le projet. Mais nous pouvons produire localement notre propre fichier `Readme`.

Cliquez sur le bouton vert “Create Repository” et c'est fait. Vous disposez d'un espace en ligne pour votre projet restant à faire vivre.

## Créer Votre Dépôt Local 

Ainsi vous venons juste de créer un espace pour votre projet en ligne, mais ce n'est pas l'endroit où nous travaillerons dessus. Le plus gros de votre travail sera produit sur votre ordinateur. Par conséquent, nous devons en fait refléter ce repository que nous venons juste de produire sous un répertoire local.

C'est l'endroit où nous produisons quelques saisies de ligne de commande faisant partie de chaque tutoriel Git qui me chahute le plus, aussi j'irai vraiment lentement.

Saisissez d'abord : 
{% highlight bash %}
mkdir ~/MonProjet
{% endhighlight %}

`mkdir` est le raccourci de "make directory". Ce n'est en réalité pas une ligne de commande Git, mais une commande générale de navigation provenant du temps avant les interfaces ordinateurs visuelles. Le `~/` vous assure que nous construisons le dépôt tout en haut de la structure du fichier de notre ordinateur, au lieu d'un répertoire coincé dans quelque autre répertoire qui serait plus difficile à retrouver. En fait, si vous saisissez `~/` dans la fenêtre de votre navigateur, cela vous ramènera vers le répertoire local le plus haut de votre ordinateur. Pour moi, en utilisant Chrome sur un Mac, cela affiche mon répertoire Users.

Remarquez aussi que je l'ai appelé `MonProjet`, le même nom que j'ai donné au dépôt Github que nous avons produit précédemment. Assurez-vous aussi de garder une cohérence sur votre nom.

Puis, saisissez :
{% highlight bash %}
cd ~/MonProjet
{% endhighlight %}

`cd` signifie change directory, et c'est aussi une commande de navigation. Nous venons de produire un répertoire, et nous voulons maintenant migrer vers ce répertoire et aller dedans. Une fois que nous avons tapé cettte commande, nous sommes transportés à l'intérieur de MonProjet.

Maintenant, nous allons pour finir utiliser une commande Git. 
Pour votre prochaine ligne, saisissez : 
{% highlight bash %}
git init
{% endhighlight %}

Vous savez que vous utilisez une commande Git car elle démarre toujours par `git`. Init signifie "initialiser". Souvenez-vous comment les deux précédentes commandes que nous avons saisies étaient des termes généraux de ligne de commande ? Quand nous tapons ce code à l'intérieur, cela dit à l'ordinateur de reconnaître ce répertoire comme un dépôt local Git. 
Si vous ouvrez le répertoire, il ne s'affichera pas différemment, parce que ce nouveau répertoire Git est un fichier caché à l'intérieur du dépôt dédié.

![Image](http://xtof.me/images/2013/Terminal-Git-Creer-Repo.png "Créer un dépôt local Git en trois étapes.") 

Néanmoins, votre ordinateur réalise maintenant que ce répertoire est *git-ready*, et vous pouvez commencer à entrer des commandes Git. Maintenant, vous disposez à la fois d'un dépôt local et en ligne pour votre projet. 
Dans la [seconde partie](/2013/12/16/gitHub-pour-nuls-partie-2/), vous apprendrez comment faire votre premier commit vers des dépôts locaux et sur Github. Et vous en saurez plus sur quelques ressources géniales de Github.

## Voir aussi 

- <span class="h-cite"><cite class="p-name u-url">[How the Heck Do I Use Github?](http://lifehacker.com/5983680/how-the-heck-do-i-use-github)</cite> (<span class=p-publisher>Lifehacker</span> <span class="h-card p-author">Adam Dachis</span> <time class="dt-published">2013-12-02</time>)</span>