<div class="pages_artisan">
  <div class="mail_confirm {{(Auth::user()->email_verified_at != null) ? 'mail_not_active' : ''}}" >
      <div class="inscription-welcoming">
        <span>Bienvenue dans votre espace!<span>
      </div>
      <!-- <label for="" class="activate_mail mail_thanks">Merci Beaucoup pour votre inscription!</label> -->
      <label for="" class="activate_mail">Veuillez activer votre compte à l'aide du email de validation envoyé à votre boite email</label>

      <a class="link-home d-flex align-items-center" href="{{ (Auth::user()) ? Url('/artisan/accueil') : Url('/') }}"><span class="icon-arrow-left"></span><span>Retour vers l'accueil</span></a>
  </div>
</div>

<div class="pages_artisan project_list_page">
  <div class="liste_project flex_one">
    <div class="project_item {{(Auth::user()->email_verified_at == null) ? 'mail_not_active' : ''}}">
      <div class="title_project">
        <label for="" class="number_project">{{isset($project_availables) ? count($project_availables) : 0}}</label>
        <label for="" class="title_project_item">PROJETS DISPONIBLES SUR MON SECTEUR</label>
      </div>
      @if(isset($project_availables))
      @foreach($project_availables as $project)
      
      <div class="item_project d-flex flex-wrap">
        <div class="calendar">
          <img src="{!! url('/image/front/user/calendar.png') !!}" class="" alt="" />
          <div class="liste_dates">
            <label for="" class="dates">{{date('d',strtotime($project->create_at))}}</label>
            <label for="" class="mounth">{{date('M',strtotime($project->create_at))}}</label>
          </div>
        </div>
        <div class="item_project_right flex-one d-flex flex-wrap align-items-center">
          <div class="project_desc flex-one">
            <div class="title_item">
              <label for="" class="title">{{$project->name}}</label>
            </div>
            <div class="city_item">
              <label for="" class="city">{{$project->ville_nom}}</label>
              <label for="" class="city_km">- à <?php
                $lon2 = auth()->user()->city->ville_longitude_deg; 
                $lon1 = $project->ville_longitude_deg; 
                $lat2 = auth()->user()->city->ville_latitude_deg; 
                $lat1 = $project->ville_latitude_deg; 
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


      <div class="btn_foot_list">
        <button type="button" name="" class="btn_view_more_list">Voir tous les projets disponibles</button>
      </div>
    </div>

  </div>
</div>
