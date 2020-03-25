<div class="container container_stripe artisan-payment">
    <div class="row row_stripe">
        <div class="col-md-12 full-with-padding"> 
            <div class="activate_pro">
                <p class="text_pro">
                    Pour devenir un(e) membre Pro, veuillez payer 270€ pour une abonnement de 1 an
                </p>
                <p class="text_pro">270€ pour découvrir l'ensemble de vos projet et de profiter au maximum nos service</p>
                <p class="text_pro">Avec Stripe, nous assurons la sécuriter de votre payment</p>
                
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
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
  
                    
  
                    <form role="form" action="{{ url('artisan/payment') }}" method="post" class="require-validation"
                                                     data-cc-on-file="false"
                                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                    id="payment-form">
                        @csrf
  
                        <div class='form-row'>
                            <input type="hidden" name="email" class="email" value="{{auth()->user()->email}}">
                            <input type="hidden" name="name" class='form-control name_user' value="{{auth()->user()->name}}">
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Nom du carte</label> <input
                                    class='form-control' size='4' type='text' name="name" placeholder="exemple: visa">
                            </div>
                        </div>
  
                        <div class='form-row'>
                            <div class='col-xs-12 form-group card required card_payment'>
                                <label class='control-label'>Numero de la carte</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text' placeholder="123 123 123 123 1231">
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-xs-12 form-group required address'>
                                <label class='control-label'>Adresse</label> 
                                <input
                                    autocomplete='on' class='form-control adress_pay' name="address" 
                                    type='text' placeholder="n° et nom de voie, rue, route">
                            </div>
                        </div>
  
                        <div class='form-row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Mois d'expiration</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text' data-val="{{auth()->user()->first_name.' '.auth()->user()->name}}">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Année d'expiration</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row'>
                            <div class='col-md-12 form-group '>
                                <input type="checkbox" name="cgv" required><label style="font-size: 10px">J'accepte les <span style="color: #337ab7;" id="cgv">Conditions Générales de vente </span> et renonce expressément à l'exercice de mon droit de rétractation</label>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Ressayez s'il vous plait !.</div>
                            </div>
                        </div>
  
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Payer maintenant - 270€/an</button>
                            </div>
                        </div>
                          
                    </form>
                </div>
            </div>        
        </div>
    </div>
</div>

<!-- Modal cgv -->

