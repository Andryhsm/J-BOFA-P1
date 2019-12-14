@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/front/project_available.css') !!}
      {!! Html::style('compiled_css/account/home.css') !!}
    @endsection

    @section('banner')
      <div class="header_page">
        <div class="image_header">
          <img src="{!! url('/image/front/images/fond4.jpg') !!}" class="img_fond" alt="" />
          <div class="description_header">
            <div class="text_header">
                <h2>MON ESPACE</h2>
            </div>
          </div>
        </div>
      </div>
    @endsection

    @section('side_nav')
      <div class="nav_bar">
        <div class="description_user">
          <div class="image_user">
            <img src="{!! url('/image/front/user/user.png') !!}" class="" alt="" />
          </div>
          <div class="user_description">
            <label for="" class="name">AZL ELECTRICITE</label>
            <label for="" class="user_work">Electrician</label>
            <div class="evaluation">
              <div class="liste_star">
                <img src="{!! url('/image/front/icones/star.svg') !!}" class="" alt="" />
                <img src="{!! url('/image/front/icones/star.svg') !!}" class="" alt="" />
                <img src="{!! url('/image/front/icones/star.svg') !!}" class="" alt="" />
                <img src="{!! url('/image/front/icones/star_g.svg') !!}" class="" alt="" />
                <img src="{!! url('/image/front/icones/star_g.svg') !!}" class="" alt="" />
              </div>
              <label for="" class="number_star">(0 avis)</label>
            </div>
          </div>
        </div>
      </div>

      @include('artisan.layout.side_map')
    @endsection

    @section('content')
        @include('artisan.page.project_accepted.accepted')
    @endsection

    @section('additional-script')
    <script type="text/javascript" src="javascripts/jquery.googlemap.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKwbmXbI2xTnvbxrQTL7W8UEL7RXXKBns"></script>
    
    <script type="text/javascript"> 
      $(function() {
        $("#mymap").googleMap();
        $("#mymap").addMarker({
          coords: [48.895651, 2.290569], // GPS coords
          url: 'http://www.tiloweb.com', // Link to redirect onclick (optional)
          id: 'marker1' // Unique ID for your marker
        });
      })
   
   
       </script>
    @endsection
