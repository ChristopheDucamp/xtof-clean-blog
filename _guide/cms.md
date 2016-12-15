---
title: CMS et Hébergement
order: 8
---

[CloudCannon](http://cloudcannon.com) est un service qui fournit un CMS pour les sites web Jekyll, il fournit aussi l'hébergement. Nous utiliserons CloudCannon pour permettre à notre client de mettre à jour le site web.

**Important** : CloudCannon détecte que c'est un site web Jekyll en cherchant un fichier `/_config.yml`. Créez `_config.yml` à la racine du site web (il peut être vide à cette heure)  et poussez-le vers GitHub.

Rendez-vous sur [CloudCannon](http://cloudcannon.com), enregistrez un compte gratuit et créez un site web.

![Create Site](/img/guide/cms/create_site.png)

Ceci amène le fichier navigateur. Pas de fichiers pour le moment, aussi ajoutons-en ! Cliquez sur le bouton **connect storage provider**.

![Dashboard](/img/guide/cms/dashboard.png)

Nous voulons synchroniser notre repository, aussi cliquez sur **Connect** à côté de GitHub et autorisez CloudCannon à accéder à votre compte.

![Connect](/img/guide/cms/connect.png)

Connectez le repository pour le site web.

![Repo](/img/guide/cms/repo.png)

CloudCannon tirera vos fichiers et les affichera dans le navigateur de fichiers. Toutes les mises à jour que vous produirez dans CloudCannon se synchroniseront sur GitHub et toutes les modifications que vous pousserez vers GitHub se synchroniseront avec CloudCannon.

![Files](/img/guide/cms/files.png)

Now we have the files on CloudCannon, it's time to add updatable regions. Click on `index.html`, this brings up the site in preview. You can navigate around the website in this view. Click on the **Code Editor** view to bring up the source code of the site.

![Preview](/img/guide/cms/preview.png)

We set the editable regions by adding a class of **editable** to elements in the HTML. Let's make the headings on the index page editable:

{% highlight html %}
<header>
  <div class="header-content">
    <div class="header-content-inner">
      <h1 class="editable">Your Favorite Source of Free Bootstrap Themes</h1>
      <hr>
      <p class="editable">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
      <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
    </div>
  </div>
</header>
{% endhighlight %}

The context you put the editable class is important. If you wanted to give more control to the client you could add the class to the `div`. Then they'd be able to add more headings, lists, images etc.

Go to the **Visual Editor** view. The elements with the editable class have a yellow box around them indicating they're editable. Try clicking on an editable region and making an update inline.

![Visual Editor](/img/guide/cms/visual.png)

CloudCannon pushes your website live to a testing domain of `*.cloudvent.net`.

Click on the cloudvent domain at the top left of the page. The site is now live on the internet!

![Cloudvent](/img/guide/cms/cloudvent.png)
