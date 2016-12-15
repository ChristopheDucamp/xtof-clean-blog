---
title: Les collections dans Jekyll (doc)
date: 2014-12-30 00:00:00 Z
categories:
- jekyll
- collections
tags:
- jekyll,
- collection
layout: page
subtitle: Étude en cours de la documentation officielle jekyll
---

[lien de référence](http://jekyllrb.com/docs/collections/)

Dans votre site Jekyll, tout n'est pas "Post" ou "Page". Vous voudrez peut-être parfois publier des petites notes de statut, documenter différentes méthodes dans votre projet OpenSource, un annuaire des membres d'une équipe, une liste de livres ou d'albums de musique. Les collections vous permettent de définir un nouveau type de document qui se comporte comme le font normalement les Pages ou les Posts, mais disposent aussi de leurs propres propriétés uniques et d'un espace-nom.

## Utiliser les Collections 

### Étape 1 : Dire à Jekyll de lire dans votre collection

Ajoutez ce qui suit au fichier `_config.yml` de votre site, en remplaçant `ma_collection` avec le nom de votre collection :

{% highlight yaml %}
collections:
- ma_collection
{% endhighlight %}

Vous pouvez facultativement spécifier les métadonnées de votre collection dans votre configuration : 

{% highlight yaml %}
collections:
  ma_collection:
    foo: bar
{% endhighlight %}

Les attributs par défaut peuvent être aussi réglés pour une collection : 

{% highlight yaml %}
defaults:
  - scope:
      path: ""
      type: ma_collection
    values:
      layout: page
{% endhighlight %}

### Étape 2 : Ajouter votre Contenu 

Créez un dossier correspondant (par ex. `/_ma_collection`) et ajoutez-y des documents.
Le front-matter YAML s'il existe est lu comme de la data. Si vous ne placez pas de front-matter, Jekyll ne générera pas le fichier dans votre collection.

<div class="note info">
  <h5>Assurez-vous de nommer correctement vos répertoires.</h5>
  <p>
Le répertoire doit être nommé avec le même nom que la collection que vous avez définie dans votre fichier <code>_config.yml</code>, en le faisant précéder du caractère <code>_</code>.
  </p>
</div>

### Étape 3 : En option, restituez vos documents de votre collection en fichiers indépendants

Si vous voulez que Jekyll crée une version publique et restituée de chaque document dans votre collection, réglez la clé `output` sur `true` à l'intérieur de votre fichier `_config.yml` dans vos métadonnées de collection :

{% highlight yaml %}
collections:
  ma_collection:
    output: true
{% endhighlight %}

Ceci produira un fichier pour chaque document dans la collection. Par exemple, si vous avez `_ma_collection/quelque_sousdir/quelque_doc.md`, il sera rendu en utilisant Liquid et le convertisseur Markdown de votre choix et écrit dans `/ma_collection/quelque_sousdir/quelque_doc.html`.

Tout comme les posts avec les [Permaliens](../Permalinks/), l'URL du document peut se personnaliser en réglant dans la collection la métadonnée `permalink` :

{% highlight yaml %}
collections:
  ma_collection:
    output: true
    permalink: /super/:path/
{% endhighlight %}

Par exemple, si vous avez `_ma_collection/quelque_sousdir/quelque_doc.md`, elle sera écrite sur `<dest>/super/quelque_sousdir/quelque_doc/index.html`.

<div class="note info">
  <h5>N'oubliez pas d'ajouter YAML pour le traitement</h5>
  <p>
  Les fichiers dans le collections qui n'ont pas de front matter sont traités comme des 
  <a href="/docs/static-files">fichiers statiques</a> et simplement copiés vers leur destination de sortie sans traitement.
  </p>
</div>

<div class="mobile-side-scroller">
<table>
  <thead>
    <tr>
      <th>Variable</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <p><code>collection</code></p>
      </td>
      <td>
        <p>Étiquette de la collection conteneur</p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>path</code></p>
      </td>
      <td>
        <p>Chemin vers le document relatif au répertoire de la collection</p>
      </td>
    </tr>
<tr>
      <td>
        <p><code>name</code></p>
      </td>
      <td>
        <p>The document's base filename, with every sequence of spaces
        and non-alphanumeric characters replaced by a hyphen.</p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>title</code></p>
      </td>
      <td>
        <p>The document's lowercase title (as defined in its <a href="/docs/frontmatter/">front matter</a>), with every sequence of spaces and non-alphanumeric characters replaced by a hyphen. If the document does not define a title in its <a href="/docs/frontmatter/">front matter</a>, this is equivalent to <code>name</code>.</p>
      </td>
    </tr>

    <tr>
      <td>
        <p><code>output_ext</code></p>
      </td>
      <td>
        <p>Extension du fichier de sortie</p>
      </td>
    </tr>
  </tbody>
</table>
</div>

## Attributs Liquid

### Collections

Chaque collection est accessible via la variable Liquid `site`. 
Par exemple, si vous voulez accéder à la collection `albums` trouvée dans `_albums`, vous utiliseriez `site.albums`. Chaque collection est en elle-même une série de documents (par ex. `site.albums` est une série de documents, tout comme `site.pages` et `site.posts`). Voir ci-dessous pour savoir comment accéder aux attributs de ces documents.

Les collections sont aussi disponibles sous `site.collections`, avec la métadonnée que vous avez spécifiée dans votre `_config.yml` (si présent) et l'information qui suit : 

<div class="mobile-side-scroller">
<table>
  <thead>
    <tr>
      <th>Variable</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <p><code>label</code></p>
      </td>
      <td>
        <p>
          Le nom de votre collection, par ex. <code>ma_collection</code>.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>docs</code></p>
      </td>
      <td>
        <p>
          Une série de <a href="#documents">documents</a>.
        </p>
      </td>
    </tr>
 <tr>
      <td>
        <p><code>files</code></p>
      </td>
      <td>
        <p>
          An array of static files in the collection.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>relative_directory</code></p>
      </td>
      <td>
        <p>
          Le chemin vers le répertoire source de la collection, relatif au site source.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>directory</code></p>
      </td>
      <td>
        <p>
          Le chemin complet vers le répertoire source de la collection.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>output</code></p>
      </td>
      <td>
        <p>
          Si les documents de la collection seront sortis sous forme de fichiers individuels.
        </p>
      </td>
    </tr>
  </tbody>
</table>
</div>


### Documents

En plus de n'importe quel front-matter YAML fourni dans le fichier correspondant du document, chaque document a les attributs suivants :

<div class="mobile-side-scroller">
<table>
  <thead>
    <tr>
      <th>Variable</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <p><code>content</code></p>
      </td>
      <td>
        <p>
          Le contenu (non restitué) du document. Si aucun front-matter YAML n'est fourni, c'est la totalité des contenus du fichier. Si un front-matter YAML est utilisé, alors c'est tout les contenus du fichier après les 
`---` de fin du front-matter.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>output</code></p>
      </td>
      <td>
        <p>
          L'output restitué du document basé sur le  <code>content</code>.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>path</code></p>
      </td>
      <td>
        <p>
          Le chemin complet du fichier source du document.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>relative_path</code></p>
      </td>
      <td>
        <p>
          Le chemin vers le fichier source du document relatif au site source.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>url</code></p>
      </td>
      <td>
        <p>
          The URL of the rendered collection. The file is only written to the
          destination when the name of the collection to which it belongs is
          included in the <code>render</code> key in the site's configuration file.
        </p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="note warning">
  <h5>Le support des Collections est instable et peut changer</h5>
  <p>
    Cette fonctionnalité est expérimentale et l'API peut probablement changer jusqu'à ce que la fonctionnalité se stabilise.
  </p>
</div>

## Accéder aux Attributs de Collection 

Les attributes provenant du front matter YAML peuvent être accédés sous forme de donnée n'importe où dans le site. En utilisant l'exemple du dessus pour configurer une collection telle que `site.albums`,
on pourrait avoir le front matter dans un fichier individuel structuré comme suit (qui doit utiliser une format de marquage, et ne peut pas être sauvegardé avec une extension  `.yaml`) :

{% highlight yaml %}
title: "Josquin: Missa De beata virgine and Missa Ave maris stella"
artist: "The Tallis Scholars"
director: "Peter Phillips"
works:
  - title: "Missa De beata virgine"
    composer: "Josquin des Prez"
    tracks:
      - title: "Kyrie"
        duration: "4:25"
      - title: "Gloria"
        duration: "9:53"
      - title: "Credo"
        duration: "9:09"
      - title: "Sanctus & Benedictus"
        duration: "7:47"
      - title: "Agnus Dei I, II & III"
        duration: "6:49"
{% endhighlight %}

Chaque album dans la collection pourrait être listé sur une page unique avec un template :

{% highlight html %}
{% raw %}
{% for album in site.albums %}
  <h2>{{ album.title }}</h2>
  <p>Performed by {{ album.artist }}{% if album.director %}, directed by {{ album.director }}{% endif %}</p>
  {% for work in album.works %}
    <h3>{{ work.title }}</h3>
    <p>Composed by {{ work.composer }}</p>
    <ul>
    {% for track in work.tracks %}
      <li>{{ track.title }} ({{ track.duration }})</li>
    {% endfor %}
    </ul>
  {% endfor %}
{% endfor %}
{% endraw %}
{% endhighlight %}
