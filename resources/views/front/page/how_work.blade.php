@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/how_work.css') !!}
      {!! Html::style('css/front/how_work_responsive.css') !!}
  @endsection

  @section('content')

  <section class="header_page">
    <div class="image_header">
      <img src="{!! url('/image/front/images/fond18.jpg') !!}" class="img_fond" alt="" />
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
          <img src="{!! url('/image/front/how_work/how2.jpg') !!}" class="" alt="" />
        </div>
        <div class="text_how_work">
          <label for="" class="title_how_work">Je decris mon projet </label>
          <label for="" class="text_descr">Vous recevrez jusqu'à 5 devis</label>
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
          <label for="" class="title_how_work">Nos professionnels qualifiés vous contacte</label>
          <label for="" class="text_descr"></label>
          <!-- Accédez à toutes les demandes détaillées -->
        </div>
      </div>
      <div class="separator_item">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="how_work_item">
        <div class="image_liste_work">
          <img src="{!! url('/image/front/how_work/how1.jpg') !!}" class="" alt="" />
        </div>
        <div class="text_how_work">
          <label for="" class="title_how_work">Choisissez votre artisans </label>
          <label for="" class="text_descr">Selon la qualité prix </label>
        </div>
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
