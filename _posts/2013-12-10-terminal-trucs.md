---
title: Quelques Astuces sur le Terminal
date: 2013-12-10 15:36:00 +01:00
categories:
- github
- git
- repo
- fork
- howto
- tutoriel
- terminal
layout: post
subtitle: Ah la console... Un petit tour d'introduction.
author: Christophe Ducamp
---

Les [blocs de code comme ceux-ci](/2013/12/09/anti-seche-ligne-de-commande/) sur cette page font partie d'un langage de programmation appelé `Bash`. Pour utiliser des programmes `Bash`, nous devons utiliser Terminal, une application livrée avec votre Mac, généralement trouvée dans /Applications/Utilitaires. 

![image](https://github.s3.amazonaws.com/docs/bootcamp_1_mac_terminal.jpg "Ouvrez le Terminal")

#Saisie

{% highlight bash %}
echo 'Ceci est du texte saisi'
# Ce truc d'aide vous dit ce qui se passe.
{% endhighlight %}  
  
  
Une ligne qui commence par un signe dollar ($) indique une ligne de programme Bash que vous devez taper. Pour y entrer, tapez le texte qui suit le $, et pressez la touche entrée à la fin de chaque ligne. Vous pouvez survoler votre souris sur chaque ligne pour une explication de ce que fait le programme.

# Output

{% highlight bash %}
# Ceci est un texte output.
{% endhighlight %}

Une ligne qui ne commence pas par un $ est un texte *output* destiné à vous donner de l'information ou vous dire que faire ensuite. Nous avons coloré le texte output en vert dans ces tutoriels d'amorçage.

# Input Spécifique à l'Utilisateur

{% highlight bash %}
echo 'username'
# Affiche le texte dans les marques de citations.
{% endhighlight %}

Les aires de texte en jaune représentent votre info personnelle, les repos, etc. Si ça fait partie d'une ligne ($) input, vous devriez le remplacer avec vos propres infos quand vous le saisissez. Si cela fait partie de texte output, c'est juste pour votre références. Cela affichera automatiquement votre propre info dans le Terminal.

- **Bon à savoir** : Il y aura des moments où quand vous taperez du code et frapperez la touche entrée, tout ce qui vous sera donné sera une autre invitation à saisir. Quelques actions que vous exécutez dans le Terminal n'ont pas d'ouput. Pas de panique, même s'il y avait un problème avec votre code, le Terminal vous le fera savoir.

- **Bon à savoir** : Pour des raisons de sécurité, le Terminal n'affichera pas ce que vous saisissez quand vous rentrerez des mots de passe. Tapez simplement votre mot de passe et pressez la touche entrée.

## Ressources 
- [Un index complet pour la ligne de commande Apple OS X](http://ss64.com/osx/)
- [La console, une introduction](https://la-cascade.io/la-console-une-introduction/) - 2014-04-26

