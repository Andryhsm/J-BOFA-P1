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
                <div class="menus">
                  <div class="item_menu">
                    <label for="">Accueil</label>
                  </div>
                </div>
                <div class="menus active">
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
              <div class="project_available" >
                <div class="pages">

                  <div class="navbar_j">
                    <div class="nav_bar">
                      <div class="description_pa">
                        <div class="title_pa">
                          <label for="" class="item_title">Mon Conseiller</label>
                          <label for="" class="call_title">Être appelé <i class="fa fa-chevron-right"></i></label>
                        </div>
                        <div class="description_candidates">
                          <label for="" class="name_candidates">Adil Leroy</label>
                          <label for="" class="number_candidates">09 74 73 80 87</label>
                          <label for="" class="disponibility_candidates">Du lundi au vendredi de 9h00 à 18h00</label>
                          <small>(Prix d'un appel local)</small>
                          <a href="#" class="email_candidates">adil.leroy@habitatpresto.com</a>
                        </div>
                      </div>
                    </div>

                    <div class="nav_bar">
                      <div class="nav_maps">
                        <label for="" class="title_maps">Ma Zone Géographique</label>
                        <div class="localisation">
                          <label for="" class="bold_localise">50 km</label>
                          <label>autour de </label>
                          <label for="" class="bold_localise_to">ROUEN</label>
                          <label>Si vous le souhaitez, vous pouvez définir une zone kilométrique autour d'une ville donnée.</label>
                        </div>
                        <div class="maps_location">
                          <img src="{!! url('/image/artisan/maps.png') !!}" class="" alt="maps" />
                        </div>
                        <div class="btn_foot_list">
                          <button type="button" name="" class="btn_view_more_list">Modifier ma zone de prospection</button>
                        </div>
                      </div>
                    </div>

                  </div>


                  <div class="liste_project">
                    <div class="project_item">
                      <div class="title_project">
                        <label for="" class="number_project">8</label>
                        <label for="" class="title_project_item">PROJETS DISPONIBLES SUR MON SECTEUR</label>
                      </div>

                      <div class="item_project">
                        <div class="calendar">
                          <img src="{!! url('/image/front/user/calendar.png') !!}" class="" alt="" />
                          <div class="liste_dates">
                            <label for="" class="dates">18</label>
                            <label for="" class="mounth">Jul.</label>
                          </div>
                        </div>
                        <div class="project_desc">
                          <div class="title_item">
                            <label for="" class="title">Chauffage Electrique</label>
                          </div>
                          <div class="city_item">
                            <label for="" class="city">BARENTIN</label>
                            <label for="" class="city_km">- à environ 16 km</label>
                          </div>
                          <div class="description_item">
                            <label for="" class="description_project">Je souhaite réaliser un désembouage pour un radiateurs électrique.</label>
                          </div>
                        </div>
                        <div class="btn_action_item">
                          <button type="button" name="" class="btn_action">Voir le project</button>
                        </div>
                      </div>

                      <div class="item_project padding_new">
                        <label class="new_label">Nouveau</label>
                        <div class="calendar">
                          <img src="{!! url('/image/front/user/calendar.png') !!}" class="" alt="" />
                          <div class="liste_dates">
                            <label for="" class="dates">18</label>
                            <label for="" class="mounth">Jul.</label>
                          </div>
                        </div>
                        <div class="project_desc">
                          <div class="title_item">
                            <label for="" class="title">Chauffage Electrique</label>
                          </div>
                          <div class="city_item">
                            <label for="" class="city">BARENTIN</label>
                            <label for="" class="city_km">- à environ 16 km</label>
                          </div>
                          <div class="description_item">
                            <label for="" class="description_project">Je souhaite réaliser un désembouage pour un radiateurs électrique.</label>
                          </div>
                        </div>
                        <div class="btn_action_item">
                          <button type="button" name="" class="btn_action">Voir le project</button>
                        </div>
                      </div>

                      <div class="item_project">
                        <div class="calendar">
                          <img src="{!! url('/image/front/user/calendar.png') !!}" class="" alt="" />
                          <div class="liste_dates">
                            <label for="" class="dates">18</label>
                            <label for="" class="mounth">Jul.</label>
                          </div>
                        </div>
                        <div class="project_desc">
                          <div class="title_item">
                            <label for="" class="title">Chauffage Electrique</label>
                          </div>
                          <div class="city_item">
                            <label for="" class="city">BARENTIN</label>
                            <label for="" class="city_km">- à environ 16 km</label>
                          </div>
                          <div class="description_item">
                            <label for="" class="description_project">Je souhaite réaliser un désembouage pour un radiateurs électrique.</label>
                          </div>
                        </div>
                        <div class="btn_action_item">
                          <button type="button" name="" class="btn_action">Voir le project</button>
                        </div>
                      </div>
                      @if(isset($project_availables))
                      @foreach($project_availables as $project)
                      <div class="item_project padding_new">
                        <label class="new_label">Test</label>
                        <div class="calendar">
                          <img src="{!! url('/image/front/user/calendar.png') !!}" class="" alt="" />
                          <div class="liste_dates">
                            <label for="" class="dates">18</label>
                            <label for="" class="mounth">Jul.</label>
                          </div>
                        </div>
                        <div class="project_desc">
                          <div class="title_item">
                            <label for="" class="title">Chauffage Electrique</label>
                          </div>
                          <div class="city_item">
                            <label for="" class="city">BARENTIN</label>
                            <label for="" class="city_km">- à environ 16 km</label>
                          </div>
                          <div class="description_item">
                            <label for="" class="description_project">Je souhaite réaliser un désembouage pour un radiateurs électrique.</label>
                          </div>
                        </div>
                        <div class="btn_action_item">
                          <button type="button" name="" class="btn_action">Voir le project</button>
                        </div>
                      </div>
                      @endforeach
                      @endif
                      <!-- <div class="item_project padding_new">
                        <label class="new_label">Nouveau</label>
                        <div class="calendar">
                          <img src="{!! url('/image/front/user/calendar.png') !!}" class="" alt="" />
                          <div class="liste_dates">
                            <label for="" class="dates">18</label>
                            <label for="" class="mounth">Jul.</label>
                          </div>
                        </div>
                        <div class="project_desc">
                          <div class="title_item">
                            <label for="" class="title">Chauffage Electrique</label>
                          </div>
                          <div class="city_item">
                            <label for="" class="city">BARENTIN</label>
                            <label for="" class="city_km">- à environ 16 km</label>
                          </div>
                          <div class="description_item">
                            <label for="" class="description_project">Je souhaite réaliser un désembouage pour un radiateurs électrique.</label>
                          </div>
                        </div>
                        <div class="btn_action_item">
                          <button type="button" name="" class="btn_action">Voir le project</button>
                        </div>
                      </div> -->

                      <!-- <div class="btn_foot_list">
                        <button type="button" name="" class="btn_view_more_list">Voir tous les projets disponibles</button>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- End Content Page -->
          </div>
    @endsection

    @section('additional-script')
    @endsection

<!-- ************************* -->
