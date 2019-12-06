@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/faq.css') !!}
      {!! Html::style('css/front/faq_responsive.css') !!}
      {!! Html::style('css/front/how_work.css') !!}
      {!! Html::style('css/front/how_work_responsive.css') !!}
  @endsection

  @section('content')
  <section class="header_page">
    <div class="image_header">
      <img src="{!! url('/image/front/images/fond16.jpg') !!}" class="img_fond" alt="" />
      <div class="description_header">
        <div class="text_header">
            <h2>AIDE & CONTACT</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="faq_page">
    <div class="sub_menu_faq">
      <div class="liste_menu">
        <div class="item_menu" data-tab="tab-4" id="about_menus">
          <label for="" class="title_menu">Qui nous sommes?</label>
        </div>
        <!-- <div class="item_menu" data-tab="tab-3" id="recrutement_menus">
          <label for="" class="title_menu">Recrutement</label>
        </div> -->
        <div class="item_menu" data-tab="tab-2" id="temoignages_menus">
          <label for="" class="title_menu">Temoignages</label>
        </div>
        <div class="item_menu current" data-tab="tab-1" id="contact_menus">
          <label for="" class="title_menu">Contact</label>
        </div>
      </div>
    </div>

    <!-- page qui nous sommes -->
    <div class="content_faq" id="tab-4">
      <div class="about_chiffrage">
        <label class="titre_chiffrage">Les chiffres de nos oeuvres</label>
        <div class="content_chiffrage">
          <div class="item_chiffrage">
            <label class="numbre_chiffrage">20 000</label>
            <label class="name_chiffrage">PROFESSIONNELS</label>
          </div>
          <div class="item_chiffrage">
            <label class="numbre_chiffrage">30 000</label>
            <label class="name_chiffrage">AVIS CLIENTS</label>
          </div>
          <div class="item_chiffrage">
            <label class="numbre_chiffrage">10 ANS</label>
            <label class="name_chiffrage">D’EXPERTISE</label>
          </div>
        </div>
        <div class="separate_about"></div>
      </div>

      <div class="about_history">
        <div class="row_history">
          <img src="{!! url('/image/faq/renover-carrelage-1.jpg') !!}" class="image_histoyr" alt="" />
          <div class="row_text_history">
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            <img src="{!! url('/image/faq/img_doublequote_before.png') !!}" class="guillemets" alt="" />
          </div>
        </div>
        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>

        <!-- <div class="separate_about"></div> -->
      </div>
      <section class="content_page_how_work">
        <label for="" class="title_content">COMMENT ÇA MARCHE ?</label>
        <div class="item_liste_how_work">
          <div class="how_work_item">
            <div class="image_liste_work">
              <img src="{!! url('/image/front/how_work/how2.jpg') !!}" class="" alt="" />
            </div>
            <div class="text_how_work">
              <label for="" class="title_how_work">Je decris mon projet </label>
              <label for="" class="text_descr">Vous recevrez jusqu'à 5 devis</label>
            </div>
          </div>

          <div class="separator_item">
            <i class="fa fa-long-arrow-right"></i>
          </div>
          <div class="how_work_item">
            <div class="image_liste_work">
              <img src="{!! url('/image/front/how_work/how3.jpg') !!}" class="" alt="" />
            </div>
            <div class="text_how_work">
              <label for="" class="title_how_work">Nos professionnels qualifiés vous contacte</label>
              <label for="" class="text_descr"></label>
            </div>
          </div>
          <div class="separator_item">
            <i class="fa fa-long-arrow-right"></i>
          </div>
          <div class="how_work_item">
            <div class="image_liste_work">
              <img src="{!! url('/image/front/how_work/how1.jpg') !!}" class="" alt="" />
            </div>
            <div class="text_how_work">
              <label for="" class="title_how_work">Choisissez votre artisans </label>
              <label for="" class="text_descr">Selon la qualité prix </label>
            </div>
          </div>

        </div>
      </section>

    </div>

    <!-- Page Recrutements -->
   <!-- <div class="content_faq" id="tab-3">
      <div class="title_recutement">
        <label class="simple_title_recrutement">Vous êtes plein d’enthousiasme et souhaitez rejoindre une équipe dynamique ? Vous souhaitez bouleverser l’univers des travaux ? </label>
        <label class="bold_title_recrutement">Bienvenue à Tous !</label>
      </div>
      <div class="description_recrutement">
        <p>Le site Habitatpresto appartient au groupe MybestPro depuis 2013. Situé en plein coeur de Paris, le groupe MyBestPro regroupe 250 salariés, découvrez nos offres d'emploi.</p>
      </div>

      <div class="btn_recrutement">
        <button class="see_offre">Voir les offres</button>
      </div>  
    </div> -->

    <!-- Page Temoignages -->
    <div class="content_faq" id="tab-2">
      <div class="about_temoin">
        <div class="titre_temoin">
          <label class="title_content_temoin">VOUS AUSSI DONNEZ VOTRE AVIS !</label>
          <label class="text_content_temoin">Vous avez utilisé les services de Orange-travaux ? Dites-nous ce que vous en avez pensé ! Envoyez nous un mail à <strong>lorem@ipsum.com</strong> et racontez-nous votre expérience.</label>
        </div>
        <div class="content_tem">
          @if(isset($temoins))
          @foreach($temoins as $temoin)
          <div class="item_tem">  
            <div class="image_icon_tem">
              @switch($temoin->categorie->name)
                @case('Architecte-permis de construire')
                  <img src="{!! url('/image/icone_temoignage/picto_abri-pergola.png') !!}" class="" alt="" />
                  @break
                @case('Électricité')
                  <img src="{!! url('/image/icone_temoignage/picto_electricite.png') !!}" class="" alt="" />
                  @break
                @case('Électricité-alarme')
                  <img src="{!! url('/image/icone_temoignage/picto_electricite.png') !!}" class="" alt="" />
                  @break
                @case('Énergies renouvelables')
                  <img src="{!! url('/image/icone_temoignage/picto_abri-pergola.png') !!}" class="" alt="" />
                  @break
                @case('Maçonnerie -démolition')
                  <img src="{!! url('/image/icone_temoignage/picto_maconnerie.png') !!}" class="" alt="" />
                  @break
                @case('Jardinage -clôture-portail')
                  <img src="{!! url('/image/icone_temoignage/picto_entretien.png') !!}" class="" alt="" />
                  @break
                @case('Couverture -toiture -charpente')
                  <img src="{!! url('/image/icone_temoignage/picto_toiture.png') !!}" class="" alt="" />
                  @break
                @case('Peinture -décoration')
                  <img src="{!! url('/image/icone_temoignage/picto_peinture-interieure.png') !!}" class="" alt="" />
                  @break
                @case('Piscine-abri de piscine')
                  <img src="{!! url('/image/icone_temoignage/picto_salle-bain.png') !!}" class="" alt="" />
                  @break
                @case('Plomberie -chauffage')
                  <img src="{!! url('/image/icone_temoignage/picto_plomberie.png') !!}" class="" alt="" />
                  @break
                @case('Plomberie -sanitaires')
                  <img src="{!! url('/image/icone_temoignage/picto_plomberie.png') !!}" class="" alt="" />
                  @break
                @case('Porte-fenêtre')
                  <img src="{!! url('/image/icone_temoignage/picto_fenetres.png') !!}" class="" alt="" />
                  @break
                @case('Salle de bain-spa')
                  <img src="{!! url('/image/icone_temoignage/picto_salle-bain.png') !!}" class="" alt="" />
                  @break
                @case('Sol -carrelage -parquet')
                  <img src="{!! url('/image/icone_temoignage/picto_abri-pergola.png') !!}" class="" alt="" />
                  @break
                @case('Véranda')
                  <img src="{!! url('/image/icone_temoignage/picto_fenetres.png') !!}" class="" alt="" />
                  @break
                
                @default
                  <img src="{!! url('/image/icone_temoignage/picto_temoignage.png') !!}" class="" alt="" />
              @endswitch
            </div>
            <div class="text_tem">
              <p>{{$temoin->description}}</p>
            </div>

            <div class="auteur_tem">
              <label class="auteur_title">{{$temoin->name}}</label>
              <label class="auteur_title">{{strtoupper($temoin->categorie->name)}}</label>
            </div>
          </div>
          @endforeach
          @endif

          <!-- <div class="item_tem">  
            <div class="image_icon_tem">
              <img src="{!! url('/image/icone_temoignage/picto_electricite.png') !!}" class="" alt="" />
            </div>
            <div class="text_tem">
              <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            </div>
          </div>

          <div class="item_tem">  
            <div class="image_icon_tem">
              <img src="{!! url('/image/icone_temoignage/picto_entretien.png') !!}" class="" alt="" />
            </div>
            <div class="text_tem">
              <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            </div>
          </div>

           <div class="item_tem">  
            <div class="image_icon_tem">
              <img src="{!! url('/image/icone_temoignage/picto_fenetres.png') !!}" class="" alt="" />
            </div>
            <div class="text_tem">
              <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            </div>
          </div>

           <div class="item_tem">  
              <div class="image_icon_tem">
                <img src="{!! url('/image/icone_temoignage/picto_maconnerie.png') !!}" class="" alt="" />
              </div>
              <div class="text_tem">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              </div>
            </div>


           <div class="item_tem">  
              <div class="image_icon_tem">
                <img src="{!! url('/image/icone_temoignage/picto_peinture-interieure.png') !!}" class="" alt="" />
              </div>
              <div class="text_tem">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              </div>
            </div>

            <div class="item_tem">  
              <div class="image_icon_tem">
                <img src="{!! url('/image/icone_temoignage/picto_plomberie.png') !!}" class="" alt="" />
              </div>
              <div class="text_tem">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              </div>
            </div>

            <div class="item_tem">  
              <div class="image_icon_tem">
                <img src="{!! url('/image/icone_temoignage/picto_ravalement.png') !!}" class="" alt="" />
              </div>
              <div class="text_tem">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              </div>
            </div>

             <div class="item_tem">  
              <div class="image_icon_tem">
                <img src="{!! url('/image/icone_temoignage/picto_salle-bain.png') !!}" class="" alt="" />
              </div>
              <div class="text_tem">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              </div>
            </div>

            <div class="item_tem">  
              <div class="image_icon_tem">
                <img src="{!! url('/image/icone_temoignage/picto_temoignage.png') !!}" class="" alt="" />
              </div>
              <div class="text_tem">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              </div>
            </div>


            <div class="item_tem">  
              <div class="image_icon_tem">
                <img src="{!! url('/image/icone_temoignage/picto_terrassement.png') !!}" class="" alt="" />
              </div>
              <div class="text_tem">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              </div>
            </div>

            <div class="item_tem">  
              <div class="image_icon_tem">
                <img src="{!! url('/image/icone_temoignage/picto_toiture.png') !!}" class="" alt="" />
              </div>
              <div class="text_tem">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              </div>
            </div> -->

        </div>
      </div>
      
    </div>

    <!-- Page Contact -->
    <div class="content_faq current" id="tab-1">
        <div class="faq_contact">
            <div class="title_contact">
              <label for="">Questions générales</label>
            </div>
            <div class="response_contact">
              <div class="item_response">
                @if(isset($faqs))
                  @foreach($faqs as $faq)
                    @if($faq->name=="Question générales")
                      <button class="accordion">{{$faq->question}}</button>
                      <div class="panel">
                        <p>{{$faq->respone}}</p>
                      </div>
                    @endif
                  @endforeach
                @endif
        
              </div>
          </div>
        </div>
        <div class="faq_contact">
            <div class="title_contact">
              <label for="">Demande de devis</label>
            </div>
            <div class="response_contact">
              <div class="item_response">
                 @if(isset($faqs))
                  @foreach($faqs as $faq)
                    @if($faq->name=="Demande de devis")
                      <button class="accordion">{{$faq->question}}</button>
                      <div class="panel">
                        <p>{{$faq->respone}}</p>
                      </div>
                    @endif
                  @endforeach
                @endif
        
              </div>
          </div>
        </div>
      <div class="faq_contact">
          <div class="title_contact">
            <label for="">Après la demande de devis</label>
          </div>
        <div class="response_contact">
          <div class="item_response">
            @if(isset($faqs))
                  @foreach($faqs as $faq)
                    @if($faq->name=="Après la demande de devis")
                      <button class="accordion">{{$faq->question}}</button>
                      <div class="panel">
                        <p>{{$faq->respone}}</p>
                      </div>
                    @endif
                  @endforeach
                @endif
      
          </div>
        </div>
      </div>
      <div class="limite_faq"></div>
      <div class="question_area">
        <div class="title_contact">
          <label for="">Vous avez encore des questions?</label>
        </div>
        <a href="#" class="boutton_question">CONTACTEZ NOUS</a>
      </div>
    </div>
   
  </section>
  @endsection
  @section('additional-script')
    {!! Html::script('js/front/faq.js') !!}
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }
      </script>

  @endsection
