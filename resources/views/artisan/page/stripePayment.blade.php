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
                                    <div class='alert-warning alert cgv_txt'>
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
                                                    <p>
                                                        « <span style="font-weight: bold; ">Membre</span> » : Désigne la personne physique ou morale, inscrite au Service, qui propose des produits ou services à
                                                        l'Utilisateur et qui peut bénéficier du service de création de Site internet et les services associés.
                                                    </p>
                                                    <p>
                                                        « <span style="font-weight: bold; ">Module</span> » : Désigne la catégorie d'activité et/ou département d'activité proposé sur le Site HABITATPRESTO.
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
                                                        HABITATPRESTO.
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
                                                        HABITATPRESTO.
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
                                                        HABITATPRESTO se réserve le droit de modifier les CGV à tout moment.
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
                                                        HABITATPRESTO, procéder au choix des Modules et/ou du Site Internet pour lesquels ils souhaitent souscrire, puis
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
                                                        dénonciation, il doit adresser sa lettre à Habitatpresto – C/O Société LESPACE, 1-5 Rue du 8 mai 1945 – 92110
                                                        Clichy.
                                                    </p>
                                                    <p>
                                                        <span style="font-weight: bold; ">5.3. Modalités de résiliation</span>
                                                        A l'issue de la Période Initiale d'Engagement, chacune des Parties peut résilier l'Abonnement par lettre recommandée.
                                                        Dans le cas où le Membre procède à cette résiliation, il doit adresser sa lettre à Habitatpresto – C/O Société LESPACE,
                                                        1-5 Rue du 8 mai 1945 – 92110 Clichy.
                                                        Dès lors que la demande de résiliation a été effectuée au plus tard 15 (quinze) jours avant la fin de la Période
                                                        Mensuelle en cours, l'Abonnement est résilié à la fin de la Période Mensuelle en cours. Dans le cas contraire, la
                                                        résiliation prend effet à la fin de la Période Mensuelle suivante.
                                                    </p>
                                                    <p>
                                                        <span style="font-weight: bold; ">5.4. Résiliation pour faute</span>
                                                        En vertu des présentes CGV, HABITATPRESTO s'engage notamment à :
                                                    </p>
                                                    <h1>ARTICLE 7 -</h1>
                                                    <ul>
                                                        <li>Fournir au Membre des Demandes de devis</li>
                                                        <li>Délivrer le Service à compter de l'encaissement du premier paiement ou de la réception de l'autorisation de
                                                        prélèvement en cas de paiement par prélèvement SEPA,</li>
                                                        <li>Garantir une bonne performance des Sites Internet dans la limite d'une utilisation normale et raisonnable
                                                        par le Membre. Le Membre est informé que si son utilisation n'est pas conforme, HABITATPRESTO ne pourra
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
                                                            HABITATPRESTO,</li>
                                                            <li>Respecter les droits d'auteurs sur son Site Internet et garantir HABITAPRESTO contre toute action ou
                                                            réclamation intentée sur ce fondement par un tiers,</li>
                                                            <li>Utiliser les Outils conformément aux CGV et uniquement pour les fonctionnalités mentionnées dans les CGV</li>
                                                            <li>Respecter l'ordre public et les bonnes mœurs dans les Contenus qu'il publie sur son Site Internet,</li>
                                                            <li>Ne pas revendre ou mettre à disposition le Site Internet ou les Outils d'HABITATPRESTO,</li>
                                                            <li>Prévenir HABITATPRESTO de toute réclamation sur le Site Internet du Membre crée par HABITATPRESTO,</li>
                                                            <li>Afficher les mentions légales sur son Site Internet permettant de l'identifier car le Membre est responsable du
                                                        Contenu qu'il affiche sur son Site Internet en vertu de la loi du 21 juin 2004.</li>

                                                        </ul>
                                                    </p>
                                                    <p>
                                                        Sauf disposition contraire des présentes CGV concernant certains manquements, en cas de non-respect par l'une
                                                        des Parties des obligations figurant ci-dessus, l'autre Partie pourra résilier le Contrat après envoi d'une lettre de mise
                                                        en demeure avec avis de réception restée sans effet pendant un délai de quinze (15) jours.
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