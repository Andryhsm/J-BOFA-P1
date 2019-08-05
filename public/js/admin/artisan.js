
jQuery(document).ready(function () {

    

    var table;

    if (jQuery('#artisan').length > 0) {
        table = jQuery('#artisan').on('preXhr.dt', function ( e, settings, data ) {
            } )
            .dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {   
                "url": base_url+"admin/get_artisan",
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
                {data: 'phone', name:'phone',searchable: true, sortable:true}
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
});