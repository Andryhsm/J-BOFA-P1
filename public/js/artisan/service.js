$(document).ready(function() {
	$('.item_service').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.item_service').removeClass('current_flex');
		$('.item_service').find('.icones_more_servie').removeClass('active');
		$('.pagination_service').removeClass('current');

		$(this).addClass('current_flex');
		$(this).find('.icones_more_servie').addClass('active');
		$("#"+tab_id).addClass('current');
	});
});