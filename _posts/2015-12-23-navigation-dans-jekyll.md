---
layout: post
title: "Produire un menu de navigation dans Jekyll"
subtitle: "tisser des liens provenant d'un fichier CSV"
author: "xtof"
date: 2015-12-23 03:00
share: twitter --twitter-hashtags
header-img: img/compas-navigation.jpg
category: 
tags: [datanav, csv]
---

## Navigation dans Jekyll 
Un moyen élégant de produire un code de navigation moins répétitif dans Jekyll est d'extraire les liens provenant d'une autre source. 
Essayons d'utiliser un fichier CSV.

Créez `_data/nav.csv` avec les contenus suivants :

{% highlight text %}
nom,lien
À Propos,/about/
Contact,/contact/
Notes,/collection/
{% endhighlight %}

Maintenant, nous itérons juste sur la CSV dans la navigation et ajoutons une classe active si c'est la page en cours :

{% highlight html %}
{% raw %}
...
<ul class="nav navbar-nav navbar-right">
  {% for nav_item in site.data.nav %}
    {% if page.url == nav_item.lien %}
      <li class="active">
    {% else %}
      <li>
    {% endif %}
      <a href="{{ nav_item.lien }}">{{ nav_item.nom }}</a>
    </li>
  {% endfor %}
</ul>
...
{% endraw %}
{% endhighlight %}


##  Output 

<ul class="nav navbar-nav navbar-right">
  {% for nav_item in site.data.nav %}
    {% if page.url == nav_item.lien %}
      <li class="active">
    {% else %}
      <li>
    {% endif %}
      <a href="{{ nav_item.lien }}">{{ nav_item.nom }}</a>
    </li>
  {% endfor %}
</ul>

<hr>

### Intégration sur le thème clean-blog de startbootstrap

Si comme moi, vous rencontrez quelques soucis dans la syntaxe Liquid pour maîtriser la débauche de liens provoquée par la boucle de navigation proposée par défaut sur le [thème jekyll clean-blog de start bootstrap](https://github.com/IronSummitMedia/startbootstrap-clean-blog-jekyll), vous pouvez intégrer facilement ce menu de "data-navigation" 

1. Ouvrez votre fichier `_includes/nav.html`
2. Repérez et coupez la boucle suivante 

{% highlight html %}
{% raw %}
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ site.baseurl }}/">Accueil</a>
                </li>
                {% for page in site.pages %}{% if page.title %}
                <li>
                    <a href="{{ page.url | prepend: site.baseurl }}">{{ page.title }}</a>
                </li>
                {% endif %}{% endfor %}
            </ul>
{% endraw %}
{% endhighlight %}

- Et remplacez par le bloc de code vu en haut.

Voilà ! 

## Pour en savoir plus sur les fichiers Data 

Lire l'article [Data Files](http://jekyll.tips/guide/data-files/) dans le guide Jekyll Tips pour un exemple d'utilisation de data pour situer des bureaux sur une carte de Nouvelle Zélande.

## Crédits 
Remerciement à 
-  Jekyll Tips pour cette [astuce trouvée sur l'excellent tutoriel de Jekyll Tips](http://jekyll.tips/tutorials/navigation/)
- [Photo de Martin Fisch - cc](https://www.flickr.com/photos/marfis75/5374308475/)