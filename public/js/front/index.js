
$(document).ready(function(){
	var currencies=[];
	$('.slider').on('keyup', '#recherche', function(){
		currencies = [
		    'Architecte-permis de construire', 
			'Plomberie -sanitaires',
			'Plomberie -chauffage', 
			'Panneaux solaires ',
			'Piscine-abri de piscine', 
			'Porte-fenêtre',
			'Électricité-alarme', 
			'Rénovation Intérieure',
			'Chauffage -climatisation -ventilation', 
			'Construction -grros œuvres',
			'Cuisine ',
			'Menuiserie (pvc -Alu-bois)',
			'Maçonnerie -démolition' ,
			'Isolation intérieure /extérieure',
			'Couverture -toiture -charpente' ,
			'Salle de bain-spa' ,
			'Peinture -décoration ',
			'Ramonage de cheminée' ,
			'Jardinage -clôture-portail', 
			'Sol -carrelage -parquet' ,
			'Véranda' ,
			'Diagnostic immobilier', 
			'Entretien et traitement',
			'Escalier' ,
			'Énergies renouvelables'
		];
		var data = $(this).val();
		var position = [];
		currencies.forEach(function(dataEl, index){
  			var numero = dataEl.indexOf(data);
  			var dataLow = dataEl.toLowerCase();
  			var numeroLow = dataLow.indexOf(data);
  			var dataUp = dataEl.toUpperCase();
  			var numeroUp = dataUp.indexOf(data);
  			if (numero == 0 || numeroUp == 0 || numeroLow == 0) {
  				position.push(index);
  				var dropdown = '<li class="rechercheVal">'+currencies[index]+'</li>';
  				$('#ul').append(dropdown);
  				$('#ul').css('display', 'block');
  				$('#ul').css('margin-top', '65px');
  				console.log(position)
  			}
  			if (data == "") {
  				$('#ul').html("");
  				$('#ul').css('display', 'none');
  			}
  		});
    });
    $('.slider').on('click', '.rechercheVal', function(){
		var value = $(this).text();
		console.log(value);
		$(this).closest('#ul').siblings('#parent').find('input').val(value);
		$('#recherche1').css('display', 'none');

	});
  

});