---
layout: post
title:  Démarrer des Collections dans Jekyll
author: "Christophe Ducamp"
subtitle: "Un post utile si vous coincez sur le fonctionnement des collections dans Jekyll"
date: 2014-12-31
header-img: "img/post-bg-03.jpg"
redirect_from:
  - /2014-365/
tags: [jekyll, collection, collections, CMS]

---

## Le contenu concernant la configuration des collections est à mettre à jour.

Le contenu sera mis à jour après validation sur Jekyll v 3.

[L'ancien post peut être consulté sur mon repo github](https://github.com/ChristopheDucamp/christopheducamp.github.io/blob/master/_posts/2014-12-31-demarrer-des-collections-dans-jekyll.md)  pour inspiration et futures mises à jour.  

<hr>
Inspiration & remerciements à <span class='h-card microcard'>[Taylor Jones][2]</span> pour son [post de référence][1] m'ayant sérieusement aidé pour capter le fonctionnement des collections dans Jekyll. Le code de l'exemple d'une [collection d'albums de musique est posé sur github](https://github.com/ChristopheDucamp/testJekyll).

## Comment Démarrer des Collections dans Jekyll 2.xx

### Migration WordPress vers Jekyll : un an déjà…

Fin 2013, je prenais la décision de migrer de WordPress vers une [motorisation Jekyll](/2013/12/03/premier-pas-sur-jekyll/) pour m’essayer à la pose de quelques premières briques de construction indieweb.

Dans cet article je vous donnerai un aperçu des raisons pour lesquelles je compte poursuivre l’apprentissage indieweb sur Jekyll en 2015, comment vous pouvez aussi vous y mettre rapidement et conclurai par quelques astuces pour **construire des collections Jekyll**. Astuces intégralement inspirées de l'excellent post de [Taylor Jones](http://www.sitepoint.com/getting-started-jekyll-collections/).

Pour une première initiation à Jekyll et si vous êtes un geek un peu averti, aidez-vous de la [documentation](http://jekyllrb.com/docs/home/). Si vous êtes blogueur sur WordPress et souhaitez construire un premier site ce weekend, je ne peux que vous recommander de faire vos armes sur l'excellent tutoriel de [jekyll-now](http://www.jekyllnow.com/) construit cet été par [Barry Clarke](https://twitter.com/BazNYC/) :

<blockquote class="twitter-tweet" lang="fr"><p>My side project Jekyll Now hit 2k forks today! 2,000 <a href="https://twitter.com/jekyllrb">@jekyllrb</a> blogs created without touching the command line! 🎊 <a href="https://t.co/6ruGxem3Ie">https://t.co/6ruGxem3Ie</a></p>&mdash; Barry Clark (@BazNYC) <a href="https://twitter.com/BazNYC/status/545741860803977216">19 Décembre 2014</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

### Pourquoi Jekyll est Génial

Les points forts de Jekyll qui me confortent : une belle communauté de hackers, un plan de route qui [évoluera vers la simplicité](https://byparker.com/blog/2014/jekyll-3-the-road-ahead/), un langage de templates assimilable et une architecture de templates accessible pour y greffer quelques premiers blocs de construction indieweb et escalader une ou deux marches sur l’[IndieMark](https://indiewebcamp.com/IndieMark).

Rappelons que Jekyll est simple et livré en sortie de boîte avec des fonctionnalités de <s>blog</s> carnet web. Il analyse le Markdown, intègre nativement une mise en forme du code, produit des fichiers statiques et la production peut être hébergée gratuitement sur les Pages GitHub.

À des fins de révision, je vous propose dans la section à suivre de revoir le démarrage d'un site avec Jekyll. Si vous avez déjà un site Jekyll, ignorez cette section et allez directement sur l'implémentation des collections.

### Installer Rapidement Jekyll

Pour installer Jekyll, il y a deux exigences :
- installer Ruby et RubyGems sur votre machine,
- et ne pas être effrayé de mettre les mains dans le terminal.

Le dernier _problème connu_ que vous pourriez rencontrer si vous faites tourner Jekyll sur Mac OSX serait de ne pas avoir mis à jour vos outils de ligne de commande X-Code. Vous les trouverez [ici][4], dans la section téléchargements du portail des développeurs Apple. Vous aurez besoin d'un ID Apple pour accéder aux téléchargements.

Ces pré-requis étant posés, vous n'êtes plus qu'à 4 lignes à saisir dans le terminal pour faire tourner votre premier site web Jekyll.

Ouvrez votre fenêtre de terminal et lancez ces 4 commandes :

{% highlight bash %}
~ $ gem install jekyll
~ $ jekyll new testJekyll
~ $ cd testJekyll
~/testJekyll $ jekyll serve
{% endhighlight %}

Dans l'ordre, voici ce qui se passe ici :

1. Installation de Jekyll sur votre système
2. Création d'un nouveau répertoire plein de fichiers Jekyll passe-partout à personnaliser  
3. Modification du répertoire de travail vers le `testJekyll` fraîchement créé
4. Lancement d'un serveur pour servir ces fichiers en local sur localhost:4000

![screen1][image-1]

Parmi l'ensemble des fichiers de structure placés dans le répertoire de travail, le premier fichier essentiel à paramétrer c'est **`config.yml`**.  

**`config.yml`** est le fichier de configuration global de Jekyll. Dans ce fichier, vous pouvez spécifier :
- les options de construction,
- les options du serveur,
- la déclaration des collections,
- et régler des métadonnées valables sur tout le site en utilisant le front-matter YAML.

La capacité d'utiliser le front matter de YAML est une fonctionnalité très appréciable de Jekyll. Le terme "front-matter" provient en fait des pages liminaires dans le monde de l'édition. Dans les livres, les pages liminaires sont placées au début du livre pour contenir toutes les métadonnées associées à un livre : titre, auteur, éditeur, table des matières, et ainsi de suite. De même, nous utiliserons le _front-matter_ en [format YAML][5] pour déclarer des métadonnées valables sur tout le site à l'intérieur du fichier `config.yml` et des métadonnées spécifiques aux pages dans les fichiers **`.markdown`**. Ces métadonnées peuvent ensuite être référencées comme des variables utilisant le [moteur de gabarit Liquid][6] utilisé par Jekyll.

### C'est Quoi des Collections ?

...

[1]:    http://www.sitepoint.com/getting-started-jekyll-collections/
[2]:    http://www.sitepoint.com/author/tjones/
[3]:    http://jekyllrb.com/docs/home/
[4]:    https://developer.apple.com/downloads/
[5]:    http://yaml.org/
[6]:    https://github.com/Shopify/liquid/wiki
