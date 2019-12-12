<div class="nav_menu">
  <a class="menus active"  href="{{ route('accueil') }}">
    <div class="item_menu">
      <label for="">Accueil</label>
    </div>
  </a>
  <a class="menus" href="{{ route('artisan_home') }}" data-val="{{$diff}}" >
    <div class="item_menu" >
      <label for="">Projet Disponible</label>
      <label for="" class="notification">{{isset($notif) ? $notif : 0}}</label>
      <!-- @if($diff  <=0 || $diff>3)
        <label for="" class="pro_version">Pro</label>
      @endif -->
    </div>
  </a>

  <a class="menus" href="{{route('project_accepted')}}" data-val="{{$diff}}">
    <div class="item_menu">
      <label for="">Mes projet accéptés</label>
      <!-- @if($diff  <=0 || $diff>3)
        <label for="" class="pro_version">Pro</label>
      @endif -->
    </div>
  </a>
  <!-- <a class="menus" data-val="{{$diff}}" onclick="{{($diff  <=0 || $diff>3 ) ? 'return false' : 'return true'}}">
    <div class="item_menu">
      <label for="">Mes évaluations</label>
      @if($diff  <=0 || $diff>3)
        <label for="" class="pro_version">Pro</label>
      @endif
    </div>
  </a> -->
  <a class="menus" href="{{ Url('/artisan/profil/'.Auth::user()->id.'') }}">
    <div class="item_menu">
      <label for="">Mon profil</label>
    </div>
  </a>
  <a class="menus" data-val="{{$diff}}">
    <div class="item_menu">
      <label for="">Mes factures</label>
      <!-- @if($diff  <=0 || $diff>3)
        <label for="" class="pro_version">Pro</label>
      @endif -->
    </div>
  </a>
  <a class="menus" data-val="{{$diff}}" onclick="//{{($diff <=0 || $diff>3 ) ? 'return false' : 'return true'}}" href="{{ route('service') }}">
    <div class="item_menu">
      <label for="">Services</label>
      <label for="" class="add_service">+</label>
      <!-- @if($diff  <=0 || $diff>3)
        <label for="" class="pro_version">Pro</label>
      @endif -->
    </div>
  </a>
</div>