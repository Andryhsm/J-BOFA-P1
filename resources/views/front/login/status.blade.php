
@extends('front.layout.master')

    @section('additional-css')
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
    {!! Html::style('css/front/register.css') !!}
    {!! Html::style('css/front/modal.css') !!}
    {!! Html::style('compiled_css/default.css') !!}

    @endsection

    @section('content')
    <section class="header_page">
      <div class="image_header">
        <img src="{!! url('/image/front/images/fond.jpg') !!}" class="img_fond" alt="" />
        <div class="description_header">
          <div class="text_header">
              <h2>E-ARTISANS.FR</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="inscription" id="login-wrapper">
      <div class="content_register d-flex justify-content-center d-flex">
        <!-- <div class="bloc_description">
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

        </div> -->
        <div class="bloc_form">
          <!-- {{ route('login') }} -->
          <!-- url(config('adminlte.login_url', 'login')) -->
          <div class="item_formulaire">
            <label for="" class="title_inscription">Bonjour  </label>
            <div class="sparated_form_title">
              <div class="separate"></div>
            </div>

            <div class="formular_item">
              <label for="" class="label_form">Un e-mail vous a été envoyé. Suivez les instructions pour confirmer votre inscription.</label>
            </div>
            <div class="btn_form text-center forget-password">
              <a  class="modal_btn" style="width: 100%;" href="{{route('accueil')}}">
                <button type="button" class="btn_artisan">Retour à l'accueil</button>
              </a>
            </div>
            
          </div>
        </div>
      </div>
    </section>
@endsection

@section('additional-script')
@endsection
