---
title: "Un Jour d'Hiver à Auvers (#Photoflow et #jamstack)"
date: 2017-01-15 11:41:00
tags:
  - 100DaysOfPhotos
  - Photoflow
  - photowalk
  - auvers-sur-oise
  - jamstack
author: xtof
layout: post
published: true
---


![](/uploads/versions/bateau-oise----x----4387-3009x---.jpg)

Jolie promenade hier &agrave; Auvers-sur-Oise sur les traces de Vincent Van Gogh. Je me suis simplement *plac&eacute; dans les yeux de Barbara* avec un simple Canon50mm/1.8 pour tenter de capter quelques &eacute;motions de ce village bien mort en hiver. Je viens de [poser sur Flickr quelques&nbsp; photos stimulantes](https://www.flickr.com/search/?sort=date-taken-desc&amp;safe_search=1&amp;tags=auverssuroise&amp;user_id=37996578526%40N01&amp;view_all=1) pour envisager l'organisation de quelques promenades photographiques au Printemps.

## D&eacute;marrage avec un PhotoFlow bas&eacute; sur Adobe LightRoom et CloudCannon

Et voici l'occasion de tester un nouveau "PhotoFlow" plus coh&eacute;rent avec la [JamStack](http://ducamp.me/jamstack) et l'indieweb pour contr&ocirc;ler les photos sur mon popre domaine. Depuis &agrave; peu pr&egrave;s un mois, j'utilisais l'excellent syst&egrave;me de gestion de contenu SiteLeaf (tant pour acc&eacute;der &agrave; une UI de mise &agrave; jour de post que pour d&eacute;poser des fichiers images). Malheureusement, ce matin je d&eacute;passe mon quota maximal de 100Mo. Et cela reste &agrave; confirmer, je d&eacute;couvre que SiteLeaf stocke les images t&eacute;l&eacute;vers&eacute;es sur son propre silo.

## Abandon SiteLeaf

Avant de m'engager sur un plan

1. derushage et s&eacute;lection de quelques photos dans Adobe Lightroom avec les raccourcis-clavier "P" et "X"
2. pose de mots-cl&eacute;s sur les photos s&eacute;lectionn&eacute;es
3. optimisation de quelques photos pour bascule en N&B avec les outils de google nik collection
4. exportation dans un dossier (renommage possible)
5. t&eacute;l&eacute;versement des fichiers directement dans l'interface du syst&egrave;me de gestion de contenu CloudCannon
6. Les photos sont **stock&eacute;es** sur le CMS.
7. Les photos sont ais&eacute;ment accessibles dans l'interface-utilisateur.
8. Elles doivent &ecirc;tre d&eacute;pos&eacute;es une par une dans la fen&ecirc;tre de publication.

![]({{site.baseurl}}/_posts/SiteLeaf-Ajout-documents-aux-Posts.png)

Plus bas, je me contenterai de d&eacute;poser une s&eacute;lection de quelques photos prises hier &agrave; l'aide de l'**interface-utilisateur image** plac&eacute;e au-dessus de la fen&ecirc;tre de publication.

## Pr&eacute;visualisation dans SiteLeaf : erreur et gem absente. Adieu SiteLeaf !

Essai de g&eacute;n&eacute;ration de pr&eacute;visualisation SiteLeaf… Erreur, siteleaf me r&eacute;clame de payer pour un plan car j'ai d&eacute;pass&eacute; mon quota de stockage limit&eacute; &agrave; 100Mo sur le plan gratuit. Apr&egrave;s paiement, il refuse le "build" signalant l'absence d'une gem de Jekyll "jekyll-paginate" d&eacute;j&agrave; install&eacute;e…

![](/uploads/versions/siteleaf-quota-100mo---x----669-52x---.png)

Rien de grave. J'abandonne momentan&eacute;ment SiteLeaf pour m'orienter vers un autre CMS r&eacute;put&eacute; sur la JamStack : CloudCannon.

## Interface-utilisateur CMS de CloudCannon

Apr&egrave;s connexion et synchronisation avec mon repo GitHub, je suis rassur&eacute; de retrouver le contenu de ce m&ecirc;me post dans la fen&ecirc;tre de publication propos&eacute;e par CloudCannon.

![](/uploads/versions/cloudcannon-ui-2017-01-15---x----1201-630x---.png)

J'essaierai donc ces prochains jours d'explorer l'offre de CloudCannon pour publier quelques nouvelles photos d'Auvers et ses environs.

![photowalk-auvers--14.jpg](/uploads/photowalk-auvers--14.jpg)

![photowalk-auvers-.jpg](/uploads/photowalk-auvers-.jpg)

![photowalk-auvers-2198.jpg](/uploads/photowalk-auvers-2198.jpg)

Si ce type de promenade et test de jamstack vous int&eacute;resse, faites-moi signe. Je serai ravi de vous inviter pour un Safari-Photo dans un village qui a tous les atouts pour attirer les touristes en hiver. Apr&egrave;s la balade (comptez 2 bonnes heures), je vous offrirai un th&eacute; pour vous faire essayer quelques interfaces de CMS encore assez "geeks" de mon point de vue.

Mon offre est purement int&eacute;ress&eacute;e : j'aimerais trouver le photoflow id&eacute;al pour tous les photographes et artistes non geeks qui voudraient faire du dogfooding sur la *jamstack* !

![chien japonais akita]({{site.baseurl}}/_posts/photowalk-auvers--5.jpg)

&Agrave; suivre.