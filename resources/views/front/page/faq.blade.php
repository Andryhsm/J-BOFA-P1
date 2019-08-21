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
            <div class="panel-group group1" id="accordion_faq1" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="accordion_faq1" data-toggle="collapse" data-parent="#accordion_faq1_h0" href="#accordion_faq1_b0" aria-expanded="true" aria-controls="accordion_faq1_b0">
                            <div class="panel-caret"></div>
                            <label class="panel-title">Pourquoi m'inscrire et créer mon compte utilisateur ?</label>
                          </div>
                          <div id="accordion_faq1_b0" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion_faq1" style="" aria-expanded="true">
                            <div class="panel-body">
                              La création d'un compte utilisateur vous facilite le dépôt de demandes et améliore la gestion de vos projets.<br>
                              -	Gérez vos projets et suivez leurs avancements<br>
                              -	Accédez aux coordonnées des professionnels<br>
                              -	Accumulez des points de fidélité et échangez les contre des cadeaux.
                            </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="accordion_faq1" data-toggle="collapse" data-parent="#accordion_faq1_h1" href="#accordion_faq1_b1" aria-expanded="false" aria-controls="accordion_faq1_b1">
                            <div class="panel-caret"></div>
                            <label class="panel-title">Ce service est-il vraiment gratuit ?</label>
                          </div>
                          <div id="accordion_faq1_b1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_faq1">
                            <div class="panel-body">
                                OUI. Le service proposé par Habitatpresto est 100% gratuit pour les demandeurs de devis (particuliers ou entreprises).
                            </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="accordion_faq1" data-toggle="collapse" data-parent="#accordion_faq1_h2" href="#accordion_faq1_b2" aria-expanded="false" aria-controls="accordion_faq1_b2">
                            <div class="panel-caret"></div>
                            <label class="panel-title">Mais alors d'où provient votre rémunération ?</label>
                          </div>
                          <div id="accordion_faq1_b2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_faq1">
                            <div class="panel-body">
                                Notre rémunération provient uniquement de la cotisation annuelle payée par les prestataires qui souhaitent avoir accès aux demandes de devis dans leur région.
                            </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="accordion_faq1" data-toggle="collapse" data-parent="#accordion_faq1_h3" href="#accordion_faq1_b3" aria-expanded="false" aria-controls="accordion_faq1_b3">
                            <div class="panel-caret"></div>
                            <label class="panel-title">Quels sont vos liens avec les prestataires ?</label>
                          </div>
                          <div id="accordion_faq1_b3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_faq1">
                            <div class="panel-body">
                                Nous n'avons aucun lien particulier avec les prestataires. Nous n'en privilégions aucun et ne prenons aucune commission sur les ventes qu'ils effectuent, ce qui vous garantit un devis aussi neutre que possible. Nous sommes juste un simple intermédiaire entre les demandeurs de devis et les prestataires. Ensuite c'est à vous de jouer et de choisir le devis qui vous paraît avoir le meilleur rapport qualité prix.
                            </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="accordion_faq1" data-toggle="collapse" data-parent="#accordion_faq1_h4" href="#accordion_faq1_b4" aria-expanded="false" aria-controls="accordion_faq1_b4">
                            <div class="panel-caret"></div>
                            <label class="panel-title">Habitatpresto est-il responsable de l'offre des prestataires ?</label>
                          </div>
                          <div id="accordion_faq1_b4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_faq1">
                            <div class="panel-body">
                                Habitatpresto vous met gratuitement en relation avec des prestataires mais ne peut être tenu responsable de l'offre des prestataires. De manière générale, tous les contrats que vous signerez avec les prestataires relèvent de votre seule et entière responsabilité
                            </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="accordion_faq1" data-toggle="collapse" data-parent="#accordion_faq1_h5" href="#accordion_faq1_b5" aria-expanded="false" aria-controls="accordion_faq1_b5">
                            <div class="panel-caret"></div>
                            <label class="panel-title">À qui allez-vous divulguer mes coordonnées ?</label>
                          </div>
                          <div id="accordion_faq1_b5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_faq1">
                            <div class="panel-body">
                                En tant qu'adhérent de la CNIL (Commission Nationale de l'Informatique et des Libertés), nous avons l'obligation de vous demander l'autorisation pour céder vos coordonnées à toutes personnes autres que nos prestataires. Les informations vous concernant, recueillies à l'occasion d'une demande de devis, sont nécessaires pour la prise en compte de votre demande. Elles seront transmises uniquement aux prestataires référencés s'étant acquittés d'un droit pour les obtenir. Ce respect de la loi est matérialisé par la case à cocher :" Je souhaite bénéficier d'offres promotionnelles d'autres annonceurs spécialement sélectionnés ". Nous nous engageons donc à respecter intégralement la Loi Informatique et Liberté du 6 janvier 1978. Notez qu'en cochant ces cases, vous bénéficierez gratuitement d'offres de nos partenaires susceptibles de vous intéresser.
                            </div>
                          </div>
                      </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
  @section('additional-script')

  @endsection
