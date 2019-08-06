$(document).ready(function() {

  $('#header_page').on('click', '.responsive_menus', function() {
    $(this).toggleClass('active');
    $(this).find('.dropdown_menus_resp').toggleClass('active');
  });

  $('.dropdown_menus_resp').mouseover(function(){
    $(this).toggleClass('active');
  });

  if($('.dropdown_menus_resp').hasClass('active')){
    $('.responsive_menus').addClass('active');
  }
  else {
    $('.responsive_menus').removeClass('active');
  }

  /**asina class active fotsiny le "li rehefa clickena dia mbola mila gerena kel le mampiseo dropdown"*/
});
