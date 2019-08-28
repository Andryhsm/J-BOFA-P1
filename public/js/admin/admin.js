
jQuery(document).ready(function () {

    

    var table;

    if (jQuery('#admin').length > 0) {
        table = jQuery('#admin').on('preXhr.dt', function ( e, settings, data ) {
            } )
            .dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {   
                "url": base_url+"admin/get_Admin",
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
                {data: 'last_name', name:'last_name',searchable: true, sortable: true},
                {data: 'email', name:'email',searchable: true, sortable: true},
                {data: 'phone', name:'phone',searchable: true, sortable:true},
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
    $('.select-brand, .select-product-status, .select-product-manager').popover({
        trigger: "hover"    
    });
    if (jQuery('.dataTables_filter').length > 0) {
        jQuery('.dataTables_filter').find('input').addClass('form-control')
    }

    $('#admin').on('click','.form-check-input',function(){
        var admin_id = $(this).closest('.switch').data('id');
        
        $.ajax({
            type: "POST",
            data: {'admin_id':admin_id},
            url: base_url + 'admin/admin_status',
            success: function (success) {
                if (success.status == 1){
                    toastr.success('Utilisateur activé');
                }
                else{
                    toastr.warning('Utilisateur desactivé');
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    });

    $(document).on('click', '.delete-btn', function(event) {
        event.preventDefault();
        var $form = jQuery(this).closest('form');
        $('#confirm').modal({backdrop: 'static', keyboard: false})
                .one('click', '#delete', function () {
                $form.trigger('submit'); // submit the form
        });
    });
});