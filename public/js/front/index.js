
$(document).ready(function(){
	var currencies=[];
	var position= [];
	$.ajax({
        type: "GET",
        url: base_url + 'category',
        success: function (success) {
            for (var i = 0; i < success.length; i++) {
            	currencies.push(success[i].name);
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
	$('.slider').on('keyup', '#recherche', function(){
		// currencies = [
		//     'Architecte-permis de construire',
		// 	'Plomberie -sanitaires',
		// 	'Plomberie -chauffage',
		// 	'Panneaux solaires ',
		// 	'Piscine-abri de piscine',
		// 	'Porte-fenêtre',
		// 	'Électricité-alarme',
		// 	'Rénovation Intérieure',
		// 	'Chauffage -climatisation -ventilation',
		// 	'Construction -grros œuvres',
		// 	'Cuisine ',
		// 	'Menuiserie (pvc -Alu-bois)',
		// 	'Maçonnerie -démolition' ,
		// 	'Isolation intérieure /extérieure',
		// 	'Couverture -toiture -charpente' ,
		// 	'Salle de bain-spa' ,
		// 	'Peinture -décoration ',
		// 	'Ramonage de cheminée' ,
		// 	'Jardinage -clôture-portail',
		// 	'Sol -carrelage -parquet' ,
		// 	'Véranda' ,
		// 	'Diagnostic immobilier',
		// 	'Entretien et traitement',
		// 	'Escalier' ,
		// 	'Énergies renouvelables'
		// ];
		//console.log(currencies);

		var data = $(this).val();
		$('#ul').html("");
  		var trie = [];
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
  				trie.push(dropdown);
  			}
  			
  		});
  		if(trie.length>0){
  			for(var k=0;k<trie.sort().length;k++){
  				$('#ul').append(trie[k]);
  				$('#ul').css('display', 'block');
  				$('#ul').css('margin-top', '0.5rem');
  			}
  		}
  		if (data == "") {
  				$('#ul').html("");
  				$('#ul').css('display', 'none');
  			}
  		console.log(trie.reverse())
    });
    $('.slider').on('click', '.rechercheVal', function(){
		var value = $(this).text();
		$(this).closest('#ul').siblings('#parent').find('input').val(value);
		$('#ul').css('display', 'none');

	});


});

// $(document).onScroll('.login_foat', function(){
// 	console.log("scrokll page");
// 	$(this).css('display', 'none');
// });

$(window).scroll(function () {
	if ($(this).scrollTop() > 100) {
    $('.login_foat').css('display', 'none');
	 }
	 else {
	 	$('.login_foat').css('display', 'block');
	 }
});
