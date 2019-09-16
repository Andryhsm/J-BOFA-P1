@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/categories.css') !!}
  @endsection

  @section('content')
<section class="categories">
	<div class="title_categories">
		<h2>Aides aux travaux : Guide complet des subventions</h2>
	</div>
	<div class="content_category">
		<div class="item_categories_form">
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/help_me/aides-travaux-quelles-possibilites-subvention.jpg') !!}" class="img_cg" alt="" />
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Réaliser des travaux de rénovation est très souvent un moment délicat que l’on doit négocier en souplesse. La partie technique des travaux peut créer des difficultés certaines, mais c’est en amont que la plupart des particuliers connaissent les plus gros obstacles. Toute rénovation demande en effet la préparation d’un budget qui peut parfois très vite enfler vers des sommes importantes. Les équipements sont onéreux et si l’on désire faire installer des solutions performantes, les montants peuvent créer un mur infranchissable.</p>
				 		<p>C’est pour cette raison que les pouvoirs publics ont décidé de s’atteler au problème de la rénovation énergétique du parc immobilier français. Les équipements liés à l’énergie sont en effet les plus onéreux et sont ceux pour lesquels les particuliers les plus modestes ont le plus besoin d’aide.</p>
				 		<p>Dans cette période de transition énergétique les objectifs internationaux sont évidemment centrés sur l’économie d’énergie. Il est donc du ressort des pouvoirs publics de pousser les particuliers, en difficulté ou non, à installer des équipements modernes et plus économiques. Les aides aux travaux énergétiques sont donc de plus en plus nombreuses et permettent vraiment de faire la différence. Voici notre dossier spécial consacré aux aides travaux en tous genres.</p>
				 	</div>
				 </div>
			</div>
			
		</div>
		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">ANAH : Les aides travaux pour les plus modestes</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/help_me/aides-anah-dossier-special-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Les aides de l’ANAH notre dossier spécial</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>L’Agence Nationale pour l’Amélioration de l’Habitat est une vénérable institution vouée à l’aide aux travaux orientée vers les plus modestes. Depuis les années 1970 l’agence a pour but d’améliorer la qualité de l’habitat français, en le poussant vers les technologies les plus modernes.</p>
				 		<p>De nos jours, l’ANAH s’efforce d’encourager la transition énergétique en mettant en valeur les technologies propres et les énergies renouvelables.</p>
				 		<p>Les aides proposées par l’ANAH ne sont pas négligeables et valent largement l’effort de découvrir leurs règlements et de monter un dossier.</p>
				 	</div>
				 </div>
			</div>
		</div>	
		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">A qui s’adressent les aides de l’ANAH ?</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column_reverse">
				 	
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Les aides et subventions de l’ANAH s’adressent principalement aux plus modestes. Les aides sont en effet soumises à des plafonds de ressources qui constituent le premier critère qu’il faut considérer.</p>
				 		<p>Si vos revenus sont inférieurs aux plafonds établis par l’ANAH, vous pourrez bénéficier de substantielles subventions pour vos travaux.</p>
				 		<p>Sachez que plus votre famille est grande, plus les aides pour les travaux débloquées par l’ANAH sont importantes et plus le plafond de ressources est élevé.</p>
				 	</div>
				 </div>
			</div>
		</div>	
		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Quels sont les avantages des aides de l’ANAH ?</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Les aides aux travaux de l’ANAH sont de vraies aides réellement efficaces pour les foyers les plus modestes. Les montants disponibles permettent aux moins fortunés d’accéder à des équipements ou des matériaux modernes, propres et très efficaces sur le long terme.</p>
				 		<p>Grâce à l’ANAH ont peut désormais sortir de la précarité énergétique sans se ruiner et faire un geste pour améliorer l’état de la planète. Une excellente initiative que nous conseillons à tous ceux dont les revenus sont sous les plafonds de ressources.</p>
				 	</div>
				 </div>
			</div>
		</div>	
		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">CITE : Un crédit d’impôt intelligent</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/renover-salon-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Le CITE : Pour vos rénovations énergétiques</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Les subventions pour les travaux peuvent également prendre des formes inattendues. C’est le cas du CITE. Cette aide aux travaux énergétiques permet de bénéficier d’une réduction de ses impôts. Le CITE est une initiative très efficace du gouvernement, qui s’efforce continuellement de la mettre en évidence auprès des particuliers.</p>
				 		<p>Contrairement à beaucoup de rumeurs récentes, le CITE est maintenu pour les années à venir, aussi vous pouvez envisager cette option très sereinement. Notre guide détaillé répondra à toutes vos questions sur le sujet.</p>
				 	</div>
				 </div>
			</div>
		</div>	
		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Le CITE, une aide ouverte à tous</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Le CITE est une aide aux travaux ouverte à tous, sans aucune distinction de revenus ou de patrimoine.</p>
				 		<p>Pourtant, cette subvention pour les travaux prenant la forme d’une réduction d’impôts, on pourrait penser qu’elle ne s’adresse qu’à ceux qui sont imposables.</p>
				 		<p>Il n’en est rien, car les pouvoirs publics ont pris la décision de l’ouvrir à tous les foyers fiscaux. Ceux qui ne sont pas imposables reçoivent un montant par virement bancaire.</p>
				 		<p>Le CITE est donc plus que jamais une subvention pour les travaux efficace et très avantageuse pour les Français.</p>
				 	</div>
				 </div>
			</div>
		</div>	
		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Pourquoi opter pour le CITE ?</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Il faudrait plutôt se demander pourquoi ne pas opter pour le CITE tant cette aide pour les travaux est efficace.</p>
				 		<p>Le CITE est cumulable avec toutes les autres aides et subventions et permet de réduire encore plus la facture d’un projet énergétique.</p>
				 		<p>Les démarches sont relativement simples, car elles ne consistent qu’en quelques cases à remplir sur la déclaration de revenus et en la conservation des justificatifs relatifs aux travaux engagés.</p>
				 	</div>
				 </div>
			</div>
		</div>	
		<div class="item_categories_form">
			<div class="title_item_cg">
				<img src="{!! url('/image/front/icones/star_g.svg') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Éco PTZ : Un prêt avantageux</label>
			</div>
			<div class="item_description">
				 <div class="desc_row desc_column">
				 	<div class="image_desc_row">
						 <img src="{!! url('/image/categories/help_me/interets-nuls-travaux-eco-ptz-1.jpg') !!}" class="img_cg" alt="" />
						 <a class="link_project" href="#">
							<div class="icons_link_project">
								<i class="fa fa-tags"></i>
							</div>
							<label for="" class="title_link_project">Éco PTZ : Des intérêts nuls pour vos travaux</label>
						</a>
				 	</div>
				 	<div class="content_desc_row">
				 		<img src="{!! url('/image/categories/guillemets2.svg') !!}" class="image_cg_commentaire" alt="" />
				 		<p>Nous avons tous entendu parler des prêts à taux zéro. Cependant il s’agit le plus souvent d’aides et de subventions temporaires pour la construction, de manière à dynamiser le secteur du bâtiment.</p>
				 		<p>L’Éco PTZ, plus discret, est en revanche une aide permanente destinée à aider les particuliers à accéder à un prêt pour la réalisation d’une rénovation énergétique.</p>
				 		<p>Le but de l’Éco PTZ est de permettre aux particuliers de s’offrir un équipement plus onéreux et plus performant, ou tout simplement de donner accès à des appareils modernes aux plus modestes.</p>
				 	</div>
				 </div>
			</div>
		</div>	
	</div>
</section>
 @endsection
  @section('additional-script')
   
  @endsection