$(document).ready(function() {
  
  $('.inscription').on('keyup','#postal_code',function(data){
     data = $(this).val();
    $.ajax({
        type: "GET",
        url: base_url + 'cities',
        data: data,
        success: function (success) {
          console.log('success',success)
            for (var i = 0; i < success.length; i++) {
              console.log(data)
              console.log('postal_code',success[i].ville_code_postal);
            }
        },
        error: function (error) {
            console.log(error);
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