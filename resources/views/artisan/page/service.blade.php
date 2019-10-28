@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/admin/profil.css') !!}
      {!! Html::style('css/admin/service.css') !!}
    @endsection

    @section('side_nav')
      <div class="nav_bar">
        <ul class="liste_service">
          <li class="d-flex justify-content-between align-items-center item_service current_flex" data-tab="service4">
          	<label class="title_service0">ILS ONT CRÉÉ LEUR SITE</label>
          	<a class="icones_more_servie d-flex justify active"><i class="fa fa-caret-right"></i></a>
          </li>
          <li class="d-flex justify-content-between align-items-center item_service" data-tab="service3">
          	<label class="title_service0">ACCOMPAGNEMENT JURIDIQUE</label>
          	<a class="icones_more_servie"><i class="fa fa-caret-right"></i></a>
          </li>
          <li class="d-flex justify-content-between align-items-center item_service" data-tab="service2">
          	<label class="title_service0">DOCUMENTS JURIDIQUES</label>
          	<a class="icones_more_servie"><i class="fa fa-caret-right"></i></a>
          </li>
          <li class="d-flex justify-content-between align-items-center item_service" data-tab="service1">
          	<label class="title_service0">CABINET EXPERT COMPTABLE</label>
          	<a class="icones_more_servie"><i class="fa fa-caret-right"></i></a>
          </li>
        </ul>
      </div>

      @include('artisan.layout.side_map')
    @endsection

    @section('content')
    	<div class="service_page position-relative">
        <div class="pagination_service current" id="service4">
           <div class="header_page_service position-absolute">
              <img src="{!! url('/image/artisan/service/fond_page.png') !!}" alt="" class="image_header">
            </div>
            <div class="content_page_service">
              <div class="item_title_service d-flex justify-content-center align-items-center">
                <label class="title_service">ILS ONT CRÉÉ LEUR SITE</label>
              </div>
              <div class="item_service d-flex justify-content-between">
                  <div class="form_item_service d-flex justify-content-center align-items-center">
                    <div class="img_representation">
                        <img src="{!! url('/image/artisan/service/loupi.jpg') !!}" alt="">
                    </div>
                    <div class="description_representation">
                      <label for="" class="title_representation">RASSUREZ</label>
                      <label for="" class="text_description">les clients, ils vous cherchent sur Google</label>
                    </div>
                  </div>
                  <div class="form_item_service d-flex justify-content-center align-items-center">
                    <div class="img_representation">
                        <img src="{!! url('/image/artisan/service/icone1.png') !!}" alt="">
                    </div>
                    <div class="description_representation">
                      <label for="" class="title_representation">TRANSFORMEZ</label>
                      <label for="" class="text_description">plus de devis en clients, en qualités</label>
                    </div>
                  </div>
                  <div class="form_item_service d-flex justify-content-center align-items-center">
                    <div class="img_representation">
                        <img src="{!! url('/image/artisan/service/loup.png') !!}" alt="">
                    </div>
                    <div class="description_representation">
                      <label for="" class="title_representation">INFORMEZ</label>
                      <label for="" class="text_description">vos clients sur vos prestations</label>
                    </div>
                  </div>
              </div>

              <div class="item_video_service d-flex justify-content-between">
                <div class="form_place_video">
                  <div class="video_service">
                    <iframe src="https://www.youtube.com/watch?v=N7K59z9gi14&list=PL8JStPcpp3yqFNhm_JQ0KQKmu6d56hBJm" width="100%" frameborder="0" allowfullscreen></iframe> 
                  </div>
                </div>
                <div class="form_place_video">
                 <ul class="citation_video">
                   <li>Nous créons votre site de A à Z - vous n'avez rien à faire</li>
                   <li>Le site est compatible avec les mobiles et les tablettes</li>
                   <li>Ensuite, modifiez le vous-même, ou en nous appelant</li>
                   <li>Vous faites signer 6 devis sur 10 ? Passez à 8 grâce à un site rassurant !</li>
                 </ul>
                </div>
              </div>

              <div class="btn_separate_service">
                <button class="btn_service">Je crée mon site</button>
              </div>
            </div>
            <div class="liste_site_service">
              <label for="" class="title_site">ILS ONT CRÉÉ LEUR SITE</label>
              <div class="service_site d-flex justify-content-between align-items-center">
                <div class="form_item_site">
                  <img src="{!! url('/image/artisan/service/sites/site1.jpeg') !!}" alt="">
                  <label for="" class="title_site_absolute">123 Artisan</label>
                </div>
                <div class="form_item_site">
                  <img src="{!! url('/image/artisan/service/sites/site2.png') !!}" alt="">
                  <label for="" class="title_site_absolute">123 Artisan</label>
                </div>
                <div class="form_item_site">
                  <img src="{!! url('/image/artisan/service/sites/site3.png') !!}" alt="">
                  <label for="" class="title_site_absolute">123 Artisan</label>
                </div>
                <div class="form_item_site">
                  <img src="{!! url('/image/artisan/service/sites/site4.jpg') !!}" alt="">
                  <label for="" class="title_site_absolute">123 Artisan</label>
                </div>
                <div class="form_item_site">
                  <img src="{!! url('/image/artisan/service/sites/site5.jpg') !!}" alt="">
                  <label for="" class="title_site_absolute">123 Artisan</label>
                </div>
                <div class="form_item_site">
                  <img src="{!! url('/image/artisan/service/sites/site6.jpg') !!}" alt="">
                  <label for="" class="title_site_absolute">123 Artisan</label>
                </div>
              </div>
              <div class="btn_separate_service">
                <button class="btn_service">Je crée mon site</button>
              </div>
            </div>
        </div>

        <div class="pagination_service" id="service3">
          <div class="header_page_service position-absolute">
            <img src="{!! url('/image/artisan/service/fond_page2.png') !!}" alt="" class="image_header">
          </div>
          <div class="content_page_service">
            <div class="item_title_service d-flex justify-content-center align-items-center">
              <label class="title_service">ACCOMPAGNEMENT JURIDIQUE</label>
            </div>
            <div class="item_service d-flex justify-content-between">
                <div class="form_item_service d-flex justify-content-center align-items-center">
                  <div class="img_representation">
                      <img src="{!! url('/image/artisan/service/loupi.jpg') !!}" alt="">
                  </div>
                  <div class="description_representation">
                    <label for="" class="title_representation">SIMPLE</label>
                    <label for="" class="text_description">Votre juriste est joignable les jours ouvrés par email ou téléphone pour répondre à vos questions. Tous les documents juridiques sont accessibles sur le site Juritravail en quelques clics.</label>
                  </div>
                </div>
                <div class="form_item_service d-flex justify-content-center align-items-center">
                  <div class="img_representation">
                      <img src="{!! url('/image/artisan/service/icone1.png') !!}" alt="">
                  </div>
                  <div class="description_representation">
                    <label for="" class="title_representation">ACCESSIBLE</label>
                    <label for="" class="text_description">Vous n’avez pas les moyens d’embaucher un juriste ? Notre offre est faite pour vous ! Nos prix sont adaptés à la taille de votre structure.</label>
                  </div>
                </div>
                <div class="form_item_service d-flex justify-content-center align-items-center">
                  <div class="img_representation">
                      <img src="{!! url('/image/artisan/service/loup.png') !!}" alt="">
                  </div>
                  <div class="description_representation">
                    <label for="" class="title_representation">FIABLE</label>
                    <label for="" class="text_description">Nous avons plus de 15 ans d’expérience dans les démarches juridiques et avons aujourd’hui 300 clients qui ont souscrit à cette offre d’accompagnement.</label>
                  </div>
                </div>
            </div>
            <div class="description_representation">
              <label for="" class="title_representation">VOTRE JURISTE DÉDIÉ VOUS ACCOMPAGNE AU QUOTIDIEN DANS LA VIE DE VOTRE ENTREPRISE</label>
              <label for="" class="text_description">Dans votre métier il vous arrive d’avoir des problématiques juridiques à régler : embauche ou licenciement d’un salarié, contrats ou litiges avec vos fournisseurs, nouvelles réglementations à appliquer...</label>
              <label for="" class="text_description">Vous n’avez pas de juriste interne à votre entreprise et vous ne savez pas vers qui vous tourner pour poser vos questions ?</label>
              <label for="" class="text_description">Juritravail vous accompagne au quotidien dans toutes vos problématiques juridiques grâce à une offre spécialement dédié aux TPE / PME :</label>
            </div>
            <div class="item_video_service d-flex justify-content-between">
              
              <div class="form_place_video">
                <div class="video_service">
                  <iframe src="https://www.youtube.com/watch?v=N7K59z9gi14&list=PL8JStPcpp3yqFNhm_JQ0KQKmu6d56hBJm" width="100%" frameborder="0" allowfullscreen></iframe> 
                </div>
              </div>
              <div class="form_place_video">
               <ul class="citation_video">
                 <li>Posez toutes vos questions à votre juriste dédié : il est disponible tous les jours par email ou téléphone</li>
                 <li>Téléchargez en illimité tous les documents juridiques dont vous avez besoin (lettres, contrats...)</li>
                 <li>Vous rencontrez une situation conflictuelle ? Votre juriste vous met en relation avec un avocat</li>
               </ul>
              </div>
            </div>

            <div class="btn_separate_service">
              <button class="btn_service">Je découvre l'offre</button>
            </div>
          </div>
        </div>

        <div class="pagination_service" id="service2">
          je suis la 3eme page
        </div>

        <div class="pagination_service" id="service1">
          je suis la 4eme page
        </div>
	       
    	</div>
    @endsection

    @section('additional-script')
      {!! Html::script('js/artisan/service.js') !!}
    @endsection
