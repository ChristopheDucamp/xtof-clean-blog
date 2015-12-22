---
layout: post
title: Merci @eduardoboucas<br>Just tried Jekyll-Social with tags and it rocks !
subtitle: "searching how to optimize the first twitter feed"
date: 2015-12-22 00:11
tags: 
  - jekyllsocial 
  - twitter
share: twitter --twitter-hashtags
---

Bonjour [Eduard](https://twitter.com/eduardoboucas) et merci.

Just forked and tried [jekyll social](https://github.com/eduardoboucas/jekyll-social) in order to localize it in French. Love the idea, bravo.

Newbie on Jekyll and Liquid syntax, I've tweaked a bit your suggested [social-feeds](https://github.com/ChristopheDucamp/christopheducamp.github.io/tree/master/social-feeds).

### First shoot on twitter with hashtags

This "original post" ( [http://christopheducamp.com/2015/12/21/bernard-werber-sintresse-au-sommeil](http://christopheducamp.com/2015/12/21/bernard-werber-sintresse-au-sommeil)) posted
with `--twitter-hashtags` added in `share` property is rendering like that on the twitter copy  :

<blockquote class="twitter-tweet" lang="fr"><p lang="fr" dir="ltr">Bernard Werber s&#39;intéresse au sommeil: /2015/12/21/bernard-werber-sintresse-au-sommeil <a href="https://twitter.com/hashtag/sommeil?src=hash">#sommeil</a> <a href="https://twitter.com/hashtag/sleeptech?src=hash">#sleeptech</a> <a href="https://t.co/dikFmkxasE">https://t.co/dikFmkxasE</a></p>&mdash; Christophe Ducamp (@xtof_fr) <a href="https://twitter.com/xtof_fr/status/679047082972479489">21 Décembre 2015</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

### Optimization 
Incomplete @url to be removed in the twitter copy, e.g. in the example above, the following string :

   `: /2015/12/21/bernard-werber-sintresse-au-sommeil`

### Work in progress
Intention : learn/understand some Liquid syntax in order to better tame copies of posts on social platforms. Just changed `config.yml` with the following declaration including my short-url. To be tested soon.  

`twitter_format: "@title @tags (xtof.me@url)"`

Work in progress : [github repo](https://github.com/ChristopheDucamp/christopheducamp.github.io)

## Ailleurs
Une copie de ce post a été publiée sur twitter
<blockquote class="twitter-tweet" lang="fr"><p lang="en" dir="ltr">Merci eduardoboucas&#10;Just tried Jekyll-Social with tags and it rocks !: /2015/12/22/corrections-flux-jekyll-social … <a href="https://t.co/re3R7S905W">https://t.co/re3R7S905W</a></p>&mdash; Christophe Ducamp (@xtof_fr) <a class="u-syndication" rel="syndication"  href="https://twitter.com/xtof_fr/status/679080293333114880">21 Décembre 2015</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
