@extends('artisan.layout.master')

    @section('additional-css')
    {!! Html::style('css/admin/home.css') !!}
    {!! Html::style('css/admin/main.css') !!}
      {!! Html::style('css/front/project_available.css') !!}
      {!! Html::style('css/admin/project_accepted.css') !!}
    @endsection

    @section('banner')
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
    @endsection

    @section('side_nav')
      <div class="nav_bar">
        <div class="advisor-card">
          <div class="row">
              <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h2>Mon conseiller</h2>
                    <a href="https://membre.habitatpresto.com/rappel" title="Être appelé" class="be-called fancybox-ajax d-flex align-items-center">
                        Être appelé<i class="fa fa-angle-right"></i>
                    </a>
                </div>
                  
                  <div class="contact text-center">
                                          <p class="name">Maeva Leroy</p>
                                      <p class="number">09 74 73 80 87</p>
                      <p>Du lundi au vendredi de 9h00 à 18h00</p>
                      <small>(Prix d'un appel local)</small><br><br>
                      <p>
                          <a href="mailto:maeva.leroy@habitatpresto.com">maeva.leroy@habitatpresto.com</a>
                      </p>
                  </div>
              </div>
          </div>
        </div>
      </div>

      @include('artisan.layout.side_map')
    @endsection

    @section('content')
    
      @if(count($project_availables) > 0)  
        <div class="pages_artisan project_list_page">
          <div class="liste_project flex_one">
            <div class="project_item {{(Auth::user()->email_verified_at == null) ? 'mail_not_active' : ''}}">
              <div class="title_project">
                <label for="" class="number_project">{{isset($project_availables) ? count($project_availables) : 0}}</label>
                <label for="" class="title_project_item">PROJETS ACCEPTE</label>
              </div>
              @if(isset($project_availables))
              @foreach($project_availables as $project)
              <div class="item_project d-flex flex-wrap">
                <div class="calendar">
                  <img src="{!! url('/image/front/user/calendar.png') !!}" class="" alt="" />
                  <div class="liste_dates">
                    <label for="" class="dates">18</label>
                    <label for="" class="mounth">Jul.</label>
                  </div>
                </div>
                <div class="project_desc flex_one">
                  <div class="title_item">
                    <label for="" class="title">{{$project->project->category->name}}</label>
                  </div>
                  <div class="city_item">
                    <label for="" class="city">{{$project->project->city->ville_nom}}</label>
                    <label for="" class="city_km">- à environ 16 km</label>
                  </div>
                  <div class="description_item">
                    <label for="" class="description_project">Je souhaite réaliser un désembouage pour un radiateurs électrique.</label>
                  </div>
                </div>
                <div class="btn_action_item">
                  <a href="{{ url('/artisan/project/'.$project->project_id.'') }}"  name="" class="btn_view_project_detail d-flex justify-content-center align-items-center">
                    <span>Voir le project</span>
                  </a>
                </div>
                <div class="border_bottom border_dashed"></div>
              </div>
              @endforeach
              @endif

            </div>

            <div class="mail_confirm {{(Auth::user()->email_verified_at != null) ? 'mail_not_active' : ''}}" >
                <label for="" class="activate_mail mail_thanks">Merci Beaucoup pour votre inscription!</label>
                <label for="" class="activate_mail">SVP, Veillez cliquer sur le lien de confirmation de votre compte dans votre boite mail</label>
            </div>
          </div>
        </div>
        
      @else

        <div class="pages_artisan project_list_page">
          <div class="last-accepted-project basic-background">
              <h2 class="title">Mes projets acceptés</h2>
              <p class="mt-4">
                  Vous n'avez pas encore accepté de projets.
              </p>
              <p class="mt-4 lh-20">
                  Dès que vous accepterez un projet, il sera affiché ici.
                  Vous pourrez suivre l'avancée de vos projets en mettant à jour leur statut (particulier à contacter, rendez-vous pris, devis à faire...).
              </p>
          </div>
          <div class="completed-projects-block basic-background">
              <h2 class="title">Mes projets terminés avec succès</h2>
              <p class="mt-4">
                  Vous n'avez pas encore finalisé de projets.
              </p>
              <p class="mt-4">
                  Dès que vous avez terminé l'un de vos projets, n'oubliez pas de mettre à jour son statut afin d'en faciliter le suivi.
              </p>
          </div>
        </div>
      @endif

    @endsection

    @section('additional-script')
    <script type="text/javascript" src="javascripts/jquery.googlemap.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKwbmXbI2xTnvbxrQTL7W8UEL7RXXKBns"></script>
    
    <script type="text/javascript"> 
      $(function() {
        $("#mymap").googleMap();
        $("#mymap").addMarker({
          coords: [48.895651, 2.290569], // GPS coords
          url: 'http://www.tiloweb.com', // Link to redirect onclick (optional)
          id: 'marker1' // Unique ID for your marker
        });
      })
   
   
       </script>
    @endsection
