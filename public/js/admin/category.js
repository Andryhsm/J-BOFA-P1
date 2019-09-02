
jQuery(document).ready(function () {

    $("#form-category").validate({
      rules : {
        name : {
          required : true
        }
      },
      messages : {
        name : "Veuillez fournir un nom de catégorie"
      },
      submitHandler: function(form) {
        form.submit();
      }
     });
    $('.category-update').on('click','#inputStatus',function(){
          if($(this).prop('checked')){
            $(this).siblings().val(1);
          }else{
            $(this).siblings().val(0);
          }
      });

    var table;

    if (jQuery('#category').length > 0) {
        table = jQuery('#category').on('preXhr.dt', function ( e, settings, data ) {
            } )
            .dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {   
                "url": base_url+"admin/get_all",
                "type": "GET",
                succes:function(succes){
                    console.log(status);
                },
                error:function(error){
                    console.log(base_url+"admin/get_all")
                }
            },
            "responsive"   : true,
            "bPaginate"    : true,
            "bLengthChange": true,
            "bFilter"      : false,
            "bInfo"        : true,
            "bAutoWidth"   : false,
            //"order"        : [[2, "desc"]],
            "lengthMenu"   : [20, 40, 60, 80, 100],
            "pageLength"   : 20,
            columns        : [
                {data: 'cat_name', name:'cat_name',searchable: true, sortable: true},
                {data: 'user', name:'created',searchable: true, sortable: true},
                {data: 'created', name:'date',searchable: true, sortable:true},
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
    $('.select-brand, .select-product-status, .select-product-manager').popover({
        trigger: "hover"    
    });
    if (jQuery('.dataTables_filter').length > 0) {
        jQuery('.dataTables_filter').find('input').addClass('form-control')
    }
});