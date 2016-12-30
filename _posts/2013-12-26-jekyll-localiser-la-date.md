---
title: Comment localiser la date en français dans Jekyll ?
date: 2013-12-26 05:47:00 +01:00
categories:
- jekyll
- date
- howto
- localization
- localisation
- liquid
- structure
tags:
- hack
- jekyll
- date
- howto
- localization
layout: post
---

Vous venez d'[installer Jekyll en 3 lignes de commande](http://jekyllrb.com/docs/quickstart/) et souhaiteriez afficher toutes les dates en français ? Non programmeur comme moi, vous vous sentez déroutés par la [doc officielle](http://jekyllrb.com/docs/templates/) sur les templates et le langage de programmation [Liquid de Shopify](http://docs.shopify.com/themes/liquid-basics).

Pas de panique... 

Sans avoir étudié le truc en profondeur, l'affichage des dates se fait en utilisant les tags <code>page.date</code> (ou `post.date`) fournis par Liquid. 

Rappelons qu'en *sortie de boîte*, Jekyll dispose de deux pages html de structure intégrant des dates variables :  

* `index.html` à la racine 
* `post.html` dans le répertoire '_layouts'

Les filtres de dates `date_to_string` proposés à cette heure dans la documentation Jekyll affichent 

	{{ page.date | date_to_string }}
	{{ page.date | date_to_long_string }}

Si beaucoup de sites utilisent ce format, vous pourriez trouver utile de reprendre la main sur la date ? 
Afficher par exemple le mois en français et sans lettre capitale comme [dans les en-têtes de lettres](http://fr.wikipedia.org/wiki/Date#Dans_des_lettres). 

Faute de pouvoir faire tourner le [plugin de localisation i18n_filter](https://github.com/gacha/gacha.id.lv/blob/master/_plugins/i18n_filter.rb) recommandé par [Toam, dans son excellent tutoriel de démarrage Jekyll](http://www.toam.fr/20-05-2013-guide-demarrage-jekyll/), je me suis inspiré des [très nombreux exemples](http://alanwsmith.com/jekyll-liquid-date-formatting-examples) fournis par <span class="h-card">[Alan W. Smith](http://alanwsmith.com)</span> pour utiliser le filtre “`date:`” de Liquid. 
Bookmarkez cette page ! c'est une mine d'or pour devenir un mage de la manipulation des [quantièmes](http://fr.wiktionary.org/wiki/quanti%C3%A8me#Nom_commun) dans Jekyll. 

Et par curiosité, jetez aussi un oeil au [Filtre Date Liquid](http://docs.shopify.com/themes/liquid-basics/output#date) qui offre quelques éléments basiques pour la mise en page des dates. 

Commencez doucement et simplement à vous entraîner en permutant quelques lettres de tag/filtre comme  `%B, %d %Y` pour maîtriser les formats de dates simples **en anglais** (`B` étant substitué par le nom du mois écrit en toutes lettres, `d` le jour du mois de 01 à 31 et `Y` l'année). 
  
	{{ page.date | date: '%B, %d %Y' }}

<br>  
  
  
## Une date en français lisible-pour-les-humains 

Si vous êtes n00b comme moi sur Jekyll, la localisation des dates en français vous demandera plus d'efforts. [Cliquez ici](http://christopheducamp.com/w/Jekyll-localiser-la-date#localisation_du_mois) pour visualiser les premiers échantillons de code utilisés pour afficher la date en langage clair comme suit : 

	{% assign dy = page.date | date: "%a" %}{% case dy %}{% when "Mon" %}Lundi{% when "Tue" %}Mardi{% when "Wed" %}Mercredi{% when "Thu" %}Jeudi{% when "Fri" %}Vendredi{% when "Sat" %}Samedi{% when "Sun" %}Dimanche{% else %}{{ dy }}{% endcase %} {% assign d = page.date | date: "%-d"  %}{% case d %}{% when '1' %}{{ d }}er{% else %}{{ d }}{% endcase %} {% assign m = page.date | date: "%-m" %}{% case m %}{% when '1' %}janvier{% when '2' %}février{% when '3' %}mars{% when '4' %}avril{% when '5' %}mai{% when '6' %}juin{% when '7' %}juillet{% when '8' %}août{% when '9' %}septembre{% when '10' %}octobre{% when '11' %}novembre{% when '12' %}décembre{% endcase %} {{ page.date | date: '%Y' }}

... et pour le plaisir, une variante tout en bas de casses et le nom du mois abrégé que j'adapterai pour lister les posts triés par dates en page d'accueil : 

	{% assign dy = page.date | date: "%a" %}{% case dy %}{% when "Mon" %}lundi{% when "Tue" %}mardi{% when "Wed" %}mercredi{% when "Thu" %}jeudi{% when "Fri" %}vendredi{% when "Sat" %}samedi{% when "Sun" %}dimanche{% else %}{{ dy }}{% endcase %} {% assign d = page.date | date: "%-d"  %}{% case d %}{% when '1' %}{{ d }}er{% else %}{{ d }}{% endcase %} {% assign m = page.date | date: "%-m" %}{% case m %}{% when '1' %}janv.{% when '2' %}févr.{% when '3' %}mars{% when '4' %}avr.{% when '5' %}mai{% when '6' %}juin{% when '7' %}juil.{% when '8' %}août{% when '9' %}sept.{% when '10' %}oct.{% when '11' %}nov.{% when '12' %}déc.{% endcase %} {{ page.date | date: '%Y' }}
	
## Date-machine ISO-8601 

Vous aurez aussi besoin d'une représentation [iso 8601](http://christopheducamp.com/w/ISO_8601#ISO_8601) pour intégration dans l'élément [time](http://html5doctor.com/the-time-element/). Utilisez `%Y-%m-%d` ou plus simplement le filtre <code>[date_to_xmlschema](http://jekyllrb.com/docs/templates/#filters)</code> pour une version longue intégrant horaire et fuseau : 

	{{ page.date | date: "%Y-%m-%d" }} 
	{{ page.date | date_to_xmlschema }} 



Non programmeur, je serais vraiment intéressé pour trouver des solutions plus concises, propres et recommandables à ceux qui souhaitent essayer Jekyll en français ? 
Très preneur de vos frameworks, plugins et/ou tous vos points d'optimisation en langage clair pour compléter ce [bout de code *rapide et crade*](http://christopheducamp.com/w/Jekyll-localiser-la-date#localisation_du_mois) fonctionnel à cette heure en local sur la [version 1.4.2](http://jekyllrb.com/news/2013/12/17/jekyll-1-4-2-released/). 

## Ressources externes 

* La [date dans les pays](http://fr.wikipedia.org/wiki/Date#La_date_dans_les_pays). En France, nous utilisons  "Nom du jour Jour Mois Année". (ex. : `Jeudi 26 décembre 2013`)
* [Jekyll (and GitHub Pages) Liquid Date Formatting Examples](http://alanwsmith.com/jekyll-liquid-date-formatting-examples) - Une page bourrée d'exemples (en anglais) sur la mise en forme des dates. Indispensable pour approfondir et devenir un mage de manipulation des dates dans Liquid.
* Le [Filtre Date Liquid](http://docs.shopify.com/themes/liquid-basics/output#date)
* [Les filtres et tags dans Jekyll](http://jekyllrb.com/docs/templates/) - la documentation officielle de Jekyll

## Réagir  
Ce post reste  <span rel="syndication" class="u-syndication">[ouvert à tous vos commentaires sur twitter](https://twitter.com/xtof_fr/statuses/416076519794946048)</span> - [@xtof](http://twitter.com/xtof_fr)
