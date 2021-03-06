<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<title>E-artisans</title>
    	
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Colorlib">
      <meta name="description" content="Vous pouvez définir une zone kilométrique autour d'une ville donnée.">
      <meta name="keywords" content="#">
  	  {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

      <!--// ICONS //-->
    <!--// BOOTSTRAP & Main //-->
    {!! Html::style('css/front/bootstrap.min.css') !!}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    {!! Html::style('css/front/header_footer_page.css') !!}
    {!! Html::style('css/front/style.css') !!}
    {!! Html::style('css/front/connexion.css') !!}
    {!! Html::style('compiled_css/account/main.css') !!}
    {!! Html::style('compiled_css/responsive/artisan.css') !!}
    
    
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
        <div class="artisan_content_wrapper flex_one">
          @yield('content')
        </div>        
      </div>
    </div>
    @include('front.layout.footer')
    <!-- {!! Html::script('js/front/jquery-3.2.1.min.js') !!} -->
    {!! Html::script('js/front/popper.min.js') !!}
    <!-- {!! Html::script('js/front/bootstrap.min.js') !!} -->
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

        $(document).ready(function() {
          $('.nav_menu').on('click','.menu-link',function(event){
            var value=$(this).data('val');
            if(value==0 || value>12){
              event.preventDefault();
              $('#artisan-modal-menu').toggleClass('no-fade');
            }
            
            // $('#artisan-modal-menu-message').html($(this).data('message'))
          });
          $('.dropdown_menus_resp').on('click','li',function(event){
            var value=$(this).data('val');
            if(value==0 || value>12){
              event.preventDefault();
              $('#artisan-modal-menu').toggleClass('no-fade');
            }
            
            // $('#artisan-modal-menu-message').html($(this).data('message'))
          })

          $('.modal').on('click', '#close-artisan-modal-menu',function(event){
            event.preventDefault();
            $('#artisan-modal-menu').toggleClass('no-fade');
          })
        })

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
    <script type="text/javascript">
        // $(function () {
        //     $('.select2-container').removeClass('form-control').width('100%');
        // });
        // $('.nav_menu').on('click','.menus',function(){
        //     var diff = $(this).data('val');
        //     if(diff==0){
        //         alert('Vous n\'êtes pas un pro');
        //     }
        //     if(diff>60){
        //         alert('Veuillez renouveller votre abonnement!');
        //     }
        // })
    </script>
          <!-- Script -->
      @toastr_js
    @toastr_render
    <!-- End Script -->

  </body>
</html>
