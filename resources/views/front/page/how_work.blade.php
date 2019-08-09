@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/how_work.css') !!}
  @endsection

  @section('content')

  <section class="header_page">
    <div class="image_header">
      <img src="{!! url('/image/front/images/fond15.jpg') !!}" class="img_fond" alt="" />
      <div class="description_header">
        <div class="text_header">
            <h2>Comment ça marche ?</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="content_page_how_work">
    <label for="" class="title_content">En 5 minutes, contactez les particuliers autour de vous !</label>
    <div class="item_liste_how_work">
      <div class="how_work_item">
        <div class="image_liste_work">
          <img src="{!! url('/image/front/how_work/how1.jpg') !!}" class="" alt="" />
        </div>
        <div class="text_how_work">
          <label for="" class="title_how_work">Créez votre compte</label>
          <label for="" class="text_descr">Sélectionnez vos métiers et votre zone géographique</label>
        </div>
      </div>
      <div class="separator_item">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="how_work_item">
        <div class="image_liste_work">
          <img src="{!! url('/image/front/how_work/how3.jpg') !!}" class="" alt="" />
        </div>
        <div class="text_how_work">
          <label for="" class="title_how_work">Consultez les chantiers</label>
          <label for="" class="text_descr">Accédez à toutes les demandes détaillées</label>
        </div>
      </div>
      <div class="separator_item">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="how_work_item">
        <div class="image_liste_work">
          <img src="{!! url('/image/front/how_work/how2.jpg') !!}" class="" alt="" />
        </div>
        <div class="text_how_work">
          <label for="" class="title_how_work">Contactez et signez </label>
          <label for="" class="text_descr">Nos professionnels signent 1 à 2 projets sur 5</label>
        </div>
      </div>

    </div>
  </section>

  <section class="content_avantages">
    <label for="" class="title_content">Quels avantages ?</label>
    <div class="item_avantages">
      <div class="description_avantages">
        <div class="title_avantages">
          <label for="" class="number_avantages">1</label>
          <label for="" class="text_title_avt">Des chantiers qualifiés</label>
        </div>
        <ul class="list_avantages">
          <li>Trouvez de vrais chantiers, <strong>validés par notre Service Clients</strong> </li>
          <li><strong>Un commercial dédié </strong> vous aidera à concrétiser vos projets  </li>
        </ul>
      </div>
      <div class="images_avantages">
        <img src="{!! url('/image/front/images/fond1.jpg') !!}" class="" alt="" />
      </div>
    </div>
    <div class="item_avantages row_reverse_item">
      <div class="description_avantages">
        <div class="title_avantages">
          <label for="" class="number_avantages">2</label>
          <label for="" class="text_title_avt">Une présence sur Internet</label>
        </div>
        <ul class="list_avantages">
          <li>Améliorez <strong>votre visibilité sur Internet </strong> et votre réputation grâce aux avis clients</li>
          <li>Accédez à une nouvelle clientèle et <strong> développez votre réseau </strong></li>
        </ul>
      </div>
      <div class="images_avantages">
        <img src="{!! url('/image/front/how_work/how4.jpg') !!}" class="" alt="" />
      </div>
    </div>
    <div class="item_avantages">
      <div class="description_avantages">
        <div class="title_avantages">
          <label for="" class="number_avantages">3</label>
          <label for="" class="text_title_avt">Un suivi des projets</label>
        </div>
        <ul class="list_avantages">
          <li>Suivez <strong> l’avancement des projets</strong> dans votre espace personnel</li>
          <li>Utilisez <strong> l’application mobile</strong> pour gérer vos projets quand vous êtes sur un chantier  </li>
        </ul>
      </div>
      <div class="images_avantages">
        <img src="{!! url('/image/front/how_work/how5.jpg') !!}" class="" alt="" />
      </div>
    </div>
  </section>

  <section class="inscription_footer">
    <a href="{{ url('inscription') }}" class="inscription_link">S'inscrire gratuitement</a>

    <div class="contact_footer">
      <strong>Une question ? Un renseignement ? </strong>&nbsp; <p>Contactez-nous par téléphone : </p>&nbsp;
      <label for="" class="tel_contact"> +261 88 42 455 28</label>&nbsp;
      <p> ou par E-mail : </p>&nbsp; <label for="" class="tel_contact"> loremipsum@dolorethasmany.com</label>
    </div>

  </section>
  @endsection
  @section('additional-script')

  @endsection
