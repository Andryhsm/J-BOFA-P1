@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/admin/profil.css') !!}
      {!! Html::style('css/admin/service.css') !!}
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
    	<div class=" service_page">
	        
    	</div>
    @endsection

    @section('additional-script')
    @endsection
