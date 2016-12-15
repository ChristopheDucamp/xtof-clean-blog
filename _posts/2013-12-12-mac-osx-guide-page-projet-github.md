---
title: 'MacOSX : Comment Utiliser les Pages GitHub pour votre page Projet'
date: 2013-12-12 19:51:44 Z
tags:
- git
- GitHub
- Projet
- tutoriel
layout: post
subtitle: Un tutoriel rapide pour créer votre première page projet sur GitHub
author: Christophe Ducamp
---

[Lien de référence chez Thinkful](http://www.thinkful.com/learn/a-guide-to-using-github-pages/start/new-project/project-page/)

Si comme moi vous êtes débutant dans la ligne de commande et sur Git, et si vous cherchez un moyen gratuit d'héberger quelques documents et projets, les [Pages GitHub](http://christopheducamp.com/w/Page_GitHub) peuvent être une réponse. 

Non seulement, GitHub vous permet d'héberger des sites web avec HTML, CSS et javascript, mais ce service vous permet en outre de vous familiariser avec Git, un outil important de gestion de versions mais plutôt difficile à appréhender pour les non-programmeurs.

## Vous démarrez de zéro ?

Si vous démarrez de zéro, tout va bien. Avançons pas à pas. 
Et rappelons pour mémoire, que GitHub dispose de deux types de pages : 

1. la **page utilisateur** ou **organisation** au format `http://votrenomutilisateur.github.io`
1. et les **pages projets** avec le schéma `http://votrenomutilisateur.github.io/Nom-De-Votre-Projet`

Dans cet exemple, nous nous intéresserons à la **page d'un projet**.

### Page Projet : Créons un nouveau dépôt

Allons sur [github.com/new](http://github.com/new)

1. Donnez un nom à votre dépôt (par ex. `Mon-Super-Projet`)
2. Faites que votre dépôt soit public (Vous pourriez demander privé mais s'il est privé pourquoi chercher à publier un site web ? Et puis, pour publier en privé, il faut payer)
3. Cochez la case "Initialize this repository with a Readme" (c'est optionnel mais ça vous facilitera les choses par la suite)
4. Cliquez sur "Create Repository" pour créer votre dépôt sur GitHub.

**Quittons le web pour passer dans la Fenêtre de Terminal**

**Créons un répertoire sur votre Mac et naviguons jusqu'à lui**

Ouvrez votre fenêtre de Terminal (accessible dans votre répertoire `Utilitaires`), créons un répertoire (`mkdir`) et naviguons jusqu'à lui.

{% highlight bash %}

$ mkdir ~/chemin/vers/code-source
$ cd ~/chemin/vers/code-source
{% endhighlight %}

**Téléchargez (`clone`) votre nouveau dépôt GitHub et allez dedans.**

Si vous visitez votre page projet sur `github.com`, vous devriez voir le lien que vous devez copier afin de le cloner (dans la colonne en bas à droite). **Assurez-vous de sélectionner l'option clonage HTTPS**, et copiez l'url qui devrait ressembler à un truc de type `https://github.com/votrenomutilisateur/NomDuProjet.git`  
     
*Note* : pour mon nom d'utilisateur et un  projet qui s'appellerais`Projet-Furax`, cela me donne le schéma suivant : `https://github.com/ChristopheDucamp/Projet-Furax.git`. Entrez les lignes de commande qui suivent en **prenant soin de changer Projet-Furax par le nom de votre projet créé au-dessus**

{% highlight bash %}
	$ git clone https://github.com/ChristopheDucamp/Projet-Furax.git
	$ cd Projet-Furax 
{% endhighlight %}

**Votre tout nouveau dépôt est désormais rapatrié sur votre Mac et devrait contenir désormais le fichier `README.md`.**

Vérifions : 

{% highlight bash %}
$ ls
# README.md
	
$ ls -a
# .		..		.git		README.md 
{% endhighlight %}
   
**Ajoutons une branche `<gh-pages>` à notre nouveau dépôt **

à la ligne de commande, assurez-vous bien d'être dans votre dépôt local

{% highlight bash %}
$ cd /chemin/vers/repo
{% endhighlight %}
    
**créons une nouvelle branche appelée `<gh-pages>` et vérifions. **

Le nom de la branche `<gh-pages>`est une branche spéciale utilisée par GitHub pour recevoir les fichiers à construire et à publier.

Lancez la commande 
{% highlight bash %}
$ git checkout -b gh-pages
# Switched to a new branch 'gh-pages' 
{% endhighlight %}     

**Puis Committons et Poussons vers Github**

Créez une page html qui dit juste "Hello World" : 

Ce sera votre page d'accueil pour le moment. 
Assurez-vous qu'elle soit bien située à la base du répertoire de votre dépôt et soit nommée `index.html` de manière à ce que GitHub sache comment l'afficher.

{% highlight bash %}
$ echo "Hello, world" > index.html
    
$ git add index.html
$ git commit index.html -m "Mon premier commit hello world"
[ghpages 9275d07] Mon premier commit hello world
1 file changed, 1 insertion(+)
create mode 100644 index.html

$ git push origin gh-pages
{% endhighlight %}

## Terminé !

Cela pourrait avoir duré 10 minutes, mais après ça vous pourrez voir votre toute nouvelle page créée sur `http://nomutilisateur.github.io/Nom-du-Projet/`. Si vous faites des mises à jour, assurez-vous de pousser vers la branche `gh-pages`.