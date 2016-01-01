---
layout: post
title: "personnaliser une page 404 sur un site Jekyll"
subtitle: deux tutoriels à tester
author: xtof
share: twitter --twitter-hashtags
category: http
tags: [404 .htaccess]
---
<dfn>404 est un code de Statut HTTP/1.1</dfn> renvoyé par un serveur web pour signifier que l'URI demandée n'a pas été trouvée.

Pour en savoir plus : 
- [http://www.ietf.org/rfc/rfc2616.txt](http://www.ietf.org/rfc/rfc2616.txt) 

## par Wikipedia

> En informatique, l’erreur 404 est un code d’erreur du protocole de communication HTTP sur le réseau Internet. Ce code est renvoyé par un serveur HTTP pour indiquer que la ressource demandée (généralement une page web) n’existe pas. Certains navigateurs web affichent alors le message « 404 File Not Found » (de l’anglais signifiant « fichier introuvable ») à destination de l’internaute. [source](https://fr.wikipedia.org/wiki/Erreur_HTTP_404)

##  Comment personnaliser une page 404 sur Jekyll 

Tutoriels à tester : 
- Voir  la [discussion sur jekyll-talk](https://talk.jekyllrb.com/t/can-i-configure-custom-404-error-page-for-my-application-without-using-apache/999) - chez OVH personnaliser le fichier `.htaccess`
- [Personnaliser les pages 404 sur GitHub](https://help.github.com/articles/custom-404-pages/)
- [create a custom jekyll 404 page](http://yizeng.me/2013/05/26/create-a-custom-jekyll-404-page/) si votre site Jekyll est hébergé sur GitHub

source : http://yizeng.me/2013/05/26/create-a-custom-jekyll-404-page/
### Créer un fichier 404.html

Créer un fichier `404.html` dans le répertoire racine du site Jekyll. 

### Ajouter un Front Matter YAML

L'intention est de créer une page personnalisée 404 qui ressemble à toutes les autres pages utilisant le même thème Jekyll, sans créer une page 404.html designé à part. Par conséquent, ajoutez une section Front Matter YAML en haut de 404.html et réglez le  layout sur "page".

{% highlight YAML %}
{% raw % %}
---
layout: page
title:404
---
{% endraw % %}
{% endhighlight %}


### Ajouter le contenu 404

{% highlight YAML %}
{% raw % %}
---
layout: page
title:404
---

Désolé, cette page n'existe pas =(

{% endraw % %}
{% endhighlight %}

### Rediriger automatiquement votre page 404

Afin de rediriger automatiquement votre page 404, le moyen le plus simple pourrait être d'utiliser le meta tag HTML, `meta http-equiv="refresh"`.

Ajoutez un tag `<meta>` dans le `<head>` de votre fichier `default.html` (par exemple, le mien réside dans `/_includes/themes/THEME_NAME/default.html`)[2].

Set the meta tag's http-equiv attribute to "refresh", i.e <meta http-equiv="refresh">.

Set meta tag's content attribute to something similar to content="5; url=/".
5 is the number of seconds to wait before automatically redirecting. Setting to 0 means immediate redirecting.
url=/ sets the URL to be redirected to, which can also be set to any URLs like url=http://yizeng.me etc.
Use Liquid's if-else statement to ensure the auto-redirecting happens to 404.html only.
{% if page.url == "/404.html" %}
    <meta http-equiv="refresh" content="5; url=/">
{% endif %}
Here is a completed example of default.html:
<!DOCTYPE html>
<head>
    <!-- some other meta -->
    {% if page.url == "/404.html" %}
        <meta http-equiv="refresh" content="5; url=/">
    {% endif %}
    <!-- some other stuff like link or script -->
</head>
<body>
    <!-- the body for default.html -->
</body>
### Tester la page 404 

Build Jekyll server locally using jekyll serve, then go to URL localhost:4000/404.html, see if the custom 404 page works or not.

Push to GitHub if everything looks fine.

Go to the live site using the custom domain with a nonexistence URL, e.g. http://yizeng.me/go_404, see how the page looks and check if it can be redirected automatically or not.

