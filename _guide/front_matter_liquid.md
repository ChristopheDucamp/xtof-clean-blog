---
title: Front Matter et Liquid
order: 5
---

Front Matter nous permet de régler les métadonnées pour un fichier. Nous l'utiliserons pour dire à `index.html` d'utiliser le layout par défaut. Le format est YAML entre deux ensembles de trois tirets : `---`, qui se placent au début d'un fichier.

Ajoutez ce qui suit en haut de `index.html` :

{% highlight yaml %}
---
layout: default
---
{% endhighlight %}

Si vous rafraîchissez le navigateur, le site devrait ressembler exactement comme il était avant. La différence est que maintenant, nous avons un layout que nous pouvons utiliser sur plusieurs pages.

Il y a un problème cependant, nous ne voulons pas le même marquage  `<title>` sur chaque page, il doit changer. Nous pouvons résoudre ça avec Front Matter et Liquid.

Liquid est le langage de template utilisé par Jekyll. Nous l'avons utilisé  précédemment pour régler la section `{% raw %}{{ content }}{% endraw %}` dans le layout.

Il existe deux types de marquage dans Liquid : 

**Marquage de Sortie de Production (Output)** - Pour afficher des données de sortie, utilisez deux accolades.

{% highlight liquid %}
{% raw %}
{{ variable }}
{% endraw %}
{% endhighlight %}


**Marquage Tag** - Pas de données de production, il est généralement utilisé pour exécuter de la logique. Le marquage tag utilise  une accolade et un signe pourcentage.

{% highlight liquid %}
{% raw %}
{% if page.variable %}
  Hello
{% endif %}
{% endraw %}
{% endhighlight %}

Ajoutons une autre ligne dans notre *Front Matter* à l'intérieur de  `index.html` pour configurer une variable title. De manière à ce que le Front Matter ressemble à cela :

{% highlight yaml %}
---
layout: default
title: Page d'Accueil
---
{% endhighlight %}

Allez dans `default.html` et remplacez le marquage `<title>` avec ça :

{% highlight liquid %}
{% raw %}
<title>
  {% if page.title %}
    {{ page.title }}
  {% else %}
    Page Titre par Défaut
  {% endif %}
</title>
{% endraw %}
{% endhighlight %}

En utilisant `page` nous pouvons faire référence à des variables réglées dans le Front Matter. Ici nous vérifions si le titre est réglé et s'imprime s'il le fait, autrement cela retombe vers un défaut.

Rafraîchissez la page et le titre de la page affichera  _Page d'Accueil_.

Pour un guide plus approfondi de Liquid, regardez [notre tutoriel](/tutorials/liquid/)
