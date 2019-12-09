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
        <div class="project_desc flex_one">
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
          <div class="description_item">
            <label for="" class="description_project">{{$project->comment}}.</label>
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

      <!-- <div class="item_project padding_new  d-flex flex-wrap">
        <label class="new_label">
          <img src="{!! url('/image/artisan/notification.svg') !!}" class="" alt="" />
          Nouveau
        </label>
        <div class="calendar">
          <img src="{!! url('/image/front/user/calendar.png') !!}" class="" alt="" />
          <div class="liste_dates">
            <label for="" class="dates">18</label>
            <label for="" class="mounth">Jul.</label>
          </div>
        </div>
        <div class="project_desc flex_one">
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
          <a href=""  name="" class="btn_view_project_detail d-flex justify-content-center align-items-center">
            <span>Voir le project</span>
          </a>
        </div>
        <div class="border_bottom border_dashed"></div>
      </div>

      
      <div class="item_project  d-flex flex-wrap">
        <div class="calendar">
          <img src="{!! url('/image/front/user/calendar.png') !!}" class="" alt="" />
          <div class="liste_dates">
            <label for="" class="dates">18</label>
            <label for="" class="mounth">Jul.</label>
          </div>
        </div>
        <div class="project_desc flex_one">
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
          <a href=""  name="" class="btn_view_project_detail d-flex justify-content-center align-items-center">
            <span>Voir le project</span>
          </a>
        </div>
        <div class="border_bottom border_dashed"></div>
      </div> -->

      <div class="btn_foot_list">
        <button type="button" name="" class="btn_view_more_list">Voir tous les projets disponibles</button>
      </div>
    </div>

    <div class="mail_confirm {{(Auth::user()->email_verified_at != null) ? 'mail_not_active' : ''}}" >
        <label for="" class="activate_mail mail_thanks">Merci Beaucoup pour votre inscription!</label>
        <label for="" class="activate_mail">SVP, Veillez cliquer sur le lien de confirmation de votre compte dans votre boite mail</label>
    </div>
  </div>
</div>
