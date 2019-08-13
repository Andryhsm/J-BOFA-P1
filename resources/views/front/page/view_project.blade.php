@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/view_project.css') !!}
      {!! Html::style('css/front/view_project_responsive.css') !!}
      {!! Html::style('css/front/how_work.css') !!}
      {!! Html::style('css/front/how_work_responsive.css') !!}
  @endsection

  @section('content')
  <section class="container_view_project" style="background-image:url({!! url('/image/front/images/fond16.jpg') !!})">
    <div class="form_item_project">
      <div class="desc_view_project">
        <label for="" class="title_view_project">5 devis travaux gratuits en 48h</label>
        <label for="" class="text_view_project">Devis en aménagement des combles : Trouvez le professionnel qu’il vous faut pour vos travaux</label>
        <ul class="liste_view_project">
          <li>Des professionnels de votre région</li>
          <li>30 000 avis clients vérifiés</li>
          <li>Gratuit et sans engagement</li>
        </ul>
      </div>

      <div class="formulaire_view_project">
        <div class="liste_project">
          <div class="form_title_project">
            <label for="" class="number_project_item">1</label>
            <label for="" class="title_item_project">VOTRE PROJET</label>
          </div>
          <div class="form_item_view_projetct">
            <select required="required" tabindex="1" class="form-control">
              <option value="">Quel est le type de travaux à réaliser ?</option>
              <option value="">Aménagement intérieur</option>
              <option value="">Architecture - Expertise</option>
              <option value="">Assainissement - Terrassement</option>
              <option value="">Chauffage - Chaudière</option>
              <option value="">Chauffage - Energies renouvelables</option>
              <option value="" selected="selected">Construction - Extension</option>
              <option value="">Électricité - Courant faible</option>
              <option value="">Étanchéité - Humidité - Ventilation</option>
              <option value="">Fenêtre - Volet</option>
              <option value="">Isolation - Plâtre</option>
              <option value="">Jardin - Clôture - Portail</option>
              <option value="">Maçonnerie - Démolition</option>
              <option value="">Peinture - Papier Peint</option>
              <option value="">Peinture extérieure - Façade</option>
              <option value="">Piscine - Spa</option>
              <option value="">Plomberie - Salle de bain</option>
              <option value="">Porte </option>
              <option value="">Rénovation intérieure</option>
              <option value="">Sol Intérieur</option>
              <option value="">Terrasse</option>
              <option value="">Toiture - Couverture - Charpente</option>
              <option value="">Véranda - Pergola</option>
            </select>
          </div>
          <div class="form_item_view_projetct">
            <select required="required" tabindex="2" class="form-control">
              <option value="">Quel est la nature de ces travaux ?</option>
              <option value="">Garage</option>
              <option value="" selected="selected">Agrandissement</option>
              <option value="">Construction maison et local</option>
              <option value="">Construction maison en bois</option>
            </select>
          </div>
          <div class="form_item_view_projetct">
            <textarea required="required" placeholder="Détaillez votre projet, par exemple : Réaliser l'isolation des combles perdus d'une surface de 100m² par de la ouate de cellulose." tabindex="3" rows="5" class="form-control"></textarea>
          </div>
        </div>

        <div class="liste_project">
          <div class="form_title_project">
            <label for="" class="number_project_item">2</label>
            <label for="" class="title_item_project">VOS COORDONNÉES</label>
          </div>
          <div class="form_item_view_projetct_form">
            <div class="col-xs-12 col-sm-6 pr-0 position_relative_form">
              <i class="fa fa-user green coordinates icones_connexions" aria-hidden="true"></i>
              <div class="form-group ">
                <input type="text" required="required" placeholder="Votre prénom" class="form-height form-control form-input form-control name_candidates" data-toggle="" data-original-title="" list="" tabindex="4" autocomplete="given-name">
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 pr-0 position_relative_form">
              <i class="fa fa-user green coordinates icones_connexions" aria-hidden="true"></i>
              <div class="form-group ">
                <input type="text" required="required" placeholder="Votre nom" class="form-height form-control form-input form-control name_candidates" data-toggle="" data-original-title="" list="" tabindex="5" autocomplete="family-name">
              </div>
            </div>
          </div>
          <div class="form_item_view_projetct">
            <div class="second-part position_relative_form">
              <i class="fa fa-phone green coordinates icones_connexions_long" aria-hidden="true"></i>
              <div class="form-group ">
                  <input type="text" required="required" placeholder="Votre numéro de téléphone" class="form-height form-control form-input form-control name_candidates" data-toggle="popover" data-original-title="" data-triggler="focus" data-placement="top" tabindex="6" autocomplete="tel">
              </div>
            </div>
          </div>
          <div class="form_item_view_projetct">
            <div class="second-part position_relative_form">
              <i class="fa fa-envelope green coordinates icones_connexions_long" aria-hidden="true"></i>
              <div class="form-group ">
                  <input type="text" required="required" placeholder="Votre email" class="form-height form-control form-input form-control name_candidates" data-toggle="" data-original-title="" list="" tabindex="7" autocomplete="email">
              </div>
            </div>
          </div>
          <div class="form_item_view_projetct_form">
            <div class="col-xs-12 col-sm-6 pr-0 position_relative_form">
              <i class="fa fa-map-marker green coordinates icones_connexions" aria-hidden="true"></i>
              <div class="form-group ">
                <input type="text" required="required" placeholder="Code Postal" class="form-height form-control form-input form-control name_candidates" data-toggle="" data-original-title="" list="" tabindex="4" autocomplete="code-postal">
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 pr-0 position_relative_form">
              <i class="fa fa-map-marker green coordinates icones_connexions" aria-hidden="true"></i>
              <div class="form-group ">
                <input type="text" required="required" placeholder="Ville" class="form-height form-control form-input form-control name_candidates" data-toggle="" data-original-title="" list="" tabindex="5" autocomplete="city">
              </div>
            </div>
          </div>
        </div>

        <div class="row footer footer_form_item">
            <div class="col-xs-12 position_relative_form">
                <div class="cgu-txt text">
                    <input type="checkbox" required="required" value="1">
                    J'accepte les
                    <a href="#" class="lien-underline" target="_blank" title="Conditions générales d'utilisation">Conditions Générales d'Utilisation</a>
                    et la <a href="#" target="_blank">Charte sur la protection des données personnelles</a>

                </div>
                <div class="fa fa_footer_icones"><i class="fa fa-info-circle green" aria-hidden="true"></i></div>
                <div class="text text_footer_icones">Tous les champs sont obligatoires et seront communiqués à un maximum de 5 professionnels qui vous établiront un devis
                </div>
            </div>
        </div>

        <div class="button_footer">
          <button type="button" name="button" class="button_form_project">Demander des devis</button>
        </div>

        <div class="information_footer">
          <div class="row">
              <div class="col-xs-12 legal-notice">
                  <em>Les informations recueillies sur ce formulaire sont destinées à HabitatPresto aux fins de traitement de vos commandes, de gestion de votre compte client et de suivi de qualité de nos services. Elles font l’objet d’un traitement informatique destiné au service client et au service marketing de HabitatPresto.</em>
                  Pour connaître et exercer vos droits relatifs à l’utilisation de vos données, veuillez consulter notre
                  <a href="#" class="lien-underline" target="_blank" title="Charte sur la protection des données personnelles">Charte sur la protection des données personnelles</a>
                  ou nous contacter à l’adresse suivante :
                  <a href="#" title="Contact Email">DPO@habitatpresto.com</a>
              </div>
          </div>
        </div>
      </div>
    </div>


  </section>

  <section class="section_info">
    <div class="all_information_project">
      <label for="" class="title_all_info">ALLER PLUS LOIN</label>
      <label for="" class="desc_all_info">Si vous désirez avoir plus de renseignements, consultez nos différentes rubriques en Construction maison en bois</label>
      <ul class="list_all_info">
        <li><a href="#">Conseils en Construction maison en bois</a></li>
        <li><a href="#">Guide des prix en Construction maison en bois</a></li>
        <li><a href="#">Devis en Construction maison en bois</a></li>
        <li><a href="#">Lexique en Construction maison en bois</a></li>
        <li><a href="#">Annuaire des professionnels en Construction maison en bois</a></li>
      </ul>
    </div>
  </section>

  <section class="content_page_how_work">
    <label for="" class="title_content">Comment ça marche ?</label>
    <div class="item_liste_how_work">
      <div class="how_work_item">
        <div class="image_liste_work">
          <img src="{!! url('/image/front/how_work/how2.jpg') !!}" class="" alt="" />
        </div>
        <div class="text_how_work">
          <label for="" class="title_how_work">Je decris mon projet </label>
          <label for="" class="text_descr">Vous recevrez jusqu'à 5 devis</label>
        </div>
      </div>
      <div class="separator_item">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="how_work_item">
        <div class="image_liste_work">
          <img src="{!! url('/image/front/how_work/how3.jpg') !!}" class="" alt="" />
        </div>
        <div class="text_how_work">
          <label for="" class="title_how_work">Nos professionnels qualifiés vous contacte</label>
          <label for="" class="text_descr"></label>
          <!-- Accédez à toutes les demandes détaillées -->
        </div>
      </div>
      <div class="separator_item">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="how_work_item">
        <div class="image_liste_work">
          <img src="{!! url('/image/front/how_work/how1.jpg') !!}" class="" alt="" />
        </div>
        <div class="text_how_work">
          <label for="" class="title_how_work">Choisissez votre artisans </label>
          <label for="" class="text_descr">Selon la qualité prix </label>
        </div>
      </div>

    </div>
  </section>
  @endsection


  @section('additional-script')

  @endsection
