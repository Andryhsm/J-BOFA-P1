@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('compiled_css/account/other_page.css') !!}
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
        <div class="pages_profil profil_page">
            <div class="content_profil">
                <div class="entreprise_presentation">
                    <div class="d-flex justify-content-between title_separate">
                        <h5 class="title_profil">AJOUTEZ UNE PHOTO DE VOS RÉALISATIONS</h5>
                    </div>
                    <div class="official_doc">
                        <div class="messange_upload">
                             <p>Seules les images au format jpg, jpeg et png sont acceptées.</p>
                         </div>
                         <div class="item_doc_official">
                             <div class="upload_image_profil separate_upload">
                                 <span class="decoration_upload justify-content-center align-items-center">Ajouter une photo</span>
                                 <input type="file" class="input_file_profil" name="">
                             </div>
                         </div>
                         <div class="item_doc_official separate_upload">
                            <div class="item_formulaire">
                                <input class="input_with_padding" type="text" name="" placeholder="Le titre de votre image *">
                            </div>
                         </div>
                         <div class="item_doc_official separate_upload">
                             <div class="entreprise_presentation">
                                <textarea class="info_entreprise" placeholder="Description *"></textarea>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="btn_save_profil justify-content-center align-items-center">
                    <button class="save_profil">Ajouter des photos</button>
                </div>

            </div>
            
        </div>
       
    @endsection

    @section('additional-script')

    @endsection
