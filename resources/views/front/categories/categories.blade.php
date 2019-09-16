@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/categories.css') !!}
  @endsection

  @section('content')
<section class="categories">
	<div class="title_categories">
		<h2>Rénover sa maison</h2>
	</div>
	<div class="content_category">
		<div class="item_categories_form">
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/renover-maison-1.jpg') !!}" class="img_cg" alt="" />
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Les travaux du bâtiment ne sont pas toujours aisés. Si certains sont faciles d’accès, il est indubitable que d’autres sont très complexes et demandent une planification minutieuse. La rénovation d’une maison, qu’elle soit très ancienne ou simplement vieillotte, implique de recourir à divers travaux qui peuvent s’étaler du très simple au très compliqué.</p>
				 		<p>Pour réduire les problèmes et les mauvaises surprises, il est donc important de préparer ses travaux à l’avance et de bien comprendre comment chaque étape de votre rénovation de maison peut se dérouler et s’articuler avec la suivante. Nous vous apportons donc un peu d’aide en mettant en lumière des points très précis que la très grande majorité des particuliers rencontrent lors d’une rénovation de maison.	</p>
				 	</div>
				 </div>
			</div>
			
		</div>
		<div class="title_item_cg">
			<img src="{!! url('/image/front/icones/star.svg') !!}" class="img_title_cg" alt="" />
			<label class="title_cg">Rénovation par pièce de la maison</label>
		</div>
		@if(isset($categories))
			@foreach($categories as $categorie)
				<div class="item_categories_form">
					<div class="title_item_cg">
						<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
						<label class="title_cg">{{$categorie->name}}</label>
					</div>
					<div class="item_description">
						 <div class="desc_row desc_column">
						 	<div class="image_desc_row">
								 <img src="{!! (isset($categorie->image)) ? url('/image/Category/'.$categorie->image): url('/image/categories/renover-salle-bain-1.jpg') !!}" class="img_cg" alt="" />
								 <a class="link_project" href="{{ Url('/view_project/'.$categorie->id.'') }}">
									<div class="icons_link_project">
										<i class="fa fa-tags"></i>
									</div>
									<label for="" class="title_link_project">Rénover sa {{$categorie->name}}</label>
								</a>
						 	</div>
						 	<div class="content_desc_row">
						 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
						 		<p>Pour répondre à des utilisations très différentes, mais devant toutes êtres au top, la salle de bain doit être rafraîchie régulièrement.</p>
						 		<p>On pourra effectuer des réparations au niveau des revêtements et des équipements, mais on pourra également modifier l’implantation totale de la pièce.</p>
						 		<p>Pour vous aider dans cette rénovation qui peut être compliquée et intimidante, nous vous proposons un dossier complet consacré à la salle de bain sous toutes ses formes.</p>
						 	</div>
						 </div>
					</div>
					<a class="" href="{{ Url('/view_project/'.$categorie->id.'') }}"><button class="btn_view_devis">
						<i class="fa fa-chevron-circle-right"></i>
						Voir devis
					</button></a>
				</div>
			@endforeach	
		@endif
		<!-- <div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Rénovation d’une cuisine</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column_reverse">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/renover-cuisine-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Rénover sa cuisine</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>La cuisine est la deuxième pièce la plus rénovée par les Français. Lors d’une rénovation de ce type, on doit se concentrer sur les revêtements, les gaines techniques, mais également toute la partie mobilier et électroménager.</p>
				 		<p>La cuisine est en effet une pièce où de très nombreux éléments se côtoient dans un espace généralement restreint. Toucher à un élément revient le plus souvent à rénover ceux qui l’entourent. La rénovation d’une cuisine possède donc un effet domino important que nous mettons en perspective dans notre dossier complet. Sans prétendre à l’exhaustivité, nous vous proposons un bouquet d’articles qui vous mettront votre pied à l’étrier de la très grande majorité des rénovations de cuisine constatées actuellement en France.</p>
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
				<label class="title_cg">Rénovation d’une chambre</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/renover-chambre-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Rénover sa chambre</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Nous passons presque la moitié de nos vies dans la chambre. Même si nous y dormons le plus souvent, la chambre est également un havre de pays, de sécurité et de relaxation. Une rénovation de maison implique donc souvent de considérer la chambre.</p>
				 		<p>Le plus souvent, les rénovations de chambre interviennent pour deux raisons principales. La première est de réactualiser une chambre d’enfant ou d’ado lorsque l’ambiance adonnée n’est plus pertinente. On rénovera par exemple une chambre d’enfant lorsque ce dernier devient un ado.</p>
				 		<p>La seconde raison principale est de rafraîchir une chambre de maître en améliorant son confort son esthétique et ses capacités techniques : dressings, salle de bain intégrée et ambiance zen sont les principaux éléments de ce type de rénovation de chambre.</p>
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
				<label class="title_cg">Rénovation d’un salon</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/renover-salon-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Rénover son salon</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Soirées festives entre amis, nuits cinéma en famille, repas convivial du dimanche, le salon est une pièce multiface devant répondre à de très nombreux critères, dont le niveau de qualité est sans cesse à la hausse.</p>
				 		<p>Il est donc tout naturel qu’une rénovation de maison s’oriente à un certain moment vers le salon. Il s’agit généralement de déterminer quels sont les revêtements les plus adaptés et de trouver l’esthétique la plus en accord avec les besoins des habitants.</p>
				 		<p>On pourra également s’orienter vers des équipements supplémentaires au rang desquels les cheminées et les poêles figurent en bonne place. Nous vous proposons donc des idées déco et rénovation pour redonner à votre salon l’éclat du neuf.</p>
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
				<label class="title_cg">Rénovation d’une véranda</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/renover-veranda-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Rénover sa véranda</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Les vérandas sont des pièces désormais modernes et similaires aux autres pièces de la maison, mais ce ne fut pas toujours le cas. En effet, à l’origine les vérandas étaient des pièces vitrées destinées à n’être utilisées que durant les périodes les plus chaudes.</p>
				 		<p>Il est donc tout à fait logique que ces vérandas anciennes appellent de nos jours une rénovation profonde. Le moment idéal est souvent celui de la rénovation d’une maison juste après achat, au moment où des travaux profonds et structurels peuvent être entrepris sans dérangement excessif.</p>
				 		<p>On devra donc considérer les revêtements de sol, les équipements techniques, le chauffage et surtout la qualité du vitrage et de la structure de la véranda. Nos conseils vous guideront vers le choix de la véranda la plus indiquée pour votre situation.</p>
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
				<label class="title_cg">Rénovation de combles</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/renover-chambre-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Rénover ses combles</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Toute maison, sauf toit plat, possède des combles. Ces derniers sont la partie située directement sous la toiture et formant l’isolation pleine et entière de la toiture et donc d’environ 30% de la maison.</p>
				 		<p>La rénovation d’une maison s’arrête très souvent sur l’étape combles, car ces derniers peuvent présenter des avantages considérables. En effet, les combles forment le plus souvent un espace particulièrement large que l’on peut aménager et rendre habitables lors d’une rénovation. Il faut donc dans ce cas se lancer dans une rénovation relativement profonde pouvant faire appel à des intervenants très variés.</p>
				 		<p>Si vous ne désirez pas aller jusqu’à l’aménagement des combles, il faudra sans doute cependant assurer une rénovation plus légère de manière à renforcer ou à améliorer l’isolation de la toiture.</p>
				 	</div>
				 </div>
			</div>
			<button class="btn_view_devis">
				<i class="fa fa-chevron-circle-right"></i>
				Voir devis
			</button>
		</div> -->	
	</div>
</section>
 @endsection
  @section('additional-script')
   
  @endsection