@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/categories.css') !!}
  @endsection

  @section('content')
<section class="categories">
	<div class="title_categories">
		<h2>Tarif horaire des artisans</h2>
	</div>
	<div class="content_category">
		<div class="item_categories_form">
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/tarifs/tarif-horaire-artisans.jpg') !!}" class="img_cg" alt="" />
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Estimer le coût des artisans qui interviendront dans une rénovation ou une construction n’est pas toujours aisé, car contrairement aux matériaux et équipements, les prix peuvent varier considérablement entre les professionnels et le niveau de détail qu’ils proposent.</p>
				 		<p>Nous vous proposons donc ici un guide spécialement dédié au tarif horaire des artisans. Grâce à nos indications, vous connaîtrez très rapidement et sans aucune difficulté le coût moyen d’un artisan spécifique à l’heure actuelle en France. Gardez cependant toujours à l’esprit que le tarif horaire des artisans varie selon où ces derniers se trouvent.</p>
				 	</div>
				 </div>
			</div>
			
		</div>
		<div class="title_item_cg">
			<img src="{!! url('/image/front/icones/star.svg') !!}" class="img_title_cg" alt="" />
			<label class="title_cg">Étude et architecture</label>
		</div>
		<div class="content_desc_row">
	 		<p>La toute première étape de tout projet de construction ou de rénovation est bien évidemment la planification et l’étude de faisabilité.</p>
	 		<p>Cette étape peut parfois être réalisée très facilement, par exemple pour une toute petite rénovation, mais pour une construction neuve ou une rénovation profonde il est important d’engager le ou les bons professionnels.</p>
	 		<p>Nous vous proposons une sélection des intervenants les plus fréquemment présents à ce niveau des travaux.</p>
	 	</div>
		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Prix d’un architecte</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/tarifs/prix-architecte-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Prix d’un architecte</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>L’architecte est un partenaire travaux indispensable pour beaucoup de particuliers. Lors d’une construction neuve, il permet de dessiner sa maison idéalement et surtout de dresser un cahier des charges très technique et très sécurisé.</p>
				 		<p>Lors d’une rénovation, l’architecte vous aidera à intégrer au mieux votre idée de réhabilitation dans la construction déjà existante.</p>
				 		<p>De plus, l’architecte propose bien souvent de gérer les artisans qui interviennent dans un chantier. De cette manière vous ne passerez pas de longues heures à vérifier et coordonner le travail de vos artisans.</p>
				 	</div>
				 </div>
			</div>
			<button class="btn_view_devis">
				<i class="fa fa-chevron-circle-right"></i>
				Voir devis
			</button>
		</div>	
		
		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Tarif d’un géomètre</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/tarifs/tarif-geometre-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Tarif d’un géomètre</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Le géomètre intervient le plus souvent lorsqu’une parcelle est mise en vente ou lorsqu’il existe un litige sur le bornage d’un terrain ou l’implantation d’une maison.</p>
				 		<p>Le géomètre est en effet un spécialiste des mesures de grandes distances sur des surfaces sauvages. Ce professionnel sait non seulement effectuer des mesures très précises de manière à vérifier l’implantation d’un bâtiment, mais surtout matérialiser sur le terrain, les indications du cadastre.</p>
				 		<p>Nous vous proposons quelques indications supplémentaires sur ce professionnel très discret, mais très important.</p>
				 	</div>
				 </div>
			</div>
			<button class="btn_view_devis">
				<i class="fa fa-chevron-circle-right"></i>
				Voir devis
			</button>
		</div>	

		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Prix d’un architecte d’intérieur</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/tarifs/prix-architecte-interieur-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Prix d’un architecte d’intérieur</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Il existe une différence importante entre un architecte d’intérieur et un architecte. Cette différence se répercute sur les possibilités de travaux offertes par le professionnel, et également par le coût final de son intervention.</p>
				 		<p>L’architecte d’intérieur saura vous proposer une planification minutieuse de votre intérieur, tant au niveau esthétique que technique, mais ne s’occupera généralement pas des éléments extérieurs ou du gros œuvre.</p>
				 		<p>Ce professionnel hautement qualifié est exactement à mi-chemin entre l’architecte et le décorateur d’intérieur.</p>
				 	</div>
				 </div>
			</div>
			<button class="btn_view_devis">
				<i class="fa fa-chevron-circle-right"></i>
				Voir devis
			</button>
		</div>	


		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Tarif d’un décorateur d’intérieur</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/tarifs/prix-decorateur-interieur-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Tarif d’un décorateur d’intérieur</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Le décorateur d’intérieur s’apparente à un architecte, mais n’en est généralement pas un, proposant ainsi des frais moins élevés. Sa mission est généralement de proposer une planification esthétique et fonctionnelle d’un intérieur.</p>
				 		<p>Si vous désirez disposer d’un intérieur design et de qualité, sans pour autant devoir payer le prix élevé d’un architecte, le décorateur d’intérieur sera sans doute votre solution de choix.</p>
				 	</div>
				 </div>
			</div>
			<button class="btn_view_devis">
				<i class="fa fa-chevron-circle-right"></i>
				Voir devis
			</button>
		</div>	


		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Honoraires d’un maître d’œuvre</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/tarifs/honoraires-maitre-oeuvre-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Honoraires d’un maître d’œuvre</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Le maître d’œuvre est le seul professionnel en mesure de vous proposer des services clés en main, du début à la fin.</p>
				 		<p>Il dispose généralement d’une équipe de professionnels et d’artisans qui est chargée de mettre en œuvre les décisions que vous prenez en amont.</p>
				 		<p>Engager un maître d’œuvre est indispensable si vous désirez avoir une expérience construction ou rénovation simple, transparente et bien exécutée. Il faudra donc bien entendu ajouter ses honoraires à l’estimation du tarif horaire des artisans qui interviendront.</p>
				 	</div>
				 </div>
			</div>
			<button class="btn_view_devis">
				<i class="fa fa-chevron-circle-right"></i>
				Voir devis
			</button>
		</div>	
			
		
	</div>
</section>
 @endsection
  @section('additional-script')
   
  @endsection