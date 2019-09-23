@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/admin/profil.css') !!}
    @endsection

    @section('side_nav')
      <div class="nav_bar">
        <div class="affiche_coordonate">
        	<div class="name_coordonate">
        		<h5>mon conseiller</h5>
        		<a href="" class="link_coordonate"></a>
        	</div>
        </div>
      </div>

      @include('artisan.layout.side_map')
    @endsection

    @section('content')
    	<div class="pages_profil profil_page">
    		<div class="content_profil">
    			
    			
	        </div>
	        
    	</div>
    @endsection

    @section('additional-script')
    @endsection
