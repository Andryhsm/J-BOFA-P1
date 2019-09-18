$(document).ready(function(){
  /*activation step*/
  $('.btn_next_page').on('click', '#btn-step-1', function() {
    console.log("click activé");
    var effectue = true;
    var batiment_type = $('.container_view_project').find('#batiment_type').val();
    var energie_type = $('.container_view_project').find('#energie_type').val();
    console.log(batiment_type);
    var postal = $('.container_view_project').find('#postal_code').val();
    var batiment_type = $('.container_view_project').find('#batiment_type').val();
    
    if(energie_type=="Choisissez..." || energie_type==""){
      $('.container_view_project').find('#energie_type').focus();
      effectue = false;
    }
    if(batiment_type=="Choisissez..." || batiment_type==""){
      $('.container_view_project').find('#batiment_type').focus();
      effectue = false;
    }
    if(postal==""){
      $('.container_view_project').find('#postal_code').focus();
      effectue = false;
    }
    // console.log($(this).closest('.btn_next_page').closest('#step-1').siblings('#step-2').html());
    if(effectue == false){
      //alert('vide');
    }else{
      $(this).closest('.btn_next_page').closest('#step-1').removeClass('active');
      $(this).closest('.btn_next_page').closest('#step-1').siblings('#step-2').addClass('active');
    }
    
  });
  // activation step 2
  $('.btn_next_page').on('click', '#btn-step-3', function() {
    var value = true;
    // console.log($(this).closest('.btn_next_page').closest('#step-1').siblings('#step-2').html());
    var sel1 = $('.container_view_project').find('#sel1').val();
    var sel2 = $('.container_view_project').find('#sel2').val();
    var horaire = $('.container_view_project').find('#horaire').val();
    var name = $('.container_view_project').find('#last_name').val();
    var first_name = $('.container_view_project').find('#first_name').val();
    var email = $('.container_view_project').find('#email').val();
    var phone = $('.container_view_project').find('#phone').val();
    if(horaire=="" || horaire=="selectionnez"){
      $('.container_view_project').find('#horaire').focus();
      value=false;
    }
    if(email==""){
      value = false;
      $('.container_view_project').find('#email').focus();
    }
    if(phone==""){
      value = false;
      $('.container_view_project').find('#phone').focus();
    }
    
    if(sel2=="" || sel2=="selectionnez"){
      $('.container_view_project').find('#sel2').focus();
      value = false;
    }
    if(sel1=="" || sel1=="selectionnez"){
      $('.container_view_project').find('#sel1').focus();
      value = false;
    }
    var gender = $('.container_view_project').find('#gender').siblings('input').val();
    
    if(first_name==""){
      value = false;
      $('.container_view_project').find('#first_name').focus();
    }
    if(name==""){
      value = false;
      $('.container_view_project').find('#last_name').focus();
    }
    if(gender == ""){
      $('.container_view_project').find('#gender #mr').focus();
      toastr.warning('Veuillez selectionnez votre civilité');
      value = false;
    }
    
    if(value==true){
      $(this).closest('.btn_next_page').closest('#step-3').removeClass('active');
      $(this).closest('.btn_next_page').closest('#step-3').siblings('#step-3').addClass('active');
      setTimeout(
        save($(this)),
         10000);
    }
    
  });

  $('.container_view_project').find('#travaux_type .item_radio_step1').on('click','input',function(){
    var value = $(this).siblings('label').text();
    console.log(value)
    $(this).closest('.item_radio_step1').siblings('input').val(value);
  });
  $('.container_view_project').find('#gender .item_radio_step2').on('click','input',function(){
    var value = $(this).siblings('label').text();
    console.log(value)
    if(value=="Monsieur"){
      $(this).closest('.champ_item_step2').siblings('input').val(1);
    }else{
      $(this).closest('.champ_item_step2').siblings('input').val(2);
    }
    
  });
  $('.container_view_project').find('#chauffeau .item_radio_step1').on('click','input',function(){
    var value = $(this).siblings('label').text();
    if(value=="oui"){
      $(this).closest('.item_radio_step1').siblings('input').val(1);
    }else{
      $(this).closest('.item_radio_step1').siblings('input').val(0);
    }
    
  });
  $('.container_view_project').find('#prestation .item_radio_step1').on('click','input',function(){
    var value = $(this).siblings('label').text();
    console.log(value)
    $(this).closest('.item_radio_step1').siblings('input').val(value);
  });

  // $('.btn_next_page').on('click', '#btn-step-3', function() {
  //   $(this).siblings('#valide').trigger('click');
  // });

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
  $('.container_view_project').on('keyup', '#recherche', function(){

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
        if( value_dataLow.test(currencies[index]) || value_dataUp.test(currencies[index]) || numeroLow == 0 || numeroUp==0 || data.toLowerCase() == 0 || data.toUpperCase()==0){
          position.push(index);
          var dropdown = '<a href="'+base_url+'view_project/'+ids[index]+'"><li class="rechercheVal" data-id="'+ids[index]+'">'+currencies[index]+'</li></a>';
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
      //console.log(trie.reverse())
    });
    $('.slider').on('click', '.rechercheVal', function(){
    var value = $(this).text();
    $(this).closest('#ul').siblings('#parent').find('input').val(value);
    $('#ul').css('display', 'none');

  });


});
function save(parent){
  toastr.success('Devis enregistré !');
  parent.siblings('#valide').trigger('click')
}
