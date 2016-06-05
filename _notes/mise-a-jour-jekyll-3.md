---
title: Mise à jour Jekyll 3
date: '2015-12-13 00:00:00'
categories: []
layout: page
subtitle: Mise à jour Jekyll 2 vers 3
tags:
- jekyll,
- collection
slug: mise-a-jour-jekyll-3
draft: false

---
Mise à jour à partir d'une ancienne version de Jekyll ? Quelques petites choses ont changé dans la version 3.0.

Avant de nous lancer, ouvrez votre fenêtre de terminal et récupérez la dernière version de Jekyll :

{% highlight bash %}
$ gem update jekyll
{% endhighlight %}

<div class="note feature">
  <h5 markdown="1">Plongeon</h5>
  <p markdown="1">Vous voulez un nouveau site Jekyll et démarrer rapidement ? Lancez simplement 
 <code>jekyll new NOMSITE</code> pour créer un nouveau répertoire avec un site Jekyll pré-installé.</p>
</div>

### site.collections a été modifié 

Dans la version 2.x, vos itérations sur `site.collections` donnaient une série avec l'étiquette de la collection et l'objet de la collection comme les premier et second éléments, respectivement. Dans 3.x, cette complication a été enlevée et les itérations donnent maintenant tout simplement l'objet de collection. Une simple conversion doit être faite dans vos modèles :

- `collection[0]` devient `collection.label`
- `collection[1]` devient  `collection`

Au moment d'itérer sur `site.collections`, assurez-vous que les conversions ci-dessus ont été faites.

### Dépendances abandonnées

Nous avons laissé tomber un certain nombre de dépendances que la Core Team trouvaient optionnelles. Ainsi, dans 3.0, elles doivent être explicitement installées et incluses si vous utilisez l'une de ces fonctionnalités. Ce sont : 

- jekyll-paginate – la solution de pagination de Jekyll
- jekyll-coffeescript – le traitement de CoffeeScript
- jekyll-gist – le tag Liquid  `gist`
- pygments.rb – la coloration syntaxique Pygments 
- redcarpet – le processeur Markdown
- toml – une alternative à YAML pour les fichiers de configuration
- classifier-reborn – pour `site.related_posts`

### Posts futurs

Une fonctionnalité en régressions dans 2.x, le marqueur `--future` était automatiquement _activé_.
Le marqueur future permet aux auteurs d'articles de donner une data dans le futur au post et de l'exclure du build jusqu'à ce que le système soit égal ou après l'heure de pots.
Dans Jekyll 3, ceci a été corrigé. **Maintenant, `--future` est désactivé par défaut.**
Ceci signifie que vous devrez inclure  `--future` si vous voulez que vos posts post-datés dans le futur soient générés au moment de lancer `jekyll build` ou `jekyll serve`.

### métadonnées de layout

Introduction de `layout`. Dans Jekyll 2 et avant, toute métadonnée dans le layout était converti sur la variable `page` dans Liquid. Ceci provoquait beaucoup de confusion dans le sens où la data était fusionnée et provoquait quelque comportement inattendu. Dans Jekyll 3, toute donnée de layout est accessible via `layout`
dans Liquid. Par exemple, si votre layout contient `class: my-layout` dans son front matter YAML, alors le layout peut y accéder via `{% raw %}{{ layout.class }}{% endraw %}`.

### Syntax highlighter a été modifié
Pour la première fois, le colorateur de syntaxe par défaut a été modifié par la balise 
`highlight` et pour des blocks de code guillemet arrière. Au lieu de [Pygments.rb](https://github.com/tmm1/pygments.rb),
il est désormais [Rouge](http://rouge.jneen.net/). Si vous utilisiez la balise `highlight` avec certaines options, telles que `hl_lines`, elles peuvent ne plus être disponibles pour utiliser Rouge. Pour revenir sur l'utilisation de Pygments, réglez `highlighter: pygments` dans votre fichier 
`_config.yml` et lancez `gem install pygments.rb` ou ajoutez 
`gem 'pygments.rb'` au `Gemfile`de votre projet.

_Oublié quelque chose ?_ Cliquez SVP sur "Improve this page" sur la [page de référence](https://jekyllrb.com/news/2015/10/26/jekyll-3-0-released/) et ajoutez une section.