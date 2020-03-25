$(document).ready(function() {
  
  
  $('#form-artisan').on('keyup','input[name="email"]',function(data){
    data = $(this).val();
    $.ajax({
      type : "GET",
      url : base_url+'get_email',
      data : {'emails':data},
      success : function(succes){
        if(succes.length>0){
          toastr.warning('Email déjà exist');
          $('#form-artisan').find('input[name="email"]').val('');
        }
       // console.log(data,succes.length)
      },
      error : function(error){
        console.log(error)
      }
    });
  });
  $('#form-artisan').on('change','input[name="password"]',function(data){
        data = $(this).val();
        var confirm = $('#form-artisan').find('input[name="confirmPassword"]').val();
        if(confirm!="" && confirm!=data){
            toastr.error('Les 2 mot de passe ne sont pas identique');
            $('#form-artisan').find('input[name="confirmPassword"]').val('');
            $('#form-artisan').find('input[name="confirmPassword"]').focus();
        }
  });
  
  $('#form-artisan').on('change','input[name="confirmPassword"]',function(data){
        data = $(this).val();
        var confirm = $('#form-artisan').find('input[name="password"]').val();
        if(confirm!="" && confirm!=data){
            toastr.error('Les 2 mot de passe ne sont pas identique');
            $(this).val('');
            $(this).focus();
        }
  });
  
  $('#form-artisan').on('click','#valider',function(e){
     e.preventDefault(); 
     var city = $('#form-artisan').find('#ville').val();
     var category = $('#form-artisan').find('#category').val();
     var values = true;
     if(city=="" || city=="selectionnez"){
         values=false;
         toastr.error('Veillez séléctionner une ville !');
         $('#form-artisan').find('#ville').focus();
     }
     if(category=="" || category=="selectionnez"){
         values=false;
         toastr.error('Veillez séléctionner une catégorie !');
         $('#form-artisan').find('#category').focus();
     }
     if(values){
         $(this).siblings('input').trigger('click');
     }
     //alert('023');
  });
  
  /* $("#form-artisan").validate({
     rules : {
       name : {
         required : true
       },
       first_name : {
         required : true
       },
       email : {
         required : true,
         mail : true
       },  
       phone : {
         required : true
       },
       password : {
        required : true
       },
       confirmPassword: {
          equalTo: "#password"
       }
     },
     messages : {
       name : "Veuillez ajouter un nom",
       first_name : "Veuillez ajouter un prenom",
       email : "L'email est incorrect",
       phone : "Veuillez fournir un numéro téléphone",
       password : "Veuillez renseigner le mot de passe",
       confirmPassword : "Les deux mots de passe ne sont pas identique"
    },
     submitHandler: function(form) {
       form.submit();
     }
  });*/
});