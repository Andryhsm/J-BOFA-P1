$(document).ready(function(){
  /*activation step*/
  $('.btn_next_page').on('click', '#btn-step-1', function() {
    console.log("click activé");
    // console.log($(this).closest('.btn_next_page').closest('#step-1').siblings('#step-2').html());
    $(this).closest('.btn_next_page').closest('#step-1').removeClass('active');
    $(this).closest('.btn_next_page').closest('#step-1').siblings('#step-2').addClass('active');
  });
  // activation step 2
  $('.btn_next_page').on('click', '#btn-step-2', function() {
    console.log("click activé");
    // console.log($(this).closest('.btn_next_page').closest('#step-1').siblings('#step-2').html());
    $(this).closest('.btn_next_page').closest('#step-2').removeClass('active');
    $(this).closest('.btn_next_page').closest('#step-2').siblings('#step-3').addClass('active');
  });
});
