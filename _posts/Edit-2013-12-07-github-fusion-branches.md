---
layout: post
title: "GitHub pour Mac : Synchroniser votre branche"
subtitle: "Tutoriel déprécié à remettre à jour"
author: Christophe Ducamp
date: 2013-12-07
categories: github git
---
[Lien de référence](https://help.github.com/desktop/guides/contributing/syncing-your-branch/)

Au fur et à mesure que des commits sont poussés sur GitHub, vous pouvez maintenir une copie locale de votre projet synchronisé avec le répertoire distant.

Vous devez synchroniser votre branche locale avec le répertoire distant pour recevoir tous les commits supplémentaires qui ont été ajoutés à la branche upstrem depuis que vous avez [créé votre branche](https://help.github.com/desktop/guides/contributing/creating-a-branch-for-your-work)

## Mettez à jour votre branche locale upstream

Pour trouver quelle branche est upstream, regardez le graphique de comparaison.

- La _branche upstream_ est en haut
- Votre branche projet est en bas.

![](https://help.github.com/assets/images/help/desktop/sync-find-upstream-mac.png)



1. Cliquez sur le bouton "Merge View" sur l'onglet Branches.
2. Cliquez et faites glisser la poignée de la branche dont vous voulez fusionner les modifications (votre nouvelle branche), et déposez-la dans la boîte de gauche. La poignée à glisser peut être trouvée sur le côté gauche de la ligne de la branche.
3. Tirez et ramenez la branche à l'intérieur de laquelle vous voulez fusionnez les modifications (par ex., `master`), et déposez-la dans la boîte de droite.
4. Cliquez sur "Merge Branches."

<figure><image style="width:600px;" src="https://github-images.s3.amazonaws.com/mac/changes/merging-20130109-131344.jpg" /><figcaption>(Fusion de Branche dans GitHub pour Mac")</figcaption></figure>

Une fois que vous avez fusionné, vous pouvez ne plus avoir besoin de la branche à partir de laquelle vous avez fusionné. Vous pouvez l'effacer à partir des repos local et distant en cliquant sur la petite flèche dans la ligne de la branche, et en sélectionnant "Delete" à partir du menu qui apparaît.

**Attention** : Si vous fusionnez deux branches ensemble qui ont des conflits de modifications sur des lignes particulières, GitHub pour Mac affichera ce "Conflict" dans la vue Changes. Vous devrez utiliser l'éditeur de texte de votre choix afin de résoudre manuellement les conflits et puis committer les modifications.

## Célébrez ! 

Bravo ! Ceci couvre les fondamentaux pour démarrer avec GitHub pour Mac ! Vous devriez désormais être plus à l'aise pour utiliser GitHub pour Mac afin d'enfourcher toute la puissance de Git et GitHub pour vos propres projets.

Prochaine étape, vous pourriez aimer envisager d'en [savoir un peu plus sur Git](/2013/12/15/Github-pour-nuls-partie-1/), ou [participer au Bootcamp](/2013/12/10/installer-git/).