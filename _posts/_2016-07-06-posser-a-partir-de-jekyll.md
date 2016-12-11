---
title: Comment POSSER à partir de Jekyll
layout: post
date: '2016-07-06'
description: "« Partager « les posts de Jekyll sur les silos sociaux en utilisant
  front matter et IFTTT"
categories: social
tags:
- social
- socialmedia
share: twitter --twitter-hashtags facebook linkedin
---

<blockquote><abbr title="Publish (on your) Own Site, Syndicate Elsewhere">POSSE</abbr> is tricky with Jekyll -- [https://indiewebcamp.com/Jekyll#Cons](source indiewebcamp wiki)
</blockquote>

TLDR Comment [POSSE](http://indiewebcamp.com/POSSE)r à partir de Jekyll ?

(Traduction en cours pour intégration.  Seul le lien officiel fait référence)
 <cite class="h-cite"><span class="u-url p-name">[Sharing Jekyll posts on social media using front matter and IFTTT](https://eduardoboucas.com/blog/2015/04/28/sharing-jekyll-posts-on-social-media-using-front-matter-and-ifttt.html)</span>
(<abbr class="p-author h-card" title="Eduardo Boucas">Ed. Boucas</abbr>, <time class="dt-published" datetime="2015-04-28">avril 2015</time>)</cite>

Chaque fois que j’écris un post sur mon blog, j’aime le partager sur différentes plates-formes de médias sociaux sur lesquelles j’ai déjà une présence. J’ai commencé à faire ça manuellement, en créant moi-même les mises à jour avec des liens vers mes posts, mais j’ai réalisé assez vite que quelque chose comme [IFTTT](https://ifttt.com/) serait parfait pour automatiser le processus. Jekyll est livré avec un flux RSS en sortie de boîte, aussi c’est juste une question de créer une nouvelle recette où vous dites _“chaque fois qu’il y a un nouveau post sur ce flux, publie une mise à jour vers A, B et C”_.

Mais je voulais un peu plus de flexibilité. Peut-être que quand j’écris un post qui peut être trop technique à partager sur Facebook, ou un post que je ne veux délibérément pas partager sur LinkedIn, ou même un post qui ajouter quelques précisions à un post précédent que je ne souhaite pas partager du tout. Ce que je voulais, c’était un moyen de sélectionner les plates-formes sur lesquelles je veux partager directement sur le front matter du post.

C’est quelque chose sur lequel j’ai réfléchi un moment et j’ai même imaginé créé mon propre service que les personnes pourraient utiliser pour faire ça, mais en fait ce peut être fait avec IFTTT et un peu de créativité du côté Jekyll.

## L’idée

Au lieu d’utiliser le flux RSS normal comme déclencheur pour notre IFTTT, nous pouvons avoir un flux pour chaque plate-forme sociale. Par exemple, `feed-facebook.xml` contiendrait tous les posts que nous voulons partager sur Facebook. Si nous voulons partager un post sur Twitter et LinkedIn, alors il apparaîtrait à la fois dans `feed-twitter.xml` et `feed-linkedin.xml`. Ensuite nous pouvons utiliser ces flux comme la source pour les différentes recettes IFTTT.. 

Voici l’idée :

![Servir différents flux vers différents canaux IFTTT](/jekyll-social-after.png) 

## Créer les flux

La première étape est de créer les flux RSS pour les différentes plates-formes. Au lieu de dupliquer le code maintes et maintes fois pour chaque plate-forme, nous pouvons définir un layout dont tous les fils hériteront.
<pre>  
{% highlight rss %}
{% raw %}
     1 <!-- _layouts/social-feed.xml -->
     2 ---
     3 layout: social-feed
     4 ---
     5 <?xml version="1.0" encoding="UTF-8"?>
     6 <rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
     7   <channel>
     8     <title>{{ site.blog_title | xml_escape }}</title>
     9     <description>{{ site.blog_description | xml_escape }}</description>
    10     <link>{{ site.site_url }}{{ site.blog_url }}</link>
    11     <atom:link href="{{ "/feed.xml" | prepend: site.blog_url | prepend: site.site_url }}" rel="self" type="application/rss+xml" />
    12     <pubDate>{{ site.time | date_to_rfc822 }}</pubDate>
    13     <lastBuildDate>{{ site.time | date_to_rfc822 }}</lastBuildDate>
    14     <generator>Jekyll v{{ jekyll.version }}</generator>
    15     {% assign platform = page.title | downcase %}
    16     {% for post in site.posts limit:10 %}
    17         {% assign share = post.share | downcase %}
    18         {% if share contains platform %}
    19         <item>
    20             <title>{{ post.title | xml_escape }}</title>
    21             <description>{{ post.content | xml_escape }}</description>
    22             <pubDate>{{ post.date | date_to_rfc822 }}</pubDate>
    23             <link>{{ post.url | prepend: site.site_url }}</link>
    24             <guid isPermaLink="true">{{ post.url | prepend: site.site_url }}</guid>
    25             {% for tag in post.tags %}
    26             <category>{{ tag | xml_escape }}</category>
    27             {% endfor %}
    28             {% for cat in post.categories %}
    29             <category>{{ cat | xml_escape }}</category>
    30             {% endfor %}
    31         </item>
    32         {% endif %}
    33     {% endfor %}
    34   </channel>
    35 </rss>
{% endraw %}
{% endhighlight %}
 </pre>

Cela ressemble vraiment au fichier de flux RSS livré par Jekyll, mais avec quelques nuances. Lorsque nous parcourons les posts, au lieu de renvoyer automatiquement un noeud `item`, nous vérifions pour voir s’il a une propriété `share` et si elle contient le nom de la plate-forme sociale que nous nous testons pour - après avoir tout converti en minuscules - faire une comparaison insensible à la casse (lignes 15 et 17).

Avec ce layout en place, ajouter une nouvelle plate-forme au système signifie créer un simple fichier avec un peu d’information dans le front matter et pas de body. Voici un exemple d’un tel fichier pour Facebook :
    
    1 <!-- social-feeds/facebook.xml -->
    2 ---
    3 layout: social-feed
    4 title: Facebook
    5 ---

Quand votre site est compilé, il devrait y avoir un fichier RSS sur  _http://your-site/social-feeds/facebook.xml_ ne contenant que les posts sélectionnés à partager sur Facebook. Bien sûr, nous n’avons sélectionné aucun post à cette heure, aussi continuons.

## Travailler sur le front matter

Nous voulons pouvoir sélectionner les plateformes sur lesquelles chaque post doit être partagé, aussi nous avons besoin d’ajouter cette information au front matter de chaque post. En prenant l’exemple de ce post que vous lisez, voici à quoi devrait ressembler le front matter si je voulais le partager sur Facebook, Twitter et LinkedIn (en supposant que j’ai au préalable créé les flux individuels pour ces plates-formes en suivant les étapes du dessus) :
    
    1 ---
    2 layout: post
    3 title:  "Partager des articles Jekyll sur les médias sociaux en utilisant front matter et IFTTT"
    4 date:   2015-04-28 09:32:00
    5 categories: blog
    6 tags: jekyll social media ifttt posse indieweb
    7 share: facebook twitter linkedin
    8 ---
    9 À chaque fois que j’écris un post sur mon blog (...)

À la ligne 7, vous pouvez voir  je définis une propriété appelée `share` avec la liste des plates-formes sur lesquelles je veux partager ce post. Notez que les noms doivent correspondre à la propriété `title` de vos fichiers XML individuels.

Si vous vous retrouvez vous-même à partager la majorité de vos posts sur les mêmes plates-formes, vous pouvez définir une valeur par défaut `share` que vous écraserez ensuite si nécessaire sur une base per-post. Pour faire ça, ajoutez ce qui suit à votre fichier `_config.yml`.
    
    1 defaults:
    2   -
    3     scope:
    4       path: ""
    5       type: "posts"
    6     values:
    7       share: facebook linkedin # Partage sur Facebook et LinkedIn par défaut

## Régler IFTTT

Une fois tout réglé côté Jekyll, il est temps de tout mettre en place sur IFTTT - créer un compte si vous n’en avez pas et cliquez sur [Créer une recette](https://ifttt.com/myrecipes/personal/new).

La première étape consiste à sélectionner le canal qui déclenche l’action (la partie **This** ) ; dans notre cas, c’est un "Feed" (flux). À l’étape suivante, nous  sélectionnons _New feed item_ comme déclencheur, ce qui signifie que la recette sera exécutée à chaque fois qu’il y a un nouvel élément dans le flux, et puis entrez l’URL du flux. 

![](/assets/posts/2015-04-28-sharing-jekyll-posts-on-social-media-using-front-matter-and-ifttt/IFTTT-1.png) Réglage de mon flux Facebook sur IFTTT (étape 3 de 7)

Puis, nous passons à la partie **That**. Dans cet exemple, je règle le flux pour Facebook, aussi je le sélectionne à partir de la liste disponible des canaux d’action — vous avez plein d’autres options à choisir à partir d’ici. À l’étape qui suit, nous allons sur _Create a link post_ parce que cela nous permet de partager un lien vers notre post avec n’importe quel message. Ceci peut être configuré à l’écran qui suit, où vous pouvez utiliser “Ingredients” pour former votre lien et votre message. Dans cet exemple, je vais utiliser un lien direct vers l’article et un message disant “Nouvel article :” et puis le titre du post.

![](/assets/posts/2015-04-28-sharing-jekyll-posts-on-social-media-using-front-matter-and-ifttt/IFTTT-2.png) Setting up my Facebook feed on IFTTT (étape 6 de 7)

## Franchir une étape supplémentaire : le cas Twitter

Nous avons presque terminé, vous devez juste répéter les étapes suivantes pour chacune des plateformes de médias sociaux que vous voulez utiliser. Mais nous pourrions aller un peu plus loin.  Lorsque vous publiez sur Twitter, il est courant d’ajouter des hashtags pour rendre le tweet plus facile à trouver pour les personnes intéressées par ces thématiques. Donc, si vous utilisez des tags dans vos messages, ne serait-il pas logique de les ajouter à votre tweet comme des hashtags ?

Ceci est effectivement plus facile à dire qu’à faire, car il s’agit non seulement de saisir tous les tags provenant du post et de les ajouter au tweet. Il y a une limite sur le nombre de caractères dans un tweet, donc nous avons besoin de vérifier combien hashtags pourront tenir - selon le titre et les tags de l’article original, nous pourrions être en mesure de n’en faire tenir qu’un seul, chacun d’eux ou même aucun.

Ma solution a été de créer un fichier de flux séparé pour Twitter en utilisant sa propre logique plutôt que d’hériter du layout `social-feed`. En résumé, voici ce qu’il produit : 

  1. Vérifie si l’auteur veut inclure les hashtags en vérifiant la présence de `--twitter-hashtags` dans la propriété `share` d’un post ;
  2. Calcule combien d’espace est laissé dans le tweet pour les tags ;
  3. Balaye la liste des tags, par ordre d’apparence, et l’ajoute au titre du post jusqu’à ce qu’il n’y ait plus d’espace ;
  4. Génère un tweet suivant un format prédéfini en utilisant le titre du post, le lien et les tags.

Je vous fais grâce des specs sur la façon d’implémenter cela parce que ce post deviendrait énorme, aussi j’ai créé [un repository GitHub](https://github.com/eduardoboucas/jekyll-social) où vous trouverez plus d’information sur l’implémentation complète et où vous pourrez récupérer le code à utiliser dans votre projet.

## Emballé 

Et c’est tout ! Maintenant, asseyez-vous, trouvez l’inspiration et écrivez vos articles.  — vous n’avez même plus besoin d’être social parce que Jekyll et IFTTT se chargeront de ça pour vous. De rien. ∎


