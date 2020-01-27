@extends('artisan.layout.master')

    @section('additional-css')
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
                <h5 class="title_entreprise">Laetitia d'e-artisans.fr</h5>
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
    <form action="{{route('create_site')}}" method="POST">
        {!! csrf_field() !!}
    	<div class="pages_profil profil_page">
    		<div class="content_profil">
    			<!-- <div class="entreprise_presentation">
                    <div class="d-flex justify-content-between title_separate">
                        <h5 class="title_profil">INFORMATIONS DU SITE WEB</h5>
                    </div>
                    <textarea class="info_entreprise" name="description" placeholder="vous n'avez pas encore rédigé de présentation de votre site"></textarea>
                </div> -->

                <div class="coordonate_entreprise">
                    <div class="d-flex justify-content-between title_separate">
                        <h5 class="title_profil">CREATION DU SITE WEB</h5>
                    </div>
                    <div class="content_formulaire">
                        <div class="liste_formulaire">
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Nom *</label>
                                <input type="text" name="name" placeholder="Nom" value=""> 
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Entreprise *</label>
                                <input type="text" name="enterprise" placeholder="Entreprise" value="">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Courriel *</label>
                                <input type="email" name="email" placeholder="Email" value="">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Téléphone *</label>
                                <input type="text" name="phone" placeholder="Téléphone" value="">
                            </div>
                        </div>

                         <div class="liste_formulaire">
                            <div class="item_formulaire">
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Budget </label>
                                <select id="gender" name="budget"  class="select_items">
                                    <option value="">-- Choisissez --</option>
                                    <option value="500 à 1000 €" >500 à 1000 €</option>
                                    <option value="1000 à 1500 €" >1000 à 1500 €</option>
                                    <option value="1500 à 2000 €" >1500 à 2000 €</option>
                                    <option value="plus de 2000 €" >plus de 2000 €</option>
                                </select>
                            </div>
                                <label class="name_item_formulaire">Sujet *</label>
                                <input type="text" name="subject" placeholder="Sujet" value="">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Message *</label>
                                <textarea class="info_entreprise" name="message" placeholder="vous n'avez pas encore rédigé votre message" style="height: 100px"></textarea>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="btn_save_profil justify-content-center align-items-center">
                    <input type="submit" name="" style="display: none;">
                    <button class="save_profil">Enregistrer</button>
                </div>

	        </div>
    	</div>
    </form>
    @endsection

    @section('additional-script')
        {!! Html::script('js/artisan/site.js') !!}
    @endsection
