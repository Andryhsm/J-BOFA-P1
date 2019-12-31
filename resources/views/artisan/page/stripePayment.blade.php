<div class="container container_stripe">
        <div class="row row_stripe">
            <div class="col-md-12"> 

                <div class="activate_pro">
                    <p class="text_pro">
                        Pour devenir un(e) membre Pro, veuillez payer 360€ pour une abonnement de 1 ans
                    </p>
                    <p class="text_pro">360€ pour découvrir l'ensemble de vos projet et de profiter au maximum nos service</p>
                    <p class="text_pro">Avec Stripe, nous assurons la sécuriter de votre payment</p>

                </div>
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table" >
                        <div class="row display-tr" >
                            <h3 class="panel-title display-td" >Details du payement</h3>
                            <div class="display-td" >                            
                                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                            </div>
                        </div>                    
                    </div>
                    <div class="panel-body d-flex flex-wrap justify-content-center">
      
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
      
                        <form role="form" action="{{ url('artisan/payment') }}" method="post" class="require-validation"
                                                         data-cc-on-file="false"
                                                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                        id="payment-form">
                            @csrf
      
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Nom du carte</label> <input
                                        class='form-control' size='4' type='text'>
                                </div>
                            </div>
      
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group card required card_payment'>
                                    <label class='control-label'>Numero de la carte</label> <input
                                        autocomplete='off' class='form-control card-number' size='20'
                                        type='text'>
                                </div>
                            </div>
      
                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                        class='form-control card-cvc' placeholder='ex. 311' size='4'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Mois d'expiration</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Année d'expiration</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                        type='text'>
                                </div>
                            </div>
      
                            <div class='form-row row'>
                                <div class='col-md-12 form-group '>
                                    <input type="checkbox" name="cgv" required><label style="font-size: 10px">J'accepte les <span style="color: #337ab7;" id="cgv">Conditions Générales de vente </span> et renonce expressément à l'exercice de mon droit de rétractation</label>
                                </div>
                            </div>
                            <div class='form-row row' id="cgv_txt">
                                <div class='col-md-12  form-group hide' id="error">
                                    <div class='alert-warning alert'>
                                        <div class="artisan-email-page">
                                            <div class="artisan-page-header">

                                                <div class="artisan-mail-title">
                                                    <p>CONDITION DE GESTION GENERALE DE VENTE</p>
                                                </div>
                                            </div>
                                            <div class="artisan-page-content">
                                                <div class="artisan-introduction-text">
                                                    <p class="artisan-hello"><h1>INTRODUCTION</h1><p>
                                                    <p>Le Site Internet accessible à l'adresse URL www.e-artisans.fr (ci-après « <span style="font-weight: bold; ">le Site<br>
                                                        E-artisans. Fr/connexion </span>») est la propriété de l’éditeur en programmation informatique Jaouad Azoum entrepreneur
                                                        individuel<br><br>
                                                        Inscrit au Registre du Commerce de Rouen SIRÈN 798351763 ,SIRET 79835176300023 , dont le siège social est
                                                        situé au 84 route de bonsecours 76000 Rouen
                                                        <p>Par le biais de ce Site, E-artisans. Fr entend faciliter la rencontre entre des personnes en recherche de professionnels
                                                        pour réaliser diverses prestations de travaux (ci-après « <span style="font-weight: bold; ">les Utilisateurs</span> ») et lesdits professionnels, membres du
                                                        réseau e-artisans.frinscrits sur le Site e-artisans.frPRO (ci-après « <span style="font-weight: bold; ">les Membres</span>»). Dans ce cadre, HABITATPRESTO
                                                        met à disposition des Utilisateurs un service leur permettant d'effectuer en ligne une demande de devis, à laquelle
                                                        plusieurs Membres pourront répondre.</p>
                                                        <p>Les Membres accèdent aux services de E-artisans.fr par le paiement d'une cotisation mensuelle.
                                                        Les Utilisateurs peuvent effectuer leurs demandes de devis par le biais du site Internet accessible à l'adresse URl<br>
                                                        <span style="color: #ff580c;">https://www.e-artisans.fr</span></p>
                                                        <p>Une fois la prise de contact effectuée entre l'Utilisateur et le Membre, l'éventuelle poursuite de la relation est effectuée
                                                        en-dehors des Sites e-arisans.fr de Jaouad AZOUM n'intervient en aucun cas dans la formation d'un éventuel accord
                                                        entre ces deux parties.

                                                    </p>
                                                    <p>
                                                        <h1>ARTICLE 1 - DÉFINITIONS</h1>
                                                    </p>
                                                    <p>Les termes suivants désignent :

                                                        « <span style="font-weight: bold; ">Abonnement </span>» : Désigne le droit d'accès au Service pour le Membre, ayant pour contrepartie le versement d'une
                                                        cotisation mensuelle.
                                                    </p>
                                                    <p>
                                                        « <span style="font-weight: bold; ">Bon de commande</span> » : Désigne le document envoyé par email au Membre récapitulant le ou les Services souscrits.
                                                        « <span style="font-weight: bold; ">Demande de devis</span> » : Désigne le Processus permettant à l'Utilisateur, recherchant un professionnel pour exécuter
                                                        une prestation de service déterminée, de détailler cette recherche afin de recevoir par la suite des devis de
                                                        professionnels Membres de E-artisans.fr
                                                    </p>
                                                    <p>
                                                        « <span style="font-weight: bold; ">Données ou Contenu(s)</span> » : Désigne les informations de toute nature, sous forme numérique, comme par exemple
                                                        un texte, une image, une vidéo, un fichier etc.
                                                    </p>
                                                    <p>
                                                        « <span style="font-weight: bold; ">Espace personnel </span>» : Désigne l'espace, sur le Site e-artisans.fr , auquel l'Utilisateur peut se connecter par
                                                        l'utilisation d'un identifiant et d'un mot de passe et contenant des informations personnelles et lui permettant
                                                        d'utiliser l'Outil.
                                                    </p>
                                                    <p>
                                                        « <span style="font-weight: bold; ">Fiche Membre </span>» : Désigne la page du Membre sur laquelle sont indiquées toutes ses informations, et tous les avis
                                                        laissés par les Utilisateurs à son sujet. Cette Fiche Membre est publique.
                                                    </p>
                                                </div>

                                                <!-- <div class="artisan-firma">
                                                    <p>Avec la société<p>
                                                    <div class="artisan-information">
                                                        <div class="artisan-information-wrapper">
                                                            <label>Société&nbsp;:</label><span>inspection et rénovation de l'habitat</span>
                                                        </div>
                                                        <div class="artisan-information-wrapper">
                                                            <label>Adresse&nbsp;:</label><span>7 rue marconi</span>
                                                        </div>
                                                        <div class="artisan-information-wrapper">
                                                            <label>Téléphone&nbsp;:</label><span>066215444</span>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <div class="artisan-mail-footer">
                                                    <p>Dès à présent vous pouvez contacter cette entreprise pour fixer un rendez-vous. Selon notre charte de qualité, les professionnels s'engagent à prendre contact avec vous sous 72h.</p>

                                                    <p>Nous vous remercions d'avoir fait appel au service HelloArtisan. Pour toute information complémentaire n'hésitez pas à nous contacter.</p>

                                                    <p>Merci de votre confiance, à bientôt.</p>
                                                    <p>L'équipe HelloArtisan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='form-row row'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Ressayez s'il vous plait !.</div>
                                </div>
                            </div>
      
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Payer maintenant - 360€</button>
                                </div>
                            </div>
                              
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </div>