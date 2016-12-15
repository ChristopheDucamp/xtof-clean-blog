---
title: Redirections URLs dans Jekyll
date: 2014-08-02 00:00:00 Z
tags:
- jekyll
- indieweb
- permalink
- permalien
- permashortlink
- bricolage
layout: post
author: Christophe Ducamp
redirect_from:
- "/2014-214/"
- "/2014-214/permashortlink/"
- "/indielog/2014-214/"
- "/s/23.htm"
subtitle: Pour raccourcir les URLs dans Jekyll
---

*Inspiré pour reprendre l'étude de l'[IndieMark](http://indiewebcamp.com/IndieMark) sur cette instance Jekyll. Une inspiration particulièrement dopée par [l'arrivée sur IndieWeb](http://www.pierre-o.fr/blog/2014/07/30/indieweb/) de <a rel="colleague" title="Pierre Ozoux" href="http://www.pierre-o.fr/" class="h-card microcard">Pierre Ozoux</a>. Et par le dépannage webmention reçu de <span class="h-card microcard" rel="muse friend met"><img class="u-photo" src="https://michielbdejong.com/file/f7e5f8d753328f3c322bb03457e04666/thumb.jpg" />[Michiel](https://michielbdejong.com/)</span>, notre ami sauveur du web passé à Paris <time datetime="2014-07-30">mercredi dernier</time> pour le premier [meetup de décentralisation du net chez Mozilla](http://www.meetup.com/Paris-Meetup-pour-la-decentralisation-dInternet/events/193618842/).*

Le [moteur de génération de "permashortlinks"](http://www.pierre-o.fr/blog/2014/08/02/permashortlinks/) bâti hier par Pierre pour son instance Octopress (un framework Jekyll) m'a clairement éclairé pour parvenir à construire ici quelques premières [citations de permaliens-raccourcis](http://indiewebcamp.com/permashortcitation).

L'installation de **permaliens-raccourcis** n'est pas qu'un *truc de maniaque* adopté par les membres de l'IndieWebCamp... C'est aussi un [pré-requis pour passer le niveau 2 de l'IndieMark](http://indiewebcamp.com/IndieMark#Level_2_syndication) ! 

## Qu'est-ce qu'un Permalien-Raccourci ?

<blockquote><p>Un **<dfn>permalien</dfn>** est une URL qui représente et retrouve un post unique. Un **<dfn>permalien-court</dfn>** (ou permalien-raccourci ?) est une URL utilisant un nom de domaine personnel raccourci qui se dilate vers un permalien.</p>
<footer class="p-name u-url">[source wiki IndieWebCamp](http://indiewebcamp.com/permalinks-fr)</footer>
</blockquote>


## Installation 

Démarrage à la ligne de commande. Ouvrez votre fenêtre de terminal et installez la gem Jekyll de redirection :

    $ gem install jekyll-redirect-from

Une fois la *gem* installée dans votre environnement, ajoutez ces deux lignes dans votre fichier local `_config.yml` :

{% highlight yaml %}
gems:
  - jekyll-redirect-from
{% endhighlight %}

## Usages pressentis  

L'objet de cette gem de redirection peut ainsi permettre à un auteur de spécifier une ou plusieurs URL(s) pour un même post ou une même page.

Pour utiliser ces urls courtes qui pointeront toutes vers votre URL canonique, inspirez-vous de la série qui suit. 
Ajoutez votre adaptation au Front-Matter YAML de votre post ou page : 

{% highlight yaml %}
title: Mon super post
redirect_from:
  - /post/123456789/
  - /post/123456789/mon-super-post/
  - /2014-08-02/
{% endhighlight %}

## Exemple pour ce post : 

Pour le premier permalien-raccourci fonctionnel de ce post, j'ai volontairement choisi un format solide, inspiré par <span class="h-card">[Tantek](http://tantek.com/)</span>, à savoir l'année suivie du numéro du jour dans l'année, ce qui ressemble à :  

- [xtof.me/2014-214/](http://xtof.me/2014-214/) 
- citation du permalien-raccourci : (xtof.me 2014-214)
- Version un peu plus longue : [xtof.me indielog/2014-214](http://xtof.me/indielog/2014-214) 

## Modifier le Rakefile

Une recherche de patterns est en cours afin de trouver un modèle de raccourci d'[URL parlante et ayant du sens](http://christopheducamp.com/b/2013-04-14/les-urls-sont-pour-les-humains/). 

Pour l'automatisation de ce processus de redirection, référez-vous directement aux [conseils de Pierre](http://www.pierre-o.fr/blog/2014/08/02/permashortlinks/). [Une copie du fichier `Rakefile` de ce site reste déposée sur GitHub](https://github.com/ChristopheDucamp/christopheducamp.github.io/blob/master/rakefile).  

**Dernier truc à savoir :** Les redirections avec un slash à la fin génèrent un sous-répertoire correspondant contenant un fichier `index.html`, alors que les redirections sans un slash à la fin générent un `nomfichier` correspondant sans extension et sans sous-répertoire.

## Liens Ressources 
- Lien de référence : [Jekyll-redirect-from](https://github.com/jekyll/jekyll-redirect-from) - Github
- Lisez le post technique <cite class="h-cite">**<span class="url p-name">[Permashortlinks](http://www.pierre-o.fr/blog/2014/08/02/permashortlinks/)</span>** de <abbr class="p-author h-card" title="Pierre Ozoux">Pierre</abbr> pour des indications sur la modification du fichier Rakefile (<time class="dt-published">2014-08-02</time>)</cite> 
- Les [permaliens de Jekyll](http://jekyllrb.com/docs/permalinks/) : la page de référence pour connaître toutes les variables à utiliser dans vos permaliens.

## Ailleurs  
Ce post est distribué sur <a href="https://twitter.com/xtof_fr/status/495695580291928064" rel="syndication" class="u-syndication">Twitter</a>
