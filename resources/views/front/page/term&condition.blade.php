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
          <label for="" class="title_bold_tarif">Mention légale</label>
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
            <label for="" class="title_example_tarif">1 - PROPRIÉTÉ DU SITE</label>
            <div class="text_example">
              <p>Site édité par Jaouad AZOUM ENTREPRISE INDIVIDUELLE dont le siège social est situé au 84 route de bonsecours 76000 Rouen - Téléphone : +33767130959 - Siren: 798351763.</p>
              
            </div>
            <label for="" class="title_example_tarif">2 - ENREGISTREMENT SUR LE SITE e-artisans.fr</label>
            <div class="text_example">
              <p>Tout Enregistrement réalisé dans le cadre du présent Site est soumis aux Conditions Générales d’utilisation.</p>
            </div>
            <label for="" class="title_example_tarif">3 - LOI INFORMATIQUE, FICHIERS ET LIBERTÉS</label>
            <div class="text_example">
              <p>En conformité avec les dispositions de la loi Informatique et Libertés du 6 janvier 1978, le traitement automatisé des données nominatives réalisées à partir du Site e-artisans.fr .Le règlement général sur la protection des données - RGPD
              23 mai 2018.</p>
              <p>Les utilisateurs sont informés que les informations qu'ils communiquent via les formulaires présents sur le Site e-artisans.fr sont nécessaires à l'exécution de la prestation offerte par ARTISANS exploitant le Site Internet. Si l'utilisateur y consent, ces informations peuvent cependant être communiquées ou revendues aux Partenaires de la Société.</p>
              <p>Les informations signalées par un astérisque " * " dans les formulaires ont un caractère obligatoire. L'enregistrement de ces informations par l'utilisateur est impératif pour le bon fonctionnement du service. L'utilisateur s'engage à ne communiquer et à s'inscrire sur le Site e-artisans.fr que des informations véridiques dont il est le dépositaire ou le mandataire.</p>
              <p>L'utilisateur est aussi informé que des informations personnelles (Adresse IP, Date, Heure, temps de connections, etc...) sont aussi enregistrées lors de sa visite sur le Site e-artisans.fr. Ses informations sont stockées et analysées pour repérer et identifier des utilisateurs frauduleux. L'utilisateur est informé qu'il dispose d'un droit d'accès et de rectification portant sur les données le concernant en écrivant à l'exploitant du site dont les coordonnées sont : C/O Société LESPACE, 1-5 Rue du 8 mai 1945 - 92110 Clichy ou par e-mail à : <strong>info@artisan.com</strong>.</p>
            </div>
            <label for="" class="title_example_tarif">4 - MARQUES</label>
            <div class="text_example">
              <p>Les marques d’ARTISANS figurant sur le Site sont des marques déposées.</p>
              <p>Toute reproduction totale ou partielle de ces marques sans autorisation expresse d’ARTISANS est donc prohibée. Vous pouvez nous contacter pour formuler ce type de demande à l'adresse électronique suivante : <strong>info@artisan.com</strong></p>
            </div>
            <label for="" class="title_example_tarif">5 - HÉBERGEMENT DU SITE</label>
            <div class="text_example">
              <p>Le prestataire assurant l'hébergement du site, ainsi que le stockage des informations, est la société Ligne Web Serveices, 10 rue Penthièvre - 75008 Paris - FRANCE.</p>
            </div>

            <div class="btn_example_tarif">
              <a href="{{route('inscription')}}" class="btn_tarif_example">Je m’inscris à l’offre chantiers</a>
            </div>
            <div class="contact_footer d-flex flex-wrap" style="margin: 4rem 0;">
              <strong>Une question ? Un renseignement ? </strong>&nbsp; <p>Contactez-nous par téléphone : </p>&nbsp;
              <label for="" class="tel_contact"> +261 88 42 455 28</label>&nbsp;
              <p> ou par E-mail : </p>&nbsp; <label for="" class="tel_contact"> loremipsum@dolorethasmany.com</label>
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
