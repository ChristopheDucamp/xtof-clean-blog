---
title: Un Jour en Hiver à Auvers-sur-Oise
date: 2017-01-15 09:48:00 +01:00
tags:
- 100DaysOfPhotos
- Jekyll
- SiteLeaf
- CloudCannon
- jamstatic
- indieweb
subtible: Promenade dans les Interfaces pour poser un Photoflow sur la JAMstack
author: xtof
header-img: 
layout: post
---

Jolie promenade hier à Auvers-sur-Oise sur les traces de Vincent Van Gogh. Je me suis simplement *placé dans les yeux de Barbara* avec un simple Canon 50mm/1.8 pour tenter de capter quelques émotions de ce village bien mort en hiver. Je viens de [poser sur Flickr quelques  photos stimulantes](https://www.flickr.com/search/?sort=date-taken-desc&safe_search=1&tags=auverssuroise&user_id=37996578526%40N01&view_all=1) pour prépérer l'organisation de quelques promenades photographiques au Printemps.

## Démarrage avec un PhotoFlow basé sur Adobe LightRoom et CloudCannon

Et voici l'occasion de tester un nouveau "PhotoFlow" plus cohérent avec la [JamStack](http://ducamp.me/jamstack) et l'indieweb afin de contrôler les photos sur mon popre domaine. Depuis à peu près un mois, j'utilisais l'excellent système de gestion de contenu [SiteLeaf](https://siteleaf.com) (tant pour accéder à une UI de mise à jour de post que pour déposer des fichiers images). Malheureusement, ce matin je dépasse le quota maximal de 100Mo offert dans le plan gratuit. En outre, je découvre que SiteLeaf stocke les images téléversées sur son propre silo.

## Abandon SiteLeaf

Rapide récapitulatif avant de m'engager sur un plan payant chez SiteLeaf :

1. derushage et sélection de quelques photos dans Adobe Lightroom avec les raccourcis-clavier "P" et "X"

2. pose de mots-clés sur les photos sélectionnées

3. optimisation de quelques photos pour bascule en N&B avec les outils de [Google Nik collection](https://www.google.com/intl/fr/nikcollection/)

4. exportation dans un dossier (renommage possible)

5. téléversement des fichiers directement dans l'interface du système de gestion de contenu SiteLeaf

6. Les photos sont **stockées** sur le CMS.

7. Les photos sont aisément accessibles dans l'interface-utilisateur.

8. Elles doivent être déposées une par une dans la fenêtre de publication.

Plus bas, je me contenterai de déposer une sélection de quelques photos prises hier à l'aide de l'**interface-utilisateur image** placée au-dessus de la fenêtre de publication.

## Prévisualisation dans SiteLeaf : erreur et gem absente. Adieu SiteLeaf !

Essai de génération de pré-visualisation SiteLeaf… Erreur, [Siteleaf](https://www.siteleaf.com/) me réclame de passer sur un plan payant pour augmenter mon quota de stockage limité à 100Mo sur le plan gratuit. Après paiement, le "build" est refusé au prétexte d'une absence d'une gem de Jekyll "jekyll-paginate" déjà installée… 

> `Deprecation: You appear to have pagination turned on, but you haven't included the `jekyll-paginate` gem. Ensure you have `gems: [jekyll-paginate]` in your configuration file. (RuntimeError)`

Grosse fatigue. Mais rien de grave. Il existe plusieurs CMS pour travailler sur un repo GitHub, Je décide donc d'abandonner momentanément SiteLeaf pour m'orienter vers un autre CMS réputé sur la JamStack : [CloudCannon](https://cloudcannon.com).

## Premiers pas dans l'UI de CloudCannon

Après une pause café, connexion sur CloudCannon et synchronisation avec mon dépôt GitHub. Rassuré de retrouver le contenu de ce même post dans la fenêtre de publication proposée par CloudCannon :

J'essaierai donc ces prochains jours d'explorer l'offre de CloudCannon pour publier quelques nouvelles photos comme Auvers et ses environs, la transe vécue et à revivre sur les prochaines jam-session du JATP, etc..

![photowalk-auvers--14.jpg](/uploads/photowalk-auvers--14.jpg)

![photowalk-auvers-.jpg](/uploads/photowalk-auvers-.jpg)

![photowalk-auvers-2198.jpg](/uploads/photowalk-auvers-2198.jpg)

Si ce type de promenade vous intéresse, faites-moi signe. Je serai ravi de vous inviter pour un Safari-Photo dans un village qui a tous les atouts pour attirer les touristes en hiver. Après la balade (comptez 2 bonnes heures), je vous offrirai un thé pour vous faire essayer quelques interfaces de CMS encore assez "geeks" de mon point de vue.

Mon offre est purement intéressée : j'aimerais dénicher le PhotoFlow idéal pour tous les photographes, musiciens, chanteurs et artistes non geeks qui pourraient aimer faire leur dogfooding sur la *jamstack* !

\(Transe au [J.A.T.P. du 2017-015](http://ducamp.me/2017-015#Here_.26_Now_JATP.C2.A0) - *photoflow* [xtof.me](http://xtof.me))

À suivre.