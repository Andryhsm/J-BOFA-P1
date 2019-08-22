@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/faq.css') !!}
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
        <div class="item_menu">
          <label for="" class="title_menu">Qui nous sommes?</label>
        </div>
        <div class="item_menu">
          <label for="" class="title_menu">Recrutement</label>
        </div>
        <div class="item_menu">
          <label for="" class="title_menu">Temoignages</label>
        </div>
        <div class="item_menu">
          <label for="" class="title_menu">Contact</label>
        </div>
      </div>
    </div>

    <div class="content_faq">
      <div class="faq_contact">
        <div class="title_contact">
          <label for="">Questions générales</label>
        </div>
        <div class="response_contact">
          <div class="item_response">
            <button class="accordion">Section 1</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Section 2</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Section 3</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

          </div>
      </div>
    </div>
      <div class="faq_contact">
        <div class="title_contact">
          <label for="">Demande de devis</label>
        </div>
        <div class="response_contact">
          <div class="item_response">
            <button class="accordion">Section 1</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Section 2</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Section 3</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

          </div>
      </div>
    </div>
    <div class="faq_contact">
      <div class="title_contact">
        <label for="">Après la demande de devis</label>
      </div>
      <div class="response_contact">
        <div class="item_response">
          <button class="accordion">Section 1</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          <button class="accordion">Section 2</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          <button class="accordion">Section 3</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

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
  </section>
  @endsection
  @section('additional-script')
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
