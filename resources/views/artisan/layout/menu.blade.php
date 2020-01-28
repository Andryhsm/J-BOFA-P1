<div class="nav_menu">
  <a class="menus active"  href="{{ route('accueil') }}">
    <div class="item_menu">
      <label for="">Accueil</label>
    </div>
  </a>
  <a class="menus menu-link" href="{{ route('artisan_home') }}" data-val="{{$diff}}"  data-message="No projet disponible"> <!-- onclick="{{($diff <=0 || $diff>3 ) ? 'return false' : 'return true'}}" -->
    <div class="item_menu" >
      <label for="">Projet Disponible</label>
      <label for="" class="notification">{{isset($notif) ? $notif : 0}}</label>
      <!-- @if($diff  <=0 || $diff>3)
        <label for="" class="pro_version">Pro</label>
      @endif -->
    </div>
  </a>

  <a class="menus menu-link" href="{{route('project_accepted')}}" data-val="{{$diff}}"  data-message="No projet accepté">
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
  <!-- <a class="menus" data-val="{{$diff}}">
    <div class="item_menu">
      <label for="">Mes factures</label>
      @if($diff  <=0 || $diff>3)
        <label for="" class="pro_version">Pro</label>
      @endif
    </div>
  </a> -->
  <a class="menus menu-link" data-val="{{$diff}}" href="{{ route('service') }}" data-message="No service disponible">
    <div class="item_menu">
      <label for="">Services</label>
      <label for="" class="add_service">+</label>
      <!-- @if($diff  <=0 || $diff>3)
        <label for="" class="pro_version">Pro</label>
      @endif -->
    </div>
  </a>
</div>

<div class="modal fade bs-example-modal-sm justify-content-center align-items-center" tabindex="-1" role="dialog" id="artisan-modal-menu">
  <div class="modal-dialog modal-sm">
      <div class="modal-content full-width">
          <div class="modal-body title_modal_delete full-width d-flex justify-content-center flex-wrap">
            <div class="form-group full-width d-flex justify-content-center">
             <label id="artisan-modal-menu-message">Lorem ipsum</label>
            </div>     
              
            <div class="col-sm-12 d-flex justify-content-center">
              <button type="button" class="btn pull-right btn-success" id="close-artisan-modal-menu">Fermer</button>
            </div>
                         
          </div>
      <!-- /.modal-content -->
      </div>
  <!-- /.modal-dialog -->
  </div>
</div>