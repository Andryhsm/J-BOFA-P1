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
      <label for="" class="pro_version">Pro</label>
    </div>
  </a>
  <a class="menus">
    <div class="item_menu">
      <label for="">Mes projet accéptés</label>
      <label for="" class="pro_version">Pro</label>
    </div>
  </a>
  <a class="menus">
    <div class="item_menu">
      <label for="">Mes évaluations</label>
      <label for="" class="pro_version">Pro</label>
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
      <label for="" class="pro_version">Pro</label>
    </div>
  </a>
  <a class="menus" href="{{ route('service') }}">
    <div class="item_menu">
      <label for="">Services</label>
      <label for="" class="add_service">+</label>
      <label for="" class="pro_version">Pro</label>
    </div>
  </a>
</div>