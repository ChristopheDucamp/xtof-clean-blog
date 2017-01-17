---
title: Comment Je Stocke Mes Photos ?
date: 2017-01-17 20:11:00 +01:00
categories:
- Photo
tags:
- 100DaysOfPhotos
- PhotoFlow
- Stock
- LightRoom
- DropBox
author: xtof
subtitle: Recherche d'une solution de PhotoFlow nomade.
header-img: uploads/brunomarinho_storage@2x.jpeg
layout: post
---

Rêvant de voyages et d'une vie plus nomade en 2017, je suis en train de revoir mon workflow de photos pour travailler en toute sécurité. Ce post est une *traduction-adaptation* d'un post trouvé dans le dépôt GitHub de [Bruno Marinho](https://github.com/brunomarinho/). Seul le [lien original](https://github.com/brunomarinho/brunomarinho.com/blob/master/_posts/2015-06-08-how-i-store-my-photos.md) fait référence.

Je commencerai par vous avouer que je ne suis pas un photographe professionnel. Par conséquent les sauvegardes redondantes et cette folie de multiplier les disques durs externes de sauvegarde ne sont pas vraiment ma tasse de thé. Ce que je décrirai ici, c'est mon photoflow personnel, à savoir le processus que j'ai retenu pour stocker mes flux de photos.

Si vous commencez à shooter depuis début 2017 et si vous n'avez que quelques dossiers avec des photos, l'organisation de vos photos devrait ne pas vous prendre beaucoup de temps. Si vous avez plus d'un an d'archives, je vous conseille de prendre un samedi ou un dimanche et d'avancer tranquillement sur cet article.

Vous aurez besoin de Dropbox et d'Adobe Lightroom. La raison pour laquelle Dropbox et Lightroom fonctionnent, est que Lightroom génère des aperçus de vos photos. Vous n'avez donc pas besoin d'avoir votre catalogue complet synchronisé avec votre ordinateur pour prévisualiser vos photos. J'en parlerai plus en détails à la fin de cet article.

## Allons-y

En supposant que vous ayez déjà installé Dropbox et Lightroom et une connaissance de base de leur fonctionnement, la première chose que vous devez faire c'est stocker/déplacer le catalogue Lightroom dans Dropbox. C'est fondamental parce que le catalogue est l'endroit où Lightroom stocke toutes les informations sur l'emplacement de vos fichiers et les ajustements que vous avez effectués. Par conséquent, il est pertinent de  l'avoir sur Dropbox afin de ne pas avoir à vous soucier des sauvegardes.

Pour déplacer votre catalogue vers Dropbox, sachez tout d'abord où il se trouve en accédant à la fenêtre Paramètres Catalogue. Ensuite, fermez Lightroom, déplacez votre catalogue et rouvrez Lightroom. Lightroom vous signalera que le catalogue est manquant et que vous devez indiquer le nouvel emplacement. C'est tout. Le concept fonctionne également pour le déplacement des photos rattachées.

![Lightroom-Catalog Settings 2017-01-17 20-23-20.png](/uploads/Lightroom-Catalog%20Settings%202017-01-17%2020-23-20.png)

#### Découvrez où est stocké votre catalogue Lightroom

À l'intérieur de Dropbox j'ai un dossier principal appelé "Photos" et à l'intérieur un sous-dossier appelé "Lightroom" (où je stocke mon catalogue) et un sous-dossier appelé "Sets" où je stocke toutes mes photos. Je limite mes Sets à un sujet. Par exemple, je suis allé aujourd'hui en randonnée  avec quelques amis, et quand je suis revenu, j'ai quelques photos. Cela deviendra un Set à chaque fois que je mets ma carte CompactFlash dans mon ordinateur.
![Classement-DropBox.png](/uploads/Classement-DropBox.png)

#### À quoi ressemble mon dossier

La première chose que je fais après le retour d'une prise de vues, c'est télécharger toutes les photos dans Dropbox à l'intérieur de mon dossier "Sets". J'utilise "AAAA-JJJ-nom-du-set" comme nom de dossier pour avoir un tri principal par année et puis par jour (JJJ représentant le numéro du jour dans l'année). Une fois qu'il est téléchargé, je me sens en sécurité.

Ensuite j'importe toutes les images dans Lightroom. À ce stade, assurez-vous que l'option "Build Smart Previews" est cochée sur le côté droit. Dans Lightroom, j'ai créé la même structure "AAAA-JJJJ-nom-du-set" mais au lieu de l'appeler "dossiers" Lightroom appelle ça des collections. Vous pouvez éventuellement créer des "collections définies" par année afin de faciliter la navigation.

<img src="https://s3.amazonaws.com/brunomarinho/writing/brunomarinho_storage_05.jpg">

#### Dialogue d'Importation. Assurez-vous d'avoir coché "Build Smart Previews" 

<img src="https://s3.amazonaws.com/brunomarinho/writing/brunomarinho_storage_03.jpg">

#### Collections à l'intérieur de Lightroom

## La Touche Finale

Parce que Dropbox Pro offre 1 To d'espace disque et que votre disque dur actuel n'a probablement pas cette capacité, vous vous demanderez probablement quel est l'intérêt d'avoir tous ces fichiers dans mon disque dur car il est trop petit ?

Dropbox dispose d'une fonctionnalité appelée Synchronisation sélective. C'est sous les préférences, compte. Elle vous permet de sélectionner les dossiers que vous souhaitez synchroniser avec votre ordinateur. Rappelez-vous que je vous ai dit de "Générer des aperçus intelligents" lors de l'importation des photos sur Lightroom ? Voici donc la raison.

<img src="https://s3.amazonaws.com/brunomarinho/writing/brunomarinho_storage_04.jpg">

<h4 style="margin-top:-50px;">Option de Sync Selective sous les préférences de Compte Dropbox </h4>

Avec Smart Previews, Lightroom vous permet de parcourir toutes vos photos dans Lightroom même si les photos d'origine ne sont pas synchronisées sur votre disque dur. Vous pouvez économiser beaucoup d'espace simplement en «archivant» des ensembles que vous ne modifiez plus ou n'exportez plus.

### TL;DR

1. Déplacez/stockez votre Catalogue LR sur Dropbox
2. Téléchargez et organisez toutes vos photos dans Sets
3. Importez, Éditez et Exportez sur Lightroom
4. Utilisez la synchronisation sélective de Dropbox pour ne conserver que ce dont vous avez besoin
5. Partez en prise de vues et répétez