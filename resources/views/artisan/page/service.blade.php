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
            <div class="item_title_service">
              <label class="title_service">ILS ONT CRÉÉ LEUR SITE</label>
            </div>
            <div class="item_service">
                <div class="form_item_service">
                  <div class="img_representation">
                      <img src="{!! url('/image/artisan/service/loupi.jpg') !!}" alt="">
                  </div>
                  <div class="description_representation">
                    <label for="" class="title_representation">RASSUREZ</label>
                    <label for="" class="text_description">les clients, ils vous cherchent sur Google</label>
                  </div>
                </div>
            </div>
          </div>
    	</div>
    @endsection

    @section('additional-script')
    @endsection
