@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/faq.css') !!}
      {!! Html::style('css/front/faq_responsive.css') !!}
      {!! Html::style('css/front/how_work.css') !!}
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
        <div class="item_menu" data-tab="tab-3" id="recrutement_menus">
          <label for="" class="title_menu">Recrutement</label>
        </div>
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
      page about
    </div>

    <!-- Page Recrutements -->
    <div class="content_faq" id="tab-3">
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
    </div>

    <!-- Page Temoignages -->
    <div class="content_faq" id="tab-2">
      <div class="test_tem">
        <p>Chaque jour notre équipe reçoit des témoignagnes de satisfaction et des remerciements envoyés par nos utilisateurs. Nous en avons sélectionné quelques-uns pour vous.</p>
      </div>
      <div class="content_tem">
        <div class="item_tem">
          <div class="image">
            
          </div>
          <div class="text_tem">
            
          </div>
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
