$(document).ready(function(){

    $("#form-faq").validate({
      rules : {
        content : {
          required : true
        },
        response : {
          required : true
        }
      },
      messages : {
        content : "Veuillez fournir une question",
        response : "Veuillez remplir une reponse"
      },
      submitHandler: function(form) {
        form.submit();
      }
     });
     $('.faq').on('click','#inputStatus',function(){
          if($(this).prop('checked')){
            $(this).siblings().val(1);
          }else{
            $(this).siblings().val(0);
          }
      });
	var table;

    if (jQuery('#example2').length > 0) {
        table = jQuery('#example2').on('preXhr.dt', function ( e, settings, data ) {
            } )
            .dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {   
                "url": base_url+"admin/get_faq",
                "type": "GET"
            },
            "responsive"   : true,
            "bPaginate"    : true,
            "bLengthChange": true,
            "bFilter"      : false,
            "bInfo"        : true,
            "bAutoWidth"   : false,
            //"order"        : [[1, "desc"]],
            "lengthMenu"   : [20, 40, 60, 80, 100],
            "pageLength"   : 20,
            columns        : [
                {data: 'name', name:'name',searchable: true, sortable: true},
                {data: 'question', name:'question',searchable: true, sortable: true},
                {data: 'response', name:'response',searchable: true, sortable:true},
                {data: 'created_at', name:'created_at',searchable: true, sortable:true},
                {data: 'status', name:'status',searchable: true, sortable: false},
                {data: 'action', name:'action',searchable: false, sortable: false}
            ],
            fnDrawCallback : function () {
                var $paginate = this.siblings('.dataTables_paginate');

                if (this.api().data().length <= this.fnSettings()._iDisplayLength) {
                    $paginate.hide();
                }
                else {
                    $paginate.show();
                }
             },
             "language": {
                 "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json",
                 "lengthMenu": "Afficher _MENU_ enregistrements par page",
                 "sProcessing":    "Traitement encours...",
                "zeroRecords": "Rien trouvé",
                "info": "Affichage de l'élement _START_ à _END_ sur _PAGES_ éléments",
                "infoEmpty": "Aucune donnée disponible dans le tableau",
                "infoFiltered": "(filtré à partir du _MAX_ total d'enregistrements)",
                "oPaginate": {
                    "sNext":    "Suivant",
                    "sPrevious": "Précédent"
                }
              }    
        });
    }

});