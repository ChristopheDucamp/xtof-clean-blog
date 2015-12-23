---
layout: post
title:  "Partager des posts Jekyll sur les médias sociaux en utilisant front matter et IFTTT"
subtitle: "Tutoriel pour publier une copie du lien de vos articles Jekyll sur Facebook, Twitter et LinkedIn"
date:   2015-12-21 20:02
categories: blog
tags: indieweb jekyll socialmedia ifttt
share: facebook twitter linkedin
---
<blockquote><abbr title="Publish (on your) Own Site, Syndicate Elsewhere">POSSE</abbr> is tricky with Jekyll
<footer><a href="https://indiewebcamp.com/Jekyll#Cons">indiewebcamp-jekyll</a></footer></blockquote>


**tl;dr** : Une piste intéressante à explorer pour [POSSE](http://indiewebcamp.com/POSSE)r à partir de Jekyll proposée par Eduardo Boucas. À savoir, publier vos billets Jekyll sur les plates-formes sociales Twitter, LinkedIn et Facebook. La traduction est proposée pour étude et **seul le lien officiel fait référence** :
<cite class="h-cite"><span class="u-url p-name">[Sharing Jekyll posts on social media using front matter and IFTTT
](https://eduardoboucas.com/blog/2015/04/28/sharing-jekyll-posts-on-social-media-using-front-matter-and-ifttt.html)</span>
(<abbr class="p-author h-card" title="Eduardo Boucas">Eduardo</abbr>, <time class="dt-published" datetime="2015-04-28">avril 2015</time>)</cite>

Chaque fois que j’écris un post sur mon blog, j’aime le partager sur différentes plates-formes de médias sociaux sur lesquelles j’ai déjà une présence. J’ai commencé à faire ça manuellement, en créant moi-même les mises à jour avec des liens vers mes posts, mais j’ai réalisé assez vite que quelque chose comme  [IFTTT](https://ifttt.com/) serait parfait pour automatiser le processus. Jekyll est livré avec un flux RSS en sortie de boîte, aussi c’est juste une question de créer une nouvelle recette où vous dites _“chaque fois qu’il y a un nouveau post sur ce flux, publie une mise à jour vers A, B et C”_.

Mais je voulais un peu plus de flexibilité. Quand j’écris un post qui peut être trop technique à partager sur Facebook, ou un post que je ne veux délibérément pas partager sur LinkedIn, ou même un post qui ajoute quelques précisions à un post précédent que je ne souhaite pas partager du tout. Ce que je voulais, c’était un moyen de sélectionner les plates-formes sur lesquelles je veux partager directement à partir du front matter du post.

C’est quelque chose sur lequel j’ai réfléchi un moment et j’ai même imaginé créer mon propre service que les personnes pourraient utiliser pour faire ça, mais en fait, ce peut être fait avec IFTTT et un peu de créativité du côté Jekyll.

## L’idée

Au lieu d’utiliser le flux RSS normal comme déclencheur pour notre IFTTT, nous pouvons créer un flux pour chaque plate-forme sociale. Par exemple, `feed-facebook.xml` contiendra tous les posts que nous voulons partager sur Facebook. Si nous voulons partager un post sur Twitter et LinkedIn, alors il apparaîtra à la fois dans `feed-twitter.xml` et `feed-linkedin.xml`. Ensuite nous pouvons utiliser ces flux comme la source pour les différentes recettes IFTTT..

Voici l’idée :

![Servir différents flux vers différents canaux IFTTT](/assets/images/jekyll-social.png)

Servir différents flux vers différents canaux IFTTT


## Créer les flux

La première étape est de créer les flux RSS pour chacune des plates-formes. Au lieu de dupliquer le code maintes et maintes fois pour chaque plate-forme, nous pouvons définir un layout dont tous les flux hériteront.

{% highlight html linenos %}
{% raw %}
<!-- _layouts/social-feed.xml -->
---
layout: social-feed
---
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>{{ site.blog_title | xml_escape }}</title>
    <description>{{ site.blog_description | xml_escape }}</description>
    <link>{{ site.site_url }}{{ site.blog_url }}</link>
    <atom:link href="{{ "/feed.xml" | prepend: site.blog_url | prepend: site.site_url }}" rel="self" type="application/rss+xml" />
    <pubDate>{{ site.time | date_to_rfc822 }}</pubDate>
    <lastBuildDate>{{ site.time | date_to_rfc822 }}</lastBuildDate>
    <generator>Jekyll v{{ jekyll.version }}</generator>
    {% assign platform = page.title | downcase %}
    {% for post in site.posts limit:10 %}
        {% assign share = post.share | downcase %}
        {% if share contains platform %}
        <item>
            <title>{{ post.title | xml_escape }}</title>
            <description>{{ post.content | xml_escape }}</description>
            <pubDate>{{ post.date | date_to_rfc822 }}</pubDate>
            <link>{{ post.url | prepend: site.site_url }}</link>
            <guid isPermaLink="true">{{ post.url | prepend: site.site_url }}</guid>
            {% for tag in post.tags %}
            <category>{{ tag | xml_escape }}</category>
            {% endfor %}
            {% for cat in post.categories %}
            <category>{{ cat | xml_escape }}</category>
            {% endfor %}
        </item>
        {% endif %}
    {% endfor %}
  </channel>
</rss>
{% endraw %}{% endhighlight %}
Cela ressemble vraiment au fichier de flux RSS livré par Jekyll, mais avec quelques nuances. Lorsque nous parcourons les posts, au lieu de renvoyer automatiquement un noeud `item`, nous vérifions pour voir s’il a une propriété `share` et si elle contient le nom de la plate-forme sociale que nous  testons pour - après avoir tout converti en minuscules - faire une comparaison insensible à la casse (lignes 15 et 17).

Une fois ce layout en place, ajouter une nouvelle plate-forme au système signifie créer un simple fichier avec un peu d’information dans le front matter et pas de body. Voici un exemple d’un tel fichier pour Facebook :
{% highlight text linenos %}
{% raw %}
<!-- social-feeds/facebook.xml -->
---
layout: social-feed
title: Facebook
---
{{% endraw %}}
{% endhighlight %}
Quand votre site est compilé, il devrait y avoir un fichier RSS sur  _http://votre-site/social-feeds/facebook.xml_ ne contenant que les posts sélectionnés à partager sur Facebook. Bien sûr, nous n’avons sélectionné aucun post à cette heure, aussi continuons.

## Travailler sur le front matter

Nous voulons pouvoir sélectionner les plateformes sur lesquelles chaque post doit être partagé, aussi nous avons besoin d’ajouter cette information au front matter de chaque post. En prenant l’exemple de ce post que vous lisez, voici à quoi devrait ressembler le front matter si je voulais le partager sur Facebook, Twitter et LinkedIn (en supposant que j’ai au préalable créé les flux individuels pour ces plates-formes en suivant les étapes du dessus) :
{% highlight text linenos %}
{% raw %}
---
layout: post
title:  "Partager des articles Jekyll sur les médias sociaux en utilisant front matter et IFTTT"
date:   2015-04-28 09:32:00
categories: blog
tags: jekyll social media ifttt posse indieweb
share: facebook twitter linkedin
---
Chaque fois que j’écris un post sur mon blog (...)
{% endraw %}
{% endhighlight %}
À la ligne 7, vous pouvez voir que je définis une propriété appelée `share` avec la liste des plates-formes sur lesquelles je veux partager ce post. Notez que les noms doivent correspondre à la propriété `title` de vos fichiers XML individuels.

Si vous vous retrouvez vous-même à partager la majorité de vos posts sur les mêmes plates-formes, vous pouvez définir une valeur par défaut `share` que vous écraserez ensuite si nécessaire sur une base per-post. Pour faire ça, ajoutez ce qui suit à votre fichier `_config.yml`.
{% highlight yaml linenos %}
{% raw %}
defaults:
  -
    scope:
      path: ""
      type: "posts"
    values:
      share: facebook linkedin # Partage sur Facebook et LinkedIn par défaut
{% endraw %}
{% endhighlight %}

## Régler IFTTT

Une fois tout réglé côté Jekyll, il est temps de tout mettre en place sur [IFTTT](https://ifttt.com/) - créez-vous un compte si vous n’en avez pas et cliquez sur [Create a Recipe](https://ifttt.com/myrecipes/personal/new).

La première étape consiste à sélectionner le canal qui déclenche l’action (la partie **This** ) ; dans notre cas, c’est un "Feed" (flux). À l’étape suivante, nous  sélectionnons _New feed item_ comme déclencheur, ce qui signifie que la recette sera exécutée à chaque fois qu’il y a un nouvel élément dans le flux, et puis entrez l’URL du flux.

<figure><img width="600" src="/assets/images/IFTTT-Facebook-feed.jpg" alt="IFTTT facebook feed settings" /><footer><small>Réglage de mon flux Facebook sur IFTTT (étape 3 de 7)</small></footer></figure>

Puis, nous passons à la partie **That**. Dans cet exemple, je règle le flux pour Facebook, aussi je sélectionne l'icône facebook à partir de la liste disponible des canaux d’action — vous avez plein d’autres options à choisir à partir d’ici. À l’étape qui suit, nous allons sur _Create a link post_ parce que cela nous permet de partager un lien vers notre post avec n’importe quel message. Ceci peut être configuré à l’écran qui suit, où vous pouvez utiliser des “Ingredients” pour former votre lien et votre message. Dans cet exemple, je vais utiliser un lien direct vers l’article et un message disant “Nouvel article :” et puis le titre du post.

<figure><img width="600" src="/assets/images/IFTTT-Facebook-feed-2.png" alt="IFTTT facebook feed settings" /><footer><small>Réglage de mon flux Facebook sur IFTTT (étape 6 de 7)</small></footer></figure>

## Franchir une étape supplémentaire : le cas Twitter

Nous avons presque terminé, vous devez juste répéter les étapes suivantes pour  chacune des plateformes de médias sociaux que vous voulez utiliser. Mais nous pourrions aller un peu plus loin.  Lorsque vous publiez sur Twitter, il est courant d’ajouter des hashtags pour rendre le tweet plus facile à trouver pour les personnes intéressées par ces thématiques. Donc, si vous utilisez des tags dans vos messages, ne serait-il pas logique de les ajouter à votre tweet comme des hashtags ?

Ceci est effectivement plus facile à dire qu’à faire, car il s’agit non seulement de saisir tous les tags provenant du post et de les ajouter au tweet. Mais il y a une limite sur le nombre de caractères dans un tweet. Nous avons donc besoin de vérifier combien de hashtags pourront tenir. Selon le titre et les tags de l’article original, nous pourrions être en mesure de n’en faire tenir qu’un seul, chacun d’eux voire aucun.

Ma solution a été de créer un fichier de flux séparé pour Twitter en utilisant sa propre logique plutôt que d’hériter du layout `social-feed`. En résumé, voici ce qu’il produit :

  1. Vérifie si l’auteur veut inclure les hashtags en vérifiant la présence de `--twitter-hashtags` dans la propriété `share` d’un post ;
  2. Calcule combien d’espace est laissé dans le tweet pour les tags ;
  3. Balaye la liste des tags, par ordre d’apparence, et l’ajoute au titre du post jusqu’à ce qu’il n’y ait plus d’espace ;
  4. Génère un tweet suivant un format prédéfini en utilisant le titre du post, le lien et les tags.

Je vous fais grâce des spécificités sur la façon d’implémenter ça parce que ce post deviendrait énorme, aussi j’ai créé [un repository GitHub](https://github.com/eduardoboucas/jekyll-social) où vous trouverez plus d’information sur l’implémentation complète et où vous pourrez récupérer le code à utiliser dans votre projet.

## Emballé

C’est tout pour l'instant ! Maintenant, asseyez-vous, trouvez l’inspiration et écrivez vos articles.  — vous n’avez même plus besoin d’être social parce que Jekyll et IFTTT se chargeront pour vous de faire le boulot... ∎

## NDT : Travaux d'intégration en cours

[Premier shoot d'essai sur Twitter](2015/12/22/corrections-flux-jekyll-social). La localisation est en cours et pourra être suivie sur ce [repo github](https://github.com/ChristopheDucamp/xtof-clean-blog). Quelques variables sont à modifier selon les réglages de votre fichier `config.yml`.  Si vous essayez ce tutoriel, je serais ravi d'avoir votre feedback. -- @xtof_fr 
