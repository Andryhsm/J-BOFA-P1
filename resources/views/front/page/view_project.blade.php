@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/view_project.css') !!}
      {!! Html::style('css/front/view_project_responsive.css') !!}
  @endsection

  @section('content')
  <div class="container_view_project">
    <section class="header_project">
      <div class="content_header_project" style="background-image:url({!! url('/image/front/images/fond14.jpg') !!})">
        <div class="menus_header_project">
          <a href="#" class="menus_project">ACCEUIL</a> /
          <a href="#" class="menus_project active">DEVIS <label for="" class="title_project">Chauffe eau</label></a>
        </div>
        <div class="chearch_project">
          <input type="text" name="" value="" class="research_project" placeholder="Ex: Plomberie, Maçonnerie">
          <button type="button" name="button" class="btn_chearch_project">DEVIS GRATUIT</button>
        </div>
      </div>
    </section>
    <section class="tab_project">
      <div class="content_tab">
        <div class="line_tab"></div>
        <div class="list_tab">
          <div class="item_tab">
            <label for="" class="number_tab active">1</label>
            <label for="" class="title_tab">Description des travaux</label>
          </div>
          <div class="item_tab">
            <label for="" class="number_tab">2</label>
            <label for="" class="title_tab">Vos coordonnées</label>
          </div>
          <div class="item_tab">
            <label for="" class="number_tab">3</label>
            <label for="" class="title_tab">Obtenez des devis</label>
          </div>
        </div>
      </div>
    </section>
    <section class="container_page">
      <div class="nav_bar">
        <div class="content_nav_bar">
          <div class="item_nav_bar">
            <label for="" class="title_nav_bar">Comment ca fonctionne</label>
            <ul class="citation_nav_bar style_cit1">
              <li>Effectuez votre demande de devis.</li>
              <li>Recevez gratuitement jusqu'à 5 devis d'artisans de votre région.</li>
              <li>Comparez et sélectionnez l'artisan de votre choix.</li>
            </ul>
          </div>
          <div class="item_nav_bar">
            <label for="" class="title_nav_bar">Vos avantages :</label>
            <ul class="citation_nav_bar style_cit2">
              <li>Simplicité et rapidité.</li>
              <li>Gratuité et sans engagement.</li>
              <li>Plus de 25 000 professionnels qualifiés.</li>
            </ul>
          </div>
          <div class="item_nav_bar">
            <label for="" class="title_nav_bar">Confidentialité :</label>
            <label for="" class="text_nav_bar confidetiality_text">Vos coordonnées sont protégées et ne seront jamais publiées sur Internet.</label>
          </div>
        </div>

        <div class="content_nav_bar">
          <div class="item_nav_bar">
            <label for="" class="title_nav_bar">Trouvez un professionnel près de chez vous !</label>
            <div class="text_image_nav_bar">
              <label for="" class="text_nav_bar">Vos coordonnées sont protégées et ne seront jamais publiées sur Internet.</label>
              <img class="img_nav_bar" src="{!! url('/image/front/icones/carte_project.png') !!}" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="step_nav active" id="step-1">
        <div class="title_step">
          <label for="" class="simple_text">Titre du projet: </label>
          <label for="" class="texte_title_step">Chauffe eau</label>
        </div>
        <div class="description_projet">
          <div class="image_step_project">
            <img class="img_step1" src="{!! url('/image/projects/chauffe_eau.jpg') !!}" alt="">
          </div>

          <div class="text_desc_step1">
            <label for="">Le choix est vaste pour un chauffe-eau : électrique, à gaz, ou solaire. Il est important de choisir un modèle adapté aux besoins du logement et de ses occupants. Pour y parvenir, il est préférable d'être conseillé par un professionnel. L'achat et l'installation seront alors soumis à une TVA à taux réduit si le logement a plus de cinq ans.</label>
          </div>
        </div>
        <div class="info_step1">
          <div class="title_info">
            <label for="" class="text_title_step1">Les informations à remplir</label>
          </div>
          <div class="form_info_step1">
            <div class="item_form_step1">
              <label for="" class="title_item ">Code Postal *</label>
              <input type="text" name="" id="" class="input_form_step1" placeholder="Votre code postal">
            </div>
            <div class="item_form_step1">
              <label for="" class="title_item title_radio">Type de travaux</label>
              <div class="item_radio_step1">
                  <input type="radio" id="remplacement" name="work" value="remplacement"
                         checked>
                  <label for="remplacement">Remplacement</label>
                </div>

                <div class="item_radio_step1">
                  <input type="radio" id="installation" name="work" value="installation">
                  <label for="installation">Installation neuve</label>
                </div>

                <div class="item_radio_step1">
                  <input type="radio" id="reparation" name="work" value="reparation">
                  <label for="reparation">Réparation neuve</label>
                </div>
                <div class="item_radio_step1">
                  <input type="radio" id="entretient" name="work  " value="entretient">
                  <label for="entretient">Entretient/Maintenance</label>
                </div>
            </div>
            <div class="item_form_step1">
                  <label for="" class="title_item title_radio">Prestation souhaitée</label>
                  <div class="item_radio_step1">
                    <input type="radio" id="pose" name="work" value="pose"
                           checked>
                    <label for="pose">Pose uniquement</label>
                  </div>

                  <div class="item_radio_step1">
                    <input type="radio" id="fourniture" name="work" value="fourniture">
                    <label for="fourniture">Fourniture uniquement</label>
                  </div>
              </div>
              <div class="item_form_step1">
                <label for="" class="title_item title_radio">Type de bâtiment</label>
                <div class="select_item_form">
                  <select class="form_select_step" name="batiment_type" id="batiment_type">
                    <option value="Choisissez...">Choisissez... </option>
                    <option value="Maison" individuelle="">Maison Individuelle</option>
                    <option value="Appartement">Appartement</option>
                    <option value="Bureau">Bureau</option>
                    <option value="Commerce">Commerce</option>
                    <option value="Immeuble">Immeuble</option>
                  </select>
                </div>
              </div>
              <div class="item_form_step1">
                  <label for="" class="title_item title_radio">Y a-t-il un chauffe-eau à désinstaller ?</label>
                  <div class="item_radio_step1">
                    <input type="radio" id="oui" name="work" value="oui"
                           checked>
                    <label for="oui">Oui</label>
                  </div>
                  <div class="item_radio_step1">
                    <input type="radio" id="non" name="work" value="non">
                    <label for="non">Non</label>
                  </div>
              </div>
              <div class="item_form_step1">
                <label for="" class="title_item title_radio">Type d'énergie</label>
                <div class="select_item_form">
                  <select class="form_select_step" name="energie_type" id="energie_type">
                    <option value="Choisissez...">Choisissez... </option>
                    <option value="Electricite">Electricite</option>
                    <option value="Gaz">Gaz</option>
                    <option value="Fioul">Fioul</option>
                    <option value="Solaire">Solaire</option>
                    <option value="Geothermique/aerothermique">Geothermique/aerothermique</option>
                  </select>
                </div>
              </div>
          </div>
        </div>
        <div class="btn_next_page">
          <button type="button" name="button" class="btn_next_form">SUIVANT <i class="fa fa-long-arrow-right"></i></button>
        </div>
      </div>
      <div class="" id="step-2">

      </div>
      <div class="" id="step-3">

      </div>
    </section>

  </div>
  @endsection


  @section('additional-script')

  @endsection
