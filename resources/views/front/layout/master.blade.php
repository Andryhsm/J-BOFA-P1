<!DOCTYPE html>
<html>
  <head>
    	<title>Front Page | J-BOFA-P1</title>
    	<meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Landing PAGE Html5 Template">
      <meta name="keywords" content="landing,startup,flat">
      <meta name="author" content="Made By GN DESIGNS">

      {!! Html::style('js/front/vendor/bootsnav_files/skins/color.css') !!}
      {!! Html::style('js/front/vendor/bootsnav_files/css/animate.css') !!}
      {!! Html::style('js/front/vendor/bootsnav_files/css/bootsnav.css') !!}
      {!! Html::style('js/front/vendor/bootsnav_files/css/overwrite.css') !!}
      {!! Html::style('js/front/vendor/owl-carousel/owl.carousel.css') !!}
      {!! Html::style('js/front/vendor/owl-carousel/owl.theme.css') !!}
      {!! Html::style('js/front/vendor/owl-carousel/owl.transitions.css') !!}
      {!! Html::style('js/front/vendor/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css') !!}
      <!--// ICONS //-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// BOOTSTRAP & Main //-->
    {!! Html::style('css/front/vendor/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css') !!}
    {!! Html::style('css/main.css') !!}
      <!-- Style CSS -->

      <meta name="csrf-token" content="{{ csrf_token() }}">
          @yield('additional-css')

      <!-- End Style CSS -->
  </head>


  <body>
          @include('front.layout.header')
          @yield('content')
          @include('front.layout.footer')


      <!-- Modal -->

        <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel">Sign In</h4>
                    </div>
                    <div class="modal-body">
                        <form class="signup-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="User Name" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Password" required="required">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-blue btn-block">Log In</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer text-center">
                        <a href="#">Forgot your password /</a>
                        <a href="#">Signup</a>
                    </div>
                </div>
            </div>
        </div>


    <!-- Fin de la page -->
    <script type="text/javascript">
        // partie réservé au variable
        // end partie réservé au variable
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Script -->
    {!! Html::script('css/front/vendor/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js') !!}
    {!! Html::script('js/front/vendor/owl-carousel/owl.carousel.min.js') !!}
    {!! Html::script('js/front/vendor/bootsnav_files/js/bootsnav.js') !!}
    {!! Html::script('js/front/vendor/typed.js-master/typed.js-master/dist/typed.min.js') !!}
    <script src="https://maps.googleapis.com/maps/api/js"></script>

    {!! Html::script('js/front/vendor/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js') !!}
    {!! Html::script('js/main.js') !!}
          <!-- ajout script -->
            @yield('additional-script')
          <!-- end ajout script -->

    <!-- End Script -->

  </body>
</html>
