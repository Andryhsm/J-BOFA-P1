<!--============================= FEATURED PLACES =============================-->
  <section class="main-block light-bg">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col_heading">
                  <div class="styled-heading">
                      <h3>Les particuliers parlent de nous</h3>
                      <p>Chaque mois, plus de 15 000 personnes nous confient les travaux de leur maison en demandant des devis à notre réseau d'experts. En ferez-vous partie ?</p>
                  </div>
              </div>
          </div>
          <div class="row">
            @if(isset($temoins))
              @foreach($temoins as $temoin)
                <div class="col-md-4 featured-responsive feature_container">
                    <div class="featured-place-wrap">
                        <a href="detail.html" class="height_message">
                            <span class="featured-rating-orange"><i class="fa fa-quote-left"></i></span>
                            <div class="featured-title-box">
                                <h6>{{$temoin->titre}}</h6>
                                <p>{{$temoin->description}}</p>

                            </div>
                        </a>
                        <div class="bottom-icons button_icones_plus">
                            <div class="closed-now">{{$temoin->name}}</div>
                            <span class="ti-bookmark">{{$temoin->categorie->name}}</span>
                        </div>
                    </div>
                </div>
              @endforeach
            @endif
              <!-- <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html" class="height_message">
                        <span class="featured-rating-green"><i class="fa fa-quote-left"></i></span>
                        <div class="featured-title-box">
                            <h6>Burger & Lobster</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptate minus ipsa placeat quibusdam dolore aut numquam autem corporis laborum asperiores perspiciatis magnam cupiditate amet, quos nisi totam neque id.</p>

                        </div>
                    </a>
                    <div class="bottom-icons button_icones_plus">
                        <div class="closed-now">J. Carter</div>
                        <span class="ti-bookmark">Electricité (77)</span>
                    </div>
                </div>
              </div>
              <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html" class="height_message">
                        <span class="featured-rating"><i class="fa fa-quote-left"></i></span>
                        <div class="featured-title-box">
                            <h6>Burger & Lobster</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptate minus ipsa placeat quibusdam dolore aut numquam autem corporis laborum asperiores perspiciatis magnam cupiditate amet, quos nisi totam neque id.</p>

                        </div>
                    </a>
                    <div class="bottom-icons button_icones_plus">
                        <div class="closed-now">J. Carter</div>
                        <span class="ti-bookmark">Electricité (77)</span>
                    </div>
                </div>
              </div> -->
          </div>
          <div class="row justify-content-center" style="margin-top: 3rem;">
              <div class="col-md-4">
                  <div class="featured-btn-wrap">
                      <a href="{{route('faq')}}#tab-2" data-temoin="temoin" class="btn btn-danger">Consulter tous les témoignages</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//END FEATURED PLACES -->
