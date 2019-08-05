@extends('front.layout.master')

    @section('additional-css')
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
    {!! Html::style('css/front/register.css') !!}

    @endsection

    @section('content')
    <section class="header_page">
      <div class="image_header">
        <img src="{!! url('/image/front/images/fond14.jpg') !!}" class="img_fond" alt="" />
        <div class="description_header">
          <div class="text_header">
              <h2>S'INSCRIRE GRATUITEMENT</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="inscription">
      <div class="content_register">
        <div class="bloc_description">
          <div class="background_image_bande">
            <div class="title_inscritpion">
              <label for="" class="title">Professionnels du bâtiment,</label>
              <label for="" class="title">accélérez votre activité commerciale !</label>
            </div>

            <div class="citation_inscription">
              <ul>
                <li>Recevez des opportunités de chantiers ciblées selon votre activité et zone d'intervention</li>
                <li>Gardez le contrôle de votre budget prospection et payez au réel de votre consommation</li>
                <li>Remplissez simplement et rapidement votre carnet de commandes</li>
              </ul>
            </div>
            <img src="{!! url('/image/front/images/fond3.jpg') !!}" class="img_fond_formulaire" alt="" />
          </div>
          <div class="item_publication">

          </div>

        </div>
        <div class="bloc_form">
          <div class="item_formulaire">
            <label for="" class="title_inscription">Inscription Gratuite pour les Professionnels</label>
            <div class="sparated_form_title">
              <div class="separate"></div>
            </div>

            <div class="formular_item">
              <label for="" class="label_form">Nom</label>
              <input type="text" class="input_form" name="" value="" placeholder="Nom">
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Prénom</label>
              <input type="text" class="input_form" name="" value="" placeholder="Prénom">
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Email*</label>
              <input type="text" class="input_form" name="" value="" placeholder="Email">
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Mot de passe*</label>
              <input type="password" class="input_form" name="" value="" placeholder="Mot de passe">
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Confirmer votre mot de passe*</label>
              <input type="password" class="input_form" name="" value="" placeholder="Confirmer votre mot de passe">
            </div>

            <div class="btn_form">
              <button type="button" name="button" class="formular_button btn_artisan">ENREGISTRER</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection

    @section('additional-script')

    @endsection
