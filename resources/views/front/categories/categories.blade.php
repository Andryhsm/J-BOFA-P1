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
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Prix/Description d'un Chauffe eau</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/fond2.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Rénover sa salle de bain</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Les travaux du bâtiment ne sont pas toujours aisés. Si certains sont faciles d’accès, il est indubitable que d’autres sont très complexes et demandent une planification minutieuse. La rénovation d’une maison, qu’elle soit très ancienne ou simplement vieillotte, implique de recourir à divers travaux qui peuvent s’étaler du très simple au très compliqué.</p>
				 		<p>Pour réduire les problèmes et les mauvaises surprises, il est donc important de préparer ses travaux à l’avance et de bien comprendre comment chaque étape de votre rénovation de maison peut se dérouler et s’articuler avec la suivante. Nous vous apportons donc un peu d’aide en mettant en lumière des points très précis que la très grande majorité des particuliers rencontrent lors d’une rénovation de maison.	</p>
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
				<img src="{!! url('/image/front/icones/star.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Prix/Description d'un Chauffe eau</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column_reverse">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/fond2.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Rénover sa salle de bain</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Les travaux du bâtiment ne sont pas toujours aisés. Si certains sont faciles d’accès, il est indubitable que d’autres sont très complexes et demandent une planification minutieuse. La rénovation d’une maison, qu’elle soit très ancienne ou simplement vieillotte, implique de recourir à divers travaux qui peuvent s’étaler du très simple au très compliqué.</p>
				 		<p>Pour réduire les problèmes et les mauvaises surprises, il est donc important de préparer ses travaux à l’avance et de bien comprendre comment chaque étape de votre rénovation de maison peut se dérouler et s’articuler avec la suivante. Nous vous apportons donc un peu d’aide en mettant en lumière des points très précis que la très grande majorité des particuliers rencontrent lors d’une rénovation de maison.	</p>
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
				<img src="{!! url('/image/front/icones/star.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Prix/Description d'un Chauffe eau</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/fond2.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Rénover sa salle de bain</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Les travaux du bâtiment ne sont pas toujours aisés. Si certains sont faciles d’accès, il est indubitable que d’autres sont très complexes et demandent une planification minutieuse. La rénovation d’une maison, qu’elle soit très ancienne ou simplement vieillotte, implique de recourir à divers travaux qui peuvent s’étaler du très simple au très compliqué.</p>
				 		<p>Pour réduire les problèmes et les mauvaises surprises, il est donc important de préparer ses travaux à l’avance et de bien comprendre comment chaque étape de votre rénovation de maison peut se dérouler et s’articuler avec la suivante. Nous vous apportons donc un peu d’aide en mettant en lumière des points très précis que la très grande majorité des particuliers rencontrent lors d’une rénovation de maison.	</p>
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