<div class='modal-cgv hide justify-content-center' id="cgv_txt">
    <div class='modal-cgv-content full-height full-width' id="error">
        <div class='alert-warning alert full-height full-width d-flex justify-content-end flex-wrap'>
            <button class="close-modal d-flex justify-content-center align-items-center">x</button>
            <div class="artisan-email-page full-width">
                <div class="artisan-page-header">

                    <div class="artisan-mail-title">
                        <p>CONDITION DE GESTION GENERALE DE VENTE</p>
                    </div>
                </div>
                <div class="artisan-page-content full-width">
                    <div class="artisan-introduction-text">
                        <p class="artisan-hello"><h1>INTRODUCTION</h1><p>
                        <p>Le Site Internet accessible à l'adresse URL www.e-artisans.fr (ci-après « <span style="font-weight: bold; ">le Site<br>
                            E-artisans. Fr/connexion </span>») est la propriété de l’éditeur en programmation informatique Jaouad Azoum entrepreneur
                            individuel<br><br>
                            Inscrit au Registre du Commerce de Rouen SIRÈN 798351763 ,SIRET 79835176300023 , dont le siège social est
                            situé au 84 route de bonsecours 76000 Rouen
                            <p>Par le biais de ce Site, E-artisans. Fr entend faciliter la rencontre entre des personnes en recherche de professionnels
                            pour réaliser diverses prestations de travaux (ci-après « <span style="font-weight: bold; ">les Utilisateurs</span> ») et lesdits professionnels, membres du
                            réseau e-artisans.fr inscrits sur le Site e-artisans.fr PRO (ci-après « <span style="font-weight: bold; ">les Membres</span>»). Dans ce cadre, artisans
                            met à disposition des Utilisateurs un service leur permettant d'effectuer en ligne une demande de devis, à laquelle
                            plusieurs Membres pourront répondre.</p>
                            <p>Les Membres accèdent aux services de e-artisans.fr par le paiement d'une cotisation mensuelle.
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
                            professionnels Membres de e-artisans.fr
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
                        <p>
                            « <span style="font-weight: bold; ">Membre</span> » : Désigne la personne physique ou morale, inscrite au Service, qui propose des produits ou services à
                            l'Utilisateur et qui peut bénéficier du service de création de Site internet et les services associés.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Module</span> » : Désigne la catégorie d'activité et/ou département d'activité proposé sur le Site artisans.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Nom de domaine</span> » : Désigne l'adresse unique choisie par le Membre pour y faire apparaître le Site Internet qu'il aura créé par l'intermédiaire de l'Outil.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Outil</span> » : Désigne la fonctionnalité qui permet de créer des sites internet et de gérer leur visibilité en ligne.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Partenaire</span> » : Désigne l'entreprise tierce avec laquelle E-ARTISANS.FR. entretient des relations commerciales
                            dans le but d'apporter des services ou des informations complémentaires à l'Utilisateur ou au Membre.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Partie(s)</span> » : Désigne individuellement le Membre ou E-ARTISANS.FR et collectivement le Membre et
                            artisans.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Période Initiale d'Engagement</span> » : Désigne la première durée d'Engagement du Membre et de
                            E-ARTISANS.FR , d'une durée correspondant à 12 Périodes Mensuelles, telle que définie à l'article 5.1 des présentes
                            Conditions Générales de Vente et dans le Bon de commande.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Période Mensuelle</span> » : Désigne la période de 28 à 31 jours au titre de laquelle le Membre a versé la cotisation due
                            et E-ARTISANS.FR mis à sa disposition le Service.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Service</span> » : Désigne indistinctement le Service Chantier et le Service Internet
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Service Chantier</span>» : Désigne le service proposé par E-artisans.fr aux Membres par le biais du Site E-artisans.fr
                            consistant en la transmission de Demandes de devis effectuées par des Utilisateurs.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Service de demande de devis</span> » : Désigne le service proposé par E-ARTISANS.FR l'Utilisateur par le biais du Site
                            artisans.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Service(s) internet</span> » : Désigne le service de création de Site internet et les services associés.
                        </p>
                        <p>
                            « <span style="font-weight: bold; ">Site Internet</span> » :
                        </p>
                        <h1>ARTICLE 2 -</h1>
                        <p>
                            Désigne le site internet créé pour le Membre grâce à l'Outil.
                            « <span style="font-weight: bold; ">Site</span> » : Désigne le site E-ARTISANS.FR
                            « <span style="font-weight: bold; ">Utilisateur</span> » : Désigne la personne physique ou morale effectuant une Demande de devis.
                        </p>
                        <h1 class="objet">OBJET</h1>
                        <p>
                            E-ARTISANS.FR propose via les Sites E-ARTISANS.FR et E-ARTISANS.FR PRO, un service d'intermédiation,mettant en relation des Utilisateurs et des Membres.
                            Les Utilisateurs déposent leurs Demandes de devis, qui sont transmises par E-ARTISANS.FR
                            à des Membres inscrits par le biais du Site E-ARTISANS.FR, et reçoivent de zéro à cinq devis de la part des Membres.
                            Les présentes Conditions Générales de Vente (ci-après « CGV ») ont pour objet d'encadrer la relation entre et tout
                            Membre.
                            Les Membres ont été informés du fait que le Service qu'ils se proposent d'utiliser doit être en conformité directe avec
                            leur statut juridique et/ou leurs activités professionnelles.
                            Dans le cas contraire, le Membre reconnaît expressément en assumer l'entière responsabilité et s'engage
                            notamment à indemniser E-ARTISANS.FR lors que celle-ci aurait subi les conséquences d'une utilisation du Service
                            par le Membre qui n'aurait pas été en conformité avec son statut juridique et/ou ses activités professionnelles. Par
                            ailleurs, E-ARTISANS.FR fournit un Outil permettant de créer des Sites Internet présentant l'offre commerciale des
                            Membres, à l'exclusion de tout site marchand. Le Site Internet créé peut être simple (une page) ou complet (nombre
                            de pages variables en fonction du besoin et du choix du Membre).
                            Le Site Internet simple comprend les fonctionnalités suivantes :
                            <ul>
                                <li> Nom de domaine en .fr ou .com, récupérable par le Membre à tout moment dans les conditions prévues à
                                    l'article 11.2 des présentes CGV,
                                </li>
                                <li>Site compatible avec les mobiles et tablettes, Hébergement,</li>
                                <li>Modifications illimitées via un Espace Personnel,</li>
                                <li>Nombre de page : 1,</li>
                                <li>Chaque site peut contenir les éléments suivants : textes, images, titres, séparateurs, pictogrammes, formulaires
                                </li>
                                <li>personnalisables, cartes dynamiques.</li>
                            </ul></p>
                            <p>Le Site Internet complet comprend les fonctionnalités suivantes :</p>
                                <ul>
                                    <li>Nom de domaine en .fr ou .com, récupérable par le Membre à tout moment dans les conditions prévues à
                                    l'article 11.2 des présentes CGV,</li>
                                    <li>Site compatible avec les mobiles et tablettes,</li>
                                    <li>Hébergement</li>
                                    <li>Modifications illimitées via un Espace Personnel, Nombre
                                    de pages : illimité,</li>
                                </ul>
                        <p>
                            Chaque site peut contenir les éléments suivants : textes, images, titres, séparateurs, pictogrammes,
                            formulaires personnalisables, diaporamas, albums photos, vidéos, boutons, un menu principal, menus secondaires, cartes, liaisons aux réseaux sociaux, un blog interne, un livre d'or, fichiers téléchargeables,
                            Rapport de trafic.
                            E-ARTISANS.FR propose également un service d'Annuaire des professionnels : l'inscription du Membre sur
                            l'annuaire des professionnels E-ARTISANS.FRpermet aux internautes qui recherchent un professionnel dans un
                            type de métier ou localisation, de le trouver plus facilement.
                        </p>
                        <h1>ARTICLE 4 -</h1>
                        <h1 class="objet">DISPOSITIONS GÉNÉRALES</h1>
                        <p>
                            <span style="font-weight: bold; ">3.1. Objet des CGV</span>
                            Les présentes CGV sont exclusivement applicables à la vente du Service disponible sur le Site E-ARTISANS.FR PRO
                        </p>
                        <P>
                            <span style="font-weight: bold; ">3.2. Domaine d'application des CGV</span>
                            Les CGV régissent les contrats de vente du Service disponible sur le Site E-ARTISANS.FR PRO.
                        </P>
                        <p>
                            <span style="font-weight: bold; ">3.3. Disponibilité et opposabilité des CGV</span>
                            Les CGV sont mises à la disposition du Membre sur le Site E-ARTISANS.FR PRO.
                            Les CGV sont opposables au Membre qui reconnaît, en exprimant son consentement lors de son inscription ou de sa
                            souscription, les avoir acceptées.
                            Cette acceptation vaut adhésion par le Membre aux CGV en vigueur au jour de l'inscription ou de la souscription dont
                            la conservation et la reproduction sont assurées par E-ARTISANS.FR .
                        </p>
                        <p>
                            <span style="font-weight: bold; ">3.4. Modification des CGV</span>
                            artisans se réserve le droit de modifier les CGV à tout moment.
                            Conformément à l'article 5.1 des présentes CGV, lors de la Période Initiale d'Engagement les CGV applicables au
                            Membre restent celles en vigueur au jour de sa souscription, sauf acceptation par le Membre des nouvelles CGV.
                        </p>
                        <h1>ARTICLE 5 -</h1>
                            <p>En cas de modification de l'un ou de plusieurs éléments essentiels des CGV, E-ARTISAN.FR s'engage à prévenir le
                            Membre, par une notification apparente sur son espace personnel, de ladite modification dans un délai de 30 (trente)
                            jours avant l'entrée en vigueur des Conditions Générales de Vente modifiées.
                        </p>
                        <p>
                            Les Membres se connectant à leur Espace personnel après l'entrée en vigueur des CGV seront irréfragablement
                            réputés avoir accepté lesdits amendements et modifications.
                        </p>
                        <h1 class="objet">SERVICE</h1>

                        <p>
                            <span style="font-weight: bold; ">4.1 Contenu du Service</span>
                            E-ARTISANS.FR fournit au Membre, pour le Service chantier, des Demandes de devis.
                            Les devis sont fournis gratuitement par les Membres aux Utilisateurs. Cependant, les Membres peuvent facturer des
                            prestations annexes, dès lors, conformément à la législation en vigueur, qu'ils en ont précédemment averti l'Utilisateur.
                        </p>
                        <p>
                            Le Membre complète en outre son Profil Membre, qui contient ses diverses informations légales (nom, dénomination
                            de la société, numéro SIRET, ...). Il peut également mettre à la disposition des Utilisateurs certains documents légaux
                            (Kbis, assurance, ...) et afficher diverses informations (labels, ...).
                        </p>
                        <p>
                            Ce Profil Membre est complété par les avis déposés par les Utilisateurs sur le Membre.
                        </p>
                        <p>
                            E-ARTISANS.FR fournit au Membre, pour le Service Internet, un Outil permettant de créer des Sites Internet
                            présentant l'offre commerciale des Membres, à l'exclusion de tout site marchand.
                        </p>
                        <p>
                            E-ARTISANS.FR fournit également au Membre des conseils et un suivi des nouveautés du secteur des travaux par
                            l'envoi d'une newsletter hebdomadaire.
                        </p>
                        <p>
                            <span style="font-weight: bold; ">4.2 Accès au Service</span>
                            Afin d'accéder au Service, les Membres doivent y souscrire par le biais du Site E-ARTISANS.FR PRO. A cette fin, les
                            Membres doivent indiquer toutes les informations nécessaires dans le formulaire disponible sur le Site
                        </p>
                        <h1>ARTICLE 6 -</h1>
                        <p>
                            e-artisans.fr, procéder au choix des Modules et/ou du Site Internet pour lesquels ils souhaitent souscrire, puis
                            procéder au paiement après avoir vérifié et validé leur commande et reconnu avoir lu et accepté les présentes CGV.
                            L'utilisation du Service est soumise au paiement d'une cotisation mensuelle et de frais de mise en service lors de la
                            souscription.
                            Pour le Service Chantier, les Membres choisissent les catégories et les départements pour lesquels ils souhaitent
                            accéder aux Demandes de devis. Chaque Membre doit choisir au minimum une catégorie et un département.
                            Les deux Services sont indépendants l'un de l'autre.
                        </p>

                            <h1 class="objet">DURÉE</h1>

                        <p>
                            <span style="font-weight: bold; ">5.1 Durée de l'abonnement</span>
                            L'Abonnement prend effet au jour de l'encaissement par E-ARTISANS.FR du premier paiement ou au jour de la
                            réception de l'autorisation de prélèvement en cas de paiement par prélèvement SEPA.
                            Le contrat d'Abonnement est conclu pour une durée correspondant à à 12 (douze) Périodes Mensuelles (ci-après «
                            Période Initiale d'Engagement ») selon les mentions du Bon de commande. A l'issue de cette durée, le contrat
                            d'abonnement est renouvelé pour une durée indéterminée, sauf dénonciation par l'une ou l'autre des Parties dans
                            les conditions indiquées à l'article 5.2 des présentes CGV.
                        </p>
                        <p>
                            <span style="font-weight: bold; ">5.2. Modalités de dénonciation du renouvellement de l'abonnement</span>
                            Chacune des Parties peut dénoncer le renouvellement de l'Abonnement, au plus tard 15 (quinze) jours avant le
                            terme de la Période Initiale d'Engagement par lettre recommandée. Dans le cas où le Membre procède à cette
                            dénonciation, il doit adresser sa lettre à Jaouad AZOUM ENTREPRISE INDIVIDUELLE dont le siège social est situé au 84 route de bonsecours 76000 Rouen - Téléphone : <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a> - Siren: 798351763.
                        </p>
                        <p>
                            <span style="font-weight: bold; ">5.3. Modalités de résiliation</span>
                            A l'issue de la Période Initiale d'Engagement, chacune des Parties peut résilier l'Abonnement par lettre recommandée.
                            Dans le cas où le Membre procède à cette résiliation, il doit adresser sa lettre àJaouad AZOUM ENTREPRISE INDIVIDUELLE dont le siège social est situé au 84 route de bonsecours 76000 Rouen - Téléphone : <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a> - Siren: 798351763.
                            Dès lors que la demande de résiliation a été effectuée au plus tard 15 (quinze) jours avant la fin de la Période
                            Mensuelle en cours, l'Abonnement est résilié à la fin de la Période Mensuelle en cours. Dans le cas contraire, la
                            résiliation prend effet à la fin de la Période Mensuelle suivante.
                        </p>
                        <p>
                            <span style="font-weight: bold; ">5.4. Résiliation pour faute</span>
                            En vertu des présentes CGV, e-artisans.fr s'engage notamment à :
                        </p>
                        <h1>ARTICLE 7 -</h1>
                        <ul>
                            <li>Fournir au Membre des Demandes de devis</li>
                            <li>Délivrer le Service à compter de l'encaissement du premier paiement ou de la réception de l'autorisation de
                            prélèvement en cas de paiement par prélèvement SEPA,</li>
                            <li>Garantir une bonne performance des Sites Internet dans la limite d'une utilisation normale et raisonnable
                            par le Membre. Le Membre est informé que si son utilisation n'est pas conforme, e-artisans.fr ne pourra
                            garantir cette performance,</li>
                            <li>Garantit l'accès à l'Outil et aux Sites Internet à hauteur de 99%, à l'exclusion des périodes de maintenance,</li>
                            <li>Assister le Membre lorsqu'il rencontre des difficultés techniques d'accès,</li>
                            <li>Rendre accessible le Site 24 heures sur 24 et 7 jours sur 7 sous réserve d'éventuelles pannes et interventions
                            de maintenance nécessaires au bon fonctionnement du Site.</li>
                        </ul>
                        <p>
                            En vertu des présentes CGV, le Membre s'engage notamment à :
                            <ul>
                                <li>Payer le prix convenu aux échéances convenues,</li>
                                <li>Respecter toutes dispositions légales et/ou règlementaires applicables, notamment celles relatives à son activité
                                professionnelle,</li>
                                <li>Adopter dans le cadre du Service un comportement qui n'est pas susceptible de nuire à la réputation de
                                e-artisans.fr,</li>
                                <li>Respecter les droits d'auteurs sur son Site Internet et garantir HABITAPRESTO contre toute action ou
                                réclamation intentée sur ce fondement par un tiers,</li>
                                <li>Utiliser les Outils conformément aux CGV et uniquement pour les fonctionnalités mentionnées dans les CGV</li>
                                <li>Respecter l'ordre public et les bonnes mœurs dans les Contenus qu'il publie sur son Site Internet,</li>
                                <li>Ne pas revendre ou mettre à disposition le Site Internet ou les Outils d'e-artisans.fr,</li>
                                <li>Prévenir e-artisans.fr de toute réclamation sur le Site Internet du Membre crée par e-artisans.fr,</li>
                                <li>Afficher les mentions légales sur son Site Internet permettant de l'identifier car le Membre est responsable du
                            Contenu qu'il affiche sur son Site Internet en vertu de la loi du 21 juin 2004.</li>

                            </ul>
                        </p>
                        <p>
                            Sauf disposition contraire des présentes CGV concernant certains manquements, en cas de non-respect par l'une
                            des Parties des obligations figurant ci-dessus, l'autre Partie pourra résilier le Contrat après envoi d'une lettre de mise
                            en demeure avec avis de réception restée sans effet pendant un délai de quinze (15) jours.
                        </p>
                        <h1>ARTICLE 6 - PRIX ET PAIEMENT DU PRIX</h1>
                        <p1><span style="font-weight: bold; ">6.1 Prix</span>
                            L'utilisation du Service est soumise au paiement d'une cotisation. Le montant de la cotisation dépend des Modules
                            et/ou du Site Internet choisis.
                            Le prix applicable est le prix mentionné dans le Bon de Commande au jour de la souscription au Service par le Membre.
                            Lors de son inscription, le Membre doit également procéder au paiement des frais de mise en service indiqués dans le
                            Bon de commande.
                            Le Membre ne peut résilier son Abonnement avant la fin de la Période Initiale d'Engagement. Néanmoins,
                            e-artisans.fr se réserve le droit d'accepter sa demande de résiliation moyennant (i) le paiement intégral des
                            sommes dues à la date considérée et (ii) le paiement de frais de gestion équivalant à cinquante (50) % du montant de
                            l'Abonnement restant à échoir. Ce montant ne saurait être inférieur à cent (100) euros.
                            A l'issue de la Période Initiale d'Engagement, e-artisans.fr est libre de modifier ses tarifs.En cours d'Abonnement, le Membre peut ajouter des Modules selon les modalités indiquées à l'article 6.3 des présentes
                            CGV.</p1>
                            <p1><span style="font-weight: bold; ">6.2 Paiement du prix</span>
                            <span style="font-weight: bold; ">6.2.1 Modalités de paiement</span>
                            Le paiement se fait mensuellement à terme à échoir.</p1>
                            <p1><span style="font-weight: bold; ">6.2.2 Moyens de paiement</span>
                            Le Membre peut procéder au paiement par chèque, virement bancaire, prélèvement bancaire ou carte bancaire.
                            Dès lors que le Membre choisit de payer par carte bancaire, il devra indiquer au plus tard 10 jours avant l'expiration de
                            sa carte bancaire le nouveau moyen de paiement qu'il souhaite utiliser pour effectuer le paiement des échéances
                            suivantes.
                            Durant la Période d'Engagement Initiale, le défaut de communication de cette information dans le délai imparti entraîne
                            l'exigibilité immédiate de toutes les sommes restant dues, qui pourront être prélevées avant l'échéance de la carte
                            bancaire.</p1>
                            <p1><span style="font-weight: bold; ">6.2.3 Retard de paiement</span>
                            Au bout de 3 tentatives de paiement restées infructueuses, le Membre sera considéré comme étant en retard de
                            paiement et pourra voir son Espace Personnel bloqué.
                            Le Membre sera invité à régulariser sa situation afin de pouvoir de nouveau accéder aux Services.
                            Tout retard de paiement donne lieu de plein droit à des pénalités d'un montant égal au taux d'intérêt appliqué par la
                            BCE (à son opération de refinancement la plus récente) majoré de 10 points ainsi que l'octroi d'une indemnité forfaitaire
                            de 40 euros due au titre des frais de recouvrement.
                            Dès lors que le Membre a ajouté un moyen de paiement valide, il reconnaît que les sommes impayées au titre de
                            l'Abonnement peuvent être prélevées sur ce moyen de paiement.
                            e-artisans.fr se réserve le droit de suspendre l'Abonnement en cas de retard de paiement dans l'attente de la
                            régularisation de la situation par le Membre. En cas de suspension durant la Période d'Engagement Initiale, la durée
                            de cette Période d'Engagement Initiale est prorogée de la durée de la (des) suspension(s).
                            En cas d'impayés, le Membre ne reçoit plus de demande de devis pour le service Chantier et l'accès à son Site Internet
                            est suspendu.6.3 Ajout ou suppression de module(s)
                            Le Membre peut ajouter ou supprimer des Modules au cours de son Abonnement. Cette modification est effective au
                            premier jour de la Période Mensuelle suivante dès lors que la demande a été faite au plus tard 15 jours avant la fin de
                            la Période Mensuelle en cours. Dans le cas contraire, la modification est effective au premier jour de la prochaine
                            Période Mensuelle.
                            Le tarif applicable en cas d'ajout de Module est le tarif en vigueur pour ce Module au jour de la demande d'ajout.</p1>
                            <p1><span style="font-weight: bold; ">6.4 Frais de résiliation</span>
                            Au cours de la période initiale d'engagement, chacune des Parties pourra résilier par anticipation l'Abonnement en
                            justifiant d'un motif légitime et impérieux. Toute résiliation anticipée par le Membre entraînera l'application de frais
                            d'indemnité tels que définis à l'article 6.1 des présentes CGV.</p1>
                            <p1><span style="font-weight: bold; ">6.5 Droit de rétractation</span>
                            Le Membre, en tant que professionnel est informé que conformément à l'article L. 221-3 du Code de la
                            consommation, il est susceptible de disposer d'un droit de rétractation à condition que soient réunies les trois
                            conditions suivantes :
                            <ul>
                                <li>Le contrat a été conclu hors établissement ;</li>
                                <li>L'objet du contrat n'entre pas dans le champ de l'activité principale du Membre ; </li>
                                <li>Membre embauche un nombre de salariés inférieur ou égal à cing.</li>
                            </ul>
                            </p1>
                            <p1>
                            En conséquence, dans l'hypothèse où les conditions cumulatives prévues par l'article susvisé seraient remplies par
                            le Membre, ce dernier pourra notifier à e-artisans.fr, sa volonté de se prévaloir de son droit de rétractation
                            dans un délai de quatorze (14) jours à compter de la date de conclusion du Contrat.
                            Si le Membre souhaite se prévaloir de son droit de rétractation, il doit impérativement et ce, avant l'expiration du
                            délai de quatorze (14) jours, fournir à e-artisans.fr le formulaire type de rétractation préalablement rempli et
                            qui se trouve en annexe des présentes Conditions Générales de Vente, par courrier, à Jaouad AZOUM ENTREPRISE INDIVIDUELLE dont le siège social est situé au 84 route de bonsecours 76000 Rouen - Téléphone : <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a> - Siren: 798351763.
                        </p1>
                        <h1>ARTICLE 7 - AVIS DES UTILISATEURS</h1>
                            Les Utilisateurs ont la possibilité de laisser un avis sur la fiche de chaque Membre avec lequel ils ont été en contact
                            (c'est-à-dire chaque Membre s'étant engagé à leur fournir un devis). De la même façon, les Membres ont la
                            possibilité de poster une réponse à chaque avis ainsi laissé par un Utilisateur sur leurs fiches.e-artisans.fr effectue un contrôle à priori des avis laissés afin de vérifier que ces derniers ne contiennent pas
                            de propos faisant l'apologie des crimes contre l'humanité, incitant à la haine raciale, à la violence, à caractère raciste,
                            xénophobe, homophobe, ou pornographique ou, de manière générale, portant atteinte à la dignité humaine.
                            Après publication, dès lors que le Membre considère l'un des avis comme diffamatoire, il doit en alerter le service client
                            d'e-artisans.fr par écrit (par email ou par voie postale), en indiquant les éléments suivants :
                            <ul>
                                <li>une pièce d'identité à jour ;</li>
                                <li>Notre dénomination et notre adresse (e-artisans.fr,Jaouad AZOUM ENTREPRISE INDIVIDUELLE dont le siège social est situé au 84 route de bonsecours 76000 Rouen - Téléphone : <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a> - Siren: 798351763.) ;</li>
                                <li>La description des faits litigieux et leur localisation précise (indiquez notamment les passages du
                                commentaire qui vous semblent litigieux, la date à laquelle le commentaire a été posté, et le nom ou le
                                pseudonyme de la personne l'ayant posté) ;</li>
                                <li>Les motifs pour lesquels le contenu doit être retiré, comprenant la mention des dispositions légales et des
                                justifications de faits (par exemple : menace, chantage, diffamation etc.) ;</li>
                                <li>La copie de la correspondance adressée à l'auteur du commentaire ou la justification du fait que vous n'avez
                                pas pu le contacter.</li>
                            </ul>
                            <p1>
                            En tout état de cause, le contenu des avis ainsi laissés engage la pleine responsabilité de leurs auteurs.
                            Les avis publiés font apparaître la date de publication de ce dernier ou la date de la dernière modification.
                            Les avis sont classés du plus récent au plus ancien, la date de publication faisant foi, et ne font l'objet d'aucune
                            contrepartie de quelque nature que ce soit.
                            Les avis publiés sur le Site le sont sans limitation de durée et ce dès leur publication par les Utilisateurs ou les
                            Membres. Il convient toutefois de noter qu'un certain délai peut intervenir entre la date de rédaction de l'avis et la
                            date de publication de ce dernier sur le Site.</p1>
                            <h1>ARTICLE 8 - MODIFICATIONS DU SITE ET/OU DU SERVICE</h1>
                            e-artisans.fr peut de plein droit modifier son Service sans autre formalité que de porter ses modifications dans
                            les présentes CGV. Dans ce cas, les nouvelles CGV sont applicables à la relation entre le Membre et
                            e-artisans.fr dans un délai d'un (1) mois après leur communication au Membre par e-artisans.fr.
                            Le Membre reconnaît expressément à e-artisans.fr le droit de modifier le Service s'agissant de la structure, de
                            la présentation du Site e-artisans.fr PRO, de l'ajout de nouvelles fonctionnalités ou services.Dans le cas où de telles modifications auraient pour conséquence un manquement de e-artisans.fr à ses
                            obligations telles que définies dans les présentes CGV, le Membre est invité à prendre contact avec e-artisans.fr
                            afin de lui faire part des manquements relevés. Le Membre pourra également résilier son Abonnement par envoi d'une
                            lettre recommandée avec avis de réception à e-artisans.fr.
                            L'accès au Site e-artisans.fr est possible 24 heures sur 24, 7 jours sur 7, sous réserve d'éventuelle panne ou
                            intervention de maintenance nécessaire au bon fonctionnement du Site.
                            <h1>ARTICLE 9 - OBLIGATIONS DES MEMBRES</h1>
                            <span style="font-weight: bold; ">9.1 Obligations générales</span>
                            Le Membre s'engage à payer le prix dû, tel qu'il a été déterminé lors de sa souscription au Service.
                            Il est formellement interdit à tout Membre de revendre ou transférer les coordonnées ainsi que toute autre
                            information confidentielle publiée sur le Site e-artisans.fr ou transmise par e-artisans.fr à un ou
                            plusieurs tiers, sans un accord préalable et écrit de e-artisans.fr. Tout contrevenant s'exposera à des
                            poursuites judiciaires.
                            Il est expressément convenu que toute connexion au Site ou transmission de données effectuée en utilisant
                            l'identifiant et le mot de passe d'un Membre sera réputée avoir été effectuée par le Membre lui-même. Le Membre
                            est seul responsable de l'utilisation de son identifiant et de son mot de passe.
                            En cas de perte ou de vol ou de communication à des Tiers non autorisée par le Membre de son mot de passe ou de
                            son identifiant, le Membre doit en informer immédiatement e-artisans.fr. Cette notification devra être réalisée
                            par le Membre lui-même par email (membre@artisans.com), confirmée par lettre recommandée sous 48
                            heures. e-artisans.fr rend impossible tout accès au Site de e-artisans.fr PRO par l'intermédiaire du mot
                            de passe dans un délai indicatif de 48 heures à compter de la réception de l'email du Membre.
                            Les coordonnées du demandeur de devis sont communiquées à cinq Membres de e-artisans.fr qui
                            s'engagent à contacter le demandeur de devis dans les 48 heures suivant leur acceptation de la fiche devis. A partir
                            de la cinquième acceptation de Demande de devis, les Membres ne pourront plus avoir accès aux coordonnées du
                            demandeur de devis. Les Membres sont alertés par email qu'une Demande de devis a été déposée dans leur
                            catégorie respective et ont ainsi la possibilité de s'engager à contacter le demandeur. Afin de laisser la chance à
                            tous les prestataires Membres d'avoir le temps de s'engager sur une Demande de devis, chaque demande de devis
                            est envoyée dans un premier temps à cinq Membres, puis dans un second temps à cinq autres Membres et ainsi de
                            suite. Elles sont envoyées entre 8h00 et 20h00.
                            Le Membre s'engage à respecter toute disposition légale et/ou règlementaire applicable, notamment les dispositions
                            applicables à son activité professionnelle.
                            Le Membre est responsable des informations qu'il diffuse sur sa fiche Membre.
                            <p1><span style="font-weight: bold; ">9.2 Obligations en droit de la consommation</span>
                            Si le Membre intervient en qualité de professionnel, il lui appartient de respecter l'ensemble des règles issues du
                            droit de la consommation applicables et notamment les dispositions des articles L. 111-1 et suivants et L. 221-5 et L.221-6 du Code de la consommation ainsi que les dispositions des articles 1174 et suivants et 1366 du Code civil
                            applicables aux contrats conclus sous forme électronique.</p1>
                            <p1><span style="font-weight: bold; ">9.3 Obligations fiscales</span>
                            En tant que professionnel, le Membre doit effectuer une déclaration d'existence et choisir son régime fiscal auprès des
                            services fiscaux.
                            Conformément à l'article 242 bis du Code général des impôts, il est rappelé que chaque Membre est susceptible d'être
                            redevable de l'impôt sur le revenu pour son activité liée à son utilisation des Services.
                            Il appartient donc au Membre de déclarer les revenus tirés de cette activité auprès de l'administration fiscale.
                            Il est rappelé que la fraude fiscale expose notamment à :
                            <ul>
                                <li>Un redressement fiscal entraînant la régularisation des sommes dues (avec pénalités de
                                retard) Des amendes forfaitaires allant de 1,5% à 5% sur les sommes non déclarées Des
                                sanctions pénales :</li>
                                <li><ul><li>Peine d'emprisonnement (jusqu'à 5 ans, hors circonstances aggravantes)</li>
                                <li>Une amende (jusqu'à 500 000 euros, hors circonstances aggravantes)</li>
                                <li>Une interdiction d'exercer une profession indépendante ou de gérer une
                                entreprise La privation des droits civiques, civils et familiaux Des peines de
                                confiscation.</ul></li>
                            </ul>
                        </p1>
                        <p>
                            Pour plus d'informations, le Membre est amené à consulter <span style="font-weight: bold; color: #ff580c;">le site de la Direction Générale des Finances Publiques.</span>
                        </p>
                        <p>
                            <span style="font-weight: bold;">9.3 Obligations sociales</span>
                            Le Membre utilisant les Services en qualité de travailleur indépendant ou employeur est redevable de cotisations et
                            contributions sociales auprès de l'Urssaf.
                            Pour plus d'informations sur les modalités de déclaration et de paiement (exigibilité) des cotisations, le Membre est
                            amené à consulter <span style="font-weight: bold; color: #ff580c;">le Portail du Service Public de la Sécurité Sociale.</span>
                            Il est également rappelé que le redevable qui n'aurait pas versé l'ensemble des cotisations et contributions sociales
                            s'expose à un redressement.
                            Le refus de cotiser à la sécurité sociale expose notamment à une contravention de 3ème classe (jusqu'à 450€) et, et
                            en cas de récidive, une contravention de 5ème classe (jusqu'à 1500 €). A cette sanction pénale s'ajoute l'obligation
                            de régulariser la dette à l'égard de l'organisme de sécurité sociale (cotisations dues + majorations de retard).
                            En outre, une condamnation au remboursement de prestations peut être prononcée : les caisses primaires qui
                            auraient versé des prestations de maladie de longue durée ou d'accident du travail peuvent en poursuivre le
                            remboursement à hauteur des cotisations et contributions dues.
                        </p>
                        <h1>ARTICLE 10 - RESPONSABILITES D'e-artisans.fr</h1>
                            <span style="font-weight: bold;">10.1 Responsabilité d'e-artisans.fr concernant le Service Chantier</span>
                            <p1>
                            Le rôle de e-artisans.fr se limite à faciliter la rencontre entre les Utilisateurs et les Membres, en tant que simple
                            intermédiaire technique.
                            Le rôle de e-artisans.fr se limite ainsi à proposer un système permettant cette rencontre et à effectuer dans ce
                            cadre toutes les diligences nécessaires, notamment en transmettant les Demandes de devis faites par les Utilisateurs
                            aux Membres. A ce titre, e-artisans.fr peut communiquer, lors de la présentation du Service aux futurs Membres,
                            une estimation non contractuelle du nombre de Demandes de devis auxquelles ils peuvent prétendre en fonction du ou
                            des Modules choisis. Cette estimation est donnée à titre informatif et n'engage pas la responsabilité
                            d'e-artisans.fr.
                            L'éventuelle poursuite des relations entre les Utilisateurs et les Membres, notamment par la formation d'un accord et
                            l'exécution d'une prestation, s'effectue en-dehors des Sites e-artisans.fr et e-artisans.fr PRO et ne relève
                            en aucun cas ni du Service proposé par e-artisans.fr, ni de sa compétence. En conséquence, e-artisans.fr
                            ne peut voir sa responsabilité engagée pour tout acte ou fait intervenant dans ce cadre.
                            Malgré l'ensemble des précautions prises par l'équipe de e-artisans.fr pour s'assurer que l'ensemble des
                            informations transmises par l'intermédiaire du Site soient véridiques et justes, e-artisans.fr ne saurait être tenue
                            pour responsable de toute fausse information et/ou Demande de devis communiquée au Membre, ni des dommages
                            directs ou indirects pouvant en résulter. e-artisans.fr ne saurait en aucun cas être responsable des résultats de
                            la Demande de devis comparatifs, notamment s'ils ne satisfont pas l'Utilisateur, tant sur le nombre de réponses que
                            sur les offres en elles-mêmes ou sur la qualité et caractéristiques des produits ou services proposés par les Membres.
                            e-artisans.fr n'intervient pas dans les négociations entre l'Utilisateur et le Membre résultant de la Demande de
                            devis, et elle ne pourra en aucun cas être tenue pour responsable des différends qui pourraient survenir entre les deux
                            parties.
                            e-artisans.fr décline toute responsabilité civile et/ou pénale quant aux conséquences directes et indirectes de sa
                            mise en relation entre Utilisateurs et Membres.</p1>
                            <p1><span style="font-weight: bold;">10.2 Responsabilité d'e-artisans.fr concernant le Service internet</span></p1>
                            <p1>
                            e-artisans.fr ne répond que d'une obligation de moyen concernant l'Outil, et le Site Internet, objets des présentes.
                            e-artisans.fr n'engagera pas sa responsabilité en cas de force majeure entendue au sens de la jurisprudence
                            française ou de faute du Membre.
                            Des liens hypertextes peuvent renvoyer sur d'autres sites internet. La responsabilité de e-artisans.fr ne saurait
                            être engagée si le contenu de ces sites contrevient aux législations en vigueur.
                            e-artisans.fr informe le Membre que la protection des données personnelles et des Contenus des sites web ne
                            peut être totale dans un réseau ouvert tel que l'Internet. Des pirates informatiques peuvent être en mesure de perturber
                            la sécurité du réseau ou encore de contrôler certaines certains échanges d'informations. La fonctionnalité de l'Outil qui
                            l'amène à restreindre l'accès à certaines pages par l'intermédiaire d'un mot de passe peut notamment être victime de
                            piratage en entraînant, par exemple, des consultations non désirées, malgré les dispositifs de sécurité mis en place
                            par e-artisans.fr.
                            e-artisans.fr met à la disposition du Membre une fonctionnalité qui lui permet de présenter et de promouvoir des
                            produits, services, Contenus, via son Site. Cependant, e-artisans.fr ne contrôle aucunement les Contenus, qui
                            sont sous le seul contrôle du Membre. Le Membre conserve l'entière responsabilité de la relation qu'il crée avec les
                            internautes. Le Membre a conscience qu'e-artisans.fr n'a aucune responsabilité vis à vis de la relation entre cet
                            internaute et l'éditeur du Site Internet.
                        </p1>
                        <h1>ARTICLE 11 - PROPRIÉTÉ INTELLECTUELLE</h1>
                            <span style="font-weight: bold;">11.1 Conditions applicables au Site e-artisans.fr PRO</span>
                            <p1>
                            Le Site e-artisans.fr PRO constitue une œuvre protégée au titre de la propriété intellectuelle. Cette œuvre
                            comprend mais n'est pas limitée à sa structure générale, son arborescence, ses textes ainsi que toutes autres données
                            pouvant y figurer. Le Site e-artisans.fr PRO et les informations qui y figurent ne peuvent pas être reproduits, ni
                            servir à la réalisation d'œuvres dérivées sans l'accord préalable et écrit de e-artisans.fr.
                            Toute reproduction, représentation, modification, publication, transmission totale ou partielle du Site ou de son contenu
                            ou plus généralement toute exploitation non autorisée par e-artisans.fr du Site e-artisans.fr PRO et des
                            informations qui y sont diffusées constitue une contrefaçon sanctionnée par le Code de la propriété intellectuelle.</p1>
                            <p1><span style="font-weight: bold;">11.2 Conditions applicables au Site Internet à l'Outil</span></p1>
                            <p1>Le Contenu, la structure et le logiciel mis en œuvre pour le fonctionnement de l'Outil sont protégés par le droit d'auteur.
                            Toute représentation ou reproduction intégrale ou partielle faite sans le consentement de e-artisans.fr ou de sesayants droit ou ayants cause constitue une violation des dispositions du Code de la propriété intellectuelle et sera
                            susceptible de donner lieu à des poursuites judiciaires.
                            Il en est de même pour la traduction, l'adaptation ou la transformation, l'arrangement ou la reproduction par un art ou
                            un procédé quelconque. e-artisans.fr concède au Membre une licence d'exploitation sur l'architecture
                            (arborescence, navigation, fonctionnalités, etc.) et la charte graphique du Site Internet. Cette licence est non cessible,
                            non exclusive et consiste dans le droit d'utiliser ces éléments pendant la durée du contrat, dans le cadre de l'Outil
                            e-artisans.fr, et sans pouvoir accéder notamment au code source ou à la base de données.
                            Le Membre conserve tous les droits sur les Contenus qu'il choisit seul de publier par l'intermédiaire de l'Outil.
                            Cependant, pendant la durée du contrat, e-artisans.fr peut par exemple être amené à utiliser les Sites Internet
                            créés par les Membres à des fins commerciales.
                            e-artisans.fr s'assurera, de l'accord du Membre afin de procéder à l'affichage d'une photo, de son nom ou de
                            son témoignage.
                            Le Membre est conscient qu'il est responsable des Contenus qu'il publie sur son Site Internet par l'intermédiaire de
                            l'Outil et de toutes leurs conséquences, y compris de l'utilisation des Contenus. Dès lors, si le Membre ne dispose pas
                            des droits nécessaires à la communication de ces Données pour une telle utilisation, il engagera sa responsabilité.
                            e-artisans.fr ne saurait être tenue responsable des dommages résultant de l'utilisation des Contenus du Membre
                            faite en conformité avec les présentes conditions. Le Membre déclare et garantit qu'il dispose des droits, des pouvoirs
                            et des autorisations nécessaires pour concéder, sous la forme d'une licence, les droits sur les Données qu'il publie sur
                            son Site Internet. Le Membre autorise e-artisans.fr à effectuer un certain nombre d'actions ayant pour but
                            d'améliorer la visibilité du Site Internet du Membre. e-artisans.fr pourra par exemple référencer le Site Internet
                            du Membre sur différents annuaires tels que Google Plus, Google Maps ou encore Yelp. e-artisans.fr pourra
                            effectuer ces actions au nom Membre.
                            Le Nom de domaine du Site Internet créé pour le Membre est la propriété d'e-artisans.fr. Cependant le Membre
                            conserve à tout moment la possibilité de récupérer ce Nom de domaine en communiquant sa demande à
                            e-artisans.fr et moyennant des frais de gestion liés au transfert du nom de domaine.
                        </p1>
                        <h1>ARTICLE 12 - PRÉCAUTION - MISE EN GARDE</h1>
                        <p1>
                            Le Membre déclare être informé du défaut de fiabilité du réseau Internet, tout particulièrement en termes de sécurité
                            relative dans la transmission des données, de continuité non garantie dans l'accès au service, de performance non
                            garantie en termes de volume et de rapidité de transmission des données.
                            Le Membre s'interdit de transmettre sur le réseau Internet toute donnée prohibée, illicite, illégale ou susceptible de
                            constituer un abus de droit, ou d'être contraire à l'ordre public et/ou aux bonnes mœurs, ou d'être utilisée pour exercer
                            une menace ou une pression de quelque nature, forme ou objet que ce soit, ou d'être en contravention ou en
                            contradiction avec tout droit de propriété intellectuelle ou industrielle et de copyright, ou d'avoir été obtenue ou utilisée
                            à la suite d'une contravention, d'un crime ou d'un délit.
                        </p1>
                        <h1>ARTICLE 13 - VIRUS - SÉCURITÉ INFORMATIQUE</h1>
                        <p1>e-artisans.fr s'engage à faire ses meilleurs efforts pour mettre en place toutes les procédures permettant de
                        limiter les risques liés aux intrusions, piratages, ou à l'insertion de virus sur son serveur et/ou sur le Site
                        e-artisans.fr PRO. Elle met aussi tout en œuvre pour sécuriser au maximum le contenu du Site
                        e-artisans.fr PRO.
                        Cependant, il est bien entendu que e-artisans.fr ne saurait s'engager sur une garantie absolue, et décline toute
                        responsabilité en cas d'intrusion, piratage, ou en cas d'insertion de virus sur son serveur et/ou sur le Site
                        e-artisans.fr PRO et/ou dans les emails transmis.</p1>
                        <h1>ARTICLE 14 - PREREQUIS TECHNIQUES</h1>
                        <p1>Les Sites Internet ont été testés sur des ordinateurs PC et MAC fonctionnant avec les systèmes d'exploitation suivants
                        : Windows XP, 7, Vista et 8 Mac OS X 10.8 Ainsi que pour les navigateurs Chrome version 25 Firefox version 19 Safari
                        version 5.
                        Le Membre est informé du fait qu'il existe une possibilité qu'apparaissent des dysfonctionnements sur des ordinateurs
                        ou à partir de navigateurs ne figurant pas dans les listes précitées ou à partir d'ordinateur disposant d'une connexion
                        internet particulièrement lente. Le Membre reconnait avoir pris connaissance, des prérequis techniques visés au
                        présent article.</p1>
                        <h1>ARTICLE 15 - DONNÉES PERSONNELLES</h1>
                        <p1>
                            Dans le cadre des présentes CGV, e-artisans.fr est amené à traiter des données relatives aux Membres (les «
                            Données »).
                            La collecte, le traitement et la sécurité de ces Données sont réglementés par les dispositions de la loi n°78-17 du 6
                            janvier 1978 dite « Loi Informatique et Libertés », modifiée notamment par la loi n° 2018-493 du 20 juin 2018, par les
                            dispositions du Règlement européen n°2016/679 du 27 avril 2016 sur la protection des données personnelles (« RGPD
                            ») et par les dispositions de la Directive 2002/58/CE relative à la vie privée et aux services de communication
                            électroniques, ainsi que par l'ensemble des textes qui pourraient leur succéder (ci-après ensemble la « Réglementation
                            applicable »). e-artisans.fr s'engage, en tant que responsable de traitement, à traiter les Données relatives aux
                            Membres conformément à la Réglementation applicable.
                            Pour plus d'informations sur la façon dont e-artisans.fr traite les Données dans le cadre des présentes CGV,
                            vous pouvez consulter notre : <span style="font-weight: bold; color: #ff580c;">Charte sur la Protection des Données Personnelles</span>
                        </p1>
                        <h1>ARTICLE 16 - COOKIES</h1>
                        <p1>Des cookies sont utilisés par e-artisans.fr. Si le Membre ne souhaite pas que de tels cookies soient placés, il
                        peut les refuser en modifiant les paramètres de son navigateur Internet. Dans ce cas, il se peut qu'il ne puisse bénéficier
                        de la totalité des fonctions et services proposés sur le Site e-artisans.fr PRO.</p1>
                        <h1>ARTICLE 17 - DISPOSITIONS FINALES</h1>
                        <p1><span style="font-weight: bold;">17.1 Nullité</span>
                        Au cas où l'une des dispositions des présentes CGV deviendrait ou serait déclarée nulle, interdite ou sans effet, la
                        validité des autres dispositions desdites CGV n'en serait pas pour autant remise en cause.
                        Dans une telle hypothèse, les parties devront dans la mesure du possible remplacer la stipulation annulée par une
                        stipulation valable correspondant à l'esprit et à l'objet des présentes.</p1>
                        <p1><span style="font-weight: bold;">17.2 Non-renonciation</span>
                        Le fait, pour e-artisans.fr, de ne pas se prévaloir à titre temporaire ou permanent d'une ou plusieurs clauses des
                        présentes CGV, n'emportera en aucun cas renonciation à se prévaloir du reste desdites CGV.</p1>
                        <p1><span style="font-weight: bold;">17.3 Loi applicable</span>
                        La loi applicable aux relations contractuelles entre e-artisans.fr et les Membres est la loi française.</p1>
                        <p1><span style="font-weight: bold;">17.4 Règlement amiable</span>
                        Sauf dispositions d'ordre public, tous litiges qui pourraient survenir dans le cadre de l'exécution des présentes CGV
                        devront, avant toute action judiciaire, être soumis à l'appréciation de e-artisans.fr en vue d'un règlement amiable.
                        Il est expressément rappelé que les demandes de règlement amiable ne suspendent pas les délais ouverts pour intenter
                        les actions judiciaires.</p1>
                        <p1><span style="font-weight: bold;">17.5 Attribution de compétence</span>
                        A défaut d'accord amiable entre les parties concernant l'interprétation ou l'exécution des présentes CGV, le Tribunal de
                        commerce de Paris en France sera exclusivement compétent pour juger d'éventuels litiges.</p1>
                        <p1><span style="font-weight: bold;">17.6 Force majeure</span>
                            L'exécution par e-artisans.fr de ses obligations contractuelles sera suspendue en cas de survenance de tout
                            événement relevant de la force majeure telle que définie à l'alinéa 1 de l'article 1218 du Code civil.
                            Si l'empêchement d'exécution de ses obligations par e-artisans.fr n'est que temporaire, l'exécution de ces
                            obligations est alors considérée comme suspendue. Le contrat conclu entre e-artisans.fr et le Membre est
                            considéré comme résolu si le retard de l'exécution de ses obligations par e-artisans.fr justifie la résolution dudit
                            contrat, ou alors si l'empêchement d'exécution de ses obligations par e-artisans.fr est définitif.
                        </p1>
                    </div>

                    <div class="artisan-mail-footer full-width">
                        <p class="full-width"><h1>ANNEXE 1 - FORMULAIRE DE RÉTRACTATION -PROFESSIONNELS</h1>
                            Veuillez compléter et renvoyer le présent formulaire uniquement si vous souhaitez vous rétracter du Service souscrit
                            en application des conditions cumulatives définies de l’article L.221-3 du code de la consommation c’est-à-dire, si :
                            <ul>
                                <li>le contrat a été conclu hors établissement ;</li>
                                <li>l’objet du contrat n’entre pas dans le champ de votre activité principale ; vous embauchez</li>
                                <li>un nombre de salariés égal ou inférieur à 5.</li>
                            </ul>
                            <div class="d-flex full-width flex-wrap">
                            Le formulaire doit être renvoyé à l’adresse suivante dans les 14 jours suivants la conclusion du contrat :
                            e-artisans.fr SAS (MYBESTPRO) -Jaouad AZOUM ENTREPRISE INDIVIDUELLE dont le siège social est situé au 84 route de bonsecours 76000 Rouen - Téléphone : <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a> - Siren: 798351763.
                            Je vous notifie par la présente ma rétractation du contrat portant sur la vente du service ci-dessous :
                            Contrat souscrit le <input type="" placeholder="......................................................................................................................................" class="blanc-point flex-one" disabled> <br>
                                <div class="d-flex full-width flex-wrap">
                                    Numéro de la commande : <input type="" placeholder="......................................................................................................." class="blanc-point flex-one" disabled>
                                </div>
                                <div class="d-flex full-width flex-wrap">
                                    Nom de la société : <input type="" placeholder="......................................................................................................." class="blanc-point flex-one" disabled>
                                </div>
                                <div class="d-flex full-width flex-wrap">
                                    Siège social de la société : <input type="" placeholder="......................................................................................................." class="blanc-point flex-one" disabled>
                                </div>
                                <div class="d-flex full-width flex-wrap">
                                    Date : <input type="" placeholder="......................................................................................................." class="blanc-point flex-one" disabled>
                                </div> 
                            </div>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>