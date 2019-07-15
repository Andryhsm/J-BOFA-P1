
$(document).ready(function(){
	var currencies=[];
	var position= [];
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
  			$('#ul').html("");
		currencies.forEach(function(dataEl, index){
  			var numero = dataEl.indexOf(data);
  			var dataLow = dataEl.toLowerCase();
  			var numeroLow = dataLow.indexOf(data);
  			var dataUp = dataEl.toUpperCase();
  			var numeroUp = dataUp.indexOf(data);
  			var value_data = new RegExp(data);
  			var value_dataLow = new RegExp(data.toLowerCase);
  			var value_dataUp = new RegExp(data.toLowerCase);
  			if(value_data.test(currencies[index]) || value_dataLow.test(currencies[index]) || value_dataUp.test(currencies[index]) || numeroLow == 0 || numeroUp==0 || data.toLowerCase() == 0 || data.toUpperCase()==0){
  				position.push(index);

  				var dropdown = '<li class="rechercheVal">'+currencies[index]+'</li>';
  				$('#ul').append(dropdown);
  				$('#ul').css('display', 'block');
  				$('#ul').css('margin-top', '65px');
  			}
  			if (data == "") {
  				$('#ul').html("");
  				$('#ul').css('display', 'none');
  			}
  		});
    });
    $('.slider').on('click', '.rechercheVal', function(){
		var value = $(this).text();
		$(this).closest('#ul').siblings('#parent').find('input').val(value);
		$('#ul').css('display', 'none');

	});


});

