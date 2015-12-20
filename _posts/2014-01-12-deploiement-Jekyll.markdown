---
layout: post
title:  "Comment Déployer Jekyll"
date:   2014-01-12 08:30
author: Christophe Ducamp
categories: jekyll ftp déploiement
tags: 
- déploiement 
- jekyll 
- FTP 
- glynn
---

[lien de référence (doc Jekyll)](http://jekyllrb.com/docs/deployment-methods/)

_<ins datetime="2014-08-07">Seul le lien officiel fait référence. Difficultés rencontrées avec le script automatique Glynn. Étude en cours et recherches de scripts SSH et rsync simples à paramétrer pour simplification et automatisation.</ins>_

Du fait de la nature statique de la production générée, tous les sites construits avec Jekyll peuvent être déployés de différentes façons. Quelques-unes des techniques les plus communes sont décrites ci-dessous.

## Fournisseurs d'hébergement web (FTP)

Quasiment tous les [fournisseurs d'hébergement web](http://indiewebcamp.com/web_hosting) traditionnels vous permettent de copier des fichiers sur leurs serveurs par FTP. Pour téléverser un site Jekyll sur un hébergeur web en utilisant FTP, lancez simplement la commande `jekyll` et copiez le répertoire `_site` généré sur le répertoire racine de votre compte hébergé. Pour la plupart des fournisseurs d'hébergement, ceci se fait généralement sur les répertoires `httpdocs` ou `public_html`.

### <span id="glynn">FTP en utilisant Glynn</span>

Il existe un projet appelé [Glynn](https://github.com/dmathieu/glynn), qui vous permet de générer facilement vos fichiers statiques du site web motorisé par Jekyll et de les envoyer à votre hébergeur par FTP.

Par exemple, le fichier `_config.yml` de cette instance hébergée chez OVH se présente comme suit : 
{% highlight yaml %}
ftp_host: ftp.christopheducamp.com
ftp_username: monnomutilisateur
ftp_dir: /www
ftp_passive: false
{% endhighlight %}


Pour générer le site et le déployer, il me suffit alors de reprendre la ligne de commande, de me placer à la racine du projet puis de taper la commande :


{% highlight bash %}
$ glynn
{% endhighlight %}

(C'est la solution que j'ai retenue pour le moment : une ligne de commande puis un mot de passe, et tout le site est régénéré et mis en ligne !)


## Serveur web auto-géré

Si vous avez un accès direct au serveur de déploiement, le processus est en fait le même, si ce n'est que vous pourriez disposer d'autres méthodes vous étant réservées  
(comme des accès `scp`, ou même un accès direct au système de fichiers). Souvenez-vous simplement de vous assurer que les contenus du répertoire `_site` généré soient placés dans le bon répertoire web racine de votre serveur web.


##  Méthodes automatisées 

Il existe aussi un certain nombre de moyens pour automatiser facilement le déploiement d'un site Jekyll. Si vous avez une autre méthode non listée ci-dessous, nous adorerions l'ajouter si vous [y avez contribué](../contributing/) afin que tous les autres puissent aussi en profiter.

###  Git post-update hook

Si vous stockez votre site jekyll dans [Git](http://git-scm.com/) (vous utilisez un contrôle de version, non ?), il est vraiment facile d'automatiser le processus de déploiement en réglant un hook de mise-à-jour-post dans votre dépôt Git, [comme ceci](http://web.archive.org/web/20091223025644/http://www.taknado.com/en/2009/03/26/deploying-a-jekyll-generated-site/).

### Git post-receive hook

Pour faire qu'un serveur distant gère le déploiement pour vous à chaque fois que vous poussez des modifications en utilisant Git, vous pouvez créer un compte utilisateur qui dispose de toutes les clés publiques qui sont autorisées pour déployer dans son fichier `authorized_keys`.  Une fois cela mis en place, régler le hook post-receive se fait comme suit : 

{% highlight bash %}
laptop$ ssh deployer@example.com
server$ mkdir monrepo.git
server$ cd monrepo.git
server$ git --bare init
server$ cp hooks/post-receive.sample hooks/post-receive
server$ mkdir /var/www/monrepo
{% endhighlight %}

Ensuite ajoutez les lignes suivantes aux hooks/post-receive et assurez-vous que Jekyll soit installé sur le serveur :

{% highlight bash %}
GIT_REPO=$HOME/monrepo.git
TMP_GIT_CLONE=$HOME/tmp/monrepo
PUBLIC_WWW=/var/www/monrepo

git clone $GIT_REPO $TMP_GIT_CLONE
jekyll build -s $TMP_GIT_CLONE -d $PUBLIC_WWW
rm -Rf $TMP_GIT_CLONE
exit
{% endhighlight %}

Pour finir, faites tourner la commande suivante sur n'importe quel ordinateur d'utilisateur ayant de déployer en utilisant ce hook : 

{% highlight bash %}
laptops$ git remote add deploy deployer@exemple.com:~/monrepo.git
{% endhighlight %}

Déployer est maintenant aussi facile que de dire à nginx ou Apache de regarder 
`/var/www/monrepo` et de faire tourner ce qui suit : 

{% highlight bash %}
laptops$ git push deploy master
{% endhighlight %}

### Rake

Un autre moyen de déployer votre site Jekyll est d'utiliser [Rake](https://github.com/jimweirich/rake), [HighLine](https://github.com/JEG2/highline), et [Net::SSH](http://net-ssh.rubyforge.org/). Un exemple plus complexe de déploiement Jekyll avec Rake qui gère plusieurs branches peut être trouvé dans [Git Ready](https://github.com/gitready/gitready/blob/cdfbc4ec5321ff8d18c3ce936e9c749dbbc4f190/Rakefile).

### rsync

Une fois que vous avez généré le répertoire `_site`, vous pouvez facilement le rsync en utilisant un script shell `tasks/deploy` similaire à ce 
[script de déploiement ici](http://github.com/henrik/henrik.nyh.se/blob/master/tasks/deploy). 
Vous devriez bien évidemment changer les valeurs pour refléter les détails de votre site. 
Il existe même une [commande correspondante TextMate](http://gist.github.com/214959) qui vous aidera à faire tourner ce script à partir de Textmate.


## Rack-Jekyll

[Rack-Jekyll](http://github.com/bry4n/rack-jekyll/) est un moyen facile de déployer votre site sur tout serveur Rack tel que Amazon EC2, Slicehost, Heroku et ainsi de suite. 
Il peut aussi tourner avec [shotgun](http://github.com/rtomakyo/shotgun/), [rackup](http://github.com/rack/rack), [mongrel](http://github.com/mongrel/mongrel), [unicorn](http://github.com/defunkt/unicorn/), et d'[autres](https://github.com/adaoraul/rack-jekyll#readme).

Lisez [ce post](http://blog.crowdint.com/2010/08/02/instant-blog-using-jekyll-and-heroku.html) pour savoir comment déployer sur Heroku en utilisant Rack-Jekyll.

## Jekyll-Admin pour Rails

Si vous voulez maintenir Jekyll dans votre app existante Rails, [Jekyll-Admin](http://github.com/zkarpinski/Jekyll-Admin) contient un code à lâcher pour rendre ça possible. 
Regardez la page [README](http://github.com/zkarpinski/Jekyll-Admin/blob/master/README) de Jekyll-Admin pour plus de détails.

## Amazon S3

Si vous voulez héberger votre site sur Amazon S3, vous pouvez faire ainsi avec l'application 
[s3_website](https://github.com/laurilehmijoki/s3_website). Elle poussera votre site vers Amazon S3 où il peut être servi comme n'importe quel serveur web, pouvant dynamiquement passer à l'échelle pour du trafic presque illimité. Cette approche a l'avantage d'être parmi l'option d'hébergement la plus économique pour des blogs de gros volume, car vous ne payez que pour ce que vous utilisez.


## OpenShift

Si vous souhaitez déployer votre site sur OpenShift, il y a [une cartouche pour cela](https://github.com/openshift-cartridges/openshift-jekyll-cartridge).


##ProTruc : Pour un hébergement Jekyll zéro-tracas, utilisez les Pages GitHub

Les Pages GitHub sont motorisées en coulisses par Jekyll, par conséquent si vous cherchez un hébergement zéro-tracas, une solution à coût zéro, les Pages GitHub sont un moyen génial pour <a href="http://pages.github.com/">héberger gratuitement votre site web-motorisé-par-Jekyll</a>.





