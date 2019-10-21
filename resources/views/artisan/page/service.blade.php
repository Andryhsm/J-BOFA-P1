@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/admin/profil.css') !!}
      {!! Html::style('css/admin/service.css') !!}
    @endsection

    @section('side_nav')
      <div class="nav_bar">
        <ul class="liste_service">
          <li class="d-flex justify-content-between align-items-center">
          	<label class="title_service0">ILS ONT CRÉÉ LEUR SITE</label>
          	<a href="" class="icones_more_servie d-flex justify active"><i class="fa fa-caret-right"></i></a>
          </li>
          <li class="d-flex justify-content-between align-items-center">
          	<label class="title_service0">ACCOMPAGNEMENT JURIDIQUE</label>
          	<a href="" class="icones_more_servie"><i class="fa fa-caret-right"></i></a>
          </li>
          <li class="d-flex justify-content-between align-items-center">
          	<label class="title_service0">DOCUMENTS JURIDIQUES</label>
          	<a href="" class="icones_more_servie"><i class="fa fa-caret-right"></i></a>
          </li>
          <li class="d-flex justify-content-between align-items-center">
          	<label class="title_service0">CABINET EXPERT COMPTABLE</label>
          	<a href="" class="icones_more_servie"><i class="fa fa-caret-right"></i></a>
          </li>
        </ul>
      </div>

      @include('artisan.layout.side_map')
    @endsection

    @section('content')
    	<div class="service_page position-relative">
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
                    <label for="" class="text_description">plus de devis en clients</label>
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
    	</div>
    @endsection

    @section('additional-script')
    @endsection
