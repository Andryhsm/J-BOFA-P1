<div class="detail_item">
	<h5 class="title">{{$project->category->name}}</h5>
	<p class="d-flex">
		<span>Date de la demande:  </span>
		<span> {{ $project->created_at }} </span>
	</p>
	<div class="description_item">
	    <p for="" class="description_project d-flex justify-content-center">Je souhaite réaliser un désembouage pour un radiateurs électrique.</p>
	</div>

	<div class="btn_action_item">
		<form action="{{route('accept_project')}}" method="POST">
			{!! csrf_field() !!}
	      	<input type="hidden" name="project" value="{{$project->id}}">
	      	<input type="hidden" name="user" value="{{auth()->user()->id}}">
	      	<button >Accepter</button> 
        </form>
     <!--  <a href=""  name="" class="btn_view_project_detail d-flex justify-content-center align-items-center">
        <span>Accepter</span>
      </a> -->
    </div>
</div>

<div class="detail_item">
	<h5 class="title d-flex justify-content-center">Informations pratiques</h5>
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
		<span class="info">{{ $project->category_type1 }}</span>
	</p>
	<p class="centered_label_info d-flex">
		<span class="label">Type d'habitation:</span>
		<span class="info">{{ $project->batiment }}</span>
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