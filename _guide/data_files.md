---
title: Fichiers Data 
order: 12
---

Les fichiers Data dans Jekyll facilitent la lecture à partir de fichiers YAML, JSON et CSV. Vous pouvez traiter ça comme la lecture de data provenant d'une base de données.

La manière dont nous allons utiliser les Fichiers Data sur notre site sera d'ajouter une carte à la page contact de nos bureaux.

Tout d'abord, nous avons besoin d'uun fichier CSV avec les latitudes et longitudes de nos bureaux. Créez `_data/office_locations.csv` avec les contenus qui suivent : 

{% highlight text %}
latitude,longitude,name
-45.878760,170.502798,Dunedin Office
-41.286460,174.776236,Wellington Office
-46.098799,168.945819,Gore Office
-46.413187,168.353773,Invercargill Office
-35.117330, 173.267559,Kaitai Office
{% endhighlight %}

Maintenant ajouter carte et les marqueurs à `contact.html`. Nous pouvons accéder à la data dans le CSV en utilisant  `site.data.office_locations`.

Google Maps a une API Javascript, par conséquent nous devons recevoir cette donnée dans une variable Javascript. C'est en fait vraiment facile de produire un JSON avec Jekyll : 

{% highlight html %}
{% raw %}
...
<script>
  var markers = [
    {% for location in site.data.office_locations %}
      ['{{ location.name }}', {{ location.latitude }}, {{ location.longitude }}]
      {% unless forloop.last %},{% endunless %}
    {% endfor %}
  ];
</script>
...
{% endraw %}
{% endhighlight %}

Vous pouvez utiliser la variable `forloop` à l'intérieur pour des boucles afin de recevoir l'index en cours, la distance ou pour vérifier si c'est le premier ou dernier item. Voici ce que nous vérifions si ce *n'est pas* le dernier item et en ajoutant une virgule.

Pour finir, nous devons ajouter un placeholder pour la carte, initialiser la carte et ajouter des marqueurs. Je ne vais pas aller à fond sur ce code. Néanmoins, ça vaut le coup de préciser que j'ai utilisé [SnazzyMaps](https://snazzymaps.com) pour ajouter un style élégant à la carte.

Voici la page finale de contact :

{% highlight html %}
{% raw %}
---
layout: default
title: Contact
---
<section class="bg-dark">
  <div class="text-center">
    <h1>Contact</h1>
  </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Entrons en contact !</h2>
                <hr class="primary">
                <p>Prêt pour démarrer votre prochain projet avec nous ? Génial ! Appelons-nous ou envoyez-nous un e-mail et nous revenons vers vous aussi vite que possible ! </p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x wow bounceIn"></i>
                <p>123-456-6789</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div id="map_wrapper" style="height: 550px;">
                <div id="map_canvas" style="width:100%; height:100%"></div>
            </div>
        </div>
    </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<script>
    var markers = [
        {% for location in site.data.office_locations %}
            ['{{ location.name }}', {{ location.latitude }}, {{ location.longitude }}]
            {% unless forloop.last %},{% endunless %}
        {% endfor %}
    ];
</script>

<script>
    var map;

    function initialize() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap',
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#aee2e0"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#abce83"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#769E72"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#7B8758"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#EBF4A4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#8dab68"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#5B5B3F"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ABCE83"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#A4C67D"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#9BBF72"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#EBF4A4"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#87ae79"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#7f2200"},{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"on"},{"weight":4.1}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#495421"}]},{"featureType":"administrative.neighborhood","elementType":"labels","stylers":[{"visibility":"off"}]}]

        };

        // Display a map on the page
        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        map.setTilt(45);

        // Loop through our array of markers and place each one on the map  
        for (var i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(5);
            google.maps.event.removeListener(boundsListener);
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
{% endraw %}
{% endhighlight %}

Et voilà, nous avons une carte magnifique qui affiche tous nos bureaux dans le monde.

![Office](/img/guide/data/map.png)

Nos clients peut aller sur l'onglet collections, cliquer sur General Data et avoir une belle interface pour mettre à jour les implantations de nos bureaux.

![CSV](/img/guide/data/csv.png)
