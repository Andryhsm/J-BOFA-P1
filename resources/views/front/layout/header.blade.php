<!--============================= HEADER =============================-->
    <div class="nav-menu">
        <div class="bg transition">

            <div class="container-fluid fixed">
                <div class="login_foat">
                <div class="row">
                  <div class="item_form">
                    <label for="" class="email item_box_header">
                        <div class="icones_headers"> <i class="fa fa-phone"></i></div> 0603190999
                    </label>
                    <!-- 
                    <label for="" class="email item_box_header">
                        <div class="icones_headers"><i class="fa fa-phone"></i></div> +261 88 42 455 28
                    </label> -->
                  </div>
                  <div class="compte_artisan">
                    <!-- login --><a href="{{ route('connexion') }}" class="btn_artisan login_artisan">Se connecter</a>
                    <!-- artisanlogin --><a href="{{route('inscription')}}" class="btn_artisan">S'inscrire</a>
                  </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{ (Auth::user()) ? Url('/artisan/accueil') : Url('/') }}">
                              <div class="image_bofa_logo">
                                <img src="{!! url('/image/front/icones/logo_bofa.png') !!}" class="img_logo_bofa" alt="logo" />
                              </div>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="icon-menu"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Guide Travaux
                                          <span class="icon-arrow-down"></span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="{{ url('renovation') }}">Rénovation de maison</a>
                                            <a class="dropdown-item" href="{{ url('tarif_hour') }}">Tarif Horaire des artisans</a>
                                            <a class="dropdown-item" href="{{ url('help_me') }}">Aides&Subventions</a>
                                            
                                        </div>
                                    </li>

                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('faq') }}">FAQ</a>
                                    </li>
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="{{ url('how_work') }}" >
                                           Comment ça marche
                                         </a>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="{{ route('connexion') }}" >
                                           Se connecter
                                         </a>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="{{ url('inscription') }}" >
                                           S'inscrire
                                         </a>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--//END HEADER -->
