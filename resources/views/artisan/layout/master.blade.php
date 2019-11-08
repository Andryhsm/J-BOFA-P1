<!DOCTYPE html>
<html>
  <head>
    	<title>Front Page | 123-ARTISAN</title>
    	<meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="author" content="Colorlib">
      <meta name="description" content="#">
      <meta name="keywords" content="#">
  	  {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

      <!--// ICONS //-->

    <!--// BOOTSTRAP & Main //-->
    {!! Html::style('css/front/bootstrap.min.css') !!}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    {!! Html::style('css/front/header_footer_page.css') !!}
    {!! Html::style('css/front/style.css') !!}
    {!! Html::style('css/admin/main.css') !!}
    {!! Html::style('css/front/connexion.css') !!}
    {!! Html::style('css/front/connexion_responsive.css') !!}
    <!-- Style CSS -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('additional-css')
    @toastr_css

    <!-- End Style CSS -->
  </head>


  <body>
    @include('artisan.layout.header')
    @yield('banner')
    @include('artisan.layout.menu')
    <div class="content_page">
      <div class="pages">
        <div class="navbar_j">
          @yield('side_nav')
        </div>
        <div class="flex_one">
          @yield('content')
        </div>        
      </div>
    </div>
    @include('front.layout.footer')
    {!! Html::script('js/front/jquery-3.2.1.min.js') !!}
    {!! Html::script('js/front/popper.min.js') !!}
    {!! Html::script('js/front/bootstrap.min.js') !!}
    {!! Html::script('js/front/swiper.min.js') !!}
    {!! Html::script('js/front/index.js') !!}
    {!! Html::script('js/artisan/header.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js') !!}
    {!! Html::script('js/artisan/profil.js') !!}

          <!-- ajout script -->
            @yield('additional-script')
          <!-- end ajout script -->
          <!-- Fin de la page -->
          <script>
                $(window).scroll(function() {
                    // 100 = The point you would like to fade the nav in.

                    if ($(window).scrollTop() > 100) {

                        $('.fixed').addClass('is-sticky');

                    } else {

                        $('.fixed').removeClass('is-sticky');

                    };
                });
            </script>
            <script type="text/javascript">
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });
                var base_url = {!! "'".URL::to('/')."/'" !!};
            </script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    loop: true,
                    loopFillGroupWithBlank: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            </script>
            <script>
                if ($('.image-link').length) {
                    $('.image-link').magnificPopup({
                        type: 'image',
                        gallery: {
                            enabled: true
                        }
                    });
                }
                if ($('.image-link2').length) {
                    $('.image-link2').magnificPopup({
                        type: 'image',
                        gallery: {
                            enabled: true
                        }
                    });
                }
            </script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyAwqmlxmd3Fabvf8BRSoOlH6wv-Fc5yvCA"></script> -->
            <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?sensor=false"
  type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script> -->
            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr66ahbzw1h4OFCFZAWuqf8IB3NSXkmWs&amp;size=360x200&amp;callback=initMap" async="" defer=""></script>

            <script type="text/javascript">


              var locations = <?php //print_r(json_encode($locations)) ?>;

              console.log(locations);
              var mymap = new GMaps({
                el: '#mymap',
                lat: 21.170240,
                lng: 72.831061,
                zoom:6
              });


              $.each( locations, function( index, value ){
                mymap.addMarker({
                  lat: value.ville_latitude_deg,
                  lng: value.ville_longitude_deg,
                  title: value.ville_nom,
                  click: function(e) {
                    alert('This is '+value.ville_nom+', gujarat from India.');
                  }
                });
             });


            </script> -->
            <!-- <script type="text/javascript">
              //<![CDATA[

              var map;
              var markers = {{-- json_encode($locations) --}}; //this should dump a javascript array object which does not need any extra interperting.
              var marks = []; //just incase you want to be able to manipulate this later

              function load() {

                  map = new google.maps.Map(document.getElementById('map'), {
                      center: {lat: 45.327168, lng: 14.442902},
                      zoom: 13
                  });           

                  for(var i = 0; i < markers.length; i++){
                      marks[i] = addMarker(markers[i]);
                  }
              }

              function addMarker(marker){
                  //var sadrzaj = marker.nazivMarkera;
                  //var adresa = marker.adresa;
                  //var grad = marker.nazivGrada;
                  //var postanskibroj = marker.postanski_broj;
                  var zupanija = marker.ville_nom;

                  var html = "<b>" + sadrzaj + "</b> <br/>" + adresa +",<br/>"+postanskibroj+" "+grad+",<br/>"+zupanija;


                  var markerLatlng = new google.maps.LatLng(parseFloat(marker.ville_latitude_deg),parseFloat(marker.ville_longitude_deg));


                  var mark = new google.maps.Marker({
                      map: map,
                      position: markerLatlng,
                  });

                  var infoWindow = new google.maps.InfoWindow;
                  google.maps.event.addListener(mark, 'click', function(){
                      infoWindow.setContent(html);
                      infoWindow.open(map, mark);
                  });

                  return mark;
              }

              function doNothing(){}
              //]]>
            </script> -->

            <script type="text/javascript">
        $(function () {
            $('.select2-container').removeClass('form-control').width('100%');
        });

        function initMap() {
            var map = new google.maps.Map(document.getElementById('mymap'), {
                zoom: 9,
                center: new google.maps.LatLng('49.4392', '1.08909'),
                mapTypeId: google.maps.MapTypeId.TERRAIN //?
            });
            var rectangle = new google.maps.Rectangle({
                strokeColor: '#d5732e',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillOpacity: 0.15,
                map: map,
                bounds: new google.maps.LatLngBounds(
                    new google.maps.LatLng('48.991624430657', '0.39118129879215'),
                    new google.maps.LatLng('49.886775569343', '1.7869987012079')
                )
            });
            var infowindow = new google.maps.InfoWindow({
                content: '<h5>ROUEN (76000)</h5>'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng('49.4392', '1.08909'),
                map: map,
                title: 'ROUEN',
            });
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr66ahbzw1h4OFCFZAWuqf8IB3NSXkmWs&amp;size=360x200&amp;callback=initMap" async defer></script>
          <!-- Script -->
      @toastr_js
    @toastr_render
    <!-- End Script -->

  </body>
</html>
