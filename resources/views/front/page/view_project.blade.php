@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
  @endsection

  @section('content')
  <section class="container_view_project">
    <div class="form_item_project">
      <div class="desc_view_project">
        <label for="" class="title_view_project">5 devis travaux gratuits en 48h</label>
        <label for="" class="text_view_project">Devis en aménagement des combles : Trouvez le professionnel qu’il vous faut pour vos travaux</label>
        <ul class="liste_view_project">
          <li>Des professionnels de votre région</li>
          <li>30 000 avis clients vérifiés</li>
          <li>Gratuit et sans engagement</li>
        </ul>
      </div>

      <div class="formulaire_view_project">
        formulaire
      </div>
    </div>
  </section>
  @endsection


  @section('additional-script')

  @endsection
