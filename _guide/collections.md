---
title: Collections
order: 10
---
Pour suivre nous allons regarder les [Collections](http://jekyllrb.com/docs/collections/). Les collections sont un moyen assez génial d'organiser du contenu en rapport. Elles se comportent comme des Posts mais n'ont pas besoin d'une date.

Nous allons utiliser une Collection sur notre page de Services pour réduire la répétition du HTML.

Chaque service est mis en forme de manière similaire. Il y aune image, un titre et une description. Les icônes de la page Service proviennent d'une fonte pour le moment, nous changerons ça en une image afin que notre client puisse facilement en télécharger une lui-même.

Tout d'abord, nous devons indiquer à Jekyll la collection. Ajoutez ce qui suit à  `_config.yml`:

{% highlight yaml %}
collections:
  - services
{% endhighlight %}

Maintenant, créons un dossier à la racine du site web appelé `_services`.

Ajoutons dedans un fichier appelé `web_design.md` avec le contenu qui suit : 

{% highlight text %}
---
title: Design Web
image_path: ""
---

Des designs élégants et propres conçus pour votre business
{% endhighlight %}

Nous définirons les propriétés du service en utilisant Front Matter, puis en écrivant la description en Markdown.

Rendez-vous sur l'onglet Collections dans CloudCannon, vous verrez qu'il a détecté la collection Services.

![Collections](/img/guide/collections/collections.png)

Ouvrez votre item Web Design. Vous pouvez facilement gérer ce service en utilisant l'éditeur visuel. Ajoutons une image à Web Design. Je vais utiliser un ensemble gratuit d'icônes que vous pouvez  [télécharger ici](/flaticons_squidink.zip).

Cliquez sur **Add Image Path** et téléversez une icône appropriée.

![Add Image](/img/guide/collections/add_image.png)

Allez-y et ajoutez trois services ou plus. J'ai ajouté  **Content Writing**, **SEO** et **Social Media Marketing**.

Maintenant, il nous faut afficher les services dans  `services.html`. Jekyll produit la collection des services en utilisant la variable `site.services`.

Remplaçon le HTML statique existant services avec un peu de syntaxe Liquid qui itère sur tous les services et produit les détails :

{% highlight html %}
{% raw %}
...
{% for service in site.services %}
  <div class="col-lg-3 col-md-6 text-center">
    <div class="service-box">
      <img src="{{ service.image_path }}" alt="{{ service.title }}"/>
      <h3>{{ service.title }}</h3>
      <p class="text-muted">{{ service.content }}</p>
    </div>
  </div>
{% endfor %}
...
{% endraw %}
{% endhighlight %}

C'est vraiment simple, nous avons simplement une boucle for qui itère sur `site.services`. Ensuite nous pouvons produire les variables Front Matter que nous avons réglées précédemment.

La totalité du fichier `services.html` ressemble désormais à cela :
{% highlight html %}
{% raw %}
---
layout: default
title: Services
---
<section class="bg-dark">
  <div class="text-center">
    <h1>Services</h1>
  </div>
</section>

<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">À Votre Service</h2>
        <hr class="primary">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      {% for service in site.services %}
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box">
            <img src="{{ service.image_path }}" alt="{{ service.title }}"/>
            <h3>{{ service.title }}</h3>
            <p class="text-muted">{{ service.content }}</p>
          </div>
        </div>
      {% endfor %}
    </div>
  </div>
</section>
{% endraw %}
{% endhighlight %}

Voilà ! Maintenant notre client peut aisément gérer les services sur le site web en utilisant Collections. Pour en savoir plus sur la personnalisation avec laquelle  FrontMatter est mis à jour pour vos utilisateurs, regardez notre [guide Front Matter](http://docs.cloudcannon.com/editing/front-matter/).

![Final](/img/guide/collections/final.png)
