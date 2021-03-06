@extends('artisan.layout.master')

    @section('additional-css')
    {!! Html::style('compiled_css/account/home.css') !!}
    {!! Html::style('compiled_css/account/main.css') !!}
      {!! Html::style('css/front/project_available.css') !!}
      {!! Html::style('compiled_css/account/project_accepted.css') !!}
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

      @include('artisan.layout.side_map')
    @endsection

    @section('content')
      <div class="pages_artisan">
        <div class="mail_confirm" >
            <div class="inscription-welcoming">
              <span>Bienvenue dans votre espace!<span>
            </div>
            <!-- <label for="" class="activate_mail mail_thanks">Merci Beaucoup pour votre inscription!</label> -->
            <label for="" class="activate_mail {{(Auth::user()->email_verified_at != null) ? 'mail_not_active' : ''}}">Veuillez activer votre compte à l'aide du email de validation envoyé à votre boite email</label>

            <a class="link-home d-flex align-items-center" href="{{ (Auth::user()) ? Url('/artisan/accueil') : Url('/') }}"><span class="icon-arrow-left"></span><span>Retour vers l'accueil</span></a>
        </div>

      </div>

      @if(Auth::user()->email_verified_at != null)
      @if(count($project_accepteds) > 0)  
        <div class="pages_artisan project_list_page {{(Auth::user()->email_verified_at == null) ? 'mail_not_active' : ''}}">
          <div class="liste_project flex_one">
            <div class="project_item">
              <div class="title_project">
                <label for="" class="number_project">{{isset($project_accepteds) ? count($project_accepteds) : 0}}</label>
                <label for="" class="title_project_item">PROJETS ACCEPTE</label>
              </div>
              @if(isset($project_accepteds))
              @foreach($project_accepteds as $project)
              <div class="item_project d-flex flex-wrap align-items-center">
                <div class="calendar">
                  <img src="{!! url('/image/front/user/calendar.png') !!}" class="" alt="" />
                  <div class="liste_dates">
                    <label for="" class="dates">{{date('d',strtotime($project->accepted_at))}}</label>
                    <label for="" class="mounth">{{date('M',strtotime($project->accepted_at))}}</label>
                  </div>
                </div>
                <div class="item_project_right flex-one d-flex flex-wrap align-items-center">
                    <div class="project_desc flex-one">
                      <div class="title_item">
                        <label for="" class="title">{{isset($project->project->category) ? $project->project->category->name : ''}}</label>
                      </div>
                      <div class="city_item">
                        <label for="" class="city">{{isset($project->project->city) ? $project->project->city->ville_nom : ''}}</label>
                        <label for="" class="city_km">- à <?php
                          $lon1 = auth()->user()->city->ville_longitude_deg; 
                          $lon2 = $project->project->city->ville_longitude_deg; 
                          $lat1 = auth()->user()->city->ville_latitude_deg; 
                          $lat2 = $project->project->city->ville_latitude_deg; 
                          $unit = "K";

                          $theta = $lon1 - $lon2;
                          $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                          $dist = acos($dist);
                          $dist = rad2deg($dist);
                          $miles = $dist * 60 * 1.1515;
                          $unit = strtoupper($unit);

                          if ($unit == "K") {
                            echo round(($miles * 1.609344));
                          } else if ($unit == "N") {
                            echo round(($miles * 0.8684));
                          } else {
                            echo round($miles);
                          }
                        ?> Km
                        </label>
                      </div>
                      @if(isset($project->comment))
                      <div class="description_item">
                        <label for="" class="description_project">{{$project->comment}}.</label>
                      </div>
                      @endif
                    </div>
                    <div class="btn_action_item">
                      <a href="{{ url('/artisan/project/'.$project->project_id.'') }}"  name="" class="btn_view_project_detail d-flex justify-content-center align-items-center">
                        <span>Voir le project</span>
                      </a>
                    </div>
                </div>
                
                <div class="border_bottom border_dashed"></div>
              </div>
              @endforeach
              @endif

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
      @endif

    @endsection

    @section('additional-script')
    @endsection
