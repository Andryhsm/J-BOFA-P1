@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/admin/coordonate.css') !!}
      {!! Html::style('css/admin/profil.css') !!}
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
    			<div class="entreprise_presentation">
                    <div class="d-flex justify-content-between title_separate">
                        <h5 class="title_profil">INFORMATIONS SUR MON ENTREPRISE</h5>
                    </div>
                    <textarea class="info_entreprise" placeholder="vous n'avez pas encore rédigé de présentation de votre activité"></textarea>
                </div>

                <div class="coordonate_entreprise">
                    <div class="d-flex justify-content-between title_separate">
                        <h5 class="title_profil">INFORMATIONS SUR MON ENTREPRISE</h5>
                    </div>
                    <div class="content_formulaire">
                        <div class="liste_formulaire">
                             <div class="item_formulaire">
                                <label class="name_item_formulaire">Nom de l'entreprise *</label>
                                <input type="text" name="" placeholder="Nom de l'entreprise">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Siret *</label>
                                <input type="text" name="" placeholder="Numéro Siret">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Année de création</label>
                                <input type="text" name="" placeholder="Année de création">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Adresse *</label>
                                <input type="text" name="" placeholder="Adresse">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Ville *</label>
                                <select id="update_contact_titre" name=""  class="select_items">
                                    <option value="">-- Choisissez --</option>
                                </select>
                            </div>
                            
                        </div>

                         <div class="liste_formulaire">
                           <div class="item_formulaire">
                                <label class="name_item_formulaire">Civilité *</label>
                                <select id="update_contact_titre" name=""  class="select_items">
                                    <option value="">-- Choisissez --</option>
                                    <option value="Mr" selected="selected">Mr</option>
                                    <option value="Mme">Mme</option>
                                    <option value="Mlle">Mlle</option>
                                </select>
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Nom *</label>
                                <input type="text" name="" placeholder="Votre Nom">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Prénom *</label>
                                <input type="text" name="" placeholder="Votre prénom">
                            </div>
                             <div class="item_formulaire">
                                <label class="name_item_formulaire"> Fonction</label>
                                <input type="text" name="" placeholder="Votre fonction">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Métier *</label>
                                <select id="update_contact_titre" name=""  class="select_items">
                                    <option value="">-- Choisissez --</option>
                                    <option value="3">Architecte</option>
                                    <option value="5">Carreleur</option>
                                    <option value="6">Charpentier</option>
                                    <option value="7">Chauffagiste</option>
                                    <option value="8">Climatisation (installateur)</option>
                                    <option value="10">Constructeur de maison</option>
                                    <option value="70">Courtier</option>
                                    <option value="11">Couvreur</option>
                                    <option value="12">Cuisiniste</option>
                                    <option value="13">Décorateur</option>
                                    <option value="16">Dératiseur</option>
                                    <option value="68">Diagnostiqueur Immobilier</option>
                                </select>
                            </div>
                        </div>
                         <div class="liste_formulaire">
                           <div class="item_formulaire">
                                <label class="name_item_formulaire">Email *</label>
                                <input type="text" name="" placeholder="Votre e-mail">
                            </div>
                             <div class="item_formulaire">
                                <label class="name_item_formulaire">Téléphone</label>
                                <input type="number" name="" placeholder="Téléphone">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Portable</label>
                                <input type="number" name="" placeholder="Portable">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Fax</label>
                                <input type="number" name="" placeholder="Fax">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Site Internet</label>
                                <input type="text" name="" placeholder="Site internet">
                            </div>
                            
                        </div>
                        
                    </div>
                </div>


                 <div class="label_entreprise">
                    <div class="d-flex justify-content-between title_separate">
                        <h5 class="title_profil">LABEL RGE</h5>
                    </div>
                     <div class="content_formulaire">
                        <div class="liste_formulaire">
                             <div class="item_formulaire">
                                <label class="name_item_formulaire"></label>
                                <select id="update_contact_rge" name="" class="">
                                    <option value="" selected="selected">-- Choisissez --</option>
                                    <option value="notconcerned">Pas concerné</option>
                                    <option value="notdefined">Non renseigné</option>
                                    <option value="notinterested">Concerné - pas intéressé</option>
                                    <option value="pending">En cours / à l'étude</option>
                                    <option value="yes">Oui</option>
                                </select>
                            </div>
                        </div>
                    </div>
    			</div>

                 <div class="profil_image_entreprise">
                    <div class="d-flex justify-content-between title_separate">
                        <h5 class="title_profil">VOTRE PHOTO DE PROFIL</h5>
                    </div>
                     <div class="messange_upload">
                         <p>Seules les images au format jpg, jpeg et png sont acceptées avec une taille minimale de 112 pixels par 112 pixels.</p>
                     </div>

                     <div class="upload_image_profil">
                         <span class="decoration_upload justify-content-center align-items-center">Téléchargez votre photo de profil</span>
                         <input type="file" class="input_file_profil" name="">
                     </div>
                </div>


                <div class="btn_save_profil justify-content-center align-items-center">
                    <button class="save_profil">Enregistrer</button>
                </div>

	        </div>
	        
    	</div>
    @endsection

    @section('additional-script')

    @endsection
