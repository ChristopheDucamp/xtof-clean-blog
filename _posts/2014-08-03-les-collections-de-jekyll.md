---
title: Les Collections !
date: '2014-08-03 00:00:00'
categories:
- jekyll
- collections
layout: post
subtitle: Tout n'est pas un post ou une page...
author: Christophe Ducamp
tags:
- jekyll
slug: les-collections-de-jekyll
draft: false

---
## Les collections dans Jekyll 2.0

Tout dans votre site Jekyll n'est pas un post ou une page. Vous voudrez peut-être documenter différentes méthodes dans votre projet OpenSource, l'annuaire des membres d'une équipe ou une liste d'albums de musique. 
Les collections vous permettent de définir un nouveau type de document qui se comporte comme le font normalement les Pages ou les Posts, mais elles disposent aussi de leurs propres propriétés uniques et d'un espace-nom.

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

## Étape 2 : Ajouter votre Contenu

Créez un dossier correspondant (par ex. `/_ma_collection`) et ajoutez-y des documents.

Le front-matter YAML est lu comme de la data s'il existe, si non, alors tout est simplement placé dans l'attribut `content` du Document.

Note : le répertoire doit être nommé de la même manière que la collection que vous avez définie dans votre fichier config.yml, en le faisant précéder du caractère`_`.

### Étape 3 : En option, restituez vos documents de votre collection en fichiers indépendants


Si vous voulez que Jekyll crée une version publique de chaque document dans votre collection, réglez la clé `output` sur `true` dans vos métadonnées de collection à l'intérieur de votre fichier  `_config.yml`:

{% highlight yaml %}
collections:
  ma_collection:
    output: true
{% endhighlight %}

Ceci produira un fichier pour chaque document dans la collection.
Par exemple, si vous avez `_ma_collection/un_sous_rep/un_doc.md`,
il sera restitué en utilisant Liquid et le convertisseur Markdown de votre choix, et écrit vers `<dest>/ma_collection/un_sous_rep/un_doc.html`.



Tout comme pour les posts avec des [Permaliens](http://jekyllrb.com/docs/permalinks/), l'URL du document peut se personnaliser en réglant une métdonnée `permalink` à la collection :

{% highlight yaml %}
collections:
  ma_collection:
    output: true
    permalink: /awesome/:path/
{% endhighlight %}

Par exemple, si vous avez `_ma_collection/un_sousrep/un_doc.md`, il sera écrit vers `<dest>/awesome/un_sousrep/un_doc/index.html`.

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
        <p>Étiquette de la collection</p>
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
        <p><code>output_ext</code></p>
      </td>
      <td>
        <p>Extension du fichier produit</p>
      </td>
    </tr>
  </tbody>
</table>
</div>

## Attributs Liquid

### Collections

Chaque collection est accesible via la variable Liquid `site`. Par exemple, si vous voulez accéder à la collection `albums` trouvée dans `_albums`, vous utiliseriez `site.albums`. Chaque collection est en elle-même une série de documents (par ex. `site.albums` est une série de documents, tout comme `site.pages` et `site.posts`). Voir ci-dessous pour savoir comment accéder aux attributs de ces documents.

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
          Si les documments de la collection seront produits sous forme de fichiers individuels.
        </p>
      </td>
    </tr>
  </tbody>
</table>
</div>


### Documents

En plus de n'importe quel FrontMatter YAML fourni dans le fichier correspondant du document, chaque document a les attributs suivants : 

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
          Le contenu (unrendered) du document. Si aucun FrontMatter YAML n'est utilisé, alors ceci est tous les contenus du fichier après la fin `---` du FrontMatter.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>output</code></p>
      </td>
      <td>
        <p>
          L'output restitué du document, basé sur le  <code>content</code>.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <p><code>path</code></p>
      </td>
      <td>
        <p>
          Le chemin complet vers le fichier source du document.
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
          L'URL de la collection rendue. Le fichier est uniquement écrit vers la destination quand le nom de la collection à laquelle il appartient est inclus dans la clé <code>render</code> dans le fichier de configuration du site.
        </p>
      </td>
    </tr>
  </tbody>
</table>
</div>





