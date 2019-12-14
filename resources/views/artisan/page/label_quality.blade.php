@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('compiled_css/account/other_page.css') !!}
      {!! Html::style('compiled_css/account/coordonate.css') !!}
      {!! Html::style('compiled_css/account/profil.css') !!}
      {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') !!}
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
                        <h5 class="title_profil">AJOUTEZ UN LABEL QUALITÉ</h5>
                    </div>
                    <div class="official_doc">
                        <div class="item_doc_official">
                            <h5 class="title_profil">TITRE DU LABEL</h5>
                            <select class="select_input_base separate_upload" name="" required="required" >
                                <!-- lien pour trouver la liste des options: https://membre.habitatpresto.com/profil/ajout-labels -->
                                <option value="" selected="selected">-- Choisissez --</option>
                                <option value="">A E V</option>
                                <option value="">A2p services</option>
                                <option value="">AB5</option>
                                <option value="">Accès SAP</option>
                                <option value="">Acermi</option>
                                <option value="">Acotherm</option>
                                <option value="">ACS</option>
                                <option value="">Afaq</option>
                                <option value="">AFAQ.AFNOR</option>
                                <option value="">AFCOBOIS</option>
                                <option value="">Agrément maisons de qualité</option>
                                <option value="">Agrément qualité</option>
                                <option value="">Agrément simple</option>
                                <option value="">ANC 2014</option>
                                <option value="">Ange Bleu</option>
                                <option value="">AREF BTP</option>
                                <option value="">ARTISAN D'ART</option>
                                <option value="">Artisans Accessibles d'Alsace</option>
                                <option value="">Artisans ebenistes de france</option>
                                <option value="">Association HQE</option>
                                <option value="">Association Qualitel</option>
                                <option value="">Association Terrasse Bois</option>
                                <option value="">ATE (agrément technique europeen)</option>
                                <option value="">Autre</option>
                                <option value="">BBC Effinergie</option>
                                <option value="">Bureau Véritas Certification</option>
                                <option value="">Capeb</option>
                                <option value="">Carbon progress</option>
                                <option value="">CEBTP SOLEN</option>
                                <option value="">CEKAL</option>
                                <option value="">CEMAFROID</option>
                                <option value="">Cemafroid</option>
                                <option value="">Centre de Compétences TPE</option>
                                <option value="">Certificat identité professionnel (CIP)</option>
                                <option value="">Certifié CFAI</option>
                                <option value="">Certifié SNH PRO +</option>
                                <option value="">Cetiat</option>
                                <option value="">Chambre des métiers et de l'artisanat</option>
                                <option value="">CHARTE DE L'AUTO-ENTREPRENEUR</option>
                                <option value="">Cisco partner gold certified</option>
                                <option value="">CNAMOME</option>
                                <option value="">CNCC - (COMPAGNIE NATIONALE DES COMMISSAIRES AUX COMPTES)</option>
                                <option value="">Cneps</option>
                                <option value="">CNPP</option>
                                <option value="">Collège des Experts de la Fédération Française de la Franchise</option>
                                <option value="">Compagnons du devoir</option><option value="29">Coprotec</option>
                                <option value="">COSTIC</option>
                                <option value="">CS3D</option>
                                <option value="">Cstbat</option>
                                <option value="">Cuisinov</option>
                                <option value="">DEKRA</option>
                                <option value="">Delifol</option>
                                <option value="">Dolce vita gaz de france</option>
                                <option value="">Eco artisan</option>
                                <option value="">Eco Artisan</option>
                                <option value="">Eco label europeen</option>
                                <option value="">Entreprise du Patrimoine Vivant</option>
                                <option value="">EPARCO</option>
                                <option value="">EWAA</option>
                                <option value="">Expert confort habitat daikin</option>
                                <option value="">Expert Jardin</option>
                                <option value="">Expert somfy</option>
                                <option value="">FAAC</option>
                                <option value="">Fcba</option>
                                <option value="">FEDELEC</option>
                                <option value="">Fédération de la Vente Directe</option>
                                <option value="">Fédération des fabricants et concepteurs de vérandas</option>
                                <option value="">Fédération des Professionnels de la Piscine</option>

                            </select>
                            <div class="messange_upload">
                                 <p>Si votre certification est absente de la liste ci-dessus, merci d’en informer votre conseiller par téléphone au <strong>09 74 73 80 87</strong> ou par mail : <a href="#">membre@habitatpresto.com</a> . Il l’ajoutera pour vous.</p>
                             </div>
                         </div>
                         <div class="item_doc_official">
                             <h5 class="title_profil">CERTIFICAT DU LABEL</h5>
                             <div class="upload_image_profil separate_upload">
                                 <span class="decoration_upload justify-content-center align-items-center">Téléchargez</span>
                                 <input type="file" class="input_file_profil" name="">
                             </div>
                              <div class="messange_upload">
                                 <p>Seuls les fichiers <strong>pdf</strong> sont acceptés.</p>
                             </div>
                         </div>
                          <div class="item_doc_official">
                             <h5 class="title_profil">DATES DE VALIDITÉ</h5>
                             <div class="validate_date_form separate_upload">
                                 <div class="form-inline select-date">
                                    Du 
                                    <input type="text" id="" name="" required="required" class="monthpicker form-control separate_right_left_upload" placeholder="Date de début" readonly="readonly" autocomplete="off"> 
                                    Au 
                                    <input type="text" id="" name="" required="required" class="monthpicker form-control separate_right_left_upload" placeholder="Date de fin" readonly="readonly" autocomplete="off">
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
                <div class="btn_save_profil justify-content-center align-items-center">
                    <button class="save_profil">Ajouter un label</button>
                </div>

	        </div>
	        
    	</div>
       
    @endsection

    @section('additional-script')

    @endsection
