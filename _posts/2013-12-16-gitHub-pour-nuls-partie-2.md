---
layout: post
title:  "GitHub pour les Débutants : Consignez, Poussez et Foncez !"
subtitle: "Tutoriel pour devenir un utilisateur  officiel de git !" 
author: Christophe Ducamp
date:   2013-12-16 00:001
categories: github git tutoriel howto
tags: hack github howto versioncontrol
---
Traduction -à des fins d'étude et de mémo- d'un article original de <span class="p-author h-card">[Lauren Orsini](http://otakujournalist.com/about-the-author/)</span> publié le <time class="dt-published" value="2013-10-02">2 octobre 2013</time> pour ReadWriteWeb. Seul le [lien original fait référence](http://readwrite.com/2013/10/02/github-for-beginners-part-2). - <span class="u-syndication">[xtof_fr](https://twitter.com/xtof_fr/status/412363441056129024)</span>

### *Maintenant que nous connaissons les concepts Git, il est temps de jouer. Voici venue la deuxième partie de notre série.*

Dans la [1<sup>ère</sup> partie de ce tutoriel GitHub en deux parties](/2013/12/15/github-pour-nuls-partie-1/), nous avons examiné les principales utilisations de GitHub, commencé le processus d'enregistrement d'un compte GitHub et pour finir, nous avons créé notre propre dépôt local pour le code.

Ces premières étapes étant accomplies, ajoutons désormais la première partie de notre projet en **produisant notre premier "commit" sur GitHub.** À la fin de la première partie, nous avions créé un dépôt local appelé `MonProjet`, qui, visualisé à la ligne de commande, ressemble à cette impression-écran : 

![Image](http://xtof.me/images/2013/Terminal-Git-Creer-Repo.png "Créer un dépôt local Git en trois étapes.") 

Toujours en fenêtre Terminal, à la prochaine ligne, entrez : 

{% highlight bash %}
$ touch Lisez-moi.txt
{% endhighlight %}

Une fois de plus, *ceci n'est pas* une commande Git. C'est simplement un autre standard de navigation (une "invite de commande"). `touch` signifie en fait "créer". Tout ce que vous écrivez après, c'est le nom de la chose créée. Si vous allez sur votre répertoire local en utilisant le Finder ou le menu Démarrer, vous verrez qu'un fichier vide intitulé `Lisez-moi.txt` se niche désormais à l'intérieur. Vous auriez pu varier le plaisir avec quelque chose comme “Lisez-moi.doc” ou “Wiki.gif,” .

Désormais, vous pouvez voir clairement votre nouveau fichier `Lisez-moi`. Mais Git le peut-il aussi ? Regardons ça. Tapez :

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
#         Lisez-moi.txt
{% endhighlight %}

Que se passe-t-il ? 

Tout d'abord, vous êtes sur la branche `master` de votre projet, ce qui a du sens puisque nous ne l'avons pas "débranchée" du projet. Il n'y a aucune raison à cela, puisque nous travaillons seul. Deuxièmement, `Lisez-moi.txt` est listé comme un fichier “untracked”, ce qui signifie que Git l'ignore à cette heure. Pour faire en sorte que Git remarque que le fichier est là, saisissez : 

{% highlight bash %}
$ git add Lisez-moi.txt
{% endhighlight %}

![image](http://xtof.me/images/2013/Terminal-Git-add-lisezmoi.txt.png)

Remarquez comment la ligne de commande vous glisse un truc ici ? Très bien, nous avons ajouté notre premier fichier, aussi est-il temps à ce stade de prendre un "instantané" du projet, ou de le "consigner" : 

{% highlight bash %}
$ git commit -m "Ajout Lisez-moi.txt"
{% endhighlight %}

![image](http://xtof.me/images/2013/Terminal-git-commit-Lisez-moi.txt.png "notre premier commit.")

Le marqueur `m` comme indiqué dans le répertoire des définitions en [1<sup>ère</sup> partie](/2013/12/15/Github-pour-nuls-partie-1/), indique simplement que le texte qui suit devrait être lu comme un message. Remarquez que le message `commit` est écrit au temps présent. Vous devriez **toujours écrire vos commandes au temps présent** parce que le contrôle de version ne traite que de flexibilité dans le temps. Vous n'écrivez pas pour dire ce qu'un commit a produit précédemment, parce que vous pouvez toujours revenir à la version précédente. **Vous écrivez ce que fait un commit**.

Maintenant que nous avons produit localement un petit travail, il est temps d'envoyer (de “push”er) notre premier "commit" sur GitHub.

“Attendez, nous n'avons jamais connecté mon dépôt en ligne vers mon dépôt local," pourriez-vous penser. Et vous avez raison. En fait, votre dépôt local et votre dépôt en ligne ne se connectent que par épisodes courts et intermittents, quand vous confirmez les ajouts et modifications au projet.  Avançons pour produire maintenant notre première vraie connexion.

## Connecter Votre Dépôt Local Vers Votre Dépôt GitHub

Disposer à la fois d'un dépôt local et d'un dépôt à distance (en ligne), c'est tout bonnement le meilleur des deux mondes. Vous pouvez tripatouiller tout ce que vous voulez sans être même connecté à internet, tout en présentant votre travail fini sur Github afin que tout le monde puisse le voir.

Ce paramétrage facilite aussi le fait d'avoir plusieurs collaborateurs oeuvrant sur le même projet. Chacun d'entre vous peut travailler seul sur son propre ordinateur, mais téléverser ou "push"er vos modifications vers le dépôt Github quand elles sont prêtes. Aussi allons-y.

Premièrement, nous devons dire à Git qu'un dépôt distant existe quelque part en ligne. Nous faisons ça en ajoutant ça à la connaissance de Git. Tout comme Git ne reconnaît pas nos fichiers jusqu'à ce que nous utilisions la commande `git add`, il ne reconnaîtra pas non plus notre dépôt distant à cette heure.

Supposons que nous ayons un dépôt GitHub appelé “MonProjet” situé sur `https://github.com/nomutilisateur/MonProjet.git`. Bien sûr, `nomutilisateur` devrait être remplacé par votre véritable nom d'utilisateur Github, et `MonProjet` devrait être remplacé par le véritable titre que vous avez donné à votre premier dépôt GitHub.

{% highlight bash %}
$ git remote add origin https://github.com/nomutilisateur/MonProjet.git
{% endhighlight %}

La première partie est connue ; nous avons déjà utilisé `git add` avec les fichiers. Nous avons ajouté après le mot `origin` pour indiquer un nouvel endroit à partir duquel viendront les fichiers. `remote` est un descripteur de `origin`, pour indiquer que l'original n'est *pas* sur l'ordinateur, mais quelque part en ligne.

Git sait désormais qu'il existe un dépôt distant et que c'est là où vous voulez envoyer vos modifications du dépôt local. Pour confirmer, saisissez cela pour déposer :

{% highlight bash %}
$ git remote -v
{% endhighlight %} 
        
![image](http://xtof.me/images/2013/Terminal-git-remove-v.png "ajout repo  distant et git remote-v")


Cette commande vous donne une liste de toutes les origines distantes connues par votre dépôt local. En supposant que vous m'ayez suivi jusque là, il ne devrait y en avoir qu'un, le `MonProjet.git` que nous venons d'ajouter. Il est listé deux fois, ce qui signifie qu'il est disponible pour y *"push"*er de l'information, et pour y extraire (`fetch`) de l'information.

Maintenant, nous voulons téléverser, ou "`push`"er, nos modifications vers le dépôt distant Github. C'est facile. Tapez simplement :

{% highlight bash %}
$ git push
{% endhighlight %}

La ligne de commande vous soufflera plusieurs lignes, et le mot final qu'elle recrachera ressemblera à quelque chose comme “everything up-to-date.”

        
![image](http://xtof.me/images/2013/Terminal-git-push.png "Fenêtre de Terminal : git push origin master")


Git aurait pu ici me renvoyer ici un paquet d'avertissements parce que j'ai simplement produit la commande simple. Si j'avais voulu être plus spécifique, j'aurais pu saisir `push origin master`, pour spécifier que je voulais dire la branche `master` de mon dépôt. Je n'ai pas fait ça parce que je n'avais qu'une branche à ce stade.

Connectez-vous de nouveau à GitHub. Vous remarquerez que GitHub suit désormais combien de commits vous avez produits aujourd'hui. Si vous avez suivi simplement ce tutoriel, ceci devrait être exactement un. Cliquez sur votre dépôt et il aura un fichier identique `Lisez-moi.txt` car nous l'avons construit précédemment à l'intérieur de votre dépôt local.

## Tous ensemble Maintenant !

Bravo, vous êtes officiellement un utilisateur Git ! 
Vous pouvez créer des dépôts et *committer* des modifications. 
C'est là où s'arrête ce tutoriel de débutant.

<aside>Regardez aussi : [Tom Preston-Werner de Github : How We Went Mainstream](http://readwrite.com/2013/11/18/github-tom-preston-warner)</aside>

Néanmoins, vous pouvez avoir cet étrange sentiment que vous n'êtes pas encore expert.  Bien sûr, vous êtes parvenu(e) à suivre quelques étapes, mais êtes-vous prêt à y aller seul ? Je n'aurai nullement cette prétention.

Afin d'être plus à l'aise avec Git, avançons sur un workflow imaginaire tout en utilisant les quelques points que nous avons appris. Vous êtes désormais salarié dans l'agence "123 Web Design", où vous avez construit un nouveau site web pour le Magasin de Glaces de Jean avec quelques-uns de vos collègues.

Vous étiez un peu nerveux quand votre boss vous a demandé de participer au projet de redesign de la page web du Magasin de Glaces de Jean. Après tout, vous n'êtes pas programmeur ; vous êtes designer graphique. Mais votre boss vous a assuré que tout le monde peut utiliser Git.

Vous avez créé quelques nouvelles illustrations d'un sundae à la crème et il est temps de les ajouter au projet. Vous les avez sauvegardées dans un répertoire sur votre ordinateur, appelé “icecream”, pour éviter de vous emmêler.

Ouvrez la Ligne de Commande et changez de répertoire jusqu'à ce vous soyez dans le répertoire `icecream`, là où sont stockés vos designs.

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

Bravo ! Mais vos collègues, acharnés au boulot dans leurs propres dépôts locaux, ne peuvent pas voir votre tout nouveau design ! Ceci parce que le projet principal est stocké dans le compte Github de la société (username: 123WebDesign) dans le dépôt intitulé “icecream.”

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

![image](http://xtof.me/images/2013/TryGit-CodeSchool.png "Try Git de Code School.")

Git est dense, je sais. J'ai fait de mon mieux pour produire un tutoriel qui pourrait même m'aider à savoir comment l'utiliser, mais nous n'apprenons pas tous de la même manière. 

En plus de mon [anti-sèche pour la ligne de commande](/2013/12/09/anti-seche-ligne-de-commande/), voici quelques ressources que j'ai trouvées utiles tout en apprenant personnellement à utiliser Git et Github durant l'été : 

* **[Pro Git](http://git-scm.com/book/fr)**. Voici un livre complet open source sur l'apprentissage et l'utilisation de Git. Il peut paraître long, mais je n'ai pas eu besoin de lire quoi que ce soit après le chapitre trois pour apprendre les fondamentaux.
* **[Try Git](http://www.codeschool.com/courses/try-git)**. CodeSchool et GitHub ont fait équipe pour produire ce tutoriel rapide. Si vous voulez un peu plus de pratique avec les fondamentaux, ceci devrait vous aider. Et si vous avez un peu d'argent en plus et que vous vouliez apprendre tout ce qu'il faut savoir sur Git, Git Real de Code School devrait faire l'affaire.
* **[GitHub Guides](http://www.youtube.com/GitHubGuides)**. Si vous êtes plutôt visuel, le canal officiel de GitHub vaut le coup d'oeil. J'ai particulièrement beaucoup **appris de la série [Git Basics](http://www.youtube.com/watch?v=8oRjP8yj2Wo&list=PLg7s6cbtAD165JTRsXh8ofwRw0PqUnkVH)** en quatre parties.
* **[Git Reference](http://gitref.org/)**. Vous avez les basiques mais vous oubliez toujours les commandes ? Ce site pratique est génial comme glossaire de référence.
* **[Git - le petit guide](http://rogerdudler.github.io/git-guide/index.fr.html)**. Ce tutoriel est court et délicieux, mais il allait un peu trop vite pour moi. Si vous voulez vous rafraîchir sur les fondamentaux de Git, ceci devrait faire tout ce dont vous avez besoin.