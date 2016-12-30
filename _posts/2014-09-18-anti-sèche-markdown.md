---
title: Je crois au markdown.
date: 2014-09-18 14:00:00 +02:00
layout: post
subtitle: J'aime les outils modernes d'écriture
author: Christophe Ducamp
header-img: img/RemingtonTypewriter.jpg
---

# Anti-sèche Markdown

Après plus d'un an passé sur la syntaxe Mediawiki, décidé de passer l'année 2014 en Markdown ! 
Cette anti-sèche est destinée à des fins de référence rapide pour étude d'inter-opérabilité de ce langage de mise en forme très simple [pressenti ailleurs comme l'avenir de l'écriture)](/2013-12-22-markdow-avenir-ecriture.md).   

Pour une information de référence plus complète, regardez la [spécification originale de John Gruber](http://daringfireball.net/projects/markdown/) et la [page d'information sur le Markdown-enrichi de GitHub](http://github.github.com/github-flavored-markdown/).

P.S. Ce post est un premier essai publié directement à partir de l'[éditeur de texte Byword](http://www.bywordapp.com) assorti de son module intégré de publication vers WordPress. 
Le *source* est sujet à modification : cette anti-sèche publiée en syntaxe Markdown peut être directement modifiée et améliorée [ici sur Penflip](https://www.penflip.com/xtof/aide-penflip/blob/master/anti-se%CC%80che_markdown.md). 


## Table des matières  

- [Titres](#titres)  
- [Emphase](#emphase)  
- [Listes](#listes)  
- [Liens](#liens)  
- [Images](#images)  
- [Mise en Valeur du Code et de la Syntaxe](#code)  
- [Tableaux](#tableaux)  
- [Citations](#citations)  
- [HTML dans la ligne](#html)  
- [Règle horizontale](#hr)  
- [Sauts de lignes](#lines)  
- [Vidéos Youtube](#videos)  

---
<span id="titres"></span>

## Titres

	pas de titres
	# H1
	## H2
	### H3
	#### H4
	##### H5
	###### H6

	Alternativement, pour H1 et H2, un style souligné :

	Alt-H1
	======

	Alt-H2
	------


# H1

## H2

### H3

#### H4

##### H5

###### H6


Alternativement, pour H1 et H2, un style souligné :

Alt-H1
======

Alt-H2
------

----
<span id="emphase"></span>

## Emphase

    L'emphase, ou italique, avec *astérisques* ou _soulignés_.

	Une emphase forte, ou gras avec **astérisques** ou __soulignés__.

	Emphase combinée avec **astérisques et _soulignés_**.

	Barré en utilisant deux tildes. ~~Effacez-ça.~~


L'emphase, ou italique, avec *astérisques* ou _soulignés_.

Une emphase forte, ou gras avec **astérisques** ou __soulignés__.

Emphase combinée avec **astérisques et _soulignés_**.

Barré en utilisant deux tildes. ~~Effacez-ça.~~

---
<span id="listes"></span>

## Listes

(Dans cet exemple, les espaces avant et après sont présentés avec des points : ⋅)

	1. Premier item de liste ordonnée
	2. Un autre item
	⋅⋅* une sous-liste ordonnée. 
	1. Les véritables numéros n'importent pas, si ce n'est que c'est un nombre
	⋅⋅1. Sous-liste ordonnée
	4. Un autre item.

	⋅⋅⋅Vous pouvez avoir proprement indenté les paragraphes dans des items de listes. Remarquez l'espace-blanc au-dessus, et les espaces en tête (au moins un, mais nous en utiliserons trois pour aligner aussi le Markdown brut).

	⋅⋅⋅Pour avoir un retour ligne sans paragraphe, vous devrez utiliser deux espaces consécutifs⋅⋅
	⋅⋅⋅Remarquez que cette ligne est séparée, mais dans le même paragraphe.⋅⋅
	⋅⋅⋅(Ceci est contraire au saut de ligne typique GFM, où les espaces après ne sont pas requis.)

	* Une liste non ordonnée peut utiliser des astérisques
	- Ou des moins
	+ Ou des plus


1. Premier item de liste ordonnée
2. Un autre item
  * une sous-liste ordonnée. 
1. Les véritables numéros n'importent pas, si ce n'est que c'est un nombre
  1. Sous-liste ordonnée
4. Un autre item.

   Vous pouvez avoir proprement indenté les paragraphes dans des items de listes. Notez la ligne blanche au-dessus, et les espaces avant, (au moins un, mais nous en utiliserons trois ici pour aligner aussi le Markdown brut).

   Pour avoir un retour ligne sans paragraphe, vous devrez utiliser deux espaces consécutifs.  
   Remarquez que cette ligne est séparée, mais dans le même paragraphe.  
   (Ceci est contraire au saut de ligne typique GFM, où les espaces après ne sont pas requis.)

* Une liste non ordonnée peut utiliser des astérisques
- Ou des moins
+ Ou des plus

---
<span id="liens"></span>

## Liens

Il y a deux moyens de créer des liens.


	[Je suis un lien dans la ligne](https://www.google.com)

	[Je suis un lien avec un style dans la ligne et avec un titre](https://www.google.com "Page d'accueil de Google")

	[Je suis un lien avec un style de référence][texte de référence Arbitraire insensible à la casse]

	[Je suis une référence relative vers un fichier de dépôt](../blob/master/LICENCE)

	[Vous pouvez utiliser des nombres pour un lien de définitions en style-référence][1]

	Ou le laisser vide et utiliser le [lien texte lui-même]

	Un peu de texte pour montrer que la référence de liens peut suivre plus tard.

	[texte de référence arbitraire insensible à la casse]: https://www.mozilla.org
	[1]: http://slashdot.org
	[lien texte lui-même]: http://www.reddit.com


[Je suis un lien dans la ligne](https://www.google.com)

[Je suis un lien avec un style dans la ligne et avec un titre](https://www.google.com "Page d'accueil de Google")

[Je suis un lien avec un style de référence][texte de référence Arbitraire insensible à la casse]

[Je suis une référence relative vers un fichier de dépôt](../blob/master/LICENCE)

[Vous pouvez utiliser des nombres pour un lien de définitions en style-référence][1]

Ou le laisser vide et utiliser le [lien texte lui-même]

Un peu de texte pour montrer que la référence de liens peut suivre plus tard.

[texte de référence arbitraire insensible à la casse]: https://www.mozilla.org
[1]: http://slashdot.org
[lien texte lui-même]: http://www.reddit.com

---
<span id="images"></span>

## Images

	Voici un logo (survolez-le pour voir le texte du titre) : 

	Style dans-la-ligne : 
	![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Titre Texte 1")

	Référence-style : 
	![alt text][logo]

	[logo]: https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Titre Texte 2"

Voici un logo (survolez-le pour voir le texte du titre) :

Style dans-la-ligne :
![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Titre Texte 1")

Référence-style : 
![alt text][logo]

[logo]: https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Titre Texte 2"

---
<span id="code"></span>

## Coloration Syntaxique

Les blocs de code font partie de la spécification Markdown, mais pas la coloration syntaxique. Néanmoins beaucoup d'analyseurs -- comme celui de Github et *Markdown Here* -- supportent la mise en valeur de syntaxe. *Markdown Here* supporte la mise en valeur de dizaines de langages (et pas -vraiment- des langages, commes les diffs et headers HTTP) ; pour voir la liste complète, et savoir comment écrire le nom des langages, voir la [page de démo highlight.js](http://softwaremaniacs.org/media/soft/highlight/test.html).

{% highlight bash %}
Le `code` dans la ligne a des `guillemets arrière autour` de lui.
{% endhighlight %}

Le `code` dans la ligne a des `guillemets arrière autour` de lui.

Les blocs de code sont soit entourés avec trois guillemets-arrière <code>```</code>, ou sont indentés avec quatre espaces. Je recommande de n'utiliser que les blocs de code entourés de guillemets arrière— ils sont plus aisés et sont les seuls à supporter la mise en valeur de la syntaxe.

{% highlight javascript %}
javascript
 var s = "JavaScript syntax highlighting";
 alert(s);
 {% endhighlight %}

{% highlight python %}
python
 s = "Python syntax highlighting"
 print s
 {% endhighlight %}

 {% highlight bash %}
Aucun langage indiqué, aussi pas de mise en valeur de la syntaxe. 
Mais jetons un <b>tag</b>.
{% endhighlight %}

javascript
var s = "JavaScript syntax highlighting";
alert(s);

python
s = "Python syntax highlighting"
print s

 Aucun langage indiqué, aussi pas de mise en valeur de la syntaxe. 
 Mais jetons un <b>tag</b>.

(Les pages du wiki Github ne semblent pas supporter la mise en valeur de syntaxe, par conséquent ce qui est au-dessus ne sera pas coloré. Par exemple, les chaînes n'apparaissent pas en rouge. Essayez dans un e-mail *Markdown here* ou un README Github Markdown ou un problème Github -- vous pouvez pré-visualiser un nouveau problème sans le soumettre.)

De nouveau, pour voir quels sont les langages disponibles pour la mise en valeur/couleur, et savoir comment écrire ces noms de langage, voir la [page de démo highlight.js](http://softwaremaniacs.org/media/soft/highlight/test.html).

---
<span id="tableaux"></span>

## Tableaux

Les tableaux ne font pas partie du coeur de la spec Markdown, mais ils font partie du Markdown enrichi sur GitHub et *Markdown Here* les supporte. Il y a un moyen facile d'ajouter des tables à votre e-mail — une tâche qui autrement requiert de copier-coller à partir d'une autre application .

{% highlight bash %}
Les signes deux points peuvent être utilisés pour aligner les colonnes.

| Les Tableaux           | Sont            | Cools    |
| -------------          |:-------------:  | ----- :  |
| col 3 est              | alignée à droite| $1600    |
| col 2 est              | centrée         |  $12     |
| les rayures de zèbres  | sont géniales   |  $1    |
{% endhighlight %}
Les signes pipes (`|`) sont optionnels, et vous n'avez pas besoin d'aligner proprement les lignes brutes Markdown. Vous pouvez utiliser aussi le Markdown dans la ligne.

{% highlight bash %}
Markdown | Moins | Joli
--- | --- | ---
*s'aligne* | `encore` | **joliment**
1 | 2 | 3
{% endhighlight %}

Markdown | Moins | Joli
--- | --- | ---
*s'aligne* | `encore` | **joliment**
1 | 2 | 3


Les signes deux points peuvent être utilisés pour aligner les colonnes.

| Les Tableaux           | Sont            | Cools    |
| -------------          |:-------------:  | ----- :  |
| col 3 est              | alignée à droite| $1600    |
| col 2 est              | centrée         |  $12     |
| les rayures de zèbres  | sont géniales   |  $1    |

Les signes pipes (`|`) sont optionnels, et vous n'avez pas besoin d'aligner proprement les lignes brutes Mardown. Vous pouvez utiliser aussi le Markdown dans la ligne.

Markdown | Moins | Joli
--- | --- | ---
*s'aligne* | `encore` | **joliment**
1 | 2 | 3

---
<span id="citations"></span>

## Citations

{% highlight bash %}
> Les citations sont très pratiques dans l'email pour émuler le texte de réponse.
> Cette ligne fait partie de la même citation.

Fin de citation.


> Ceci est volontairement une très longue ligne qui sera citée proprement quand elle sera emballlée. Oh mec, continuons à écrire comme ça pour nous assurer que ce sera suffisamment long pour être bien emballé pour tout le monde. Bien sûr, vous pouvez *placer* du **Markdown** dans un bloc de citation.
{% endhighlight %}

> Les citations sont très pratiques dans l'email pour émuler le texte de réponse.
> Cette ligne fait partie de la même citation.

Fin de citation.

> Ceci est volontairement une très longue ligne qui sera citée proprement quand elle sera emballlée. Oh mec, continuons à écrire comme ça pour nous assurer que ce sera suffisamment long pour être bien emballé pour tout le monde. Bien sûr, vous pouvez *placer* du **Markdown** dans un bloc de citation.

---
<span id="html"></span>

## HTML dans ligne

Vous pouvez aussi utiliser du HTML brut dans votre Markdown, et il fonctionnera presque tout aussi bien.

{% highlight bash %}
<dl>
  	<dt>Liste de définitions</dt>
  	<dd>C'est quelque chose que les personnes peuvent utiliser de temps en temps.</dd>
	
  	<dt>Markdown dans le HTML</dt>
  	<dd>Ne fonctionne *pas* **très** bien. Utilisez les <em>tags</em> HTML.</dd>
</dl>
{% endhighlight %}

<dl>
  <dt>Liste de définitions</dt>
  <dd>C'est quelque chose que les personnes peuvent utiliser de temps en temps.</dd>

  <dt>Markdown dans le HTML</dt>
  <dd>Ne fonctionne *pas* **très** bien. Utilisez les <em>tags</em> HTML.</dd>
</dl>

---
<span id="hr"></span>

## Règle horizontale

{% highlight bash %}
Trois ou plus...

---

Traits d'union 

***

Astérisques

___

Soulignés

{% endhighlight %}

Trois ou plus...

---

Traits d'union

***

Astérisques

___

Soulignés

---
<span id="lines"></span>

## Sauts de lignes

Ma recommandation basique pour savoir comment fonctionne le saut de ligne est d'expérimenter et découvrir -- -- appuyez une fois sur la touche &lt;Entrée&gt; (c'est à dire, insérer une nouvelle ligne), puis appuyez deux fois (c'est à dire, insérer deux lignes), et regardez ce qui se passe. Vous apprendrez bientôt à avoir ce que vous désirez. "Markdown Toggle" est votre ami. 

Voici quelques petits trucs à essayer : 

{% highlight bash %}
	Voici une ligne pour démarrer.

	Cette ligne est séparée de celle du dessus par deux nouvelles lignes, aussi ce sera un *paragraphe séparé*. 

	Cette ligne est aussi un paragraphe séparé, mais...
	Cette ligne n'est séparée que par une seule nouvelle ligne, aussi c'est une ligne séparée dans le *même paragraphe*.
{% endhighlight %}

Voici une ligne pour démarrer.

Cette ligne est séparée de celle du dessus par deux nouvelles lignes, aussi ce sera un *paragraphe séparé*. 

Cette ligne est aussi un paragraphe séparé, mais...
Cette ligne n'est séparée que par une seule nouvelle ligne, aussi c'est une ligne séparée dans le *même paragraphe*.

(Note technique : *Markdown Here* utilise les sauts de ligne GFM, aussi il n'y a pas besoin d'utiliser les deux espaces de saut de ligne de MD.)

---
<span id="videos"></span>

## Vidéos Youtube

Elles ne peuvent pas être ajoutées directement, mais vous pouvez ajouter une image avec un lien vers la vidéo comme suit : 

`<a href="http://www.youtube.com/watch?feature=player_embedded&v=YOUTUBE_VIDEO_ID_ICI
" target="_blank"><img src="http://img.youtube.com/vi/YOUTUBE_VIDEO_ID_ICI/0.jpg" 
alt="TEXTE ALT IMAGE ICI" width="240" height="180" border="10" /></a>
`

Ou, en pur Markdown, mais en perdant la taille et la bordure de l'image :

```
[![TEXTE ALT IMAGE ICI](http://img.youtube.com/vi/YOUTUBE_VIDEO_ID_HERE/0.jpg)](http://www.youtube.com/watch?v=YOUTUBE_VIDEO_ID_ICI)
```
