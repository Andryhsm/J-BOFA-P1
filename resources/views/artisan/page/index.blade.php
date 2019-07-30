@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/front/connexion.css') !!}
      {!! Html::style('css/front/project_available.css') !!}
    @endsection

    @section('content')
          <div class="page_login">
            <!-- Sous Menu -->
              <div class="header_page">
                <div class="image_header">
                  <img src="{!! url('/image/front/images/fond4.jpg') !!}" class="img_fond" alt="" />
                  <div class="description_header">
                    <div class="text_header">
                        <h2>MON ESPACE</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="nav_menu">
                <div class="menus active">
                  <div class="item_menu">
                    <label for="">Accueil</label>
                  </div>
                </div>
                <div class="menus">
                  <div class="item_menu">
                    <label for="">Projet Disponible</label>
                    <label for="" class="notification">8</label>
                  </div>
                </div>
                <div class="menus">
                  <div class="item_menu">
                    <label for="">Mes projet accéptés</label>
                  </div>
                </div>
                <div class="menus">
                  <div class="item_menu">
                    <label for="">Mes évaluations</label>
                  </div>
                </div>
                <div class="menus">
                  <div class="item_menu">
                    <label for="">Mon profil</label>
                  </div>
                </div>
                <div class="menus">
                  <div class="item_menu">
                    <label for="">Mes factures</label>
                  </div>
                </div>
                <div class="menus">
                  <div class="item_menu">
                    <label for="">Services</label>
                    <label for="" class="add_service">+</label>
                  </div>
                </div>
              </div>
            <!-- End Sous Menu -->

            <!-- Content Page -->
            <div class="content_page">
              <div class="accueil" style="display: none;">
                @include('artisan.page.accueil')
              </div>
              <div class="project_available">
                @include('artisan.page.project_available')
              </div>
            </div>

            <!-- End Content Page -->
          </div>
    @endsection

    @section('additional-script')
    @endsection
