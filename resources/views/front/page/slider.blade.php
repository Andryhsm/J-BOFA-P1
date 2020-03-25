<!-- SLIDER -->
<section class="slider d-flex align-items-center">
    <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="slider-title_box">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-content_wrap">
                                <h1 style="font-size: 48px;">SELECTIONNEZ LE MEILLEUR ARTISAN LOCAL POUR VOS TRAVAUX</h1>
                                <h5 style="color: white;">Recevez jusqu’à 5 devis en 48h, gratuitement et sans engagement!</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10">
                            <form class="form-wrap mt-4 position_relative form_recherche_inovation" method="GET" action="{{route('view_project')}}">
                                <div class="btn-group" role="group" aria-label="Basic example" id="parent">
                                    <input type="text" name="name" placeholder="Ex: Plomberie, Maçonnerie" id="recherche" class="btn-group1 header_search">
                                    <button type="submit" class="btn-form btn_research_bofa"><span class="icon-magnifier search-icon"></span>RECHERCHER<i class="pe-7s-angle-right"></i></button>
                                    <!-- <input type="hidden" name="id" placeholder="New york" id="id" class="btn-group2"> -->
                                </div>
                                <ul id="ul" class="dropdown dropdown_search"></ul>
                            </form>
                            <!-- <div class="slider-link">
                                <a href="#">Browse Popular</a><span>or</span> <a href="#">Recently Added</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// SLIDER -->
