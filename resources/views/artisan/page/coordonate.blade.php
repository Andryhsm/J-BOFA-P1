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
    <form action="{{route('update_profile')}}" method="POST">
        {!! csrf_field() !!}
    	<div class="pages_profil profil_page">
    		<div class="content_profil">
    			<div class="entreprise_presentation">
                    <input type="hidden" name="city_id" value="{{$profil->city_id}}">
                    <input type="hidden" name="user_id" value="{{$profil->id}}">
                    <div class="d-flex justify-content-between title_separate">
                        <h5 class="title_profil">INFORMATIONS SUR MON ENTREPRISE</h5>
                    </div>
                    <textarea class="info_entreprise" name="description" placeholder="vous n'avez pas encore rédigé de présentation de votre activité">{{($profil->profile && $profil->profile->description!="") ? $profil->profile->description : ''}}</textarea>
                </div>

                <div class="coordonate_entreprise">
                    <div class="d-flex justify-content-between title_separate">
                        <h5 class="title_profil">INFORMATIONS SUR MON ENTREPRISE</h5>
                    </div>
                    <div class="content_formulaire">
                        <div class="liste_formulaire">
                             <div class="item_formulaire">
                                <label class="name_item_formulaire">Nom de l'entreprise *</label>
                                <input type="text" name="enterprise" value="{{$profil->enterprise}}" placeholder="Nom de l'entreprise">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Siret *</label>
                                <input type="text" name="siret" placeholder="Numéro Siret" value="{{($profil->profile) ? $profil->profile->siret : ''}}"> 
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Année de création</label>
                                <input type="text" name="creation" placeholder="Année de création" value="{{($profil->profile) ? $profil->profile->creation : ''}}">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Adresse *</label>
                                <input type="text" name="address" placeholder="Adresse" value="{{($profil->profile) ? $profil->profile->address : ''}}">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Ville *</label>
                                <select id="update_contact_titre" name="ville"  class="select_items">
                                    <option value="choisissez">-- Choisissez --</option>
                                    @if(isset($cities))
                                        @foreach($cities as $citie)
                                            <option value="{{$citie->ville_id}}" {{($profil->city_id == $citie->ville_id) ? 'selected' : ''}}>{{$citie->ville_nom}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            
                        </div>

                         <div class="liste_formulaire">
                           <div class="item_formulaire">
                                <label class="name_item_formulaire">Civilité *</label>
                                <select id="gender" name="gender"  class="select_items">
                                    <option value="choisissez">-- Choisissez --</option>
                                    <option value="Mr" {{($profil->profile && $profil->profile->gender == "Mr") ? 'selected' : ''}}>Mr</option>
                                    <option value="Mme" {{($profil->profile && $profil->profile->gender == "Mme") ? 'selected' : ''}}>Mme</option>
                                    <option value="Mlle" {{($profil->profile && $profil->profile->gender == "Mlle") ? 'selected' : ''}}>Mlle</option>
                                </select>
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Nom *</label>
                                <input type="text" name="name" placeholder="Votre Nom" value="{{$profil->name}}">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Prénom *</label>
                                <input type="text" name="first_name" placeholder="Votre prénom" value="{{$profil->first_name}}">
                            </div>
                             <!-- <div class="item_formulaire">
                                <label class="name_item_formulaire"> Fonction</label>
                                <input type="text" name="" placeholder="Votre fonction">
                            </div> -->
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Métier *</label>
                                <select id="metier" name="metier"  class="select_items">
                                    <option value="choisissez">-- Choisissez --</option>
                                    <option value="Architecte" {{($profil->profile && $profil->profile->metier == "Architecte") ? 'selected' : ''}}>Architecte</option>
                                    <option value="Carreleur" {{($profil->profile && $profil->profile->metier == "Carreleur") ? 'selected' : ''}}>Carreleur</option>
                                    <option value="Charpentier" {{($profil->profile && $profil->profile->metier == "Charpentier") ? 'selected' : ''}}>Charpentier</option>
                                    <option value="Chauffagiste" {{($profil->profile && $profil->profile->metier == "Chauffagiste") ? 'selected' : ''}}>Chauffagiste</option>
                                    <option value="Climatisation" {{($profil->profile && $profil->profile->metier == "Climatisation") ? 'selected' : ''}}> Climatisation (installateur)</option>
                                    <option value="Constructeur de maison" {{($profil->profile && $profil->profile->metier == "Constructeur de maison") ? 'selected' : ''}}>Constructeur de maison</option>
                                    <option value="Courtier" {{($profil->profile && $profil->profile->metier == "Courtier") ? 'selected' : ''}}>Courtier</option>
                                    <option value="Couvreur" {{($profil->profile && $profil->profile->metier == "Couvreur") ? 'selected' : ''}}>Couvreur</option>
                                    <option value="Cuisiniste" {{($profil->profile && $profil->profile->metier == "Cuisiniste") ? 'selected' : ''}}>Cuisiniste</option>
                                    <option value="Décorateur" {{($profil->profile && $profil->profile->metier == "Décorateur") ? 'selected' : ''}}>Décorateur</option>
                                    <option value="Dératiseur" {{($profil->profile && $profil->profile->metier == "Dératiseur") ? 'selected' : ''}}>Dératiseur</option>
                                    <option value="Diagnostiqueur Immobilier" {{($profil->profile && $profil->profile->metier == "Diagnostiqueur Immobilier") ? 'selected' : ''}}>Diagnostiqueur Immobilier</option>
                                    <option value="Electrician" {{($profil->profile && $profil->profile->metier == "Electrician") ? 'selected' : ''}}>Electrician</option>
                                </select>
                            </div>
                        </div>
                         <div class="liste_formulaire">
                           <div class="item_formulaire">
                                <label class="name_item_formulaire">Email *</label>
                                <input type="text" name="email" placeholder="Votre e-mail" value="{{$profil->email}}">
                            </div>
                             <div class="item_formulaire">
                                <label class="name_item_formulaire">Téléphone</label>
                                <input type="number" name="phone" placeholder="Téléphone" value="{{$profil->phone}}">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Portable</label>
                                <input type="number" name="portable" placeholder="Portable" value="{{($profil->profile) ? $profil->profile->portable : ''}}">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Fax</label>
                                <input type="number" name="fax" placeholder="Fax" value="{{($profil->profile) ? $profil->profile->fax : ''}}">
                            </div>
                            <div class="item_formulaire">
                                <label class="name_item_formulaire">Site Internet</label>
                                <input type="text" name="site" placeholder="Site internet" value="{{($profil->profile) ? $profil->profile->site : ''}}">
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
                                <select id="update_contact_rge" name="rge" class="">
                                    <option value="" selected="selected">-- Choisissez --</option>
                                    <option value="notconcerned" {{($profil->profile && $profil->profile->rge == "notconcerned") ? 'selected' : ''}}>Pas concerné</option>
                                    <option value="notdefined" {{($profil->profile && $profil->profile->rge == "notdefined") ? 'selected' : ''}}>Non renseigné</option>
                                    <option value="notinterested" {{($profil->profile && $profil->profile->rge == "notinterested") ? 'selected' : ''}}>Concerné - pas intéressé</option>
                                    <option value="pending" {{($profil->profile && $profil->profile->rge == "pending") ? 'selected' : ''}}>En cours / à l'étude</option>
                                    <option value="yes" {{($profil->profile && $profil->profile->rge == "yes") ? 'selected' : ''}}>Oui</option>
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
                         <input type="file" class="input_file_profil" name="photo">
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
        {!! Html::script('js/artisan/coordonate.js') !!}
    @endsection
