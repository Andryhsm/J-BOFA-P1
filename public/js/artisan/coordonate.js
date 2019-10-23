$(document).ready(function() {
	$('.profil_page').on('click','.save_profil',function(e){
		e.preventDefault();
		var value = true;
		var siret = $('.profil_page').find('input[name="siret"]').val();
		var enterprise = $('.profil_page').find('input[name="enterprise"]').val();
		var email = $('.profil_page').find('input[name="email"]').val();
		var address = $('.profil_page').find('input[name="address"]').val();
		var gender = $('.profil_page').find('#gender').val();
		var metier = $('.profil_page').find('#metier').val();
		if(metier=="choisissez"){
			value=false;
			$('.profil_page').find('#metier').focus();
		}
		if(address==""){
			value=false;
			$('.profil_page').find('input[name="address"]').focus();
		}
		if(siret==""){
			value=false;
			$('.profil_page').find('input[name="siret"]').focus();
		}
		if(email==""){
			value=false;
			$('.profil_page').find('input[name="email"]').focus();
		}
		if(gender=="choisissez"){
			value=false;
			$('.profil_page').find('#gender').focus();
		}
		if(enterprise=="choisissez"){
			value=false;
			$('.profil_page').find('input[name="enterprise"]').focus();
		}
		if(value==true){
			toastr.success('Information enregistré !');
			$(this).siblings().trigger('click');
		}else{
			toastr.warning('Veuillez completer les champs requis !');
		}
		
	});
});