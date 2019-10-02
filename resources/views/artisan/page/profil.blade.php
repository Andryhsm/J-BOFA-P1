@extends('artisan.layout.master')

    @section('additional-css')
      {!! Html::style('css/admin/profil.css') !!}
    @endsection

    @section('side_nav')
      <div class="nav_bar">
        <div class="description_user">
          <div class="image_user">
            <img src="{!! url('/image/front/user/user.png') !!}" class="" alt="" />
          </div>
          <div class="user_description">
            <label for="" class="name">AZL ELECTRICITE</label>
            <label for="" class="user_work">Electrician</label>
            <div class="evaluation">
              <div class="liste_star">
                <img src="{!! url('/image/front/icones/star.svg') !!}" class="" alt="" />
                <img src="{!! url('/image/front/icones/star.svg') !!}" class="" alt="" />
                <img src="{!! url('/image/front/icones/star.svg') !!}" class="" alt="" />
                <img src="{!! url('/image/front/icones/star_g.svg') !!}" class="" alt="" />
                <img src="{!! url('/image/front/icones/star_g.svg') !!}" class="" alt="" />
              </div>
              <label for="" class="number_star">(0 avis)</label>
            </div>
          </div>
        </div>
      </div>

      @include('artisan.layout.side_map')
    @endsection

    @section('content')
    	<div class="pages_profil profil_page">
    		<div class="content_profil">
    			<div class="description_personnal">
    				<div class="d-flex justify-content-between title_separate">
	    				<h5 class="title_profil">Mes coordonnées</h5>
	    				<a href="{{ Url('/artisan/coordonate/'.Auth::user()->id.'') }}" class="btn_orange_link_artisan">Modifier mes coordonnées ></a>
	    			</div>
		        	<div class="d-flex">
		        		<div class="coordonate_item">
		        			<p>
		        				<span class="label">Téléphone:</span>
		        				<span class="value">{{$profil->phone}}</span>
		        			</p>
		        			<p>
		        				<span class="label">Portable:</span>
		        				<span class="value">{{$profil->phone}}</span>
		        			</p>
		        			<p>
		        				<span class="label">Adresse:</span>
		        				<span class="value">{{$profil->city->ville_nom}}</span>
		        			</p>
		        			<p>
		        				<span class="label">Ville:</span>
		        				<span class="value">{{$profil->city->ville_nom}}</span>
		        			</p>
		        		</div>
		        		<div class="coordonate_item">
		        			<p>
		        				<span class="label">Date de création:</span>
		        				<span class="value">{{$profil->created_at}}</span>
		        			</p>
		        			<p>
		        				<span class="label">N° SIRET:</span>
		        				<span class="value">0000</span>
		        			</p>
		        			<p>
		        				<span class="label">E-mail:</span>
		        				<span class="value">{{$profil->email}}</span>
		        			</p>
		        			<p>
		        				<span class="label">Site web:</span>
		        				<span class="value"><a href="" class="btn_orange_link_artisan">Créer mon site web ></a></span>
		        			</p>
		        		</div>
		        	</div>
		        	<div class="d-flex justify-content-center top_separate_changemdp">
		        		<a href="{{ route('change_mdp') }}" class="btn_orange_link_artisan">Changer mon mot de passe ></a>
		        	</div>

	        		<div class="border_bottom border_dashed dashed_margin"></div>
    			</div>

    			<div class="entreprise_description">
					<div class="d-flex justify-content-between title_separate">
	    				<h5 class="title_profil">DESCRIPTION DE MON ENTREPRISE</h5>
	    				<a href="" class="btn_orange_link_artisan hide">Modifier les coordonnées ></a>
	    			</div>

		        	<div class="border_bottom border_dashed dashed_margin"></div>
		        </div>

		        <div class="cotnent_document">
					<div class="d-flex justify-content-between title_separate">
						<div class="items_doc">
							<div class="title_items">
								<h5 class="title_profil">MES DOCUMENTS OFFICIELS</h5>
							</div>
							<div class="descrition_doc">
								<p>Vous avez <strong>2 fois plus de chance de signer</strong> un projet en important vos documents légaux !</p>
							</div>
							<div class="liste_document">
								<a class="item_doc_upload" href="{{ route('document_official') }}"> 
									<img src="{!! url('/image/artisan/modif_profil/paper_empty.png') !!}" class="image_fond_paper" alt="" />
									<img src="{!! url('/image/artisan/modif_profil/plus_additionnal.png') !!}" class="image_upload_paper" alt="" />
									<label class="title_paper">Kbis</label>
									<input type="file" class="hide" name="">
								</a>
								<a class="item_doc_upload" href="{{ route('document_official') }}">
									<img src="{!! url('/image/artisan/modif_profil/paper_empty.png') !!}" class="image_fond_paper" alt="" />
									<img src="{!! url('/image/artisan/modif_profil/plus_additionnal.png') !!}" class="image_upload_paper" alt="" />
									<label class="title_paper">Assurance</label>
									<input type="file" class="hide" name="">
								</a>
								<a class="item_doc_upload" href="{{ route('document_official') }}">
									<img src="{!! url('/image/artisan/modif_profil/paper_empty.png') !!}" class="image_fond_paper" alt="" />
									<img src="{!! url('/image/artisan/modif_profil/plus_additionnal.png') !!}" class="image_upload_paper" alt="" />
									<label class="title_paper">Garantie Décennale</label>
									<input type="file" class="hide" name="">
								</a>
								<a class="item_doc_upload" href="{{ route('document_official') }}">
									<img src="{!! url('/image/artisan/modif_profil/paper_empty.png') !!}" class="image_fond_paper" alt="" />
									<img src="{!! url('/image/artisan/modif_profil/plus_additionnal.png') !!}" class="image_upload_paper" alt="" />
									<label class="title_paper">Modifier</label>
									<input type="file" class="hide" name="">
								</a>
							</div>
						</div>
						<div class="items_doc">
							<div class="title_items">
								<h5 class="title_profil">MES LABELS QUALITÉ</h5>
							</div>
							<div class="descrition_doc">
								<p>Gagnez <strong>en visibilité et en crédibilité</strong>  en important vos labels qualité ! </p>
							</div>
							<div class="liste_document">
								<a class="item_doc_upload" href="{{ route('label_quality') }}">
									<img src="{!! url('/image/artisan/modif_profil/paper_empty.png') !!}" class="image_fond_paper" alt="" />
									<img src="{!! url('/image/artisan/modif_profil/plus_additionnal.png') !!}" class="image_upload_paper" alt="" />
									<label class="title_paper"></label>
									<input type="file" class="hide" name="">
								</a>
							</div>
						</div>
					</div>
		        	<div class="question_reponse">
		        		<label class="title_question">Vous n'arrivez pas à importer vos documents ?</label>
		        		<label class="reponse_question">Envoyez-les à votre conseiller par e-mail (membre@lorem.com), il les ajoutera pour vous !</label>
		        	</div>
		        	<div class="border_bottom border_dashed dashed_margin"></div>
		        </div>


		        <div class="content_chantier">
		        	<div class="d-flex justify-content-between title_separate">
	    				<h5 class="title_profil">CHANTIERS RÉALISÉS</h5>
	    				<a href="" class="btn_orange_link_artisan hide"></a>
	    			</div>
	    			<div class="descrition_doc">
						<p><strong>Gagnez en visibilité </strong> en montrant des <strong>photos de chantiers</strong> que vous avez déjà réalisés !</p>
					</div>
					<div class="liste_document"> 
						<a class="item_image_upload" href="{{ route('realisation') }}">
							<img src="{!! url('/image/artisan/modif_profil/image_empty.png') !!}" class="image_fond_paper" alt="" />
							<input type="file" class="hide" name="">
						</a>
					</div>
					<div class="question_reponse">
		        		<label class="title_question">Vous n'arrivez pas à importer vos réalisations ?</label>
		        		<label class="reponse_question">Envoyez-les à votre conseiller par e-mail (membre@lorem.com), il les ajoutera pour vous !</label>
		        	</div>
		        </div>
    			
	        </div>
	        
    	</div>
    @endsection

    @section('additional-script')
    @endsection
