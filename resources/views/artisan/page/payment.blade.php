@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/front/project_available.css') !!}
      {!! Html::style('compiled_css/account/home.css') !!}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
     {!! Html::style('css/front/stripe.css') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        .panel-title {
        display: inline;
        font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>
    <style type="text/css">
        .artisan-body {
            margin: 0;
            max-width: 400px;
            display: block;
        }

        .cgv_txt{

            height: 400px;
            overflow-y: scroll;
        }
        .artisan-email-page {
            display: -webkit-box;display: -ms-flexbox;display: flex;
            -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;
            -webkit-box-align: center;-ms-flex-align: center;align-items: center;
            -ms-flex-wrap: wrap;flex-wrap: wrap;
            max-width: 700px;
            margin: 40px   auto;
            background: #ffffff;
            padding: 0;
        }

        .objet{
            display: -webkit-box;display: -ms-flexbox;display: flex;
            -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;
            -webkit-box-align: center;-ms-flex-align: center;align-items: center;
            -ms-flex-wrap: wrap;flex-wrap: wrap;
        }

        .artisan-email-page * {
            font-family: Roboto;
            box-sizing: border-box;
        }

        .artisan-page-header {
            width: 100%;
            margin: 0 5px;
        }

        .artisan-page-content {
            width: 100%;
            margin: 0 15px;
        }

        .artisan-email-page p {
            margin: 0;
        }

        .artisan-date {
            width: 100%;
            text-align: center;
            color: #868686;
            font-size: 24px;
            margin-bottom: 15px!important;
        }

        .artisan-mail-title {
            width: 100%;
            max-width: 100%;
            padding: 20px;
            /*background: #23abdf;*/
            margin-bottom: 30px;
        }

        .artisan-mail-title p {
            width: 100%;
            text-align: center;
            color: #ff580c;
            font-size: 18px;
        }

        .artisan-mail-title p:not(:last-child) {
            margin-bottom: 8px;
        }

        .artisan-introduction-text {

        }

        .artisan-introduction-text p.artisan-hello {
            margin-bottom: 25px;
        }

        .artisan-introduction-text p {
            color: #818181;
            font-size: 15px;
            margin-bottom: 40px;
            line-height: 1.3;
        }

        .artisan-firma {
            width: 100%;
            margin-bottom: 45px;
        }

        .artisan-information {
            border: 2px solid #6e9bae;
            padding: 8px;
        }

        .artisan-information-wrapper {
            display: -webkit-box;display: -ms-flexbox;display: flex;
        }

        .artisan-information-wrapper:not(:last-child) {
            margin-bottom: 8px;
        }

        .artisan-information label {
            color: #407da8;
            font-weight: bold;
            width: 120px;
            text-align: right;
            margin-right: 8px;
        }

        .artisan-information span {
            color: #676767;
            font-size: 15px;
            font-weight: 400;
            text-transform: uppercase;
            -webkit-box-flex: 1;-ms-flex: 1;flex: 1;
        }

        .artisan-firma p {
            color: #787878;
            margin-bottom: 15px;
        }

        .artisan-mail-footer p {
            color: #787878;
            font-size: 15px;
            margin-bottom: 15px;
        }

    </style>
    @endsection

    @section('banner')
      <div class="header_page">
        <div class="image_header">
          <img src="{!! url('/image/front/images/fond4.jpg') !!}" class="img_fond" alt="" />
          <div class="description_header">
            <div class="text_header">
                <h2>ESPACE POUR DEVENIR UN DES MEMBRES PRO</h2>
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
        @include('artisan.page.stripePayment')
    @endsection

    @section('additional-script')
    <script type="text/javascript" src="javascripts/jquery.googlemap.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKwbmXbI2xTnvbxrQTL7W8UEL7RXXKBns"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
    <script type="text/javascript">
    $(function() {
        var $form         = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
            $inputs       = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid         = true;
            $errorMessage.addClass('hide');
    
            $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
        var $input = $(el);
        if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
        }
        });
    
        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
    
    });
    
    function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    
    });
    </script>
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

    <script type="text/javascript">
        $(document).ready(function() { 
            $('.content_page').on('click','#cgv',function(){
                $(this).closest('.form-row').siblings('#cgv_txt').find('#error').toggleClass('hide');
            });
        });
    </script>
    @endsection
