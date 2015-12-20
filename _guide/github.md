---
title: GitHub
order: 7
---
Pour cette section, je suppose que vous savez comment utiliser Git et GitHub. Si vous êtes peu familier avec ces outils, GitHub a un [Guide de Démarrage](https://try.github.io/) génial qui ne prend que 15 minutes.

Créez un nouveau repository et poussez les fichiers sources de votre site web sur GitHub. Une chose à noter est que nous n'avons pas besoin d'inclure le répertoire `_site` dans le repository parce que vous pouvez le générer facilement.

Pour vous assurer que le répertoire `_site` ne sera jamais ajouté au repository, effacez-le puis créez `.gitignore` avec le contenu qui suit : 

{% highlight text %}
_site/
.sass-cache/
.jekyll-metadata
{% endhighlight %}

Ceci indique à Git de ne jamais ajouter au repository des fichiers ou répertoires qui correspondent à ces noms.
