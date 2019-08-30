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
  // $("#form-artisan").validate({
  //   rules : {
  //     name : {
  //       required : true
  //     },
  //     first_name : {
  //       required : true
  //     },
  //     email : {
  //       required : true,
  //       mail : true
  //     },  
  //     phone : {
  //       required : true
  //     },
  //     password : {
  //       required : true
  //     },
  //     confirmPassword: {
  //         equalTo: "#password"
  //     }
  //   },
  //   messages : {
  //     name : "Veuillez ajouter un nom",
  //     first_name : "Veuillez ajouter un prenom",
  //     email : "L'email est incorrect",
  //     phone : "Veuillez fournir un numéro téléphone",
  //     password : "Veuillez renseigner le mot de passe",
  //     confirmPassword : "Les deux mots de passe ne sont pas identique"
  //   },
  //   submitHandler: function(form) {
  //     form.submit();
  //   }
 // });
});