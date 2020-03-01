
$(document).ready(function(){
	var currencies=[];
  var ids =[];
	var position= [];

	$.ajax({
        type: "GET",
        url: base_url + 'category',
        success: function (success) {
          console.log(success[0])
            for (var i = 0; i < success.length; i++) {
            	currencies.push(success[i].name);
              ids.push(success[i].id);
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
	$('.slider').on('keyup', '#recherche', function(){

		var data = $(this).val();
		$('#ul').html("");
  		var trie = [];
		currencies.forEach(function(dataEl, index){
  			// var numero = dataEl.indexOf(data);
  			// var dataLow = dataEl.toLowerCase();
  			// var numeroLow = dataLow.indexOf(data);
  			// var dataUp = dataEl.toUpperCase();
  			// var numeroUp = dataUp.indexOf(data);
  			// var value_data = new RegExp(data);
  			// var value_dataLow = new RegExp(data.toLowerCase);
  			// var value_dataUp = new RegExp(data.toLowerCase);
  			// if(value_dataLow.test(currencies[index]) || value_dataUp.test(currencies[index]) || numeroLow == 0 || numeroUp==0 || data.toLowerCase() == 0 || data.toUpperCase()==0){
  			// 	//position.push(index);
  			// 	var dropdown = '<a href="'+base_url+'view_project/'+ids[index]+'"><li class="rechercheVal" data-id="'+ids[index]+'">'+currencies[index]+'</li></a>';
  			// 	trie.push(dropdown);
  			// }

        var lengthData = data.length;
        if (data.localeCompare(currencies[index].substring(0, lengthData), 'en', {sensitivity: 'base'}) == 0){
          //var dropdown = '<a href="'+base_url+'view_project/'+ids[index]+'"><li class="rechercheVal" data-id="'+ids[index]+'">'+currencies[index]+'</li></a>';
          trie.push(currencies[index]+"####"+ids[index]);
        }
  			
  		});
      trie = trie.sort();
  		if(trie.length>0){
  			for(var k=0;k<trie.length;k++){
          var tabTemp = trie[k].split('####');
          var dropdown = '<a href="'+base_url+'view_project/'+tabTemp[1]+'"><li class="rechercheVal" data-id="'+tabTemp[1]+'">'+tabTemp[0]+'</li></a>';
  				$('#ul').append(dropdown);
  				$('#ul').css('display', 'block');
  				$('#ul').css('margin-top', '0.5rem');
  			}
  		}
  		if (data == "") {
				$('#ul').html("");
				$('#ul').css('display', 'none');
			}
  		//console.log(trie.reverse())
    });
    $('.slider').on('click', '.rechercheVal', function(){
  		var value = $(this).text();
  		$(this).closest('#ul').siblings('#parent').find('#recherche').val(value);
  		$('#ul').css('display', 'none');

  	});

    /*$('.inscription').on('keyup','#postal_code',function(data){
      $('#ville').trigger('change');
	     data = $(this).val();
      console.log('postal_code',data)
	     if(data!=""){
	      getVille(data);
	    }
	    else{
	      $('#ville').html("");
	      $('#ville').prop('disabled',true);
	    }
    });*/
    $('.inscription').on('change','#postal_code',function(data){
      //$('#ville').trigger('change');
       data = $(this).val();
      console.log('postal_code',data)
       if(data!=""){
        getVille(data);
      }
      else{
        $('#ville').html("");
        $('#ville').prop('disabled',true);
      }
    });

    /*$('.form_item_project').on('keyup','#postal_code',function(data){
       data = $(this).val();
       if(data!=""){
        getVille(data);
      }
      else{
        $('#ville').html("");
        $('#ville').prop('disabled',true);
      }
    });*/
    $('.form_item_project').on('change','#postal_code',function(data){
       data = $(this).val();
       if(data!=""){
        getVille(data);
      }
      else{
        $('#ville').html("");
        $('#ville').prop('disabled',true);
      }
    });
    /*$('.container_view_project').on('keyup','#postal_code',function(data){
	     data = $(this).val();
       console.log(data);
	     if(data!=""){
	      getVille(data);
	    }
	    else{
	      $('#ville').html("");
	      $('#ville').prop('disabled',true);
	    }
    });*/
    $('.container_view_project').on('change','#postal_code',function(data){
       data = $(this).val();
       console.log(data);
       if(data!=""){
        getVille(data);
      }
      else{
        $('#ville').html("");
        $('#ville').prop('disabled',true);
      }
    });

    $('.inscription, .form_item_project, .container_view_project').on('mousedown','.select-button',function(data){
      $(this).siblings('.dropdown-option').toggleClass('active');
    });

    $('.inscription, .form_item_project, .container_view_project').on('click','.dropdown-option li',function(data){
      var dataSelected = $(this).attr('data-value');
      var dataText = $(this).text();
      var dataId = $(this).data('value');

      $(this).closest('.dropdown-option').siblings('.select-button').text(dataText);
      $(this).closest('.dropdown-option').removeClass('active');
      $(this).closest('.dropdown-option').closest('.dropdown-wrapper').siblings('#ville').val(dataId);
      console.log("ville_id",$(this).closest('.dropdown-option').closest('.dropdown-wrapper').siblings('#ville').val())
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

function getVille(data){

	// $.ajax({
 //    type: "GET",
 //    url: base_url + 'cities',
 //    data: {'code_postal':data},
 //    success: function (success) {
 //        // $('#ville').html("");
 //        // $('#ville').prop("selected",true);
 //        // $('#ville').removeAttr("disabled");

 //        var dropDownVille = $('.select-button[data-input="ville"]').siblings('.dropdown-option');
 //        dropDownVille.html("");

 //        for (var i = 0; i < success.length; i++) {
 //          //console.log(data)
 //          //var dropdown = '<option value="'+success[i].ville_id+'" >'+success[i].ville_nom+'</option>';
 //          //$('#ville').append(dropdown);
 //          //console.log('postal_code',success[i].ville_nom);
          
 //          var dropdownList = '<li data-value="' + success[i].ville_id + '">' + success[i].ville_nom + '</li>';
 //          dropDownVille.append(dropdownList);
 //        }

 //        if(!dropDownVille.hasClass('active')) dropDownVille.addClass('active');
        
 //    },
 //    error: function (error) {
 //        console.log(error);
 //    }
 //  });
 $.ajax({
    type: "GET",
    url: base_url + 'cities',
    data: {'code_postal':data},
    success: function (success) {
        //console.log('data',success)
        $('#ville').html("");
        //$('#ville').prop("selected",false);
        $('#ville').removeAttr("disabled");
        $('#ville').append('<option value="selectionnez"> Sélectionnez une ville ...</option>');
        for (var i = 0; i < success.length; i++) {
          //console.log(data)
          var dropdown = '<option value="'+success[i].ville_id+'" >'+success[i].ville_nom+'</option>';
          $('#ville').append(dropdown);
          $('#ville').trigger('select');
          //console.log('postal_code',success[i].ville_nom);
        }
        // if($('#ville').hasAttr("disabled")){
        //   $('#ville').append('<option value="selectionnez"> Sélectionnez une ville ...</option>');
        // }
    },
    error: function (error) {
        console.log(error);
    }
  });
}
