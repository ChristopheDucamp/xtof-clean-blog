# Micro Guide : Modifier les couleurs par défaut du thème Micro.blog Marfa

Changé le thème de mon microblog vers Marfa.

Marfa c'est le nouveau thème proposé aux sites web hébergés par  [Micro.blog](https://micro.blog). J'aime vraiment ce thème conçu par [Marcelo Marfil](https://micro.blog/mmarfil) inspiré par le thème Cactus.

Pour la touche personnelle, j'ai suivi les inspirations de @[RoelWillems](http://roelwillems.com/2018/04/15/i-switched-my.html) afin de changer la couleur par défaut pour les liens.

Changer les valeurs par défaut (rouge/rosé léger) est assez facile. En utilisant la fonctionnalité d'édition CSS de Micro.blog, vous pouvez écraser les valeurs par défaut en collant le code ci-dessous et en changeant les couleurs à votre goût.
    
    nav.main-nav a.cta {
    	background: #fff;
    	color: #ee4792;
    	border: 2px solid #fcdae9;
    }
    
    nav.main-nav a.cta:hover {
    	background: #fcdae9;
    	color: #ee4792;
    }
    
    nav.main-nav a, #footer a, #post-nav a, p a{
       box-shadow: inset 0 -2px 0 #fcdae9;
    }
    
    nav.main-nav a:hover, #footer a:hover, #post-nav a:hover, p a:hover {
    	box-shadow: inset 0 -25px 0 #fcdae9;
    }
    

_`#fcdae9` c'est pour souligner et mettre une ombre sur les liens. La couleurs `#ee4792` est pour le texte “Also on Micro.blog” dans le bouton tout en haut et à droite._

[ ![](https://micro.blog/roelwillems/avatar.jpg) ](http://roelwillems.com/)

[ Roel Willems ](http://roelwillems.com/)[@roelwillems](https://micro.blog/roelwillems)
