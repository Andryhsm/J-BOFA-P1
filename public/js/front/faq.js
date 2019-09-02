$(document).ready(function(){
	
	$('.item_menu').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.item_menu').removeClass('current');
		$('.content_faq').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

});