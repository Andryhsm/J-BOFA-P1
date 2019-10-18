@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/admin/profil.css') !!}
      {!! Html::style('css/admin/service.css') !!}
    @endsection

    @section('side_nav')
      <div class="nav_bar">
        <ul class="liste_service">
          <li>
          	<label class="title_service0">ILS ONT CRÉÉ LEUR SITE</label>
          	<a href="" class="icones_more_servie"><i class="fa fa-caret-right"></i></a>
          </li>
          <li>
          	<label class="title_service0">ACCOMPAGNEMENT JURIDIQUE</label>
          	<a href="" class="icones_more_servie"><i class="fa fa-caret-right"></i></a>
          </li>
          <li>
          	<label class="title_service0">DOCUMENTS JURIDIQUES</label>
          	<a href="" class="icones_more_servie"><i class="fa fa-caret-right"></i></a>
          </li>
          <li>
          	<label class="title_service0">CABINET EXPERT COMPTABLE</label>
          	<a href="" class="icones_more_servie"><i class="fa fa-caret-right"></i></a>
          </li>
        </ul>
      </div>

      @include('artisan.layout.side_map')
    @endsection

    @section('content')
    	<div class=" service_page">
	        
    	</div>
    @endsection

    @section('additional-script')
    @endsection
