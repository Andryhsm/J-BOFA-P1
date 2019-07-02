<!DOCTYPE html>
<html>
  <head>
    	<title>Front Page | J-BOFA-P1</title>
    	<meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

      <!-- Style CSS -->
          {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}
          {!! Html::style('css/front/generale/style.css') !!}
          {!! Html::style('css/front/vendor/now-ui-kit/bootstrap.min.css') !!}
          {!! Html::style('css/front/vendor/now-ui-kit/bootstrap.min.css.map') !!}
          {!! Html::style('css/front/vendor/now-ui-kit/now-ui-kit.css.map') !!}
          {!! Html::style('css/front/vendor/now-ui-kit/now-ui-kit.css') !!}
          {!! Html::style('css/front/vendor/now-ui-kit/now-ui-kit.min.css') !!}

          <meta name="csrf-token" content="{{ csrf_token() }}">
          @yield('additional-css')

      <!-- End Style CSS -->
  </head>


  <body class="index-page sidebar-collapse">
    <div class="master">
        <div class="header_page">
          @include('front.layout.header')
        </div>
        <div class="container_page">
          @yield('content')
        </div>
        <div class="footer_page">
          @include('front.layout.footer')
        </div>
    </div>




    <!-- Fin de la page -->
    <script type="text/javascript">
        // partie réservé au variable
        // end partie réservé au variable
    </script>
    <script>
      $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
      });

      function scrollToDownload() {

        if ($('.section-download').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-download').offset().top
          }, 1000);
        }
      }
    </script>
    <!-- Script -->
    {!! Html::script('js/front/element.js') !!}
    {!! Html::script('js/front/vendor/now-ui-kit/core/bootstrap.min.js') !!}
    {!! Html::script('js/front/vendor/now-ui-kit/core/jquery.min.js') !!}
    {!! Html::script('js/front/vendor/now-ui-kit/core/popper.min.js') !!}

    {!! Html::script('js/front/vendor/now-ui-kit/now-ui-kit.js') !!}
    {!! Html::script('js/front/vendor/now-ui-kit/now-ui-kit.js.map') !!}
    {!! Html::script('js/front/vendor/now-ui-kit/now-ui-kit.min.js') !!}

    {!! Html::script('js/front/vendor/now-ui-kit/plugins/bootstrap-datepicker.js') !!}
    {!! Html::script('js/front/vendor/now-ui-kit/plugins/bootstrap-switch.js') !!}
    {!! Html::script('js/front/vendor/now-ui-kit/plugins/nouislider.min.js') !!}

          <!-- ajout script -->
            @yield('additional-script')
          <!-- end ajout script -->

    <!-- End Script -->

  </body>
</html>
