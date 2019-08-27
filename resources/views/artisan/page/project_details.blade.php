@extends('artisan.layout.master')

@section('additional-css')
  {!! Html::style('css/admin/project_details.css') !!}
@endsection

@section('side_nav')
  <div class="nav_bar">
      <div class="project_list flex_one">
        <div class="title_project">
          <label for="" class="title_project_item">PROJETS DISPONIBLES</label>
        </div>

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
              <label for="" class="title">Chauffage Electrique</label>
            </div>
            <div class="city_item">
              <label for="" class="city">BARENTIN - (76740)</label>
              <label for="" class="city_km">à environ 16 km</label>
            </div>
          </div>
          <div class="btn_action_item">
            <button><i class="fa fa-arrow-right"></i></button>
          </div>
          <div class="border_bottom border_dashed"></div>
        </div>

        <div class="item_project padding_new d-flex flex-wrap">
          <label class="new_label">Nouveau</label>
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
              <label for="" class="city">BARENTIN - (5083)</label>
              <label for="" class="city_km">à environ 16 km</label>
            </div>
          </div>
          <div class="btn_action_item">
            <button><i class="fa fa-arrow-right"></i></button>
          </div>
          <div class="border_bottom border_dashed"></div>
        </div>

        
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
              <label for="" class="title">Chauffage Electrique</label>
            </div>
            <div class="city_item">
              <label for="" class="city">BARENTIN  - (8899)</label>
              <label for="" class="city_km">à environ 16 km</label>
            </div>
          </div>
          <div class="btn_action_item">
            <button><i class="fa fa-arrow-right"></i></button>
          </div>
          <div class="border_bottom border_dashed"></div>
        </div>

        <div class="btn_foot_list">
          <button type="button" name="" class="btn_view_more_list">Voir tous les projets disponibles</button>
        </div>
      </div>
  </div>
@endsection

@section('content')
  <div class="pages">
    @include('artisan.page.fiche_project')
  </div>
@endsection 

@section('additional-script')
@endsection

