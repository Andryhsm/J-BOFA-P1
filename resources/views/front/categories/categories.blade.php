@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/categories.css') !!}
  @endsection

  @section('content')
<section class="categories">
	<div class="content_category">
			<div class="title_item_cg">
				<img src="{!! url('/image/categories/bande1.png') !!}" class="img_title_cg" alt="" />
				<label class="title_cg">Prix/Description d'un Chauffe eau</label>
			</div>
			<div class="item_description">
				 <div class="desc_row">
				 	<div class="image_desc_row">
				 		<img src="{!! url('/image/categories/fond2.jpg') !!}" class="img_cg" alt="" />
				 	</div>
				 	<div class="content_desc_row">
				 		<p>Le chauffe eau est un élément capital de nombreuses maisons modernes. En effet à défaut de disposer d’une source d’eau chaude bien à soi, il faut impérativement chauffer son eau de consommation. C’est pourquoi on peut utiliser un système à associer à un chauffage d’eau sanitaire classique (ou à un chauffage électrique).</p>
				 		<p>Il s’agit bien entendu du chauffe eau qui permet de disposer d’une eau chaude, soit en la chauffant à la volée soit en la chauffant et en la stockant pour une utilisation ultérieure. Nous vous proposons une mise en perspective des différents modèles, pour que vous puissiez calculer le prix d’un chauffe eau selon vos besoins.</p>
				 	</div>
				 </div>
			</div>
	</div>
</section>
 @endsection
  @section('additional-script')
   
  @endsection