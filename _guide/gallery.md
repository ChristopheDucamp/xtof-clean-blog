---
title: Galerie de Photos
order: 11
---

Afficher du contenu dans un ordre particulier n'est pas toujours facile avec les collections. Bien sûr, si vous voulez trier par ordre alphabétique,  c'est simple. Mais si nous voulons définir l'ordre?

Une option serait d'avoir un ordre ou une variable de poids dans le Front Matter de vos items de collection et de trier sur cette base. Nous allons le faire d'une autre manière : en utilisant un tableau YAML.

La page Portfolio semble être un bon endroit pour essayer cela. Nous voulons que notre client gère les objets dans le portfolio et gère l'ordre.

Ouvrez `portfolio.html` et vous verrez un bloc de HTML se répéter pour chaque élément dans le portfolio. Comme vous pouvez le remarquer, nous essayons de supprimer toute répétition sur ce site pour le rendre plus facile à maintenir.

Tout d'abord nous ajouterons les données du portfolio au Front Matter :

{% highlight yaml %}
---
layout: default
title: Portfolio
portfolio:
  - image_path: /img/portfolio/1.jpg
    category: Web Design
    project: Apple
    url: http://apple.com
  - image_path: /img/portfolio/2.jpg
    category: SEO
    project: Tesla
    url: http://www.teslamotors.com/
  - image_path: /img/portfolio/3.jpg
    category: SEO
    project: Optimizely
    url: https://www.optimizely.com/
  - image_path: /img/portfolio/4.jpg
    category: Content Writing
    project: GitHub
    url: https://github.com/
  - image_path: /img/portfolio/5.jpg
    category: Web Design
    project: Dropbox
    url: https://www.dropbox.com
  - image_path: /img/portfolio/6.jpg
    category: Social Media Marketing
    project: Uber
    url: https://www.uber.com/
---
...
{% endhighlight %}

Ceci règle une liste appelée `portfolio`. Chaque item dans la liste a un hash qui a quatre clés : `image_path`, `category`, `project` et `url`.

Remplaçons le HTML qui se répète avec Liquid qui itère sur les items du Front Matter :

{% highlight html %}
{% raw %}
...
{% for item in page.portfolio %}
  <div class="col-lg-4 col-sm-6">
    <a href="{{ item.url }}" class="portfolio-box">
      <img src="{{ item.image_path }}" class="img-responsive" alt="{{ item.project }}">
      <div class="portfolio-box-caption">
        <div class="portfolio-box-caption-content">
          <div class="project-category text-faded">
            {{ item.category }}
          </div>
          <div class="project-name">
            {{ item.project }}
          </div>
        </div>
      </div>
    </a>
  </div>
{% endfor %}
...
{% endraw %}
{% endhighlight %}

So now `portfolio.html` looks like this:
{% highlight html %}
{% raw %}
---
layout: default
title: Portfolio
portfolio:
  - image_path: /img/portfolio/1.jpg
    category: Web Design
    project: Apple
    url: http://apple.com
  - image_path: /img/portfolio/2.jpg
    category: SEO
    project: Tesla
    url: http://www.teslamotors.com/
  - image_path: /img/portfolio/3.jpg
    category: SEO
    project: Optimizely
    url: https://www.optimizely.com/
  - image_path: /img/portfolio/4.jpg
    category: Content Writing
    project: GitHub
    url: https://github.com/
  - image_path: /img/portfolio/5.jpg
    category: Web Design
    project: Dropbox
    url: https://www.dropbox.com
  - image_path: /img/portfolio/6.jpg
    category: Social Media Marketing
    project: Uber
    url: https://www.uber.com/
---
<section class="bg-dark">
  <div class="text-center">
    <h1>Portfolio</h1>
  </div>
</section>

<section class="no-padding" id="portfolio">
  <div class="container-fluid">
    <div class="row no-gutter">
      {% for item in page.portfolio %}
      <div class="col-lg-4 col-sm-6">
        <a href="{{ item.url }}" class="portfolio-box">
          <img src="{{ item.image_path }}" class="img-responsive" alt="{{ item.project }}">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                {{ item.category }}
              </div>
              <div class="project-name">
                {{ item.project }}
              </div>
            </div>
          </div>
        </a>
      </div>
      {% endfor %}
    </div>
  </div>
</section>
{% endraw %}
{% endhighlight %}

Allez sur l'**Éditeur Visuel**, ce que notre client verra. Dans la barre latérale **Réglages** cliquez sur  **Update Portfolios**.

Vous pouvez réordonner, effacer, mettre à jour et ajouter de nouveaux items de Portfolio à partir d'ici.

![Settings](/img/guide/photogallery/settings.png)
