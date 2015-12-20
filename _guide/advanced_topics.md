---
title: Sujets Avancés
order: 13
---
Afin de rendre ce guide aussi facile que  possible nous avons rassemblé ici quelques thématiques. Cette section avancée est une chance pour plonger plus à fond sur ces sujets.

### Collections vs Front Matter vs Fichiers Data

Il y a beaucoup de façons d'ajouter de la data à Jekyll et vous pourriez vous demander quand utiliser chacune d'elles. Ce n'est pas toujours clair mais nous avons quelques règles pour nous aider à décider :

* Si la data est déjà dans un format CSV, YML, JSON ou si vous voulez stocker cette information dans l'un ces formats de fichiers, utilisez un Fichier Data.
* Si vous devez trier de la data d'une façon non-triable et que cette data ait besoin d'être utilisé uniquement sur une page unique, utilisez une liste dans le  Front Matter.
* Autrement utilisez une Collection. Les Collections sont la méthode la plus flexible et c'est généralement le meilleur choix.

### Générer une page pour les Collections

Dans l'exemple services précédemment vu dans ce guide, vous pourriez vouloir générer une page séparée pour chaque service. Jekyll facilite ça : 

Changez `_config.yml` en :

{% highlight yaml %}
collections:
  services:
    output: true
defaults:
  -
    scope:
      path: ""
      type: "services"
    values:
      layout: "post"
{% endhighlight %}

Nous aurions aussi besoin d'ajouter un layout à chaque item de collection. Au lieu de faire ça, j'ai réglé un layout par défaut pour la collection Services.

Nous devons juste faire un lien vers la page générée dans `services.html`:

{% highlight html %}
{% raw %}
...
{% for service in site.services %}
  <div class="col-lg-3 col-md-6 text-center">
    <div class="service-box">
      <img src="{{ service.image_path }}" alt="{{ service.title }}"/>
      <h3><a href="{{ service.url }}">{{ service.title }}</a></h3>
      <p class="text-muted">{{ service.content | truncatewords: 10 }}</p>
    </div>
  </div>
{% endfor %}
...
{% endraw %}
{% endhighlight %}

J'ai aussi limité le contenu sur la page à 10 mots en utilisant un filtre : `{% raw %}{{ service.content | truncatewords: 10 }}{% endraw %}`. Les Filtres vous permettent de manipuler le contenu comme son output. Vous pourrez trouver plus de filtres [ici](https://github.com/Shopify/liquid/wiki/Liquid-for-Designers).

### Pagination

Au fur et à mesure que grandit un blog,  la liste des posts peut devenir encombrante. Jekyll nous permet de découper la liste des posts de blog en plusieurs pages en utilisant la pagination.

Pour activer la pagination, ouvrez **_config.yml** et régler la variable paginate. Voici comment présenter plusieurs items que vous voulez sur chaque page :

{% highlight yaml %}
...
paginate: 5
paginate_path: "/blog/page:num"
...
{% endhighlight %}

Nous avons aussi besoin de migrer et renommer `blog.html` en `/blog/index.html`. Nous devons faire ça parce c'est la manière dont fonctionnent les urls de pagination. Elles seront nommées comme `/blog/page2`.

Maintenant que nous avons migré le fichier, nous aurons aussi besoin de mettre à jour le lien dans `_includes/nav.html`.

{% highlight html %}
{% raw %}
...
<li {% if page.url == "/blog/index.html" %} class="active" {% endif %}>
  <a href="/blog/">Blog</a>
</li>
...
{% endraw %}
{% endhighlight %}

Pour finir, nous devons mettre à jour `/blog/index.html` pour utiliser la pagination :

{% highlight html %}
{% raw %}
---
layout: default
title: Blog
---
<section class="bg-dark">
  <div class="text-center">
    <h1>Blog</h1>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="text-center">
        <ul style="list-style-position: inside">
           {% for post in paginator.posts %}
             <li>
               <a href="{{ post.url }}">{{ post.title }}</a> - {{ post.date | date: "%d %B %Y" }}
             </li>
           {% endfor %}
        </ul>
      </div>
    </div>
  </div>
</section>

<nav>
  <ul class="pager">
    {% if paginator.previous_page %}
      <li><a href="{{ paginator.previous_page_path }}">Précédente</a></li>
    {% endif %}

    {% if paginator.next_page %}
      <li><a href="{{ paginator.next_page_path }}">Suivante</a></li>
    {% endif %}
  </ul>
</nav>
{% endraw %}
{% endhighlight %}

Jekyll produit une variable disponible `paginator` qui fait la plupart du boulot en divisant en pages. J'ai aussi ajouté des liens vers la page précédente/suivante en bas.

### Meilleure Navigation

Un moyen de faire que le code de navigation soit moins répétitif est de tirer les liens provenant d'une autre source. Essayons en utilisant des fichiers CSV.

Créez `_data/nav.csv` avec les contenus qui suivent :

{% highlight text %}
name,link
About,/about.html
Services,/services.html
Portfolio,/portfolio.html
Blog,/blog/index.html
Contact,/contact.html
{% endhighlight %}

Maintenant nous avons simplement besoin d'itérer sur cette CSV dans  `_includes/nav.html`:

{% highlight html %}
{% raw %}
...
<ul class="nav navbar-nav navbar-right">
  {% for nav_item in site.data.nav %}
    <li {% if page.url == nav_item.link %} class="active" {% endif %}>
      <a href="{{ nav_item.link }}">{{ nav_item.name }}</a>
    </li>
  {% endfor %}
</ul>
...
{% endraw %}
{% endhighlight %}

### Conclusion

Nous espérons que ce guide vous ait donné une bonne fondation. Désormais à vous de vous lancer et de nourrir l'internet avec de magnifiques sites web.

Si vous êtes coincé et avez besoin d'aide, le site web de Jekyll a  une  [documentation](http://jekyllrb.com/docs/home/) excellente. La communauté sur [talk.jekyllrb.com](http://talk.jekyllrb.com) est aussi une ressource géniale.

Happy Jekylling !
