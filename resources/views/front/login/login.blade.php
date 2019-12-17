@extends('front.layout.master')

    @section('additional-css')
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
    {!! Html::style('css/front/register.css') !!}
    {!! Html::style('css/front/modal.css') !!}

    @endsection

    @section('content')
    <section class="header_page">
      <div class="image_header">
        <img src="{!! url('/image/front/images/fond.jpg') !!}" class="img_fond" alt="" />
        <div class="description_header">
          <div class="text_header">
              <h2>SE CONNECTER</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="inscription">
      <div class="content_register">
        <div class="bloc_description">
          <div class="background_image_bande">
            <div class="title_inscritpion">
              <label for="" class="title">UN CHANTIER A REALISER ?</label>
              <label for="" class="title">Trouvez rapidement le meilleur artisan le plus proche pour tous vos travaux de construction, de rénovation ou d’aménagement.</label>
            </div>

            <div class="citation_inscription">
              <ul>
                <li>Fournissez les informations nécessaires sur votre chantier</li>
                <li>Complétez vos renseignements personnels</li>
                <li>Recevez jusqu’à 5 devis des artisans les mieux qualifiés</li>
                <li>Choisissez le professionnel qui vous convient</li>
              </ul>
            </div>
            <img src="{!! url('/image/front/images/fond9.jpg') !!}" class="img_fond_formulaire" alt="" />
          </div>
          <div class="item_publication">

          </div>

        </div>
        <div class="bloc_form">
          <!-- {{ route('login') }} -->
          <!-- url(config('adminlte.login_url', 'login')) -->
          <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="item_formulaire">
            <label for="" class="title_inscription">Se connecter en tant que Professionnels</label>
            <div class="sparated_form_title">
              <div class="separate"></div>
            </div>

            <div class="formular_item">
              <label for="" class="label_form">Email*</label>
              <input type="email" class="input_form" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Mot de passe*</label>
              <input type="password" class="input_form" name="password" required autocomplete="current-password">
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>

            <div class="btn_form">
              <button type="submit" name="button" class="formular_button btn_artisan">SE CONNECTER  </button>
            </div>
            <div class="text-center forget-password">
              <a  class="modal_btn">Mot de passe oublié</a>
              <!-- <a href="{{route('recuperation')}}" class="">Mot de passe oublié</a> -->
            </div>
            
          </div>
        </form>
        </div>
      </div>
    </section>
    <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="">
      <form method="POST" action="{{route('reinit_mdp')}}">
        {{ csrf_field() }}
          <label for="" class="title_inscription">Entrez votre addresse mail</label>

          <div class="formular_item">
            <input type="hidden" name="url" value="{{route('recuperation')}}">
            <input type="email" class="input_form" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          </div>

          <div class="btn_form">
            <button type="submit" name="button" class="formular_button btn_artisan">Valider </button>
          </div>
      </form>
    </div>

  </div>

</div>
@endsection

@section('additional-script')
  <script type="text/javascript"> 
    $('.bloc_form').on('click','.modal_btn',function(){
      $('#myModal').css("display","block");
    });

    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
@endsection
