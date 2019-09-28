<div class="nav_menu">
  <a class="menus active" href="{{ route('artisan_home') }}">
    <div class="item_menu">
      <label for="">Accueil</label>
    </div>
  </a>
  <a class="menus">
    <div class="item_menu">
      <label for="">Projet Disponible</label>
      <label for="" class="notification">8</label>
    </div>
  </a>
  <a class="menus">
    <div class="item_menu">
      <label for="">Mes projet accéptés</label>
    </div>
  </a>
  <a class="menus">
    <div class="item_menu">
      <label for="">Mes évaluations</label>
    </div>
  </a>
  <a class="menus" href="{{ Url('/artisan/profil/'.Auth::user()->id.'') }}">
    <div class="item_menu">
      <label for="">Mon profil</label>
    </div>
  </a>
  <a class="menus">
    <div class="item_menu">
      <label for="">Mes factures</label>
    </div>
  </a>
  <a class="menus">
    <div class="item_menu">
      <label for="">Services</label>
      <label for="" class="add_service">+</label>
    </div>
  </a>
</div>