<div class="nav_bar">
  <div class="nav_maps">
    <label for="" class="title_maps">Ma Zone Géographique</label>
    <div class="localisation">
      <label for="" class="bold_localise">50 km</label>
      <label>autour de </label>
      <label for="" class="bold_localise_to">ROUEN</label>
      <label>Si vous le souhaitez, vous pouvez définir une zone kilométrique autour d'une ville donnée.</label>
    </div>
      <div id="map_wrapper">
      <div id="map_canvas" class="mapping"></div>
  </div>

    <div class="maps_location">
      <!-- <img src="{!! url('/image/artisan/maps.png') !!}" class="" alt="maps" /> -->
      <div id="map"></div>
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
       <script type="text/javascript">
        var locations = [
            [
                "New Mermaid",
                36.9079,
                -76.199,
                1,
                "Georgia Mason",
                "",
                "Norfolk Botanical Gardens, 6700 Azalea Garden Rd.",
                "coming soon"
            ],
            [
                "1950 Fish Dish",
                36.87224,
                -76.29518,
                2,
                "Terry Cox-Joseph",
                "Rowena's",
                "758 W. 22nd Street in front of Rowena's",
                "found"
            ],
            [
                "A Rising Community",
                36.95298,
                -76.25158,
                3,
                "Steven F. Morris",
                "Judy Boone Realty",
                "Norfolk City Library - Pretlow Branch, 9640 Granby St.",
                "found"
            ],
            [
                "A School Of Fish",
                36.88909,
                -76.26055,
                4,
                "Steven F. Morris",
                "Sandfiddler Pawn Shop",
                "5429 Tidewater Dr.",
                "found"
            ],
            [
                "Aubrica the Mermaid (nee: Aubry Alexis)",
                36.8618,
                -76.203,
                5,
                "Myke Irving/ Georgia Mason",
                "USAVE Auto Rental",
                "Virginia Auto Rental on Virginia Beach Blvd",
                "found"
            ]
        ]

            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 12,
              // center: new google.maps.LatLng(-33.92, 151.25),
              center: new google.maps.LatLng(36.8857, -76.2599),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {  
              marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
              });

              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0], locations[i][6]);
                  infowindow.open(map, marker);
                }
              })(marker, i));
            }


        /*var locations = <?php //print_r(json_encode($locations)) ?>;


        var mymap = new new google.maps.Map(document.getElementById('mymap'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });


        $.each( locations, function( index, value ){
          mymap.addMarker({
            lat: value.ville_latitude_deg ,
            lng: value.ville_longitude_deg,
            title: value.ville_nom,
            click: function(e) {
              alert('This is '+value.ville_nom+', gujarat from India.');
            }
          });
       });*/


      </script>

      <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1NMlHcCPpSQ2hv2OUWmh_t72vd6bYy5Y&callback=initMap"
    async defer></script> -->
    <!-- <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=40.7127837,-74.0059413&amp;key=AIzaSyD1NMlHcCPpSQ2hv2OUWmh_t72vd6bYy5Y"></iframe> -->
    </div>
    <div class="btn_foot_list">
      <button type="button" name="" class="btn_view_more_list">Modifier ma zone de prospection</button>
    </div>
  </div>
</div>