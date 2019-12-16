@extends('artisan.layout.master')

    @section('additional-css')
      <!-- {!! Html::style('css/admin/change_mdp.css') !!} -->
      {!! Html::style('compiled_css/account/coordonate.css') !!}
      {!! Html::style('compiled_css/account/profil.css') !!}
    @endsection

    @section('side_nav')
      <div class="nav_bar">
        <div class="affiche_coordonate">
        	<div class="name_coordonate d-flex justify-content-between align-items-center title_separate">
        		<h5 class="title_profil">mon conseiller</h5>
        		<a href="" class="link_coordonate btn_orange_link_artisan">Etre appelé ></a>
        	</div>

            <div class="name_entreprise justify-content-center align-items-center">
                <h5 class="title_entreprise">Laetitia d'123 Artisan</h5>
            </div>

            <div class="name_entreprise justify-content-center align-items-center">
                <h5 class="number_phone_entreprise">09 74 73 80 87</h5>
            </div>
            <div class="name_entreprise justify-content-center align-items-center content_describe_entreprise">
                <label class="date_entreprise">Du lundi au vendredi de 9h00 à 18h00</label>
                <small>(Prix d'un appel local)</small>
            </div>
            <div class="name_entreprise justify-content-center align-items-center">
                <label class="mail_entreprise">lorem.lorem@ipsum.com</label>
            </div>
        </div>
      </div>

      @include('artisan.layout.side_map')
    @endsection

    @section('content')
    	<div class="pages_profil profil_page">
    		<div class="content_profil">
                <form action="{{route('change_mdp')}}" method="POST">
                    @csrf
        			<div class="entreprise_presentation">
                        <div class="d-flex justify-content-between title_separate">
                            <h5 class="title_profil">MODIFIER VOTRE MOT DE PASSE</h5>
                        </div>
                        <div class="change_mdp_form">
                            <div class="info_mdp">
                                <p>Votre mot de passe doit contenir au minimum <strong>8 caractères</strong> dont :</p>
                                <ul>
                                    <li>1 chiffre</li>
                                    <li>1 caractère spécial</li>
                                    <li>1 majuscule</li>
                                </ul>
                            </div>
                             <div class="liste_formulaire_mdp">
                                <div class="item_formulaire">
                                    <label class="name_item_formulaire">Votre mot de passe actuel *</label>
                                    <input type="password" name="actuel" placeholder="mot de passe actuel">
                                </div>
                                <div class="item_formulaire">
                                    <label class="name_item_formulaire">Votre nouveau mot de passe *</label>
                                    <input type="password" name="new_mdp" placeholder="nouveau mot de passe">
                                </div>
                                <div class="item_formulaire">
                                    <label class="name_item_formulaire">Confirmer votre nouveau mot de passe *</label>
                                    <input type="password" name="new_confirm" placeholder="Confirmer mot de passe">
                                </div>  
                             </div>
                        </div>
                    </div>
                    <div class="btn_save_profil justify-content-center align-items-center">
                        <button class="save_profil">Enregistrer</button>
                    </div>
                </form>
	        </div>
	        
    	</div>
       
    @endsection

    @section('additional-script')

    @endsection
