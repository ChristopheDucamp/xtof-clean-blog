---
title: Démarrer avec Pages GitHub (Plus Bonus Jekyll)
date: 2013-12-21 14:15:00 Z
categories:
- Pages GitHub
layout: post
---

Lien de référence : <cite class="p-name u-url">[Get Started With GitHup Pages (Plus Bonus Jekyll)](http://24ways.org/2013/get-started-with-github-pages/)</cite>,   
(<span class="p-publisher p-org h-card">[24ways](http://24ways.org)</span> - <span class="h-card p-author">[Anna Debenham](http://maban.co.uk)</span>, <time class="dt-published" datetime="2013-12-18">18 décembre 2013</time>)

*Après plusieurs tentatives avortées pour démarrer avec les [Pages GitHub](http://pages.github.com/), je me suis jurée que si jamais j'y parvenais, je l'écrirais. Heureusement, j'y suis enfin arrivée, aussi voici ma copie.*

## Pourquoi Je Trouve que Pages GitHub Est Cool 

Normalement, quand vous hébergez des trucs sur GitHub, vous ne faites que stocker vos fichiers là-bas. Si vous poussez des fichiers de site, ce que vous stockez c'est le code. Et quand visualisez un fichier, vous voyez le code au lieu de la production. Ce que vous permettent les Pages GitHub, c'est de stocker des fichiers. Et si ce sont des fichiers HTML, vous pourrez les voir comme tout autre site web, vous n'avez donc pas besoin de les auto-héberger ailleurs.

Le service des Pages GitHub accepte le HTML mais ne sait pas exécuter des langages comme PHP et ne sait pas utiliser une base de données comme vous en avez déjà probablement utilisée. Vous devrez donc produire des fichiers HTML statiques. Et c'est là où les outils de gabarits tels que [Jekyll](http://jekyllrb.com/) entrent dans la danse, ce dont je parlerai plus tard.

Le principal avantage de Pages GitHub, c'est sa facilité de collaboration. Les modifications que vous produisez dans le dépôt sont automatiquement synchronisées. Si votre site est hébergé sur GitHub, il est donc mis à jour simultanément avec votre dépôt GitHub. C'est ce qui me séduit, parce que quand je veux démarrer rapidement un truc, je ne tiens pas à m'encombrer avec l'hébergement ; et quand les gens  
proposent une *pull request*, je veux simplement que cette modification soit visible dès que je la fusionne et ce, sans avoir à bidouiller des [web hooks](http://www.clochix.net/post/2009/10/04/Bidouiller-avec-les-Web-Hooks).

## Avant de démarrer

Si vous avez déjà utilisé GitHub, si vous disposez d'un compte et connaissez les fondamentaux comme savoir démarrer un nouveau dépôt et le cloner sur votre ordinateur, vous êtes prêts à partir. Si ce n'est pas le cas, je vous recommande de vous familiariser avec ça. Le site GitHub a une [documentation très complète pour savoir comment démarrer](https://help.github.com/articles/set-up-git), et si vous n'êtes pas un féru de la ligne de commande, les apps officielles de GitHub pour [Mac](http://mac.github.com/) et [Windows](http://windows.github.com/) sont vraiment géniales.

J'ai aussi trouvé que ce [tutoriel réalisé par Thinkful sur les Pages GitHub](http://www.thinkful.com/learn/a-guide-to-using-github-pages/) était vraiment utile : il contient tous les détails pour transformer un dépôt existant en un site Pages GitHub.

Même si ce qui suit comprend un peu d'utilisation de la ligne de commande, je vous guiderai sur les fondamentaux.

## Installer Pages GitHub

Pour les besoins de cette démo, nous allons construire un site de recettes de Noël - rien de complexe, juste un endroit pour stocker des recettes que nous pourrons partager avec des gens. Et ces personnes pourront les forker ou suggérer des modifications à celles qu'elles aiment. Mon nom d'utilisateur GitHub est [maban](http://maban.co.uk), et le projet que j'ai installé s'appelle 
[christmas-recipes](https://github.com/maban/christmas-recipes). Ainsi, après avoir démarré GitHub Pages, le site peut être trouvé ici : [http://maban.github.io/christmas-recipes/](http://maban.github.io/christmas-recipes/).

Vous pouvez paramétrer un nom de domaine personnalisé, mais par défaut l'URL de votre site sur GitHub Pages est *votre-nomutilisateur.github.io/votre-nom-de-projet*.

### Installer le Dépôt (repository)

La première chose que nous allons faire sera de [créer un nouveau dépôt GitHub](/2013/12/16/creer_un_repo_GitHub/), exactement de la même façon qu'un dépôt normal, puis nous le clonerons sur l'ordinateur. Donnons-lui le nom *recettes-noel*. Rien à l'intérieur pour le moment, mais tout va bien.

![image](http://media.24ways.org/2013/debenham/new-repo.jpg "Voici une impression écran d'un nouveau dépôt utilisant le site web GitHub ")

Après avoir installé le dépôt sur le site web de GitHub, je l'ai cloné sur mon ordinateur à l'intérieur de mon répertoire *Sites* en utilisant l'app GitHub (si vous voulez, vous pouvez le cloner ailleurs). Désormais, j'ai un dépôt local sur mon ordinateur synchronisé avec le dépôt distant sur GitHub.

### Naviguer vers le dépôt

Ouvrons maintenant la ligne de commande et naviguons vers le dépôt local. Le moyen le plus facile de faire ça dans le Temrinal, c'est de taper `cd`, puis de glisser/déposer le dossier à l'intérieur de la fenêtre de temrinal et presser la touche **Entrée**. Vous pouvez vous référer à l'[illustration GIF de Chris Coyier qui décrit la même chose](http://media.24ways.org/2013/coyier/drag-folder.gif) dans son article de la semaine dernière sur 24 ways “[Grunt for People Who Think Things Like Grunt are Weird and Hard](http://24ways.org/2013/grunt-is-not-weird-and-hard/)” (article excellent).

Bon, pour moi, cela donne…

{% highlight bash %}
$ cd /Users/Anna/Sites/christmas-recipes 
{% endhighlight %}

### Créer une branche spéciale sur Pages GitHub

Parvenus à ce stade, nous n'avons rien fait d'autre que d'installer un dépôt normal. Mais c'est le moment où les choses changent.

Maintenant que nous sommes au bon endroit, créons une branche *`gh-pages`*. Ceci dit à GitHub que c'est une branche spéciale, et de traiter les contenus qui sont dedans différemment.

Assurez-vous que vous êtes toujours dans le répertoire `christmas-recipes`, puis entrez cette commande pour créer la branche `gh-pages` :

{% highlight bash %}
$ git checkout --orphan gh-pages
{% endhighlight %}

Cette option `--orphan` pourrait être nouvelle pour vous. Une branche orpheline est une branche vide déconnectée de la branche à partir de laquelle elle a été créée, et elle démarre sans commits, 
pour se transformer en branche spéciale autonome. `checkout` nous fait basculer de la branche où nous étions vers cette branche.

Si tout se passe bien, nous recevrons un message indiquant `Switched to a new branch ‘gh-pages’`.

Vous pourriez recevoir un message d'erreur vous disant que vous n'avez pas les privilèges d'admin, et si tel était le cas vous devrez taper `sudo` au début de cette commande.

### Faire de `gh-pages` votre branche par défaut (optionnel)

La branche `gh-pages` est distincte de la branche `master`, mais par défaut, la banche `master` est celle 
qui s'affichera si nous allons sur notre URL de dépôt sur GitHub. Pour modifier ça, allez aux "settings" du repository et sélectionnez `gh-pages` comme branche par défaut.

![image](http://media.24ways.org/2013/debenham/default-branch.jpg)

Si comme moi, vous ne voulez qu'une branche unique, vous pouvez [effacer la branche `master` en suivant le tutoriel de Oli Studholme](http://oli.jp/2011/github-pages-workflow/#deleting-master). En pratique c'est vraiment très facile à faire, et cela signifie que vous n'aurez plus qu'à vous soucier de maintenir une seule branche à jour.

Si vous préférez travailler à partir de `master` mais pousser les mises à jour vers la branche `gh-pages`, [Lea Verou a écrit un tutoriel rapide qui indique comment faire ça](http://lea.verou.me/2011/10/easily-keep-gh-pages-in-sync-with-master/), et son tutoriel comprend basiquement le fait de travailler à partir de la branche `master`, et d'utiliser `git rebase` pour mettre à jour une branche avec une autre.

À ce stade, nous n'avons fait que recevoir cette branche sur la machine locale, et elle est vide. Par conséquent, afin de voir quelque chose sur notre URL spéciale des Pages GitHub, nous devrons créer une page et la pousser vers le dépôt distant.

### Produire une page

Ouvrez votre éditeur de texte préféré, créez un fichier intitulé `index.html` dans votre répetoire `christmas-recipes`, et déposez-y un peu de texte savoureux. Pas d'inquiétude sur le marquage : tout ce dont nous avons besoin, c'est d'un peu de texte parce qu'à cette heure nous voulons simplement vérifier 
que ça fonctionne.

![image](http://media.24ways.org/2013/debenham/index.jpg)

Maintenant, committons et poussons nos modifications. Vous pouvez faire ça à la ligne de commande si vous êtes à l'aise, ou passer par l'app GitHub. N'oubliez pas d'ajouter un message utile au présent de commit.

![image](http://media.24ways.org/2013/debenham/pages-commit.jpg "Committer quelques modifications en utilisant l'app Mac GitHub")


Maintenant nous sommes prêts pour voir notre magnifique site tout neuf ! 
Allez sur `votre-nomutilisateur.github.io/votre-nom-projet`, et je l'espère, vous devriez voir votre premier site GitHub Pages. 
Si tel n'était pas le cas, pas de panique, cela peut prendre jusqu'à dix minutes pour la publication, aussi vous pourriez vous préparer un [mug de brownies fondant](http://www.lesfoodies.com/missty0910/recette/mug-brownies-fondant-au-micro-ondes-une-merveille) pendant l'attente.

Après cette petite pause, notre page devrait être en vie ! J'espère que ça n'a pas été traumatisant. 
Maintenant, nous savons que ça fonctionne et pouvons ajouter un peu de marquage et CSS propres, voire quelques pages supplémentaires.

Si vous vous sentez courageux, que dire de passer au niveau suivant…

## Paramétrer Jekyll

Parce que GitHub Pages ne sait pas exécuter des langages comme PHP, nous devons lui donner des fichiers HTML statiques. C'est bien s'il n'y a que peu de pages, mais nous allons bientôt manquer de choses comme les includes PHP pour répéter le contenu sur chaque page, comme les en-têtes et pieds de pages.

Jekyll facilite l'installation de gabarits et les transforme en HTML statique. Il sépare le marquage du contenu et facilite énormément l'édition de pages collaboratives. Avec notre site de recettes, nous voulons faire en sorte que ce soit très facile pour ls personnes de corriger les erreurs de typo ou ajouter des notes, sans voir à comprendre le PHP. Le dernier avantage c'est que les pages statiques se chargent vraiment très vite.

**Jekyll n'est pas supporté officiellement par Windows, mais [il est toujours possible de le faire tourner](http://jekyllrb.com/docs/windows/#installation) si vous êtes prêts à mettre les mains dans le cambouis.**

### Installer Jekyll

De retour dans le Terminal, nous allons installer Jekyll…

{% highlight bash %}
$ gem install jekyll
{% endhighlight %}

… et attendez que le programme se lance. Ceci peut prendre un certain temps. Cela pourrait même être si long que vous pourriez croire que c'est cassé, mais résistez à l'envie de balancer votre clavier comme j'ai pu le faire.

### Faire tourner Jekyll sur votre dépôt

Croisons les doigts, rien ne cloche à ce stade. Si quelque chose n'allait pas, n'abandonnez pas ! Regardez [ce post d'aide d'Andy Taylor](http://andytaylor.me/2012/11/03/installing-ruby-and-jekyll/) – vous pourriez peut-être avoir tout simplement besoin d'installer un truc en plus.

Maintenant, nous allons dire à Jekyll d'installer un nouveau projet dans le dépôt, qui se niche dans le répertoire *Sites* (le vôtre est peut-être à un endroit différent). Souvenez-vous, nous pouvons glisser-déposer le répertoire à l'intérieur de la fenêtre de terminal après la commande.

{% highlight bash %}
$ jekyll new /Users/Anna/Sites/christmas-recipes
{% endhighlight %}

Si tout se déroule comme prévu, nous devrions recevoir ce message d'erreur : `Conflict: /Users/Anna/Sites/christmas-recipes exists and is not empty`.

Rassurez-vous, tout va bien. C'est tout simplement déroutant parce que nous avons reçu ce fichier `index.html` probablement avec un fichier `README.md` que nous avons créé précédemment. Aussi, migrez tout ça pour le moment sur votre bureau et lancez de nouveau la commande.

{% highlight bash %}
$ jekyll new /Users/Anna/Sites/christmas-recipes
{% endhighlight %}

Cela devrait vous dire que site est installé.

Vérifiez que vous êtes bien dans le dépôt, et sinon, naviguez jusqu'à lui en tapant `cd `, glissez-déposez le répertoire `christmas-recipes` à l'intérieur du terminal…

{% highlight bash %}
$ jekyll cd /Users/Anna/Sites/christmas-recipes
{% endhighlight %}

…et tapez cette commande pour dire à Jekyll de fonctionner :

{% highlight bash %}
$ jekyll serve --watch
{% endhighlight %}

En ajoutant `--watch` à la fin, nous forçons Jekyll à reconstruire le site à chaque fois que nous sauvegardons. 
Nous ne sommes donc plus obligés de lui indiquer de mettre à jour à chaque fois que nous visualisons les modifications. Nous devrons faire tourner ça à chaque fois que nous travaillons sur le projet, sinon les modifications ne seront pas prises en considération. 
À cette heure, attendez pendant qu'il fait ses trucs.

### Mettre à jour le fichier de configuration

Une terminé, nous verrons le texte `press ctrl-c to stop`. **Ne faites pas ça !**. 
Au lieu de ça, ouvrez le répertoire. Vous remarquerez que certains nouveaux fichiers et répertoires sont apparus à l'intérieur. 
Il y a un répertoire appelé `_site`, et c'est là où tous les fichiers du site sont sauvegardés quand ils sont tranformés en HTML statique. 
**Ne touchez pas les fichiers à l'intérieur** — ce sont des fichiers générés qui seront écrasés à chaque fois que nous produirons des modifications aux pages et layouts.

Il y a un fichier dans notre répertoire appelé `_config.yml`. Ce fichier a quelques paramétrages que nous pouvons modifier, l'un d'entre eux étant notre URL de base. GitHub Pages supposera que l'URL de base est au-dessus du dépôt du projet, par conséquent modifier ici les réglagles nous aidera plus tard an bas de la ligne à paramétrer les liens de navigation.

Remplacez les contenus du fichier `_config.yml` avec ça :

{% highlight bash %}
`name: Recettes de Noël`
markdown: redcarpet
pygments: true
baseurl: /christmas-recipes
{% endhighlight %}

### Paramétrer vos fichiers

Écrasez le fichier `index.html` dans la racine avec celui que nous avons créé précédemment (vous pourriez aussi glisser de nouveau le fichier README.md).

Effacez les fichiers dans le répertoire `css` — nous ajouterons les nôtres plus tard.

### Visualiser le site Jekyll

Ouvrez votre navigateur préféré et tapez `http://localhost:4000/christmas-recipes` dans la barre d'adresse.

![image](http://media.24ways.org/2013/debenham/pages-site-initial.jpg "Une impression-écran d'un aperçu du site à cette heure")

Voilà, c'est votre site ! Mais on pourrait y mettre un peu plus d'amour !

### Régler les fichiers *_includes*

Il est toujours utile de pouvoir extraire des fragments de contenu sur les pages, comme des en-têtes et pieds de pages, ils n'auront donc besoin d'être mis à jour qu'à un seul endroit. Voilà à quoi sert un répertoire `_includes` dans Jekyll. Créez un répertoire à la racine appelé `_includes`, et ajoutez dedans deux fichiers : `head.html` et `foot.html`.

Dans `head.html`, copiez ce qui suit : 

{% highlight html %}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ page.title }}</title>
        <link rel="stylesheet" href="{{ site.baseurl }}/css/main.css" >
    </head>
    <body>
{% endhighlight %}

et dans `foot.html` :

{% highlight html %}
</body>
</html>
{% endhighlight %}

À chaque fois que nous voudrons ramener quelque chose à partir du répertoire `_includes`, 
nous pourrons utiliser `{% raw %}{% include nomfichier.html %}{% endraw %}` dans le fichier layout — je vous présenterai comment régler ça à la prochaine étape.

### Produire les layouts

Dans notre répertoire, il y a un répertoire intitulé `_layouts` et ceci nous permet de créer un template réutilisable pour les pages. 
À l'intérieur de ce répertoire, il y a un fichier `default.html`.

Effacez tout dans le fichier `default.html` et placez-ce code dedans pour le remplacer :
{% raw %}
	{% include head.html %}

	<h1>{{ page.title }}</h1>

	{{ content }}

	{% include foot.html %}
{% endraw %}

Ceci est une page vraiment basique avec un en-tête, un pied de page, un titre de page et un peu de contenu. Pour activer ce template sur une page, revenez à l'intérieur de la page `index.html` et ajoutez ce morceau de code tout en haut du fichier :

{% highlight yaml %}
---
layout: default
title: Accueil
---
{% endhighlight %}

Maintenant, sauvegardez le fichier `index.html` et pressez la touche de **rafraîchissement** du navigateur. 
Nous devrions voir un en-tête là où `{% raw %}{{ page.title }}{% endraw %}` était placé dans le layout, qui correspond à ce qui vient après `title:` sur la page elle-même (dans notre cas, Accueil). 
Par conséquent, si nous voulions qu'un sous-titre apparaisse sur chaque page, 
nous pourrions ajouter `{% raw %}{{ page.sous-titre }}{% endraw %}` à l'endroit où nous voudrions que le sous-titre apparaisse dans notre fichier layout, et une ligne qui dise `sous-titre : Ceci est un sous-titre` placée entre les tirets tout en haut de la page.

### Utiliser Markdown pour les templates

Tout ce qui est placé dans la page sous les derniers tirets de fermeture est le rendu où apparaîtra `{% raw %}{{ content }}{% endraw %}` dans le fichier template. 
À cette heure, ceci est restitué en HTML, mais nous pouvons utiliser Markdown, et Jekyll convertira cela en HTML. 
Pour ce site de recettes, nous voulons faire qu'il soit aussi facile que possible pour les personnes de le mettre à jour, mais aussi d'avoir un marquage dissocié du contenu, par conséquent utilisons Markdown au lieu du HTML pour les recettes.

Dire à une page d'utiliser Markdown au lieu du HTML est incroyablement simple. 
Tout ce que nous devons faire, c'est modifier le nom de fichier pour le passer de `.html` en `.md`. 
Aussi renommons le fichier `index.html` en `index.md`. Désormais nous pouvons utiliser le Markdown, et Jekyll produira ça en HTML.

### Créer un nouveau layout 

Nous allons créer un nouveau layout appelé `recette` qui va devenir le modèle pour toute page de recette que nous créerons. 
Restons super simple. 

Dans le répertoire `_layouts`, créons un fichier appelé `recette.html` et collons ce qui suit à l'intérieur:

{% highlight html %}

{% raw %}{% include head.html %}{% endraw %}

<main>

{% raw %}<h1>{{ page.title }}</h1>{% endraw %}

{% raw %}{{ content }}{% endraw %}

{% raw %}<p>Recette de <a href="{{ page.lien-attribution-recette }}">  
{{ page.auteur-recette }}</a>.</p>{% endraw %}
    	
</main>

{% raw %}{% include nav.html %}{% endraw %}

{% raw %}{% include foot.html %}{% endraw %}

{% endhighlight %}

Ceci est notre template. Le contenu qui va sur le layout `recette` contient un titre de page, le contenu de la recette, une attribution de l'auteur de la recette et un lien d'attribution.


### Ajouter quelques pages de recettes

Créez un nouveau fichier dans la racine du répertoire `recettes-noel` et appelez-le `gingerbread.md`. 
Copiez ce qui suit à l'intérieur : 

{% highlight yaml %}

---
layout: recette
title: Biscuit au Pain d'Epices
auteur-recette: HungryJenny
lien-attribution-recette: http://www.opensourcefood.com/people/HungryJenny/recipes/soft-christmas-gingerbread-cookies
---
Production d'environ 15 petits cookies.

## Ingrédients

* 175g plain flour
* 90g brown sugar
* 50g unsalted butter, diced, at room temperature
* 2 tbsp golden syrup
* 1 egg, beaten
* 1 tsp ground ginger
* 1 tsp cinnamon
* 1 tsp bicarbonate of soda
* Icing sugar to dust

## Méthode

1. Sift the flour, ginger, cinnamon and bicarbonate of soda into a large mixing bowl.
2. Use your fingers to rub in the diced butter. Mix in the sugar.
3. Mix the egg with the syrup then pour into the flour mixture. Fold in well to form a dough.
4. Tip some flour onto the work surface and knead the dough until smooth.
5. Preheat the oven to 180°C.
6. Roll the dough out flat and use a shaped cutter to make as many cookies as you like.
7. Transfer the cookies to a tray and bake in the oven for 15 minutes. Lightly dust the cookies with icing sugar.

{% endhighlight %}


### Créer un nouveau layout 

Nous allons créer un nouveau layout appelé `recette` qui va devenir le modèle pour toute page de recette que nous créerons. 
Restons super simple. 

Dans le répertoire `_layouts`, créons un fichier appelé `recette.html` et collons dedans ce qui suit :

{% highlight html %}

	{% raw %}{% include head.html %}{% endraw %}

	<main>

    	{% raw %}<h1>{{ page.title }}</h1>{% endraw %}

    	{% raw %}{{ content }}{% endraw %}

    	{% raw %}<p>
    	Recette de 
    	<a href="{{ page.lien-attribution-recette }}">
    	{{ page.auteur-recette }}</a>.
    	</p>{% endraw %}
    	
	</main>

	{% raw %}{% include nav.html %}{% endraw %}
    {% raw %}{% include foot.html %}{% endraw %}

{% endhighlight %}

Ceci est notre template. Le contenu qui va sur le layout `recette` contient un titre de page, le contenu de la recette, une attribution de l'auteur de la recette et un lien d'attribution.

Le contenu est en Markdown, et quand nous pressons **Sauvegarder**, il sera converti en HTML dans le répertoire `_site`. Sauvegardez le fichier, et allez sur `http://localhost:4000/christmas-recipes/gingerbread.html` dans votre navigateur favori.

![image](http://media.24ways.org/2013/debenham/page-recipe.jpg "Une impression écran de la page recettes telle que vous pouvez la voir, le contenu Markdown a été converti en HTML, et les textes et lien d'attribution ont été tous deux insérés au bon endroit.")

### Ajouter un peu de navigation

Dans votre répertoire `_includes`, créez un nouveau fichier appelé `nav.html`. Voici un peu de code qui générera vore navigation : 

{% highlight html %}

<nav class="nav-primary" role="navigation" >
    <ul>
        {% raw %}{% for p in site.pages %}{% endraw %}
        <li>
        	{% raw %}<a {% if p.url == page.url %}class="active"{% endif %} 
        	href="{{ site.baseurl }}{{ p.url }}">{{ p.title }}</a>{% endraw %}
        </li>
        {% raw %}{% endfor %}{% endraw %}
    </ul>
</nav>

{% endhighlight %}

Ceci va chercher sur toutes les pages et générer une liste de toutes ces pages, et donner l'item de navigation qui est actuellement actif, une classe active afin que nous puissions la mettre en forme différemment.

Maintenant, nous avons besoin d'inclure ce fragment de navigation dans notre layout. Copiez {% raw %}`{% include nav.html %}`{% raw %} dans le fichier `default.html`, sous le   
 `{{ content }}`.
 
 
 ### Pousser les Modifications vers les Pages GitHub

Maintenant que nous disposons de quelques pages, il est temps de pousser nos modifications vers GitHub. 
Nous pouvons faire ça exactement de la même façon qu'avant. Vérifiez votre URL spéciale GitHub (votre-nomutilisateur.github.io/votre-nom-projet) et vous devriez voir votre site fonctionner.

**Si vous quittez le Terminal, n'oubliez pas de lancer `jekyll serve --watch` à partir du répertoire la prochaine fois que vous voudrez travailler sur les fichiers.**

### Prochaines étapes 

Maintenant que nous connaissons les fondamentaux de la création de templates Jekyll et que nous savons les publier sous forme de Pages GitHub, nous pouvons nous amuser à ajouter plus de pages et améliorer le style.

![image](http://media.24ways.org/2013/debenham/christmas-recipes.jpg "En voici une que j'ai faite précédemment")

Je n'ai utilisé Jekyll que depuis quelques semaines, essentiellement pour du prototypage. C'est vraiment bien comme système de gestion de contenus pour les blogs, et beaucoup de personnes hébergent leurs blogs Jekyll sur GitHub, comme celui de [Harry Roberts](http://csswizardry.com/2012/12/a-new-css-wizardry/)

<blockquote>By hosting the code so openly it will make me take more pride in it and allow me to work on it much more easily; no excuses now!</blockquote>

Pour finir, la documentation officielle de Jekyll est un peu éparse et plus ciblée sur les blogs que les autres sites, mais au fur et à mesure que les gens découvriront ses avantages, je suis certaine qu'elle s'améliorera au fil du temps.

Si ça vous intéresse de vous taper un peu de code, [tous les fichiers de ce tutoriel sont disponibles sur GitHub](https://github.com/maban/christmas-recipes).