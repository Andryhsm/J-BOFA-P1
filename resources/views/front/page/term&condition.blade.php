@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/tarif.css') !!}
      {!! Html::style('css/front/how_work.css') !!}
      {!! Html::style('css/front/how_work_responsive.css') !!}

  @endsection

  @section('content')
    <section class="tarifs" style="background-image:url({!! url('/image/front/images/fond23.jpg') !!})">
      <div class="content_tarif">
        <div class="item_tarif">
          <label for="" class="title_bold_tarif">Termes et Conditions</label>
        <!--   <div class="tarif_citation">
            <label for="" class="title_liste_tarif">Je trouve des chantiers</label>
            <ul>
              <li>Paramétrage de mon compte : <strong>métiers</strong>&nbsp;et&nbsp;<strong>départements</strong> </li>
              <li>Accès à mon compte en ligne et sur l’<strong>application</strong></li>
              <li>Visualisation des <strong>chantiers géolocalisés</strong> et validés par nos conseillers</li>
              <li>Accès aux <strong> coordonnées des particuliers </strong> (illimité) </li>
              <li><strong>Collecte d’avis</strong>suite aux chantiers réalisés</li>
            </ul>
          </div> -->

          <!-- <div class="tarif_citation">
            <label for="" class="title_liste_tarif">Je suis visible sur internet</label>
            <ul>
              <li>Paramétrage de mon compte : <strong>métiers</strong>&nbsp;et&nbsp;<strong>départements</strong> </li>
              <li>Accès à mon compte en ligne et sur l’<strong>application</strong></li>
              <li>Visualisation des <strong>chantiers géolocalisés</strong> et validés par nos conseillers</li>
              <li>Accès aux <strong> coordonnées des particuliers </strong> (illimité) </li>
              <li><strong>Référencement </strong> dans <strong>notre annuaire </strong> </li>
            </ul>
          </div> -->

          <div class="tarif_example">
            <label for="" class="title_example_tarif">123 Artisans: Terms et condition d'utilisation</label>
            <div class="text_example">
              <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
              <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            </div>
            <div class="btn_example_tarif">
              <a href="{{route('inscription')}}" class="btn_tarif_example">Je m’inscris à l’offre chantiers</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content_page_how_work">
      <label for="" class="title_content">Comment ça marche ?</label>
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
            <!-- Accédez à toutes les demandes détaillées -->
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

    <section class="estimation_free">
      <div class="content_estimation_free">
        <label for="" class="title_simple_estimation">Pour une estimation gratuite et sans engagement, contactez-nous : </label>
        <label for="" class="text_simple_estimation">04 75 78 989</label>
        <label for="" class="text_simple_estimation">loremipsum@dolorethasmany.com</label>
      </div>
    </section>
    <section>
      <div class="">
          <!-- L'offre chantier comprend (en cours) -->
      </div>
    </section>
  @endsection
  @section('additional-script')

  @endsection
