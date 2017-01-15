---
title: 'Un Jour d''Hiver à Auvers (#Photoflow et #jamstack)'
date: 2017-01-15
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
![peniche sur l'oise]({{site.baseurl}}/_posts/bateau-oise-.jpg)

Jolie promenade hier &agrave; Auvers-sur-Oise sur les traces de Vincent Van Gogh. Bien couvert, je me suis *mis dans les yeux de Barbara* avec un simple Canon50mm/1.8 pour tenter de capter quelques émotions de ce village bien mort en hiver. J'aimerais organiser quelques promenades photographiques au Printemps.

## Démarrage avec un PhotoFlow basé sur Adobe LR et SiteLeaf

Et c'est l'occasion de tester un nouveau "PhotoFlow" plus cohérent avec la [JamStack](http://ducamp.me/jamstack) :

1. derushage et sélection de quelques photos dans Adobe Lightroom avec les raccourcis-clavier "P" et "X"
2. pose de mots-clés sur les photos sélectionnées
3. optimisation de quelques photos pour bascule en N&B avec les outils de google nik collection
4. exportation dans un dossier (renommage possible)
5. téléversement des fichiers directement dans l'interface du [système de gestion de contenu SiteLeaf](https://www.siteleaf.com/)
6. Les photos sont **stockées** sur le CMS SiteLeaf. Ouille risque de pertes de souvenirs.
7. Les photos sont aisément accessibles dans l'interface-utilisateur.
8. Elles doivent être déposées une par une dans la fenêtre de publication.

![]({{site.baseurl}}/_posts/SiteLeaf-Ajout-documents-aux-Posts.png)

Plus bas, je me contenterai de déposer une sélection de quelques photos prises hier à l'aide de l'**interface-utilisateur image** placée au-dessus de la fenêtre de publication.

## Pr&eacute;visualisation dans SiteLeaf : erreur et gem absente. Adieu SiteLeaf !

Essai de génération de prévisualisation SiteLeaf… Erreur, siteleaf me réclame de payer pour un plan car j'ai dépassé mon quota de stockage limité à 100Mo sur le plan gratuit. Après paiement, il refuse le "build" signalant l'absence d'une gem de Jekyll "jekyll-paginate" déjà installée...

![SiteLeaf-Upgrade-PlanAdd document to Posts 2017-01-15 06.png]({{site.baseurl}}/_posts/SiteLeaf-Upgrade-PlanAdd document to Posts 2017-01-15 06.png)

Rien de grave. J'abandonne momentanément SiteLeaf pour m'orienter vers un autre CMS réputé sur la JamStack : CloudCannon.

## Interface-utilisateur CMS de CloudCannon

Après connexion et synchronisation avec mon repo GitHub, je suis rassuré de retrouver le contenu de ce même post dans la fenêtre de publication proposée par CloudCannon.

![CloudCannon-UI-2017-01-15.png]({{site.baseurl}}/_posts/CloudCannon-UI-2017-01-15.png)

J'essaierai donc ces prochains jours d'explorer l'offre de CloudCannon pour publier quelques nouvelles photos d'Auvers et ses environs.

En résumé mon photoflow remanié consistera à suivre les mêmes étapes que celui décrit plus haut avec SiteLeaf. Puis d'essayer la fonction de téléversement de photos de CloudCannon

![photowalk-auvers--14.jpg](/uploads/photowalk-auvers--14.jpg)

![photowalk-auvers-.jpg](/uploads/photowalk-auvers-.jpg)

![photowalk-auvers-2198.jpg](/uploads/photowalk-auvers-2198.jpg)

Si ce type de promenade et test de jamstack vous int&eacute;resse, faites-moi signe. Je serai ravi de vous inviter pour un Safari-Photo dans un village qui a tous les atouts pour attirer les touristes en hiver. Après la balade (comptez 2 bonnes heures), je vous offrirai un th&eacute; pour vous faire essayer quelques interfaces de CMS encore assez "geeks" de mon point de vue.

Mon offre est purement intéressée : j'aimerais trouver le photoflow idéal pour tous les photographes et artistes non geeks qui voudraient faire du dogfooding sur la _jamstack_ !

![chien japonais akita]({{site.baseurl}}/_posts/photowalk-auvers--5.jpg)

À suivre.
