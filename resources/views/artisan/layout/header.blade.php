<section id="header_page">
  <div class="header_page">
    <div class="item_header">
      <div class="logo_header">
        <a href="{{ (Auth::user()) ? Url('/artisan/accueil') : Url('/') }}">
          <div class="image_bofa_logo">
            <img src="{!! url('/image/front/icones/logo_bofa.png') !!}" class="img_logo_bofa" alt="logo" />
          </div>
        </a>
      </div>
      <div class="">
        <a href="{{ (Auth::user()) ? Url('/artisan/accueil') : Url('/') }}">
          <div class="">
            <span style="font-size: 100%;color: #007bff; font-family: cursive;">e-artisans.fr</span>
          </div>
        </a>
      </div>
      <div class="user_status">
        @if($diff  <=0 || $diff>3)
          <a href="{{ Url('/artisan/stripe') }}" class="versionPro">Passer en PRO</a>
        @endif
        
        <a class="user_icones" href="">
          <i class="fa fa-user user"></i>
          <div class="description_user">
            <label for="">Bonjour</label>
            <label for="" class="name_user">{{Auth::user()->first_name}} {{Auth::user()->name}}</label>
          </div>
        </a>
        <div class="separated_items"></div>
        <a class="user_deconnexion" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fa fa-sign-out userdeco"></i>
          <label for="" class="deconnection" style="display: none;">Déconnection</label>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <!--<div class="responsive_menus">
          <span class="resp_menus"></span>
          <span class="resp_menus"></span>
          <span class="resp_menus"></span>

          <ul class="dropdown_menus_resp">
            <li> Accueil</li>
            <li data-val="{{$diff}}"> Projets Disponibles <!-- <label for="" class="number_project_resp">8</label> </li>
            <li data-val="{{$diff}}"> Projets accéptés</li>
            <!-- <li> Evaluations</li> 
            <li data-val="{{$diff}}"> Mon Profil</li><!-- 
            <li> Factures</li> 
            <li data-val="{{$diff}}"> Services</li>
          </ul>
        </div>-->
      </div>
    </div>
  </div>
</section>
