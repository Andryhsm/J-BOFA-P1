$(document).ready(function() {
      $("#form-profil").validate({
      rules : {
        inputName : {
          required : true
        },
        inputEmail : {
          required : true,
          mail : true
        },  
        inputPhone : {
          required : true
        },
        inputPassword : {
          required : true
        },
        inputConfirmPassword: {
            equalTo: "#inputPassword"
        }
      },
      messages : {
        inputName : "Veuillez fournir un nom",
        inputEmail : "L'email est incorrect",
        inputPhone : "Veuillez fournir un numéro téléphone",
        inputPassword : "Veuillez renseigner le mot de passe",
        inputConfirmPassword : "Les deux mots de passe ne sont pas identique"
      },
      submitHandler: function(form) {
        form.submit();
      }
     });

      $('.user-update').on('keyup','#inputName',function(){
          $last = $('.user-update .profile-username').text();
          if($(this).val()!=""){
            $('.user-update .profile-username').text($(this).val());
          }else{
            $('.user-update .profile-username').text($last);
          }
      });
      $('#inputPhoto').on('change', function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.user-update .img-profil').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(this.files[0]);
        }
      });

    });