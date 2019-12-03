<div class="nav_bar">
  <style type="text/css">
      #mymap {
          border:1px solid red;
          width: 100%;
          height: 500px;
      }
    </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- <script src="http://maps.google.com/maps/api/js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1NMlHcCPpSQ2hv2OUWmh_t72vd6bYy5Y"></script>
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
      <div id="mymap"></div>
      <script type="text/javascript">


        var locations = <?php print_r(json_encode($project_availables)) ?>;


        var mymap = new GMaps({
          el: '#mymap',
          lat: 46.4333 ,
          lng: 4.93333,
          zoom:6
        });


        $.each( locations, function( index, value ){
          mymap.addMarker({
            lat: value.ville_latitude_deg,
            lng: value.ville_longitude_deg,
            title: value.ville_nom,
            // click: function(e) {
            //   alert('This is '+value.ville_latitude_deg+' '+value.ville_longitude_deg);
            // }
          });
       });


      </script>
    <!-- <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=40.7127837,-74.0059413&amp;key=AIzaSyD1NMlHcCPpSQ2hv2OUWmh_t72vd6bYy5Y"></iframe> -->
    </div>
    <div class="btn_foot_list">
      <button type="button" name="" class="btn_view_more_list">Modifier ma zone de prospection</button>
    </div>
  </div>
</div>