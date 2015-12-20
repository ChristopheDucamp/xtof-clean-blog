---
title: Navigation et Includes
order: 6
---

Construisons le reste du site web. Ce template est un site web à page unique, transformons-le en plusieurs pages. Créez une page HTML pour chaque lien dans la navigation. Vous terminerez par `about.html`, `services.html`, `portfolio.html` et `contact.html` à la racine de votre site web.

Ces  nouvelles pages semblent un peu vides, aussi ajoutons un peu de contenu.

Coupez la section "À Propos" de  `index.html` et collez-la dans `about.html`.

{% highlight html %}
{% raw %}
<section class="bg-primary" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2 class="section-heading">Nous avons ce que nous voulions !</h2>
        <hr class="light">
        <p class="text-faded">Start Bootstrap dispose de tout ce dont vous avez besoin pour bâtir votre site web afin de le faire tourner en peu de temps ! Tous les templates et thèmes sur Start Bootstrap sont open source, libres de téléchargement, et faciles à utiliser. Sans attaches !</p>
        <a href="#" class="btn btn-default btn-xl">Démarrons !</a>
      </div>
    </div>
  </div>
</section>
{% endraw %}
{% endhighlight %}

Nous ajouterons aussi un titre et un Front Matter. Maintenant `about.html` ressemble à ça :

{% highlight html %}
{% raw %}
---
layout: default
title: À Propos
---
<section class="bg-dark">
  <div class="text-center">
    <h1>À Propos</h1>
  </div>
</section>

<section class="bg-primary" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2 class="section-heading">Nous avons ce dont nous avons besoin !</h2>
        <hr class="light">
        <p class="text-faded">Start Bootstrap a tout ce dont vous avez besoin pour bâtir votre site web le faire tourner en peu de temps ! Tous les templates et thèmes sur Start Bootstrap sont open source, libres de téléchargement, et faciles à utiliser. Sans attaches !</p>
        <a href="#" class="btn btn-default btn-xl">Démarrons !</a>
      </div>
    </div>
  </div>
</section>
{% endraw %}
{% endhighlight %}

Faites de même pour les autres pages. Souvenez-vous d'ajouter l'en-tête HTML et le Front Matter à chacune des pages. Ainsi, le haut de `services.html` ressemblera à ça : 

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
...
{% endraw %}
{% endhighlight %}



Maintenant, nous avons besoin de faire fonctionner la navigation. Nous voulons lier les pages correctes et mettre en valeur la page en cours dans le menu de navigation. Ceci va devenir  un peu plus complexe, aussi plaçons la navigation dans sont propre fichier. Tout d'abord, créons un répertoire `_includes` à la racine de votre site web. Créons à l'intérieur un fichier appelé `nav.html`.

Trouvez l'élément `<nav>` dans `default.html` et copiez le dans `nav.html`.

{% highlight html %}
{% raw %}
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Désactiver la navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Démarrez  Bootstrap</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
{% endraw %}
{% endhighlight %}

Résolvons les liens `nav.html`. Nous avons besoin du href pour pointer vers la page correcte. Nous pouvons aussi laisser tomber maintenant la classe  `page-scroll` afin que chaque section soit sur une page différente.

Voici comment j'ai fait poru le lien dans `nav.html`.

{% highlight html %}
{% raw %}
...
<li>
    <a href="/about.html">À Propos</a>
</li>
...
{% endraw %}
{% endhighlight %}

Faites cela pour tous les liens.

Nous devons aussi faire que le logo principal renvoie vers la page d'accueil :

{% highlight html %}
{% raw %}
...
<a class="navbar-brand" href="/">Démarrer Bootstrap</a>
...
{% endraw %}
{% endhighlight %}

Maintenant `nav.html` ressemblera à ça :

{% highlight html %}
{% raw %}
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Start Bootstrap</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/about.html">About</a>
        </li>
        <li>
          <a href="/services.html">Services</a>
        </li>
        <li>
          <a href="/portfolio.html">Portfolio</a>
        </li>
        <li>
          <a href="/contact.html">Contact</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
{% endraw %}
{% endhighlight %}

Dans `default.html` remplacez l'élément nav avec : `{% raw %}{% include nav.html %}{% endraw %}`.

{% highlight html %}
{% raw %}
...
<body id="page-top">
  {% include nav.html %}
  {{content}}
  <!-- jQuery -->
  <script src="/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="/js/bootstrap.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="/js/jquery.easing.min.js"></script>
  <script src="/js/jquery.fittext.js"></script>
  <script src="/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="/js/creative.js"></script>
</body>
...
{% endraw %}
{% endhighlight %}

Pour mettre en valeur la page en cours dans `nav.html` nous devons trouver sur quelle page nous sommes actuellement et y ajouter une classe  `active` vers ce lien dans la navigation. Il y a beaucoup de moyens de faire ça, nous choisirons le plus simple à cette heure.

Jekyll a une variable qui a le chemin vers la page en cours que vous pouvez référencer en utilisant `page.url`. Utilisons ça pour comparer la page en cours vers l'item dans la navigation. Si cela correspond, nous ajouterons  la classe : 

{% highlight html %}
{% raw %}
...
{% if page.url == '/about.html' %}
  <li class="active">
{% else %}
  <li>
{% endif %}
...
{% endraw %}
{% endhighlight %}

Faites ça pour tous les liens et maintenant `nav.html` ressemblera à cela : 
{% highlight html %}
{% raw %}
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Start Bootstrap</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        {% if page.url == '/about.html' %}
          <li class="active">
        {% else %}
          <li>
        {% endif %}

        {% if page.url == '/services.html' %}
          <li class="active">
        {% else %}
          <li>
        {% endif %}

        {% if page.url == '/portfolio.html' %}
          <li class="active">
        {% else %}
          <li>
        {% endif %}
        
        {% if page.url == '/contact.html' %}
          <li class="active">
        {% else %}
          <li>
        {% endif %}
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
{% endraw %}
{% endhighlight %}

Ce template a déjà une CSS pour styliser la classe `active`, aussi c'est tout ce que nous aurons à faire.

Allez sur votre navigateur et naviguez sur le site, la page en cours a une fonte rouge. À ce stade nous avons un site web fonctionnel basique que nous pouvons présenter à un client.

Regardons l'hébergement et ajoutons un CMS afin que des utilisateurs non techniques puissent mettre à jour le site web.
