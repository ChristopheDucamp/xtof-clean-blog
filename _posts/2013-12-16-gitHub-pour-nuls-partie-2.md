---
title: 'GitHub pour les Débutants : Consignez, Poussez et Foncez !'
date: 2013-12-16 00:01:00 Z
categories:
- github
- git
- tutoriel
- howto
tags:
- hack
- github
- howto
- versioncontrol
layout: post
subtitle: Tutoriel pour devenir un utilisateur officiel de git !
author: Christophe Ducamp
---

_Traduction -à des fins d'étude et de mémo- d'un article original de <span class="p-author h-card">[Lauren Orsini](http://otakujournalist.com/about-the-author/)</span> publié le <time class="dt-published" value="2013-10-02">2 octobre 2013</time> pour ReadWriteWeb. Seul le [lien original fait référence](http://readwrite.com/2013/10/02/github-for-beginners-part-2). - <span class="u-syndication">[xtof_fr](https://twitter.com/xtof_fr/status/412363441056129024)</span>_

### *Maintenant que nous connaissons les concepts Git, il est temps de jouer. Voici venue la deuxième partie de notre série.*

Dans la [1<sup>ère</sup> partie de ce tutoriel GitHub en deux parties](/2013/12/15/github-pour-nuls-partie-1/), nous avons examiné les principales utilisations de GitHub, commencé le processus d'enregistrement d'un compte GitHub et pour finir, nous avons créé notre propre repository local pour le code.

Maintenant que ces premières étapes ont été accomplies, ajoutons  la première partie de votre projet en **produisant votre premier "commit" sur GitHub.** Lorsque nous nous sommes quittés dans la première partie, nous avions créé un repo local appelé `MonProjet`, qui, vu à la ligne de commande, ressemble à cette capture d'écran : 

![Image](/img/Terminal-Git-Creer-Repo.jpg "Le repo local vu dans le Terminal.") 

Toujours en fenêtre Terminal, à la prochaine ligne, entrez : 

{% highlight bash %}
$ touch Readme.txt
{% endhighlight %}

Une fois de plus, *ceci n'est pas* une commande Git. C'est simplement une autre invite de commande standard de navigation. `touch` signifie en fait "créer". Tout ce que vous écrivez après ce qui suit, c'est le nom de la chose créée. Si vous allez sur votre répertoire local en utilisant le Finder ou le menu Démarrer, vous verrez qu'un fichier vide intitulé `Readme.txt` se niche désormais dedans. Vous auriez pu varier le plaisir avec quelque chose comme “Lisez-moi.doc” ou “Kiwi.gif,” .

Vous pouvez clairement voir votre nouveau fichier `Readme`. Mais Git le peut-il aussi ? Regardons ça. Tapez :

{% highlight bash %}
$ git status
{% endhighlight %}

La ligne de commande, généralement passive jusqu'à ce stade, vous renvoie quelques lignes de texte similaires à ce qui suit : 

{% highlight bash %}
# On branch master
#
# Untracked files:
#
#   (use "git add ..." to include in what will be committed)
#
#         Readme.txt
{% endhighlight %}
![image](/img/git-status-mon-projet.jpg)

Qu'est-ce qui se passe ? 

Tout d'abord, vous êtes sur la branche `master`, la branche principale de votre projet, ce qui est logique puisque nous n'avons pas "bifurqué" du projet. Il n'y a aucune raison faire ça puisque nous travaillons seul. Deuxièmement, `Readme.txt` est répertoriré comme un fichier “untracked”, ce qui signifie que Git l'ignore pour l'instant. Pour signaler à Git que le fichier est là, tapez : 

{% highlight bash %}
$ git add Readme.txt
{% endhighlight %}

Remarquez comment la ligne de commande vous glisse un truc ici ? Très bien, nous avons ajouté notre premier fichier, aussi est-il temps à ce stade de prendre un "instantané" du projet, ou de le "consigner" : 

{% highlight bash %}
$ git commit -m "Ajout Lisez-moi.txt"
{% endhighlight %}

![image](/img/Terminal-git-commit-Lisez-moi.txt.jpg "le texte surligné est notre premier commit.")

Le marqueur `m` comme indiqué dans le répertoire des définitions en [1<sup>ère</sup> partie](/2013/12/15/Github-pour-nuls-partie-1/), indique simplement que le texte qui suit doit être lu comme un message. Notez que le message de `commit` est écrit au présent. Vous devriez **toujours écrire vos commandes au temps présent** parce que le contrôle de version ne traite que de flexibilité dans le temps. Vous n'écrivez pas pour dire ce qu'un commit a fait précédemment, parce que vous pouvez toujours revenir à la version précédente. **Vous écrivez ce que fait un commit**.

Maintenant que nous avons fait un petit travail en local, il est temps de pousser (de “push”er) notre premier "commit" sur GitHub.

“Attendez, on n'a jamais connecté mon dépôt en ligne à mon dépôt local," pourriez-vous penser. Et vous avez raison. En fait, votre dépôt local et votre dépôt en ligne ne communiquent que par de courtes rafales, lorsque vous confirmez les ajouts et les  modifications au projet.  Passons maintenant à votre première véritable connexion.

## Connecter Votre Dépôt Local À Votre Dépôt GitHub

Avoir à la fois un dépôt local et un dépôt à distance (en ligne), c'est tout bonnement le meilleur des deux mondes. Vous pouvez bricoler tout ce que vous aimez sans même être connecté à internet, tout en présentant votre travail fini sur Github afin que tout le monde puisse le voir.

Cette configuration facilite aussi le fait d'avoir plusieurs collaborateurs travaillant sur le même projet. Chacun de vous peut travailler seul sur son propre ordinateur, mais téléverser ou "push"er vos modifications vers le dépôt Github quand elles sont prêtes. Aussi allons-y.

Tout d'abord, nous devons dire à Git qu'un dépôt distant existe quelque part en ligne. Nous faisons ça en ajoutant ça à la connaissance de Git. Tout comme Git ne reconnaît pas nos fichiers jusqu'à ce que nous utilisions la commande `git add`, il ne reconnaîtra pas non plus notre dépôt distant à cette heure.

Supposons que nous ayons un dépôt GitHub appelé “MonProjet” situé sur `https://github.com/nomutilisateur/MonProjet.git`. Bien sûr, `nomutilisateur` devrait être remplacé par votre véritable nom d'utilisateur Github, et `MonProjet` devrait être remplacé par le véritable titre que vous avez donné à votre premier dépôt GitHub.

{% highlight bash %}
$ git remote add origin https://github.com/nomutilisateur/MonProjet.git
{% endhighlight %}

![image](/img/Terminal-git-remote-add-origin.jpg)

La première partie est connue ; nous avons déjà utilisé `git add` avec les fichiers. Nous avons ajouté après le mot `origin` pour indiquer un nouvel endroit à partir duquel viendront les fichiers. `remote` est un descripteur de `origin`, pour indiquer que l'original n'est *pas* sur l'ordinateur, mais quelque part en ligne.

Git sait désormais qu'il existe un dépôt distant et que c'est là où vous voulez envoyer vos modifications du dépôt local. Pour confirmer, saisissez cela pour déposer :

{% highlight bash %}
$ git remote -v
{% endhighlight %} 
        
![image](/img/Terminal-git-remote-v.jpg "ajout repo  distant et git remote-v")

Cette commande vous donne une liste de toutes les origines distantes connues par votre dépôt local. En supposant que vous m'ayez suivi jusque là, il ne devrait y en avoir qu'un, le `MonProjet.git` que nous venons d'ajouter. Il est listé deux fois, ce qui signifie qu'il est disponible pour y *"push"*er de l'information, et pour y extraire (`fetch`) de l'information.

Maintenant, nous voulons téléverser, ou "`push`"er, nos modifications vers le dépôt distant Github. C'est facile. Tapez simplement :

{% highlight bash %}
$ git push
{% endhighlight %}

La ligne de commande vous soufflera plusieurs lignes, et le mot final qu'elle recrachera ressemblera à quelque chose comme “everything up-to-date.”

![image](/img/Terminal-git-push.jpg "Fenêtre de Terminal : git push origin master")

Git m'a renvoyé dans mon cas un paquet d'avertissements parce que j'avais simplement produit la commande simple. Pour être plus spécifique, j'ai saisi `git push --set-upstream origin master`, pour spécifier que je voulais dire la branche `master` de mon dépôt.

Connectez-vous de nouveau à GitHub. Vous remarquerez que GitHub suit désormais combien de commits vous avez produits aujourd'hui. Si vous avez suivi simplement ce tutoriel, ceci devrait être exactement un. Cliquez sur votre dépôt et il aura un fichier identique `Readme.txt` car nous l'avons construit précédemment à l'intérieur de votre dépôt local.

## Tous ensemble Maintenant !

Bravo, vous êtes officiellement un utilisateur Git ! 
Vous pouvez créer des dépôts et *committer* des modifications. 
C'est là où s'arrête ce tutoriel de débutant.

> Regardez aussi : [Tom Preston-Werner de Github : How We Went Mainstream](http://readwrite.com/2013/11/18/github-tom-preston-warner)

Cependant, vous pouvez avoir cette lancinante impression de ne pas vous sentir comme un expert.  Bien sûr, vous avez réussi à suivre quelques étapes, mais êtes-vous prêt à y aller seul ? Je n'aurai nullement cette prétention.

Afin d'être plus à l'aise avec Git, avançons sur un workflow imaginaire tout en utilisant les quelques points que nous avons appris. Vous êtes désormais salarié dans l'agence "123 Web Design", où vous construisez un nouveau site web pour le Magasin de Glaces de Jimmy avec quelques-uns de vos collègues.

Vous étiez un peu nerveux quand votre patron vous a demandé de participer au projet de redesign de refonte du site du Magasin de Glaces de Jimmy. Après tout, vous n'êtes pas programmeur ; vous êtes designer graphique. Mais votre patron vous a assuré que tout le monde peut utiliser Git.

Vous avez créé quelques nouvelles illustrations d'un sundae à la crème et il est temps de les ajouter au projet. Vous les avez enregistrées dans un dossier de votre ordinateur, appelé “icecream”, pour éviter de vous emmêler.

Ouvrez la Ligne de Commande et changez le répertoire jusqu'à ce vous soyez dans le répertoire `icecream`, là où est stocké votre design.

{% highlight bash %}
$ cd ~/icecream
{% endhighlight %}

Puis, réinitialisez Git de manière à pouvoir démarrer en utilisant des commandes Git à l'intérieur du répertoire. Le dossier est désormais un dépôt Git.

{% highlight bash %}
$ git init
{% endhighlight %}

Attendez, est-ce le bon fichier ? Voici comment vérifier et vous assurer que c'est bien l'endroit où vous avez stocké votre design : 

{% highlight bash %}
$ git status
{% endhighlight %}

Et c'est ce que Git vous dira en retour :

{% highlight bash %}
# Untracked files:
#   (use "git add ..." to include in what will be committed)
#

#       chocolat.jpeg
{% endhighlight %}

Ayé ils sont ici ! Ajoutez-les dans votre dépôt local Git pour qu'ils soient suivis par Git.

{% highlight bash %}
$ git add chocolat.jpeg
{% endhighlight %}

Maintenant, faites un “instantané” du dépôt tel qu'il est maintenant avec la commande commit : 

{% highlight bash %}
$ git commit -m "Ajoute chocolat.jpeg."
{% endhighlight %}

Bravo ! Mais vos collègues, acharnés au boulot dans leurs propres dépôts locaux, ne peuvent pas voir votre tout nouveau design ! Ceci parce que le projet principal est stocké dans le compte Github de la société (nom d'utilisateur : 123WebDesign) dans le dépôt intitulé “icecream.”

Parce que vous ne vous êtes pas encore connecté au dépôt GitHub, votre ordinateur ne sait même pas qu'il existe. Aussi, déclarez votre dépôt local : 

{% highlight bash %}
$ git remote add origin https://github.com/123WebDesign/icecream.git
{% endhighlight %}

Et double-checkez pour vous assurer qu'il le connaît :

{% highlight bash %}
$ git remote -v
{% endhighlight %}

Pour finir, c'est le moment que vous attendiez. Téléversez ce délicieux sundae sur le projet : 

{% highlight bash %}
git push
{% endhighlight %}

Tut tut ! Avec tous ces outils à portée de mains, il est clair que Git et le service GitHub ne sont pas que pour les programmeurs.

## Les Ressources Git

![image](/img/TryGit-CodeSchool.jpg "Try Git de Code School.")

Git est dense, je sais. J'ai fait de mon mieux pour produire un tutoriel qui pourrait même m'aider à savoir comment l'utiliser, mais nous n'apprenons pas tous de la même manière. 

En plus de mon [anti-sèche pour la ligne de commande](/2013/12/09/anti-seche-ligne-de-commande/), voici quelques ressources que j'ai trouvées utiles tout en apprenant personnellement à utiliser Git et Github durant l'été : 

* **[Pro Git](http://git-scm.com/book/fr)**. Voici un livre complet open source sur l'apprentissage et l'utilisation de Git. Il peut paraître long, mais je n'ai pas eu besoin de lire quoi que ce soit après le chapitre trois pour apprendre les fondamentaux.
* **[Try Git](http://www.codeschool.com/courses/try-git)**. CodeSchool et GitHub ont fait équipe pour produire ce tutoriel rapide. Si vous voulez un peu plus de pratique avec les fondamentaux, ceci devrait vous aider. Et si vous avez un peu d'argent en plus et que vous vouliez apprendre tout ce qu'il faut savoir sur Git, Git Real de Code School devrait faire l'affaire.
* **[GitHub Guides](http://www.youtube.com/GitHubGuides)**. Si vous êtes plutôt visuel, le canal officiel de GitHub vaut le coup d'oeil. J'ai particulièrement beaucoup **appris de la série [Git Basics](http://www.youtube.com/watch?v=8oRjP8yj2Wo&list=PLg7s6cbtAD165JTRsXh8ofwRw0PqUnkVH)** en quatre parties.
* **[Git Reference](http://gitref.org/)**. Vous avez les basiques mais vous oubliez toujours les commandes ? Ce site pratique est génial comme glossaire de référence.
* **[Git - le petit guide](http://rogerdudler.github.io/git-guide/index.fr.html)**. Ce tutoriel est court et délicieux, mais il allait un peu trop vite pour moi. Si vous voulez vous rafraîchir sur les fondamentaux de Git, ceci devrait faire tout ce dont vous avez besoin.