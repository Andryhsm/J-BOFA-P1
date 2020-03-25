$(document).ready(function() {
	$('.profil_page').on('click','.save_profil',function(e){
		e.preventDefault();
		var value = true;
		var siret = $('.profil_page').find('input[name="name"]').val();
		var enterprise = $('.profil_page').find('input[name="enterprise"]').val();
		var email = $('.profil_page').find('input[name="email"]').val();
		var address = $('.profil_page').find('input[name="subject"]').val();
		var phone = $('.profil_page').find('input[name="phone"]').val();
		var metier = $('.profil_page').find('.info_entreprise').text();

		if(metier==""){
			value=false;
			$('.profil_page').find('.info_entreprise').focus();
		}
		if(address==""){
			value=false;
			$('.profil_page').find('input[name="subject"]').focus();
		}
		if(phone==""){
			value=false;
			$('.profil_page').find('input[name="phone"]').focus();
		}
		if(email==""){
			value=false;
			$('.profil_page').find('input[name="email"]').focus();
		}
		if(enterprise==""){
			value=false;
			$('.profil_page').find('input[name="enterprise"]').focus();
		}
		if(siret==""){
			value=false;
			$('.profil_page').find('input[name="name"]').focus();
		}
		if(value==true){
			toastr.success('Information enregistré !');
			$(this).siblings().trigger('click');
		}else{
			toastr.warning('Veuillez completer les champs requis !');
		}
		
	});
});