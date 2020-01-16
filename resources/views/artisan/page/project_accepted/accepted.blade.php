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

<div class="pages_artisan project_list_page  {{(Auth::user()->email_verified_at == null) ? 'mail_not_active' : ''}}">
  <div class="liste_project flex_one">
    <div class="project_item">
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

      <!-- <div class="btn_foot_list">
        <button type="button" name="" class="btn_view_more_list">Voir tous les projets disponibles</button>
      </div> -->
    </div>

  </div>
</div>
