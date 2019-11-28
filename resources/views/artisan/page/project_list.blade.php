<div class="pages_artisan project_list_page">
  <div class="liste_project flex_one">
    <div class="project_item {{(Auth::user()->email_verified_at == null) ? 'mail_not_active' : ''}}">
      <div class="title_project">
        <label for="" class="number_project">8</label>
        <label for="" class="title_project_item">PROJETS DISPONIBLES SUR MON SECTEUR</label>
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
            <label for="" class="title">{{$project->category->name}}</label>
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
          <a href="{{ route('project_details') }}"  name="" class="btn_view_project_detail d-flex justify-content-center align-items-center">
          <!-- <a href="{{ url('/artisan/project/'.$project->id.'') }}"  name="" class="btn_view_project_detail d-flex justify-content-center align-items-center"> -->
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
          <a href="{{ route('project_details') }}"  name="" class="btn_view_project_detail d-flex justify-content-center align-items-center">
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
          <a href="{{ route('project_details') }}"  name="" class="btn_view_project_detail d-flex justify-content-center align-items-center">
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
