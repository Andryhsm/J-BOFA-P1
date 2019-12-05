<div class="detail_item">
	<h5 class="title">{{$project_details[0]->category->name}}</h5>
	<p class="d-flex">
		<span>Date de la demande:  </span>
		<span> {{ $project_details[0]->created_at }} </span>
	</p>
	<div class="description_item">
	    <p for="" class="description_project d-flex justify-content-center">Je souhaite réaliser un désembouage pour un {{$project_details[0]->category->name}}.</p>
	</div>

	<div class="btn_action_item">
		@if(count($project_accepteds) != 0)
			Projet déjà accepté
		@else
			<form action="{{route('accept_project')}}" method="POST">
				{!! csrf_field() !!}
		      	<input type="hidden" name="project" value="{{$project_details[0]->project_id}}">
		      	<input type="hidden" name="user" value="{{auth()->user()->id}}">
		      	<button >Accepter</button> 
	        </form>
        @endif
     <!--  <a href=""  name="" class="btn_view_project_detail d-flex justify-content-center align-items-center">
        <span>Accepter</span>
      </a> -->
    </div>
</div>

<div class="detail_item">
	<h5 class="title d-flex justify-content-center">Informations pratiques</h5>
	<p class="centered_label_info d-flex">
		<span class="label">Projet:</span>
		<span class="info">{{ $project_details[0]->category->name }}</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">Nom du client:</span>
		<span class="info">{{ ($project_details[0]->gender == 1) ? "Mr" : "Mme" }} {{ $project_details[0]->first_name }} {{ $project_details[0]->last_name }}</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">Téléphone:</span>
		<span class="info">{{ $project_details[0]->phone }}</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">Email:</span>
		<span class="info">{{ $project_details[0]->email }}</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">Type de client:</span>
		<span class="info">{{ $project_details[0]->category_type1 }}</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">Type d'habitation:</span>
		<span class="info">{{ $project_details[0]->batiment }}</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">But de la demande:</span>
		<span class="info">Demande concrète: recevoir  des devis pour réaliser mes travaux</span>
	</p>
</div>

<!-- <div class="detail_item">
	<h5 class="title d-flex justify-content-center">Informations géographique</h5>
	<p class="centered_label_info d-flex">
		<span class="label">Référence:</span>
		<span class="info">J365488</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">Début du projet:</span>
		<span class="info">Immédiat</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">Type de client:</span>
		<span class="info">Particulier propriétaire</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">Type d'habitation:</span>
		<span class="info">Ancien</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">But de la demande:</span>
		<span class="info">Demande concrète: recevoir  des devis pour réaliser mes travaux</span>
	</p>
</div> -->