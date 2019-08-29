@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/admin/profil.css') !!}
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
    	<div class="pages profil_page">
    		<div class="nav_bar">
    			<div class="d-flex justify-content-between">
    				<h5>Mes coordonnées</h5>
    				<button class="btn_update_coordonate">Modifier mes coordonnées</button>
    			</div>
	        	<div class="d-flex">
	        		<div class="coordonate_item">
	        			<p>
	        				<span class="label">Téléphone:</span>
	        				<span class="value">0000</span>
	        			</p>
	        			<p>
	        				<span class="label">Portable:</span>
	        				<span class="value">000000</span>
	        			</p>
	        			<p>
	        				<span class="label">Adresse:</span>
	        				<span class="value">0000</span>
	        			</p>
	        			<p>
	        				<span class="label">Ville:</span>
	        				<span class="value">0000</span>
	        			</p>
	        		</div>
	        		<div class="coordonate_item">
	        			<p>
	        				<span class="label">Date de création:</span>
	        				<span class="value">0000</span>
	        			</p>
	        			<p>
	        				<span class="label">N° SIRET:</span>
	        				<span class="value">0000</span>
	        			</p>
	        			<p>
	        				<span class="label">E-mail:</span>
	        				<span class="value">0000</span>
	        			</p>
	        			<p>
	        				<span class="label">Site web:</span>
	        				<span class="value">00000</span>
	        			</p>
	        		</div>
	        	</div>
	        	<div class="d-flex justify-content-center">
	        		<button class="">Changer mon mot de passe</button>
	        	</div>
	        </div>
    	</div>
    @endsection

    @section('additional-script')
    @endsection
