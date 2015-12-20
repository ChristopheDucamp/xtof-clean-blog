---
title: Lancer Jekyll
order: 3
---

### Démarrer Statique

Inutile d'apprendre *tout* de Jekyll pour démarrer. Un site Jekyll démarre sous forme de HTML statique dans lequel vous pourrez progressivement intégrer les fonctionnalités les plus cools de Jekyll.

Pour ce guide, nous démarrerons avec l'un des modèles gratuits HTML. Naturellement, vous pouvez facilement construire votre site web à partir de zéro en utilisant n'importe lequel des frameworks CSS ou Javascript que vous voudrez. L'un des gros avantages de Jekyll est que vous gardez la main sur le code source.

Téléchargez et décompressez le [Template Creative](/creative.zip).

### Lancer Jekyll

Maintenant lançons Jekyll sur le site web. Ouvrez votre fenêtre de terminal et lancez les commandes suivantes :

{% highlight bash %}
$ cd ~/Downloads/creative # là où vous avez décompressé le template
$ jekyll serve
{% endhighlight %}

Ouvrez votre navigateur et allez sur [http://localhost:4000](http://localhost:4000). Si tout se passe bien, cela affichera le site web ! Ceci pourrait ne pas vous paraître bien sexy mais laissez-moi vous expliquer ce qui se passe ici.

Jekyll va suivre les modifications sur votre site web. À chaque fois qu'un fichier sera mis à jour, il reconstruira le site, en plaçant le site web statique résultant dans le répertoire `_site`, puis le servira live sur le port 4000.

Nous pouvons à ce stade le laisser tourner et poursuivre en y ajoutant quelques fonctionnalités cools de Jekyll.