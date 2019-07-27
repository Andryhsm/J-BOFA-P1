<!--============================= HEADER =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{ url('/') }}">
                              <div class="image_bofa_logo">
                                <img src="{!! url('/image/front/icones/logo_bofa.jpg') !!}" class="img_logo_bofa" alt="logo" />
                              </div>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="icon-menu"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Explore
                                           <span class="icon-arrow-down"></span>
                                         </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Listing
                                          <span class="icon-arrow-down"></span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Pages
                                          <span class="icon-arrow-down"></span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                    <!-- <span class="ti-plus"> -->
                                    <li><a href="{{ route('login') }}" class="btn btn-outline-light top-btn"></span> Se connecter</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="login_foat">
              <div class="row">
                <div class="item_form">
                  <div class="input_litle">
                    <input type="text" name="" value="" placeholder="Email">
                  </div>
                  <div class="input_litle">
                    <input type="password" name="" value="" placeholder="Mot de passe">
                  </div>
                  <div class="btn_litle">
                    <button type="button" name="button" class="btn_connexion">Se Connecter</button>
                  </div>
                </div>
                <div class="compte_artisan">
                  <button type="button" name="button" class="btn_artisan">Compte Artisan</button>
                </div>
              </div>
            </div>
        </div>
    </div>

    <!--//END HEADER -->
